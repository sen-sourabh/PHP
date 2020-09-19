<?php 
Class Web_model extends CI_model
{
	public function articleList($limit,$offset)
	{
		$q=$this->db->select()->from('articles')->limit($limit,$offset)->get();
		return $q->result();
		// like('infrastructure',$query,'both')
	}
	public function num_row()
	{
		$q=$this->db->select()->from('articles')->get();
		return $q->num_rows();
	}

	public function email_is_unique($email)
	{
		$query = $this->db->query("SELECT * FROM users WHERE email='$email'");
		return $query->result();
	}

	public function user_register($username,$email,$password,$phone,$country,$state,$city)
	{
		$this->db->query("INSERT INTO users VALUES('','$username','$email','$password','$phone','$country','$state','$city')");
	}

	public function verify($email,$password)
	{
		$query = $this->db->query("SELECT * FROM users WHERE email='$email' AND password='$password'");
		return $query->result();
	}

	public function contactdata($username,$email,$subject,$message)
	{
		$this->db->query("INSERT INTO contact VALUES ('','$username','$email','$subject','$message')");
	}

	public function verify_password($email,$oldpass)
	{
		$query = $this->db->query("SELECT * FROM users WHERE email='$email' AND password='$oldpass'");
		return $query->result();
	}

	public function update_password($newpass,$email)
	{
		$this->db->query("UPDATE users SET password='$newpass' WHERE email='$email'");
	}
	
	public function upload_user_data($email,$type,$image,$infrastructure,$toilet,$description,$address,$price,$contact)
	{
		$this->db->query("INSERT INTO articles VALUES ('','$email','$type','$image','$infrastructure','$toilet','$description','$address','$price','$contact')");
	}

	public function selectuseruploadbyemail($email,$query,$limit,$offset)
	{	
		$q=$this->db->select()->from('articles')->like('email',$email)->like('infrastructure',$query,'both')->limit($limit,$offset)->get();
	
		// $query = $this->db->query("SELECT * FROM articles WHERE email='$email' AND infrastructure LIKE '$query'");
		return $q->result();
	}
	public function num_row_byemail($email,$query)
	{
		$q=$this->db->select()->from('articles')->like('email',$email)->like('infrastructure',$query,'both')->get();
		return $q->num_rows();
	}

	public function selectrecordbyid($id)
	{
		$query = $this->db->query("SELECT * FROM articles WHERE id='$id'");
		return $query->result();
	}

	public function deletepostbyid($id)
	{
		$this->db->query("DELETE FROM articles WHERE id='$id'");
	}

	public function selectpostdatabyid($id)
	{
		$query = $this->db->query("SELECT * FROM articles WHERE id='$id'");
		return $query->result();
	}

	public function update_upload_user_data($id,$type,$image,$infrastructure,$toilet,$description,$address,$price,$contact)
	{
		$this->db->query("UPDATE articles SET type='$type',image='$image',infrastructure='$infrastructure',toilet='$toilet',description='$description',address='$address',price='$price',contact='$contact' WHERE id='$id'");
	}
}
?>