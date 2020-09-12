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
	<title>Admin Home Page</title>
	<style type="text/css">
		textarea.form-control {
    		height: 200px!important;
    		padding:20px;
			color:black;
			font-size: 20px;
			position: relative;
			top: 60px;
		}
		#message{
			position: relative;
			top: 70px;	
		}
	</style>
	
	<link rel="stylesheet" type="text/css" href="css/userhomepage.css">
	
<link rel="stylesheet" type="text/css" href="css/animate.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/wow.min.js"></script>
 	<script src="js/wow.min.js"></script>
	<script>
	    new WOW().init();
	</script>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


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
                <li class><a href="admin_register.php">Admin Registration</a></li>
                <li class><a href="all_vote.php">All Vote</a></li>
                <li class="active"><a href="admin_message.php">Admin Message</a></li>
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



<div id="form_message">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<form name="message_form" action="" method="post">
					<textarea class="form-control" name="message" placeholder="Write Message For Users..." required="required"></textarea>
					<button id="message" class="btn btn-success btn-md" type="submit" name="message_submit">SUBMIT</button>
				</form>
			</div>
		</div>
	</div>
</div>
<?php
include('configue.php');
if(isset($_POST['message_submit']))
{
	$message = $_POST['message'];

	if(empty($message))
	{
		echo "<script>window.alert('Write Your Message.')</script>";
		echo "<script>window.location=''</script>";
	}
	else
	{
		$myfile = fopen("admin_message.txt","a") or die("Unable to open Notice file!");
		fwrite($myfile,$message);
		fclose($myfile);
	}
}
?>
</body>
</html>