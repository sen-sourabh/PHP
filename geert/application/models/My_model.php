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

	public function getSearchResultArray($table,$where,$search_query)
	{
		$this->db->select();
		$this->db->from($table);
		$this->db->like('product_title',$search_query,'both');
		$this->db->where_in($where);
		$allData = $this->db->get()->result();
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
	
	public function getAboutData()
	{
		$query = $this->db->get('widget_about')->result();
		return $query;	
	}

    public function update_about_data($about_data)
    {
    	$this->db->update('widget_about',$about_data);
    }

    public function getContactData()
	{
		$query = $this->db->get('widget_contact')->result();
		return $query;	
	}

    public function update_contact_data($contact_data)
    {
    	$this->db->update('widget_contact',$contact_data);
    }

    public function insert_slider_data($slider_data)
    {
    	$this->db->insert('slider',$slider_data);
    }
    
    public function getSliderData()
    {
    	$query = $this->db->get('slider')->result();
    	return $query;
    }

    public function getSliderDataById($slider_id)
    {
    	$query = $this->db->where('slider_id',$slider_id)->get('slider')->result();
    	return $query;
    }

    public function update_slider_data($slider_id,$slider_data)
    {
        $this->db->where('slider_id',$slider_id)->update('slider',$slider_data);
    }

    public function deleteSliderById($slider_id)
    {
    	$this->db->query("DELETE FROM slider WHERE slider_id='$slider_id'");
    }

    public function insert_Top_Banner_Data($top_ban_data)
    {
        $this->db->insert('video',$top_ban_data);
    }

    public function getTopBannerData()
    {
        $query = $this->db->query("SELECT * FROM video");
        return $query->result();
    }

    public function getBottomBannerData()
    {
        $query = $this->db->query("SELECT * FROM bottom_banner");
        return $query->result();
    }

    public function getTopBannerDataById($video_id)
    {
        $query = $this->db->query("SELECT * FROM video WHERE video_id='$video_id'");
        return $query->result();   
    }

    public function update_Top_Banner_Data($top_ban_data,$video_id)
    {
        $this->db->where('video_id',$video_id)->update('video',$top_ban_data);
    }

    public function delete_Top_Banner_Data($video_id)
    {
        $this->db->query("DELETE FROM video WHERE video_id='$video_id'");  
    }

    public function insert_bottom_banner($bot_ban_data)
    {
        $this->db->insert('bottom_banner',$bot_ban_data);
    }

    public function update_bottom_banner($ban_id,$bot_ban_data)
    {
        $this->db->where('bottom_banner_id',$ban_id)->update('bottom_banner',$bot_ban_data);
    }

    public function getBottomBannerDataById($ban_id)
    {
        $query = $this->db->query("SELECT * FROM bottom_banner WHERE bottom_banner_id='$ban_id'");
        return $query->result();
    }

    public function delete_Bottom_Banner($ban_id)
    {
        $this->db->query("DELETE FROM bottom_banner WHERE bottom_banner_id='$ban_id'");
    }

    public function insert_Shop_Banner_Data($shop_ban_data)
    {
        $this->db->insert('shop_banner',$shop_ban_data);
    }

    public function getShopBannerData()
    {
        $query = $this->db->get('shop_banner');
        return $query->result();
    }

    public function getShopBannerDataById($ban_id)
    {
        $query = $this->db->query("SELECT * FROM shop_banner WHERE shop_banner_id='$ban_id'");
        return $query->result();
    }

    public function update_Shop_Banner_Data($ban_id,$shop_ban_data)
    {
        $this->db->where('shop_banner_id',$ban_id)->update('shop_banner',$shop_ban_data);
    }

    public function delete_Shop_Banner($ban_id)
    {
        $this->db->query("DELETE FROM shop_banner WHERE shop_banner_id='$ban_id'");
    }

}


?>