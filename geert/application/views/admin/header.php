<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Dashboard</title>
	<link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/admin/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/admin/css/datepicker3.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/admin/css/styles.css" rel="stylesheet">
	<!-- <link href="<?php echo base_url(); ?>assets/admin/css/styles.css" rel="stylesheet"> -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/jquery-te-1.4.0.css">
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/jquery-te-1.4.0.min.js" charset="utf-8"></script>
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Admin</span> Panel </a>
			
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"> 
					<?php if($this->session->userdata('isUserLoggedIn')){   echo $this->session->userdata('userName');  } ?>	
				</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
	
		<ul class="nav menu">
			<li><a href="<?php echo base_url(); ?>admin/account"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
				<li class="parent "><a data-toggle="collapse" href="#sub-item-1" class="collapsed" aria-expanded="false">
					<em class="fa fa-product-hunt">&nbsp;</em> Products <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right collapsed" aria-expanded="false"><i class="fa fa-plus"></i></span>
					</a>

					<ul class="children collapse" id="sub-item-1" aria-expanded="false" style="height: 0px;">
						<li><a class="" href="<?php echo base_url(); ?>admin/productlist">
							Products List 
						</a></li>
						<li><a class="" href="<?php echo base_url(); ?>admin/addproduct">
							New Products
						</a></li>
					</ul>

				</li>
			<li><a href="<?php echo base_url(); ?>admin/order"><em class="fa fa-first-order">&nbsp;</em> Order</a></li>
			<li><a href="<?php echo base_url(); ?>admin/contact"><em class="fa fa-address-book">&nbsp;</em> Contact</a></li>
			<li><a href="<?php echo base_url(); ?>admin/banners"><em class="fa fa-square-o">&nbsp;</em> Banners</a></li>
			<li><a href="<?php echo base_url(); ?>admin/slider"><em class="fa fa-sliders">&nbsp;</em> Slider</a></li>
			<li class="parent">
				<a data-toggle="collapse" href="#sub-item-2" class="collapsed" aria-expanded="false">
					<em class="fa fa-file-o">&nbsp;</em> Pages <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right collapsed" aria-expanded="false"><i class="fa fa-plus"></i></span>
				</a>
				<ul class="children collapse" id="sub-item-2" aria-expanded="false" style="height: 0px;">
					<li><a class="" href="<?php echo base_url(); ?>admin/page">
						Page List 
					</a></li>
					<li><a class="" href="<?php echo base_url(); ?>admin/addpage">
						New Page
					</a></li>
					<li class="parent">
						<a data-toggle="collapse" href="#sub-item-3" class="collapsed" aria-expanded="false">
							 Widgets <span data-toggle="collapse" href="#sub-item-3" class="icon pull-right collapsed" aria-expanded="false"><i class="fa fa-plus"></i></span>
						</a>
						<ul class="children collapse" id="sub-item-3" aria-expanded="false" style="height: 0px;">
							<li>
								<a class="" href="<?php echo base_url(); ?>admin/footer_widget_left">
								Footer Widget Left 
								</a>
							</li>
							<li>
								<a class="" href="<?php echo base_url(); ?>admin/footer_widget_right">
								Footer Widget Right
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</li>

			<li><a href="<?php echo base_url(); ?>admin/setting"><em class="fa fa-cogs">&nbsp;</em> Setting</a></li>
			<li><a href="<?php echo base_url(); ?>admin/logout"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->