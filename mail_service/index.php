<!DOCTYPE html>
<html>
<head>
	<title>Mail</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,300i,400,400i,500,500i,600,600i,700,700i|Tangerine:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="./jquery-te-1.4.0.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery.min.js" charset="utf-8"></script>
	<script type="text/javascript" src="./jquery-te-1.4.0.min.js" charset="utf-8"></script>
</head>
<body>
<div class="container">
	<form method="post" action="">
		To : <input class="form-control" type="text" name="to" required="required">
		Subject : <input class="form-control" type="text" name="subject" required="required">
		Message : <textarea class="jqte-test" cols="20" rows="5" name="msg" required="required"></textarea>
		<br>
		<input class="btn btn-primary btn-md" type="submit" name="submit" value="Send">
	</form>
	<?php
		if(isset($_POST['submit']))
		{
			$to = $_POST['to'];
			$subject = $_POST['subject'];
			$body = $_POST['msg'];

			$header = "From: sourabhsen201313@gmail.com";

			if(mail($to,$subject,$body,$header))
			{
				echo "Mail Sent";
			}
			else
			{
				echo "First, Check your Internet Connection.";
			}
		}
	?>
</div>
<script>
	$('.jqte-test').jqte();
	
	// settings of status
	var jqteStatus = true;
	$(".status").click(function()
	{
		jqteStatus = jqteStatus ? false : true;
		$('.jqte-test').jqte({"status" : jqteStatus})
	});
</script>
</body>
</html>
