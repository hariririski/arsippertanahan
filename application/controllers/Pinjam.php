<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjam extends CI_Controller {

	function __construct() {
			parent::__construct();
			if (!$this->session->userdata("token")){
				   redirect('login/logout', 'refresh');
				}
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->database();
			$this->load->model('M_pinjam');
			$this->load->model('M_pegawai');
			$this->load->model('M_provinsi');
			$this->load->model('M_jenis_hak');
	}

	public function data_peminjaman()
	{
		$data['data'] = $this->M_pinjam->data();
		$data['pegawai'] = $this->M_pegawai->lihat_aktif();
		$this->load->view('data_peminjaman',$data);
	}

	public function peminjaman()
	{
		$invoice=$this->uri->segment('3');
		$pecah_invoice=explode("-",$invoice);
		$nip=$pecah_invoice[1];
		$data['data_jenis_hak'] = $this->M_jenis_hak->lihat();
		$data['data_pegawai'] = $this->M_pegawai->lihat_nip($nip);
		$data['data_desa'] = $this->M_provinsi->data_desa_bundel();
		$this->load->view('peminjaman',$data);
	}

	public function tambah()
	{
			$tahun=date("Y");
			$bulan=date("m");
			$tanggal=date("d");
			$nip= $this->input->post('nip');
			$admin= $this->input->post('admin');
			$acak=rand(1,100);
			$invoice=$tanggal.$bulan.$tahun."-".$nip."-".$acak;
			$tgl_pinjam=$tahun."-".$bulan."-".$tanggal;
			$cek= $this->M_pinjam->tambah($invoice,$tgl_pinjam,$nip,$admin);
			if($cek>0){
					echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url()."pinjam/peminjaman/".$invoice."';</script>");
			}else{
					echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Di Simpan');window.location.href='".base_url()."datapinjam';</script>");
		 	}
	}

	function data_pinjam(){
		$invoice=$this->uri->segment('3');
		$data=$this->M_pinjam->list_pinjam($invoice);
		echo json_encode($data);
	}
	function hapus_list_pinjam(){
		$id_pinjam=$this->uri->segment('3');
		$data=$this->M_pinjam->hapus_list_pinjam($id_pinjam);
		echo json_encode($data);
	}
}
