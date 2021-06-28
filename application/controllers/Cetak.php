<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {

	function __construct() {
			parent::__construct();
			if (!$this->session->userdata("token")){
				   redirect('login/logout', 'refresh');
				}
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->database();
			$this->load->model('M_cetak');
			$this->load->model('M_provinsi');
	}

	public function index(){
			$this->load->view('cetak_data_qr');
	}

	public function cetak_bt_desa(){
			$kode_desa=$this->uri->segment('3');
			$data['buku_tanah'] = $this->M_cetak->buku_tanah_desa($kode_desa);
			$this->load->view('cetak_qrcode_buku_tanah',$data);
	}





}
