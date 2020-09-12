<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/indexcss.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	<!-- Latest Compiled AngularJS -->
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
	.active
	{
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

<div id="forget">
	<div class="container">
		<div cass="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xm-12">
				<img src="image/vote_box.jpg" width="100%" height="100%"/>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xm-12">
				<center>
					<h3 style="font-family: candara;"><b>FORGET PASSWORD</b></h3>
						<form action="" name="userforgetform" ng-app="" method="post">
							<input class="form-control" type="email" name="email" placeholder="Email" required="required" ng-model="useremail"/>
							<span ng-show="userforgetform.email.$error.email" style="color:red;font-weight: bold;">* Not a valid e-mail address</span><br>
							<button class="btn btn-success" type="submit" name="send">SEND</button>
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
if(isset($_POST['send']))
{
	$useremail = $_POST['email'];

	if(empty($useremail))
	{
		echo "<script>window.alert('Please enter your Email.')</script>";
		echo "<script>window.location='userforgetpassword.php'</script>";
	}
	else
	{
		$query = mysqli_query($connection,"SELECT email FROM registration WHERE email LIKE '$useremail'");
		$row = mysqli_fetch_array($query);
		$num = mysqli_num_rows($query);
		if($num >= 1)
		{
			$to=$row['email']; // if test -- Receiver Email ID, Replace with your email ID
			$subject='Poll System Your Password';
			$message="Name :".$row['username']."\n"."Email :".$row['email']."\n"."Password :".$row['password'];
			$headers="From: sourabhsen201313@gmail.com";

			if(mail($to, $subject, $message, $headers)){
				echo "<script>window.alert('Sent Successfully.')</script>";
			}
			else{
				echo "<script>window.alert('Something Wrong, Try Again.')</script>";
			}

			echo "<script>window.location='userforgetpassword.php'</script>";
		}
		else
		{
			echo "<script>window.alert('Invalid Email.')</script>";
			echo "<script>window.location='userforgetpassword.php'</script>";
		}
	}

}
?>