<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Displayartist_m extends CI_Model
{
	public function getartistinfo()
	{
		return $this->db->get('tblartist')->result();
	}
	public function insertartist($data)
	{
		$this->db->insert("tblartist",$data);
	}
	public function getartistsong($id)
	{
		$this->db->from("tblartist a");
		$this->db->join("tblsongartist sa", "sa.artistid=a.artistid");
		$this->db->join("tblsong s","s.songid = sa.songid");
		$this->db->where("sa.artistid", $id);
		$this->db->select("a.*,a.description as ades,sa.*,s.*,s.description as sdes");
		return $this->db->get()->result();
	}

	public function getmoreinfo($id)
	{
		$this->db->where("artistid",$id);
		return $this->db->get("tblartist")->result()[0];
	}

}