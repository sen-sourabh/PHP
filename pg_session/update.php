<?php
include("config.php");
session_start();
if(!isset($_SESSION['adminuser'])){
	echo "<script>window.location.href= 'login.php'</script>";
}
$id = $_GET['id'];
$result = pg_query("SELECT * FROM users WHERE id='$id'");
?>
<!DOCTYPE html>
<html>
<head>
	<title>POSTGRES SESSION</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<?php
		while($row = pg_fetch_assoc($result)){
	?>
	<form method="post" action="" enctype="multipart/form-data">
		<input class="form-control" type="text" name="name" value="<?php echo $row['name'];?>" placeholder="Name"/>
		<input class="form-control" type="email" name="email" placeholder="Email" value="<?php echo $row['email'];?>"/>
		<!-- <input class="form-control" type="password" name="pass" placeholder="Password"/> -->
		<input type="file" name="image"/>
		<input type="hidden" value="<?php echo $row['image'];?>" name="old_img"><br>
		<input class="btn btn-success" type="submit" name="edit" value="Update Register"/>
	</form>
	<?php
		}
	?>
</div>
</body>
</html>
<?php
if(isset($_POST['edit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	
	if(!empty($_FILES['image']['name'])){
		$image = $_FILES['image']['name'];
		$temp_name = $_FILES['image']['tmp_name'];
		move_uploaded_file($temp_name, "img/$image");
	}else{
		$image = $_POST['old_img'];
	}
	if(pg_query("UPDATE users SET name='$name', email='$email', image='$image' WHERE id='$id'")){
		echo "<script>window.location.href= 'view.php'</script>";
	}else{
		echo "Error.";
	}
}
?>