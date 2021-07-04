<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kondisi extends CI_Controller {

	function __construct() {
			parent::__construct();
			if (!$this->session->userdata("token")){
				   redirect('login/logout', 'refresh');
				}
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

	function aktif_kondisi(){
		$id_kondisi=$this->uri->segment('3');
		$aktif=$this->uri->segment('4');
		$cek= $this->M_kondisi->aktif_kondisi($id_kondisi,$aktif);
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url()."datakondisi';</script>");
		}else{
		echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Di Simpan');window.location.href='".base_url()."datakondisi';</script>");
		}
	}

	function hapus_kondisi(){
		$id_kondisi=$this->uri->segment('3');
		$cek= $this->M_kondisi->hapus_kondisi($id_kondisi);
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url()."datakondisi';</script>");
		}else{
		echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Di Simpan');window.location.href='".base_url()."datakondisi';</script>");
		}
	}

	function edit_kondisi(){
        $id=$this->uri->segment('3');
        $data=$this->M_kondisi->detail_kondisi($id);
        echo json_encode($data);
  }

	function simpan_edit_kondisi(){
        $id_kondisi=$this->uri->segment('3');
        $nama_kondisi=$this->uri->segment('4');
        $keterangan=$this->uri->segment('5');
				$nama_kondisi=preg_replace('/%20/'," ", $nama_kondisi);
				$keterangan=preg_replace('/%20/'," ", $keterangan);
        $data=$this->M_kondisi->edit_kondisi($id_kondisi,$nama_kondisi,$keterangan);
				if($data>0){
					$data=1;
				}else{
					$data=0;
				}
        echo json_encode($data);
  }


}
