<?php
require("config.php");
$article_id = $_GET['article_id'];
mysqli_query($con,"DELETE FROM ppts WHERE ppts_id='$article_id'");
echo "<script>window.location.href= 'articles.php'</script>";
?>