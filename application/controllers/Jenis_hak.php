<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_hak extends CI_Controller {

	function __construct() {
			parent::__construct();
			if (!$this->session->userdata("token")){
				   redirect('login/logout', 'refresh');
				}
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->database();
			$this->load->model('M_jenis_hak');
	}
	public function index()
	{
			$data['data_jenis_hak'] = $this->M_jenis_hak->lihat();
			$this->load->view('data_jenis_hak',$data);
	}
	public function tambah()
	{
		$cek= $this->M_jenis_hak->add();
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url()."datajenishak';</script>");

		}else{
			echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal di Simpan');window.location.href='".base_url()."datajenishak';</script>");

	 }
	}



}
