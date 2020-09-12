<?php 
include("config.php");
session_start();
if(!isset($_SESSION['usersession'])){
	echo "<script>window.location.href= 'logout.php'</script>";
}
try{
	$id = $_SESSION['usersession']['id'];
	$result = $demosql->query("SELECT * FROM users WHERE id='$id'");
}catch(Exception $e){
	echo "Exception : ".$e->getMessage();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<h1>Welcome! <?php echo $_SESSION['usersession']['name'];?></h1>
<a href="logout.php">LOGOUT</a>
<table class="table table-stripped table-hover">
	<tr>
		<th>ID</th>
		<th>IMAGE</th>
		<th>NAME</th>
		<th>EMAIL</th>
	</tr>
<?php
	while($row = $result->fetch(PDO::FETCH_ASSOC)){
?>
	<tr>
		<td><?php echo $row['id'];?></td>
		<td><img src="img/<?php echo $row['image'];?>" style="width: 100px;height:100px;"/></td>
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row['email'];?></td>
	</tr>
<?php
	}
?>
</table>
</body>
</html>