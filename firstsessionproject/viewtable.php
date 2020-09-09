<?php
include_once('confige.php');
session_start();

if(!isset($_SESSION['email'])){
header("location:http://localhost/phpdoc/firstsessionproject/login.php");
}

$query = mysqli_query($connection,"SELECT * FROM firstsessioninsert ORDER BY id desc;");
?>
<!DOCTYPE html>
<html>
<head>
	<title>View data</title>
	<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<style>
		th{
			text-align: center;
			background-color: #ddd;
			padding-left: 25px;
			padding-right: 25px;
		}
		td{
			text-align: center;
		}
		.logout{
			text-decoration: none;
			color:red;
		}
		.logout:hover{
			cursor: pointer;
			color:green;

		}
	</style>
</head>
<body>

<a href="http://localhost/phpdoc/firstsessionproject/logout.php" class="logout">LOGOUT</a>
<a href="http://localhost/phpdoc/firstsessionproject/updatepass.php" class="logout">CHANGE PASSWORD</a>
<div>&nbsp;</div>

<input type="text" id="btn-input" name="search" placeholder="Search..." />
<table width="50%">
	<tr class="thead">
		<th>ID</th>
		<th>EMAIL</th>
		<th>PASSWORD</th>
		<th>UPDATE</th>
	</tr>
	<?php
		//OPENING WHILE LOOP
		while($row = mysqli_fetch_array($query)){
	?>
	<tr class="sort">
		<td><?php echo $row['id'];?></td>
		<td><?php echo $row['email'];?></td>
		<td><?php echo $row['password'];?></td>
		<?php 
			echo "<td><a href=\"edit_update.php?Id=$row[id]\">EDIT | </a><a href=\"delete_register.php?Id=$row[id]\" onClick=\"return confirm('Are You Sure You Want To Delete this Registration?')\">DELETE</a></td>";
		?>
	
	</tr>
	<?php //CLOSING WHILE LOOP 
		}
	?>
</table>
<script type="text/javascript">
	$(document).ready(function(){
		$("#btn-input").on("keyup", function(){
			var str = $(this).val().toLowerCase();
			$(".sort").filter(function(){
				$(this).toggle($(this).text().toLowerCase().indexOf(str) > -1);
			});
		});
	});
</script>
</body>
</html>