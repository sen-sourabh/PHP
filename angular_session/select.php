<?php
include("config.php");
// $output = array();
$result = mysqli_query($con,"SELECT * FROM users");
if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
		$output[] = $row;
	}
	echo json_encode($output);
}
?>