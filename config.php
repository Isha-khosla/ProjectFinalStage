<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>

<?php
//define constants for connection info
define("MYSQLUSER","jc468643");
define("MYSQLPASS","Password1");
define("HOSTNAME","localhost");
define("MYSQLDB","jc468643_test1");

//make connection to database
function db_connect()
{
	$conn = @new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);
	if($conn -> connect_error) {
		die('Connect Error: ' . $conn -> connect_error);
	}
	return $conn;
} 
?>
</body>
</html>
