<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scan extends CI_Controller {

	function __construct() {
			parent::__construct();
			if (!$this->session->userdata("token")){
				   redirect('login/logout', 'refresh');
				}
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->database();
			$this->load->model('M_home');
			$this->load->model('M_kondisi');

	}
	public function index()
	{

		$this->load->view('scan');
	}



}
