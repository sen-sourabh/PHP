<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Dashboard</title>
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/datepicker3.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet">

	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/demo.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-te-1.4.0.css">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
	    <div class="container-fluid">
	        <div class="navbar-header">
	            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span></button>
	            <a class="navbar-brand" href="<?php echo base_url();?>"><span>Webookit</span> Admin</a>
	            <ul class="nav navbar-top-links navbar-right">
	                <!-- <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
							<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
						</a>
							<ul class="dropdown-menu dropdown-messages">
								<li>
									<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
										<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
										</a>
										<div class="message-body"><small class="pull-right">3 mins ago</small>
											<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
										<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
									</div>
								</li>
								<li class="divider"></li>
								<li>
									<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
										<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
										</a>
										<div class="message-body"><small class="pull-right">1 hour ago</small>
											<a href="#">New message from <strong>Jane Doe</strong>.</a>
										<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
									</div>
								</li>
								<li class="divider"></li>
								<li>
									<div class="all-button"><a href="#">
										<em class="fa fa-inbox"></em> <strong>All Messages</strong>
									</a></div>
								</li>
							</ul>
	                </li> -->
	            	<?php 
						// foreach ($count_id as $key => $notification_count) 
						// {
						// 	$countall=$notification_count->countall;
						// }
					?>
	                <!-- <li class="dropdown">
	                    <a class="dropdown-toggle" data-toggle="dropdown">
	                        <em class="fa fa-bell"></em>
	                        <span class="label label-info"><?php //echo $countall; ?></span>
	                    </a>
	                    <ul class="dropdown-menu dropdown-alerts myalert">
	                        <em class="fa fa-bell"></em> Notification
	                        <li>
	                            <a href="#">
	                                <div> -->
	                <?php 
						// foreach ($supplier_detail as $key => $supplier_detail_notification) 
						// {
						// 	$supplier_detail_id=$supplier_detail_notification->user_id;
						// 	$supplier_detail_contact_name=$supplier_detail_notification->contact_name;
						// 	$supplier_detail_date_of_join=$supplier_detail_notification->date_of_join;

						// 	foreach ($data as $key => $supplier_detail_data) 
						// 	{
						// 		$supplier_detail_id_notification=$supplier_detail_data->supplier_id;
						// 		/*$supplier_detail_contact_name=$supplier_detail_notification->contact_name;
						// 		$supplier_detail_date_of_join=$supplier_detail_notification->date_of_join;*/
						// 		if($supplier_detail_id==$supplier_detail_id_notification)
						// 		{
					?>
	                                    <!-- <a href="#">
	                                        <div class="mystry">
	                                            <p class="ic_my2">New Supplier Register-
	                                                <?php //echo $supplier_detail_contact_name ;?> 
	                                                <span><?php //echo $supplier_detail_date_of_join; ?></span>
	                                            </p>
	                                        </div>
	                                    </a> -->
	                <?php
						// 		}
						// 	}
						// }
					?>
						<!-- 			</div>
	                            </a>
	                        </li>
	                        <li>
	                            <a href="#">
	                                <div> -->
	                <?php 
						// foreach ($user_detail as $key => $user_detail_notification) 
						// {
						// 	$user_detail_id=$user_detail_notification->user_id;
						// 	$user_detail_name=$user_detail_notification->name;
						// 	$user_detail_login_data=$user_detail_notification->login_date;
							
						// 	foreach ($data as $key => $supplier_detail_data) 
						// 	{
						// 		$user_detail_id_notification=$supplier_detail_data->user_id;
								
						// 		if($user_detail_id==$user_detail_id_notification)
						// 		{
					?>

	                      <!--   			<a href="#">
	                                        <div class="mystry">
												<p class="ic_my2">New User Register-
	                                                <?php //echo $user_detail_name ;?> 
	                                                <span><?php //echo $user_detail_login_data; ?></span>
	                                            </p>
	                                        </div>
										</a> -->
	                <?php 
						// 		}
						// 	}
						// }
					?>
					<!-- 				</div>
	                            </a>
	                        </li>
	                    </ul>
	                </li> -->
	                <li class="dropdown">
	                    <a class="dropdown-toggle" data-toggle="dropdown">
	                        <em class="fa fa-gear"></em>
	                    </a>
	                    <ul class="dropdown-menu">
	                        <li>
	                            <a href="<?php echo base_url();?>change_password">
	                                <div><em class="fa fa-unlock-alt"></em>Change Password</div>
	                            </a>
	                        </li>
	                    </ul>
	                </li>
	            </ul>
	        </div>
	    </div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<!-- <div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $this->session->userdata('adminuser')[0]->name;?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div> -->
		<!-- <div class="divider"></div> -->
		<ul class="nav menu">
            <li><a href="<?php echo base_url();?>dashboard"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
            <!-- <li><a href="<?php echo base_url();?>All_pages/widgets"><em class="fa fa-product-hunt">&nbsp;</em> Products</a></li> -->
            <li class="parent ">
                <a data-toggle="collapse" href="#members">
                    <em class="fa fa-group">&nbsp;</em> Members <span data-toggle="collapse" href="#members" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="members">
                    <li><a href="<?php echo base_url();?>travelers"> Travelers</a></li>
                    <li><a href="<?php echo base_url();?>traveler_designer"> Traveler Designers</a></li>
            		<li><a href="<?php echo base_url();?>partner_supplier"> Partner & Suppliers</a></li>
            		<li><a href="<?php echo base_url();?>members_category"> Members Category</a></li>
                </ul>
            </li>
            <li class="parent ">
                <a data-toggle="collapse" href="#contents">
                    <em class="fa fa-folder-open">&nbsp;</em> Content <span data-toggle="collapse" href="#contents" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="contents">
                    <li><a href="<?php echo base_url();?>all_posts"> Manage Posts</a></li>
                </ul>
            </li>
            <li><a href="<?php echo base_url();?>all_country"><em class="fa fa-globe">&nbsp;</em> Country</a></li>
            <li><a href="<?php echo base_url();?>travel_queries"><em class="fa fa-user">&nbsp;</em> Onilne Travel Queries</a></li>
            <li class="parent ">
                <a data-toggle="collapse" href="#contact">
                    <em class="fa fa-phone">&nbsp;</em> Contacts <span data-toggle="collapse" href="#contact" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="contact">
                    <li><a class="" href="<?php echo base_url();?>contact"> Contact</a></li>
                    <li><a class="" href="<?php echo base_url();?>all_subscriber"> Subscribers</a></li>
                </ul>
            </li>
            <!--<li><a href="<?php echo base_url();?>All_pages/all_events"><em class="fa fa-calendar">&nbsp;</em> Events</a></li>
            <li><a href="<?php echo base_url();?>All_pages/all_venues"><em class="fa fa-map-marker">&nbsp;</em> Venues</a></li>-->
            <!-- <li><a href="<?php echo base_url();?>all_subscriber"><em class="fa fa-product-hunt">&nbsp;</em> Subscribers</a></li>  -->
            <!-- <li><a href="<?php echo base_url();?>contact"><em class="fa fa-phone">&nbsp;</em> Contacts</a></li> -->
            <li><a href="<?php echo base_url();?>logout"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>

        </ul>
	</div><!--/.sidebar-->
	