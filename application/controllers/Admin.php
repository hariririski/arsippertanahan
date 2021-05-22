<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
			parent::__construct();
			if (!$this->session->userdata("token")){
				   redirect('login/logout', 'refresh');
				}
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->database();
			$this->load->model('M_admin');
	}
	public function index()
	{
			$data['data_admin'] = $this->M_admin->lihat();
			$this->load->view('data_admin',$data);
	}
	public function tambah()
	{
		$cek= $this->M_admin->add();
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.alert('Data Berhasil Di Simpan');window.location.href='".base_url()."dataadmin';</script>");

		}else{
				echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Di Simpan');window.location.href='".base_url()."dataadmin';</script>");

	 }
	}



}
