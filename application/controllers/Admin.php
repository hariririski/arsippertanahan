<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->database();
			$this->load->model('MAdmin');
	}
	public function index()
	{
			$data['dataAdmin'] = $this->MAdmin->lihat();
			$this->load->view('dataAdmin',$data);
	}
	public function tambah()
	{
		$cek= $this->MAdmin->add();
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.alert('Data Berhasil Di Simpan');window.location.href='".base_url()."dataadmin';</script>");

		}else{
				echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Di Simpan');window.location.href='".base_url()."dataadmin';</script>");

	 }
	}



}
