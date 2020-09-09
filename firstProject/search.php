<!DOCTYPE html>
<html>
<head>
	<title>Search Output</title>
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
	</style>
</head>
<body>
<div>
	<form action="" method="post">
		<input type="text" name="search" placeholder="Search"/>
		<button type="submit" name="search-btn" vlaue="search">Search</button>	
	</form>
</div>

<?php
include_once('confige.php');
if(isset($_POST['search-btn']))
{
	$search = $_POST['search'];
	if(empty($search))
	{
		echo "<script>window.alert('No Input For Search.');</script>";
		echo "<script>window.location='http://localhost/phpdoc/firstProject/viewdata.php';</script>";
	}
	else
	{
		$result = mysqli_query($connection,"SELECT * FROM firstinsert WHERE username LIKE '$search%'");
?>
		<h3>Your Search Table...</h3><br>
		<div>&nbsp;</div>
		<table width='90%'>
				<tr class='thead'>
					<th>ID</th>
					<th>USERNAME</th>
					<th>EMAIL</th>
					<th>PASSWORD</th>
					<th>GENDER</th>
					<th>DATE</th>
					<th>PHONE</th>
					<th>SKILLS</th>
					<th>COUNTRY</th>
					<th>IMAGES</th>
					<th>UPDATE</th>
				</tr>
<?php			//OPENING WHILE LOOP
			while($row = mysqli_fetch_array($result))
			{
?>
			<tr>
					<td><?php echo $row['id'];?></td>
					<td><?php echo $row['username'];?></td>
					<td><?php echo $row['email'];?></td>
					<td><?php echo $row['password'];?></td>
					<td><?php echo $row['gender'];?></td>
					<td><?php echo $row['date'];?></td>
					<td><?php echo $row['phone'];?></td>
					<td><?php echo $row['skills'];?></td>
					<td><?php echo $row['country'];?></td>
					<td><img src="img/<?php echo $row['image'];?>"width="100px" height="80px"/></td>
<?php
					// echo "<td><a href="\edit.php?Id=$row[Id]\">EDIT</a> | <a href="\delete.php?Id=$row[Id]\" onclick="\return confirm('Are You Sure You Want to Delete This Information?')\">DELETE</a></td>";

					echo "<td><a href=\"edit_and_update.php?Id=$row[id]\">Edit</a> | <a href=\"delete.php?Id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
?>
				</tr>
<?php 
	//CLOSING WHILE LOOP 
		}
?>
		</table>
<?php
	}
}
?>


</body>
</html>

