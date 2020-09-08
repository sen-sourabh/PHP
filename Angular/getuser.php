<?php
$connect = mysqli_connect("localhost", "root", "", "ajax_php");
// $str = $_GET['user'];
// $output[] = array();
$result = mysqli_query($connect,"SELECT * FROM users");
if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_array($result)){
		$output[] = $row;
	}
	echo json_encode($output);
}
?>