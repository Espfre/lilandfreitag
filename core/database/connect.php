<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';

// Create connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

// Check connection
if (!$conn) {
	 die('We seem to have connection issues: ' . mysqli_connect_error());
}
echo "Connected successfully";
?>
