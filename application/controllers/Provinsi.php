<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provinsi extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->database();
		$this->load->model('MProvinsi');
	}
	public function index()
	{
		$data['dataProvinsi'] = $this->MProvinsi->lihat();
		$this->load->view('dataProvinsi',$data);
	}
	public function tambah()
	{
		$cek= $this->MProvinsi->add();
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.alert('Data Berhasil Di Simpan');window.location.href='".base_url()."dataprovinsi';</script>");

		}else{
			echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Berhasil Di Simpan');window.location.href='dataprovinsi';</script>");

		}
	}

	public function kota()
	{
		$data['dataProvinsi'] = $this->MProvinsi->lihat();
		$data['dataKota'] = $this->MProvinsi->lihatKota();
		$this->load->view('dataKota',$data);
	}
	public function tambahKota()
	{
		$cek= $this->MProvinsi->tambahKota();
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.alert('Data Berhasil Di Simpan');window.location.href='".base_url()."datakota';</script>");

		}else{
		echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Di Simpan');window.location.href='".base_url()."datakota';</script>");

		}


	}
}
