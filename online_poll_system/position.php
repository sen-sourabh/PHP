<?php
include_once("configue.php");
session_start();
if(!isset($_SESSION['adminemail'])){
	echo "<script>window.location='adminlogin.php'</script>";
}
$query = mysqli_query($connection,"SELECT * FROM positiontable");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Position Page</title>

	<link rel="stylesheet" type="text/css" href="css/position.css">
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
                <li class="active"><a href="position.php">Positions</a></li>
                <li class><a href="register_people.php">Register Peoples</a></li>
                <li class><a href="admin_register.php">Admin Registration</a></li>
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




<!--########################################## FORM  POSITION ##############################################-->

<div id="form">
	<div class="container">
		<div class="row">
			<form class="form-inline" action="" method="post">
				<select name="position" required="required">
					<option>Select Position to Start Voting</option>
					<option value="General Secretary">general secretary</option>
					<option value="Secretary">secretary</option>
					<option value="Manager">manager</option>
					<option value="Chairperson">chairperson</option>
					<option value="Head of Department">head of department</option>
					<option value="Assistant">assistant</option>
				</select>
				<button class="btn btn-success" type="submit" name="position_submit">Submit</button>
			</form>
		</div>
	</div>	
</div>
<?php
if(isset($_POST['position_submit']))
{
	$position = $_POST['position'];
	if($position == "Select Position to Start Voting")
	{
		echo "<script>window.alert('Please Choose One Position.')</script>";
		echo "<script>window.location='position.php'</script>";
	}
	else
	{
		$query = mysqli_query($connection,"SELECT Id FROM positiontable WHERE position_name LIKE '$position'");
		$row = mysqli_fetch_array($query);
		$Id = $row['Id'];
		if($Id)
		{
			echo "<script>window.alert('Position Already Submitted.')</script>";
			echo "<script>window.location='position.php'</script>";
		}
		else
		{
			mysqli_query($connection,"INSERT INTO positiontable (position_name) VALUES ('$position')");
			echo "<script>window.alert('Position Submit Successfully.')</script>";
			echo "<script>window.location='position.php'</script>";
		}
	}
}
?>


<!--################################################# TABLE ###############################################-->


<div id="table_candidate">
	<div class="container">
		<div class="row">
			<table class="table table-striped" width="50%">
				<tr class="thead">
					<th>ID</th>
					<th>POSITION NAME</th>
					<th>UPDATE</th>
				</tr>
				<?php
					//OPENING WHILE LOOP
					while($row = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $row['Id'];?></td>
					<td><?php echo $row['position_name'];?></td>
				<?php 
					echo "<td><a href=\"admin_delete_position.php?Id=$row[Id]\" onClick=\"return confirm('Are You Sure You Want To Delete this Position?')\">DELETE POSITION</a></td>";
				?>
				</tr>
				<?php //CLOSING WHILE LOOP 
					}
				?>
			</table>
		</div>
	</div>
</div>


</body>
</html>