<?php
	$con = mysqli_connect("localhost","root","","javascript_form");
	if(isset($_POST['del'])){
		$id=$_POST['id'];
		mysqli_query($con,"delete from user where id='$id'");
	}
?>