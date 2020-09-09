<!DOCTYPE html>
<html lang="en">  
<head>
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url(); ?>assets/css/main-style.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url(); ?>assets/css/fontawesome-all.min.css" rel='stylesheet' type='text/css' />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
<div class="container">

    <div class="row">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
            <h2>Enter login information</h2>
            <?php
            if(!empty($success_msg)){
                echo '<p class="statusMsg">'.$success_msg.'</p>';
            }elseif(!empty($error_msg)){
                echo '<p class="statusMsg">'.$error_msg.'</p>';
            }
            ?>
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
           <!--  <p class="footInfo">Don't have an account? <a href="<?php echo base_url(); ?>users/registration">Register here</a></p> -->
         </div>
         <div class="col-sm-4">
        </div>
    </div>

</div>   
<script src="<?= base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url();?>assets/js/fontawesome-all.min.js"></script>
</body>
</html>