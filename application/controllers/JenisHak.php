<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JenisHak extends CI_Controller {

	function __construct() {
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->database();
			$this->load->model('MJenisHak');
	}
	public function index()
	{
			$data['dataJenisHak'] = $this->MJenisHak->lihat();
			$this->load->view('dataJenisHak',$data);
	}
	public function tambah()
	{
		$cek= $this->MJenisHak->add();
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.alert('Data Berhasil di Simpan');window.location.href='".base_url()."datajenishak';</script>");

		}else{
			echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal di Simpan');window.location.href='".base_url()."datajenishak';</script>");

	 }
	}



}
