<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Displaycat_c extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!isset($_SESSION['uid'])) 
		{
			redirect("Musicadmin_c/Admin");
		}
	}
	public function displaycat()
	{
		$this->load->model("musicadmin_m/Displaycat_m", "am");
		$bdata=$this->am->getcatinfo();
		$k=array(
			"bdata"=>$bdata
		);
		$this->load->view("musicadmin_v/default/catdis", $k);
		
	}
	public function loadaddcat()
	{
		$this->load->view("musicadmin_v/default/addcategory");
	}
	public function addcat()
	{
		$this->load->model("musicadmin_m/Displaycat_m","bm");
        $data=array(
        	"categoryname"=>$this->input->post("txtname") 
        );
		$this->bm->insertcat($data);
		redirect("Musicadmin_c/Displaycat_c/displaycat");
	}
}