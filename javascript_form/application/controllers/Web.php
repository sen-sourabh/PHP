<?php
class Web extends CI_Controller
{
	public function index()
	{
		$this->load->view('index');

		if($this->input->get('email'))
		{
			$name = $this->input->get('name');
			$email = $this->input->get('email');
			$phone = $this->input->get('phone');
			// $imagea = $this->input->get('image');
			$_FILES['image']['name'] = $this->input->get('image');

			$image = preg_replace('/\s+/', '',$_FILES['image']['name']);
			$temp_name = preg_replace('/\s+/', '',$_FILES['image']['tmp_name']);
			move_uploaded_file($temp_name,"'".base_url()."'assets/img/$image");

			$this->Web_model->insert($name,$email,$phone,$image);
			echo "<script>alert('success.')</script>";	
		}		
	}

}
?>