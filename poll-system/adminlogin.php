<!DOCTYPE html>
<html>
<head>
	<title>AdminLoginPage</title>
	<style type="text/css">
	fieldset{
			width:50%;
		}
		legend {
    		font-weight: bold;
    		font-size: x-large;
    	}
		form{
			width:50%;
			margin-top: 5%;
		}
		input{
			width:100%;
			margin-bottom: 3%;
			height:36px;
		}
		button{
			background-color: #41c341e8;
			border: 1px solid #41c341e8;
			outline: none;
			border-radius: 4px;
			width:100%;
			height:40px;
			cursor: pointer;
			color:#fff;
		}
		a{
			text-decoration: none;
			color:red;
			cursor:pointer;
			font-weight: bold;
		}
		a:hover{
			transition: .5s ease-in-out;
			color:green;
		}
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
	.active
	{
		background-color: gray;
	}
	</style>

<link rel="stylesheet" type="text/css" href="css/animate.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 	<!-- Latest Compiled AngularJS -->
 	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
 	<script type="text/javascript" src="js/wow.min.js"></script>
 	<script src="js/wow.min.js"></script>
	<script>
	    new WOW().init();
	</script>
	
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
				<li class>
					<a href="index.php">LOGIN</a>
				</li>
				<li class>	
					<a href="registration.php">REGISTRATION</a>
				</li>
				<li class="active">
					<a href="adminlogin.php">ADMIN</a>
				</li>
				<li class>
					<a href="howtowork.php">HOW TO WORK</a>
				</li>
				<li class>
					<a href="privacy_policy.php">Privacy Policy</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<br><br>
<br><br>
<br><br>

<div id="adminlogin">
	<div class="container">
		<div cass="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xm-12">
				<img src="image/vote_box.jpg" width="100%" height="100%"/>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xm-12">
				<center>
					<h3 style="font-family: candara;"><b>ADMIN LOGIN</b></h3>
						<form action="" method="post" name="adminlogform" ng-app="" enctype="multipart/form-data">
							<input class="form-control" type="email" name="adminemail" placeholder="Email" required="required" ng-model="adminemail"/><span ng-show="adminlogform.adminemail.$error.email" style="color:red;font-weight: bold;">* Not a valid e-mail address</span><br>
							<input class="form-control" type="password" name="password" placeholder="Password" required="required"/><br>
							<button class="btn btn-success" type="submit" name="Login">Login</button><br><br>
							<a class="forget" href="adminforgetpassword.php">Forget Password >>></a>
						</form>
				</center>
			</div>
		</div>
	</div>
</div>
<br><br>

</body>
</html>
<?php
include("configue.php");
session_start();
if(isset($_POST['Login']))
{
	$adminemail = $_POST['adminemail'];
	$password = $_POST['password'];

	if(empty($adminemail)||empty($password))
	{
		echo "<script>window.alert('Please Fill All Fields.')</script>";
		echo "<script>window.location='http://localhost/phpdoc/project/adminlogin.php'</script>";
	}
	else
	{
		$query = mysqli_query($connection,"SELECT Id,username,email,password,image FROM admintable WHERE email LIKE '$adminemail' && password LIKE '$password'");
		$row = mysqli_fetch_array($query);
		$Id = $row['Id'];
		$adminname_from_table = $row['username'];
		$email_from_table = $row['email'];
		$image = $row['image'];
		$num = mysqli_num_rows($query);
		if($num == 1)
		{
			$_SESSION['adminname'] = $adminname_from_table;
			$_SESSION['adminemail'] = $email_from_table;
			$_SESSION['image'] = $image;
			echo "<script>window.location='http://localhost/phpdoc/project/adminhomepage.php'</script>";
		}
		else
		{
			echo "<script>window.alert('Invalid Email or Password.')</script>";
			echo "<script>window.location='http://localhost/phpdoc/project/adminlogin.php'</script>";
		}
	}
}
?>