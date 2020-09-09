<?php
include_once('confige.php');
$Id = $_GET['Id'];
mysqli_query($connection,"DELETE FROM firstInsert WHERE id=$Id");
header("Location: http://localhost/phpdoc/firstProject/viewdata.php");
?>