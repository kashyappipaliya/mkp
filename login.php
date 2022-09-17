<?php

$servername="localhost";
$username="root";
$pw="";
$dbname="shopping";
$name = @$_POST['name'];
$password = @$_POST['password'];
		
$conn = new mysqli ($servername , $username , $pw , $dbname );


if($conn->connect_error)
{
	die("connection Fail".$conn->connect_error);
}
else
{
		
	$sql = "SELECT * FROM `users` WHERE `name` = '$name' AND `password` = '$password'";
	
	
	//$sql = "select name , password from users";
if(isset($_POST['submit']))
{
	
	if($conn->query($sql)==TRUE)
		{
			header("Location:./f/index.php");
		}
		else{
			echo "ERROR !!!!!".$conn->error;
		}
	
}
}
?>
