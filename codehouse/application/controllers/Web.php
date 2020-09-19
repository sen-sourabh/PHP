<?php
Class Web extends CI_Controller
{
	// public function __construct()
	// {
	// 	parent::__construct();


	// 	$this->load->helper('url');

	// 	$this->load->library('session');
		
	// 	$this->load->model('Web_model');


	// 	$this->load->database();
	// }

	public function index()
	{
		$this->load->view('index');

		if($this->input->post('contact'))
		{
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$subject = $this->input->post('subject');
			$message = $this->input->post('message');

			$this->Web_model->contactdata($username,$email,$subject,$message);
			$this->session->set_flashdata('Contact_send','Your Message is Send');
			return redirect("Web/index");
			// echo "<script>alert('Message send successfully.')</script>";
			
			// //Load email library 
			// $this->load->library('email');
			// $to_email = "sourabhsen201313@gmail.com"; 
		   
		 //    $this->email->from($email,$username); 
		 //    $this->email->to($to_email);
		 //    $this->email->subject($subject); 
		 //    $this->email->message($message); 
		    
		 //    //Send mail 
		 //    if($this->email->send())
		 //    {
		 //    	echo "<script>alert('Message send successfully.')</script>";	
		 //    }
			
		}
	}

	public function about()
	{
		$this->load->view('about');
	}

	public function service()
	{
		$this->load->view('service');
	}

	function paymentpage(){ 
        if(!$this->session->userdata('email'))
		{
			redirect("Web/index");
		}
		else
		{
			$data = array();
			if(!empty($_GET['msg'])){
				$data['msg'] = $_GET['msg'];
			}
	         
	        
	        // // Get products data from the database 
	        // $data['products'] = $this->product->getRows(); 
	         
	        // // Pass products data to the list view 
	        $this->load->view('payment', $data);
	    } 
    } 


	function purchase($id){ 
        $data = array(); 
         
        // Get product data from the database 
        // $product = $this->product->getRows($id); 
         
        // If payment form is submitted with token 
        if($this->input->post('stripeToken')){ 
            // Retrieve stripe token, card and user info from the submitted form data 
            $postData = $this->input->post(); 
            // $postData['product'] = $product; 
             
            // Make payment 
            $paymentID = $this->payment($postData); 
             
            // If payment successful 
            if($paymentID){ 
                redirect('paymentpage?msg='.$paymentID); 
            }else{ 
                $apiError = !empty($this->stripe_lib->api_error)?' ('.$this->stripe_lib->api_error.')':''; 
                $data['error_msg'] = 'Transaction has been failed!'.$apiError; 
            } 
        } 
         
        // Pass product data to the details view 
        $data['product'] = "hello"; 
        $this->load->view('products/details', $data); 
    } 
     
    function payment($postData){ 
         
        // If post data is not empty 
        if(!empty($postData)){ 
            // Retrieve stripe token, card and user info from the submitted form data 
            $token  = $postData['stripeToken']; 
            $name = $postData['name']; 
            $email = $this->session->userdata('email')[0]->email; 
            $card_number = $postData['card_number']; 
            $card_number = preg_replace('/\s+/', '', $card_number); 
            $card_exp_month = $postData['card_exp_month']; 
            $card_exp_year = $postData['card_exp_year']; 
            $card_cvc = $postData['card_cvc']; 
             
            // Unique order ID 
            $orderID = strtoupper(str_replace('.','',uniqid('', true))); 
             
            // Add customer to stripe 
            $customer = $this->stripe_lib->addCustomer($email, $token); 
             
            if($customer){ 
                // Charge a credit or a debit card 
                $charge = $this->stripe_lib->createCharge($customer->id = $this->session->userdata('email')[0]->id, $postData['product']['name'], $postData['product']['price'] = 10, $orderID); 
                 
                if($charge){ 
                    // Check whether the charge is successful 
                    if($charge['amount_refunded'] == 0 && empty($charge['failure_code']) && $charge['paid'] == 1 && $charge['captured'] == 1){ 
                        // Transaction details  
                        $transactionID = $charge['balance_transaction']; 
                        $paidAmount = $charge['amount']; 
                        $paidAmount = ($paidAmount/100); 
                        $paidCurrency = $charge['currency']; 
                        $payment_status = $charge['status']; 
                         
                         
                        // Insert tansaction data into the database 
                        $orderData = array( 
                            'user_id' => $this->session->userdata('email')[0]->id, 
                            'buyer_name' => $name, 
                            'buyer_email' => $email, 
                            'card_number' => $card_number, 
                            'card_exp_month' => $card_exp_month, 
                            'card_exp_year' => $card_exp_year, 
                            'paid_amount' => $paidAmount, 
                            'paid_amount_currency' => $paidCurrency, 
                            'txn_id' => $transactionID, 
                            'payment_status' => $payment_status 
                        ); 
                        $orderID = $this->product->insertOrder('order_table',$orderData); 
                         
                        // If the order is successful 
                        if($payment_status == 'succeeded'){ 
                            return $orderID; 
                        } 
                    } 
                } 
            } 
        } 
        return false; 
    } 
     
    function payment_status($id){ 
        $data = array(); 
         
        // Get order data from the database 
        $order = $this->product->getOrder($id); 
         
        // Pass order data to the view 
        $data['order'] = $order; 
        $this->load->view('products/payment-status', $data); 
    } 









	public function rooms()
	{	
		// $query = $this->input->post('search');

		$this->load->library('pagination');

		$config = [
			'base_url' => base_url('index.php/Web/rooms/'),
			'per_page' => 2,
			'total_rows' => $this->Web_model->num_row(),
			'full_tag_open' => "<ul class='pagination'>",
			'full_tag_close' => "</ul>",
			'next_tag_open' => "<li>",
			'next_tag_close' => "Next</li>",
			'prev_tag_open' => "<li>Prev",
			'prev_tag_close' => "</li>",
			'num_tag_open' => "<li>",
			'num_tag_close' => "</li>",
			'first_tag_open' => "<li>",
			'first_tag_close' => "</li>",
			'cur_tag_open' => "<li class='active'><a>",
			'cur_tag_close' => "</a></li>"
		];

		$this->pagination->initialize($config);

		$articles = $this->Web_model->articleList($config['per_page'],$this->uri->segment(3));
		$this->load->view('rooms',['articles'=>$articles]);
	}

	public function register()
	{
		if($this->session->userdata('email'))
		{
			redirect("Web/index");
		}
		else
		{
			$this->load->view('registration');

			if($this->input->post('registered'))
			{
				$username = $this->input->post('username');
				$email = $this->input->post('email');
				// $password = md5($this->input->post('password'));//For encrypted password use this
				$password = $this->input->post('password');
				$cpassword = $this->input->post('confirm_password');
				$phone = $this->input->post('phone');
				$country = $this->input->post('country');
				$state = $this->input->post('state');
				$city = $this->input->post('city');

				$result = $this->Web_model->email_is_unique($email);
				if($result)
				{
					// echo "<script>alert('Email is already is used, try with diffrent email.')</script>";
					$this->session->set_flashdata('Email_exist','Email is already used, Try with different Email.');
					return redirect("Web/register");
				}
				else
				{
					if($password==$cpassword)
					{
						$this->Web_model->user_register($username,$email,$password,$phone,$country,$state,$city);
						$this->session->set_flashdata('Register','Your Registration Successful.');
						return redirect("Web/register");
					}
					else
					{
						$this->session->set_flashdata('Confirm_password','Confirm Password Not Matched.');
						return redirect("Web/register");
						// echo "<script>alert('Password Not Matched.')</script>";
					}
				}
			}
		}
	}

	public function loggedin()
	{
		if($this->session->userdata('email'))
		{
			redirect("Web/index");
		}
		else
		{
			$this->load->view('login');

			if($this->input->post('login'))
			{
				$email = $this->input->post('email');
				$password = $this->input->post('password');

				$result = $this->Web_model->verify($email,$password);
				// echo "<pre>";
				// print_r($result[0]->email);
				// exit;

				if($result)
				{
					// echo "<pre>";
					// print_r($result['user']);
					// exit();
					// session_start();
					$this->session->set_userdata('email',$result);
					redirect('Web/index');
				}
				else
				{
					$this->session->set_flashdata('Login_Failed','Invalid Email or Password');
					return redirect("Web/loggedin");
					//echo "<script>alert('Invalid email or password, Try again.')</script>";
				}
			}
		}
	}

	public function logout()
	{
		$this->session->flashdata('Logout','Logout Successful.');
		//Session_Destroy
		$this->session->userdata('email');
		$this->session->unset_userdata('email');
		return redirect('Web/loggedin');
	}

	public function contact()
	{
		$this->load->view('contact');

		if($this->input->post('contact'))
		{
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$subject = $this->input->post('subject');
			$message = $this->input->post('message');

			$this->Web_model->contactdata($username,$email,$subject,$message);
			$this->session->set_flashdata('Contact_send','Your Message is Send');
			return redirect("Web/contact");
			// echo "<script>alert('Message send successfully.')</script>";
			
			// //Load email library 
			// $this->load->library('email');
			// $to_email = "sourabhsen201313@gmail.com"; 
		   
		 //    $this->email->from($email,$username); 
		 //    $this->email->to($to_email);
		 //    $this->email->subject($subject); 
		 //    $this->email->message($message); 
		    
		 //    //Send mail 
		 //    if($this->email->send())
		 //    {
		 //    	echo "<script>alert('Message send successfully.')</script>";	
		 //    }
			
		}
	}

	public function housedata()
	{	
		if($this->session->userdata('email'))
		{
			$this->load->view('uploadhousedetails');
			if($this->input->post('upload'))
			{
				$email = $this->input->post('email');
				$type = $this->input->post('type');
				
				$image = $_FILES['image']['name'];
				$temp_name = $_FILES['image']['tmp_name'];
				move_uploaded_file($temp_name,"assets/img/$image");
				
				$infrastructure = $this->input->post('infrastructure');
				$toilet = $this->input->post('toilet');
				$description = $this->input->post('description');
				$address = $this->input->post('address');
				$price = $this->input->post('price');
				$contact = $this->input->post('contact');

				$this->Web_model->upload_user_data($email,$type,$image,$infrastructure,$toilet,$description,$address,$price,$contact);
				$this->session->set_flashdata('House_data','Your Data is Upload Successfully.');
				return redirect("Web/housedata");
				// echo "<script>alert('Data Upload Successfully.')</script>";
			}
		}
		else
		{	
			$this->session->set_flashdata('Logout','First, Login Again.');
			return redirect('Web/loggedin');
		}
	}

	public function changepassword()
	{	
		if($this->session->userdata('email'))
		{
			$this->load->view('changepassword');
			if($this->input->post('changepass'))
			{
				$email = $this->session->userdata('email');
				$oldpass = $this->input->post('oldpass');
				$newpass = $this->input->post('newpass');
				$cnewpass = $this->input->post('cnewpass');

				$result = $this->Web_model->verify_password($email,$oldpass);
				// echo "<pre>";
				// print_r($result);
				// exit;

				if($result)
				{
					if($newpass==$cnewpass)
					{
						$this->Web_model->update_password($newpass,$email);
						$this->session->set_flashdata('Change','Your Password is Updated.');
						return redirect("Web/changepassword");
						// echo "<script>alert('Your Password Updated.')</script>";
					}
					else
					{
						$this->session->set_flashdata('Not_match','Your Confirm Password is Not Matched.');
						return redirect("Web/changepassword");
						// echo "<script>alert('Password Not Matched.')</script>";
					}
				}
				else
				{
					$this->session->set_flashdata('Not_match_old','Your Old Password is Not Matched.');
					return redirect("Web/changepassword");
					// echo "<script>alert('Your password is wrong.')</script>";
				}
			}
		}
		else
		{
			$this->session->set_flashdata('Logout','First, Login Again.');
			return redirect('Web/loggedin');
		}
	}

	function your_upload()
	{
		if($this->session->userdata('email'))
		{	
			$email = $this->session->userdata('email');
			$query = $this->input->post('searchboxuserdata');

			$this->load->library('pagination');

			$config = [
				'base_url' => base_url('index.php/Web/your_upload'),
				'per_page' => 2,
				'total_rows' => $this->Web_model->num_row_byemail($email,$query),
				'full_tag_open' => "<ul class='pagination'>",
				'full_tag_close' => "</ul>",
				'next_tag_open' => "<li>",
				'next_tag_close' => "</li>",
				'prev_tag_open' => "<li>",
				'prev_tag_close' => "</li>",
				'num_tag_open' => "<li>",
				'num_tag_close' => "</li>",
				'first_tag_open' => "<li>",
				'first_tag_close' => "</li>",
				'cur_tag_open' => "<li class='active'><a>",
				'cur_tag_close' => "</a></li>"
			];

			$this->pagination->initialize($config);

			$articles = $this->Web_model->selectuseruploadbyemail($email,$query,$config['per_page'],$this->uri->segment(3));
			$this->load->view('your_upload',['articles'=>$articles]);

			// $result['databyuseremail'] = $this->Web_model->selectuseruploadbyemail($email,$query);
			// $this->load->view('your_upload',$result);
		}
		else
		{
			$this->session->set_flashdata('Logout','First, Login Again.');
			return redirect('Web/loggedin');
		}
	}

	public function all_details_without_login()
	{
		$id = $this->input->get('id');
		$result['details'] = $this->Web_model->selectrecordbyid($id);
		$this->load->view('all_details',$result);
	}

	public function deletepost()
	{
		if($this->session->userdata('email'))
		{
			$id = $this->input->get('id');
			$this->Web_model->deletepostbyid($id);
			redirect("Web/your_upload");
		}
		else
		{
			$this->session->set_flashdata('Logout','First, Login Again.');
			return redirect('Web/loggedin');
		}
	}

	public function edit_post()
	{	
		if($this->session->userdata('email'))
		{
			$id = $this->input->get('id');
			$result['post_data'] = $this->Web_model->selectpostdatabyid($id);
			$this->load->view('edit_post',$result);	

			if($this->input->post('update_upload'))
			{
				//print_r($result['post_data'][0]->image);
			
				$old_image = $result['post_data'][0]->image;

					$type = $this->input->post('type');
					
					if($_FILES['newimage']['name'])
					{
						$newimage = $_FILES['newimage']['name'];
						$temp_name = $_FILES['newimage']['tmp_name'];
						move_uploaded_file($temp_name,"assets/img/$newimage");
						$image = $newimage;
					}
					else
					{
						$image = $old_image;
					}

					$infrastructure = $this->input->post('infrastructure');
					$toilet = $this->input->post('toilet');
					$description = $this->input->post('description');
					$address = $this->input->post('address');
					$price = $this->input->post('price');
					$contact = $this->input->post('contact');

					$this->Web_model->update_upload_user_data($id,$type,$image,$infrastructure,$toilet,$description,$address,$price,$contact);
					$this->session->flashdata('Update_data','Your Data is Updated.');
					return redirect("Web/edit_post?id=$id");
			}
		}
		else
		{
			$this->session->set_flashdata('Logout','First, Login Again.');
			return redirect('Web/loggedin');
		}
	}

}
?>