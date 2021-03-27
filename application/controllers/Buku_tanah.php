<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_tanah extends CI_Controller {

	function __construct() {
			parent::__construct();
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
		$this->load->view('buku_tanah',$data);
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
		$data['dataProvinsi'] = $this->M_provinsi->lihat();
		$data['data_desa'] = $this->M_provinsi->lihat_desa();
		$data['data_kota'] = $this->M_provinsi->lihat_kota();
		$data['data_kecamatan'] = $this->M_provinsi->lihat_kecamatan();
		$this->load->view('data_buku_tanah',$data);
	}
	// public function pData()
	// {
	//
	// 	$data['data_jenis_hak'] = $this->M_jenis_hak->lihat();
	// 	$data['data_kondisi'] = $this->M_kondisi->lihat();
	// 	$data['data_desa'] = $this->M_provinsi->data_desa_bundel();
	// 	$data['dataProvinsi'] = $this->M_provinsi->lihat();
	// 	$data['data_desa'] = $this->M_provinsi->lihat_desa();
	// 	$this->load->view('pDataBukuTanah',$data);
	// }
	public function buku_tanah_barcode()
	{
		$data['data_jenis_hak'] = $this->M_jenis_hak->lihat();
		$data['data_kondisi'] = $this->M_kondisi->lihat();
		$data['data_desa'] = $this->M_provinsi->data_desa_bundel();
		$data['dataProvinsi'] = $this->M_provinsi->lihat();
		$data['data_kota'] = $this->M_provinsi->lihat_kota();
		$data['data_desa'] = $this->M_provinsi->lihat_desa();
		$data['data_kecamatan'] = $this->M_provinsi->lihat_kecamatan();
		$data['data_buku_tanah'] = $this->M_buku_tanah->cari_barcode();
		$this->load->view('p_barcode_data_buku_tanah',$data);
	}
}
