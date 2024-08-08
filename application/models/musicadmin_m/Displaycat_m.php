<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Displaycat_m extends CI_Model
{
	public function getcatinfo()
	{
		return $this->db->get('tblcategory')->result();
	}
	public function insertcat($data)
	{
		$this->db->insert("tblcategory",$data);
	}
}