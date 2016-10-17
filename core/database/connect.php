<?php
$servername = 'localhost';
$username = 'root';
$password = '';

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
	 die('We seem to have connection issues: ' . mysqli_connect_error());
}
echo "Connected successfully";
?>
