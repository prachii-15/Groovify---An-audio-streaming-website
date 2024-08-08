<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Displaymood_m extends CI_Model
{
	public function getmoodinfo()
	{
		return $this->db->get('tblmood')->result();
	}
	public function insertmood($data)
	{
		$this->db->insert("tblmood",$data);
	}
}