<?php
try{
	$demosql = new PDO("mysql:host=localhost;dbname=pdo_session","root","");
	$demosql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){
	echo 'Exception : '.$e->getMessage();
}

?>