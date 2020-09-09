<?php
Class Admin_model extends CI_Model
{
	public function logindata($email,$password){
		$query = $this->db->query("SELECT * FROM admin_data WHERE email='$email' and password='$password' and status='1'");
		if($query->num_rows()){	
			return $query->result();
		}else{
			return false;
		}
	}
	
//WORKING ON ADMIN
	public function select_admin_password($email,$current_password){
		$query = $this->db->select('*')->from('admin_data')->where('password',$current_password)->get();
		return $query->num_rows();
	}

	public function update_admin_change_password($new_password,$id){
		$this->db->query("UPDATE admin_data SET password='$new_password' WHERE id='$id'");
	}

	public function getAllDetail($table){
		$query = $this->db->get($table);
		return $query->result();
	}

	public function getUserById($table,$user_id){
		if($table == 'registration'){
			$query = $this->db->where('user_id',$user_id)->get($table);
		}else if($table == 'traver_categories'){
			$query = $this->db->where('cet_id',$user_id)->get($table);
		}else if($table == 'travel_city'){
			$query = $this->db->where('travel_city_id',$user_id)->get($table);
		}else if($table == 'travel_expert'){
			$query = $this->db->where('expert_id',$user_id)->get($table);
		}else if($table == 'contact'){
			$query = $this->db->where('contact_id',$user_id)->get($table);
		}else if($table == 'review'){
			$query = $this->db->where('re_id',$user_id)->get($table);	
		}else if($table == 'blogs'){
			$query = $this->db->where('blogs_id',$user_id)->get($table);
		}else{
			$this->db->select('online_enquiry.*, travel_expert.expert_name');
			$this->db->from('online_enquiry');
			$this->db->join('travel_expert','travel_expert.expert_id = online_enquiry.enquiry_travel_id','inner');
			$this->db->where('online_enquiry.enquiry_id',$user_id);
			$query = $this->db->get();
		}
		return $query->result();
	}

	public function getAllDesignerExpertDetail(){
		$query = $this->db->query("SELECT * FROM travel_expert WHERE expert_type='designer'");
		return $query->result();
	}

	public function getAllPartnerExpertDetail(){
		$query = $this->db->query("SELECT * FROM travel_expert WHERE expert_type='partner'");
		return $query->result();
	}

	public function delete_user($table,$user_id){
		if($table == 'registration'){
			$this->db->where('user_id',$user_id)->delete($table);
		}else if($table == 'travel_expert'){
			$this->db->where('expert_id',$user_id)->delete($table);
		}else if($table == 'travel_city'){
			$this->db->where('travel_city_id',$user_id)->delete($table);
		}else if($table == 'traver_categories'){
			$this->db->where('cet_id',$user_id)->delete($table);	
		}else if($table == 'contact'){
			$this->db->where('contact_id',$user_id)->delete($table);
		}else if($table == 'email_subcribtion'){
			$this->db->where('sub_id',$user_id)->delete($table);
		}else{
			$this->db->where('enquiry_id',$user_id)->delete($table);	
		}
	}

	public function insert_data($table,$data){
		$this->db->insert($table, $data);
		$insert_id = $this->db->insert_id();
		if ($insert_id > 0){
			return $insert_id;
		}else{
			return false;
		}
	}

	public function change_status($table,$user_id,$data){
		if($table == 'travel_expert'){
			$this->db->where('expert_id',$user_id)->update($table,$data);
		}else if($table == 'travel_city'){
			$this->db->where('travel_city_id',$user_id)->update($table,$data);
		}else if($table == 'traver_categories'){
			$this->db->where('cet_id',$user_id)->update($table,$data);
		}else if($table == 'email_subcribtion'){
			$this->db->where('sub_id',$user_id)->update($table,$data);
		}else if($table == 'blogs'){
			$this->db->where('blogs_id',$user_id)->update($table,$data);
		}else{
			$this->db->where('re_id',$user_id)->update($table,$data);
		}
	}

	public function update_status($table,$user_id){
		if($table == 'travel_expert'){
			$expert = $this->db->select('expert_status')->where('expert_id',$user_id)->get($table);
			$ex_res = $expert->result();
			if($ex_res[0]->expert_status == 0){
				$data = array('expert_status' => 1);
			}else{
				$data = array('expert_status' => 0);	
			}
		}else if($table == 'travel_city'){
			$trav = $this->db->select('travel_status')->where('travel_city_id',$user_id)->get($table);
			$trav_res = $trav->result();
			if($trav_res[0]->travel_status == 0){
				$data = array('travel_status' => 1);
			}else{
				$data = array('travel_status' => 0);	
			}
		}else if($table == 'traver_categories'){
			$cate = $this->db->select('cet_status')->where('cet_id',$user_id)->get($table);
			$cat_res = $cate->result();
			if($cat_res[0]->cet_status == 0){
				$data = array('cet_status' => 1);
			}else{
				$data = array('cet_status' => 0);	
			}
		}else if($table == 'email_subcribtion'){
			$subcrip = $this->db->select('sub_status')->where('sub_id',$user_id)->get($table);
			$subcrip_res = $subcrip->result();
			if($subcrip_res[0]->sub_status == 0){
				$data = array('sub_status' => 1);
			}else{
				$data = array('sub_status' => 0);	
			}
		}
		$this->change_status($table,$user_id,$data);
	}

	public function update_category($cat_name,$old_cat_name,$cat_id){
		$cat_name = lcfirst($cat_name);
		$this->db->query("UPDATE travel_expert SET expert_experince_type='$cat_name' WHERE expert_experince_type='$old_cat_name'");
		$cat_name = ucfirst($cat_name);
		if($this->db->query("UPDATE traver_categories SET cet_name='$cat_name' WHERE cet_id='$cat_id'")){
			return true;
		}else{
			return false;
		}
	}

	public function getAllEnquiryDetail(){
		$this->db->select('online_enquiry.*, travel_expert.expert_name');
		$this->db->from('online_enquiry');
		$this->db->join('travel_expert','travel_expert.expert_id = online_enquiry.enquiry_travel_id','inner');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_review($id){
		$query = $this->db->query("SELECT *, COUNT(re_expert_id) AS total_no_review, SUM(re_overall) AS total_review FROM review WHERE re_expert_id='$id' GROUP BY re_expert_id");
		return $query->result();
	}

	public function get_All_review($id){
		$query = $this->db->query("SELECT * FROM review WHERE re_expert_id='$id'");
		return $query->result();	
	}

	public function getAllAreas(){
		$query = $this->db->query("SELECT travel_main_point FROM travel_city GROUP BY travel_main_point");
		return $query->result();
	}

	public function update_country_data($travel_city_id,$old_travel_area,$old_travel_country,$travel_country,$travel_area){
		$this->db->query("UPDATE travel_expert SET expert_expertise='$travel_country', expert_country='$travel_country', expert_area='$travel_area' WHERE expert_expertise='$old_travel_country' AND expert_country='$old_travel_country' AND expert_area='$old_travel_area'");
		if($this->db->query("UPDATE travel_city SET travel_county='$travel_country', travel_main_point='$travel_area' WHERE travel_city_id='$travel_city_id'")){
			return true;
		}else{
			return false;
		}
	}

	public function check_travel_country($travel_country_check){
		return $this->db->select('travel_county')->from('travel_city')->where('travel_county',$travel_country_check)->get()->result();
	}
} 
?>