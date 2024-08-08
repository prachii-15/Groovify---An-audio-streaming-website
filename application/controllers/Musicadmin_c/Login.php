<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function doLogin()
	{
		$this->load->model("musicadmin_m/AdminM","am");
		$cond=array(
			"username"=>$this->input->post("txtuname"),
			"password"=>$this->input->post("txtpwd")
		);
		$u=$this->am->login($cond);
		if($u==false)
		{
			$error=array(
				"errormsg"=>"invalid username and password", 
				"errortype"=>"login error"
			);
			$this->load->view('musicadmin_v/default/login', $error);
		}
		else
		{
			$_SESSION['uname']=$u->username;
			$_SESSION['uid']=$u->adminid;
			$_SESSION['propic']=$u->profilepic;
			redirect("Musicadmin_c/Displayadm_c/displayad");
		}
	}
}
?>