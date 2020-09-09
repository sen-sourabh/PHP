<?php
session_start();
session_destroy();
header("location:http://localhost/phpdoc/formajax/index.php");
?>
