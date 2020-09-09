<?php

	require_once "Facebook/autoload.php";

	$FB = new \Facebook\Facebook([
		'app_id' => '2340306379547022',
		'app_secret' => '4800c874f91dd2a7cc78f1140d29ed04',
		'default_graph_version' => 'v3.3'
	]);

	$helper = $FB->getRedirectLoginHelper();

	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("934508229927-bdikavitk0kp6oe6nbjdc5nstklfbml3.apps.googleusercontent.com");
	$gClient->setClientSecret("fBWx5N1MwDJjyWHvZnF6NIHt");
	$gClient->setApplicationName("design");
	$gClient->setRedirectUri("http://localhost/phpdoc/design/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/gmail.readonly https://www.googleapis.com/auth/userinfo.email");

	$con = mysqli_connect('localhost','root','','websitename');
?>