<div class="checkout_area">
	<div class="container">
		<div class="row">
			<div class="my_heading">
                <h1>Checkout</h1>
            </div>
		</div>
		<div class="row">
			<div class="checkout_area_in">
				<div class="col-md-8 col-sm-8 col-xs-12">
					<div class="checkout_area_left">
						<h3>Shipping and Address</h3>

						<?php 
							
						
							foreach ($user as $userData) {    ?>


						 <form action="<?php echo base_url(); ?>checkoutprocess" method="post"> 
							<div class="form-group">
								<label>Your Name</label>
								<input type="text" class="form-control" name="txtName"  value=" <?php echo $userData->name;  ?>" placeholder="Your Name">
								<?php echo form_error('txtName','<span class="help-block">','</span>'); ?>
							</div>
							<div class="form-group">
								<label>Your Email</label>
								<input type="email" class="form-control" name="txtEmail" value="<?php echo $userData->email;  ?>" placeholder="Your Email">
								<?php echo form_error('txtEmail','<span class="help-block">','</span>'); ?>
							</div>
							<div class="form-group">
								<label>Phone Number</label>
								<input type="tel" class="form-control" name="txtPhone" value="<?php echo $userData->phone;  ?>" placeholder="Phone Number">
								<?php echo form_error('txtPhone','<span class="help-block">','</span>'); ?>
							</div>
							<div class="form-group">
								<label>Country</label>
								<input type="text" class="form-control" name="txtCountry" value="<?php echo $userData->country;  ?>" placeholder="Country">
								<?php echo form_error('txtCountry','<span class="help-block">','</span>'); ?>
							</div>
							<div class="form-group">
								<label>City</label>
								<input type="text" class="form-control" name="txtCity" value="<?php echo $userData->city;  ?>"  placeholder="City">
								<?php echo form_error('txtCity','<span class="help-block">','</span>'); ?>
							</div>
							<div class="form-group">
								<label>Postal Code</label>
								<input type="text" class="form-control" name="txtPostcode" value="<?php echo $userData->postcode;  ?>"  placeholder="Postal Code">
								<?php echo form_error('txtPostcode','<span class="help-block">','</span>'); ?>
							</div>
							<div class="form-group">
								<label>Address</label>
								<input type="text" class="form-control" name="txtAddress" placeholder="Address" value="<?php echo $userData->address;  ?>">
								<?php echo form_error('txtAddress','<span class="help-block">','</span>'); ?>
							</div>
							<div class="form-group">
							    <div class="checkbox">
							      <label data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
							        <input type="checkbox"/> Add Shipping address
							      </label>
							    </div>
							</div>

						    <div id="collapseOne" aria-expanded="false" class="collapse">
							   <div class="form-group">
									<label>Country</label>
									<input type="text" class="form-control" name="txtCountryTwo" value="<?php echo $userData->country;  ?>" placeholder="Country">
								</div>
								<div class="form-group">
									<label>City</label>
									<input type="text" class="form-control" name="txtCityTwo" value="<?php echo $userData->city;  ?>"  placeholder="City">
								</div>
								<div class="form-group">
									<label>Postal Code</label>
									<input type="text" class="form-control" name="txtPostcodeTwo" value="<?php echo $userData->postcode;  ?>"  placeholder="Postal Code">
								</div>
								<div class="form-group">
									<label>Address</label>
									<input type="text" class="form-control" name="txtAddressTwo" placeholder="Address" value="<?php echo $userData->address;  ?>">
								</div>
							</div>


						  <div class="form-group">
								<button type="submit" class="btn" value="proceed to pay">Proceed To Pay</button>
						  </div>

						</form>

						<?php } ?>

					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="checkout_area_right">
						<h3>Order Summary</h3>
						<table class="table">
							<tr>
								<td>Subtotal :</td>
								<td class="text-right">$ <?php echo $this->cart->total(); ?></td>
							</tr>
							<tr>
								<td>Shipping :</td>
								<td class="text-right">$ 0.00</td>
							</tr>
							<tr>
								<td>Estimated tax:</td>
								<td class="text-right">$ 0.00</td>
							</tr>
							<tr class="total_tr">
								<th>Total :</th>
								<th class="text-right">$ <?php echo $this->cart->total(); ?></th>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>