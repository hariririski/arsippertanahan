<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WaktuPelayanan extends CI_Controller {

	function __construct() {
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->database();
			$this->load->model('MWaktuPelayanan');
	}
	public function index()
	{
			$data['dataWaktu'] = $this->MWaktuPelayanan->lihat();
			$this->load->view('dataWaktu',$data);
	}
	public function tambah()
	{
		$cek= $this->MWaktuPelayanan->add();
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.alert('Data Berhasil Di Simpan');window.location.href='".base_url()."datawaktupelayanan';</script>");

		}else{
				echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Di Simpan');window.location.href='".base_url()."datawaktupelayanan';</script>");

	 }
	}



}
