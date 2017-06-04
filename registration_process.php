<?php
include_once('config.php');

//print_r($_POST);
if(isset($_POST['name'], $_POST['email'], $_POST['mobileno'], $_POST['sex'], $_POST['dob'], $_POST['weight'], $_POST['height'], $_POST['password'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobileno = $_POST['mobileno'];
	$sex = $_POST['sex'];
	$dob = $_POST['dob'];
	$weight = $_POST['weight'];
	$height = $_POST['height'];
	$password = $_POST['password'];

	//make the database connection
	$conn  = db_connect();
	//create an insert query 	
	$sql = "insert into users (name, email, mobileno, sex, dob, weight, height, password) 
			VALUES ('$name', '$email', '$mobileno', '$sex', '$dob', '$weight', '$height', '$password')";
	//execute the query
	if($conn -> query($sql))
	{
		echo "<h1>Welcome to Stay Fit.com</h1>";
		echo "<h1>You are now a member!!</h1>";
		echo "Hi <b>$name</b><br />";
		
		echo "<a href=\"login.php\">You can login now</a>";
	}
	$conn -> close();		
}
else {
	die("Input error");
}
?>

