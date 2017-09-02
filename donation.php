<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donation extends CI_Controller {
	public function__construct(){
		parent::__construct();
		$this->load->model->('donation_model');
	}

public function index(){
	if(($this->session->donationdata('donation_name')!="")){
		//$this->welcome();
	}
	else{
		$data['title']='Home';
		$this->load->view('header_view','$data');
		$this->load->view('donation_view.php','$data');
		$this->load->view('footer_view','$data');
	}
	}
}
