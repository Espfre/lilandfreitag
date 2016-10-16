<?php
//connect to mysql
try {
	$db = new PDO('mysql:host=localhost;dbname=lilandfreitag;charset=utf8mb4', 'root', '',
	array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch(PDOException $ex) {
	echo 'We\'re having connection issues';
}
?>
