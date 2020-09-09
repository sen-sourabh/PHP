<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION</title>
	<meta name="viewport" cotent="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/task13(12).css">
	<link rel="stylesheet" type="text/css" href="css/animate.min.css">
	<script type="text/javascript" src="js/wow.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body>
	<div id="start">
		<center id="center">
			<form name="registration" action="" method="post">	
				<div id="slidetext">
					<fieldset class="wow swing" style="animation-duration: 2s;">
					<legend><h1> REGISTRATION </h1></legend>
					
						<input class="input" type="email" name="email" placeholder="Email" required="required"/>
						
						<input class="input" type="password" name="password" placeholder="Password" required="required"/>
												
						<button type="submit" name="submit" value="submit"> Register </button>
						<br>
						
						<a href="login.php" title="Login">LOGIN |<a href="registration.php" title="Register">REGISTRATION </a>
					</fieldset>
				</div>
			</form>
		</center>
	</div>

<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
</body>
</html>

<?php
include_once("confige.php");
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$password = $_POST['password'];

	if(empty($email) || empty($password))
	{
		echo "<script>window.alert('Please Fill All Fields.');</script>";
	}
	else
	{
		$query = mysqli_query($connection,"SELECT email FROM firstsessioninsert WHERE email LIKE '$email'");
		$num = mysqli_num_rows($query);
		if($num == 1)
		{
			echo "<script>window.alert('Email Already Used, Try with Different Email.')</script>";	
		}
		else
		{
			mysqli_query($connection,"INSERT INTO firstsessioninsert (email,password) VALUES ('$email','$password')");
			echo "<script>window.alert('Registration Successfull.')</script>";
		}
	}
}
?>