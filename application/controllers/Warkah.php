<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Warkah extends CI_Controller {

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
			$this->load->model('M_warkah');
			$this->load->model('M_pinjam');
	}
	public function index(){
		$data['data_provinsi'] = $this->M_provinsi->lihat();
		$data['data_desa'] = $this->M_provinsi->data_desa_bundel();
		$data['data_kondisi'] = $this->M_kondisi->lihat();
		$data['data'] = $this->M_provinsi->data_desa_warkah();
		$this->load->view('data_warkah',$data);
	}
	public function tambah()
	{
		$id_bundel = $this->input->post('id_bundel');
		$pecah_bundel=explode("-",$id_bundel);
		if(isset($pecah_bundel[1])){
			$id_bundel=$pecah_bundel[1];
		}else{
			$id_bundel=null;
		}
		$id_buku_tanah = $this->input->post('id_buku_tanah');
		if(isset($id_buku_tanah)){

		}else{
				$id_buku_tanah=null;
		}
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
			$id_warkah=$id;
			$cek= $this->M_warkah->add($id_warkah,$id_buku_tanah);

		if($cek>0){
					if(!empty($id_buku_tanah)){
						echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url()."buku_tanah/detail_buku_tanah/".$id_buku_tanah."';</script>");
					}else{
						echo ("<script LANGUAGE='JavaScript'>window.alert('Data Berhasil Di Simpan, Tetapi Belum Link Buku Tanah');window.location.href='".base_url()."datawarkah';</script>");
					}
			}else{
					echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Di Simpan');window.location.href='".base_url()."datawarkah';</script>");
			}
		}else{
					echo ("<script LANGUAGE='JavaScript'>window.alert('Bundel Tidak Ditemukan');window.location.href='".base_url()."datawarkah';</script>");
		}
	}

	public function detail_warkah_desa(){
		$tahun=$this->uri->segment('3');
		$data['data_warkah'] = $this->M_warkah->data_warkah_desa($tahun);
		$this->load->view('detail_warkah_desa',$data);
	}

	public function detail_warkah()
	{
		$id_warkah=$this->uri->segment('3');
		$data['data_warkah'] = $this->M_warkah->detail_warkah($id_warkah);
		$data['histori'] = $this->M_pinjam->pinjam_warkah($id_warkah);
		$this->load->view('detail_warkah',$data);
	}


}
