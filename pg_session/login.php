<?php
include("config.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>POSTGRES SESSION</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<form method="post" action="">
		<input class="form-control" type="email" name="email" placeholder="Email"/>
		<input class="form-control" type="password" name="pass" placeholder="Password"/>
		<input class="btn btn-success" type="submit" name="login" value="Login Now"/>
	</form>
	<a href="index.php">Register</a>
</div>
</body>
</html>
<?php
if(isset($_POST['login'])){
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$res = pg_query("SELECT * FROM users WHERE email='$email' AND password='$pass'");
	$num = pg_num_rows($res);
	if($num > 0){
		$_SESSION['adminuser'] = pg_fetch_array($res);
		echo "<script>window.location.href= 'view.php'</script>";	
	}else{
		echo "<script>window.alert('Invalid Email or Password.')</script>";
	}
}
?>