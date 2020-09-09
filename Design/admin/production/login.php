<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="">
              <h1>Login Form</h1>
              <div>
                <input name="email" type="email" class="form-control" placeholder="Email" required="required"/>
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="pass" required="required"/>
              </div>
              <div>
                <button type="submit" class="btn btn-default submit" name="login">Log in</button>
                <!-- <a class="reset_pass" href="#">Lost your password?</a> -->
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div class="clearfix"></div>
                <br/>

                <div>
                  <h1><i class="fa fa-paw"></i> E-notes</h1>
                  <p>©2016 All Rights Reserved. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>


<?php
  require("config.php");
  if(isset($_POST['login']))
  {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $query = mysqli_query($con,"SELECT * FROM admin WHERE admin_email='$email' AND admin_password='$pass'");
    $num = mysqli_num_rows($query);
    if($num > 0)
    {
      session_start();
      $_SESSION['userdata'] = mysqli_fetch_assoc($query);
      echo "<script>window.location.href= 'index.php'</script>";
    }
    else
    {
      echo "<script>alert('Invalid Email or Password.')</script>"; 
      echo "<script>window.location.href= 'login.php'</script>";
    }
  }
?>