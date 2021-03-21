<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lemari extends CI_Controller {

	function __construct() {
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->database();
			$this->load->model('MLemari');
			$this->load->model('MProvinsi');
	}
	public function index()
	{
			$data['dataLemari'] = $this->MLemari->lihat();
			$this->load->view('dataLemari',$data);
	}
	function getBaris(){
        $id=$this->input->post('id');
        $data=$this->MLemari->getBaris($id);
        echo json_encode($data);
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

	public function bundel()
	{
			$data['dataDesa'] = $this->MProvinsi->dataDesaBundel();
			$data['dataLemari'] = $this->MLemari->lihat();
			$data['dataBaris'] = $this->MLemari->lihatBaris();
			$data['dataBundel'] = $this->MLemari->lihatBundel();
			$this->load->view('dataBundel',$data);
	}
	public function tambahBundel()
	{
		$cek= $this->MLemari->tambahBundel();
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.alert('Data Berhasil di Simpan');window.location.href='".base_url()."databundel';</script>");

		}else{
			echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal di Simpan');window.location.href='".base_url()."databundel';</script>");

	 }
	}



}
