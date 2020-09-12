<?php
include("config.php");
session_start();
unset($_SESSION['adminuser']);
echo "<script>window.location.href= 'login.php'</script>";
?>