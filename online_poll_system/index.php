<?php 
	session_start();
include("configue.php");

	if (isset($_SESSION['access_token']) && isset($_SESSION['useremail'])) {
		header('Location: userhomepage.php');
	}

	$redirectURL = "http://localhost/phpdoc/project/fb-callback.php";
	$permissions = ['email'];
	$loginURL = $helper->getLoginUrl($redirectURL, $permissions);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Online Poll System</title>
	<link rel="icon" type="icon/jpg" href="./img/vote_box.jpg">	
	<link rel="stylesheet" type="text/css" href="css/indexcss.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Latest compiled AngularJs -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

<style type="text/css">
	.navbar-default {
	    height: 8%!important;
    }
    .navbar-head h3{
    	margin-top: 8%!important;
    	margin-bottom: 0!important;
    }
	.nav a{

		text-decoration: none!important;
		font-family: candara!important;
		font-weight: bold!important;
		font-size: 18px!important;
		color:#5cb85c!important;
	}
	.nav a:hover{
		transition: 0.3s ease-in-out;
		text-decoration: none!important;
		font-family: candara!important;
		font-weight: bold!important;
		color:#379837!important;
	}
	.forget{
		font-family: candara!important;
		font-weight: bold!important;
		font-size: 14px!important;
		color:#5cb85c!important;	
	}
	.active{
		background-color: gray;
	}
</style>
</head>
<body>


<nav class="navbar navbar-fixed-top navbar-default">
	<div class="container">
		<div class="navbar-head" style="float:left;width:20%;">
			<h3 style="font-family: candara;color: #278c27;float:left;">
				<b>POLL SYSTEM</b>
			</h3>
		</div>
		<div class="nav navbar-menu" style="position:relative;float:right;width:80%;">
			<ul class="nav navbar-nav navbar-right">	
				<li class="active">
					<a href="index.php">LOGIN</a>
				</li>
				<li class>	
					<a href="registration.php">REGISTRATION</a>
				</li>
				<li class>
					<a href="adminlogin.php">ADMIN</a>
				</li>
				<li class>
					<a href="howtowork.php">HOW TO WORK</a>
				</li>
				
			</ul>
		</div>
	</div>
</nav>
<br><br>
<br><br>
<br><br>

<div id="login">
	<div class="container">
		<div cass="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xm-12">
				<img src="image/vote_box.jpg" width="100%" height="100%"/>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xm-12">
				<center>
					<h3 style="font-family: candara;"><b>LOGIN</b></h3>
						<form action="" method="post" ng-app="" name="logform">
							<input class="form-control" type="email" name="email" placeholder="Email" required="required" ng-model="text"/>
							<span ng-show="logform.email.$error.email" style="color:red;font-weight: bold;">* Not a valid e-mail <address></address></span><br>
							<input class="form-control" type="password" name="password" placeholder="Password" required="required"/><br>
							<button class="btn btn-success" type="submit" name="Login">Login</button>
						</form>
						<a class="forget" href="userforgetpassword.php">Forget Password >>></a>
				</center>
			</div>
		</div>
	</div>
</div>
<br><br>

</body>
</html>
<?php

//######################### LOG IN CODE ####################################//
if(isset($_POST['Login']))
{
	$useremail = $_POST['email'];
	$password = $_POST['password'];

	if(empty($useremail)||empty($password))
	{
		echo "<script>window.alert('Please Fill All Fields.')</script>";
		echo "<script>window.location='index.php'</script>";
	}
	else
	{
		$query = mysqli_query($connection,"SELECT * FROM registration WHERE email LIKE '$useremail' && password LIKE '$password'");
		$row = mysqli_fetch_array($query);
		$Id = $row['Id'];
		$num = mysqli_num_rows($query);
		if($num == 1)
		{	
			$_SESSION['username'] = $row['username'];
			$_SESSION['useremail'] = $useremail;
			echo "<script>window.location='userhomepage.php'</script>";
		}
		else
		{
			echo "<script>window.alert('Invalid Email or Password.')</script>";
			echo "<script>window.location='index.php'</script>";
		}
	}
}


?>