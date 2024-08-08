<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Displayuser_m extends CI_Model
{
	public function getuserinfo()
	{
		return $this->db->get('tbluser')->result();
	}
	public function blockunblock_m($id, $status)
	{
		$this->db->set("status",$status);
		$this->db->where("userid",$id);
		$this->db->update("tbluser");
	}
	public function insertuser($data)
	{
		$this->db->insert("tbluser",$data);
	}
}