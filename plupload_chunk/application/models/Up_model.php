<?php
class Up_model extends CI_Model
{
	public function upload($filename)
	{
		$this->db->query("INSERT INTO video VALUES ('','$filename','1')");
	}
}
?>