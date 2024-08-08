<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Displayuser_c extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!isset($_SESSION['uid'])) 
		{
			redirect("Musicadmin_c/Admin");
		}
	}
	public function displayuser()
	{
		$this->load->model("musicadmin_m/Displayuser_m", "am");
		$bdata=$this->am->getuserinfo();
		$k=array(
			"bdata"=>$bdata
		);
		$this->load->view("musicadmin_v/default/userdis", $k);

	}
	public function blockunblock_c($id,$status)
{
	$this->load->model("musicadmin_m/Displayuser_m", "am");
	if($status==0)
	{
		$status=1;
	}
	else
	{
		$status=0;
	}
	$this->am->blockunblock_m($id, $status);
	redirect("Musicadmin_c/Displayuser_c/displayuser");
	}
	public function loadadduser()
	{
		$this->load->view("musicadmin_v/default/adduser");
	}
	public function adduser()
	{
		$this->load->model("musicadmin_m/Displayuser_m","bm");
        $data=array(
        	"username"=>$this->input->post("txtuname"),
        	"password"=>$this->input->post("txtpwd"),
        	"email"=>$this->input->post("txtemail"),
        	"profilepic"=>$this->input->post("txtpropic"),
        	"contactno"=>$this->input->post("txtcontact"),
        	"registrationdt"=>$this->input->post("txtregdate"),
        	"dob"=>$this->input->post("txtdob"), 
        	"gender"=>$this->input->post("txtgender"), 
        	"status"=>$this->input->post("txtstatus") 
        );
		$this->bm->insertuser($data);
		redirect("Musicadmin_c/Displayuser_c/displayuser");
	}
}