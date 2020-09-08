<?php 
Class All_post_model extends CI_Model
{
	public function selectcategory()
	{
		$query = $this->db->query("SELECT * FROM parentcategory");
		return $query->result();	
	}

	public function selectrecordcategorybyid($ids)
	{
		$query = $this->db->query("SELECT *	FROM parentcategory WHERE id='$ids'");
		return $query->result();
	}

	public function updaterecordcategorybyid($cat_id)
	{
		$this->db->query("UPDATE parentcategory SET postcount=postcount+'1' WHERE id='$cat_id'");
	}

	public function selectcategoryname($cat_id)
	{
		$query = $this->db->query("SELECT *	FROM parentcategory WHERE id='$cat_id'");
		return $query->result();	
	}

	public function insert_publish_post($title,$author,$content,$categories,$status,$postdate)
	{
		$this->db->query("INSERT INTO all_posts VALUES ('','$title','$author','$content','$categories','$status','$postdate')");
	}

	public function insert_save_post($title,$author,$content,$categories,$status,$postdate)
	{
		$this->db->query("INSERT INTO all_posts VALUES ('','$title','$author','$content','$categories','$status','$postdate')");
	}

	public function selectallpost($query)
	{
		$query = $this->db->query("SELECT * FROM all_posts WHERE title LIKE '%$query%'");
		return $query->result();
	}

	public function selectallpostdates()
	{
		$query = $this->db->query("SELECT postdate FROM all_posts GROUP BY postdate");
		return $query->result();
	}

	public function selectpostbydate($query)
	{
		$query = $this->db->query("SELECT * FROM all_posts WHERE postdate LIKE '%$query%'");
		return $query->result();
	}

	public function selectpostrecordbyid($id)
	{
		$query = $this->db->query("SELECT * FROM all_posts WHERE id='$id'");
		return $query->result();
	}

	public function update_publish_post($id,$title,$author,$content,$categories,$status,$postdate)
	{
		$this->db->query("UPDATE all_posts SET title='$title',author='$author',content='$content',categories='$categories',status='$status',postdate='$postdate' WHERE id='$id'");
	}

	public function update_save_post($id,$title,$author,$content,$categories,$status,$postdate)
	{
		$this->db->query("UPDATE all_posts SET title='$title',author='$author',content='$content',categories='$categories',status='$status',postdate='$postdate' WHERE id='$id'");
	}

	public function selectpublishpostcount()
	{
		$query = $this->db->query("SELECT count(id) AS countpublishpost FROM all_posts WHERE status='Publish'");
		return $query->result();
	}

	public function selectpublishpost($query)
	{
		$query = $this->db->query("SELECT * FROM all_posts WHERE status='Publish' AND title LIKE '%$query%'");
		return $query->result();
	}

	public function selectpublishpostbydate($query)
	{
		$query = $this->db->query("SELECT * FROM all_posts WHERE status='Publish' AND postdate LIKE '%$query%'");
		return $query->result();
	}

	public function selectdraftpostcount()
	{
		$query = $this->db->query("SELECT count(id) AS countdraftpost FROM all_posts WHERE status='Draft'");
		return $query->result();
	}

	public function selectdraftpostbydate($query)
	{
		$query = $this->db->query("SELECT * FROM all_posts WHERE status='Draft' AND postdate LIKE '%$query%'");
		return $query->result();	
	}

	public function selectdraftpost($query)
	{
		$query = $this->db->query("SELECT * FROM all_posts WHERE status='Draft' AND title LIKE '%$query%'");
		return $query->result();
	}

	public function selectallpostcount()
	{
		$query = $this->db->query("SELECT count(id) AS countallpost FROM all_posts");
		return $query->result();
	}

	public function insert_category($categoryname,$slug,$parentcategory,$description,$count)
	{
		$this->db->query("INSERT INTO parentcategory VALUES ('','$categoryname','$slug','$parentcategory','$description','$count')");
	}

	public function selectcategorybyid($id)
	{
		$query = $this->db->query("SELECT * FROM parentcategory WHERE id='$id'");
		return $query->result();
	}

	public function update_category($id,$categoryname,$slug,$parentcategory,$description,$count)
	{
		$this->db->query("UPDATE parentcategory SET categories='$categoryname',slug='$slug',parentcategory='$parentcategory',description='$description',postcount='$count' WHERE id='$id'");
	}

	public function selectcategoryrecords($query)
	{
		$query = $this->db->query("SELECT * FROM parentcategory WHERE category LIKE '%$query%'");
		return $query->result();
	}

	public function deleteselectedpost($post_id)
	{
		$this->db->query("DELETE FROM all_posts WHERE id='$post_id'");
	}


	public function deleteselectedcat($cat_id)
	{
		$this->db->query("DELETE FROM parentcategory WHERE id='$cat_id'");
	}

}
?>