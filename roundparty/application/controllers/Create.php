<?php
Class Create extends CI_Controller
{
	public function __construct()
	{
		parent ::__construct();

		//load helper url
		$this->load->helper('url');

		//load helper date
		$this->load->helper('date');

		$this->load->helper('form');

		$this->load->library('form_validation');

		//load manaul database
		$this->load->database();

		//load model Create_event_model
		$this->load->model('Create_event_model');
	}

	public function index1()
	{
		$this->load->view('index1');
	}

	public function addbusinessinfo(){

		

		$this->form_validation->set_error_delimiters('<div class="err">', '</div>');
	        $this->form_validation->set_rules('business_name','Business Name','required');
	        $this->form_validation->set_rules('contact_name','Contact Name','required');
	        $this->form_validation->set_rules('contact_phone','Contact Phone','required');
	        $this->form_validation->set_rules('service','Service','required');
	        // $this->form_validation->set_rules('service_option','Service option','required');
	        $this->form_validation->set_rules('areas_served','Areas Served','required');
	        $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[business_registration.email]|trim');
	        $this->form_validation->set_rules('password','Password','required|min_length[8]');
	        $this->form_validation->set_rules('business_address','Business Address','required');
	        // $this->form_validation->set_rules('postal_address','Postal Address','required');
	        $this->form_validation->set_rules('post_code','Postal Code','required');

         	if($this->form_validation->run() == FALSE)
         	{
            	$this->load->view('business_registration');
           	}
        	else
        	{

	        	$service_option_data = $this->input->post('service_option');
	        	$data = array(
		        	'business_name' => $this->input->post('business_name'),
		        	'contact_name' => $this->input->post('contact_name'),
		        	'contact_phone' => $this->input->post('contact_phone'),
		        	'services' => $this->input->post('service'),
		        	'service_option' => implode(', ',$service_option_data),
		        	'areas_served' => $this->input->post('areas_served'),
		        	'email' => $this->input->post('email'),
		        	'password' => $this->input->post('password'),
		        	'business_address' => $this->input->post('business_address'),
		        	'post_code' => $this->input->post('post_code'),
		        	'reg_date' => date("Y-m-d")
		        );
		        $idd = $this->Create_event_model->insertAlldata($data);
	           	// $this->Create_event_model->insertAlldata($business_name,$contact_name,$contact_phone,$service,$service_option,$areas_served,$email,$password,$business_address,$post_code);
        
      		}
    } 




	public function create_event()
	{	
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters();

		if($this->form_validation->run('createform'))
		{
				//Set Default Time Zone
				date_default_timezone_set("Asia/Calcutta");
				$title = $this->input->post('title');
				$title = htmlspecialchars($title, ENT_QUOTES);
				$type = $this->input->post('type');
				$special_instructions = $this->input->post('special_instructions');
				$special_instructions = htmlspecialchars($special_instructions, ENT_QUOTES);
				$location = $this->input->post('location');
				$location = htmlspecialchars($location, ENT_QUOTES);
				$location_postcode = $this->input->post('location_postcode');
				$age = $this->input->post('age');
				$age = htmlspecialchars($age, ENT_QUOTES);
				$event_date = $this->input->post('event_date');
				
				$start_time_in = $this->input->post('start_time');
				$start_time = date(" h:i:s a",strtotime($start_time_in));
				
				$end_time_in = $this->input->post('end_time');
				$end_time = date(" h:i:s a",strtotime($end_time_in));
				
				$combine_end_date_time = $event_date." ".$end_time;
				$end_date_time = new DateTime($combine_end_date_time);
				$event_end_date_time = $end_date_time->format("Y-m-d h:i:s a");

				$current_date_time = date('Y-m-d h:i:s a');

				$combine_start_date_time = $event_date." ".$start_time;
				$start_date_time = new DateTime($combine_start_date_time);
				$event_start_date_time = $start_date_time->format("Y-m-d h:i:s a");

				
					if($current_date_time <= $event_start_date_time)
				    {		
					    $files = $_FILES;
					    $count = count($_FILES['image']['name']);

					    for($i=0; $i<$count; $i++)
					    {
					        $_FILES['image']['name'] = $files['image']['name'][$i];
					        $_FILES['image']['tmp_name'] = $files['image']['tmp_name'][$i];
					        $image = $_FILES['image']['name'];
					    	$temp_name = $_FILES['image']['tmp_name'];
					        move_uploaded_file($temp_name,"img/$image");
					        $dataInfo[$i] = $image;
					        
					    }
					    $image = array($dataInfo);
					    $images = implode(' ',$image[0]);
					    
						$this->Create_event_model->create_event($title,$type,$special_instructions,$location,$location_postcode,$age,$event_date,$start_time,$end_time,$images);
						echo "<script>alert('Data insert.')</script>";
						redirect("Create/index1");
				    }
				    else
				    {
				    	echo "<script>alert('Date or time is not correct, Try Again.')</script>";
				    	$this->index1();
				    }
		}
		else
		{
			$this->index1();
		}
	}

	public function index()
	{
		$this->load->view('index');
		
		if($this->input->post('create'))
		{
				//Set Default Time Zone
				date_default_timezone_set("Asia/Calcutta");
				
				$title = $this->input->post('title');
				$title = htmlspecialchars($title, ENT_QUOTES);
				$type = $this->input->post('type');
				$special_instructions = $this->input->post('special_instructions');
				$special_instructions = htmlspecialchars($special_instructions, ENT_QUOTES);
				$location = $this->input->post('location');
				$location = htmlspecialchars($location, ENT_QUOTES);
				$location_postcode = $this->input->post('location_postcode');
				$age = $this->input->post('age');
				$age = htmlspecialchars($age, ENT_QUOTES);
				$event_date = $this->input->post('event_date');
				
				$start_time_in = $this->input->post('start_time');
				$start_time = date(" h:i:s a",strtotime($start_time_in));

				$end_time_in = $this->input->post('end_time');
				$end_time = date(" h:i:s a",strtotime($end_time_in));
				
				$combine_end_date_time = $event_date." ".$end_time;
				$end_date_time = new DateTime($combine_end_date_time);
				$event_end_date_time = $end_date_time->format("Y-m-d h:i:s a");

				$current_date_time = date('Y-m-d h:i:s a');

				$combine_start_date_time = $event_date." ".$start_time;
				$start_date_time = new DateTime($combine_start_date_time);
				$event_start_date_time = $start_date_time->format("Y-m-d h:i:s a");

					if($current_date_time <= $event_start_date_time)
				    {					    	
					    $files = $_FILES;
					    $count = count($_FILES['image']['name']);

					    for($i=0; $i<$count; $i++)
					    {
					        $_FILES['image']['name'] = $files['image']['name'][$i];
					        $_FILES['image']['tmp_name'] = $files['image']['tmp_name'][$i];
					        $image = $_FILES['image']['name'];
					    	$temp_name = $_FILES['image']['tmp_name'];
					        move_uploaded_file($temp_name,"img/$image");
					        $dataInfo[$i] = $image; 
					        
					    }
					    $image = array($dataInfo);
					    $images = implode(' ',$image[0]);
					    
						$this->Create_event_model->create_event($title,$type,$special_instructions,$location,$location_postcode,$age,$event_date,$start_time,$end_time,$images);
						echo "<script>alert('Data insert.')</script>";
				    }
				    else
				    {
				    	echo "<script>alert('Date or time is not correct, Try Again.')</script>";
				    	
				    }
		}
		elseif ($this->input->post('view'))
		{
			redirect("Create/view_event");
		}
	}

	public function view_event()
	{
		$result['data'] = $this->Create_event_model->select_event();
		$this->load->view('view_events',$result);
	}

	public function edit_events()
	{
		$id = $this->input->get('id');
		$result['edit'] = $this->Create_event_model->select_event_by_id($id);
		
		$this->load->view('edit_event',$result);

		if($this->input->post('update_event'))
		{

				//Set Default Time Zone
				date_default_timezone_set("Asia/Calcutta");
				
				$title = $this->input->post('title');
				$title = htmlspecialchars($title, ENT_QUOTES);
				$type = $this->input->post('type');
				$special_instructions = $this->input->post('special_instructions');
				$special_instructions = htmlspecialchars($special_instructions, ENT_QUOTES);
				$location = $this->input->post('location');
				$location = htmlspecialchars($location, ENT_QUOTES);
				$location_postcode = $this->input->post('location_postcode');
				$age = $this->input->post('age');
				$age = htmlspecialchars($age, ENT_QUOTES);
				$event_date = $this->input->post('event_date');
				
				$start_time_in = $this->input->post('start_time');
				$start_time = date(" h:i:s a",strtotime($start_time_in));
				$start_time_24_format = date(" H:i:s a",strtotime($start_time));

				$end_time_in = $this->input->post('end_time');
				$end_time = date(" h:i:s a",strtotime($end_time_in));
				$end_time_24_format = date(" H:i:s a",strtotime($end_time));
				
				$combine_end_date_time = $event_date." ".$end_time;
				$end_date_time = new DateTime($combine_end_date_time);
				$event_end_date_time = $end_date_time->format("Y-m-d h:i:s a");

				$current_date_time = date('Y-m-d h:i:s a');

				$combine_start_date_time = $event_date." ".$start_time;
				$start_date_time = new DateTime($combine_start_date_time);
				$event_start_date_time = $start_date_time->format("Y-m-d h:i:s a");

					if($current_date_time <= $event_start_date_time)
				    {	
				    	if($_FILES['image']['name'] || $this->input->post('del_image'))
					    {
					    	if($this->input->post('del_image'))
					    	{
					    		$count_old = count($this->input->post('del_image'));
					    		$old_image = $this->input->post('del_image');
					    		for($i=0;$i<$count_old;$i++)
					    		{
					    			$image = $old_image[$i];
						    		move_uploaded_file($old_image[$i],"img/$image");
						    		$dataInfo[$i] = $image;
					    		}
					    	}
					    	if($_FILES['image']['name'])
					    	{
					    		$files = $_FILES;
					    		$count_new = count($_FILES['image']['name']);
					    	
						    	for($i=$count_old;$i<$count_new;$i++)
						    	{	
						    		$_FILES['image']['name'] = $files['image']['name'][$i];
							        $_FILES['image']['tmp_name'] = $files['image']['tmp_name'][$i];
							        $image = $_FILES['image']['name'];
							    	$temp_name = $_FILES['image']['tmp_name'];
							        move_uploaded_file($temp_name,"img/$image");
							        $dataInfo[$i] = $image;
							    }
							}
							
					    // }
					    // // else
					    // {
					    // 	$images = "";
					    }	
					    $image = array($dataInfo);
						$images = implode(' ',$image[0]);
					    
					    echo "<pre>";
					    print_r($images);
					    exit();
						$this->Create_event_model->update_event($id,$title,$type,$special_instructions,$location,$location_postcode,$age,$event_date,$start_time,$end_time,$images);
						echo "<script>alert('Data Updated.')</script>";
				    }
				    else
				    {
				    	echo "<script>alert('Date or time is not correct, Try Again.')</script>";
				    }
		}
		elseif ($this->input->post('view'))
		{
			redirect("Create/view_event");
		}
	}

	public function delete_event()
	{
		$id = $this->input->get('id');
		$this->Create_event_model->delete_event_by_id($id);
		redirect("Create/view_event");
	}

	public function all_event()
	{
		$result['data'] = $this->Create_event_model->select_event();
		$this->load->view('all_event',$result);
	}

	public function single_event()
	{	
		$id = $this->input->get('id');
		$result['single_data'] = $this->Create_event_model->select_event_details_by_id($id);
		$this->load->view('single_event',$result);		
	} 

	public function profile()
	{
		$email = "abcd@yahoo.com";

		// $result['active_tab'] = 'profile';
		$result['supplier_data'] = $this->Create_event_model->select_profile_of_supplier($email);
		$this->load->view('prof',$result);
	}

	public function save_edit_profile()
	{
		$email = "abcd@yahoo.com";
		$result['supplier_data'] = $this->Create_event_model->select_profile_of_supplier($email);
		$this->load->view('edit_profile',$result);

		if($this->input->post('save_profile'))
		{
			$supplier_edit_data =  array(
				'company_name' => $this->input->post('company_name'),
				'business_name' => $this->input->post('business_name'),
				'vat_number' => $this->input->post('vat_number'),
				'bank_account_number' => $this->input->post('bank_account_number'),
				'contact_name' => $this->input->post('contact_name'),
				'contact_phone' => $this->input->post('contact_phone'),
				'date_of_birth' => $this->input->post('date_of_birth'),
				'gender' => $this->input->post('gender'),
				'services' => $this->input->post('services'),
				'price' => $this->input->post('price'),
				'email' => $this->input->post('email'),
				'postal_address' => $this->input->post('postal_address'),
				'billing_address' => $this->input->post('billing_address'),
				'shipping_address' => $this->input->post('shipping_address'),
				'post_code' => $this->input->post('post_code'),
				'description' => $this->input->post('description')
			);
			$this->Create_event_model->update_profile_of_supplier($supplier_edit_data,$email);
			redirect("Create/profile");
		}
	}

	public function changepass()
	{
		$email = "abcd@yahoo.com";
		$result['supplier_data'] = $this->Create_event_model->select_profile_of_supplier($email);
		$this->load->view('changepassword',$result);

		if($this->input->post('save_password'))
		{
			$pass = array(
				'oldpassword' =>  $this->input->post('password'),
				'newpassword' =>  $this->input->post('newpassword'),
				'cnpassword' =>  $this->input->post('cnpassword')
			);
			$result = $this->Create_event_model->select_password_of_supplier($email);
			$password_from_table = $result[0]->password;
			if($pass['oldpassword'] == $password_from_table)
			{	
				if($pass['newpassword']==$pass['cnpassword'])
				{
					$change_pass = array(
						'password' => $this->input->post('newpassword')
					);

					$this->Create_event_model->update_password_of_supplier($email,$change_pass);
					echo "<script>alert('Password is Updated.')</script>";
					$this->redirect("Create/profile");
				}
				else
				{
					echo "<script>alert('Confirm Password Not Matched.')</script>";
					$this->redirect("Create/profile");
				}	
			}
			else
			{
				echo "<script>window.alert('Current Password Not Matched.')</script>";
				$this->redirect("Create/profile");	
			}			
		}
	}



// FOR USER PROFILE
	public function dashboard()
	{	
		$email = "sourabh@gmail.com";
		$result['user_data'] = $this->Create_event_model->select_profile_of_user($email);
		$this->load->view('dashboard',$result);
	}

	public function dashboard_profile()
	{
		$email = "sourabh@gmail.com";

		$result['user_data'] = $this->Create_event_model->select_profile_of_user($email);
		$this->load->view('profile',$result);

		if($this->input->post('user_edit_save'))
		{
			$user_data = array(
				'name' => $this->input->post('name'),
				'gender' => $this->input->post('gender')
			);
			$this->Create_event_model->update_profile_of_user($user_data,$email);
			redirect("Create/dashbord");
		}
	}

	public function user_edit_profile()
	{
		$email = "sourabh@gmail.com";
		$result['user_data'] = $this->Create_event_model->select_profile_of_user($email);

		$old_image = $result['user_data'][0]->image;

		$this->load->view('edit_profile',$result);

		if($this->input->post('user_save_profile'))
		{
			$name = $this->input->post('name');
			$email_id = $this->input->post('email');
			$dob = $this->input->post('dob');
			$gender = $this->input->post('gender');
			$billing_address = $this->input->post('billing_address');
			$other_address = $this->input->post('other_address');
			$phone = $this->input->post('phone');
			
			if($_FILES['profile_image']['name'])
			{
				$newimage = $_FILES['profile_image']['name'];
				$temp_name = $_FILES['profile_image']['tmp_name'];
				move_uploaded_file($temp_name,"img/$newimage");
				$image = $newimage;
			}
			else
			{
				$image = $old_image;
			}

			$this->Create_event_model->update_profile_of_user($email,$name,$email_id,$dob,$gender,$billing_address,$other_address,$phone,$image);
			redirect("Create/user_edit_profile");
		}
	}

	// public function quick_update_user_profile()
	// {	
	// 	$email = "sourabh@gmail.com";
	// 	$this->Create_event_model->quick_update_profile_of_user($email);
	// 	redirect("Create/dashbord");
	// }

	public function user_changepassword()
	{
		$email = "sourabh@gmail.com";
		$result['user_data'] = $this->Create_event_model->select_profile_of_user($email);
		$this->load->view('changepassword',$result);

		if($this->input->post('user_save_password'))
		{
			$pass = array(
				'oldpassword' =>  $this->input->post('password'),
				'newpassword' =>  $this->input->post('newpassword'),
				'cnpassword' =>  $this->input->post('cnpassword')
			);
			$result = $this->Create_event_model->select_password_of_user($email);
			$password_from_table = $result[0]->password;
			if($pass['oldpassword'] == $password_from_table)
			{	
				if($pass['newpassword']==$pass['cnpassword'])
				{
					$change_user_password = array(
						'password' => $this->input->post('newpassword')
					);

					$this->Create_event_model->update_password_of_user($email,$change_user_password);
					echo "<script>alert('Password is Updated.')</script>";
					redirect("Create/user_changepassword");
				}
				else
				{
					echo "<script>alert('Confirm Password Not Matched.')</script>";
					redirect("Create/user_changepassword");
				}	
			}
			else
			{
				echo "<script>window.alert('Current Password Not Matched.')</script>";
				redirect("Create/user_changepassword");	
			}			
		}
	}

	public function delete_user_account()
	{
		$email = "sourabh@gmail.com";
		$this->Create_event_model->delete_user_account($email);
		redirect("Create/logout");
	}

	//FOR PRODUCTS PAGE
	public function add_product()
	{
		
		if($this->input->post('addproduct'))
		{
			//Set Default Time Zone
			date_default_timezone_set("Asia/Calcutta");
			$user_id=53;
			$product_name = $this->input->post('product_name');
			$type = $this->input->post('type');
			$category= $this->input->post('category');
			$price = $this->input->post('price');
			$description = $this->input->post('description');
			$date = date('Y-m-d H:i:s A');
			$dataInfo = array();
			$files = $_FILES;
			$count = count($_FILES['image']['name']);
		    for($i=0; $i<$count; $i++)
		    {
			    $_FILES['image']['name'] = $files['image']['name'][$i];
			    $_FILES['image']['tmp_name'] = $files['image']['tmp_name'][$i];
			    $image = $_FILES['image']['name'];
			  	$temp_name = $_FILES['image']['tmp_name'];
			    move_uploaded_file($temp_name,"img/$image");
			    $dataInfo[$i] = $image; 
			}
			$image = array($dataInfo);
			$images = implode(' ',$image[0]);

			
			$this->Create_event_model->add_product($product_name,$type,$category,$price,$description,$images,$date,$user_id);
			echo "<script>alert('Data insert.')</script>";
			redirect("Create/view_product");
		}
	}



	public function view_product()
	{
		$id = "17";
		$result['your_product'] = $this->Create_event_model->select_product_by_id($id);
		$result['category'] = $this->Create_event_model->select_product_category();
		
		$this->load->view('view_product',$result);
	} 

	public function edit_product()
	{
		$id = $this->input->get('id');
		$result['product_edit'] = $this->Create_event_model->select_product_by_id($id);
		$result['category'] = $this->Create_event_model->select_product_category();
		$this->load->view('edit_product',$result);

		if($this->input->post('update_product'))
		{
				//Set Default Time Zone
				date_default_timezone_set("Asia/Calcutta");
				
				$product_name_edit = $this->input->post('product_name');
				$product_name = htmlspecialchars($product_name_edit, ENT_QUOTES);
				$type = $this->input->post('type');
				$category = $this->input->post('category');
				
				$price = $this->input->post('price');
				$description = $this->input->post('description');
				
				$date = date('Y-m-d H:i:s A');

				if($_FILES['image']['name'] || $this->input->post('del_pro_image'))
				{
					$dataInfo = array();
					$files = $_FILES;
					$count_old = count($this->input->post('del_pro_image'));
					$count_new = count($_FILES['image']['name']);
			
				  	if($this->input->post('del_pro_image'))
				  	{
				  		
				  		$old_image = $this->input->post('del_pro_image');
				  		
				  		for($i=0;$i<$count_old;$i++)
				  		{	
				  			$image = $old_image[$i];
					   		move_uploaded_file($old_image[$i],"img/$image");
					   		$dataInfo[$i] = $image;
						}

				  	}
				   	if($_FILES['image']['name'])
				   	{
				   		
				   		for($i=$count_old;$i<$count_new;$i++)
				    	{	
				    		$_FILES['image']['name'] = $files['image']['name'][$i];
					        $_FILES['image']['tmp_name'] = $files['image']['tmp_name'][$i];
					        $image = $_FILES['image']['name'];
					    	$temp_name = $_FILES['image']['tmp_name'];
					        move_uploaded_file($temp_name,"img/$image");
					        $dataInfo[$i] = $image;
					    }
					}
				}	
				$image = array($dataInfo);
				$images = implode(' ',$image[0]);


				$this->Create_event_model->update_product($id,$product_name,$type,$category,$price,$description,$images,$date);
				echo "<script>alert('Data Updated.')</script>";
		}
	}

	public function delete_product()
	{
		$id = $this->input->get('id');
		$this->Create_event_model->delete_product_by_id($id);
		redirect("Create/view_product");
	}

	//FOR SERVICES PAGES
	public function view_services()
	{	
		$user_id = "53";
		$result['your_services'] = $this->Create_event_model->select_services_by_user_id($user_id);
		
		$this->load->view('view_services',$result);
	}

	public function add_service()
	{
		if($this->input->post('addservice'))
		{	
			//Set Default Time Zone
			date_default_timezone_set("Asia/Calcutta");
			$user_id=53;
			$service_name = $this->input->post('service_name');
			$service = $this->input->post('service');
			$price = $this->input->post('price');
			$description = $this->input->post('description');
			
			$date = date('Y-m-d H:i:s A');

			$dataInfo = array();
			$files = $_FILES;
			$count = count($_FILES['image']['name']);
		    for($i=0; $i<$count; $i++)
		    {
			    $_FILES['image']['name'] = $files['image']['name'][$i];
			    $_FILES['image']['tmp_name'] = $files['image']['tmp_name'][$i];
			    $image = $_FILES['image']['name'];
			  	$temp_name = $_FILES['image']['tmp_name'];
			    move_uploaded_file($temp_name,"img/$image");
			    $dataInfo[$i] = $image; 
			}
			$image = array($dataInfo);
			$images = implode(' ',$image[0]);

			
			$this->Create_event_model->add_service($service_name,$service,$description,$price,$date,$images,$user_id);
			echo "<script>alert('Data insert.')</script>";
			redirect("Create/view_services");
		}
	}

	public function edit_service()
	{
		$id = $this->input->get('id');
		$result['service_edit'] = $this->Create_event_model->select_services_by_id($id);
		
		$this->load->view('edit_service',$result);

		if($this->input->post('update_service'))
		{
				//Set Default Time Zone
				date_default_timezone_set("Asia/Calcutta");
				
				$service_name = $this->input->post('service_name');
				$service = $this->input->post('service');
				$price = $this->input->post('price');
				$description = $this->input->post('description');
				
				$date = date('Y-m-d H:i:s A');

				if($_FILES['image']['name'] || $this->input->post('del_image'))
				{
				  	if($this->input->post('del_image'))
				   	{
				   		$count_old = count($this->input->post('del_image'));
				   		$old_image = $this->input->post('del_image');
				   		for($i=0;$i<$count_old;$i++)
				   		{	
				   			$image = $old_image[$i];
				    		move_uploaded_file($old_image[$i],"img/$image");
				    		$dataInfo[$i] = $image;
				   		}
				   	}
				   	if($_FILES['image']['name'])
				   	{
				   		$files = $_FILES;
				   		$count_new = count($_FILES['image']['name']);
				   	
				    	for($i=$count_old;$i<$count_new;$i++)
				    	{	
				    		$_FILES['image']['name'] = $files['image']['name'][$i];
					        $_FILES['image']['tmp_name'] = $files['image']['tmp_name'][$i];
					        $image = $_FILES['image']['name'];
					    	$temp_name = $_FILES['image']['tmp_name'];
					        move_uploaded_file($temp_name,"img/$image");
					        $dataInfo[$i] = $image;
					    }
					}
				}	
				$image = array($dataInfo);
				$images = implode(' ',$image[0]);
				echo "<pre>";
				print_r($images);


				$this->Create_event_model->update_service($id,$service_name,$service,$description,$price,$date,$images);
				echo "<script>alert('Data Updated.')</script>";
				redirect("Create/view_services");
		}
	}

	public function delete_service()
	{
		$id = $this->input->get('id');
		$this->Create_event_model->delete_service_by_id($id);
		redirect("Create/view_services");
	}
}
?>