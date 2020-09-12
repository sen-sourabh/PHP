<?php
session_start();
unset($_SESSION['adminemail']);
echo "<script>window.location='http://localhost/phpdoc/project/adminlogin.php'</script>";
?>