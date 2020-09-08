<?php
include("config.php");
$data = json_decode(file_get_contents("php://input"));
$name = mysqli_real_escape_string($con, $data->name);
$email = mysqli_real_escape_string($con, $data->email);
$pass = mysqli_real_escape_string($con, $data->pass);
$date = date('Y-m-d H:i:s');
if($data->btnName == "Save"){
	$sql = "INSERT INTO users (name, email, password, create_date) VALUES ('$name','$email','$pass','$date')";
	if(mysqli_query($con,$sql)){
		echo "Data Submitted.";
	}else{
		echo mysqli_error($con);
	}	
}else if($data->btnName == "Update"){
	$id = mysqli_real_escape_string($con, $data->id);
	$sql = "UPDATE users SET name='$name', email='$email', password='$pass', create_date='$date' WHERE id='$id'";
	if(mysqli_query($con,$sql)){
		echo "Data Updated.";
	}else{
		echo mysqli_error($con);
	}
}

?>