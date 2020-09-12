<?php
session_start();
unset($_SESSION['usersession']);
echo "<script>window.location.href= 'login.php'</script>";
?>