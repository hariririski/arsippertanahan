<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_tanah extends CI_Controller {

	function __construct() {
			parent::__construct();
			if (!$this->session->userdata("token")){
				   redirect('login/logout', 'refresh');
				}
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->database();
			$this->load->model('M_provinsi');
			$this->load->model('M_jenis_hak');
			$this->load->model('M_kondisi');
			$this->load->model('M_buku_tanah');
			// $admin=$this->session->userdata('admin');
	}
	public function index()
	{

		$data['data_jenis_hak'] = $this->M_jenis_hak->lihat();
		$data['data_kondisi'] = $this->M_kondisi->lihat();
		$data['data_desa'] = $this->M_provinsi->data_desa_bundel();
		$data['desa_tabel'] = $this->M_provinsi->data_desa_buku_tanah();
		$this->load->view('data_buku_tanah',$data);
	}
	public function detail_buku_tanah_desa()
	{
		$kode_desa=$this->uri->segment('3');
		$data['data_buku_tanah'] = $this->M_buku_tanah->data_buku_tanah_desa($kode_desa);
		$this->load->view('detail_buku_tanah_desa',$data);
	}
	public function tambah()
	{
		$cek= $this->M_buku_tanah->add();
		// if($cek>0){
		// 	echo ("<script LANGUAGE='JavaScript'>window.alert('Data Berhasil Di Simpan');window.location.href='".base_url()."datakondisi';</script>");
	 //
		// }else{
		// 		echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Di Simpan');window.location.href='".base_url()."datakondisi';</script>");
	 //
	 // }
	}
	public function data()
	{
		$data['data_jenis_hak'] = $this->M_jenis_hak->lihat();
		$data['data_kondisi'] = $this->M_kondisi->lihat();
		$data['data_desa'] = $this->M_provinsi->data_desa_bundel();
		$data['data_provinsi'] = $this->M_provinsi->lihat();
		$data['data_kota'] = $this->M_provinsi->lihat_kota();
		$data['data_kecamatan'] = $this->M_provinsi->lihat_kecamatan();
		$this->load->view('data_buku_tanah',$data);
	}


}
