<?php
include_once("confige.php");
$Id=$_GET['Id'];
mysqli_query($connection,"DELETE FROM firstsessioninsert WHERE id=$Id");
header("location:http://localhost/phpdoc/firstsessionproject/viewtable.php");
?>