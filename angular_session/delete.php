<?php
include("config.php");
$data = json_decode(file_get_contents("php://input"));
$id  = mysqli_real_escape_string($con,$data->id);
// $id = $_GET['id'];
$sql = "DELETE FROM users WHERE id='$id'";
if(mysqli_query($con,$sql)){

}
else{
	echo mysqli_error($con);
}
?>