<?php 
include('include/header.php');
                                

                                  foreach ($data as $key => $edit_announcement) {
                                            $add_page= $edit_announcement->add_page;
                                            $no_of_deceased= $edit_announcement->no_of_deceased;
                                            $add_title= $edit_announcement->add_title;
                                            $oname= $edit_announcement->oname;
                                            $dob= $edit_announcement->dob;
                                            $dod= $edit_announcement->dod;
                                            $oname2= $edit_announcement->oname2;
                                            $place= $edit_announcement->place;
                                            $dob2= $edit_announcement->dob2;
                                            $adddesc= $edit_announcement->adddesc;
                                            $place2= $edit_announcement->place2;
                                             $frame= $edit_announcement->frame;

                                       }

  foreach ($dat as $key => $edit_announcement_second) {
                                           $SelectedPackagePrice= $edit_announcement_second->SelectedPackagePrice;
                                           $SelectedPackage= $edit_announcement_second->SelectedPackage;
                                           $Announcementfor= $edit_announcement_second->Announcementfor;
                                           $NumberofDeceased= $edit_announcement_second->NumberofDeceased;
                                           $AdditionalServiceOffered= $edit_announcement_second->AdditionalServiceOffered;
                                           $StartDate= $edit_announcement_second->StartDate;
                                           $end_date= $edit_announcement_second->end_date;
                                           $AdditionalDescrition= $edit_announcement_second->AdditionalDescrition;
///echo $Announcementfor;
                                       }

foreach ($da as $key => $edit_announcement_third) {
                                           $plan_name= $edit_announcement_third->plan_name;
                                           $dnumber= $edit_announcement_third->dnumber;
                                           $Title= $edit_announcement_third->Title;
                                           $FullName= $edit_announcement_third->FullName;
                                           $SecondName= $edit_announcement_third->SecondName;
                                           $LastName= $edit_announcement_third->LastName;
                                           $dob= $edit_announcement_third->dob;
                                           $dod= $edit_announcement_third->dod;
                                           $PreferredNameonNotice= $edit_announcement_third->PreferredNameonNotice;
                                           $Title2= $edit_announcement_third->Title2;
                                           $FullName2= $edit_announcement_third->FullName2;
                                           $SecondName2= $edit_announcement_third->SecondName2;
                                           $LastName2= $edit_announcement_third->LastName2;
                                           $PlaceofBirth2= $edit_announcement_third->PlaceofBirth2;
                                           $PreferredNameonNotice2= $edit_announcement_third->PreferredNameonNotice2;
                                           $dob2= $edit_announcement_third->dob2;
                                           $dob2= $edit_announcement_third->dob2;
                                           $dod2= $edit_announcement_third->dod2;
                                           $image_second = $edit_announcement_third->image;
                                           $image_third = $edit_announcement_third->image2;
                                       }
                                       ?>








<div class="education_area my_wrapper_area">
    <div class="container">
        <div class="my_wrapper">
            <div class="my_wrapper_area_in">
                <div class="page_menu">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>&gt;</li>
                        <li>Education</li>
                    </ul>
                </div>
                <div class="row">
                	<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                		<div class="anouncemet_box_view">
                			<h1>View Announcement</h1>
                			<div class="middle_image">
                				<?php 
                					if(!$image_third)
                					{
                				?>
                				<div class="dtl_pg_frm_bx dtl_pg_frm_bx_single dtl_pg_frm_bx_imgs_single">
                                    <div class="dtl_pg_img">
					         			<img src="<?php echo base_url();?>admin/assets/images/<?php echo $image_second;?>" onerror="this.src='<?php echo base_url();?>admin/assets/images/no-person.jpg'" alt="my image" class="img-responsive">
					         		</div>
                                    <div class="dtl_pg_frm">
                                        <img src="<?php echo base_url();?>admin/assets/images/<?php echo $frame;?>" alt="images">
                                    </div>
                                </div>
					         	<?php
					         		}
					         		else
					         		{
					         	?>
					         	<div class="dtl_pg_frm_bx dtl_pg_frm_bx_single dtl_pg_frm_bx_imgs_single">
                                    <div class="dtl_pg_img">
					         			<img src="<?php echo base_url();?>admin/assets/images/<?php echo $image_second;?>" onerror="this.src='<?php echo base_url();?>admin/assets/images/no-person.jpg'" alt="my image" class="img-responsive">
					         		</div>
                                    <div class="dtl_pg_frm">
                                        <img src="<?php echo base_url();?>admin/assets/images/<?php echo $frame;?>" alt="images">
                                    </div>
                                </div>
					         	<div class="dtl_pg_frm_bx dtl_pg_frm_bx_single dtl_pg_frm_bx_imgs_single">
                                    <div class="dtl_pg_img">
					         			<img src="<?php echo base_url();?>admin/assets/images/<?php echo $image_third;?>" onerror="this.src='<?php echo base_url();?>admin/assets/images/no-person.jpg'" alt="my image" class="img-responsive">
					         		</div>
                                    <div class="dtl_pg_frm">
                                        <img src="<?php echo base_url();?>admin/assets/images/<?php echo $frame;?>" alt="images">
                                    </div>
                                </div>
					         	<?php	
					         		}
					         	?>
					      	</div>
                			<!-- <div class="middle_image">
						        <img src="image/49988785_002_b.jpg" alt="my image" class="img-responsive">
						    </div> -->
						    <div class="middle_from">
                			<div class="col-md-6 padding_form">
					          	<div class="form-group">
					              <label >Package</label>
					              <div class="amount-placeholder">
					                 <span class="font-style"><?php echo $SelectedPackage;?></span>
					              </div>
					          	</div>
					        </div>
					        <div class="col-md-6 padding_form">
					          	<div class="form-group">
					              <label>Package price</label>
					              <div class="amount-placeholder">
					                 <span class="font-style">£</span>
					                 <span class="font-style"><?php echo $SelectedPackagePrice;?></span>
					              </div>
					          	</div>
					        </div>
					        <div class="col-md-6 padding_form">
					          <div class="form-group">
					              <label for="PaymentAmount">Announcement for</label>
					              <div class="amount-placeholder">
					                 <span class="font-style"><?php echo $Announcementfor; ?></span>
					              </div>
					          </div>
					        </div>
				        <?php
				        	if($Announcementfor == 'Anniversary Notice')
				        	{
				        ?>
				        	<div class="col-md-6 padding_form">
					          	<div class="form-group">
						            <label for="PaymentAmount">Date of Marriage</label>
						            <div class="amount-placeholder">
						                <span class="font-style"> <?php echo $dob ;?></span>
						            </div>
					          	</div>
					        </div>
				        <?php
				        	}
				        	else if($Announcementfor == 'Birthday Notice')
				        	{
				        ?>
				        	<div class="col-md-6 padding_form">
					          	<div class="form-group">
					              	<label for="PaymentAmount">Date of Birth</label>
					              	<div class="amount-placeholder">
					                 	<span class="font-style"> <?php echo $dob ;?></span>
					              	</div>
					          	</div>
					        </div>
				        <?php
				        	}
				        	else
				        	{
				        ?>
				        	<div class="col-md-6 padding_form">
					          	<div class="form-group">
					              	<label for="PaymentAmount">Number of Deceased</label>
					              	<div class="amount-placeholder">
					                 	<span class="font-style"> <?php echo $no_of_deceased;?></span>
					             	</div>
					          	</div>
					        </div>
				        <?php
				        	}
				        ?>
					        	<div class="col-md-4 padding_form">
						        	<div class="form-group">
						               	<label or="NameOnCard">(Person 1)First Name</label>
						           	  	<span class="form-control">
						           			<?php echo $Title." ".$FullName;?>
						           		</span>
						          	</div>
						        </div>
						        <div class="col-md-4 padding_form">
						         <div class="form-group">
						              <label or="NameOnCard">Middle Name</label>
							           <span class="form-control">
							            <?php echo $SecondName;?>  </span>
						          </div>
						        </div>
						        <div class="col-md-4 padding_form">
						         <div class="form-group">
						              <label or="NameOnCard">Last Name</label>
							           <span class="form-control">
							             <?php echo $LastName;?> </span>
						          </div>
						        </div>
						        <?php
						        	if($FullName2)
						        	{
						        ?>
						        <div class="col-md-4 padding_form">
						        	<div class="form-group">
						               	<label or="NameOnCard">(Person 2)First Name</label>
						           	  	<span class="form-control">
						           			<?php echo $Title2." ".$FullName2;?>
						           		</span>
						          	</div>
						        </div>
						        <div class="col-md-4 padding_form">
						         <div class="form-group">
						              <label or="NameOnCard">Middle Name</label>
							           <span class="form-control">
							            <?php echo $SecondName2;?>  </span>
						          </div>
						        </div>
						        <div class="col-md-4 padding_form">
						         <div class="form-group">
						              <label or="NameOnCard">Last Name</label>
							           <span class="form-control">
							             <?php echo $LastName2;?> </span>
						          </div>
						        </div>
						        <?php
						    		}
						        	if(!$FullName2)
						        	{
						        ?>
								<div class="col-md-12 padding_form">
								   <div class="form-group">
						              	<label or="NameOnCard">(Person 1)Prefered Name in Notice</label>
						              	<span class="form-control">
						            		<?php echo $Title." ".$PreferredNameonNotice ; ?>
						            	</span>
						          </div>
								</div>
								<?php
									}
									else
									{
								?>
								<div class="col-md-6 padding_form">
								   <div class="form-group">
						              	<label or="NameOnCard">(Person 1)Prefered Name in Notice</label>
						              	<span class="form-control">
						            		<?php echo $Title." ".$PreferredNameonNotice ; ?>
						            	</span>
						          </div>
								</div>
								<div class="col-md-6 padding_form">
								   <div class="form-group">
						              	<label or="NameOnCard">(Person 2)Prefered Name in Notice</label>
						              	<span class="form-control">
						            		<?php echo $Title2." ".$PreferredNameonNotice2; ?>
						            	</span>
						          </div>
								</div>
								<?php
									}
									if((($place) && (!$place2)) || ($place == $place2) || ($Announcementfor == 'Anniversary Notice') || ($Announcementfor == 'Birthday Notice'))
						        	
									{
								?>
								<div class="col-md-12 padding_form">
								   <div class="form-group">
								   	<?php
								   		if($Announcementfor == 'Anniversary Notice')
						        		{
								   	?>
						              <label or="NameOnCard">Place of Marriage</label>
						            <?php
						          		}
						          		else
						          		{
						          	?>
						          	<label or="NameOnCard">Place of Birth/Lived</label>
						          	<?php
						          		}
						            ?>
						              <span class="form-control">
						             <?php echo $place;?> </span>
						          </div>
								</div>
								<?php
									}
									else
									{
								?>
								<div class="col-md-6 padding_form">
								   <div class="form-group">
						              <label or="NameOnCard">(Person 1)Place of Birth/Lived</label>
						              <span class="form-control">
						             <?php echo $place;?> </span>
						          </div>
								</div>
								<div class="col-md-6 padding_form">
								   <div class="form-group">
						              <label or="NameOnCard">(Person 2)Place of Birth/Lived</label>
						              <span class="form-control">
						             <?php echo $place2;?> </span>
						          </div>
								</div>
								<?php
									}
								?>
								<?php
								   	if(($Announcementfor != 'Anniversary Notice') && ($Announcementfor != 'Birthday Notice'))
						        	{
						        ?>
						        <div class="col-md-6 padding_form">
								    <div class="form-group">
								              <label or="NameOnCard">Date of Birth</label>
								              <span class="form-control">
								            <?php echo $dob;?>  </span>
								    </div>
								</div>
								<div class="col-md-6 padding_form">
								   <div class="form-group">
								              <label or="NameOnCard">Date of Death</label>
								              <span class="form-control">
								            <?php echo $dod;?>  </span>
								    </div>
								</div>
								<?php
									}
								?>
									<div class="col-md-6 padding_form">
									   <div class="form-group">
									              <label or="NameOnCard">Announcement Start Date</label>
									              <span class="form-control">
									           <?php echo  $StartDate;?>   </span>
									          </div>
									</div>
									<div class="col-md-6 padding_form">
									   <div class="form-group">
									              <label or="NameOnCard">Announcement End Date</label>
									              <span class="form-control">
									        <?php echo $end_date;?>      </span>
									          </div>
									</div>
									<div class="col-md-12 padding_form">
									   <div class="form-group">
									     <label or="NameOnCard">Description</label>
									     <textarea rows="5" class="form-control"><?php echo $adddesc;?></textarea>
									   </div>
									</div>
								<button id="paypal-button-container" class="btn submit-button_viewannon" type="submit">Pay £ <?php echo $SelectedPackagePrice;?></button>
					    	</div>
                		</div>
                	</div>
                </div>
            </div>
        </div>
    </div>
</div>

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


</script>

<?php
include('include/footer.php');
?>