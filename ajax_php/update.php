<?php
include("config.php");
if(isset($_POST['update'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$id = $_POST['id'];
	mysqli_query($con,"UPDATE users SET users_name='$name', users_email='$email' WHERE users_id='$id'");
}
?>