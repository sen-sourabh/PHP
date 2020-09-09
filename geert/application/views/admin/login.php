<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard - Login</title>
	<link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/admin/css/datepicker3.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/admin/css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="container">
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading" align="center">Admin Login</div>
				    <?php
		            if(!empty($success_msg)){
		                echo '<p class="statusMsg">'.$success_msg.'</p>';
		            }elseif(!empty($error_msg)){
		                echo '<p class="statusMsg">'.$error_msg.'</p>';
		            }
		            ?>
				<div class="panel-body">
					 <form action="" method="post">
		                <div class="form-group has-feedback">
		                    <input type="email" class="form-control" name="email" placeholder="Email" required="" value="">
		                    <?php echo form_error('email','<span class="help-block">','</span>'); ?>
		                </div>
		                <div class="form-group">
		                  <input type="password" class="form-control" name="password" placeholder="Password" required="">
		                  <?php echo form_error('password','<span class="help-block">','</span>'); ?>
		                </div>
		                <div class="form-group">
		                    <input type="submit" name="loginSubmit" class="btn btn-primary" value="Submit"/>
		                </div>
		            </form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->
	</div>	
	

<script src="<?php echo base_url(); ?>assets/admin/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
</body>
</html>
