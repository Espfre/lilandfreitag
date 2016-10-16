<?php
include 'core/init.php';

//test
//if (user_exists('espen') === true) {
//	echo 'exists';
//} else if (user_exists('espen') === false) {
//	echo 'you have done something wrong';
//}
//die();
//test over

if (empty($_POST) === false) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (empty($username) === true  && empty($password) === true) {
			//$errors[] = 'You need to enter a username and password';
			echo 'no password and username';
	} else if (user_exists($username) === false) {
			//$errors[] = 'We can\'t find that username. Have you registered?';
			echo 'no username';

	}
}
?>
