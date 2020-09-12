<?php
include("config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>PDO PostgreSQL SESSION</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<form method="post" action="">
		<input class="form-control" type="email" name="email" placeholder="Email"/>
		<input class="form-control" type="password" name="pass" placeholder="Password"/>
		<input class="btn btn-success" type="submit" name="log" value="Login Now"/>
	</form>
	<a href="index.php">Register</a>
</div>
</body>
</html>
<?php
session_start();
if(isset($_POST['log'])){
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	try{
		$userdata = $demosql->query("SELECT * FROM users WHERE email='$email' AND password='$pass'");
		if(($userdata->rowCount()) > 0){
			$_SESSION['usersession'] = $userdata->fetch(PDO::FETCH_ASSOC);
			echo "<script>window.location.href= 'home.php'</script>";
		}
	}catch(Exception $e) {
	    echo 'Exception : '.$e->getMessage();
	}
	
}
?>