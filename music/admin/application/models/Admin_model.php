<?php 
class Admin_model extends CI_Model{

	public function logindata($table,$where){
		$query = $this->db->where($where)->get($table);
		if($query->num_rows()){
			return $query->result();
		}else{
			return false;
		}
	}

	public function insert($table,$data){
		$this->db->insert($table,$data);
		$insert_id = $this->db->insert_id();
		if ($insert_id > 0){
			return $insert_id;
		}else{
			return false;
		}
	}

	public function getById($table,$id){
		if($table == 'song'){
			return $this->db->where('song_id',$id)->get($table)->result();
		}else if($table == 'contact'){
			return $this->db->where('contact_id',$id)->get($table)->result();
		}else if($table == 'admin'){
			return $this->db->where($id)->get($table)->result();
		}
	}

	public function getAllData($table){
		return $this->db->get($table)->result();
	}

	public function update($table,$song_id,$data){
		$this->db->where('song_id',$song_id)->update($table,$data);
		return true;
	}

	public function update_status($table,$song_id){
		$result['status'] = $this->db->where('song_id',$song_id)->get($table)->result();
		$status = $result['status'][0]->song_status;
		if($status == 1){
			$data = array('song_status' => 0);
		}else{
			$data = array('song_status' => 1);
		}
		$this->update($table,$song_id,$data);
	}

	public function delete($table,$id){
		if($table == 'song'){
			$this->db->where('song_id',$id)->delete($table);
		}else if($table == 'contact'){
			$this->db->where('contact_id',$id)->delete($table);
		}
	}

	public function update_password($table,$data){
		$this->db->where('admin_id',$this->session->userdata('adminuser')[0]->admin_id)->update($table,$data);
		return true;
	}

	public function update_admin($table,$data,$id){
		$this->db->where('admin_id',$id)->update($table,$data);
	}
}
?>