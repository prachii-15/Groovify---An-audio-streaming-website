<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Displaysong_c extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!isset($_SESSION['uid'])) 
		{
			redirect("Musicadmin_c/Admin");
		}
	}
public function displaysong()
	{
		$this->load->model("musicadmin_m/Displaysong_m", "am");
		$bdata=$this->am->getsonginfo();
		$k=array(
			"bdata"=>$bdata
		);
		$this->load->view("musicadmin_v/default/songdis", $k);
	}
public function blockunblock_c($id,$status)
{
	$this->load->model("musicadmin_m/Displaysong_m", "am");
	if($status==0)
	{
		$status=1;
	}
	else
	{
		$status=0;
	}
	$this->am->blockunblock_m($id, $status);
	redirect("Musicadmin_c/Displaysong_c/displaysong");
	}
	public function loadaddsong()
	{
		$this->load->model("musicadmin_m/Displaysong_m", "am");
		$x=$this->am->getallalbum();
		$y=$this->am->getallcategory();
		$z=$this->am->getallartist();
		$temp=array(
			"al"=>$x,
			"cat"=>$y,
			"ar"=>$z
		);
		$this->load->view("musicadmin_v/default/addsong",$temp);
	}
	public function addsong()
	{
			$this->load->model("musicadmin_m/Displaysong_m","bm");
	        $img=$_FILES['txtphoto']['name'];
	        $song=$_FILES['songFile']['name'];
	        move_uploaded_file($_FILES['txtphoto']['tmp_name'],"./resources/image/".$img)/*or die("Cannot upload image")*/;
	        move_uploaded_file($_FILES['songFile']['tmp_name'],"./resources/songs/".$song)/*or die("Cannot upload songs")*/;

	        $data=array(
	        	"albumid"=>$this->input->post("selalbumid"),
	        	"categoryid"=>$this->input->post("selcatid"),
	        	"title"=>$this->input->post("txttitle"),
	        	"duration"=>$this->input->post("txtduration"),
	        	"status"=>$this->input->post("txtstatus"),
	        	"description"=>$this->input->post("txtdescription"), 
	        	"image"=>$img,
	        	"url"=>$song
	        );
			$this->bm->insertsong($data);
			$id=$this->db->insert_id();
			
			foreach ($this->input->post("aa") as $key => $value) {
				$data=array(
					"songid"=>$id,
					"artistid"=>$value
				);
				$this->bm->insertsongartist($data);
			}

		redirect("Musicadmin_c/Displaysong_c/displaysong");
	}
}
?>