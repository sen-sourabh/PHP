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
$position = $_GET['position'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>NextPage</title>
	<link rel="stylesheet" type="text/css" href="css/nextpage.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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


<div id="nametable">
	<div class="container">
		<div class="row">&nbsp;
			<form action="" method="post">
				<table class=" table table-striped">
					<tr>
						<th>CANDIDATE NAMES</th>
						<th>CHOOSE ONE AND SUBMIT</th>
					</tr>
					<?php
						$query = mysqli_query($connection,"SELECT Id,candidate_name,candidate_email FROM reg_for_election WHERE candidate_position = '$position'");
						$num = mysqli_num_rows($query);
						if($num>0)
						{
							while($row = mysqli_fetch_array($query))
							{
					?>
						<tr>
							<td><h5><?php echo $row['Id'];?></h5></td>
							<td><h5><?php echo $row['candidate_name'];?></h5></td>
							<td>
								<input type="radio" name="candidate_name" value="<?php echo $row['candidate_name'];?>"></td>
						</tr>
					<?php
							}
						}
						else
						{
							echo "<script>window.alert('No data available.')</script>";
							echo "<script>window.location='http://localhost/phpdoc/project/userhomepage.php'</script>";
						}
					?>
					<tr>
						<td></td>
						<td><button class="btn btn-success md" type="submit" name="submit">Submit</button></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>

</body>
</html>

<?php

if(isset($_POST['submit']))
{
	if(empty($_POST['candidate_name']))
	{
		echo "<script>window.alert('Please select any one of them.')</script>";
		echo "<script>window.location='http://localhost/phpdoc/project/userhomepage.php?'</script>";
	}
	else
	{	
		$name = $_POST['candidate_name'];
		$result = mysqli_query($connection,"SELECT voter_email FROM allvote WHERE candidate_position LIKE '$position'");
		$flag = 0;
		while($row = mysqli_fetch_array($result))
		{
			if($row['voter_email']==$useremail)
			{	
				$flag = 1;		
			}
		}
		if($flag == 0)
		{
			mysqli_query($connection,"INSERT INTO allvote(candidate_name,candidate_position,voter_email) VALUES ('$name','$position','$useremail')");
			echo "<script>alert('Thank you for Voting.')</script>";
			echo "<script>window.location='http://localhost/phpdoc/poll-system/userhomepage.php'</script>";
		}
		else
		{
			echo "<script>alert('You Already Voted For This Position, Try For Different Position.')</script>";
				echo "<script>window.location='http://localhost/phpdoc/poll-system/userhomepage.php'</script>";
		}
	}
}
?>