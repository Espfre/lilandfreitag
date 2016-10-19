<?php
// library file with utility method for connecting to MysqlndUhConnection
// using the PDO module

class database
{
	public static $host_name = "localhost";
	public static $db_name = "lilandfreitag";
	public static $user_name = "root";
	public static $password = "";

	/* Establish a connection to the database, returning a database handle.
	   Raise an exception if the connection cannot be established.
		 In addition, cause exceptions to be raised for errors.
	*/
	public static function connect()
	{
	$dsn = "mysql:host" . self::$host_name . ";dbname" . self::$db_name;
	$dbh = new PDO ($dsn, self::$user_name, self::$password);
	$dbh-> setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return ($dbh);
	}
}
?>
