<?php
class Web_model extends CI_Model
{
	public function insert($name,$email,$phone,$image)
	{
		$this->db->query("INSERT INTO user VALUES ('','$name','$email','$phone','$image')");
	}

}
?>