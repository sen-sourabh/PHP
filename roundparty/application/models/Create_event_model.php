<?php
Class Create_event_model extends CI_Model
{

	// public function insertAlldata($business_name,$contact_name,$contact_phone,$service,$service_option,$areas_served,$email,$password,$business_address,$post_code)
	// {
	// 	$query = $this->db->query("INSERT INTO business_registration VALUES ('','$business_name','$contact_name','$contact_phone','$service','$service_option','$areas_served','$email','$password','$business_address','','$post_code','','','','','','','','0','".date('Y-m-d H:i:s A')."')");
	// 	echo "<pre>";
	// 	echo $query;
	// 	// echo $query->result()->insert_id;
	// 	exit();
	// } 


	public function insertAlldata($data)
	{
		$this->db->insert('business_registration',$data);
		if($this->db->insert_id() > 0)
			return $this->db->insert_id();
		else
			return false;
	}

	public function create_event($title,$type,$special_instructions,$location,$location_postcode,$age,$event_date,$start_time,$end_time,$images)
	{
		$this->db->query("INSERT INTO createevent VALUES ('','$title','$type','$special_instructions','$location','$location_postcode','$age','$event_date','$start_time','$end_time','$images')");
	}
	public function select_event()
	{
		$query = $this->db->query("SELECT * FROM createevent");
		return $query->result();
	}

	public function select_event_by_id($id)
	{
		$query = $this->db->query("SELECT * FROM createevent WHERE id='$id'");
		return $query->result();
	}

	public function delete_event_by_id($id)
	{
		$this->db->query("DELETE FROM createevent WHERE id='$id'");
	}

	public function update_event($id,$title,$type,$special_instructions,$location,$location_postcode,$age,$event_date,$start_time,$end_time,$images)
	{
		$this->db->query("UPDATE createevent SET title='$title', type='$type', special_instructions='$special_instructions', event_location='$location', event_location_postcode='$location_postcode', age='$age', event_date='$event_date', start_time='$start_time', end_time='$end_time', image='$images' WHERE id='$id'");
	}

	public function select_profile_of_supplier($email)
	{
		$query = $this->db->select()->from('business_registration')->where('email',$email)->get();
		return $query->result();
	}

	public function update_profile_of_supplier($supplier_edit_data,$email)
	{	
		$this->db->set($supplier_edit_data); //value that used to update column  
		$this->db->where('email',$email); //which row want to upgrade  
		$this->db->update('business_registration');
	}

	public function select_password_of_supplier($email)
	{
		$query = $this->db->select('password')->from('business_registration')->where('email',$email)->get();
		return $query->result();
	}

	public function update_password_of_supplier($email,$change_pass)
	{
		$this->db->set($change_pass)->where('email',$email)->update('business_registration');
	}

	public function select_event_details_by_id($id)
	{
		$query = $this->db->query("SELECT * FROM createevent WHERE id='$id'");
		return $query->result();
	}

	public function select_image_for_delete($id)
	{
		$query = $this->db->query("SELECT image FROM createevent WHERE id='$id'");
		return $query->result();
	}

	public function delete_image($id,$dimage)
	{
		$this->db->query("DELETE image FROM createevent WHERE id='$id' AND image='$dimage'");
	}

//FOR USER PROFILE MODAL

	public function select_profile_of_user($email)
	{
		$query = $this->db->select()->from('user_info')->where('email',$email)->get();
		return $query->result();
	}

	public function update_profile_of_user($email,$name,$email_id,$dob,$gender,$billing_address,$other_address,$phone,$image)
	{
		$this->db->query("UPDATE user_info SET name='$name',email='$email_id',dob='$dob',gender='$gender',billing_address='$billing_address',other_address='$other_address',phone='$phone',image='$image' WHERE email='$email'");
	}

	public function select_password_of_user($email)
	{
		$query = $this->db->select('password')->from('user_info')->where('email',$email)->get();
		return $query->result();
	}

	public function update_password_of_user($email,$change_user_password)
	{
		$this->db->set($change_user_password)->where('email',$email)->update('user_info');
	}

	public function delete_user_account($email)
	{
		$this->db->where('email',$email)->delete('user_info');
	}

	// public function quick_update_profile_of_user($email)
	// {
	// 	$name = $this->input->post('name');
	// 	$gender = $this->input->post('gender');

	// 	$this->db->set('name', $name);
 //        $this->db->set('gender', $gender);
 //        $this->db->where('email', $email)->update('user_info');

	// }

//FOR PRODUCT PAGE
	public function add_product($product_name,$type,$category,$price,$description,$images,$date,$user_id)
	{
		$this->db->query("INSERT INTO product VALUES ('','$product_name','$type','$category','$price','$description','$images','$date','$user_id')");
	}


	public function update_product($id,$product_name,$type,$category,$price,$description,$images,$date)
	{
		$this->db->query("UPDATE product SET product_name='$product_name',type='$type',category='$category',price='$price',description='$description',image='$images',create_date='date' WHERE id='$id'");
	}

	public function select_product_by_id($id)
	{
		$query = $this->db->select('*')->from('product')->where('id',$id)->get();
		return $query->result();
	}

	public function select_product_category()
	{
		$query = $this->db->select('*')->from('categories')->get();
		return $query->result();
	}

	public function delete_product_by_id($id)
	{
		$this->db->query("DELETE FROM product WHERE id='$id'");
	}

	//FOR SERVICES PAGES
	public function add_service($service_name,$service,$description,$price,$date,$images,$user_id)
	{
		$this->db->query("INSERT INTO service VALUES ('','$service_name','$service','$description','$price','$date','$images','$user_id')");
	}

	public function select_services_by_user_id($user_id)
	{
		$query = $this->db->select('*')->from('service')->where('user_id',$user_id)->get();
		return $query->result();
	}

	public function select_services_by_id($id)
	{
		$query = $this->db->select('*')->from('service')->where('id',$id)->get();
		return $query->result();
	}

	public function update_service($id,$service_name,$service,$description,$price,$date,$images)
	{
		$this->db->query("UPDATE service SET service_name='$service_name',service='$service',description='$description',price='$price',create_date='$date',image='$images' WHERE id='$id'");
	}

	public function delete_service_by_id($id)
	{
		$this->db->where('id',$id)->delete('service');
	}
}
?>