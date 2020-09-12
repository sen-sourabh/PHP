<?php
	require_once "Facebook/autoload.php";

	// if(!session_start()) 
	// {
 //    	session_start();
	// }
	$FB = new \Facebook\Facebook([
		'app_id' => '400804027159248',
		'app_secret' => 'ff31405cf613e059ff16829c93de8fec',
		'default_graph_version' => 'v2.10'
	]);

	$helper = $FB->getRedirectLoginHelper();
	

	$connection = mysqli_connect('localhost','root','','project');

?>