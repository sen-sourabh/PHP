<div class="login_wrapper">
	<div class="container">
		<div class="row">
			<div class="login_area col-md-12">
			    <div class="login_area_lft col-md-6 col-sm-6 col-xs-12">
			        <h1><i class="fas fa-user-plus"></i> Register</h1>
			         <form action="" method="post">
					        <div class="form-group">
					        	<label>Full Name</label>
					            <input type="text" class="form-control" name="name" placeholder="Name" required="" value="<?php echo !empty($user['name'])?$user['name']:''; ?>">
					            <?php echo form_error('name','<span class="help-block">','</span>'); ?>
					        </div>
					        <div class="form-group">
					        	<label>Email Address</label>
					            <input type="email" class="form-control" name="email" placeholder="Email" required="" value="<?php echo !empty($user['email'])?$user['email']:''; ?>">
					          <?php echo form_error('email','<span class="help-block">','</span>'); ?>
					        </div>
					        <div class="form-group">
					        	<label>Phone No.</label>
					            <input type="text" class="form-control" name="phone" placeholder="Phone" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
					        </div>
					        <div class="form-group">
					        	<label>Password</label>
					          <input type="password" class="form-control" name="password" placeholder="Password" required="">
					          <?php echo form_error('password','<span class="help-block">','</span>'); ?>
					        </div>
					        <div class="form-group">
					        	<label>Confirm Password</label>
					          <input type="password" class="form-control" name="conf_password" placeholder="Confirm password" required="">
					          <?php echo form_error('conf_password','<span class="help-block">','</span>'); ?>
					        </div>
					        <div class="form-group">
					        	<label>Gender</label>
					            <?php
					            if(!empty($user['gender']) && $user['gender'] == 'Female'){
					                $fcheck = 'checked="checked"';
					                $mcheck = '';
					            }else{
					                $mcheck = 'checked="checked"';
					                $fcheck = '';
					            }
					            ?>
					            <div class="radio">
					                <label>
					                <input type="radio" name="gender" value="Male" <?php echo $mcheck; ?>>
					                Male
					                </label>
					            
					                <label>
					                  <input type="radio" name="gender" value="Female" <?php echo $fcheck; ?>>
					                  Female
					                </label>
					            </div>
					        </div>
					        <div class="form-group">
					            <input type="submit" name="regisSubmit" class="btn frm_btn_1" value="Submit"/>
					        </div>
					    </form>
			    </div>
			    <div class="login_area_rght col-md-6 col-sm-6 col-xs-12">
			        <h1>Already Have an Account</h1>
			        <h6>If you don't have an account already then create new account from filling your information, if you already have an account click on "login".</h6>
			        <a href="<?php echo base_url(); ?>login"><button class="btn frm_btn_2" value="register">LOGIN</button></a>
			    </div>
			</div>
		</div>
	</div>
</div>