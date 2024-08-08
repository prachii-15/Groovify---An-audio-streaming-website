<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Displayalbum_c extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!isset($_SESSION['uid'])) 
		{
			redirect("Musicadmin_c/Admin");
		}
	}
	public function displayalbum()
	{
		$this->load->model("musicadmin_m/Displayalbum_m", "am");
		$bdata=$this->am->getalbuminfo();
		$k=array(
			"bdata"=>$bdata
		);
		$this->load->view("musicadmin_v/default/albumdis", $k);
		
	}
	public function blockunblock_c($id,$status)
{
	$this->load->model("musicadmin_m/Displayalbum_m", "am");
	if($status==0)
	{
		$status=1;
	}
	else
	{
		$status=0;
	}
	$this->am->blockunblock_m($id, $status);
	redirect("Musicadmin_c/Displayalbum_c/displayalbum");
	}
	public function loadaddalbum()
	{
		$this->load->view("musicadmin_v/default/addalbum");
	}
	public function addalbum()
	{
		$this->load->model("musicadmin_m/Displayalbum_m","bm");
        $data=array(
        	"name"=>$this->input->post("txtname"),
        	"type"=>$this->input->post("txttype"),
        	"releasedt"=>$this->input->post("txtreleasedt"),
        	"status"=>0, 
        	"description"=>$this->input->post("txtdescription") 
        );
		$this->bm->insertalbum($data);
		redirect("Musicadmin_c/Displayalbum_c/displayalbum");
	}

	public function albummoreinfo($id)
	{
		$this->load->model("musicadmin_m/Displayalbum_m", "am");
		$bdata=$this->am->getalbum($id);
		$g=array(
			"bdata"=>$bdata
		);
		// echo "<pre>";
		// print_r($g);
		// echo "</pre>";
		// die();
		$this->load->view("musicadmin_v/default/albummoreinfo",$g);
	}
}