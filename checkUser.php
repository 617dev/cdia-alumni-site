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
$linkedinURL = $_POST['profileURL'];
$linkedinURL = preg_replace("(https?://)", "", $linkedinURL);

// Check to see if user has already 'registered'
$query = 'SELECT linkedin_id, linkedin_url FROM users';
$stmt = $db->prepare($query);
$result = $stmt->execute();
$rows = $stmt->fetchALL(PDO::FETCH_ASSOC);

// if ($rows) {
// 	foreach ($rows as $id) {
// 		if ($id['linkedin_id'] == $linkedinID) {
// 			$_SESSION['loggedIn'] = TRUE;
// 			$_SESSION['userID'] = $linkedinID;
// 			echo 'Welcome Back!';
// 			break;
// 		} else {
// 			//check to see if LinkedIN profileURL is in our DB
// 			foreach ($rows as $url) {
// 				$checkURL = preg_replace("(https?://)", "", $url['linkedin_url']);
// 				if ( $checkURL == $linkedinURL) {
// 					// we have a profile match so add the user's LinkedIn ID to the db
// 					// use the current $url['linkedin_url'] from the loop as that is what matches the entry in the db
// 					$query = 'UPDATE users SET linkedin_id = ? WHERE linkedin_url = ?';
// 					$stmt = $db->prepare($query);
// 					$result = $stmt->execute(array($linkedinID, $url['linkedin_url']));
// 					if ($result) {
// 						// give the user
// 						$_SESSION['loggedIn'] = TRUE;
// 						$_SESSION['userID'] = $linkedinID;
// 						echo 'Welcome!';
// 						break;
// 					} else {
// 						echo 'DB update failed';
// 						break;
// 					}
// 				}
// 			}
// 		}
// 	}
// }
if ($rows) {
	
	foreach ($rows as $row) {
		$checkURL = preg_replace("(https?://)", "", $row['linkedin_url']);
		if ( $checkURL == $linkedinURL) {
			// we have a profile match so check to see if the user's LinkedIn ID is in DB already
			if ( $row['linkedin_id'] == $linkedinID) {
				$_SESSION['loggedIn'] = TRUE;
				$_SESSION['userID'] = $linkedinID;
				echo 'Welcome Back!';
			} else {
				// use the current $url['linkedin_url'] from the loop as that is what matches the entry in the db
				$query = 'UPDATE users SET linkedin_id = ? WHERE linkedin_url = ?';
				$stmt = $db->prepare($query);
				$result = $stmt->execute(array($linkedinID, $row['linkedin_url']));
				if ($result) {
					// give the user
					$_SESSION['loggedIn'] = TRUE;
					$_SESSION['userID'] = $linkedinID;
					echo 'Welcome!';
					break;
				} else {
					echo 'DB update failed';
					break;
				}	
			}		
		}
	}
}
?>