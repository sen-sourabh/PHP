<?php
session_start();
include("configue.php");
if($_SESSION['useremail'])
{
	unset($_SESSION['useremail']);
	// echo "<script>window.location='http://localhost/phpdoc/project/index.php'</script>";
}
else
{
	// unset($_SESSION['access_token']);
	unset($_SESSION['access_token']);

	// Remove user data from session
	unset($_SESSION['userData']);	
}
// Redirect to the homepage
	header("Location:index.php");
?>