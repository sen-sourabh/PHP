<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
 
	<link rel="stylesheet" type="text/css" href="css/registration.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 	<!-- Latest Compiled AnguleJS  -->
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
	.active
	{
		background-color: gray;
	}
</style>

</head>
<body>
	
<?php
	// $captcha = rand(935698,9863524);
$captcha_num = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';
$captcha_num = substr(str_shuffle($captcha_num), 0, 6);
?>

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
				<li class="active">	
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
					<h3 style="font-family: candara;"><b>REGISTRATION</b></h3>
						<form action="" method="post" name="regform" ng-app="" enctype="multipart/form-data">
							<input class="form-control" type="text" name="username" placeholder="Username" required="required"/><br>
							<input class="form-control" type="email" name="email" placeholder="Email" required="required" ng-model="useremail"/>
							<span ng-show="regform.email.$error.email" style="color:red;font-weight: bold;">* Not a valid e-mail address</span><br>
							<input class="form-control" type="password" name="password" placeholder="Password" required="required"/><br>
							<input class="form-control" type="password" name="confirm_password" placeholder="Confirm Password" required="required"/><br>
							<input class="radio-form" type="radio" name="gender" required="required" value="male"/>&nbsp;MALE&emsp;&emsp;
							<input class="radio-form" type="radio" name="gender" required="required" value="female"/>&nbsp;FEMALE<br><br>
							<input class="form-control" type="text" name="phone" required="required" placeholder="Phone Number"/><br>
							<select name="city" class="form-control">
								<option>Indore</option>
								<option>Dewas</option>
								<option>Ujjain</option>
								<option>Khargone</option>
							</select><br>
							<label>Upload Photo:</label>
							<input type="file" name="image_file" value="upload_image" required="required"/><br><br>
							<?php
								echo "<h2 class=\"captcha\">$captcha_num</h2>";
							?>
							<input class="form-control" type="hidden" name="captcha" value="<?php echo $captcha_num;?>"/><br>
							<input class="form-control" type="text" name="write_cap" placeholder="Enter Above Captcha Text" required="required"/><br>
							<button class="form-control btn-success" type="submit" name="Register">Register</button><br>
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
if(isset($_POST['Register']))
{
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];	
	$gender = $_POST['gender'];
	$date = date("y-m-d");
	$phone = $_POST['phone'];
	$city = $_POST['city'];
	$image_name = $_FILES['image_file']['name'];
	$tempname = $_FILES['image_file']['tmp_name'];
	move_uploaded_file($tempname,"img/$image_name");

	if(empty($username)||empty($email)||empty($password)||empty($confirm_password)||empty($gender)||empty($phone))
	{
		echo "<script>window.alert('Please Fill All Fields.')</script>";
		echo "<script>window.location='registration.php'</script>";
	}
	else
	{
		if($password != $confirm_password)
		{
			echo "<script>window.alert('Password Not Matched.')</script>";
			echo "<script>window.location='registration.php'</script>";	
		}
		else
		{
			if($_POST['captcha'] != $_POST['write_cap'])
			{
				echo "<script>window.alert('Captcha is Not Matched.')</script>";
				echo "<script>window.location='registration.php'</script>";
			}
			else
			{
				$query = mysqli_query($connection,"SELECT email FROM registration WHERE email LIKE '$email'");
				$num = mysqli_num_rows($query);
				if($num == 1)
				{
					echo "<script>window.alert('Email Already Used, Try With Different Email.')</script>";
					echo "<script>window.location='registration.php'</script>";
				}
				else
				{
					mysqli_query($connection,"INSERT INTO registration (username,email,password,gender,date,phone,city,image) VALUES ('$username','$email','$password','$gender','$date','$phone','$city','$image_name')");
					//FOR GETTING LAST ID
					// print_r(mysqli_insert_id($connection));
					// exit;
					echo "<script>window.alert('Registration Successfull.')</script>";
					echo "<script>window.location='registration.php'</script>";
				}
						
			}
		}
	}
}
?>