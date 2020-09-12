<!DOCTYPE html>
<html>
<head>
	<title>Online Poll System</title>
	<link rel="icon" type="icon/jpg" href="./img/vote_box.jpg">	
	<link rel="stylesheet" type="text/css" href="css/indexcss.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

<style type="text/css">
	.navbar-default {
	    height: 8%!important;
    }
    .navbar-head h3{
    	margin-top: 8%!important;
    	margin-bottom: 0!important;
    }
	.nav a{

		text-decoration: none!important;
		font-family: candara!important;
		font-weight: bold!important;
		font-size: 18px!important;
		color:#5cb85c!important;
	}
	.nav a:hover{
		transition: 0.3s ease-in-out;
		text-decoration: none!important;
		font-family: candara!important;
		font-weight: bold!important;
		color:#379837!important;
	}
	.forget{
		font-family: candara!important;
		font-weight: bold!important;
		font-size: 14px!important;
		color:#5cb85c!important;	
	}
	.active{
		background-color: gray;
	}
	.text{
		color:#000000c9;
		font-weight: normal;
		text-decoration: none;
	}
	.text:hover{
		color:#278c27;
		text-decoration: none;
	}
</style>
</head>
<body>


<nav class="navbar navbar-fixed-top navbar-default">
	<div class="container">
		<div class="navbar-head" style="float:left;width:20%;">
			<h3 style="font-family: candara;color: #278c27;float:left;">
				<b>POLL SYSTEM</b>
			</h3>
		</div>
		<div class="nav navbar-menu" style="position:relative;float:right;width:80%;">
			<ul class="nav navbar-nav navbar-right">	
				<li class>
					<a href="index.php">LOGIN</a>
				</li>
				<li class>	
					<a href="registration.php">REGISTRATION</a>
				</li>
				<li class>
					<a href="adminlogin.php">ADMIN</a>
				</li>
				<li class="active">
					<a href="howtowork.php">HOW TO WORK</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<br><br>
<br><br>
<br><br>

<div id="how">
	<div class="container">
		<h1>Online Polling System</h1>
		<br>
		<h4>Online Polling System provide platform for online voting for people. It saves our time, complexity and paper work in order to election. It is easy way to take polls and choose better leader.</h4>
		<hr style="color:#278c27;">
		<br><br>
	<!-- ######################## Basic Info ##################### -->
		<blockquote style="border-left:5px solid #278c27;"><h3>How to start?</h3></blockquote>
		<h4>
			<ul>
				<li>Go to Registration -> <a href="registration.php" class="text">Registration</a></li>
				<br>
				<h4>Submit your information and register yourself.</h4>
				<br>
				<li>Go to Login -> <a href="index.php" class="text">Login</a></li>
				<br>
				<h4>Do log in as a User.</h4>
				<br>
				<h6>*Only unique Email id is use at the time of registration.</h6>
			</ul>
		</h4>
		<hr style="color:#278c27;">
		<br><br>
		<!-- ######################## About User ##################### -->
		<blockquote style="border-left:5px solid #278c27;"><h3>What user can do?</h3></blockquote>
		<h4>
			<ul>
				<li>Choose a post for candidature: Go to Participate in Election panel -></li>
				<br>
				<p>Choose your post -> enter recaptcha and click on submit. After submission, Email of your post goes to the admin email id from your email. Then admin selects you to as a candidate.</p>
				<br>
				<li>Give your vote to the candidate: Go to Participate in Voting/Polling panel -></li>
				<br>
				<p>Choose your voting/polling post -> choose one of the candidates from them and click on submit, your vote/poll is submitted to your candidate.</p>
				<br>
				<h6>*Only once you can vote on the candidate's post.</h6>
				<h6>*Only one post you can choose for candidature.</h6>
				<h6>*When you submit your vote to the candidate/submit your post for candidature then one popup or message will be displayed. If not, then don't worry, your submission is successful.</h6>
			</ul>
		</h4>
		<hr style="color:#278c27;">
		<br><br>
		<!-- ######################## About Admin ##################### -->
		<blockquote style="border-left:5px solid #278c27;"><h3>What <a href="adminlogin.php" class="text">admin</a> can do?</h3></blockquote>
		<h4>
			<ul>
				<li>Register another admin:</li>
				<br>
				<p>Fill admin registration form and submit information about new admin.</p>
				<br>
				<li>Positions/Posts:</li>
				<br>
				<p>Select position/post for start elections and delete posts.</p>
				<br>
				<li>Manage Candidates:</li>
				<br>
				<p>From emails, select the post and register candidates to the position/post and delete candidates.</p>
				<br>
				<li>View Votes:</li>
				<br>
				<p>Count vote of candidates to announce the winning candidate for specific position/post.</p>
				<br>
				<li>Registrations:</li>
				<br>
				<p>View all register peoples data and delete registrations.</p>
				<br>
				<li>Message:</li>
				<br>
				<p>Put message for users.</p>
				<br>
				<h6>*Only registered people can will be a user or admin.</h6>
			</ul>
		</h4>
		<hr style="color:#278c27;">
		<br><br>
		<!-- ######################## Forget Passowrd ##################### -->
		<blockquote style="border-left:5px solid #278c27;"><h3>When you forget your password?</h3></blockquote>
		<h4>
			<ul>
				<li>Go to Forget Password -> <a href="userforgetpassword.php" class="text">Forget Password</a></li>
				<br>
				<h4>Submit your registered Email id, then will automatically your password sent to your email id.</h4>
				<br>
				<h6>*When you submit your Email id then one popup or message will be displayed. If not, then don't worry, check your email/wait a few seconds..</h6>
			</ul>
		</h4>
	</div>
</div>
<br><br>
<br><br>
<br><br>
<br><br>
</body>
</html>