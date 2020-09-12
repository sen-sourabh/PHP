<?php
include("config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>PDO PostgreSQL SESSION</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<form method="post" action="" enctype="multipart/form-data">
		<input class="form-control" type="text" name="name" placeholder="Name"/>
		<input class="form-control" type="email" name="email" placeholder="Email"/>
		<input class="form-control" type="password" name="pass" placeholder="Password"/>
		<input type="file" name="image"/><br>
		<input class="btn btn-success" type="submit" name="reg" value="Register Now"/>
	</form>
	<a href="login.php">LOGIN</a>
</div>
</body>
</html>
<?php
if(isset($_POST['reg'])){
	$id = rand(1, 999999);
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$image = $_FILES['image']['name'];
	$temp_name = $_FILES['image']['tmp_name'];
	move_uploaded_file($temp_name, "img/$image");
	if($demosql->query("SELECT id FROM users WHERE id='$id'")->rowCount() > 0){
		echo "Please Try Again in some time.";
	}else{
		if($demosql->query("INSERT INTO users VALUES ('$id','$name','$email','$pass','$image')")){
			echo "Success.";	
		}else{
			echo "Error : ";
		}
	}
}
?>