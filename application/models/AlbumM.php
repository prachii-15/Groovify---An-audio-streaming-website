<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class AlbumM extends CI_Model
	{
		public function getAllArtists($aname=null)
		{
			if($aname==null)
				return $this->db->get("tblartist")->result();
			else
				return $this->db->where("name",$aname)->get("tblartist")->result();
		}

		public function getAllmoods()
		{
			return $this->db->get("tblmood")->result();
		}

		public function getMoodsInfo($id)
		{
			return $this->db->where('moodid',$id)->get('tblmood')->result()[0];
		}

		public function getLikedSongs()
		{
			return $this->db->from("tblsonglikes sl")->join("tblsong s","s.songid=sl.songid")->where("sl.userid",$this->session->uid)->get()->result();
		}
		public function getMoodSongs($id)
		{
			return $this->db->from("tblmoodsongs ms")->join("tblsong s","s.songid=ms.songid")->where("moodid",$id)->get()->result();
		}
		public function addComment($data)
		{
			$this->db->set($data)->insert("tblsongcomments");
		}

		public function getSongCommnets($id)
		{
			return $this->db->where("s.songid",$id)->from("tblsongcomments s")->join("tbluser u","u.userid=s.userid")->get()->result();
		}
		public function getArtistInfo($id)
		{
			return $this->db->where("artistid",$id)->get("tblartist")->result()[0];
		}

		public function getArtistsongs($id)
		{
			return $this->db->where("sa.artistid",$id)->from("tblsong s")->join("tblsongartist sa","sa.songid=s.songid")->get()->result();
		}
		public function getAllAlbums($aname)
		{
			if($aname==null)
				return $this->db->where("status",0)->get("tblalbum")->result();
			else
				return $this->db->where(["status"=>0,"name"=>$aname])->get("tblalbum")->result();
				

			return $this->db->where("status",0)->get("tblalbum")->result();
		}
		public function getAlbumInfo($id)
		{
			return $this->db->where("albumid",$id)->get("tblalbum")->result()[0];
		}

		public function getAlbumSongs($id)
		{
			return $this->db->where(["albumid"=>$id,"status"=>0])->get("tblsong")->result();
		}

		public function getSongArtist($id)
		{
			return $this->db->where("sa.songid",$id)->from("tblsongartist sa")->join("tblartist a","a.artistid=sa.artistid")->get()->result();
		}

		public function getSongInfo($sid)
		{
			return $this->db->where("s.songid",$sid)->from("tblsong s")->join("tblcategory c","c.categoryid=s.categoryid")->join("tblalbum a","a.albumid=s.albumid")->get()->result()[0];	
		}

	}
?>