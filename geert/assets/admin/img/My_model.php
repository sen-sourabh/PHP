<?Php 
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

class My_model extends CI_Model {
public function plans_detail(){
	     $query=$this->db->query("select * from plans");
	     return $query->result();
    }

  public function plans_announcement($payment){
	     $query=$this->db->query("select * from plans where Prices=$payment");
	     return $query->result();
    }
  public function insertAll_uniq_id($id){
	     $query=$this->db->query("select * from addNotice where id=$id");
	     return $query->result();
    }

 public function edit_announcement_first($id){
	     $query=$this->db->query("select * from addNotice where uniq_id=$id");
	     return $query->result();
    }

     public function edit_announcement_firs($id){
	     $query=$this->db->query("select * from announcement where uniq_id=$id");
	     return $query->result();
    }

     public function edit_announcement_fir($id){
	     $query=$this->db->query("select * from deceased where uniq_id=$id");
	     return $query->result();
    }
 public function insertAll($table, $data) {
		// $this->db->last_query();;
		$this->db->insert($table, $data);
		$insert_id = $this->db->insert_id();
			if ($insert_id > 0) {
				return $insert_id;
			} else {
				return false;
			}
	}

public function insertAll_announcement($table, $data) {
		// $this->db->last_query();;
		$this->db->insert($table, $data);
		$insert_id = $this->db->insert_id();
			if ($insert_id > 0) {
				return $insert_id;
			} else {
				return false;
			}
}

public function insertAll_deceased($table, $data) {
		// $this->db->last_query();;
		$this->db->insert($table, $data);
		$insert_id = $this->db->insert_id();
			if ($insert_id > 0) {
				return $insert_id;
			} else {
				return false;
			}
		}


public function updateAll($table, $data,$id) {
	$this->db->where('uniq_id',$id);
		$this->db->update($table, $data);
		
	}

public function updateAll_announcement($table, $data,$id) {
	$this->db->where('uniq_id',$id);
		$this->db->update($table, $data);
		
}

public function updateAll_deceased($table, $data,$id) {
	
	$this->db->where('uniq_id',$id);
		$this->db->update($table, $data);
		
		}

  public function contact_detail()
  {
	     $query=$this->db->query("select * from contact");
	     return $query->result();
    }


	}







