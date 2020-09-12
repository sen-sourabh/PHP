<?php
include_once("configue.php");
$Id=$_GET['Id'];
mysqli_query($connection,"DELETE FROM reg_for_election WHERE Id=$Id");
header("location:manage_candidate.php");
?>