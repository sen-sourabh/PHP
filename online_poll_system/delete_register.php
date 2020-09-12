<?php
require("configue.php");
$id = $_GET['Id'];
mysqli_query($connection,"DELETE FROM registration WHERE Id='$id'");
echo "<script>window.location.href= 'register_people.php'</script>";
?>