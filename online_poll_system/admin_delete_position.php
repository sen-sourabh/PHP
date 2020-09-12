<?php
include_once("configue.php");
$Id=$_GET['Id'];
mysqli_query($connection,"DELETE FROM positiontable WHERE Id=$Id");
header("location:position.php");
?>