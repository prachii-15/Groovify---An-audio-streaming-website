<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Displayadm_c extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!isset($_SESSION['uid'])) 
		{
			redirect("Musicadmin_c/Admin");
		}
	}
public function displayad()
	{
		$this->load->model("musicadmin_m/Displayadm_m", "am");
		$bdata=$this->am->getadmininfo();
		$g=array(
			"bdata"=>$bdata
		);
		$this->load->view("musicadmin_v/default/admindis", $g);
	}
	public function loadaddadmin()
	{
		$this->load->view("musicadmin_v/default/addadmin");
	}
	public function addadmin()
	{
		$config['upload_path']='./resources/image/';
		$config['allowed_types']='gif|jpg|png';
		$config['max_size']='1024';
		$config['max_width']='1100';
		$config['max_height']='786';
		$this->load->library('upload', $config);
		if($this->upload->do_upload('txtpropic'))
		{
			$adata=$this->upload->data();
		$this->load->model("musicadmin_m/Displayadm_m","bm");
        $data=array(
        	"name"=>$this->input->post("txtname"),
        	"username"=>$this->input->post("txtuname"),
        	"password"=>$this->input->post("txtpwd"),
        	"email"=>$this->input->post("txtemail"), 
        	"profilepic"=>$adata['file_name'] 
        );
		$this->bm->insertadmin($data);
		redirect("Musicadmin_c/Displayadm_c/displayad");
	}
}
}