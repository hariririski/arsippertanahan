<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cetak extends CI_Controller {

	function __construct() {
			parent::__construct();
			if (!$this->session->userdata("token")){
				   redirect('login/logout', 'refresh');
				}
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->database();
			//$this->load->model('M_cetak');
			$this->load->model('M_provinsi');
	}

	public function index(){
			$data['data_provinsi'] = $this->M_provinsi->lihat();
			$this->load->view('cetak_data_qr',$data);
	}





}
