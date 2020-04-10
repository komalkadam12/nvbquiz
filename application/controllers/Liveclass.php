<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Liveclass extends CI_Controller {

	 function __construct()
	 {
	   parent::__construct();
	   $this->load->database();
	  // $this->load->model("result_model");
	   $this->lang->load('basic', $this->config->item('language'));
		// redirect if not loggedin

	 }
	 public function index()
	{
		
	 	if(!$this->session->userdata('logged_in')){
			redirect('login');
			
		}
		$logged_in=$this->session->userdata('logged_in');
		if($logged_in['base_url'] != base_url()){
		$this->session->unset_userdata('logged_in');		
		redirect('login');
		}
			
			
		
		//$this->load->view('header',$data);
		$this->load->view('active_classes',$data);
		//$this->load->view('footer',$data);
	}
	


	 
}

?>





