<?php
include_once("confige.php");
session_start();
if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = mysqli_query($connection,"SELECT * FROM firstsessioninsert WHERE email='$email' && password='$password'");
	$num = mysqli_num_rows($query);

	if($num == 1)
	{
		$_SESSION['email'] = $email;
		header("location:http://localhost/phpdoc/firstsessionproject/viewtable.php");
	}
	else{
		header("location:http://localhost/phpdoc/firstsessionproject/error.php");
	}
}
?>