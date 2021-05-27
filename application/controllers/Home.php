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
			$this->load->model('M_home');
		
	}
	public function index()
	{
		$data['jumlah_buku_tanah'] = $this->M_home->jumlah_buku_tanah();
		$this->load->view('home',$data);
	}



}
