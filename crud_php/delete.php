<?php
require "config.php";
if(isset($_POST['del'])){
	$id = $_POST['id'];
	if(mysqli_query($con, "DELETE FROM users WHERE id='$id'")){
		echo "deleted";
	}else{
		echo mysqli_error($con);
	}
}
?>