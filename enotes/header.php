<?php
  include("config.php");
  session_start();
  if(isset($_SESSION['user_define_data']))
  {
    $username = $_SESSION['user_define_data']['signup_name'];
    $useremail = $_SESSION['user_define_data']['signup_email'];
  }
  else if(isset($_SESSION['access_token']))
  {
    $username = $_SESSION['userData']['name'];
    $useremail = $_SESSION['userData']['email'];
  }
  else if(isset($_SESSION['google_access_token']))
  {
    $username = $_SESSION['givenName'];
    $useremail = $_SESSION['email'];
  }

?>
<!DOCTYPE html>
<html lang="en-Us">
<head>
	<title>Design</title>
	<!-- Latest compiled and minified CSS -->
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/animate.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  
</head>
<body>
<nav id="navbar" class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                 
      </button>
      <a class="navbar-brand" href="index.php">E-Notes</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <?php
          if(empty($useremail))
          {
        ?>
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php#about">About</a></li>
          <li><a href="index.php#portfolio">Portfolio</a></li>
          <!-- <li><a href="index.php#projects">Projects</a></li> -->
          <li><a href="index.php#contact">Contact</a></li>
          <?php
            }
            else
            {
          ?>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php#about">About</a></li>
            <li><a href="document.php">Documents</a></li>
            <li><a href="yourupload.php">Your Uploads</a></li>
            <li><a href="upload.php">Upload</a></li>          
            <li><a href="index.php#contact">Contact</a></li>
          <?php
            }
          ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
          if(empty($useremail))
          {
        ?>
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <?php
          }
          else
          {
        ?>
        <li><a href="index.php"><span class="glyphicon glyphicon-user"></span> <?php echo $useremail;?></a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        <?php 
          }
        ?>
      </ul>
    </div>
  </div>
</nav>