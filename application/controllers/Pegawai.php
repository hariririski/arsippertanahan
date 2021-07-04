<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	function __construct() {
			parent::__construct();
			if (!$this->session->userdata("token")){
				   redirect('login/logout', 'refresh');
				}
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

	function aktif_pegawai(){
		$nip=$this->uri->segment('3');
		$aktif=$this->uri->segment('4');
		$cek= $this->M_pegawai->aktif_pegawai($nip,$aktif);
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url()."datapegawai';</script>");
		}else{
		echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Di Simpan');window.location.href='".base_url()."datapegawai';</script>");
		}
	}

	function hapus_pegawai(){
		$nip=$this->uri->segment('3');
		$cek= $this->M_pegawai->hapus_pegawai($nip);
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url()."datapegawai';</script>");
		}else{
		echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Di Simpan');window.location.href='".base_url()."datapegawai';</script>");
		}
	}

	function edit_pegawai(){
        $nip=$this->uri->segment('3');
        $data=$this->M_pegawai->lihat_nip($nip);
        echo json_encode($data);
  }

	function simpan_edit_pegawai(){
        $nip=$this->uri->segment('3');
        $nama_lengkap=$this->uri->segment('4');
        $jabatan=$this->uri->segment('5');
        $jenis=$this->uri->segment('6');
				$nama_lengkap=preg_replace('/%20/'," ", $nama_lengkap);
				$jabatan=preg_replace('/%20/'," ", $jabatan);
        $data=$this->M_pegawai->edit_pegawai($nip,$nama_lengkap,$jabatan,$jenis);
				if($data>0){
					$data=1;
				}else{
					$data=0;
				}
        echo json_encode($data);
  }



}
