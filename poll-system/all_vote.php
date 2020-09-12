<?php
include_once("configue.php");
session_start();
if(!isset($_SESSION['adminemail'])){
	echo "<script>window.location='http://localhost/phpdoc/project/adminlogin.php'</script>";
}
$result_count = mysqli_query($connection,"SELECT count(*) AS no_of_rows FROM allvote");
$row = mysqli_fetch_array($result_count);
$no_of_row = $row['no_of_rows'];
$query = mysqli_query($connection,"SELECT * FROM allvote");

$captcha_num = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';
$captcha_num = substr(str_shuffle($captcha_num), 0, 6);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Home Page</title>
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


<script type="text/javascript">
	$(document).ready(function(){
		$('#positions').on('change',function(){
			var position = $(this).val();
			if(position){
				$.ajax({
					type: 'POST',
					url: 'all_vote_candidate_select.php',
					data: 'position='+position,
					success:function(html){
						$('#names').html(html);
					}
				});
			}
			else
			{
				$('#names').html('<option>Select Position First</option>');
			}
		});
	});
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
                <li class><a href="admin_register.php">Admin Registration</a></li>
                <li class="active"><a href="all_vote.php">All Vote</a></li>
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



<div id="search">
	<div class="container">
		<div class="row">
			<form class="form-inline" action="" method="post" enctype="multipart/form-data">
				<?php
					$result_position = mysqli_query($connection,"SELECT * FROM positiontable");
					$num = mysqli_num_rows($result_position);
				?>
				<select id="positions" class="form-control" name="position">
					<option value="">Select Position</option>
					<?php
					if($num>0)
					{
						while($row = mysqli_fetch_assoc($result_position))
						{
							echo "<option>".$row['position_name']."</option>";
						}
					}
					else
					{
						echo "<option>NO Position For Candidates</option>";
						
					}
					?>
				</select>
				<select id="names" class="form-control" name="name">
					<option value="">Select Candidate For This Position</option>
				</select>
				<button class="btn btn-success" type="submit" name="search" vlaue="search">Search</button>	
			</form>
		</div>
	</div>
</div>

<?php

if(isset($_POST['search']))
{
	$position = $_POST['position'];
	$name = $_POST['name'];
	$result_count_search = mysqli_query($connection,"SELECT count(*) AS no_of_row_search FROM allvote WHERE candidate_position='$position' && candidate_name='$name'");
	$row_search = mysqli_fetch_array($result_count_search);
	$no_of_row_search = $row_search['no_of_row_search'];
	$result = mysqli_query($connection,"SELECT * FROM allvote WHERE candidate_position='$position' && candidate_name='$name'");
	$num = mysqli_num_rows($result);
	if($num>=1)
		{
?>
<div class="container">
	<h3>Your Search...</h3><br>
	<p>Number Of Rows: <?php echo $no_of_row_search;?></p><br>
			<table class="table table-striped">
					<tr>
						<th>ID</th>
						<th>CANDIDATE NAME</th>
						<th>CANDIDATE POSITION</th>
						<th>VOTER EMAIL</th>
					</tr>
	<?php			//OPENING WHILE LOOP
				while($row = mysqli_fetch_array($result))
				{
	?>
				<tr>
						<td><?php echo $row['Id'];?></td>
						<td><?php echo $row['candidate_name'];?></td>
						<td><?php echo $row['candidate_position'];?></td>
						<td><?php echo $row['voter_email'];?></td>
				</tr>
	<?php 
		//CLOSING WHILE LOOP 
			}
		}else
		{
			echo "<script>window.alert('No Votes Available.');</script>";
			echo "<script>window.location='http://localhost/phpdoc/project/all_vote.php';</script>";
		}
	?>
			</table>
	<?php
		}
	?>
</div>


<div class="container">
	<h3>Registrations:</h3><br>
	<p>Number Of Row: <?php echo $no_of_row;?></p><br>

	<table class="table table-striped">
		<tr>
			<th>ID</th>
			<th>CANDIDATE NAME</th>
			<th>CANDIDATE POSITION</th>
			<th>VOTER EMAIL</th>
		</tr>
	<?php
			//OPENING WHILE LOOP
			while($row = mysqli_fetch_array($query))
			{
	?>
		<tr>
			<td><?php echo $row['Id'];?></td>
			<td><?php echo $row['candidate_name'];?></td>
			<td><?php echo $row['candidate_position'];?></td>
			<td><?php echo $row['voter_email'];?></td>
		</tr>
	<?php
	 //CLOSING WHILE LOOP 
		}
	?>
	</table>
</div>






</body>
</html>