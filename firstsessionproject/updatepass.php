<?php
include_once('confige.php');
session_start();

if(!isset($_SESSION['email'])){
header("location:http://localhost/phpdoc/firstsessionproject/login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Password</title>
	<style type="text/css">
		.form-control input{
			margin-bottom: 1%;
			width:20%;
			height:30px;
		}
		.form-control button{
			margin-bottom: 1%;
			width:20%;
			background-color: #3ec73eeb;
			border: 1px solid #3ec73eeb;
			outline:none;
			color:#fff;
			cursor:pointer;
			height:35px;
		}
		
		a{
			text-decoration: none;
			color:red;
			cursor:pointer;
		}
		a:hover{
		
			color:green;
		}
	</style>
</head>
<body>
<a href="http://localhost/phpdoc/firstsessionproject/logout.php">LOGOUT</a>&nbsp;<a href="viewtable.php">HOME</a>&nbsp;<h3><?php echo $_SESSION['email'];?></h3>

<center>
	<fieldset>
		<legend><h2>Update Passowrd</h2></legend>
		<form class="form-control" name="Password_updation" action="" method="post">
			<input type="password" name="old_password" placeholder="Old Passowrd" required="required"/><br>
			<input type="password" name="new_password" placeholder="New Password" required="required"/><br>
			<input type="password" name="confirm_password" placeholder="Confirm Password" required="required"/><br>
			<button type="submit" name="update" value="submit">Submit</button>
		</form>
	</fieldset>
</center>
</body>
</html>
<?php
	if(isset($_POST['update']))
	{
		$email = $_SESSION['email'];
		$old_password = $_POST['old_password'];
		$new_password = $_POST['new_password'];
		$confirm_password = $_POST['confirm_password'];
		if(empty($old_password) || empty($new_password) || empty($confirm_password))
		{
			echo "<script>window.alert('Please Fill All Fields.')</script>";
			echo "<script>window.loacation='http://localhost/phpdoc/firstsessionproject/updatepass.php'</script>";
			//header('location:http://localhost/phpdoc/passwordproject/updatepassword.php');
		}
		else
		{
			$query = mysqli_query($connection,"SELECT id,password FROM firstsessioninsert WHERE email='$email' && password='$old_password'");
			$row = mysqli_fetch_array($query);
			$Id = $row['id'];
			if($Id)
			{
				if($new_password != $confirm_password){
					echo "<script>window.alert('Both Password Not Matched.')</script>";
					echo "<script>window.loacation='http://localhost/phpdoc/firstsessionproject/updatepass.php'</script>";
				}
				else
				{
					mysqli_query($connection,"UPDATE firstsessioninsert SET password='$new_password' WHERE id=$Id");
					echo "<script>window.alert('Password Updated.')</script>";
					echo "<script>window.loacation='http://localhost/phpdoc/firstsessionproject/updatepass.php'</script>";
				}
			}
			else
			{	
				echo "<script>window.alert('Old Password is Not Found.')</script>";
				echo "<script>window.loacation='http://localhost/phpdoc/firstsessionproject/updatepass.php'</script>";
			}
		}
		
		//header('location:http://localhost/phpdoc/passwordproject/updatepassword.php');
	}	


?>