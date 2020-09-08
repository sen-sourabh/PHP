<?php 
$connect = mysqli_connect("localhost", "root", "", "ajax_php");
$data = json_decode(file_get_contents("php://input"));

$bemail = mysqli_real_escape_string($connect, $data->bemail);
$bpass = mysqli_real_escape_string($connect, $data->bpass);
$query = "SELECT * FROM users WHERE users_email='$bemail' AND users_password='$bpass'";
if($res = mysqli_query($connect,$query)){
	$num = mysqli_num_rows($res);
	if($num > 0){
		echo "Logged In";
	}
	else{
		echo "Email or Password Invalid.";
	}
}else{
	echo mysqli_error($connect);
}
?>