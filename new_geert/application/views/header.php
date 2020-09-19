<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Geert Gevaar</title>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/main-style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/https://fonts.googleapis.com/css?family=Niramit:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=KoHo:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>

<body>


<header>
    <div class="top_bar">
        <div class="container-fluid">
            <div class="row">
                <div class="top_bar_in">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="top_bar_left">
                            <ul>
                                <!-- <li><a href="#">TOLL FREE : (00) 000 111 222</a></li> -->
                                <li><a href="#">MAIL INFO : info@domain.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="top_bar_right">
                        	<div id="google_translate_element" style="float: right;"></div>
                        	<script type="text/javascript">
							function googleTranslateElementInit() {
							  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'de,en,fr,it,nl', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
							}
							</script>
							<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <!-- <li><a href="#"><i class="fab fa-twitter"></i></a></li> -->
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <!-- <li><a href="#"><i class="fab fa-skype"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="logo_area">
        <div class="container-fluid">
            <div class="row">
            <div class="logo_area_in">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="logo_area_left">
                        <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.png"></a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-5 col-xs-12">
                  <div class="logo_area_center">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <button class="btn" type="button">
                                <!-- <span class=" glyphicon glyphicon-search"></span> -->
                                Search
                            </button>
                        </span>
                    </div>
                  </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-12">
                	 <?php if($this->session->userdata('isUserLoggedIn')){   
                        echo "<p class='welClass'> Welcome : ".$this->session->userdata('userName')."</p>"; } ?>
                    <div class="logo_area_right">
                    	

                        <div class="logo_menu">
                        <ul>
                         <!--  <li><a href=""><img src="<?php echo base_url(); ?>assets/images/heart.png" alt="favourite"></a></li> -->
                          <li>
                                <a href="<?php echo base_url(); ?>cart">
                                    <img src="<?php echo base_url(); ?>assets/images/cart.png" alt="cart"><span id="cartqut"><?php echo $this->cart->total_items();?></span>
                                </a>
                          </li>
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url(); ?>assets/images/user.png" alt="user"> <span class="caret"></span></a>
                            <ul class="dropdown-menu my_drpdown" id="before_login">

                            <?php if($this->session->userdata('isUserLoggedIn')){   ?>
                            	<li><a href="<?php echo base_url(); ?>account">Your Account</a></li>
                            	 <li role="separator" class="divider"></li>
                                <li><a href="<?php echo base_url(); ?>logout">Logout</a></li>

                           <?php } else { ?> 

                                <li><a href="<?php echo base_url(); ?>login">Sign In</a></li>
                                <li><a href="<?php echo base_url(); ?>register">Register</a></li>

                            <?php } ?>
                              
                            </ul>
                            
                            <!-- <ul class="dropdown-menu my_drpdown" id="after_login">
                              <li><a href="#">Your Order</a></li>
                              <li><a href="#">Your Account</a></li>
                              <li><a href="#">Track Order</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="#">Logout</a></li>
                            </ul> -->

                          </li>
                        </ul>
                      </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="nav_area">
        <div class="container-fluid">
            <div class="row">
            <div class="nav_area_in">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="dropdown ctgry_li">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bars"></i> &nbsp;&nbsp;Shop by Categoires<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url(); ?>shop?cat=Stickers">Stickers</a></li>
                                <li><a href="<?php echo base_url(); ?>shop?cat=T-shirts">T-shirts</a></li>
                                <li><a href="<?php echo base_url(); ?>shop?cat=Posters">Posters</a></li>
                              </ul>
                            </li>
                            <li><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li><a href="<?php echo base_url(); ?>shop">Web Shop</a></li>
                            <!-- <li class="dropdown">
                              <a href="<?php echo base_url(); ?>/index.php/welcome/shop" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Web Shop <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url(); ?>shop?cat=Stickers">Stickers</a></li>
                                <li><a href="<?php echo base_url(); ?>shop?cat=T-shirts">T-shirts</a></li>
                                <li><a href="<?php echo base_url(); ?>/index.php/welcome/shop?cat=Posters">Posters</a></li>
                              </ul>
                            </li> -->
                            <li><a href="<?php echo base_url(); ?>kidsquiz">Kids Quiz</a></li>
                            <li><a href="<?php echo base_url(); ?>contact">Contact Us</a></li>
                            <li><a href="<?php echo base_url(); ?>info">Info</a></li>
                            
                        </ul>
                    </div>
                </nav>
            </div>
            </div>
        </div>
    </div>
</header>
