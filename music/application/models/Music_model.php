<?php
class Music_model extends CI_Model {

	public function insert($table,$data){
		$this->db->insert($table,$data);
		$insert_id = $this->db->insert_id();
		if ($insert_id > 0){
			return $insert_id;
		}else{
			return false;
		}
	}

	public function getData($table, $where){
		return $this->db->where($where)->get($table)->result();
	}

	public function search($table,$like){
		return $this->db->like($like,'both')->get($table)->result();
	}
}
?>