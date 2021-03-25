<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BukuTanah extends CI_Controller {

	function __construct() {
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->database();
			$this->load->model('MProvinsi');
			$this->load->model('MJenisHak');
			$this->load->model('MKondisi');
			$this->load->model('MBukuTanah');
			// $admin=$this->session->userdata('admin');
	}
	public function index()
	{

		$data['dataJenisHak'] = $this->MJenisHak->lihat();
		$data['dataKondisi'] = $this->MKondisi->lihat();
		$data['dataDesa'] = $this->MProvinsi->dataDesaBundel();
		$this->load->view('bukuTanah',$data);
	}
	public function tambah()
	{
		$cek= $this->MBukuTanah->add();
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

		$data['dataJenisHak'] = $this->MJenisHak->lihat();
		$data['dataKondisi'] = $this->MKondisi->lihat();
		$data['dataDesa'] = $this->MProvinsi->dataDesaBundel();
		$data['dataProvinsi'] = $this->MProvinsi->lihat();
		$data['dataDesa'] = $this->MProvinsi->lihatDesa();
		$data['dataKota'] = $this->MProvinsi->lihatKota();
		$data['dataKecamatan'] = $this->MProvinsi->LihatKecamatan();
		$this->load->view('dataBukuTanah',$data);
	}
	// public function pData()
	// {
	//
	// 	$data['dataJenisHak'] = $this->MJenisHak->lihat();
	// 	$data['dataKondisi'] = $this->MKondisi->lihat();
	// 	$data['dataDesa'] = $this->MProvinsi->dataDesaBundel();
	// 	$data['dataProvinsi'] = $this->MProvinsi->lihat();
	// 	$data['dataDesa'] = $this->MProvinsi->lihatDesa();
	// 	$this->load->view('pDataBukuTanah',$data);
	// }
	public function bukuTanahBarcode()
	{
		$data['dataJenisHak'] = $this->MJenisHak->lihat();
		$data['dataKondisi'] = $this->MKondisi->lihat();
		$data['dataDesa'] = $this->MProvinsi->dataDesaBundel();
		$data['dataProvinsi'] = $this->MProvinsi->lihat();
		$data['dataKota'] = $this->MProvinsi->lihatKota();
		$data['dataDesa'] = $this->MProvinsi->lihatDesa();
		$data['dataBukuTanah'] = $this->MBukuTanah->cariBarcode();
		$this->load->view('pBarcodeDataBukuTanah',$data);
	}
}
