<?php
// test harness for connect.php library

require_once "/opt/lampp/htdocs/lilandfreitag/core/database/dbinfo.php";

try {
	$dbh = database::connect ();
	echo ("Connected\n");
}
catch (PDOException $e) {
	print ("Cannot connect to server\n");
	print ("Error code: " . $e->getCode () . "\n");
	print ("Error message: " . $e->getMessage () . "\n");
	exit (1);
}
$dbh = NULL;
print ("Disconnected\n");

?>
