<?php
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
?>