<?php
class Mlogin extends CI_Model
{
	public function login($username,$pwd)
	{
		$this->db->select(array('id','username','password'));
		$this->db->from('pengguna');
		$this->db->where('username',$username);
		$this->db->where('password',$pwd);
		$this->db->limit(1);

		$query = $this->db->get();

		if ($query->num_rows()==1) 
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
}
?>