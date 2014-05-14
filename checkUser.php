<?php
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

$linkedinID = $_POST['linkedinID'];
$linkedinURL = preg_replace("(https?://)", "", $_POST['profileURL']);
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$pictureURL = $_POST['pictureURL'];
$location = $_POST['location'];
$email = $_POST['email'];

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
	// update our db if necessary
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
				$query = 'UPDATE users SET linkedin_id = ?, first_name = ?, last_name = ?, picture_url = ?, location = ?, email = ? WHERE linkedin_url = ?';
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

