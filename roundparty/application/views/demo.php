<div id="editprofile" class="tab-pane fade">
                               <div class="row">
                                   <div class="col-md-6 col-sm-6 col-xs-12">
                                       <div class="basic_tab_bx editprofile_bx">
                                           <h3>About You</h3>
                                           <ul>
                                              <li><span>Name :</span>
                                                <?php echo form_input(['class'=>'form-control','name'=>'name','value'=>set_value('name')]);
                                                  echo form_error('name');
                                                ?>
                                                <!-- <input type="text" class="form-control" name="name"> -->
                                              </li>
                                              <li><span>Email :</span>
                                                <?php echo form_input(['class'=>'form-control','name'=>'email','value'=>set_value('email')]);
                                                  echo form_error('email');
                                                ?>
                                                <!-- <input type="email" class="form-control" name="email"></li> -->
                                              <li><span>Mobile number :</span>
                                                <?php echo form_input(['class'=>'form-control','name'=>'mobile_number','value'=>set_value('mobile_number')]);
                                                  echo form_error('mobile_number');
                                                ?>
                                                <!-- <input type="text" class="form-control" name="mobile number"></li> -->
                                              <li><span>Date of birth</span>
                                                <?php echo form_input(['class'=>'form-control','name'=>'date_of_birth','value'=>set_value('date_of_birth')]);
                                                  echo form_error('date_of_birth');
                                                ?>
                                                <!-- <input type="date" class="form-control" name="date of birth"></li> -->
                                              <li><span>Gender :</span>
                                                <?php 
                                                  $option = array(
                                                      '' => ' --- select gender --- '
                                                      'male' => 'Male',
                                                      'female' => 'Female'
                                                  );
                                                  echo form_dropdown('gender',$option,'class="form-control"');
                                                  echo form_error('gender');
                                                ?>
                                                <!-- <select>
                                                  <option> - - -</option>
                                                  <option>Male</option>
                                                  <option>Female</option>
                                                </select> -->
                                              </li>
                                              <li><span>Billing address :</span>
                                                <?php echo form_input(['class'=>'form-control','name'=>'billing_address','value'=>set_value('billing_address')]);
                                                  echo form_error('billing_address');
                                                ?>
                                                <!-- <input type="text" class="form-control" name="billing address"> -->
                                              </li>
                                              <li><span>Shipping address :</span>
                                                <?php echo form_input(['class'=>'form-control','name'=>'shipping_address','value'=>set_value('shipping_address')]);
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
                                                <?php echo form_input(['class'=>'form-control','name'=>'company_name','value'=>set_value('company_name')]);
                                                  echo form_error('company_name');
                                                ?>
                                                <!-- <input type="text" class="form-control" name="Company name"> -->
                                              </li>
                                              <li><span>Business type :</span>
                                                <?php echo form_input(['class'=>'form-control','name'=>'business_name','value'=>set_value('business_name')]);
                                                  echo form_error('business_name');
                                                ?>
                                                <!-- <input type="text" class="form-control" name="Business type"> -->
                                              </li>
                                              <li><span>VAT number :</span>
                                                <?php echo form_input(['class'=>'form-control','name'=>'vat_number','value'=>set_value('vat_number')]);
                                                  echo form_error('vat_number');
                                                ?>
                                                <!-- <input type="text" class="form-control" name="VAT number"> -->
                                              </li>
                                              <li><span>Bank account :</span>
                                                <?php echo form_input(['class'=>'form-control','name'=>'bank_account_number','value'=>set_value('bank_account_number')]);
                                                  echo form_error('bank_account_number');
                                                ?>
                                                <!-- <input type="text" class="form-control" name="Bank account"> -->
                                              </li>
                                              <li><span>Services provided :</span>
                                                <?php echo form_input(['class'=>'form-control','name'=>'services','value'=>set_value('services')]);
                                                  echo form_error('services');
                                                ?>
                                                <!-- <input type="text" class="form-control" name="Services provided"/> -->
                                              </li>
                                              <li><span>Price :</span>
                                                <?php echo form_input(['class'=>'form-control','name'=>'price','value'=>set_value('price')]);
                                                  echo form_error('price');
                                                ?>
                                                <!-- <input type="text" class="form-control" name="Price"> -->
                                              </li>
                                              <li><span>Post Code :</span>
                                                <?php echo form_input(['class'=>'form-control','name'=>'post_code','value'=>set_value('post_code')]);
                                                  echo form_error('post_code');
                                                ?>
                                                <!-- <input type="text" class="form-control" name="Post Code"> -->
                                              </li>
                                              <li><span>Contact Details :</span>
                                                <?php echo form_input(['class'=>'form-control','name'=>'postal_address','value'=>set_value('postal_address')]);
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
                                           <?php echo form_textarea(['class'=>'form-control','rows'=>'4','name'=>'description','value'=>set_value('description')]);
                                                  echo form_error('description');
                                                ?>
                                           <!-- <textarea class="form-control" rows="4" name="Description"></textarea> -->
                                       </div>
                                   </div>
                                   <div class="col-md-12 col-sm-12 col-xs-12">