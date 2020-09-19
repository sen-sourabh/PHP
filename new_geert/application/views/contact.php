<div class="contact_us_area">
	<div class="container">
		<div class="row">
			<div class="my_heading wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                <h1>Contact Us</h1>
                <p>Connect to us for more info.</p>
            </div>
		</div>
		<div class="row">
	        <div class="col-md-8 col-sm-8 col-xs-12">
	          <div class="contact_form_area_left">
	          	<?php 
	          		if(isset($message)){
	          			print_r($message);
	          		}
	          	?>
	            <form method="post">
	              <input type="text" class="form-control" placeholder="Your Name" name="txtName">
	              <input type="email" class="form-control" placeholder="Your Email" name="txtEmail">
	              <textarea class="form-control" placeholder="Your Message" rows="6" name="txtMessage"></textarea>
	              <button type="submit" class="btn my_btn_1" value="Send Now">Send Now</button>
	            </form>
	          </div>
	        </div>
	        <div class="col-md-4 col-sm-4 col-xs-12">
	          <div class="contact_form_area_right">
	            <h3>Contact Information</h3>
	            <ul>
	                <li>(00) 000 111 222</li>
	                <li>info@domain.com</li>
	                <li>111 New Street 300, Australia</li>
	            </ul>
	          </div>
	        </div>
	    </div>
	</div>
</div>