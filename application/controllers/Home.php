<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
			parent::__construct();
			if (!$this->session->userdata("token")){
				   redirect('login/logout', 'refresh');
				}
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->database();
			// $this->load->model('M_Login');
			// $admin=$this->session->userdata('admin');
	}
	public function index()
	{
		// $data['proses_data'] = $this->M_lapor->proses();
		// $this->load->view('admin_beranda',$data);
		$this->load->view('home');
	}



}
