<?php
require("config.php");
$user_id = $_GET['user_id'];
mysqli_query($con,"DELETE FROM signup WHERE signup_id='$user_id'");
echo "<script>window.location.href= 'users.php'</script>";
?>