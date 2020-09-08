<?php 
$connect = mysqli_connect("localhost", "root", "", "ajax_php");
$data = json_decode(file_get_contents("php://input"));

$bname = mysqli_real_escape_string($connect, $data->bname);
$bemail = mysqli_real_escape_string($connect, $data->bemail);
$bpass = mysqli_real_escape_string($connect, $data->bpass);
$query = "INSERT INTO users VALUES ('','$bname','$bemail','$bpass','".date('Y-m-d H:i:s')."','1')";
if(mysqli_query($connect,$query)){
	echo "data Inserted";
}else{
	echo mysqli_error($connect);
}
?>