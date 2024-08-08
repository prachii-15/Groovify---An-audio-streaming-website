
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Displayartist_c extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!isset($_SESSION['uid'])) 
		{
			redirect("Musicadmin_c/Admin");
		}
	}
public function displayartist()
	{
		$this->load->model("musicadmin_m/Displayartist_m", "am");
		$bdata=$this->am->getartistinfo();
		$k=array(
			"bdata"=>$bdata
		);
		$this->load->view("musicadmin_v/default/artistdis", $k);
		
	}
	public function loadaddartist()
	{
		$this->load->view("musicadmin_v/default/addartist");
	}
	public function addartist()
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
		$this->load->model("musicadmin_m/Displayartist_m","bm");
        $data=array(
        	"name"=>$this->input->post("txtname"),
        	"photo"=>$adata['file_name'], 
        	"description"=>$this->input->post("txtdescription") 
        );
		$this->bm->insertartist($data);
		redirect("Musicadmin_c/Displayartist_c/displayartist");
	}
}
	public function moreinfo($id)
	{
		$this->load->model("musicadmin_m/Displayartist_m", "am");
		$bdata=$this->am->getartistsong($id);
		$g=array(
			"bdata"=>$bdata
		);
		$this->load->view("musicadmin_v/default/artistmoreinfo",$g);
	}
}