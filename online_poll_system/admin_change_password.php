<?php
include_once("configue.php");
session_start();
if(!isset($_SESSION['adminemail'])){
	echo "<script>window.location='adminlogin.php'</script>";
}

$captcha_num = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';
$captcha_num = substr(str_shuffle($captcha_num), 0, 6);
?>
<!DOCTYPE html>

<html>
<head>
	<title>Admin Change Password</title>

	<link rel="stylesheet" type="text/css" href="css/userhomepage.css">
	<link rel="stylesheet" type="text/css" href="css/animate.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
.icon{
	margin-right: 5%!important;
}
.captcha{
	text-decoration: line-through;
}
#form-update input,button{
	margin-top: 3%;
}
</style>


</head>
<body>

<nav class="navbar navbar-fixed-top navbar-default">
	<div class="container">
		<div class="navbar-head" style="float:left;width:14%;">
			<h3 style="font-size: 26px;font-family: candara;color: #278c27;float:left;">
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
                <li class><a href="admin_message.php">Admin Message</a></li>
                <li class="dropdown active"> 
                	<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                		<i class="fa fa-gear"></i> 
                	</a> 
                	<ul class="dropdown-menu"> 
                		<li class="active">
                			<a href="admin_change_password.php"><i class="fa fa-lock icon"></i>Change Password</a>
                		</li> 
                		<li>
                			<a href="adminlogout.php"><i class="fa fa-power-off icon"></i>Log Out</a>
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


<div class="change">
	<div class="container">
		<div class="row">
			<center>
				<h3 style="font-family: candara;"><b>CHANGE PASSWORD</b></h3>
				<form id="form-update" name="Password_updation" action="" method="post">
					<input class="form-control" type="password" name="old_password" placeholder="Old Passowrd" required="required"/>
					<input class="form-control" type="password" name="new_password" placeholder="New Password" required="required"/>
					<input class="form-control" type="password" name="confirm_password" placeholder="Confirm Password" required="required"/>
						<?php
							echo "<h2 class=\"captcha\">$captcha_num</h2>";
						?>
					<input class="captcha" type="hidden" name="captcha" value="<?php echo $captcha_num;?>"/>
					<input class="form-control" class="captcha1" type="text" name="write_cap" placeholder="Enter Text" required="required"/>
					<button type="submit" name="update" value="submit">Submit</button>
				</form>
			</center>
		</div>
	</div>
</div>

</body>
</html>

<?php
	if(isset($_POST['update']))
	{
		$adminemail = $_SESSION['adminemail'];
		$old_password = $_POST['old_password'];
		$new_password = $_POST['new_password'];
		$confirm_password = $_POST['confirm_password'];
		if(empty($old_password) || empty($new_password) || empty($confirm_password))
		{
			echo "<script>window.alert('Please Fill All Fields.')</script>";
			echo "<script>window.loacation='admin_change_password.php'</script>";
			//header('location:http://localhost/phpdoc/passwordproject/updatepassword.php');
		}
		else
		{
			$query = mysqli_query($connection,"SELECT Id,email,password FROM admintable WHERE email='$adminemail' && password='$old_password'");
			$row = mysqli_fetch_array($query);
			$Id = $row['Id'];
			// $num = mysqli_num_rows($query);
			if($Id)
			{
				if($new_password != $confirm_password){
					echo "<script>window.alert('Both Password Not Matched.')</script>";
					echo "<script>window.loacation='admin_change_password.php'</script>";
				}
				else
				{
					if($_POST['captcha'] == $_POST['write_cap'])
					{
						mysqli_query($connection,"UPDATE admintable SET password='$new_password' WHERE Id=$Id");
						echo "<script>window.alert('Password Updated.')</script>";
						echo "<script>window.loacation='adminhomepage.php'</script>";
					}
					else
					{
						echo "<script>window.alert('Captcha is Not Matched.')</script>";
						echo "<script>window.loacation='admin_change_password.php'</script>";
					}
				}
			}
			else
			{
				echo "<script>window.alert('Old Password is Not Found.')</script>";
				echo "<script>window.loacation='admin_change_password.php'</script>";
			}
		}
		
	}