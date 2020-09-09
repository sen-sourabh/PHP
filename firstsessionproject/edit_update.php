<?php
include_once('confige.php');
session_start();

if(!isset($_SESSION['email'])){
header("location:http://localhost/phpdoc/firstsessionproject/login.php");
}

$Id = $_GET['Id'];
$query = mysqli_query($connection,"SELECT * FROM firstsessioninsert WHERE id=$Id");
while($row=mysqli_fetch_array($query))
{
	$email = $row['email'];
	$password = $row['password'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit_Update</title>
</head>
<body>
<center>
	<form name="update" action="" method="post">
		<input type="email" name="email" value="<?php echo $email?>" required="required"/>
		<input type="password" name="password" value="<?php echo $password?>" required="required"/>
		<button type="submit" name="update" value="submit">Update</button>
		<button type="submit" name="cancel" value="cancel" onclick="redirect()">Cancel</button>

	</form>
</center>
</body>
</html>
<?php
if(isset($_POST['update']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
	if(empty($email) || empty($password))
	{
		echo "<script>window.alert('Please Fill All Fields.');</script>";
	}
	else
	{
		$query = mysqli_query($connection,"SELECT email FROM firstsessioninsert WHERE email LIKE '$email'");
		$num = mysqli_num_rows($query);
		if($num == 1)
		{
			echo "<script>window.alert('Email Already Used, Try with Different Email.')</script>";	
		}
		else
		{
			mysqli_query($connection,"UPDATE firstsessioninsert SET email='$email', password='$password' WHERE id=$Id");
			//DATA UPDATED SUCCESSFULLY
			echo "<script>window.alert('data successfully updated');</script>";
			//header("Locaton: http://localhost/phpdoc/session/viewtable.php");
			echo "<script>window.location='http://localhost/phpdoc/firstsessionproject/viewtable.php';</script>";
		}
	}
}
if(isset($_POST['cancel']))
{
	echo "<script>window.location='http://localhost/phpdoc/firstsessionproject/viewtable.php';</script>";
}
?>
