<?php
session_start();
include("config.php");
if($_SESSION['google_access_token'])
{
	unset($_SESSION['google_access_token']);
	// echo "<script>window.location='http://localhost/phpdoc/project/index.php'</script>";
}
else if ($_SESSION['access_token'])
{
	// unset($_SESSION['access_token']);
	unset($_SESSION['access_token']);	
}
else
{
	unset($_SESSION['user_define_data']);
}
header('Location: login.php');
?>