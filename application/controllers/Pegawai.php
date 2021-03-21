<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	function __construct() {
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->database();
			$this->load->model('MPegawai');
	}
	public function index()
	{
			$data['dataPegawai'] = $this->MPegawai->lihat();
			$this->load->view('dataPegawai',$data);
	}
	public function tambah()
	{
		$cek= $this->MPegawai->add();
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.alert('Data Berhasil Di Simpan');window.location.href='".base_url()."datapegawai';</script>");

		}else{
				echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Di Simpan');window.location.href='".base_url()."datapegawai';</script>");

	 }
	}



}
