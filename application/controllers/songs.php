<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class songs extends CI_Controller
    {
        public function index()
        {
            $this->load->model("songsM","h");
            $a=$this->h->getsongs();
            $t=array("ls"=>$a);
            $this->load->view("songs",$t);
        }

        public function search()
        {
            $this->load->model("songsM","h");
            $data=array(
                "title"=>$this->input->post("search")
            );
            $a=$this->h->getresult($data);
            $t=array("ls"=>$a);
            $this->load->view("songs",$t);
        }
    }
?>