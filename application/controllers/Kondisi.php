<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kondisi extends CI_Controller {

	function __construct() {
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->database();
			$this->load->model('M_kondisi');
	}
	public function index()
	{
			$data['data_kondisi'] = $this->M_kondisi->lihat();
			$this->load->view('data_kondisi',$data);
	}
	public function tambah()
	{
		$cek= $this->M_kondisi->add();
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url()."datakondisi';</script>");

		}else{
				echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Di Simpan');window.location.href='".base_url()."datakondisi';</script>");

	 }
	}



}
