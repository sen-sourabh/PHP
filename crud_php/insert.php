<?php
require "config.php";
if($_POST['insert']){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	
	if(mysqli_query($con, "INSERT INTO users VALUES ('','$name','$email','$pass')")){
		echo 'success';
	}else{
		echo mysqli_error($con);
	}
}
if(isset($_POST['update'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$id = $_POST['id'];
	mysqli_query($con,"UPDATE users SET name='$name', email='$email' WHERE id='$id'");
}
?>