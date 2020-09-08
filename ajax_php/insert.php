<?php
include("config.php");
if(isset($_POST['save'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$date = date('Y-m-d H:i:s');
	$status = 1;
	if(mysqli_query($con,"INSERT INTO users (users_name,users_email,users_password,users_date,users_status) VALUES ('$name','$email','$pass','$date','$status')")){

	}
	else
	{
		echo mysqli_error($con);
	}
}
?>