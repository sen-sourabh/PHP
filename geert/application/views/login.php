<div class="login_wrapper">
	<div class="container">
		<div class="row">
			<div class="login_area col-md-12">
                <div class="login_area_lft col-md-6 col-sm-6 col-xs-12">
                    <form id="first_login" method="post">
                        <h1><i class="fas fa-sign-in-alt"></i> Login</h1>
                        <?php
                            if(!empty($success_msg)){
                                echo '<p class="statusMsg">'.$success_msg.'</p>';
                            }elseif(!empty($error_msg)){
                                echo '<p class="statusMsg">'.$error_msg.'</p>';
                            }
                        ?>
                    	<div class="form-group">
                    		<label>Email Address</label>
                    		 <input type="email" class="form-control" name="email" placeholder="Email" required="" value="">
                            <?php echo form_error('email','<span class="help-block">','</span>'); ?>
                    	</div>
                    	<div class="form-group">
                    		<label>Password</label>
                    		<input type="password" class="form-control" name="password" placeholder="Password" required="">
                            <?php echo form_error('password','<span class="help-block">','</span>'); ?>
                    	</div>
                    	<div class="form-group">
                    		<h5><a onclick="document.getElementById('reset_frm').style.display= 'block'; document.getElementById('first_login').style.display= 'none';"><i class="fa fa-life-ring" aria-hidden="true"></i> Lost Your Password?</a></h5>
                    	</div>
                    	<div class="form-group">
                    		<button type="submit" class="btn frm_btn_1" value="login" name="loginSubmit" >LOGIN</button>
                    	</div>
                       
                    </form>
                     <div id="reset_frm">
                        <form>
                            <p>Lost your password? Please enter your email address. You will receive a link to create a new password via email.</p>
                            <div class="form-group">
                        		<label>Email Address</label>
                            	<input type="text" class="form-control" name="resetemail" placeholder="Email" required="" value="">
                        	</div>
                        	<div class="form-group">
                        		<button class="btn frm_btn_1" value="reset password">RESET PASSWORD</button>
                            	<button class="btn frm_btn_1" value="cancel" onclick="document.getElementById('reset_frm').style.display= 'none'; document.getElementById('first_login').style.display= 'block';">CANCEL</button>
                        	</div>
                        </form>
                    </div>
                </div>
                <div class="login_area_rght col-md-6 col-sm-6 col-xs-12">
                    <h1>Register</h1>
                    <p>Registering for this site allows you to access your order status and history. Just fill in the fields below, and we’ll get a new account set up for you in no time. We will only ask you for information necessary to make the purchase process faster and easier.</p>
                    <a href="<?php echo base_url(); ?>register"> <button class="btn frm_btn_2" value="register">REGISTER</button>
                </div>
            </div>
		</div>
	</div>
</div>