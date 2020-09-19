<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Website for people who search Rooms, Flats and BHKs on rent.">
  <meta name="keywords" content="Rent, Rent rooms, Rooms, Flats, Rent flats, rent BHKs, single rooms, double rooms, paid rooms">
  <meta name="author/admin" content="Sourabh Sen(junior PHP Developer)">
  <!-- <meta http-equiv="refresh" content="30"> -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--######################################## BOOTSTRAP 4 ###########################################-->

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<link href="<?php echo base_url(); ?>/assets/css/topnavbar.css" rel="stylesheet">
<!-- Load an icon library to show a hamburger menu (bars) on small screens -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="<?php echo base_url(); ?>/assets/js/topnavbar.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/slider.js"></script>

<!-- For Google Translater -->
<!-- GTranslate: https://gtranslate.io/ -->
<style type="text/css">
/*REGISTRATION PAGE VERTICAL LINE*/
.vl {
  border-left: 3px solid #007bff;
  height: 500px;
}
.col31
{
  text-align: center!important;
  padding-top: 180px!important;
  /*padding-bottom: 100px!important;*/
}
.col32
{
  text-align: center!important;
  padding-top: 20px!important;
  /*padding-bottom: 100px!important;*/
}

@media screen and (max-width: 600px) {
  .col2{
    padding-top: 40px;
    padding-bottom: 40px;
  }
  .vl{
    border-top: 6px solid #007bff;
    height:1%;  
  }
}


#goog-gt-tt {display:none !important;}
.goog-te-banner-frame {display:none !important;}
.goog-te-menu-value:hover {text-decoration:none !important;}
.goog-te-gadget-icon {background-image:url('https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg') !important;background-position:0 0 !important;}
body {top:0 !important;}

</style>


</head>
<body>
<div class="progress-container">
  <div class="progress-bar" id="myBar"></div>
</div>

<div class="header">
  <h1>Porterhouse & House</h1>
  <p>which suitable to you</p>
</div>

<div class="topnav" id="myTopnav">
  <a href="index">
    <i class="fa fa-home"></i>    Home
  </a>
  <a href="about">
    <i class="fa fa-question-circle"></i>    About
  </a>
  <a href="service">
    <i class="fa fa-briefcase"></i>    Service
  </a>
  <a href="rooms">
    <i class="fa fa-hotel"></i>    Rooms/Houses
  </a>
  <a href="contact">
    <i class="fa fa-phone"></i>    Contact
  </a>
  <a href="register" class="active">
    <i class="fa fa-user"></i>    Registration
  </a>
  <a href="loggedin">
    <i class="fa fa-sign-in"></i>    Login
  </a>
  <a href="javascript:void(0);" class="icon" onclick="myMenuFunc()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<!--############################################ SLIDE IMAGE #############################-->
<div class="fluid-container">
  <div class="container1">
    <img src="<?php echo base_url();?>assets/img/bedroom.jpg" style="width:100%;height: auto;"/>
    <div class="overlay">
      <center>
        <h2 class="page_head">Registration</h2>
      </center>
    </div>
  </div>
</div>

<!--############################################ BOX GAPS ######################################-->

<div class="fluid-container">
  <br>
  <br>
  <div class="container">
  <h2 class="heading2">Registration form</h2>
  <hr class="hr_underline">
  <div class="container">
    <div class="row">
      <?php 
        if($register = $this->session->flashdata('Register'))
        {
      ?>
        <div class="alert alert-success alert-dismissible fade show"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Welcome! </strong><?php echo $register; ?></div>
      <?php
        }
        else if($email_exist = $this->session->flashdata('Email_exist'))
        {
      ?>
        <div class="alert alert-warning alert-dismissible fade show"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Sorry! </strong><?php echo $email_exist; ?></div>
      <?php
        }
        else if($c_pass = $this->session->flashdata('Confirm_password'))
        {
      ?>
        <div class="alert alert-warning alert-dismissible fade show"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Sorry! </strong><?php echo $c_pass; }?></div>
    </div>
  </div>
</div>
  <br>
</div>

<!--############################################ BLOGS BOXES ######################################-->

<div class="container">
  <div class="row">
    <div class="col-lg-6 col-xl-6 col-md-12 col-sm-12 col-12">
      <form method="post">
        <input class="form-control" type="text" name="username" required="required" placeholder="Username"/>
        <br>
        <input class="form-control" type="email" name="email" required="required" placeholder="Email"/>
        <br>
        <input class="form-control" type="password" name="password" required="required" placeholder="Password"/>
        <br>
        <input class="form-control" type="password" name="confirm_password" required="required" placeholder="Confim Password"/>
        <br>
        <input class="form-control" type="text" name="phone" required="required" placeholder="Phone"/>
        <br>
        <input class="form-control" type="text" name="country" required="required" placeholder="Country"/>
        <br>
        <input class="form-control" type="text" name="state" required="required" placeholder="State"/>
        <br>
        <input class="form-control" type="text" name="city" required="required" placeholder="City"/>
        <br>
        <input class="btn btn-primary reg" type="submit" name="registered" value="Register"/>
        <input class="btn btn-default reg" type="reset" name="reset" value="Reset"/>
      </form>
    </div>
  </div>
</div>

<div class="fluid-container">
  <br>
  <br>
  <br>
</div>
<!--############################################ FOOTER ######################################-->
<div id="befooter" class="fluid-container">

</div>

<div id="footer" class="fluid-container">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-xl-4 col-md-4 col-sm-12 col-12">
        <h3>Porterhouse & House</h3>
        <hr style="border-color:#007bff;margin-bottom: 2px;">
        <p>
          which suitable to you
          <br><br>
          In this tutorial, we are going to learn about creating a simple login form in CodeIgniter. In login form, we made registration module, login module and admin panel using sessions.
        </p>
        <div class="div-footer-icon">
          <ul class="footer-icon">
            <li><a class="icon-link" href="https://facebook.com/"><i class="fa fa-facebook footer-iconfacebook"></i></a></li>
            <li><a href="https://twitter.com/"><i class="fa fa-twitter footer-icons"></i></a></li>
            <li><a href="https://plus.google.com/"><i class="fa fa-google footer-icons"></i></a></li>
            <li><a href="https://pinterest.com/"><i class="fa fa-pinterest footer-icons"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-xl-4 col-md-4 col-sm-12 col-12">
        <h3>Explore</h3>
        <hr style="border-color:#007bff">
        <?php
          if($this->session->userdata('email'))
          {
        ?>
            <ul id="footer-list">
              <li><a href="index" class="btn btn-link btn-sm">
                <i class="fa fa-home"></i>   Home
              </a></li>
              <li><a href="about" class="btn btn-link btn-sm">
                <i class="fa fa-question-circle"></i>   About
              </a></li>
              <li><a href="service" class="btn btn-link btn-sm">
                <i class="fa fa-briefcase"></i>   Service
              </a></li>
              <li><a href="rooms" class="btn btn-link btn-sm">
                <i class="fa fa-hotel"></i>   Rooms/Houses
              </a></li>
              <li><a href="housedata" class="btn btn-link btn-sm">
                <i class="fa fa-upload"></i>   Upload Details
              </a></li>
              <li><a href="changepassword" class="btn btn-link btn-sm">
                <i class="fa fa-retweet"></i>   Change Password
              </a></li>
              <li><a href="contact" class="btn btn-link btn-sm">
                <i class="fa fa-phone"></i>   Contact
              </a></li>
              <li><a href="logout" class="btn btn-link btn-sm">
                <i class="fa fa-sign-out"></i>   Logout
              </a></li>
            </ul>
        <?php 
          }
          else
          {
        ?>
            <ul id="footer-list">
              <li><a href="index" class="btn btn-link btn-sm">
                <i class="fa fa-home"></i>   Home
              </a></li>
              <li><a href="about" class="btn btn-link btn-sm">
                <i class="fa fa-question-circle"></i>   About
              </a></li>
              <li><a href="service" class="btn btn-link btn-sm">
                <i class="fa fa-briefcase"></i>   Service
              </a></li>
              <li><a href="rooms" class="btn btn-link btn-sm">
                <i class="fa fa-hotel"></i>   Rooms/Houses
              </a></li>
              <li><a href="contact" class="btn btn-link btn-sm">
                <i class="fa fa-phone"></i>   Contact
              </a></li>
              <li><a href="register" class="btn btn-link btn-sm">
                <i class="fa fa-user"></i>   Registration
              </a></li>
              <li><a href="loggedin" class="btn btn-link btn-sm">
                <i class="fa fa-sign-in"></i>   Login
              </a></li>
            </ul>
        <?php 
          }
        ?>
      </div>
      <div class="col-lg-4 col-xl-4 col-md-4 col-sm-12 col-12">
        <h3>Vistors</h3>
        <hr style="border-color:#007bff">
        <p>Translate in your language
          <!-- GTranslate: https://gtranslate.io/ -->
          <div id="google_translate_element"></div>
          <br>
          Visitors on your Website
          <div align=center>
            <img src='https://www.counter12.com/img-0xW12ZZZbd23D9ab-17.gif' border='0' alt='counter'>
            <script type='text/javascript' src='https://www.counter12.com/ad.js?id=0xW12ZZZbd23D9ab'></script>
          </div>
        </p>
      </div>
    </div>
  </div>
</div>

<div id="after-footer" class="fluid-container">
  <h6>© 2018 Copyright<a href="#" class="btn btn-link btn-md">Porterhouse&House</a></h6>
</div>

<!-- GTranslate: https://gtranslate.io/ -->
<script type="text/javascript">
function googleTranslateElementInit() {new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE,autoDisplay: false, includedLanguages: ''}, 'google_translate_element');}
</script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script>
// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}
</script>
</body>
</html>



