<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Model{
    function __construct() {
        $this->userTbl = 'users';
        $this->gpsTbl = 'gps';
    }
    /*
     * get rows from the users table
     */
    function getRows($params = array()){
        $this->db->select('*');
        $this->db->from($this->userTbl);
        
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
    
        /*
     * get rows from the  table
     */
    public function getAllResult($table){

        $allData = $this->db->get($table)->result();
        return $allData;

    }

    public function getAllProductResult($table)
    {
        $this->db->select($table.'.*,category.cat_title');
        $this->db->join('category','category.cat_id='.$table.'.cat_id');
        $allData = $this->db->get($table)->result();
        return $allData;
    }


    public function getAllResultArray($table, $where) {
        $allData = $this->db->get_where($table, $where)->result();
       // echo $this->db->last_query();
        return $allData;    
    }

    public function getSelectOption($table, $where,$select) {
        $allData = $this->db->get_where($table, $where)->result();
        foreach ($allData as $value) {
          echo '<option value="'.$value->cat_id.'">'.$value->cat_id.'</option>';
        }
        return $allData;    
    }

    /*
     * Insert user information
     */
    public function insert($data = array()) {
        //add created and modified data if not included
        if(!array_key_exists("created", $data)){
            $data['created'] = date("Y-m-d H:i:s");
        }
        if(!array_key_exists("modified", $data)){
            $data['modified'] = date("Y-m-d H:i:s");
        }
        
        //insert user data to users table
        $insert = $this->db->insert($this->userTbl, $data);
        
        //return the status
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }

     /*
     * Insert user information
     */
    public function insertData($table,$data = array()) {
        //add created and modified data if not included
       
        
        //insert user data to users table
        $insert = $this->db->insert($table, $data);
        
        //return the status
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }   

    public function deleteArray($table,$data){
        $allData = $this->db->where($data)->delete($table);
        return $allData;   
    }

    public function updateAllResultWhere($table, $where, $data) {
        $this->db->where($where)->update($table, $data);
        $afftectedRows = $this->db->affected_rows();
              
        return $afftectedRows;
    }

    public function getUser($userid)
    {
        $query = $this->db->where('id',$userid)->get('users');
        if($query->num_rows() == 1)
        {
            return $query->row();
        }
        throw new Exception("no user data found");
    }

     public function updatePassword($new_password, $userid)
     {
        $data = array
        (
            'password'=> md5($new_password)
        );
        if (!$this->db->where('id', $userid)->update('users', $data))
        {
            throw new Exception('Failed to update password');
        }
    }

}
?>