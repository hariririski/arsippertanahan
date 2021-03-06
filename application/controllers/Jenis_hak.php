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



	function aktif_hak(){
		$id_jenis_hak=$this->uri->segment('3');
		$aktif=$this->uri->segment('4');
		$cek= $this->M_jenis_hak->aktif_jenis_hak($id_jenis_hak,$aktif);
		if($cek>0){
		echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url()."datajenishak';</script>");
		}else{
		echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal di Simpan');window.location.href='".base_url()."datajenishak';</script>");
		}
	}

	function hapus_hak(){
		$id_jenis_hak=$this->uri->segment('3');
		$cek= $this->M_jenis_hak->hapus_jenis_hak($id_jenis_hak);
		if($cek>0){
		echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url()."datajenishak';</script>");
		}else{
		echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal di Simpan');window.location.href='".base_url()."datajenishak';</script>");
		}
	}

	function edit_jenis_hak(){
        $id=$this->uri->segment('3');
        $data=$this->M_jenis_hak->detail_jenis_hak($id);
        echo json_encode($data);
  }

	function simpan_edit_jenis_hak(){
        $id_jenis_hak=$this->uri->segment('3');
        $nama_jenis_hak=$this->uri->segment('4');
        $keterangan=$this->uri->segment('5');
				$nama_jenis_hak=preg_replace('/%20/'," ", $nama_jenis_hak);
				$keterangan=preg_replace('/%20/'," ", $keterangan);
        $data=$this->M_jenis_hak->edit_jenis_hak($id_jenis_hak,$nama_jenis_hak,$keterangan);
				if($data>0){
					$data=1;
				}else{
					$data=0;
				}
        echo json_encode($data);
  }

}
