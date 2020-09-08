<?php
	require("header.php");
	require("config.php");
?>

<div id="signup">
	<div class="container">
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 sign-form">
				<h3 class="form-heading">Forget Password</h3>
				<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
					<input type="hidden" name="forgetpass" value="forgetpass"/>
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
							<a class="btn btn-link btn-md forget-link" href="login.php">Remember Password ? </a>
							<button class="btn btn-primary btn-md sign-now">Send Now</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 form-btn">
				<h3 class="form-heading">Sign Up</h3>
				<p>Aliquam vestibulum orci sed lectus pharetra, tincidunt facilisis eros euismod. Etiam vulputate at ex eu mollis. Nam ut risus sodales tortor sodales pulvinar id eu libero. Nam a massa eget est tincidunt tincidunt.</p>
				<button class="btn btn-primary btn-md" onclick="window.location.href='signup.php'">Sign Up</button>
			</div>
		</div>
	</div>
</div>


<?php
if(isset($_POST['forgetpass']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];

	$query = mysqli_query($con,"SELECT * FROM signup WHERE signup_email LIKE '$email'");
	$row=mysqli_fetch_assoc($query);
	$name = $row['signup_name'];
	$pass = $row['signup_password'];
	$num = mysqli_num_rows($query);
	if($num == 1)
	{
		$to = $email;
		$subject = "Your Personal Info from Website Name";
		$body = "<h3>Greetings</h3><br><p><strong>Username: </strong>".$name."<br><strong>Email: </strong>".$email."<br><strong>Password: </strong>".$pass."<br></p>";
		$header = "From: sourabhsen201313@gmail.com";

		if(mail($to,$subject,$body,$header))
		{
			echo "<script>alert('Check your inbox now.')</script>";
		}
		else
		{
			echo "Something went wrong, Try again in some time.";
		}
	}
}
?>
<?php
	require("footer.php");
?>