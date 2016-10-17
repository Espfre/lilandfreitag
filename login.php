<?php
include 'core/init.php';

if (empty($_POST) === false) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (empty($username) === true  && empty($password) === true) {
			//$errors[] = 'You need to enter a username and password';
			echo 'no password and username';
	} else if (user_exists($username) === false) {
			//$errors[] = 'We can\'t find that username. Have you registered?';
			echo 'we can\'t fint that username. have you registered?';

	}
}
?>
