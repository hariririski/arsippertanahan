<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lemari extends CI_Controller {

	function __construct() {
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->database();
			$this->load->model('MLemari');
	}
	public function index()
	{
			$data['dataLemari'] = $this->MLemari->lihat();
			$this->load->view('dataLemari',$data);
	}
	public function tambah()
	{
		$cek= $this->MLemari->add();
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.alert('Data Berhasil di Simpan');window.location.href='".base_url()."datalemari';</script>");

		}else{
			echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal di Simpan');window.location.href='".base_url()."datalemari';</script>");

	 }
	}

	public function baris()
	{
			$data['dataLemari'] = $this->MLemari->lihat();
			$data['dataBaris'] = $this->MLemari->lihatBaris();
			$this->load->view('dataBaris',$data);
	}
	public function tambahBaris()
	{
		$cek= $this->MLemari->tambahBaris();
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.alert('Data Berhasil di Simpan');window.location.href='".base_url()."databaris';</script>");

		}else{
			echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal di Simpan');window.location.href='".base_url()."databaris';</script>");

	 }
	}



}
