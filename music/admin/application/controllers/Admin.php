<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Kolkata');
	}

	function index(){
		$this->checklogin();
		$result['song'] = $this->Admin_model->getAllData('song');
		$this->load->view('index', $result);
	}
	
	function all_songs(){
		$this->checklogin();
		$result['song'] = $this->Admin_model->getAllData('song');
		$this->load->view('all_songs',$result);
	}
	
	function add_song(){
		$this->checklogin();
		$this->load->view('add_song');
		if($this->input->post('add')){
			$image = preg_replace('/\s+/', '',$_FILES['song_image']['name']);
          	$temp_name = preg_replace('/\s+/', '',$_FILES['song_image']['tmp_name']);                 
          	move_uploaded_file($temp_name,"assets/img/$image");
          	if($_FILES['song_file']['type']=='audio/mpeg' || $_FILES['song_file']['type']=='audio/mpeg3' || $_FILES['song_file']['type']=='audio/x-mpeg3' || $_FILES['song_file']['type']=='audio/mp3' || $_FILES['song_file']['type']=='audio/x-wav' || $_FILES['song_file']['type']=='audio/wav')
			{
				$file = preg_replace('/\s+/', '',$_FILES['song_file']['name']);
	          	$temp_name = preg_replace('/\s+/', '',$_FILES['song_file']['tmp_name']);                 
	          	move_uploaded_file($temp_name,"assets/music/$file");
			}else{
				$result['msg'] = $this->session->set_flashdata('error','Please choose .mp3 file.');
				return redirect('add_song');
			}
			$data = array(
				'song_name' => strip_tags(lcfirst($this->input->post('song_name'))),
				'song_singer' => strip_tags(lcfirst($this->input->post('song_singer'))),
				'song_category' => strip_tags(lcfirst($this->input->post('song_cat'))),
				'song_language' => strip_tags(lcfirst($this->input->post('song_lang'))),
				'song_country' => strip_tags(lcfirst($this->input->post('song_country'))),
				'song_desc' => strip_tags(lcfirst($this->input->post('song_desc'))),
				'song_image' => $image,
				'song_file' => $file,
				'song_status' => 1,
				'song_created_at' => date('Y-m-d H:i:s'),
				'song_updated_at' => date('Y-m-d H:i:s')
			);
			$id = $this->Admin_model->insert('song',$data);
			if($id){
				$this->session->set_flashdata('response','Song added successfully.');
				return redirect('edit_song?song_id='.$id);
			}else{
				$this->session->set_flashdata('error','Something went wrong. Please try again/later.');
				return redirect('add_song');
			}
		}
	}
	
	function edit_song(){
		$this->checklogin();
		$song_id = $this->input->get('song_id');
		$result['single_song'] = $this->Admin_model->getById('song',$song_id);
		$this->load->view('edit_song',$result);
		if($this->input->post('edit')){
			if(!empty($_FILES['song_image']['name'])){
				$image = preg_replace('/\s+/', '',$_FILES['song_image']['name']);
	          	$temp_name = preg_replace('/\s+/', '',$_FILES['song_image']['tmp_name']);                 
	          	move_uploaded_file($temp_name,"assets/img/$image");
          	}else{
          		$image = $this->input->post('old_image');
          	}
          	if(!empty($_FILES['song_file']['name'])){
	          	if($_FILES['song_file']['type']=='audio/mpeg' || $_FILES['song_file']['type']=='audio/mpeg3' || $_FILES['song_file']['type']=='audio/x-mpeg3' || $_FILES['song_file']['type']=='audio/mp3' || $_FILES['song_file']['type']=='audio/x-wav' || $_FILES['song_file']['type']=='audio/wav')
				{
					$file = preg_replace('/\s+/', '',$_FILES['song_file']['name']);
		          	$temp_name = preg_replace('/\s+/', '',$_FILES['song_file']['tmp_name']);                 
		          	move_uploaded_file($temp_name,"assets/music/$file");
				}else{
					$this->session->set_flashdata('error','Please choose .mp3 file.');
				}
			}else{
				$file = $this->input->post('old_file');
			}
			$data = array(
				'song_name' => strip_tags(lcfirst($this->input->post('song_name'))),
				'song_singer' => strip_tags(lcfirst($this->input->post('song_singer'))),
				'song_category' => strip_tags(lcfirst($this->input->post('song_cat'))),
				'song_language' => strip_tags(lcfirst($this->input->post('song_lang'))),
				'song_country' => strip_tags(lcfirst($this->input->post('song_country'))),
				'song_desc' => strip_tags(lcfirst($this->input->post('song_desc'))),
				'song_image' => $image,
				'song_file' => $file,
				'song_updated_at' => date('Y-m-d H:i:s')
			);
			if($this->Admin_model->update('song',$song_id,$data)){
				$this->session->set_flashdata('response','Song updated successfully.');
			}else{
				$this->session->set_flashdata('error','Something went wrong. Please try again/later.');
			}
			return redirect('edit_song?song_id='.$song_id);
		}
	}

	function delete_song(){
		$this->checklogin();
		$song_id = $this->input->get('song_id');
		$this->Admin_model->delete('song',$song_id);
		redirect('all_songs');
	}

	function status(){
		$this->checklogin();
		$song_id = $this->input->get('song_id');
		$this->Admin_model->update_status('song',$song_id);
		redirect('all_songs');
	}

	function contacts(){
		$this->checklogin();
		$result['contact'] = $this->Admin_model->getAllData('contact');
		$this->load->view('contacts', $result);
	}

	function view_contact(){
		$this->checklogin();
		$contact_id = $this->input->get('contact_id');
		$result['single_contact'] = $this->Admin_model->getById('contact',$contact_id);
		$this->load->view('contact_detail', $result);
	}

	function delete_contact(){
		$this->checklogin();
		$contact_id = $this->input->get('contact_id');
		$this->Admin_model->delete('contact',$contact_id);
		redirect('contacts');
	}

	function login(){
		if($this->session->userdata('adminuser')){
			redirect('index');
		}else{
			$result['response'] = '';
			if($this->input->post('login'))
			{
				$where = array(
					'admin_email' => $this->input->post('email'),
					'admin_password' => $this->input->post('pass')
				);
				$login_data = $this->Admin_model->logindata('admin',$where);
				if($login_data)
				{
					$data = array('admin_last_login' => date('Y-m-d h:i A'));
					$this->Admin_model->update_admin('admin',$data,$login_data[0]->admin_id);
					$this->session->set_userdata('adminuser',$login_data);
					redirect("index");
				}
				else
				{
					$result['response'] = 'Invalid email or password, Try again.';
				}
			}
			$this->load->view('login', $result);
		}
	}

	function logout(){
		$this->session->unset_userdata('adminuser');
		redirect('login');
	}

	function checklogin(){
		if(!$this->session->userdata('adminuser')){
			redirect('logout');
		}
	}

	function change_password(){
		$this->checklogin();
		if($this->input->post('change')){
			if($this->input->post('cur_pass') == $this->session->userdata('adminuser')[0]->admin_password){
				if($this->input->post('new_pass') == $this->input->post('con_pass')){
					$data = array('admin_password' => strip_tags($this->input->post('new_pass')));
					if($this->Admin_model->update_password('admin',$data)){
						$this->session->set_flashdata('response','Password updated successfully.');
					}else{
						$this->session->set_flashdata('error','Something went wrong. Please try again/later.');
					}
				}else{
					$this->session->set_flashdata('error','Confirm password not matched.');
				}
			}else{
				$this->session->set_flashdata('error','Current password invalid.');
			}
		}
		$this->load->view('change_password');
	}

	function forget_password(){
		if($this->session->userdata('adminuser')){
			redirect('index');
		}else{
			$result['response'] = '';
			if($this->input->post('forget')){
				$data = array('admin_email' => strip_tags(lcfirst($this->input->post('email'))));
				$admin_data = $this->Admin_model->getById('admin',$data);
				if ($admin_data) {
					$config['protocol'] = 'smtp';
					$config['smtp_host'] = 'mail.itsolution.co.in';
					$config['smtp_port'] = 587;
					$config['smtp_user'] = 'sourabhsen201313@gmail.com';
					$config['smtp_pass'] = 'Nbe!9969';
					$config['charset'] = 'utf-8';
					$config['mailtype'] = "html";
					$config['newline'] = "\r\n";
					$this->load->library('email');
					$this->email->initialize($config);
					$this->email->from('sourabhsen201313@gmail.com', 'MUSIC');
					$this->email->to(strip_tags(lcfirst($this->input->post('email'))));
					$this->email->subject('Mail From Music Website');
					$this->email->message(
						'<!DOCTYPE html>
							<html>
							<head>
								<title></title>
							</head>
							<body>
								<div class="main_data" style="float: left; width: 90%; border: 1px solid #e1e1e1; padding: 10px 5px;">
									<center>
										<img src="<?php echo base_url();?>assets/images/icon/login_logo.png" alt="CoolAdmin">
										<h1>Your Email and Password</h1>
									</center>
									<div class="left_data">
										<ul style="list-style: none; margin: 0px; padding: 0px;">
											<li style="font-size: 15px; font-weight: 400; letter-spacing: 0.01em; color: #6d6d6d; display: block; padding: 0; border-bottom: 1px solid #e1e1e1; padding: 10px 10px;">
											<span style="color: #225982; float: left; width:30%; font-weight: 500;"> Email :</span>'. $admin_data[0]->admin_email .'</li>
											<li style="font-size: 15px; font-weight: 400; letter-spacing: 0.01em; color: #6d6d6d; display: block; padding: 0; border-bottom: 1px solid #e1e1e1; padding: 10px 10px;">
											<span style="color: #225982; float: left; width:30%; font-weight: 500;"> Password :</span>'. $admin_data[0]->admin_password .'</li>
										</ul>
									</div>
								</div>
							</body>
							</html>'
					);
					if ($this->email->send()) {
						$result['response'] = 'Please, Check your inbox.';
					} else {
						$result['response'] = 'Something went wrong. Please try again/later.';
					}
				} else {
					$result['response'] = 'Something went wrong. Please try again/later.';
				}
			}
			$this->load->view('forget_password',$result);
		}
	}
}
