<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</head>
<body>
<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="<?php echo base_url();?>index"><img src="<?php echo base_url();?>admin/assets/images/icon/logo.png" alt="Cool Admin" /></a>
		<button id="jjk" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarColor03">
		    <ul class="navbar-nav mr-auto">
		    	<li class="nav-item <?php if($_SERVER['PHP_SELF'] == '/music/index.php/index' || $_SERVER['PHP_SELF'] == '/music/index.php'){ echo "active"; }else{ echo "";}?>">
		        	<a class="nav-link" href="<?php echo base_url();?>index">Home</a>
		      	</li>
		      	<li class="nav-item <?php if($_SERVER['PHP_SELF'] == '/music/index.php/hindi'){ echo "active"; }else{ echo "";}?>">
		        	<a class="nav-link" href="<?php echo base_url();?>hindi">Hindi Songs</a>
		      	</li>
		      	<li class="nav-item <?php if($_SERVER['PHP_SELF'] == '/music/index.php/english'){ echo "active"; }else{ echo "";}?>">
		        	<a class="nav-link" href="<?php echo base_url();?>english">English Songs</a>
		      	</li>
		      	<li class="nav-item <?php if($_SERVER['PHP_SELF'] == '/music/index.php/other'){ echo "active"; }else{ echo "";}?>">
		        	<a class="nav-link" href="<?php echo base_url();?>other">Other Songs</a>
		      	</li>
		      	<li class="nav-item <?php if($_SERVER['PHP_SELF'] == '/music/index.php/contact'){ echo "active"; }else{ echo "";}?>">
		        	<a class="nav-link" href="<?php echo base_url();?>contact">Contact</a>
		      	</li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0" method="post" action="<?php echo base_url();?>search">
		      <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search">
		      <input class="btn btn-secondary my-2 my-sm-0" name="btnsearch" type="submit" value="Search"/>
		    </form>
		</div>
	</nav>
</header>