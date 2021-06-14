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
			$this->load->model('M_lemari');
	}

	public function qrcode_semua_lemari(){
			$data['data_lemari'] = $this->M_lemari->lihat2();
			$this->load->view('cetak_qrcode_semua_lemari',$data);
	}




}
