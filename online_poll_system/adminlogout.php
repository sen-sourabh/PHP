<?php
session_start();
unset($_SESSION['adminemail']);
echo "<script>window.location='adminlogin.php'</script>";
?>