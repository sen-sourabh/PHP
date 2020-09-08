<?php
	require("header.php");
	require("config.php");
	if(!empty($useremail))
	{
		header('Location: index.php');
	}
?>
<div id="signup">
	<div class="container">
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 sign-form">
				<h3 class="form-heading">Sign Up</h3>
				<form class="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
					<input type="hidden" name="signup" value="signup"/>
					<div class="col-md-12">
						<div class="form-group">
							<input class="form-control text-form" type="text" name="name" required="required"/>
							<span class="floating-label">Name</span>		
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<input class="form-control text-form" type="email" name="email" required="required"/>
							<span class="floating-label">Email</span>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<input class="form-control text-form" type="password" name="password" required="required"/>
							<span class="floating-label">Password</span>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<input class="form-control text-form" type="password" name="confirm_pass" required="required"/>
							<span class="floating-label">Confirm Password</span>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label>Gender : &emsp;</label><label>&nbsp;<input type="radio" name="gender" value="male">&nbsp;Male</label>&emsp;<label>&nbsp;<input type="radio" name="gender" value="female">&nbsp;Female</label>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<input class="form-control text-form" type="date" name="dob" required="required"/>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<button class="btn btn-primary btn-md sign-now" data-toggle="tooltip" data-placement="bottom" title="Continue with Us">Sign Up Now</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 form-btn">
				<h3 class="form-heading">Log In</h3>
				<p>Aliquam vestibulum orci sed lectus pharetra, tincidunt facilisis eros euismod. Etiam vulputate at ex eu mollis. Nam ut risus sodales tortor sodales pulvinar id eu libero. Nam a massa eget est tincidunt tincidunt.</p>
				<button class="btn btn-primary btn-md" onclick="window.location.href='login.php'" data-toggle="tooltip" data-placement="bottom" title="Already have an account ?">Log In</button>
			</div>
		</div>
	</div>
</div>


<?php
if(isset($_POST['signup']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$cpass = $_POST['confirm_pass'];
	$gender = $_POST['gender'];
	$dob = $_POST['dob'];
	$date = date('Y-m-d H:i:s A');
	
	$query = mysqli_query($con,"SELECT * FROM signup WHERE signup_email LIKE '$email'");
	$num = mysqli_num_rows($query);
	if($num > 0)
	{
		echo "<script>alert('Email already used, Try with different Email.')</script>";
		header('Location: signup.php');
	}
	else
	{
		if($pass != $cpass)
		{
			header('Location: signup.php');
		}
		else
		{
			mysqli_query($con,"INSERT INTO signup VALUES ('','$name','$email','$pass','$gender','$dob','$date')");
			header('Location: login.php');
		}
	}
}
?>

<?php
	require("footer.php");
?>