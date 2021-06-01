<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_tanah extends CI_Controller {

	function __construct() {
			parent::__construct();
			if (!$this->session->userdata("token")){
				   redirect('login/logout', 'refresh');
				}
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->database();
			$this->load->model('M_provinsi');
			$this->load->model('M_jenis_hak');
			$this->load->model('M_kondisi');
			$this->load->model('M_buku_tanah');
			$this->load->helper('string');

	}
	public function index()
	{

		$data['data_jenis_hak'] = $this->M_jenis_hak->lihat();
		$data['data_kondisi'] = $this->M_kondisi->lihat();
		$data['data_desa'] = $this->M_provinsi->data_desa_bundel();
		$data['desa_tabel'] = $this->M_provinsi->data_desa_buku_tanah();
		$this->load->view('data_buku_tanah',$data);
	}
	public function detail_buku_tanah_desa()
	{
		$kode_desa=$this->uri->segment('3');
		$data['data_buku_tanah'] = $this->M_buku_tanah->data_buku_tanah_desa($kode_desa);
		$this->load->view('detail_buku_tanah_desa',$data);
	}

	public function detail_buku_tanah()
	{
		$id_buku_tanah=$this->uri->segment('3');
		$data['data_buku_tanah'] = $this->M_buku_tanah->detail_buku_tanah($id_buku_tanah);
		$data['data_su_bt'] = $this->M_buku_tanah->detail_su_bt($id_buku_tanah);
		$data['data_warkah_bt'] = $this->M_buku_tanah->detail_warkah_bt($id_buku_tanah);
		$this->load->view('detail_buku_tanah',$data);
	}

	public function tambah()
	{
		$id_bundel = $this->input->post('id_bundel');
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
			$id_buku_tanah=$id;
			$cek= $this->M_buku_tanah->add($id_buku_tanah);
			if($cek>0){
					echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url()."buku_tanah/detail_buku_tanah/".$id_buku_tanah."';</script>");
			}else{
					echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Di Simpan');window.location.href='".base_url()."databukutanah';</script>");
		 	}
		}else{
					echo ("<script LANGUAGE='JavaScript'>window.alert('Bundel Tidak Ditemukan');window.location.href='".base_url()."databukutanah';</script>");
		}

	}
	public function data()
	{
		$data['data_jenis_hak'] = $this->M_jenis_hak->lihat();
		$data['data_kondisi'] = $this->M_kondisi->lihat();
		$data['data_desa'] = $this->M_provinsi->data_desa_bundel();
		$data['data_provinsi'] = $this->M_provinsi->lihat();
		$data['data_kota'] = $this->M_provinsi->lihat_kota();
		$data['data_kecamatan'] = $this->M_provinsi->lihat_kecamatan();
		$this->load->view('data_buku_tanah',$data);
	}

	function getBukuTanahSuratUkur(){
        $id=$this->input->get('id');
        $data=$this->M_buku_tanah->getBukuTanahSuratUkur($id);
        echo json_encode($data);
  }
	function getBukuTanahWarkah(){
        $id=$this->input->get('id');
        $data=$this->M_buku_tanah->getBukuTanahWarkah($id);
        echo json_encode($data);
  }


}
