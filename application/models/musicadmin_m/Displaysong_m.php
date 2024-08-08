<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Displaysong_m extends CI_Model
{
	public function getsonginfo()
	{
		return $this->db->get('tblsong')->result();
	}
	public function blockunblock_m($id, $status)
	{
		$this->db->set("status",$status);
		$this->db->where("songid",$id);
		$this->db->update("tblsong");
	}
	public function insertsong($data)
	{
		$this->db->insert("tblsong",$data);
	}
	public function insertsongartist($data)
	{
		$this->db->insert("tblsongartist",$data);
	}
	public function getallalbum()
	{
		return $this->db->get("tblalbum")->result();
	}	
	public function getallcategory()
	{
		return $this->db->get("tblcategory")->result();
	}
	public function getallartist()
	{
		return $this->db->get("tblartist")->result();
	}
}