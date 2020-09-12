<?php
include_once("configue.php");
session_start();
if(!isset($_SESSION['adminemail'])){
	echo "<script>window.location='http://localhost/phpdoc/project/adminlogin.php'</script>";
}

$captcha_num = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';
$captcha_num = substr(str_shuffle($captcha_num), 0, 6);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Registration</title>

	<link rel="stylesheet" type="text/css" href="css/registration.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	

<link rel="stylesheet" type="text/css" href="css/animate.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/wow.min.js"></script>
 	<script src="js/wow.min.js"></script>
	<script>
	    new WOW().init();
	</script>


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
	.dropdown:hover .dropdown-menu{
    animation: fadeIn 1s;
    display:block;
    transition: .35s ease-in-out;
}
.dropdown-menu{
    border-radius: 4px!important;
    border: 1px solid white!important;
    box-shadow: 0 0 20px rgba(0, 0, 0, .2)!important;
}
.dropdown-menu a{

    padding: 10px 10px!important;
    width: 180px;
    height: 40px;
    font-size: 16px!important;
    font-weight: bold!important;
    background-color: #fff!important;
    color: #5cb85c!important;
}
.dropdown-menu li a:hover{
    color: #379837!important;
}
a.dropdown-toggle{
	width: 48px!important;
    height: 48px!important;
    position: relative!important;
    top: 2px!important;
}
</style>


</head>
<body>


<nav class="navbar navbar-fixed-top navbar-default">
	<div class="container">
		<div class="navbar-head" style="float:left;width:14%;">
			<h3 style="font-family: candara;color: #278c27;float:left;">
				<b>POLL SYSTEM</b>
			</h3>
		</div>
		<div class="nav navbar-menu" style="float:right;width:86%;height:10%;">
			<ul class="nav navbar-nav navbar-right">
                <li class><a href="adminhomepage.php">Home</a></li>
                <li class><a href="manage_candidate.php">Manage Candidates</a></li>
                <li class><a href="position.php">Positions</a></li>
                <li class><a href="register_people.php">Register Peoples</a></li>
                <li class="active"><a href="admin_register.php">Admin Registration</a></li>
                <li class><a href="all_vote.php">All Vote</a></li>
                <li class><a href="admin_message.php">Admin Message</a></li>
                <li class="dropdown"> 
                	<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                		<i class="fa fa-gear icon_gear"></i> 
                	</a> 
                	<ul class="dropdown-menu"> 
                		<li>
                			<a href="admin_change_password.php">Change Password</a>
                		</li> 
                		<li>
                			<a href="adminlogout.php">Log Out</a>
                		</li> 
                  	</ul> 
                </li>
            </ul>
		</div>
	</div>
</nav>
<br><br>
<br><br>
<br><br>
<br><br>


<div id="adminreg">
	<div class="container">
		<div cass="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xm-12">
				<img src="image/admin-img.jpg" width="100%" height="100%"/>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xm-12">
				<center>
					<h3 style="font-family: candara;"><b>ADMIN REGISTRATION</b></h3>
					<form action="" method="post" enctype="multipart/form-data">
						<input class="form-control" type="text" name="username" placeholder="Username" required="required"/><br>
						<input class="form-control" type="email" name="email" placeholder="Email" required="required"/><br>
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
						<button class="form-control btn-success" type="submit" name="Admin_Register">Admin Register</button><br>
					</form>
				</center>
			</div>
		</div>
	</div>
</div>

</body>
</html>
<?php
include("configue.php");
if(isset($_POST['Admin_Register']))
{
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];	
	$gender = $_POST['gender'];
	$time = date("h:i:sa");
	$date = date("y-m-d");
	$phone = $_POST['phone'];
	$city = $_POST['city'];
	$image_name = $_FILES['image_file']['name'];
	$tempname = $_FILES['image_file']['tmp_name'];
	move_uploaded_file($tempname,"img/$image_name");

	if(empty($username)||empty($email)||empty($password)||empty($confirm_password)||empty($gender)||empty($phone))
	{
		echo "<script>window.alert('Please Fill All Fields.')</script>";
		echo "<script>window.location='http://localhost/phpdoc/project/admin_register.php'</script>";
	}
	else
	{
		if($password != $confirm_password)
		{
			echo "<script>window.alert('Password Not Matched.')</script>";
			echo "<script>window.location='http://localhost/phpdoc/project/admin_register.php'</script>";		
		}
		else
		{
			if($_POST['captcha'] != $_POST['write_cap'])
			{
				echo "<script>window.alert('Captcha is Not Matched.')</script>";
				echo "<script>window.location='http://localhost/phpdoc/project/admin_register.php'</script>";		
			}
			else
			{
				$query = mysqli_query($connection,"SELECT email FROM admintable WHERE email LIKE '$email'");
				$num = mysqli_num_rows($query);
				if($num == 1)
				{
					echo "<script>window.alert('Email Already Used, Try With Different Email.')</script>";
					echo "<script>window.location='http://localhost/phpdoc/project/admin_register.php'</script>";
				}
				else
				{
					mysqli_query($connection,"INSERT INTO admintable (username,email,password,gender,phone,city,time,date,image) VALUES ('$username','$email','$password','$gender','$phone','$city','$time','$date','$image_name')");
					echo "<script>window.alert('Registration Successfull.')</script>";
					echo "<script>window.location='http://localhost/phpdoc/project/admin_register.php'</script>";
				}
						
			}
		}
	}
}
?>