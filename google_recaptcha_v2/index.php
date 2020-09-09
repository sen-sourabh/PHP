<?php
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$secretKey = "6Lc5WKwUAAAAADV5NACtueNvJY_ZLb300_r_-xQ4";
		$responseKey = $_POST['g-recaptcha-response'];
		$userIP = $_SERVER['REMOTE_ADDR'];

		$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
		$response = file_get_contents($url);
		$response = json_decode($response);
		if(	$response->success)
		{
			echo "Verification Successfull.";
		}
		else{
			echo "Verification Failed.";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Google Recaptcha v2</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
<div class="container">
	<form action="index.php" method="post">
		<input class="form-control" type="text" placeholder="What is your name?" name="name" required="required"/>
		<input class="btn btn-primary box-shadow" type="submit" value="Save" name="submit"/>
		<div class="g-recaptcha" data-sitekey="6Lc5WKwUAAAAAJPt9lYs4TugjY5AVjCMQcwkBDvC"></div>
	</form>
</div>
</body>
</html>






