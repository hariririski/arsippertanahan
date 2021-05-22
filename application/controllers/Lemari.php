<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lemari extends CI_Controller {

	function __construct() {
			parent::__construct();
			if (!$this->session->userdata("token")){
				   redirect('login/logout', 'refresh');
				}
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->database();
			$this->load->model('M_lemari');
			$this->load->model('M_provinsi');
	}
	public function index()
	{
			$data['data_lemari'] = $this->M_lemari->lihat();
			$this->load->view('data_lemari',$data);
	}
	function getBaris(){
        $id=$this->input->post('id');
        $data=$this->M_lemari->getBaris($id);
        echo json_encode($data);
  }
	public function tambah()
	{
		$cek= $this->M_lemari->add();
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url()."datalemari';</script>");

		}else{
			echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal di Simpan');window.location.href='".base_url()."datalemari';</script>");

	 }
	}

	public function baris()
	{
			$data['data_lemari'] = $this->M_lemari->lihat();
			$data['data_baris'] = $this->M_lemari->lihat_baris();
			$this->load->view('data_baris',$data);
	}
	public function tambah_baris()
	{
		$cek= $this->M_lemari->tambah_baris();
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url()."databaris';</script>");

		}else{
			echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal di Simpan');window.location.href='".base_url()."databaris';</script>");

	 }
	}

	public function bundel()
	{
			$data['data_desa'] = $this->M_provinsi->data_desa_bundel();
			$data['data_lemari'] = $this->M_lemari->lihat();
			$data['data_baris'] = $this->M_lemari->lihat_baris();
			$data['data_bundel'] = $this->M_lemari->lihat_bundel();
			$this->load->view('data_bundel',$data);
	}
	public function tambah_bundel()
	{
		$cek= $this->M_lemari->tambah_bundel();
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url()."databundel';</script>");

		}else{
			echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal di Simpan');window.location.href='".base_url()."databundel';</script>");

	 }
	}



}
