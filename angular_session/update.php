<?php
include("config.php");
$data = json_decode(file_get_contents("php://input"));
$name = mysqli_real_escape_string($con, $data->name);
$email = mysqli_real_escape_string($con, $data->email);
$id = mysqli_real_escape_string($con, $data->id);

$sql = "UPDATE users SET name='$name', email='$email' WHERE id='$id'";
if(mysqli_query($con,$sql)){
	echo "Data Updated.";
}else{
	echo mysqli_error($con);
}
?>