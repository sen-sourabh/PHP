<?php
session_start();
include("configue.php");
if (!isset($_SESSION['access_token']) && !isset($_SESSION['useremail'])) 
{
	header('Location: index.php');
}
if (isset($_SESSION['useremail'])) 
{	
	
	$username = $_SESSION['username'];
	$useremail = $_SESSION['useremail'];
}
else
{
	
	$username = $_SESSION['userData']['name'];
	$useremail = $_SESSION['userData']['email'];
}


$captcha_num = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';
$captcha_num = substr(str_shuffle($captcha_num), 0, 6);
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Home Page</title>
	<style type="text/css">
		div.jumbotron {
    		height: 200px!important;
    		padding:20px;
			color:black;
			font-size: 14px;
			background-color: #eeeeee4f!important;
		}
		.panel-body4{
			padding-left: 40px!important;
		  	height:250px;
		  	padding-right: 40px!important;
		}
		.captcha
		{
			text-decoration: line-through;
		}
	</style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/userhomepage.css">
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
    .nav ul li{
    	    margin-top: 1.5%!important;
    	font-family: candara!important;
		font-weight: bold!important;
		font-size: 18px!important;
		color:#5cb85c!important;
    }
    .nav a{
    	width: 120%!important;
    	padding-top: 4px!important;
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
    .icon{
    	/*width: 48px!important;
    	height: 48px!important;*/
    	font-size: 18px;
    	margin-right: 5%!important;
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
		<div class="nav navbar-menu" style="float:right;width:80%;height:10%;">
			<ul class="nav navbar-nav navbar-right">
				<li>
                	<b>Name : &nbsp;<?php echo $username;?></b>
                </li>
                <li>
                	<b>&emsp;&emsp;Email : &nbsp;<?php echo $useremail;?>&emsp;&emsp;&emsp;&emsp;</b>
                </li>
				<li>
					<a href="userlogout.php">
						<i class="fa fa-power-off icon"></i>Log Out
					</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<br><br>
<br><br>
<br><br>
<br><br>



<div id="Work">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				    <div id="accordian-panel-default" class="panel panel-default" class="active">
					    <div id="accordian-panel-heading" role="tab" id="headingOne">
					        <h4 class="panel-title">
						        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							        <i class="fa fa-angle-right angle-icon-accordian"></i>Participate in Voting
							    </a>
						    </h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
						    <div class="panel-body1">
						        <strong>Select position for Voting :</strong>
						        <br><br>
						        <table width="50%">
									<tr class="thead">
										<th>POSITIONS</th>
										<th>Click For Vote</th>
									</tr>
						        <?php
						        	$query = mysqli_query($connection,"SELECT position_name FROM positiontable GROUP BY position_name ORDER BY position_name ASC");
						        	// $num = mysqli_num_rows($query);
						        	while($row = mysqli_fetch_array($query))
						        	{
						        ?>
						        	<tr>
						        		<td><h4 style="color:#3ec73eeb;"><?php echo $row['position_name'];?></h4></td>
						        		<?php 
											echo "<td><a class=\"vote\" style=\"color:red;text-decoration:none;\" href=\"nextpage.php?position=$row[position_name]\">Vote >>> </a></td>";
										?>
						        		 <!-- <td><?php //echo "<a href=\"nextpage.php?position=$row[position]\">Vote >>></a>";?></td> -->
						        <?php
						        	}
 						        ?>
 						        	</tr>
 						        </table>
							</div>
						</div>
					</div>
					<div id="accordian-panel-default" class="panel panel-default" class>
					    <div id="accordian-panel-heading" role="tab" id="headingTwo">
						    <h4 class="panel-title">
						        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						        	<i class="fa fa-angle-right angle-icon-accordian"></i> Participate in Election
						        </a>
						    </h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						    <div class="panel-body2">
								<strong>Register for Election :</strong>
								<p>Select position and submit. This information goes to the admin by email then admin register you for this position.</p>
								<center>
									<form id="form-update" name="Password_updation" action="" method="post">
										<select class="form-control" name="position" required="required">
											<?php
												$result= mysqli_query($connection,"SELECT * FROM positiontable");
												$num = mysqli_num_rows($result);
												if($num)
												{
													while($row = mysqli_fetch_array($result))
													{
														echo "<option value=".$row['position_name'].">".$row['position_name']."</option>";
													}
												}
												else
												{
													echo "<option>No Position For Candidates</option>";	
												}
											?>
										</select>
										<?php
											echo "<h2 class=\"captcha\">$captcha_num</h2>";
										?>
										<input class="captcha" type="hidden" name="captcha" value="<?php echo $captcha_num;?>"/>
										<input class="form-control captcha1" type="text" name="write_cap" placeholder="Enter Text" required="required"/>
										<button type="submit" name="position_register" value="submit">Submit</button>
									</form>
								</center>						          
						    </div>
						</div>
				    </div>
				    <?php
				    	if (isset($_SESSION['useremail'])) 
						{
				    ?>
					<div id="accordian-panel-default" class="panel panel-default" class>
						<div id="accordian-panel-heading" role="tab" id="headingThree">
						    <h4 class="panel-title">
						        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						        	<i class="fa fa-angle-right angle-icon-accordian"></i>Change Password
						        </a>
						    </h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
						    <div class="panel-body3">
						        <strong>Change your Password :</strong>
						    	<center>
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
					<?php
						}
						else
						{
					?>
					<?php
						}
					?>
					<div id="accordian-panel-default" class="panel panel-default" class>
						<div id="accordian-panel-heading" role="tab" id="headingFour">
						    <h4 class="panel-title">
						        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
						         	<i class="fa fa-angle-right angle-icon-accordian"></i>Notice
						        </a>
						    </h4>
						</div>
						<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
						    <div class="panel-body4">
								<strong>Notice from Admin :</strong><br><br>
								<div class="jumbotron">
									<?php
										$myfile = fopen("admin_message.txt","r") or die("Unable to open Notice file!");
										while(!feof($myfile))
										{
											echo fgets($myfile,filesize("admin_message.txt"))."<br>";
										}
										fclose($myfile);
									?>
								</div>
						    </div>
						</div>
					</div>
				</div>
    		</div>
		</div>
	</div>
</div>
			
</body>
</html>

<?php
if(isset($_POST['update']))
	{
		$old_password = $_POST['old_password'];
		$new_password = $_POST['new_password'];
		$confirm_password = $_POST['confirm_password'];
		if(empty($old_password) || empty($new_password) || empty($confirm_password))
		{
			echo "<script>window.alert('Please Fill All Fields.')</script>";
			echo "<script>window.loacation='http://localhost/phpdoc/project/userhomepage.php'</script>";
			//header('location:http://localhost/phpdoc/passwordproject/updatepassword.php');
		}
		else
		{
			$query = mysqli_query($connection,"SELECT Id,password FROM registration WHERE email='$useremail' && password='$old_password'");
			$row = mysqli_fetch_array($query);
			$Id = $row['Id'];
			// $num = mysqli_num_rows($query);
			if($Id)
			{
				if($new_password != $confirm_password){
					echo "<script>window.alert('Both Password Not Matched.')</script>";
					echo "<script>window.loacation='http://localhost/phpdoc/project/userhomepage.php'</script>";
				}
				else
				{
					if($_POST['captcha'] == $_POST['write_cap'])
					{
						mysqli_query($connection,"UPDATE registration SET password='$new_password' WHERE Id=$Id");
						echo "<script>window.alert('Password Updated.')</script>";
						echo "<script>window.loacation='http://localhost/phpdoc/project/userhomepage.php'</script>";
					}
					else
					{
						echo "<script>window.alert('Captcha is Not Matched.')</script>";
						echo "<script>window.loacation='http://localhost/phpdoc/project/userhomepage.php'</script>";
					}
				}
			}
			else
			{	
				echo "<script>window.alert('Old Password is Not Found.')</script>";
				echo "<script>window.loacation='http://localhost/phpdoc/project/userhomepage.php'</script>";
			}
		}
		
		//header('location:http://localhost/phpdoc/passwordproject/updatepassword.php');
	}	


else if(isset($_POST['position_register']))
{
	$position = $_POST['position'];

	if($_POST['captcha'] != $_POST['write_cap'])
	{
		echo "<script>window.alert('Captcha is Not Matched.')</script>";
		echo "<script>window.loacation='http://localhost/phpdoc/project/userhomepage.php'</script>";
	}
	else
	{
		$to="sourabhsen201313@gmail.com"; // Receiver Email ID, Replace with your email ID
		$subject='Register for Candidature';
		$message="Email :".$useremail."\n"."Position :".$position."\n"."Wrote the following : Please, Register me as a candidate.";
		$headers="From: ".$useremail;

		if(mail($to, $subject, $message, $headers)){
			// echo "<h1>Sent Successfully! Thank you"." ".$_SESSION['username']."</h1>";
			echo "<script>window.alert('Mail for position, Sent Successfully.')</script>";
		}
		else
		{
			echo "<script>window.alert('Something went wrong, Try again.')</script>";
		}
		echo "<script>window.loacation='http://localhost/phpdoc/project/userhomepage.php'</script>";
	}
}
// else 
// 	 if(isset($_SESSION['userData']['id']))
// {

// 	$Id = $_SESSION['userData']['id'];
// 	$name = $_SESSION['userData']['name'];
// 	$email = $_SESSION['userData']['email'];
// 	$password = md5("");
// 	$gender = $_SESSION['userData']['gender'];
// 	$city = $_SESSION['userData']['location']['name'];
// 	$date = date("Y-m-d");
// 	$image = $_SESSION['userData']['picture']['url'];


// 	$query = mysqli_query($connection,"SELECT * FROM registration WHERE email LIKE '$email' OR Id LIKE '$Id'");
// 	$num = mysqli_num_rows($query);
// 	if($num == 1)
// 	{
// 		mysqli_query($connection,"UPDATE registration SET username='$name', email='$email', password='$password', gender='$gender', city='$city', date='$date', image='$image' WHERE Id='$Id'");
// 		echo "<script>window.loacation='http://localhost/phpdoc/project/userhomepage.php'</script>";
// 	}
// 	else
// 	{
// 		mysqli_query($connection,"INSERT INTO registration (Id,username,email,password,gender,date,phone,city,image) VALUES ('$Id','$username','$email','$password','$gender','$date','','$city','$image')");
// 		echo "<script>window.loacation='http://localhost/phpdoc/project/userhomepage.php'</script>";
// 	}
// }

?>