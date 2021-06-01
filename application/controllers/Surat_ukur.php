<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_ukur extends CI_Controller {

	function __construct() {
			parent::__construct();
			if (!$this->session->userdata("token")){
				   redirect('login/logout', 'refresh');
				}
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->database();
			$this->load->helper('string');
			$this->load->model('M_provinsi');
			$this->load->model('M_kondisi');
			$this->load->model('M_surat_ukur');
			$this->load->model('M_buku_tanah');
	}

	public function index(){
		$data['data_provinsi'] = $this->M_provinsi->lihat();
		$data['data_desa'] = $this->M_provinsi->data_desa_bundel();
		$data['data_kondisi'] = $this->M_kondisi->lihat();
		$data['desa_tabel'] = $this->M_provinsi->data_desa_surat_ukur();
		$this->load->view('data_surat_ukur',$data);
	}
	public function tambah()
	{
		$id_bundel = $this->input->post('id_bundel');
		$id_buku_tanah = $this->input->post('id_buku_tanah');
		$sql="SELECT COUNT(id_bundel) as jumlah FROM `bundel` WHERE id_bundel='$id_bundel'";
		$query = $this->db->query($sql);
		$data=$query->result();
		foreach ($data as $isi) {
		$data = array(
				 'jumlah'  => $isi->jumlah,
			 );
		 }
		if($data['jumlah']!=0){
			$id=random_string('alnum',20);
			$id_surat_ukur=$id;
			$cek= $this->M_surat_ukur->add($id_surat_ukur);

		if($cek>0){
					if(isset($id_buku_tanah)){
						$cek2= $this->M_buku_tanah->link_su_bt($id_surat_ukur,$id_buku_tanah);
						if($cek2>0){
						echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url()."buku_tanah/detail_buku_tanah/".$id_buku_tanah."';</script>");
						}else{
							echo ("<script LANGUAGE='JavaScript'>window.alert('Data Berhasil Di Simpan, Tetapi Gagal Link Buku Tanah');window.location.href='".base_url()."datasuratukur';</script>");
						}
					}else{
						echo ("<script LANGUAGE='JavaScript'>window.alert('Data Berhasil Di Simpan, Tetapi Belum Link Buku Tanah');window.location.href='".base_url()."datasuratukur';</script>");
					}
			}else{
					echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Di Simpan');window.location.href='".base_url()."datasuratukur';</script>");
		 	}
		}else{
					echo ("<script LANGUAGE='JavaScript'>window.alert('Bundel Tidak Ditemukan');window.location.href='".base_url()."datasuratukur';</script>");
		}
	}



}
