<?php
	if($_POST)
	{	
		function getCaptcha($SecretKey)
		{
			$captcha_secret_key = "6LeTo5IUAAAAAKbK5BDR2ggm0okXgVDjOEZsXy29";
			$Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$captcha_secret_key."&response={$SecretKey}");
			$Return = json_decode($Response);
			return $Return;
		}
		$Return = getCaptcha($_POST['g-recaptcha-response']);
		if($Return->success == true && $Return->score > 0.5)
		{
			echo "Verification Success.";
		}
		else
		{
			echo "Verfication Failed.";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Google Recaptcha v3</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	<script src="https://www.google.com/recaptcha/api.js?render=6LeTo5IUAAAAAM_f0eVy1ryL7PJHghxrHnUfHnic"></script>
  <script>
  	
  grecaptcha.ready(function() {
      grecaptcha.execute('6LeTo5IUAAAAAM_f0eVy1ryL7PJHghxrHnUfHnic', {action: 'index'}).then(function(token) {
         document.getElementById('g-recaptcha-response').value = token;
         console.log(token);
      });
  });
  </script>
</head>
<body>
<div class="container">
	<form action="index.php" method="post">
		<input class="form-control" type="text" placeholder="What is your name?" name="name" required="required" />
		<input type="hidden" class="form-control" id="g-recaptcha-response" name="g-recaptcha-response"/>
		<input class="btn btn-primary box-shadow" type="submit" value="Save" name="submit"/>
	</form>	
</div>
</body>
</html>