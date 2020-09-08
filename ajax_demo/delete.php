<?php
include("config.php");
$id = $_POST['id'];
mysqli_query($con,"DELETE FROM users WHERE id='$id'");
?>