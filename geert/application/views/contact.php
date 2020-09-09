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
	        <?php
	        	foreach($contact_data as $contact)
	        	{
	        ?>
	        <div class="col-md-4 col-sm-4 col-xs-12">
	          <div class="contact_form_area_right">
	            <h3>Contact Information</h3>
	            <ul>
	                <li><?php echo $contact->widget_contact_phone;?></li>
	                <li><?php echo $contact->widget_contact_email;?></li>
	                <li><?php 
	                        if($contact->widget_contact_address)
	                        {
	                        	echo $contact->widget_contact_address.", ";
	                        }
	                        if($contact->widget_contact_city)
	                        {
	                            echo $contact->widget_contact_city.", ";
	                        }
	                        if($contact->widget_contact_state)
	                        {
	                            echo $contact->widget_contact_state.", ";
	                        }
	                        if($contact->widget_contact_country)
	                        {
	                            echo $contact->widget_contact_country;
	                        }
	                    ?>
                    </li>
	            </ul>
	          </div>
	        </div>
	        <?php 
	    		}
	    	?>
	    </div>
	</div>
</div>