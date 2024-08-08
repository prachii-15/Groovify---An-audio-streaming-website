<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Displaymood_c extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!isset($_SESSION['uid'])) 
		{
			redirect("Musicadmin_c/Admin");
		}
	}
	public function displaymood()
	{
		$this->load->model("musicadmin_m/Displaymood_m", "am");
		$bdata=$this->am->getmoodinfo();
		$k=array(
			"bdata"=>$bdata
		);
		$this->load->view("musicadmin_v/default/mooddis", $k);
		
	}
	public function loadaddmood()
	{
		$this->load->view("musicadmin_v/default/addmood");
	}
	public function addmood()
	{
		$config['upload_path']='./resources/image/';
		$config['allowed_types']='gif|jpg|png';
		$config['max_size']='1024';
		$config['max_width']='1100';
		$config['max_height']='786';
		$this->load->library('upload', $config);
		if($this->upload->do_upload('txtphoto'))
		{
			$adata=$this->upload->data();
		$this->load->model("musicadmin_m/Displaymood_m","bm");
        $data=array(
        	"title"=>$this->input->post("txttitle"),
        	
        	"description"=>$this->input->post("txtdescription"),
        	"image"=>$adata['file_name']
        );
		$this->bm->insertmood($data);
		redirect("Musicadmin_c/Displaymood_c/displaymood");
	}
}
}