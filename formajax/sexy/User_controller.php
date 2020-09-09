<?php 
Class Admin extends CI_Controller
{

	function checklogin(){
	    if(empty($this->session->userdata('adminuser'))){
	            redirect('index');
	    }
	}


	function index()
	{
		if($this->session->userdata('adminuser'))
		{
			redirect("dashboard");
		}
		else
		{
			$this->load->view('index');
			if($this->input->post('login'))
			{
				$email=$this->input->post('email');
				$password=$this->input->post('password');

				$login_data = $this->Admin_model->logindata($email,$password);
				if($login_data)
				{	

					$this->session->set_userdata('adminuser',$login_data);
					redirect("dashboard");
				}
				else
				{	
					$this->session->set_flashdata('error','Invalid email or password, Try again.');
					return redirect("index");
				}
			}
		}
	}
	
	function logout()
	{
		$this->session->unset_userdata('adminuser');
		redirect("index");
	}

	function dashboard()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;
		$this->load->view('dashboard');
	}


	function change_password()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;
		$this->load->view('change_password');
		if($this->input->post('change'))
		{	
			$email = $this->session->userdata('adminuser')[0]->email;
			$current_password=$this->input->post('current_password');
			$new_password=$this->input->post('new_password');
			$confirm_password=$this->input->post('confirm_password');

			if(empty($current_password))
			{
				$this->session->set_flashdata('cur_pass','Current Password is Required.');
			}
			else if(empty($new_password))
			{
				$this->session->set_flashdata('new_pass','New Password is Required.');	
			}
			else if(empty($confirm_password))
			{
				$this->session->set_flashdata('cnew_pass','Confirm Password is Required.');
			}
			else
			{
				$result = $this->Admin_model->select_admin_password($email, $current_password);

				if($result)
				{
					if($new_password==$confirm_password)
					{	
						
						$this->Admin_model->update_admin_change_password($new_password,$id);
						$this->session->set_flashdata('success','Password Change Successfully.');
					}	
					else
					{
						$this->session->set_flashdata('Confirm_error','Confirm Password Not Matched.');
					}	
				}
				else
				{
					$this->session->set_flashdata('error','Current Password Not Matched.');
				}
			}
			return redirect("change_password");
		}
	}


//WORKING ON TRAVELERS
	function travelers()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;

		//Bulk option delete
		if($this->input->post('delete_top'))
		{	
			$data = $this->input->post('delete_from_top');

			if($data == isset($_POST['delete_from_top']))
			{
				if($this->input->post('user_id'))
				{	
					foreach($this->input->post('user_id') as $user_id)
					{
						$this->Admin_model->delete_user('registration',$user_id);
					}
				}
			}
			redirect("travelers");
		}
		else if($this->input->post('delete_bottom'))
		{	
			$data = $this->input->post('delete_from_bottom');
					
			if($data == isset($_POST['delete_from_bottom']))
			{
				if($this->input->post('user_id'))
				{					
					foreach($this->input->post('user_id') as $user_id)
					{
						$this->Admin_model->delete_user('registration',$user_id);
					}
				}
			}
			redirect("travelers");
		}
		else
		{
			$result['traveler_data'] = $this->Admin_model->getAllDetail('registration');
			$this->load->view('all_travelers',$result);
		}
	}

	function traveler_details()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;	
		$traveler_id = $this->input->get('id');
		$result['traveler_data_by_id'] = $this->Admin_model->getUserById('registration',$traveler_id);
		$this->load->view('traveler_detail',$result);
	}

//WORKING ON TRAVELERS AND DESIGNERS
	function traveler_designer()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;
		//Bulk option delete
		if($this->input->post('delete_top'))
		{	
			$data = $this->input->post('delete_from_top');

			if($data == 'delete_top')
			{
				if($this->input->post('user_id'))
				{	
					foreach($this->input->post('user_id') as $user_id)
					{
						$this->Admin_model->delete_user('travel_expert',$user_id);
					}
				}
			}
			else if($data == 'update_status')
			{
				if($this->input->post('user_id'))
				{	
					foreach($this->input->post('user_id') as $user_id)
					{
						$this->Admin_model->update_status('travel_expert',$user_id);
					}
				}
			}
			redirect("traveler_designer");
		}
		else if($this->input->post('delete_bottom'))
		{	
			$data = $this->input->post('delete_from_bottom');
					
			if($data == 'delete_bottom')
			{
				if($this->input->post('user_id'))
				{					
					foreach($this->input->post('user_id') as $user_id)
					{
						$this->Admin_model->delete_user('travel_expert',$user_id);
					}
				}
			}
			else if($data == 'update_status')
			{
				if($this->input->post('user_id'))
				{	
					foreach($this->input->post('user_id') as $user_id)
					{
						$this->Admin_model->update_status('travel_expert',$user_id);
					}
				}
			}
			redirect("traveler_designer");
		}
		else
		{
			$result['traveler_designer_data'] = $this->Admin_model->getAllDesignerExpertDetail();
			$this->load->view('all_traveler_designers',$result);
		}
	}

	function traveler_designer_details()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;	
		$traveler_id = $this->input->get('id');
		$result['traveler_designer_data_by_id'] = $this->Admin_model->getUserById('travel_expert',$traveler_id);
		$this->load->view('traveler_designer_detail',$result);
	}

	function traveler_designer_reviews()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;
		$traveler_id = $this->input->get('id');
		$result['id'] = $traveler_id;
		$result['traveler_designer_review_data_by_id'] = $this->Admin_model->get_All_review($traveler_id);
		$this->load->view('traveler_designer_review',$result);
	}

	function traveler_designer_review_details()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;	
		$user_id = $this->input->get('id');
		$review_id = $this->input->get('review_id');
		$result['id'] = $user_id;
		$result['traveler_designer_review_data_by_id'] = $this->Admin_model->getUserById('review',$review_id);
		$this->load->view('traveler_designer_review_detail',$result);
	}

	function activedesigner_review()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;
		$user_id = $this->input->get('id');
		$review_id = $this->input->get('review_id');
		$data = array('re_status' => 1);
		$this->Admin_model->change_status('review',$review_id,$data);
		redirect("traveler_designer_reviews?id=$user_id");
	}

	function blockeddesigner_review()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;
		$user_id = $this->input->get('id');
		$review_id = $this->input->get('review_id');
		$data = array('re_status' => 0);
		$this->Admin_model->change_status('review',$review_id,$data);
		redirect("traveler_designer_reviews?id=$user_id");
	}

	function active_traveler_designer()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;
		$user_id = $this->input->get('id');
		$data = array('expert_status' => 0);
		$this->Admin_model->change_status('travel_expert',$user_id,$data);
		redirect("traveler_designer");
	}

	function blocked_traveler_designer()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;
		$user_id = $this->input->get('id');
		$data = array('expert_status' => 1);
		$this->Admin_model->change_status('travel_expert',$user_id,$data);
		redirect("traveler_designer");
	}

//WORKING ON PARTNERS AND SUPPLIERS
	function partner_supplier()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;
		//Bulk option delete
		if($this->input->post('delete_top'))
		{	
			$data = $this->input->post('delete_from_top');

			if($data == 'delete_top')
			{
				if($this->input->post('user_id'))
				{	
					foreach($this->input->post('user_id') as $user_id)
					{
						$this->Admin_model->delete_user('travel_expert',$user_id);
					}
				}
			}
			else if($data == 'update_status')
			{
				if($this->input->post('user_id'))
				{	
					foreach($this->input->post('user_id') as $user_id)
					{
						$this->Admin_model->update_status('travel_expert',$user_id);
					}
				}
			}
			redirect("partner_supplier");
		}
		else if($this->input->post('delete_bottom'))
		{	
			$data = $this->input->post('delete_from_bottom');
					
			if($data == 'delete_bottom')
			{
				if($this->input->post('user_id'))
				{					
					foreach($this->input->post('user_id') as $user_id)
					{
						$this->Admin_model->delete_user('travel_expert',$user_id);
					}
				}
			}
			else if($data == 'update_status')
			{
				if($this->input->post('user_id'))
				{	
					foreach($this->input->post('user_id') as $user_id)
					{
						$this->Admin_model->update_status('travel_expert',$user_id);
					}
				}
			}
			redirect("partner_supplier");
		}
		else
		{
			$result['partner_supplier_data'] = $this->Admin_model->getAllPartnerExpertDetail();
			$this->load->view('all_partner_supplier',$result);
		}
	}

	function partner_supplier_details()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;	
		$traveler_id = $this->input->get('id');
		$result['partner_supplier_data_by_id'] = $this->Admin_model->getUserById('travel_expert',$traveler_id);
		$this->load->view('partner_supplier_detail',$result);
	}

	function partner_supplier_reviews()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;
		$traveler_id = $this->input->get('id');
		$result['id'] = $traveler_id;
		$result['partner_supplier_review_data_by_id'] = $this->Admin_model->get_All_review($traveler_id);
		$this->load->view('partner_supplier_review',$result);
	}

	function partner_supplier_review_details()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;	
		$user_id = $this->input->get('id');
		$review_id = $this->input->get('review_id');
		$result['id'] = $user_id;
		$result['partner_supplier_review_data_by_id'] = $this->Admin_model->getUserById('review',$review_id);
		$this->load->view('partner_supplier_review_detail',$result);
	}

	function activepartner_review()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;
		$user_id = $this->input->get('id');
		$review_id = $this->input->get('review_id');
		$data = array('re_status' => 1);
		$this->Admin_model->change_status('review',$review_id,$data);
		redirect("partner_supplier_reviews?id=$user_id");
	}

	function blockedpartner_review()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;
		$user_id = $this->input->get('id');
		$review_id = $this->input->get('review_id');
		$data = array('re_status' => 0);
		$this->Admin_model->change_status('review',$review_id,$data);
		redirect("partner_supplier_reviews?id=$user_id");
	}

	function add_partner_supplier()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;
		$result['all_area'] = $this->Admin_model->getAllAreas();
		$result['all_categories'] = $this->Admin_model->getAllDetail('traver_categories');
		

		if($this->input->post('addpartner'))
		{
			if($_FILES['expert_image']['name'])
			{
				$image = preg_replace('/\s+/', '',$_FILES['expert_image']['name']);
				$temp_name = preg_replace('/\s+/', '',$_FILES['expert_image']['tmp_name']);
				move_uploaded_file($temp_name,"image/$image");	
			}
			$data = array(
				'expert_image' => $image,
				'expert_name' => strip_tags($this->input->post('expert_name')),
				'expert_email' => strip_tags($this->input->post('expert_email')),
				'expert_type' => strtolower(strip_tags($this->input->post('expert_type'))),
				'expert_password' => strip_tags($this->input->post('expert_password')),
				'expert_post' => $this->input->post('expert_post'),
				'expert_experince_type' => strtolower(strip_tags($this->input->post('expert_exp_type'))),
				'expert_expertise' => strip_tags($this->input->post('expert_expertise')),
				'expert_area' => strip_tags($this->input->post('expert_area')),
				'expert_contact' => strip_tags($this->input->post('expert_contact')),
				'expert_discribtion' => strip_tags($this->input->post('expert_desc')),
				'expert_address' => strip_tags($this->input->post('expert_address')),
				'expert_address2' => strip_tags($this->input->post('expert_address2')),
				'expert_country' => strip_tags($this->input->post('expert_country')),
				'expert_state' => strip_tags($this->input->post('expert_state')),
				'expert_city' => strip_tags($this->input->post('expert_city')),
				'expert_postal_code' => strip_tags($this->input->post('expert_postal_code')),
				'expert_payment_option' => strip_tags($this->input->post('expert_payment_option')),
				'expert_timing' => strip_tags($this->input->post('expert_timing')),
				'expert_email_verification' => 0,
				'expert_website' => strip_tags($this->input->post('expert_website')),
				'expert_company' => strip_tags($this->input->post('expert_company')),
				'expert_payment_type' => strip_tags($this->input->post('expert_payment_type')),
				'expert_company_year' => strip_tags($this->input->post('expert_company_year')),
				'expert_facebook' => strip_tags($this->input->post('expert_facebook')),
				'expert_twitter' => strip_tags($this->input->post('expert_twitter')),
				'expert_linkdin' => strip_tags($this->input->post('expert_linkedin')),
				'expert_best_place' => strip_tags($this->input->post('expert_best_place')),
				'oldder_travel_moment' => strip_tags($this->input->post('expert_travel_moment')),
				'expert_suitcase' => strip_tags($this->input->post('expert_suitcase')),
				'expert_award' => strip_tags($this->input->post('expert_award')),
				'expert_status' => 0
			);
			// echo "<pre>";
			// print_r($data);
			// exit();
			$id = $this->Admin_model->insert_data('travel_expert',$data);
			if($id){
				$result['error'] = "<div style='font-size:1vw;font-weight:bold;color:green;'>Details Submitted.</div>";
			}else{
				$result['error'] = "<div style='font-size:1vw;font-weight:bold;color:red;'>Something went wrong, Please try again.</div>";
			}
		}
		$this->load->view('add_partner_supplier',$result);
	}

	function active_partner_supplier()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;
		$user_id = $this->input->get('id');
		$data = array('expert_status' => 0);
		$this->Admin_model->change_status('travel_expert',$user_id,$data);
		redirect("partner_supplier");
	}

	function blocked_partner_supplier()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;
		$user_id = $this->input->get('id');
		$data = array('expert_status' => 1);
		$this->Admin_model->change_status('travel_expert',$user_id,$data);
		redirect("partner_supplier");
	}

//WORKING ON ONLINE TRAVEL QUERIES
	function travel_queries()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;
		//Bulk option delete
		if($this->input->post('delete_top'))
		{	
			$data = $this->input->post('delete_from_top');
			if($data == 'delete_top')
			{
				if($this->input->post('user_id'))
				{	
					foreach($this->input->post('user_id') as $user_id)
					{
						$this->Admin_model->delete_user('online_enquiry',$user_id);
					}
				}
			}
			redirect("travel_queries");
		}
		else if($this->input->post('delete_bottom'))
		{	
			$data = $this->input->post('delete_from_bottom');
			if($data == 'delete_bottom')
			{
				if($this->input->post('user_id'))
				{					
					foreach($this->input->post('user_id') as $user_id)
					{
						$this->Admin_model->delete_user('online_enquiry',$user_id);
					}
				}
			}
			redirect("travel_queries");
		}
		else
		{
			$result['travel_queries'] = $this->Admin_model->getAllEnquiryDetail();
			$this->load->view('all_travel_queries',$result);
		}
	}

	function travel_queries_details()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;	
		$enquiry_id = $this->input->get('id');
		$result['travel_queries_data_by_id'] = $this->Admin_model->getUserById('online_enquiry',$enquiry_id);
		$this->load->view('travel_queries_detail',$result);
	}

	function members_category()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;
		//Bulk option delete
		if($this->input->post('delete_top'))
		{	
			$data = $this->input->post('delete_from_top');

			if($data == 'delete_top')
			{
				if($this->input->post('cat_id'))
				{	
					foreach($this->input->post('cat_id') as $cat_id)
					{
						$this->Admin_model->delete_user('traver_categories',$cat_id);
					}
				}
			}
			else if($data == 'update_status')
			{
				if($this->input->post('cat_id'))
				{	
					foreach($this->input->post('cat_id') as $cat_id)
					{
						$this->Admin_model->update_status('traver_categories',$cat_id);
					}
				}
			}
			redirect("members_category");
		}
		else if($this->input->post('delete_bottom'))
		{	
			$data = $this->input->post('delete_from_bottom');
					
			if($data == 'delete_bottom')
			{
				if($this->input->post('cat_id'))
				{					
					foreach($this->input->post('cat_id') as $cat_id)
					{
						$this->Admin_model->delete_user('traver_categories',$cat_id);
					}
				}
			}
			else if($data == 'update_status')
			{
				if($this->input->post('cat_id'))
				{	
					foreach($this->input->post('cat_id') as $cat_id)
					{
						$this->Admin_model->update_status('traver_categories',$cat_id);
					}
				}
			}
			redirect("members_category");
		}
		else
		{
			$result['traveler_designer_data'] = $this->Admin_model->getAllDesignerExpertDetail();
			$result['partner_supplier_data'] = $this->Admin_model->getAllPartnerExpertDetail();
			$result['member_cat'] = $this->Admin_model->getAllDetail('traver_categories');
			$this->load->view('members_category',$result);
		}
	}

	function active_category()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;
		$cat_id = $this->input->get('cat_id');
		$data = array('cet_status' => 0);
		$this->Admin_model->change_status('traver_categories',$cat_id,$data);
		redirect("members_category");
	}

	function blocked_category()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;
		$cat_id = $this->input->get('cat_id');
		$data = array('cet_status' => 1);
		$this->Admin_model->change_status('traver_categories',$cat_id,$data);
		redirect("members_category");
	}

	function add_members_category()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;
		$this->load->view('add_members_category');
		if($this->input->post('addmemcat'))
		{
			$data = array(
				'cet_name' => ucfirst(strip_tags($this->input->post('cat_name'))),
				'cet_status' => 1,
				'cet_date' => date('Y-m-d H:i:s')
			);
			$id = $this->Admin_model->insert_data('traver_categories',$data);
			if($id){
	        	$this->session->set_flashdata('error','Members Category Submitted.');
	        }else{
	        	$this->session->set_flashdata('error','Something went wrong, Please try again.');
	        }
	        return redirect('add_members_category');
		}
	}

	function edit_members_category()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;
		$cat_id = $this->input->get('cat_id');
		$result['cat_by_id'] = $this->Admin_model->getUserById('traver_categories',$cat_id);
		$this->load->view('edit_members_category',$result);

		if($this->input->post('editmemcat'))
		{
			$old_cat_name = $this->input->post('old_cat_name');
			$cat_name = ucfirst(strip_tags($this->input->post('cat_name')));
			$id = $this->Admin_model->update_category($cat_name,$old_cat_name,$cat_id);
			if($id){
	        	$this->session->set_flashdata('error','Members Category Updated.');
	        }else{
	        	$this->session->set_flashdata('error','Something went wrong, Please try again.');
	        }
	        return redirect('add_members_category');
		}
	}


	function all_posts()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;
		//Bulk option delete
		if($this->input->post('delete_top'))
		{	
			$data = $this->input->post('delete_from_top');

			if($data == 'delete')
			{
				if($this->input->post('blog_id'))
				{	
					foreach($this->input->post('blog_id') as $blog_id)
					{
						$this->Admin_model->delete_user('blogs',$blog_id);
					}
				}
			}
			else if($data == 'update_status')
			{
				if($this->input->post('blog_id'))
				{	
					foreach($this->input->post('blog_id') as $blog_id)
					{
						$this->Admin_model->update_status('blogs',$blog_id);
					}
				}
			}
			redirect("all_posts");
		}
		else if($this->input->post('delete_bottom'))
		{	
			$data = $this->input->post('delete_from_bottom');
					
			if($data == 'delete')
			{
				if($this->input->post('blog_id'))
				{					
					foreach($this->input->post('blog_id') as $blog_id)
					{
						$this->Admin_model->delete_user('blogs',$blog_id);
					}
				}
			}
			else if($data == 'update_status')
			{
				if($this->input->post('blog_id'))
				{	
					foreach($this->input->post('blog_id') as $blog_id)
					{
						$this->Admin_model->update_status('blogs',$blog_id);
					}
				}
			}
			redirect("all_posts");
		}
		else
		{
			$result['post_data'] = $this->Admin_model->getAllDetail('blogs');
			$this->load->view('all_posts',$result);
		}
	}

	function add_post()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;
		$this->load->view('add_post');

		if($this->input->post('publish') || $this->input->post('draft'))
		{
			if($this->input->post('publish')){
				$save = 'publish';
			}else{
				$save = 'draft';
			}
			$blog_image = $_FILES['image']['name'];
			$temp_name = $_FILES['image']['tmp_name'];
			move_uploaded_file($temp_name,"image/$blog_image");

			$data = array(
				'blogs_title' => strip_tags($this->input->post('title')),
				'blogs_author' => 'Linda Thom',
				'blogs_desc' => $this->input->post('desc'),
				'blogs_image' => $blog_image,
				'blogs_save' => $save,
				'blogs_status' => 1,
				'blogs_date' => date('Y-m-d H:i:s') 
			);
			$id = $this->Admin_model->insert_data('blogs',$data);
			$this->session->set_flashdata('error','Blog '.$save.'ed.');
			redirect('edit_post?blog_id='.$id);
		}
	}


	function edit_post()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;
		$blog_id = $this->input->get('blog_id');
		$result['blog_data'] = $this->Admin_model->getUserById('blogs',$blog_id);
		$this->load->view('edit_post',$result);

		if($this->input->post('publish') || $this->input->post('draft'))
		{
			if($this->input->post('publish')){
				$save = 'publish';
			}else{
				$save = 'draft';
			}
			if(!empty($_FILES['image']['name']))
			{
				$blog_image = $_FILES['image']['name'];
				$temp_name = $_FILES['image']['tmp_name'];
				move_uploaded_file($temp_name,"image/$blog_image");
			}else{
				$blog_image = $this->input->post('old_image');
			}
			$data = array(
				'blogs_title' => strip_tags($this->input->post('title')),
				'blogs_desc' => $this->input->post('desc'),
				'blogs_image' => $blog_image,
				'blogs_save' => $save,
				'blogs_date' => date('Y-m-d H:i:s') 
			);
			$id = $this->Admin_model->change_status('blogs',$blog_id,$data);
			$this->session->set_flashdata('error','Blog Updated.');
			redirect('edit_post?blog_id='.$id);
		}	
	}


	function all_country()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;
		//Bulk option delete
		if($this->input->post('delete_top'))
		{	
			$data = $this->input->post('delete_from_top');

			if($data == 'delete_top')
			{
				if($this->input->post('travel_city_id'))
				{	
					foreach($this->input->post('travel_city_id') as $travel_city_id)
					{
						$this->Admin_model->delete_user('travel_city',$travel_city_id);
					}
				}
			}
			else if($data == 'update_status')
			{
				if($this->input->post('travel_city_id'))
				{	
					foreach($this->input->post('travel_city_id') as $travel_city_id)
					{
						$this->Admin_model->update_status('travel_city',$travel_city_id);
					}
				}
			}
			redirect("all_country");
		}
		else if($this->input->post('delete_bottom'))
		{	
			$data = $this->input->post('delete_from_bottom');
					
			if($data == 'delete_bottom')
			{
				if($this->input->post('travel_city_id'))
				{					
					foreach($this->input->post('travel_city_id') as $travel_city_id)
					{
						$this->Admin_model->delete_user('travel_city',$travel_city_id);
					}
				}
			}
			else if($data == 'update_status')
			{
				if($this->input->post('travel_city_id'))
				{	
					foreach($this->input->post('travel_city_id') as $travel_city_id)
					{
						$this->Admin_model->update_status('travel_city',$travel_city_id);
					}
				}
			}
			redirect("all_country");
		}
		else
		{
			$result['traveler_designer_data'] = $this->Admin_model->getAllDesignerExpertDetail();
			$result['partner_supplier_data'] = $this->Admin_model->getAllPartnerExpertDetail();
			$result['travel_country'] = $this->Admin_model->getAllDetail('travel_city');
			$this->load->view('all_country',$result);
		}
	}

	function active_country()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;
		$travel_city_id = $this->input->get('travel_city_id');
		$data = array('travel_status' => 0);
		$this->Admin_model->change_status('travel_city',$travel_city_id,$data);
		redirect("all_country");
	}

	function blocked_country()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;
		$travel_city_id = $this->input->get('travel_city_id');
		$data = array('travel_status' => 1);
		$this->Admin_model->change_status('travel_city',$travel_city_id,$data);
		redirect("all_country");
	}

	function add_country()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;
		$result['all_area'] = $this->Admin_model->getAllAreas();
		$this->load->view('add_country',$result);
		if($this->input->post('addcountry'))
		{
			$travel_country_check = ucfirst(strip_tags($this->input->post('travel_country')));
			$res_country = $this->Admin_model->check_travel_country($travel_country_check);
			if(empty($res_country)){
				$data = array(
					'travel_county' => ucfirst(strip_tags($this->input->post('travel_country'))),
					'travel_main_point' => ucfirst(strip_tags($this->input->post('travel_area'))),
					'travel_status' => 1,
					'travel_date' => date('Y-m-d H:i:s')
				);
				$id = $this->Admin_model->insert_data('travel_city',$data);
				if($id){
		        	$this->session->set_flashdata('error','Country Submitted.');
		        }else{
		        	$this->session->set_flashdata('error','Something went wrong, Please try again.');
		        }
		    }else{
		    	$this->session->set_flashdata('error','Country Already Exist, Please check agian.');
		    }
	        return redirect('add_country');
		}
	}

	function edit_country()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;
		$travel_city_id = $this->input->get('travel_city_id');
		$result['all_area'] = $this->Admin_model->getAllAreas();
		$result['country_by_id'] = $this->Admin_model->getUserById('travel_city',$travel_city_id);
		$this->load->view('edit_country',$result);
		if($this->input->post('editcountry'))
		{

			$old_travel_country = strip_tags($this->input->post('old_travel_country'));
			$old_travel_area = strip_tags($this->input->post('old_travel_area'));
			$travel_country = ucfirst(strip_tags($this->input->post('travel_country')));
			$travel_main_point = ucfirst(strip_tags($this->input->post('travel_area')));
			$id = $this->Admin_model->update_country_data($travel_city_id,$old_travel_area,$old_travel_country,$travel_country,$travel_main_point);
			if($id){
	        	$this->session->set_flashdata('error','Country Updated.');
	        }else{
	        	$this->session->set_flashdata('error','Something went wrong, Please try again.');
	        }
	        return redirect('edit_country?travel_city_id='.$travel_city_id);
		}
	}

	function contact()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;
		//Bulk option delete
		if($this->input->post('delete_top'))
		{	
			$data = $this->input->post('delete_from_top');
			if($data == 'delete_top')
			{
				if($this->input->post('contact_id'))
				{	
					foreach($this->input->post('contact_id') as $contact_id)
					{
						$this->Admin_model->delete_user('contact',$contact_id);
					}
				}
			}
			redirect("contact");
		}
		else if($this->input->post('delete_bottom'))
		{	
			$data = $this->input->post('delete_from_bottom');
			if($data == 'delete_bottom')
			{
				if($this->input->post('contact_id'))
				{					
					foreach($this->input->post('contact_id') as $contact_id)
					{
						$this->Admin_model->delete_user('contact',$contact_id);
					}
				}
			}
			redirect("contact");
		}
		else
		{
			$result['contact_data'] = $this->Admin_model->getAllDetail('contact');
			$this->load->view('all_contact',$result);
		}
	}

	function contact_details()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;
		$contact_id = $this->input->get('contact_id');
		$result['contact_detail'] = $this->Admin_model->getUserById('contact',$contact_id);
		$this->load->view('contact_detail',$result);
	}

	function all_subscriber()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;
		//Bulk option delete
		if($this->input->post('delete_top'))
		{	
			$data = $this->input->post('delete_from_top');

			if($data == 'delete_top')
			{
				if($this->input->post('sub_id'))
				{	
					foreach($this->input->post('sub_id') as $sub_id)
					{
						$this->Admin_model->delete_user('email_subcribtion',$sub_id);
					}
				}
			}
			else if($data == 'update_status')
			{
				if($this->input->post('sub_id'))
				{	
					foreach($this->input->post('sub_id') as $sub_id)
					{
						$this->Admin_model->update_status('email_subcribtion',$sub_id);
					}
				}
			}
			redirect("all_subscriber");
		}
		else if($this->input->post('delete_bottom'))
		{	
			$data = $this->input->post('delete_from_bottom');
					
			if($data == 'delete_bottom')
			{
				if($this->input->post('sub_id'))
				{					
					foreach($this->input->post('sub_id') as $sub_id)
					{
						$this->Admin_model->delete_user('email_subcribtion',$sub_id);
					}
				}
			}
			else if($data == 'update_status')
			{
				if($this->input->post('sub_id'))
				{	
					foreach($this->input->post('sub_id') as $sub_id)
					{
						$this->Admin_model->update_status('email_subcribtion',$sub_id);
					}
				}
			}
			redirect("all_subscriber");
		}
		else
		{
			$result['email_sub'] = $this->Admin_model->getAllDetail('email_subcribtion');
			$this->load->view('all_subscribers',$result);
		}
	}

	function active_subscriber()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;
		$sub_id = $this->input->get('sub_id');
		$data = array('sub_status' => 0);
		$this->Admin_model->change_status('email_subcribtion',$sub_id,$data);
		redirect("all_subscribers");
	}

	function blocked_subscriber()
	{
		$this->checklogin();
		$id = $this->session->userdata('adminuser')[0]->id;
		$sub_id = $this->input->get('sub_id');
		$data = array('sub_status' => 1);
		$this->Admin_model->change_status('email_subcribtion',$sub_id,$data);
		redirect("all_subscribers");
	}

}
?>