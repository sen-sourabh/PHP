<?php
include_once("configue.php");
session_start();
if(!isset($_SESSION['adminemail'])){
	echo "<script>window.location='http://localhost/phpdoc/project/adminlogin.php'</script>";
}
$result_count = mysqli_query($connection,"SELECT count(*) AS no_of_rows FROM registration");
$row_count = mysqli_fetch_array($result_count);
$no_of_row = $row_count['no_of_rows'];
$query = mysqli_query($connection,"SELECT * FROM registration ORDER BY Id ASC");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Register People Page</title>
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
                <li class="active"><a href="register_people.php">Register Peoples</a></li>
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

<div id="search">
	<div class="container">
		<div class="row">
			<form class="form-inline" action="" method="post" enctype="multipart/form-data">
				<input class="form-control" type="text" name="search" placeholder="Search"/>
				<button class="btn btn-success" type="submit" name="search-btn" vlaue="search">Search</button>	
			</form>
		</div>
	</div>
</div>

<?php

if(isset($_POST['search-btn']))
{
	$search = $_POST['search'];
	if(empty($search))
	{
		echo "<script>window.alert('No Input For Search.');</script>";
		echo "<script>window.location='http://localhost/phpdoc/project/register_people.php';</script>";
	}
	else
	{
		$result_count_search = mysqli_query($connection,"SELECT count(*) AS no_of_row_search FROM registration WHERE username LIKE '$search%'");
		$row_count_search = mysqli_fetch_array($result_count_search);
		$no_of_rows_search = $row_count_search['no_of_row_search'];
		$result = mysqli_query($connection,"SELECT * FROM registration WHERE username LIKE '$search%'");
		$num = mysqli_num_rows($result);
		if($num)
		{
?>
<div class="container">
	<h3>Your Search...</h3><br>
	<p>Number Of Row: <?php echo $no_of_rows_search;?></p><br>

			<table class="table table-striped">
					<tr>
						<th>ID</th>
						<th>USERNAME</th>
						<th>EMAIL</th>
						<th>PASSWORD</th>
						<th>GENDER</th>
						<th>DATE</th>
						<th>PHONE</th>
						<th>CITY</th>
						<th>IMAGES</th>
						<th>UPDATE</th>
					</tr>
	<?php			//OPENING WHILE LOOP
				while($row = mysqli_fetch_array($result))
				{
	?>
				<tr>
						<td><?php echo $row['Id'];?></td>
						<td><?php echo $row['username'];?></td>
						<td><?php echo $row['email'];?></td>
						<td><?php echo $row['password'];?></td>
						<td><?php echo $row['gender'];?></td>
						<td><?php echo $row['date'];?></td>
						<td><?php echo $row['phone'];?></td>
						<td><?php echo $row['city'];?></td>
						<td><img src="img/<?php echo $row['image'];?>" width="100px" height="80px"/></td>
	<?php
						// echo "<td><a href="\edit.php?Id=$row[Id]\">EDIT</a> | <a href="\delete.php?Id=$row[Id]\" onclick="\return confirm('Are You Sure You Want to Delete This Information?')\">DELETE</a></td>";

						echo "<td><a href=\"delete_register.php?Id=$row[Id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete Registration</a></td>";
	?>
					</tr>
	<?php 
		//CLOSING WHILE LOOP 
			}
		}else
		{
			echo "<script>window.alert('No Data Available.');</script>";
			echo "<script>window.location='http://localhost/phpdoc/project/register_people.php';</script>";
		}
	?>
			</table>
	<?php
		}
	}
	?>


</div>
<div class="container">
	<h3>Registrations:</h3><br>
	<p>Number Of Row: <?php echo $no_of_row;?></p><br>

	<table class="table table-striped">
		<tr>
			<th>ID</th>
			<th>USERNAME</th>
			<th>EMAIL</th>
			<th>PASSWORD</th>
			<th>GENDER</th>
			<th>DATE</th>
			<th>PHONE</th>
			<th>CITY</th>
			<th>IMAGES</th>
			<th>UPDATE</th>
		</tr>
	<?php
			//OPENING WHILE LOOP
			while($row = mysqli_fetch_array($query))
			{
	?>
		<tr>
			<td><?php echo $row['Id'];?></td>
			<td><?php echo $row['username'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['password'];?></td>
			<td><?php echo $row['gender'];?></td>
			<td><?php echo $row['date'];?></td>
			<td><?php echo $row['phone'];?></td>
			<td><?php echo $row['city'];?></td>
			<td><img src="img/<?php echo $row['image'];?>" width="100px" height="80px"/></td>
	<?php
			// echo "<td><a href="\edit.php?Id=$row[Id]\">EDIT</a> | <a href="\delete.php?Id=$row[Id]\" onclick="\return confirm('Are You Sure You Want to Delete This Information?')\">DELETE</a></td>";

			echo "<td><a href=\"delete_register.php?Id=$row[Id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete Register</a></td>";
	?>
		</tr>
	<?php
	 //CLOSING WHILE LOOP 
		}
	?>
	</table>
</div>
</body>
</html>