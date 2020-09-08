<?php
include("config.php");
if(isset($_POST['reg']))
{
	$fileName = time().'_'.$_FILES['image']['name'];
	$temp_name = $_FILES['image']['tmp_name'];
	if(move_uploaded_file($temp_name,"img/".$fileName)){
	    $uploadedFile = $fileName;
	}
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$dob = $_POST['dob'];
	$create_date = date('Y-m-d');
	mysqli_query($con,"INSERT INTO users VALUES ('','$name','$email','$pass','$dob','$uploadedFile','$create_date')");
}
if(isset($_POST['upregi']))
{	
	$id = $_POST['id'];
	if($_POST['old_img'])
	{
		$uploadedFile = $_POST['old_img'];
	}
	else
	{
		$fileName = time().'_'.$_FILES['image']['name'];
		$temp_name = $_FILES['image']['tmp_name'];
		if(move_uploaded_file($temp_name,"img/".$fileName)){
		    $uploadedFile = $fileName;
		}	
	}	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$dob = $_POST['dob'];
	mysqli_query($con,"UPDATE users SET name = '$name',email = '$email',password = '$pass',dob = '$dob',image = '$uploadedFile' WHERE id='$id')");	
}
?>