<?php
Class All_page_model extends CI_Model
{
	public function selectparent()
	{
		$query = $this->db->query("SELECT * FROM parent");
		return $query->result();	
	}

	// public function selectparentbyid($parentid)
	// {
	// 	$query = $this->db->query("SELECT * FROM parent WHERE id='$parentid'");
	// 	return $query->result();

	// }

	// public function selecttemplatebyid($templateid)
	// {
	// 	$query = $this->db->query("SELECT * FROM template WHERE id='$templateid' OR parent='$templateid'");
	// 	return $query->result();

	// }

	public function selecttemplate()
	{
		$query = $this->db->query("SELECT * FROM template");
		return $query->result();	
	}

	public function insert_publish_page($title,$author,$content,$parent,$template,$pageorder,$image,$status,$date)
	{
		$this->db->query("INSERT INTO all_pages VALUES ('','$title','$author','$content','$parent','$template','$pageorder','$image','$status','$date')");
	}

	public function insert_save_page($title,$author,$content,$parent,$template,$pageorder,$image,$status,$date)
	{
		$this->db->query("INSERT INTO all_pages VALUES ('','$title','$author','$content','$parent','$template','$pageorder','$image','$status','$date')");
	}

	public function selectpage($query)
	{
		$query = $this->db->query("SELECT * FROM all_pages WHERE title LIKE '%$query%'");
		return $query->result();
	}

	public function selectpagerecordbyid($id)
	{
		$query = $this->db->query("SELECT * FROM all_pages WHERE id='$id'");
		return $query->result();
	}

	public function update_image_on_edit_page($id,$delimage)
	{
		$this->db->query("UPDATE all_pages SET featuredimage='$delimage' WHERE id='$id'");	
	}

	public function update_publish_page($id,$title,$author,$content,$parent,$template,$pageorder,$image,$status,$date)
	{
		$this->db->query("UPDATE all_pages SET title='$title',author='$author',content='$content',parent='$parent',template='$template',pageorder='$pageorder',featuredimage='$image',status='$status',savedate='$date' WHERE id='$id'");
	}

	public function update_save_page($id,$title,$author,$content,$parent,$template,$pageorder,$image,$status,$date)
	{
		$this->db->query("UPDATE all_pages SET title='$title',author='$author',content='$content',parent='$parent',template='$template',pageorder='$pageorder',featuredimage='$image',status='$status',savedate='$date' WHERE id='$id'");
	}

	public function selectpublishcount()
	{
		$query = $this->db->query("SELECT count(id) AS countpublish FROM all_pages WHERE status='Publish'");
		return $query->result();
	}

	public function selectpublishpagebydate($query)
	{
		$query = $this->db->query("SELECT * FROM all_pages WHERE status='Publish' AND savedate LIKE '%$query%'");
		return $query->result();	
	}

	public function selectpublishpage($query)
	{
		$query = $this->db->query("SELECT * FROM all_pages WHERE status='Publish' AND title LIKE '%$query%'");
		return $query->result();
	}

	public function selectdraftcount()
	{
		$query = $this->db->query("SELECT count(id) AS countdraft FROM all_pages WHERE status='Draft'");
		return $query->result();
	}

	public function selectdraftpagebydate($query)
	{
		$query = $this->db->query("SELECT * FROM all_pages WHERE status='Draft' AND savedate LIKE '%$query%'");
		return $query->result();
	}

	public function selectdraftpage($query)
	{
		$query = $this->db->query("SELECT * FROM all_pages WHERE status='Draft' AND title LIKE '%$query%'");
		return $query->result();
	}

	public function selectallcount()
	{
		$query = $this->db->query("SELECT count(id) AS countall FROM all_pages");
		return $query->result();
	}

	public function selectalldates()
	{
		$query = $this->db->query("SELECT savedate FROM all_pages GROUP BY savedate");
		return $query->result();
	}
	
	public function selectpagebydate($query)
	{
		$query = $this->db->query("SELECT * FROM all_pages WHERE savedate LIKE '%$query%'");
		return $query->result();	
	}

	public function deleteselected($row_id)
	{
		$this->db->query("DELETE FROM all_pages WHERE id='$row_id'");	
	}
}
 
?>