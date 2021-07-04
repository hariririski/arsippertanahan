<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Waktu_pelayanan extends CI_Controller {

	function __construct() {
			parent::__construct();
			if (!$this->session->userdata("token")){
				   redirect('login/logout', 'refresh');
				}
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->database();
			$this->load->model('M_waktu_pelayanan');
	}

	public function index(){
			$data['data_waktu'] = $this->M_waktu_pelayanan->lihat();
			$this->load->view('data_waktu',$data);
	}

	public function tambah(){
		$cek= $this->M_waktu_pelayanan->add();
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url()."datawaktupelayanan';</script>");

		}else{
				echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Di Simpan');window.location.href='".base_url()."datawaktupelayanan';</script>");

	 }
	}

	function aktif_waktu(){
		$id_waktu=$this->uri->segment('3');
		$aktif=$this->uri->segment('4');
		$cek= $this->M_waktu_pelayanan->aktif_waktu($id_waktu,$aktif);
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url()."datawaktupelayanan';</script>");
		}else{
		echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Di Simpan');window.location.href='".base_url()."datawaktupelayanan';</script>");
		}
	}

	function hapus_waktu(){
		$id_waktu=$this->uri->segment('3');
		$cek= $this->M_waktu_pelayanan->hapus_waktu($id_waktu);
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url()."datawaktupelayanan';</script>");
		}else{
		echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Di Simpan');window.location.href='".base_url()."datawaktupelayanan';</script>");
		}
	}

	function edit_waktu_pelayanan(){
        $id=$this->uri->segment('3');
        $data=$this->M_waktu_pelayanan->detail_waktu_pelayanan($id);
        echo json_encode($data);
  }

	function simpan_edit_waktu_pelayanan(){
        $id_waktu_pelayanan=$this->uri->segment('3');
        $pelayanan=$this->uri->segment('4');
        $durasi=$this->uri->segment('5');
				$pelayanan=preg_replace('/%20/'," ", $pelayanan);
        $data=$this->M_waktu_pelayanan->edit_waktu_pelayanan($id_waktu_pelayanan,$pelayanan,$durasi);
				if($data>0){
					$data=1;
				}else{
					$data=0;
				}
        echo json_encode($data);
  }



}
