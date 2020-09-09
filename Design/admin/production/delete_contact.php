<?php
require("config.php");
$contact_id = $_GET['contact_id'];
mysqli_query($con,"DELETE FROM contact WHERE contact_id='$contact_id'");
echo "<script>window.location.href= 'contacts.php'</script>";
?>