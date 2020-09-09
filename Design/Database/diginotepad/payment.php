<?php
 include('include/header.php');
 $event_id=$_GET['event_id'];
 $all_amount=$_GET['all_amount'];
?>
<!-- 
<div class="payment_section">
    <div class="container">
        <div class="pay_padding">
            <div class="toppayment">
                <p><strong>Check out faster by signing in to your Round Party account.</strong>  Log in with your email or Facebook and we'll fill in the details for you.</p>
                <ul>
                    <li class="pay_email">
                        <input type="text" name="" placeholder="Email" class="form-control">
                    </li>
                    <li class="pay_pass">
                        <input type="text" name="" placeholder="Password" class="form-control">
                    </li>
                    <li><a href="#">Reset password </a></li>
                    <li>
                        <button type="button" class="btn btn-default">Log in</button>
                    </li>
                    <li>OR</li>
                    <li>
                        <button type="button" class="btn btn-primary"><i class="fab fa-facebook-f"></i> Log in</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div> -->
<div class="pay_details">
<div class="container">
	<div class="pay_padding ">
		<div class="secnd_payment">
			<h3>Your Details</h3>
		    <div class="row">
		    	<?php
		    	foreach ($user_info as $key => $value_user) {
		    		
		    	?>
		        <div class="col-md-8">
		            <div class="form-group">
		                <label>Full Name:</label>
		                <input type="text" class="form-control" value="<?php echo $value_user->name;?>" readonly>
		            </div>
		            <div class="row">
		                <div class="col-md-6 col-sm-6 col-xs-6">
		                     <div class="form-group">
		                        <label>Email:</label>
		                        <input type="text" class="form-control" value="<?php echo $value_user->email;?>" readonly>
		                    </div> 
		                </div>
		                <div class="col-md-6 col-sm-6 col-xs-6">
		                   <div class="form-group">
		                        <label>Phone Number:</label>
		                        <input type="text" class="form-control" value="<?php echo $value_user->phone;?>" readonly>
		                    </div> 
		                </div>
		            </div>
		            <?php
		        }
		        ?>
		            <div class="pay_detailssecond">
		                <div class="row">
		                   <!--  <div class="col-md-3 col-xs-6">
		                        <p>Is this for you?</p>
		                    </div> -->
		                    <div class="col-md-9 col-xs-6">
		                        <form>
		                            <!-- <div class="radio-inline">
		                                <label>
		                                    <input type="radio" name="optradio" checked>Yes</label>
		                            </div>
		                            <div class="radio-inline">
		                                <label>
		                                    <input type="radio" name="optradio">No</label>
		                            </div> -->
		                        </form>
		                    </div>
		                </div>
		            </div>

		            <!-- <div class="pay_detailssecond">
		                <div class="row">
		                    <div class="col-md-8">
		                        <p>Have you been to this salon in the past 12 months?</p>
		                    </div>
		                    <div class="col-md-4">
		                        <form>
		                            <div class="radio-inline">
		                                <label>
		                                    <input type="radio" name="optradio" checked>Yes</label>
		                            </div>
		                            <div class="radio-inline">
		                                <label>
		                                    <input type="radio" name="optradio">No</label>
		                            </div>
		                        </form>
		                    </div>
		                </div>
		            </div> -->
		            <div class="payment_pay">
		                <h3>Payment:</h3>
		                <div class="">
		                    <ul class="nav nav-tabs">
		                        <li class="active"><a data-toggle="tab" href="#home">Pay at Venue</a></li>
		                        <li><a data-toggle="tab" href="#menu1">Pay with card</a></li>
		                        <li><a data-toggle="tab" href="#menu2">Pay with PayPal</a></li>
		                    </ul>

		                    <div class="tab-content">
		                        <div id="home" class="tab-pane fade in active">
		                            <p>You will be charged by the venue after your appointment.</p>
		                            <p><strong>Please note Round Party Gift Cards are not valid as a 'Pay at Venue' payment method.</strong>  If you would like to book using a Gift Card, please select Pay with Card or Paypal, and enter the Gift Card code at checkout.</p>
		                            <p><strong>Please book responsibly. </strong> Often salons are independent businesses, so it really hurts when you fail to show for an appointment. We know plans change, so if you can't make an appointment, please do the right thing and give them as much notice as possible. If you fail to show for an appointment having selected 'Pay at Venue', you will not be allowed to place another order using this payment option.</p>
		                        </div>
		                        <div id="menu1" class="tab-pane fade">
		                            <div class="card_pay">
		                            	<div class="card_pay2">
		                                <h3>Card details
		                                        <span>
		                                          <ul>
		                                            <li><img src="<?php echo base_url();?>/assets/images/visa_PNG2.png" class="img-responsive"></li>
		                                          </ul>
		                                        </span></h3>
		                                <div class="card_details1">
		                                    <div class="row">
		                                        <div class="col-md-8">
		                                            <div class="form-group">
		                                                <label>Card Number</label>
		                                                <input type="text" class="form-control">
		                                            </div>
		                                        </div>
		                                        <div class="col-md-4">
		                                            <div class="form-group">
		                                                <label>Security code ?</label>
		                                                <input type="text" class="form-control">
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="card_details">
		                                    <div class="row">
		                                        <div class="col-md-8">
		                                            <div class="form-group">
		                                                <label>Cardholder’s name</label>
		                                                <input type="text" class="form-control">
		                                            </div>
		                                        </div>
		                                        <div class="col-md-4">
		                                            <div class="form-group">
		                                                <label>Expires on</label>
		                                                <input type="text" class="form-control" placeholder="MM/YY">
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>

		                                <div class="promocode">
		                                    <h3>Promo codes / Gift Cards</h3>
		                                    <div class="row">
		                                        <div class="col-md-9">
		                                            <div class="form-group">
		                                                <input type="text" class="form-control" placeholder="Enter promo / gift card code">
		                                            </div>
		                                        </div>
		                                        <div class="col-md-3">
		                                            <div class="add_codepayment">
		                                                <a href="#">Add Code</a>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>

		                            </div>
		                        </div>
		                        <div id="menu2" class="tab-pane fade">

          
		                            <div class="promocode">
		                                <!-- <h3>Promo codes / Gift Cards</h3> -->
		                                <div id="paypal-button-container">
		                                    </div>
		                                <div class="row">
		                                    <div class="col-md-9">
		                                    	<div class="payment_">
		                                        <!-- <div class="form-group">
		                                            <input type="text" class="form-control" placeholder="Enter promo / gift card code">
		                                        </div> -->
		                                        </div>
		                                    <div class="col-md-3">
		                                        <div class="add_codepayment">
		                                            <a href="#">Add Code</a>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div> 
</div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <div class="paynewlatter">
		                <h3>Round Party NEWSLETTER</h3>
		                <div class="checkbox">
		                    <label>
		                        <input type="checkbox" value="">Tick this box if you don’t want to receive emails from Round Party with the latest offers  .</label>
		                </div>
		            </div>
		            <div class="paynewlatter">
		                <h3>Round Party NEWSLETTER</h3>
		                <div class="checkbox">
		                    <label>
		                        <input type="checkbox" value="">Tick this box if you don’t want to receive emails from Round Party with the latest offers.</label>
		                    <p>You can change your preferences at any time, find out how in our <a href="#"> privacy policy. </a></p>
		                </div>
		            </div>
		        </div>
		         <?php
				  foreach($data as $ro)
				  {
					$event_title=$ro->title;
					$special_instructions=$ro->special_instructions;
					$event_location=$ro->event_location;
					$type=$ro->type;
					$image_event= $ro->image;
					$start_time= $ro->start_time;
					$end_time= $ro->end_time;
					$event_date= $ro->event_date;
					$total_event_time = round(abs($end_time - $start_time));

					}
  				?> 
		        <div class="col-md-4">
		            <div class="card_rightside">
		                <div class="chektime">
		                    <span class="leftchektime">
		                       <?php echo $start_time;?>
		                    </span>
		                    <span class="rightchektime">
		                        <?php echo $event_date ; ?>
		                        <!--  <br>Tuesday -->
		                    </span>
		                </div>
		                <!-- <div class="details_number">
		                    <p>Number 10 Massage & Beauty</p>
		                </div> -->
		                <div class="details_number2">
		                    <p><?php echo $event_title ;?></p>
		                    <h4><?php echo $total_event_time ; ?> Hour</h4>
		                    <h5> £<?php echo $all_amount ;?> </h5>
		                </div>
		                <div class="details_number3">
		                    <p>Order total <span> £<?php echo $all_amount ;?></span></p>
		                </div>
		                <div class="details_number4">
		                    <p>Cancellation policy</p>
		                    <h6>Non-refundable</h6>
		                    <h6>We can't refund your money if you cancel or if you don't make it on the day.</h6>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		</div>
	</div>
</div>


<div class="payment_footer">
  <div class="container">
    <div class="pay_padding">
      <div class="row">
        <div class="col-md-7">
          <div class="footer_paytotal">
            <ul>
              <li class="order-total">Pay at event</li>
              <li class="order-price">£<?php echo $all_amount ;?></li>
            </ul>
            <ul>
              <li class="order-total">Pay now</li>
              <li class="order-price"> £<?php echo $all_amount ;?></li>
            </ul>
          </div>
          <div class="footer_paytotal2">
            <ul>
              <li class="order-terms">By continuing you agree to our <a href="#"> Booking Terms </a></li>
              <li class="order-byubtn"><button type="button" class="btn btn-default">BUY NOW</button></li>
            </ul>
          </div>
        </div>
        <!--  <div class="col-md-5">
          <div id="paypal-button-container"></div> -->
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
// Render the PayPal button
paypal.Button.render({
// Set your environment
env: 'sandbox', // sandbox | production

// Specify the style of the button
style: {
  layout: 'vertical',  // horizontal | vertical
  size:   'medium',    // medium | large | responsive
  shape:  'rect',      // pill | rect
  color:  'gold'       // gold | blue | silver | white | black
},

// Specify allowed and disallowed funding sources
//
// Options:
// - paypal.FUNDING.CARD
// - paypal.FUNDING.CREDIT
// - paypal.FUNDING.ELV
funding: {
  allowed: [
    paypal.FUNDING.CARD,
    paypal.FUNDING.CREDIT
  ],
  disallowed: []
},

// PayPal Client IDs - replace with your own
// Create a PayPal app: https://developer.paypal.com/developer/applications/create
client: {
  sandbox: 'AZDxjDScFpQtjWTOUtWKbyN_bDt4OgqaF4eYXlewfBP4-8aqX3PiV8e1GWU6liB2CUXlkA59kJXE7M6R',
  production: '<insert production client id>'
},

payment: function (data, actions) {
  return actions.payment.create({
    payment: {
      transactions: [
        {
          amount: {
            total: '0.01',
            currency: 'USD'
          }
        }
      ]
    }
  });
},

onAuthorize: function (data, actions) {
  return actions.payment.execute()
    .then(function () {
      window.alert('Payment Complete!');
    });
}
}, '#paypal-button-container');


$(document).ready(function() {
    $("div.desc").hide();
    $("input[name$='payment']").click(function() {
        var test = $(this).val();
        $("div.desc").hide();
        $("#" + test).show();
    });
});


</script>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
 include('include/footer.php');
?>