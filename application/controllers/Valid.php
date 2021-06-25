<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Valid extends CI_Controller {

	function __construct() {
			parent::__construct();
			if (!$this->session->userdata("token")){
				   redirect('login/logout', 'refresh');
				}
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->database();
			$this->load->model('M_valid');
			$this->load->model('M_jenis_hak');
			$this->load->model('M_provinsi');
			$this->load->model('M_kondisi');

	}
	public function index()
	{
		$data['data_jenis_hak'] = $this->M_jenis_hak->lihat();
		$data['data_desa'] = $this->M_provinsi->data_desa_bundel();
		$data['valid'] = $this->M_valid->data_desa_valid_bt();
		$data['valid1'] = $this->M_valid->data_desa_valid_su();
		$data['valid2'] = $this->M_valid->data_desa_valid_w();
		$this->load->view('data_valid',$data);
	}

	public function detail_buku_tanah_valid(){
		$kode_desa=$this->uri->segment('3');
		$data['data'] = $this->M_valid->data_buku_tanah_valid($kode_desa);
		$this->load->view('detail_buku_tanah_valid',$data);
	}

	public function detail_surat_ukur_valid(){
		$kode_desa=$this->uri->segment('3');
		$data['data'] = $this->M_valid->data_surat_ukur_valid($kode_desa);
		$this->load->view('detail_surat_ukur_valid',$data);
	}

	public function detail_warkah_valid(){
		$kode_desa=$this->uri->segment('3');
		$data['data'] = $this->M_valid->data_warkah_valid($kode_desa);
		$this->load->view('detail_warkah_valid',$data);
	}


}
