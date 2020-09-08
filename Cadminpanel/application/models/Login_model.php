<?php
Class Login_model extends CI_Model
{
	public function logindata($email,$password)
	{
		$query = $this->db->query("SELECT * FROM users_info WHERE email='$email' and password='$password' and status='1'");
		if($query->num_rows())
		{	
			return $query->row()->name;
		}
		else
		{
			return false;
		}
	}
}
?>