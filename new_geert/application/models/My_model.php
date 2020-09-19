<?Php 
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

class My_model extends CI_Model {
    
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
	
	public function updateAllResultWhere($table, $where, $data) {
		$this->db->where($where)->update($table, $data);
		$afftectedRows = $this->db->affected_rows();
              
		return $afftectedRows;
	}
	
	public function getAllResult($table){
        $allData = $this->db->get($table)->result();
		return $allData;
	}
	
	public function getAllResultArray($table, $where) {
		$allData = $this->db->get_where($table, $where)->result();
       // echo $this->db->last_query();
        return $allData;    
	}
	public function getAllResultWhereOrderBy($table, $where, $colum) { 

		if(empty($where)){
		$allData = $this->db->order_by($colum, "ASC")->get($table)->result();
		return $allData;
		}else{
		$allData = $this->db->order_by($colum, "ASC")->get_where($table, $where)->result();
		return $allData;
		}
	}

	public function getAllResultJoin($tableA, $tableAid, $tableB, $tableBid){

		$this->db->select('*');
		$this->db->from($tableA);
		$this->db->join($tableB, $tableAid = $tableBid);
		$allData = $this->db->get()->result();
		return $allData;

	}


	public function getAllResultJoinWithWhere($tableA, $tableAid, $tableB, $tableBid, $data){
		
		$this->db->select('*');
		$this->db->from($tableA);
		$this->db->join($tableB, $tableAid = $tableBid);
		$this->db->where($data);
		$allData = $this->db->get()->result();
		return $allData;

	}

	public function  getRowResultArray($table, $where){
		$allData = $this->db->get_where($table, $where)->row();
		return $allData;
                
	}


	public function deleteArray($table,$data){
		$allData = $this->db->where($data)->delete($table);
		return $allData;
		
	}

    public function  getRowBusines($table, $where){
		$allData = $this->db->order_by('id', "desc")->get_where($table, $where)->row();
	    return $allData;
                
	}

	/*
     * Insert user information
     */
    public function insert($table, $data = array()) {
        //add created and modified data if not included
        if(!array_key_exists("created", $data)){
            $data['created'] = date("Y-m-d H:i:s");
        }
        if(!array_key_exists("modified", $data)){
            $data['modified'] = date("Y-m-d H:i:s");
        }
        
        //insert user data to users table
        $insert = $this->db->insert($table, $data);
        
        //return the status
        if($insert){
            return $this->db->insert_id();;
        }else{
            return false;
        }
    }

    public function getRows( $userTab, $params = array()){
        $this->db->select('*');
        $this->db->from($userTab);
        
        //fetch data by conditions
        if(array_key_exists("conditions",$params)){
            foreach ($params['conditions'] as $key => $value) {
                $this->db->where($key,$value);
            }
        }
        
        if(array_key_exists("id",$params)){
            $this->db->where('id',$params['id']);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            $query = $this->db->get();
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
                $result = $query->num_rows();
            }elseif(array_key_exists("returnType",$params) && $params['returnType'] == 'single'){
                $result = ($query->num_rows() > 0)?$query->row_array():FALSE;
            }else{
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            }
        }

        //return fetched data
        return $result;
    }
	



}


?>