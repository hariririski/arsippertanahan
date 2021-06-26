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
			$this->load->model('M_home');
	}

	public function index(){
			$data['data_admin'] = $this->M_admin->lihat();
			$this->load->view('data_admin',$data);
	}

	public function profil(){
			$data['jumlah_buku_tanah'] = $this->M_home->jumlah_buku_tanah();
			$data['jumlah_buku_tanah_valid'] = $this->M_home->jumlah_buku_tanah_valid();
			$data['jumlah_warkah'] = $this->M_home->jumlah_warkah();
			$data['jumlah_warkah_valid'] = $this->M_home->jumlah_warkah_valid();
			$data['jumlah_surat_ukur'] = $this->M_home->jumlah_surat_ukur();
			$data['jumlah_surat_ukur_valid'] = $this->M_home->jumlah_surat_ukur_valid();
			$this->load->view('profil',$data);
	}

	public function tambah(){
		$cek= $this->M_admin->add();
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url()."dataadmin';</script>");

		}else{
			echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Di Simpan');window.location.href='".base_url()."dataadmin';</script>");

	 }
	}

	function aktif_admin(){
		$id_admin=$this->uri->segment('3');
		$aktif=$this->uri->segment('4');
		$cek= $this->M_admin->aktif_admin($id_admin,$aktif);
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url()."dataadmin';</script>");
		}else{
			echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Di Simpan');window.location.href='".base_url()."dataadmin';</script>");
		}
	}

	function hapus_admin(){
		$id_admin=$this->uri->segment('3');
		$cek= $this->M_admin->hapus_admin($id_admin);
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url()."dataadmin';</script>");
		}else{
		echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Di Simpan');window.location.href='".base_url()."dataadmin';</script>");
		}
	}



}
