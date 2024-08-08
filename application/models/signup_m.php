<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class signup_m extends CI_Model
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
	public function login($data)
	{
		$this->db->where($data);
		$x=$this->db->get("tbluser");
		if($x->num_rows()>0)
			return $x->result()[0];
		else
			return false;
	}
}