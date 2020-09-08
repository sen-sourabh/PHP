<?php 
Class Login extends CI_Controller
{
	public function __construct()
	{
		parent ::__construct();

		//Loading url helper
		$this->load->helper('url');

		//Load session library manually
		$this->load->library('session');

		//Load login model
		$this->load->model('Login_model');

		//load database libray manually
		$this->load->database();

	}
	public function login()
	{
		$this->load->view('login');
		if($this->input->post('login'))
		{
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$remember=$this->input->post('remember');

			if($remember != NULL)
			{
				setcookie('email',$email, time() + (86400 * 30), "/");
				setcookie('password',$password, time() + (86400 * 30), "/");
			}

			$login_data = $this->Login_model->logindata($email,$password);

			if($login_data)
			{	
				//session_start();
				//$_SESSION['adminemail']=$email;
				
				$this->session->set_userdata('username',$login_data);

				// echo "<script>alert('$query')</script>";
				// echo "<script>window.location='http://localhost/codeadmin/index.php/Admin/dashboard'</script>";
				redirect("All_pages/index");
				// $result['data']=$this->Admin_Panel->todorecords();
				// $this->load->view('dashboard',$result);
			}
			else
			{
				echo "<script>alert('Invalid email or password, Try again.')</script>";
			}
		}
	}

	public function logout()
	{
		$this->session->userdata('username');
		$this->session->unset_userdata('username');
		
		//Remove Cookies
		setcookie("email","", time() - 3600);
		setcookie("password","", time() - 3600);

		redirect("Login/login");
	}
}
?>