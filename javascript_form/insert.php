<?php
	$con = mysqli_connect("localhost","root","","javascript_form");


	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	// $_FILES['image']['name'] = $_POST['image'];

	$image = preg_replace('/\s+/', '',$_FILES['image']['name']);
	$temp_name = preg_replace('/\s+/', '',$_FILES['image']['tmp_name']);
	move_uploaded_file($temp_name,"img/$image");
	
	mysqli_query($con,"INSERT INTO user VALUES('','$name','$email','$phone','$image')");
?>