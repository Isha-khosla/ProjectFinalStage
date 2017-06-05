<!doctype html>
<html>
<head>
<link href="basicstyle.css" rel="stylesheet" type="text/css">
<link href="responsive.css" rel="stylesheet"  media="screen and
(max-width: 960px)">

<meta charset="utf-8">
</head>
<body>

<?php
include_once('diet_functions.php');
$catid = $_REQUEST["catid"];
$catname = $_REQUEST["catname"];

//make the database connection
$conn  = db_connect();

//create a query
$sql = "SELECT batch, wecall, noofoodintakeperday, dailywater, tips FROM diets WHERE catid = '$catid' ";
$sql_result = $conn -> query($sql);
$conn -> close();
?>


<!--<noofoodintakeperday>diets</noofoodintakeperday> -->

<?php 
	print "<h1> $catname</h1>\n"; 
	display_diets($sql_result);
?>



<img src="images/diet1.jpg" width="1400" height="900">


</body>
</html>

