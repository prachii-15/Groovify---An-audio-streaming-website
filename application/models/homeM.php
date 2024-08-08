<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class homeM extends CI_Model
{
	public function getmostlikesong()
	{
		$this->db->from("tblsong s");
		$this->db->join("tblsonglikes l","s.songid=l.songid");
		$this->db->select("s.*,count('*') AS 'total_like'");
		$this->db->group_by("s.songid");
		$this->db->order_by("total_like","DESC");
		$this->db->limit(10);
		return $this->db->get()->result();
	}
	public function getrecentaddsong()
	{
		$this->db->order_by("songid","DESC");
		$this->db->limit(10);
		return $this->db->get("tblsong")->result();
	}
	public function getrecentaddalbum()
	{
		$this->db->order_by("albumid","DESC");
		$this->db->limit(5);
		return $this->db->get("tblalbum")->result();
	}
	public function getrecentaddartist()
	{
		$this->db->order_by("artistid","DESC");
		$this->db->limit(5);
		return $this->db->get("tblartist")->result();
	}
}
?>