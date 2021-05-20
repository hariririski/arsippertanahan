<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	function __construct() {
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->database();
			$this->load->model('M_pegawai');
	}
	public function index()
	{
			$data['data_pegawai'] = $this->M_pegawai->lihat();
			$this->load->view('data_pegawai',$data);
	}
	public function tambah()
	{
		$cek= $this->M_pegawai->add();
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url()."datapegawai';</script>");

		}else{
				echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Di Simpan');window.location.href='".base_url()."datapegawai';</script>");

	 }
	}



}
