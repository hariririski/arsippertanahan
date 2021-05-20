<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Waktu_pelayanan extends CI_Controller {

	function __construct() {
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->database();
			$this->load->model('M_waktu_pelayanan');
	}
	public function index()
	{
			$data['data_waktu'] = $this->M_waktu_pelayanan->lihat();
			$this->load->view('data_waktu',$data);
	}
	public function tambah()
	{
		$cek= $this->M_waktu_pelayanan->add();
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url()."datawaktupelayanan';</script>");

		}else{
				echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Di Simpan');window.location.href='".base_url()."datawaktupelayanan';</script>");

	 }
	}



}
