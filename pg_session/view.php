<?php
include("config.php");
session_start();
if(!isset($_SESSION['adminuser'])){
	echo "<script>window.location.href= 'login.php'</script>";
}
$id = $_SESSION['adminuser']['id'];
$result = pg_query("SELECT * FROM users WHERE id='$id'");
?>
<!DOCTYPE html>
<html>
<head>
	<title>POSTGRES SESSION</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<h2>Welcome! <?php print_r($_SESSION['adminuser']['name']);?></h2><a href="logout.php">Logout</a>
	<table class="table table-stripped table-hover">
		<tr>
			<th>ID</th>
			<th>Image</th>
			<th>Name</th>
			<th>Email</th>
			<th>Password</th>
			<th>Actions</th>
		</tr>
		<?php
			while($row = pg_fetch_assoc($result)){
		?>
		<tr>
			<td><?php echo $row['id'];?></td>
			<td><img src="img/<?php echo $row['image'];?>" style="width:100px;height:100px;"/></td>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['password'];?></td>
			<td><a href="delete.php?id=<?php echo $row['id'];?>">DELETE</a> | <a href="update.php?id=<?php echo $row['id'];?>">UPDATE</a></td>
		</tr>
		<?php
			}
		?>
	</table>
</body>
</html>