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
			$nama_lengkap=$this->session->userdata("nama_lengkap");

			$data['jumlah_buku_tanah'] = $this->M_admin->jumlah_buku_tanah($nama_lengkap);
			$data['jumlah_buku_tanah_valid'] = $this->M_admin->jumlah_buku_tanah_valid($nama_lengkap);
			$data['jumlah_warkah'] = $this->M_admin->jumlah_warkah($nama_lengkap);

			$data['jumlah_warkah_valid'] = $this->M_admin->jumlah_warkah_valid($nama_lengkap);
			$data['jumlah_surat_ukur'] = $this->M_admin->jumlah_surat_ukur($nama_lengkap);
			$data['jumlah_surat_ukur_valid'] = $this->M_admin->jumlah_surat_ukur_valid($nama_lengkap);

			$data['jumlah_buku_tanah_pinjam'] = $this->M_admin->pinjam_buku_tanah($nama_lengkap);
			$data['jumlah_surat_ukur_pinjam'] = $this->M_admin->pinjam_surat_ukur($nama_lengkap);
			$data['jumlah_warkah_pinjam'] = $this->M_admin->pinjam_warkah($nama_lengkap);

			$data['jumlah_buku_tanah_kembali'] = $this->M_admin->kembali_buku_tanah($nama_lengkap);
			$data['jumlah_surat_ukur_kembali'] = $this->M_admin->kembali_surat_ukur($nama_lengkap);
			$data['jumlah_warkah_kembali'] = $this->M_admin->kembali_warkah($nama_lengkap);

			$data['jumlah_buku_tanah_susun'] = $this->M_admin->susun_buku_tanah($nama_lengkap);
			$data['jumlah_surat_ukur_susun'] = $this->M_admin->susun_surat_ukur($nama_lengkap);
			$data['jumlah_warkah_susun'] = $this->M_admin->susun_warkah($nama_lengkap);


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

	public function edit(){
		$id_admin=$this->uri->segment('3');
		$data= $this->M_admin->edit($id_admin);
		echo json_encode($data);
	}
	public function simpan_edit(){
		$id_admin=$this->uri->segment('3');
		$nama=$this->uri->segment('4');
		$level=$this->uri->segment('5');
		$data= $this->M_admin->simpan_edit($id_admin,$nama,$level);
		if($data>0){
			$data=1;
		}else{
			$data=0;
		}
		echo json_encode($data);
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

	function ganti_password(){
		$id=$this->uri->segment('3');
		$password_lama=$this->uri->segment('4');
		$password_lama=md5($password_lama);
		$sql1="SELECT COUNT(admin.id_admin) as jumlah from admin where admin.id_admin=$id and password='$password_lama' ";
		$query1 = $this->db->query($sql1);
		$pinjam=$query1->result();
		foreach ($pinjam as $isi) {
				$jumlah=$isi->jumlah;
		 }
		 if($jumlah==1){
			$password_baru=$this->uri->segment('5');
	 		$password_baru=md5($password_baru);
	 		$cek=$this->M_admin->ganti_password($id,$password_baru);
			if($cek>0){
				$data=2;
			}else{
				$data=3;
			}
		}else{
			$data=1;
		}
		echo json_encode($data);
	}


}
