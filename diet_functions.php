<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Diet Functions</title>
</head>
<body>

<?php
include_once('config.php');

function display_nutritions($sql_result)
{
	print "<table border = 1>\n";

	//get field names
	print "<tr>\n";
	while ($field = $sql_result -> fetch_field()){
		$fieldname = strtoupper($field->name);
  		print "  <th>$fieldname</th>\n";
	} // end while
	print "</tr>\n\n";

	//get row data as an associative array
	while ($row = $sql_result -> fetch_assoc()){
  		print "<tr>\n";
  		//look at each field
  		$catid = $row["catid"];
  		$catname = $row["catname"];
  		print "  <td><a href='diets.php?catid=$catid&catname=$catname' noofoodintakeperday='diets'>$catid</a></td>\n";
		print "<td>$catname</td>\n";	
  		print "</tr>\n\n";
	}// end while

	print "</table>\n";
}

function display_diets($sql_result)
{
	print "<table border = 1>\n";

	//get field names
	print "<tr>\n";
	while ($field = $sql_result -> fetch_field()){
		$fieldname = strtoupper($field->name);
  		print "  <th>$fieldname</th>\n";
	} // end while
	print "</tr>\n\n";

	//get row data as an associative array
	while ($row = $sql_result -> fetch_assoc()){
  		print "<tr>\n";
  		//look at each field
  		$batch = $row["batch"];
  		$wecall = $row["wecall"];
  		$noofoodintakeperday = $row["noofoodintakeperday"];
  		$dailywater = $row["dailywater"];											//number_format($row["dailywater"],2);
  		$tips = $row["tips"];
		
  		print "  <td><a href='diet_detail.php?batch=$batch&noofoodintakeperday=$noofoodintakeperday' noofoodintakeperday='diet Details'>$batch</a></td>\n";
		if($wecall)
  			print "  <td>$wecall</td>\n";
		else
			print "&nbsp;";	
		if($noofoodintakeperday)
  			print "  <td>$noofoodintakeperday</td>\n";
		else
			print "&nbsp;";	
		print " <td>$dailywater</td>\n";		
		if($tips)
  			print "  <td>$tips</td>\n";
		else
			print "<td>&nbsp;</td>\n";	
  		print "</tr>\n\n";
	}// end while

	print "</table>\n";
	print "<h2>Back to <a href='nutritions.php'>nutritions</a> page</h2>\n";
}

function display_diet_detail($sql_result)
{
	
	print "<table border = 1>\n";

	//get field names
	print "<tr>\n";
	while ($field = $sql_result -> fetch_field()){
		$fieldname = strtoupper($field->name);
		if($fieldname != "CATID" and $fieldname != "CATNAME")
  			print "  <th>$fieldname</th>\n";
	} // end while
	//additional name for a new column to display images 
	print "  <th>IMAGE</th>\n";
	print "</tr>\n\n";

	//get row data as an associative array
	if ($row = $sql_result -> fetch_assoc()){
  		//look at each field
  		$batch = $row["batch"];
  		$wecall = $row["wecall"];
  		$dailywater = $row["dailywater"];            							//number_format($row["dailywater"],2);
  		$tips = $row["tips"];
		//$catid and $catname are only used to go back not for displaying
		$catid = $row["catid"];
		$catname = $row["catname"];
	}

	print "<tr>\n";
	
 	//output
 	print "  <td>$batch</td>\n";
	if($wecall)
		print "  <td>$wecall</td>\n";
	else
		print "&nbsp;";	

	print " <td>$dailywater</td>\n";		

	if($tips)
  		print "  <td>$tips</td>\n";
	else
		print "<td>&nbsp;</td>\n";	
      	
	if (@file_exists('images/'.$batch.'.jpg'))
	{
    	$imagepath = 'images/'.$batch.'.jpg' ;
		print "  <td align=center><img src = $imagepath width=60 height=60></td>\n";
	}
	else
	{
       	print "&nbsp;";
	}
			
  	print "</tr>\n\n";
	print "</table>\n";

	print "<h2>Back to <a href='diets.php?catid=$catid&catname=$catname' noofoodintakeperday='diets'>$catname</a> page</h2>\n";
}

?>

</body>
</html>