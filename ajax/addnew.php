<?php
	include('conn.php');
	if(isset($_POST['add'])){
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$image=$_FILES['image_file']['name'];
		$tempname=$_FILES['image_file']['tmp_name'];
		move_uploaded_file($tempname,"img/$image");
 		
		echo "<script>window.alert('image done.')</script>";

		mysqli_query($conn,"insert into user (firstname, lastname, email, phone, image) values ('$firstname', '$lastname', '$email', '$phone', '$image')");
	}
?>