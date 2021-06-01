<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_ukur extends CI_Controller {

	function __construct() {
			parent::__construct();
			if (!$this->session->userdata("token")){
				   redirect('login/logout', 'refresh');
				}
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->database();
			$this->load->helper('string');
			$this->load->model('M_provinsi');
			$this->load->model('M_kondisi');
	}

	public function index(){
		$data['data_provinsi'] = $this->M_provinsi->lihat();
		$data['data_desa'] = $this->M_provinsi->data_desa_bundel();
		$data['data_kondisi'] = $this->M_kondisi->lihat();
		$this->load->view('data_surat_ukur',$data);
	}
	public function data_peminjaman()
	{
		// $data['proses_data'] = $this->M_lapor->proses();
		// $this->load->view('admin_beranda',$data);
		$this->load->view('data_peminjaman');
	}



}
