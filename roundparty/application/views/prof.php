
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="image/x-icon" href="http://itsolution.co.in/roundparty_new/assets/images/favi.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Round Party</title>
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <link href="http://itsolution.co.in/roundparty_new/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://itsolution.co.in/roundparty_new/assets/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="http://itsolution.co.in/roundparty_new/assets/css/animate.css" rel="stylesheet">
    <link href="http://itsolution.co.in/roundparty_new/assets/css/datepicker.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="http://itsolution.co.in/roundparty_new/assets/css/my_css.css" rel="stylesheet">
    <link href="http://itsolution.co.in/roundparty_new/assets/css/main-style.css" rel="stylesheet">
    <link href="http://itsolution.co.in/roundparty_new/assets/css/responsive.css" rel="stylesheet">
    <!-- <link href="http://itsolution.co.in/roundparty_new/assets/css/full-calender.css" rel="stylesheet"> -->

    <link rel="stylesheet" type="text/css" href="http://itsolution.co.in/roundparty_new/assets/css/jquery-ui-custom-1.11.2.min.css" />
    <link rel="stylesheet" type="text/css" href="http://itsolution.co.in/roundparty_new/assets/css/calenstyle.css" />
    <link rel="stylesheet" type="text/css" href="http://itsolution.co.in/roundparty_new/assets/css/calenstyle-jquery-ui-override.css" />
    <link rel="stylesheet" type="text/css" href="http://itsolution.co.in/roundparty_new/assets/css/calenstyle-iconfont.css" />
    
</head>
<body>

    <header>
        <div class="top_bar">
            <div class="container-fluid">
                <div class="top_bar_in">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="top_bar_left">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="top_bar_right">
                                <ul>
                                    <li><a href="#"><span><i class="fas fa-user"></i></span> Welcome <span class="orange">bhupendra</span></a></li>
                                </ul>
                                <ul>
                                    <li><a href="http://itsolution.co.in/roundparty_new/Supplier_controller/logout"><span><i class="fas fa-sign-out-alt"></i></span> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar_area">
            <div class="container-fluid">
                <div class="navbar_area_in">
                    <nav class="navbar navbar-default">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="index.html"><img src="http://itsolution.co.in/roundparty_new/assets/images/logo.png" alt="logo"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="http://itsolution.co.in/roundparty_new/Supplier_controller/supplier_deshboard">Dashboard</a></li>
                        <li><a href="http://itsolution.co.in/roundparty_new/Supplier_controller/supplier_setting">Setting</a></li>
                        <li><a href="#">Reports</a></li>
                      </ul>
                    </div>
                  </nav>
                </div>
            </div>
        </div>
    </header>

<div class="my_small_banner">
    <div class="my_small_banner_overlay">
        <div class="container">
            <div class="my_small_banner_in">
                <h1>Settings</h1>
                <ul>
                    <li><a href="http://itsolution.co.in/roundparty_new/supplier_deshboard">Deshboard</a></li>
                    <li><span> / </span></li>
                    <li>Settings</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="my_pg_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="dashbord_tabal">
                    <div class="dashbord_box">
                        <ul class="nav nav-tabs">
                            <li><a data-toggle="tab" href="#suplr_availability">Availability</a></li>
                            <li class="active"><a data-toggle="tab" href="#profile">Profile</a></li>
                            <li><a data-toggle="tab" href="#editprofile">Edit Profile</a></li>
                            <li><a data-toggle="tab" href="#changepassword">Change Password</a></li>
                        </ul>
                        <div class="tab-content">
                        	<div id="suplr_availability" class="tab-pane fade">
                        		<div class="row">
                        			<div class="col-md-6 col-sm-6 col-xs-12">
                        				<div class="basic_tab_bx availability_bx">
                        					<h3>Available</h3>
                        					<!-- <div class="day_avalbl_form">
                        						<div class="input-group">
                        							<label>Year</label>
                        							<div class="input_year_check">
                        								<ul>
                        									<li><input type="checkbox" id="year-2019"/><label for="year-2019">2019</label></li>
                        									<li><input type="checkbox" id="year-2020"/><label for="year-2019">2020</label></li>
                        									<li><input type="checkbox" id="year-2021"/><label for="year-2019">2021</label></li>
                        									<li><input type="checkbox" id="year-2022"/><label for="year-2019">2022</label></li>
                        								</ul>
                        							</div>
                        						</div>
                        						<div class="input-group">
                        							<label>Month</label>
                        							<div class="input_mnth_check">
                        								<ul>
                        									<li><input type="checkbox" id="mnth-1"/><label for="mnth-1">January</label></li>
                        									<li><input type="checkbox" id="mnth-2"/><label for="mnth-2">February</label></li>
                        									<li><input type="checkbox" id="mnth-3"/><label for="mnth-3">March</label></li>
                        									<li><input type="checkbox" id="mnth-4"/><label for="mnth-4">April</label></li>
                        									<li><input type="checkbox" id="mnth-5"/><label for="mnth-5">May</label></li>
                        									<li><input type="checkbox" id="mnth-6"/><label for="mnth-6">June</label></li>
                        									<li><input type="checkbox" id="mnth-7"/><label for="mnth-7">July</label></li>
                        									<li><input type="checkbox" id="mnth-8"/><label for="mnth-8">August</label></li>
                        									<li><input type="checkbox" id="mnth-9"/><label for="mnth-9">September</label></li>
                        									<li><input type="checkbox" id="mnth-10"/><label for="mnth-10">October</label></li>
                        									<li><input type="checkbox" id="mnth-11"/><label for="mnth-11">November</label></li>
                        									<li><input type="checkbox" id="mnth-12"/><label for="mnth-12">December</label></li>
                        								</ul>
                        							</div>
                        						</div>
                        						<div class="input-group">
                        							<label>Day</label>
                        							<div class="input_day_check">
                        								<ul>
                        									<li><input type="checkbox" id="day-1"/><label for="day-1">1</label></li>
                        									<li><input type="checkbox" id="day-2"/><label for="day-2">2</label></li>
                        									<li><input type="checkbox" id="day-3"/><label for="day-3">3</label></li>
                        									<li><input type="checkbox" id="day-4"/><label for="day-4">4</label></li>
                        									<li><input type="checkbox" id="day-5"/><label for="day-5">5</label></li>
                        									<li><input type="checkbox" id="day-6"/><label for="day-6">6</label></li>
                        									<li><input type="checkbox" id="day-7"/><label for="day-7">7</label></li>
                        									<li><input type="checkbox" id="day-8"/><label for="day-8">8</label></li>
                        									<li><input type="checkbox" id="day-9"/><label for="day-9">9</label></li>
                        									<li><input type="checkbox" id="day-10"/><label for="day-10">10</label></li>
                        									<li><input type="checkbox" id="day-11"/><label for="day-11">11</label></li>
                        									<li><input type="checkbox" id="day-12"/><label for="day-12">12</label></li>
                        									<li><input type="checkbox" id="day-13"/><label for="day-13">13</label></li>
                        									<li><input type="checkbox" id="day-14"/><label for="day-14">14</label></li>
                        									<li><input type="checkbox" id="day-15"/><label for="day-15">15</label></li>
                        									<li><input type="checkbox" id="day-16"/><label for="day-16">16</label></li>
                        									<li><input type="checkbox" id="day-17"/><label for="day-17">17</label></li>
                        									<li><input type="checkbox" id="day-18"/><label for="day-18">18</label></li>
                        									<li><input type="checkbox" id="day-19"/><label for="day-19">19</label></li>
                        									<li><input type="checkbox" id="day-20"/><label for="day-20">20</label></li>
                        									<li><input type="checkbox" id="day-21"/><label for="day-21">21</label></li>
                        									<li><input type="checkbox" id="day-22"/><label for="day-22">22</label></li>
                        									<li><input type="checkbox" id="day-23"/><label for="day-23">23</label></li>
                        									<li><input type="checkbox" id="day-24"/><label for="day-24">24</label></li>
                        									<li><input type="checkbox" id="day-25"/><label for="day-25">25</label></li>
                        									<li><input type="checkbox" id="day-26"/><label for="day-26">26</label></li>
                        									<li><input type="checkbox" id="day-27"/><label for="day-27">27</label></li>
                        									<li><input type="checkbox" id="day-28"/><label for="day-28">28</label></li>
                        									<li><input type="checkbox" id="day-29"/><label for="day-29">29</label></li>
                        									<li><input type="checkbox" id="day-30"/><label for="day-30">30</label></li>
                        									<li><input type="checkbox" id="day-31"/><label for="day-31">31</label></li>
                        								</ul>
													</div>
                        						</div>
                        					</div> -->
                                            <div class="availability_bx_time">
                                                <ul>
                                                    <li>Monday <span>10:00AM - 7:00PM</span></li>
                                                    <li>Tuesday <span>10:00AM - 7:00PM</span></li>
                                                    <li>Wednesday <span>10:00AM - 7:00PM</span></li>
                                                    <li>Thursday <span>10:00AM - 7:00PM</span></li>
                                                    <li>Friday <span>10:00AM - 7:00PM</span></li>
                                                    <li>Saturday <span>10:00AM - 2:00PM</span></li>
                                                    <li>Sunday <span>10:00AM - 2:00PM</span></li>
                                                </ul>
                                                <img src="http://itsolution.co.in/roundparty_new/assets/images/clock_back.png">
                                            </div>
                        				</div>
                        			</div>
                        		</div>
                            </div>
                            <div id="profile" class="tab-pane fade in active">
                                <?php 
                                    foreach($supplier_data as $row)
                                    {
                                ?>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="basic_tab_bx profile_bx">
                                            <h3>About You</h3>
                                            <ul>
                                                <li><span>Name :</span><?php echo $row->contact_name; ?></li>
                                                <li><span>Email :</span><?php echo $row->email; ?></li>
                                                <li><span>Mobile number :</span><?php echo $row->contact_phone; ?></li>
                                                <li><span>Date of birth</span><?php echo $row->date_of_birth; ?></li>
                                                <li><span>Gender :</span><?php echo $row->gender; ?></li>
                                                <li><span>Billing address :</span><?php echo $row->billing_address; ?></li>
                                                <li><span>Shipping address :</span><?php echo $row->shipping_address; ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="basic_tab_bx profile_bx">
                                            <h3>About Your Business</h3>
                                            <ul>
                                                <li><span>Company name :</span><?php echo $row->company_name; ?></li>
                                                <li><span>Business type :</span><?php echo $row->business_name; ?></li>
                                                <li><span>VAT number :</span><?php echo $row->vat_number; ?></li>
                                                <li><span>Bank account :</span><?php echo $row->bank_account_number; ?></li>
                                                <li><span>Services provided :</span><?php echo $row->services; ?></li>
                                                <li><span>Price :</span>$ <?php echo $row->price; ?></li>
                                                <li><span>Post Code :</span><?php echo $row->post_code; ?></li>
                                                <li><span>Contact Details :</span><?php echo $row->postal_address; ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="basic_tab_bx profile_desc_bx">
                                            <h4>Description</h4>
                                            <p><?php echo $row->description; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                    }
                                ?>
                            </div>
                            <div id="editprofile" class="tab-pane fade">
                                <?php 
                                    foreach($supplier_data as $edit)
                                    {
                                ?>
                                <?php echo form_open("Create/save_edit_profile") ?>
                                <div class="row">
                                   <div class="col-md-6 col-sm-6 col-xs-12">
                                       <div class="basic_tab_bx editprofile_bx">
                                           <h3>About You</h3>
                                           <ul>
                                              <li><span>Name :</span>
                                                <?php echo form_input(['class'=>'form-control','name'=>'contact_name','value'=>$edit->contact_name]);
                                                  echo form_error('contact_name');
                                                ?>
                                                <!-- <input type="text" class="form-control" name="name"> -->
                                              </li>
                                              <li><span>Email :</span>
                                                <?php echo form_input(['class'=>'form-control','name'=>'email','value'=>$edit->email]);
                                                  echo form_error('email');
                                                ?>
                                                <!-- <input type="email" class="form-control" name="email"></li> -->
                                              <li><span>Mobile number :</span>
                                                <?php echo form_input(['class'=>'form-control','name'=>'contact_phone','value'=>$edit->contact_phone]);
                                                  echo form_error('contact_phone');
                                                ?>
                                                <!-- <input type="text" class="form-control" name="mobile number"></li> -->
                                              <li><span>Date of birth</span>
                                                <?php echo form_input(['class'=>'form-control','type'=>'date','name'=>'date_of_birth','value'=>$edit->date_of_birth]);
                                                  echo form_error('date_of_birth');
                                                ?>
                                                <!-- <input type="date" class="form-control" name="date of birth"></li> -->
                                              <li><span>Gender :</span>
                                                <?php 
                                                  $option = array(
                                                      '' => ' --- select gender --- ',
                                                      'male' => 'Male',
                                                      'female' => 'Female'
                                                  );
                                                  echo form_dropdown('gender',$option,$edit->gender,'class="form-control"');
                                                  echo form_error('gender');
                                                ?>
                                                <!-- <select>
                                                  <option> - - -</option>
                                                  <option>Male</option>
                                                  <option>Female</option>
                                                </select> -->
                                              </li>
                                              <li><span>Billing address :</span>
                                                <?php echo form_input(['class'=>'form-control','name'=>'billing_address','value'=>$edit->billing_address]);
                                                  echo form_error('billing_address');
                                                ?>
                                                <!-- <input type="text" class="form-control" name="billing address"> -->
                                              </li>
                                              <li><span>Shipping address :</span>
                                                <?php echo form_input(['class'=>'form-control','name'=>'shipping_address','value'=>$edit->shipping_address]);
                                                  echo form_error('shipping_address');
                                                ?>
                                                <!-- <input type="text" class="form-control" name="shipping address"> -->
                                              </li>
                                           </ul>
                                       </div>
                                   </div>
                                   <div class="col-md-6 col-sm-6 col-xs-12">
                                       <div class="basic_tab_bx editprofile_bx">
                                           <h3>About Your Business</h3>
                                           <ul>
                                              <li><span>Company name :</span>
                                                <?php echo form_input(['class'=>'form-control','name'=>'company_name','value'=>$edit->company_name]);
                                                  echo form_error('company_name');
                                                ?>
                                                <!-- <input type="text" class="form-control" name="Company name"> -->
                                              </li>
                                              <li><span>Business type :</span>
                                                <?php echo form_input(['class'=>'form-control','name'=>'business_name','value'=>$edit->business_name]);
                                                  echo form_error('business_name');
                                                ?>
                                                <!-- <input type="text" class="form-control" name="Business type"> -->
                                              </li>
                                              <li><span>VAT number :</span>
                                                <?php echo form_input(['class'=>'form-control','name'=>'vat_number','value'=>$edit->vat_number]);
                                                  echo form_error('vat_number');
                                                ?>
                                                <!-- <input type="text" class="form-control" name="VAT number"> -->
                                              </li>
                                              <li><span>Bank account :</span>
                                                <?php echo form_input(['class'=>'form-control','name'=>'bank_account_number','value'=>$edit->bank_account_number]);
                                                  echo form_error('bank_account_number');
                                                ?>
                                                <!-- <input type="text" class="form-control" name="Bank account"> -->
                                              </li>
                                              <li><span>Services provided :</span>
                                                <?php echo form_input(['class'=>'form-control','name'=>'services','value'=>$edit->services]);
                                                  echo form_error('services');
                                                ?>
                                                <!-- <input type="text" class="form-control" name="Services provided"/> -->
                                              </li>
                                              <li><span>Price :</span>
                                                <?php echo form_input(['class'=>'form-control','name'=>'price','value'=>$edit->price]);
                                                  echo form_error('price');
                                                ?>
                                                <!-- <input type="text" class="form-control" name="Price"> -->
                                              </li>
                                              <li><span>Post Code :</span>
                                                <?php echo form_input(['class'=>'form-control','name'=>'post_code','value'=>$edit->post_code]);
                                                  echo form_error('post_code');
                                                ?>
                                                <!-- <input type="text" class="form-control" name="Post Code"> -->
                                              </li>
                                              <li><span>Contact Details :</span>
                                                <?php echo form_input(['class'=>'form-control','name'=>'postal_address','value'=>$edit->postal_address]);
                                                  echo form_error('postal_address');
                                                ?>
                                                <!-- <input type="text" class="form-control" name="Contact Details"> -->
                                              </li>
                                           </ul>
                                       </div>
                                   </div>
                                   <div class="col-md-12 col-sm-12 col-xs-12">
                                       <div class="basic_tab_bx editprofile_desc_bx">
                                           <h4>Description</h4>
                                           <?php echo form_textarea(['class'=>'form-control','rows'=>'4','name'=>'description','value'=>$edit->description]);
                                                  echo form_error('description');
                                                ?>
                                           <!-- <textarea class="form-control" rows="4" name="Description"></textarea> -->
                                       </div>
                                   </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="prfl_btn_area">
                                            <?php 
                                                echo form_button(['class'=>'btn cmn_btn_1','type'=>'submit','name'=>'save_profile','content'=>'Save','value'=>'Save'])
                                            ?>
                                            <!-- <button type="submit" name="save_profile" class="btn cmn_btn_1" value="save">Save</button> -->
                                        </div>
                                    </div>
                                </div>
                            <?php echo form_close(); ?>
                                <?php 
                                    }
                                ?>                                    
                            </div>
                            <div id="changepassword" class="tab-pane fade">
                                <?php echo form_open("Create/changepass"); ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="basic_tab_bx chang_pswrd_bx">
                                            <h3>Change your password</h3>
                                            <ul>
                                                <li><span>Current password :</span>
                                                    <?php 
                                                        echo form_password(['class'=>'form-control','name'=>'password','value'=>set_value('password')]); 
                                                        echo form_error('password');
                                                    ?>
                                                    <!-- <input type="password" class="form-control" name="Current password"> -->
                                                </li>
                                                <li><span>New password :</span>
                                                    <?php 
                                                        echo form_password(['class'=>'form-control','name'=>'newpassword','value'=>set_value('newpassword')]); 
                                                        echo form_error('newpassword');
                                                    ?>
                                                    <!-- <input type="password" class="form-control" name="New password"> -->
                                                </li>
                                                <li><span>Confirm password :</span>
                                                    <?php 
                                                        echo form_password(['class'=>'form-control','name'=>'cnpassword','value'=>set_value('cnpassword')]); 
                                                        echo form_error('cnpassword');
                                                    ?>
                                                    <!-- <input type="password" class="form-control" name="Confirm password"> -->
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="prfl_btn_area">
                                            <?php 
                                                echo form_button(['class'=>'btn cmn_btn_1','type'=>'submit','name'=>'save_password','content'=>'Save','value'=>'save']); 
                                            ?>
                                            <!-- <button class="btn cmn_btn_1" value="save">Save</button> -->
                                        </div>
                                    </div>
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="footer_box footer_box_1">
                        <img src="http://itsolution.co.in/roundparty_new/assets/images/logo.png" alt="logo">
                        <p>We are a children’s event planning company specializing in family entertainment, birthday parties, corporate and charity functions.</p>
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="footer_box footer_box_2">
                        <h1>Discover</h1>
                        <ul class="ftr_menu_links">
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Team Value</a></li>
                            <li><a href="#">Family Organiser</a></li>
                            <li><a href="#">Health Visitors</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="footer_box footer_box_3">
                        <h1>Legal</h1>
                        <ul class="ftr_menu_links">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Services</a></li>
                            <li><a href="#">Cookies</a></li>
                            <li><a href="#">Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="footer_box footer_box_4">
                        <h1>Contact Us</h1>
                        <div class="ftr_info">
                        <h4><span><i class="far fa-envelope"></i></span> info@example.com</h4>
                        <h4><span><i class="fas fa-phone"></i></span> +1 (123) 456-7890</h4>
                        <h4><span><i class="fas fa-map-marker-alt"></i></span> Dummy Address Location, 123456. USA</h4>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="footer_bottom">
                    <p>© 2018 Round Party. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>


    <div class="scrollup"><span><i class="fas fa-angle-up"></i></span></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://itsolution.co.in/roundparty_new/assets/js/bootstrap.min.js"></script>
    <script src="http://itsolution.co.in/roundparty_new/assets/js/fontawesome-all.min.js"></script>
    <script src="http://itsolution.co.in/roundparty_new/assets/js/wow.js"></script>
    <script src="http://itsolution.co.in/roundparty_new/assets/js/slider.js"></script>
    <script src="http://itsolution.co.in/roundparty_new/assets/js/datepicker.js"></script>
    <script src="http://itsolution.co.in/roundparty_new/assets/js/custom.js"></script>
    <!-- <script src="http://itsolution.co.in/roundparty_new/assets/js/full-calender.js"></script> -->

    <script type="text/javascript" src="http://itsolution.co.in/roundparty_new/assets/js/jquery-ui-custom-1.11.2.min.js"></script>
    <script type="text/javascript" src="http://itsolution.co.in/roundparty_new/assets/js/calenstyle.js"></script>
    <script type="text/javascript" src="http://itsolution.co.in/roundparty_new/assets/js/CalJsonGenerator.js"></script>
    <script type="text/javascript" src="http://itsolution.co.in/roundparty_new/assets/js/my_js.js"></script>


    <script>
    $(document).ready(function() {
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        /*  className colors
        className: default(transparent), important(red), chill(pink), success(green), info(blue)
        */      
        /* initialize the external events
        -----------------------------------------------------------------*/
        $('#external-events div.external-event').each(function() {
        
            // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
            // it doesn't need to have a start or end
            var eventObject = {
                title: $.trim($(this).text()) // use the element's text as the event title
            };
            
            // store the Event Object in the DOM element so we can get to it later
            $(this).data('eventObject', eventObject);
            
            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 999,
                revert: true,      // will cause the event to go back to its
                revertDuration: 0  //  original position after the drag
            });
            
        });
    
        /* initialize the calendar
        -----------------------------------------------------------------*/
        var calendar =  $('#calendar').fullCalendar({
            header: {
                left: 'title',
                center: 'agendaDay,agendaWeek,month',
                right: 'prev,next today'
            },
            editable: true,
            firstDay: 1, //  1(Monday) this can be changed to 0(Sunday) for the USA system
            selectable: true,
            defaultView: 'month',
            
            axisFormat: 'h:mm',
            columnFormat: {
                month: 'ddd',    // Mon
                week: 'ddd d', // Mon 7
                day: 'dddd M/d',  // Monday 9/7
                agendaDay: 'dddd d'
            },
            titleFormat: {
                month: 'MMMM yyyy', // September 2009
                week: "MMMM yyyy", // September 2009
                day: 'MMMM yyyy'                  // Tuesday, Sep 8, 2009
            },
            allDaySlot: false,
            selectHelper: true,
            select: function(start, end, allDay) {
                var title = prompt('Event Title:');
                if (title) {
                    calendar.fullCalendar('renderEvent',
                        {
                            title: title,
                            start: start,
                            end: end,
                            allDay: allDay
                        },
                        true // make the event "stick"
                    );
                }
                calendar.fullCalendar('unselect');
            },
            droppable: true, // this allows things to be dropped onto the calendar !!!
            drop: function(date, allDay) { // this function is called when something is dropped
            
                // retrieve the dropped element's stored Event Object
                var originalEventObject = $(this).data('eventObject');
                
                // we need to copy it, so that multiple events don't have a reference to the same object
                var copiedEventObject = $.extend({}, originalEventObject);
                
                // assign it the date that was reported
                copiedEventObject.start = date;
                copiedEventObject.allDay = allDay;
                
                // render the event on the calendar
                // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
                
                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }
                
            },
            // events: [
            //     {
            //         title: 'All Day Event',
            //         start: new Date(y, m, 1)
            //     },
            //     {
            //         id: 999,
            //         title: 'Repeating Event',
            //         start: new Date(y, m, d-3, 16, 0),
            //         allDay: false,
            //         className: 'info'
            //     }
            // ],          
        });
    });
</script>

 --></body>

</html>