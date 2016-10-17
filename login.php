<?php
include 'core/init.php';

if (empty($_POST) === false) {
	$email = $_POST['email'];
	$password = $_POST['password'];

	if (empty($email) === true  && empty($password) === true) {
			//$errors[] = 'You need to enter a username and password';
			echo 'no password and username';
	} else if (user_exists($email) === false) {
			//$errors[] = 'We can\'t find that email. Have you registered?';
			echo 'we can\'t find that email. have you registered? have you verified?';

	}
}
?>
