<?php

session_start();
include 'connect.php';

//put posted info into variables
$linkedinID = $_POST['linkedinID'];
//remove http:// and/or http://
$linkedinURL = preg_replace("(https?://)", "", $_POST['profileURL']);
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$pictureURL = $_POST['pictureURL'];
$location = $_POST['location'];
$email = $_POST['email'];
//get current positions
$current = json_decode($_POST['current']);
$number = $current->{'_total'};
for ($i=0; $i < $number; $i++) {
	${'cur_comp' . ($i+1)} = $current->{'values'}[$i]->{'company'}->{'name'};
	${'cur_title' . ($i+1)} = $current->{'values'}[$i]->{'title'};
}
//get past positions
$past = json_decode($_POST['past']);
$past_comp1 = $past->{'values'}[0]->{'company'}->{'name'};
$past_title1 = $past->{'values'}[0]->{'title'};

// Start the login/update process
//look for linkedin_id to see if they are verified
$query = 'SELECT linkedin_id, linkedin_url FROM users WHERE linkedin_id = ?';
$stmt = $db->prepare($query);
$result = $stmt->execute(array($linkedinID));
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($row) {
	//ID found, they are verified
	$_SESSION['loggedIn'] = 'Yes';
	$_SESSION['userID'] = $linkedinID;
	$_SESSION['userName'] = $firstName;
	echo 'access granted';
	// add update our db if we want (same code as below for successful first time registration)
} else {
	//ID not found, check to see if we have their url
	$query = 'SELECT linkedin_id, linkedin_url FROM users';
	$stmt = $db->prepare($query);
	$result = $stmt->execute();
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	if ($rows) {
		$found = FALSE;
		foreach ($rows AS $row) {
			$checkURL = preg_replace("(https?://)", "", $row['linkedin_url']);
			if ($checkURL == $linkedinURL) {
				// they are in our database so verify them by adding their linkedIn ID;
				$query = 'UPDATE users SET linkedin_id = ?, first_name = ?, last_name = ?, picture_url = ?, location = ?, email = ?';
				if (isset($cur_comp1)) {
					$query .= ', current1_title = "' . $cur_title1 . '", current1_company = "' . $cur_comp1 . '"';
				}
				if (isset($cur_comp2)) {
					$query .= ', current2_title = "' . $cur_title2 . '", current2_company = "' . $cur_comp2 . '"';
				}
				if (isset($cur_comp3)) {
					$query .= ', current3_title = "' . $cur_title3 . '", current3_company = "' . $cur_comp3 . '"';
				}
				if (isset($past_comp1)) {
					$query .= ', past1_title = "' . $past_title1 . '", past1_company = "' . $past_comp1 . '"';
				}
				$query .= ' WHERE linkedin_url = ?';
				$stmt = $db->prepare($query);
				$result = $stmt->execute(array($linkedinID, $firstName, $lastName, $pictureURL, $location, $email, $row['linkedin_url']));
				if ($result) {
					// give the user access
					$_SESSION['loggedIn'] = 'Yes';
					$_SESSION['userID'] = $linkedinID;
					$_SESSION['userName'] = $firstName;
					$found = TRUE;
					echo 'access granted';
				} else {
					//user found but something went wrong
					$found = TRUE;
					echo 'DB update failed';					
				}	
			}
		}
		if (!$found) {
			// Their url was not in our db
			echo 'none shall pass';
		}
	}
}

?>

