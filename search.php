<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>


<?php
include_once('diet_functions.php');

echo "<html>";
echo "<head><noofoodintakeperday>Search diet</noofoodintakeperday></head>";
echo "<body>";
echo "<h1>Search diet</h1>";
echo "<form method=post action=\"search.php\">";
echo "<table>";
echo "<tr><td>noofoodintakeperday:</td>";
echo "<td><input type=text name=noofoodintakeperday></td>";
echo "<td><input type=submit value=\"Go\"></td></tr>";
echo "</table></form>";

//if user clicks the submit button
if( isset($_REQUEST["noofoodintakeperday"]) )
{
	$noofoodintakeperday = $_REQUEST["noofoodintakeperday"];
	//make the database connection
	$conn  = db_connect();
	
	//create a query: find diets by a noofoodintakeperday or a part of noofoodintakeperday 
	$sql = "SELECT batch, wecall, noofoodintakeperday, dailywater, tips FROM diets ";
	$sql = $sql . " WHERE noofoodintakeperday like '%$noofoodintakeperday%' ";
	$sql_result = $conn -> query($sql);
	$conn -> close();
	echo "<h1>Search Results</h1>";
	display_diets($sql_result);
}

?>
</body>
</html>




