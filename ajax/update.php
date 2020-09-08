<?php
	include('conn.php');
	if(isset($_POST['edit'])){
		$id=$_POST['id'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$image=$_FILES['image_file']['name'];
		$tempname=$_FILES['image_file']['tmp_name'];
		move_uploaded_file($tempname,"img/$image");
 
		mysqli_query($conn,"update user set firstname='$firstname', lastname='$lastname', email='$email', phone='$phone', image='$image' where userid='$id'");
	}
?>