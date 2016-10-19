<?php
// connect to the database

require_once "/opt/lampp/htdocs/lilandfreitag/core/database/dbinfo.php";

try {
	$dbh = database::connect ();
	print ("Connected\n");
}
catch (PDOException $e) {
	print ("Cannot connect to server\n");
	print ("Error code: " . $e->getCode () . "\n");
	print ("Error message: " . $e->getMessage () . "\n");
	exit (1);
}
?>
