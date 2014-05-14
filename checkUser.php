<?php
// this will most likely move to a connect.php include
session_start();
define( 'DB_HOST', 'localhost');
	define( 'DB_USER', 'root');
	define( 'DB_PASS', '');
	define( 'DB_NAME', 'cdia');
	
try {
	$connect = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
	$db = new PDO( $connect, DB_USER, DB_PASS );	
} catch ( PDOException $e ) {
	die( "Error connecting to database: " . $e->getMessage() );
}
////

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
$company = explode(',', $_POST['companies']);
$title = explode(',', $_POST['titles']);
for ($i=0; $i < count($company); $i++) {
	${'cur_comp' . ($i+1)} = $company[$i];
	${'cur_title' . ($i+1)} = $title[$i];
}
//get past positions
$past_company = explode(',', $_POST['pastCompanies']);
$past_title = explode(',', $_POST['pastTitles']);
for ($j=0; $j < count($past_company); $j++) {
	${'past_comp' . ($j+1)} = $past_company[$j];
	${'past_title' . ($j+1)} = $past_title[$j];
}

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
	echo 'Welcome Back!';
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
				if (isset($past_comp2)) {
					$query .= ', past2_title = "' . $past_title2 . '", past2_company = "' . $past_comp2 . '"';
				}
				if (isset($past_comp3)) {
					$query .= ', past3_title = "' . $past_title3 . '", past3_company = "' . $past_comp3 . '"';
				}
				$query .= ' WHERE linkedin_url = ?';

				$stmt = $db->prepare($query);
				$result = $stmt->execute(array($linkedinID, $firstName, $lastName, $pictureURL, $location, $email, $row['linkedin_url']));
				if ($result) {
					// give the user access
					$_SESSION['loggedIn'] = 'Yes';
					$_SESSION['userID'] = $linkedinID;
					$found = TRUE;
					echo 'Welcome to our awesome site!';
				} else {
					//user found but something went wrong
					$found = TRUE;
					echo 'DB update failed';					
				}	
			}
		}
		if (!$found) {
			// Their url was not in our db
			echo 'We have no record of you being a CDIA alumnus';
		}
	}
}
?>

