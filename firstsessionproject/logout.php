<?php
session_start();
session_destroy();
header("location:http://localhost/phpdoc/firstsessionproject/login.php");
?>