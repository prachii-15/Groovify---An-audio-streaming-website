<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Displayadm_m extends CI_Model
{
	public  function getadmininfo()
	{
		return $this->db->get('tbladmin')->result();
	}
	public function insertadmin($data)
	{
		$this->db->insert("tbladmin",$data);

	}
	
}