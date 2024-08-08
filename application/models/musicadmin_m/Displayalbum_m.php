<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Displayalbum_m extends CI_Model
{
	public function getalbuminfo()
	{
		return $this->db->get('tblalbum')->result();
	}
	public function blockunblock_m($id, $status)
	{
		$this->db->set("status",$status);
		$this->db->where("albumid",$id);
		$this->db->update("tblalbum");
	}
	
	
	public function insertalbum($data)
	{
		$this->db->insert("tblalbum",$data);
	}
	public function getalbum($id)
	{
		$this->db->from("tblsong s");
		$this->db->join("tblalbum a", "s.albumid=a.albumid");

		$this->db->where("s.albumid", $id);
		$this->db->select("a.*,a.description as ades,s.*,s.*,s.description as sdes");
		return $this->db->get()->result();
	}

	public function getalbummoreinfo($id)
	{
		$this->db->where("albumid",$id);
		return $this->db->get("tblalbum")->result()[0];
	}
}