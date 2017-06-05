
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Diet Detail</title>
</head>
<body>
<?php
include_once('diet_functions.php');
$batch = $_REQUEST["batch"];
$noofoodintakeperday = $_REQUEST["noofoodintakeperday"];

//make the database connection
$conn  = db_connect();

//create a query to get all details of diet
$sql = "SELECT batch, wecall, dailywater, tips, diets.catid, catname";
$sql = $sql . " FROM diets, nutritions WHERE batch = '$batch'";
$sql = $sql . "  and diets.catid =  nutritions.catid";
$sql_result = $conn -> query($sql);
$conn -> close();
?>


<h2><noofoodintakeperday>Chart on specific Batch</noofoodintakeperday></h2>

<?php
	print "<h3>noofoodintakeperday: <i>$noofoodintakeperday</i></h3>\n";
	display_diet_detail($sql_result);
	
?>


<img src="images/diet3.jpg" width="1400" height="900">



</body>
</html>