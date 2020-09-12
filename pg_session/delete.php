<?php
include("config.php");
session_start();
if(!isset($_SESSION['adminuser'])){
	echo "<script>window.location.href= 'login.php'</script>";
}
$id = $_GET['id'];
pg_query("DELETE FROM users WHERE id='$id'");
echo "<script>window.location.href= 'logout.php'</script>";
?>