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
			$this->load->model('M_pinjam');
			$this->load->helper('string');

	}
	public function index(){

		$data['data_jenis_hak'] = $this->M_jenis_hak->lihat();
		$data['data_kondisi'] = $this->M_kondisi->lihat();
		$data['data_desa'] = $this->M_provinsi->data_desa_bundel();
		$data['desa_tabel'] = $this->M_provinsi->data_desa_buku_tanah();
		$this->load->view('data_buku_tanah',$data);
	}

	public function data_link(){

		$data['data_jenis_hak'] = $this->M_jenis_hak->lihat();
		$data['data_kondisi'] = $this->M_kondisi->lihat();
		$data['data_desa'] = $this->M_provinsi->data_desa_bundel();
		$data['desa_tabel'] = $this->M_provinsi->data_desa_buku_tanah();
		$this->load->view('data_link',$data);
	}

	public function detail_buku_tanah_desa(){
		$kode_desa=$this->uri->segment('3');
		$data['data_buku_tanah'] = $this->M_buku_tanah->data_buku_tanah_desa($kode_desa);
		$this->load->view('detail_buku_tanah_desa',$data);
	}

	public function detail_buku_tanah(){
		$id_buku_tanah=$this->uri->segment('3');
		$data['data_buku_tanah'] = $this->M_buku_tanah->detail_buku_tanah($id_buku_tanah);
		$data['data_su_bt'] = $this->M_buku_tanah->detail_su_bt($id_buku_tanah);
		$data['data_warkah_bt'] = $this->M_buku_tanah->detail_warkah_bt($id_buku_tanah);
		$id_buku_tanah;$id_warkah;$id_surat_ukur;
		$sql="SELECT buku_tanah.id_buku_tanah, surat_ukur.id_surat_ukur, warkah.id_warkah FROM buku_tanah left join warkah on warkah.id_buku_tanah=buku_tanah.id_buku_tanah WHERE buku_tanah.id_buku_tanah='$id_buku_tanah'";
		$query = $this->db->query($sql);
		$hasil=$query->result();
		foreach ($hasil as $isi) {
				$id_buku_tanah=$isi->id_buku_tanah;
				$id_warkah=$isi->id_warkah;
				$id_surat_ukur=$isi->id_surat_ukur;
		 }
		$data['histori'] = $this->M_pinjam->histori($id_buku_tanah,$id_surat_ukur,$id_warkah);
		$this->load->view('detail_buku_tanah',$data);
	}

	public function tambah(){
		$id_bundel = $this->input->post('id_bundel');
		$pecah_bundel=explode("-",$id_bundel);
		if(isset($pecah_bundel[1])){
			$id_bundel=$pecah_bundel[1];
		}else{
			$id_bundel=null;
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
			$id_buku_tanah=$id;
			$admin= $this->session->userdata("nama_lengkap");
			$status=1;
			$valid=1;
			$admin_tambah=$admin;
			$admin_valid=	$admin;
			$cek= $this->M_buku_tanah->add($id_buku_tanah,$admin_tambah,$id_bundel,$admin_valid,$status,$valid);
			if($cek>0){
					echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url()."buku_tanah/detail_buku_tanah/".$id_buku_tanah."';</script>");
			}else{
					echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Di Simpan');window.location.href='".base_url()."databukutanah';</script>");
		 	}
		}else{
					echo ("<script LANGUAGE='JavaScript'>window.alert('Bundel Tidak Ditemukan');window.location.href='".base_url()."databukutanah';</script>");
		}

	}

	public function data(){
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
