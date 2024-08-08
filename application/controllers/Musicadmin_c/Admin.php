<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (isset($_SESSION['uid'])) 
		{
			redirect("Musicadmin_c/Displayadm_c/displayad");
		}
	}
	public function index()
	{
		$this->load->view('musicadmin_v/default/login');
	}
}
?>