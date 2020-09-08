<?php
	include("header.php");
	include("config.php");
	if(!empty($useremail))
	{
		header('Location: index.php');
	}
	$redirectURL = "http://localhost/phpdoc/design/fb-callback.php";
	$permissions = ['email'];
	$FloginURL = $helper->getLoginUrl($redirectURL, $permissions);
	$GloginURL = $gClient->createAuthUrl();
?>

<div id="signup">
	<div class="container">
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 sign-form">
				<h3 class="form-heading">Log In</h3>
				<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
					<input type="hidden" name="login" value="login"/>
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
							<a class="btn btn-link btn-md forget-link" href="forgetpassword.php">Forget Password ? </a>
							<button class="btn btn-primary btn-md sign-now" data-toggle="tooltip" data-placement="bottom" title="Continue with Us">Log In Now</button>
						</div>
					</div>
				</form>
				<div class="col-md-12 facebook-col">
					<div class="form-group">
						<button id="face-btn" onclick="window.location = '<?php echo $FloginURL ?>';" data-toggle="tooltip" data-placement="bottom" title="Continue with Facebook" class="btn btn-facebook"><i class="fab fa-facebook-f"></i>&nbsp;Continue with Facebook</button>
					</div>
				</div>
				<div class="col-md-12 google-col">
					<div class="form-group">
						<button id="google-btn" onclick="window.location = '<?php echo $GloginURL ?>';" data-toggle="tooltip" data-placement="bottom" title="Continue with Google" class="btn btn-google"><i class="fab fa-google"></i>&nbsp;Continue with Google</button>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 form-btn">
				<h3 class="form-heading">Sign Up</h3>
				<p>Aliquam vestibulum orci sed lectus pharetra, tincidunt facilisis eros euismod. Etiam vulputate at ex eu mollis. Nam ut risus sodales tortor sodales pulvinar id eu libero. Nam a massa eget est tincidunt tincidunt.</p>
				<button class="btn btn-primary btn-md" onclick="window.location.href='signup.php'" data-toggle="tooltip" data-placement="bottom" title="Not have an account yet ?">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<?php
if(isset($_POST['login']))
{
	$email = $_POST['email'];
	$pass = $_POST['password'];

	$query = mysqli_query($con,"SELECT * FROM signup WHERE signup_email LIKE '$email'");
	$num = mysqli_num_rows($query);
	if($num == 1)
	{
		$_SESSION['user_define_data'] = mysqli_fetch_assoc($query);  
		header('Location: index.php');
	}
	else
	{
		header('Location: login.php');
		// echo "<script>alert('Password is Wrong.')</script>";
	}
}
?>

<?php
	require("footer.php");
?>