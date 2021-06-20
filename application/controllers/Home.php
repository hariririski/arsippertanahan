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
			$this->load->model('M_kondisi');

	}
	public function index()
	{
		$data['jumlah_buku_tanah'] = $this->M_home->jumlah_buku_tanah();
		$data['jumlah_warkah'] = $this->M_home->jumlah_warkah();
		$data['jumlah_surat_ukur'] = $this->M_home->jumlah_surat_ukur();
		$data['g1_buku_tanah'] = $this->M_home->kondisi_buku_tanah();
		$data['g1_warkah'] = $this->M_home->kondisi_warkah();
		$data['g1_surat_ukur'] = $this->M_home->kondisi_surat_ukur();
		$data['g2_jenis_hak'] = $this->M_home->jenis_hak();
		$data['data_kondisi'] = $this->M_kondisi->lihat();
		$data['pinjam_buku_tanah'] = $this->M_home->pinjam_buku_tanah();
		$data['pinjam_surat_ukur'] = $this->M_home->pinjam_surat_ukur();
		$data['pinjam_warkah'] = $this->M_home->pinjam_warkah();
		$data['tgl_pinjam'] = $this->M_home->tgl_pinjam();
		$data['pinjam_telat'] = $this->M_home->pinjam_telat();
		$this->load->view('home',$data);
	}



}
