<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Valid extends CI_Controller {

	function __construct() {
			parent::__construct();
			if (!$this->session->userdata("token")){
				   redirect('login/logout', 'refresh');
				}
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->database();
			$this->load->model('M_valid');
			$this->load->model('M_jenis_hak');
			$this->load->model('M_provinsi');
			$this->load->model('M_kondisi');
			$this->load->model('M_buku_tanah');
			$this->load->model('M_surat_ukur');
			$this->load->model('M_warkah');

	}
	public function index()
	{
		$data['data_jenis_hak'] = $this->M_jenis_hak->lihat();
		$data['data_desa'] = $this->M_provinsi->data_desa_bundel();
		$data['data_kondisi'] = $this->M_kondisi->lihat();
		$data['valid'] = $this->M_valid->data_desa_valid_bt();
		$data['valid1'] = $this->M_valid->data_desa_valid_su();
		$data['valid2'] = $this->M_valid->data_desa_valid_w();
		$this->load->view('data_valid',$data);
	}

	public function detail_buku_tanah_valid(){
		$kode_desa=$this->uri->segment('3');
		$data['data_kondisi'] = $this->M_kondisi->lihat();
		$data['data'] = $this->M_valid->data_buku_tanah_valid($kode_desa);
		$this->load->view('detail_buku_tanah_valid',$data);
	}

	public function detail_surat_ukur_valid(){
		$kode_desa=$this->uri->segment('3');
		$data['data'] = $this->M_valid->data_surat_ukur_valid($kode_desa);
		$this->load->view('detail_surat_ukur_valid',$data);
	}

	public function detail_warkah_valid(){
		$kode_desa=$this->uri->segment('3');
		$data['data'] = $this->M_valid->data_warkah_valid($kode_desa);
		$this->load->view('detail_warkah_valid',$data);
	}

	public function validqr(){
		$this->load->view('data_valid_qr');
	}

	public function detail_validqr(){
		$data['data_kondisi'] = $this->M_kondisi->lihat();
		$type=$this->uri->segment('3');
		$id=$this->uri->segment('4');
		if($type=="BT"){
			$data['valid'] = $this->M_buku_tanah->detail_buku_tanah($id);
		}
		else if ($type=="SU") {
			$data['valid'] = $this->M_surat_ukur->detail_surat_ukur($id);
		}
		else if ($type=="W") {
			$data['valid'] = $this->M_warkah->detail_warkah($id);
		}
		$this->load->view('detail_valid_qr',$data);
	}

	function cari_barcode_valid(){
		$type="BUKAN";
		$data="null";
		$barcode=$this->uri->segment('4');
		$barcode=str_replace('%20', '', $barcode);
		$admin=$this->uri->segment('3');
		$cek=strpos($barcode,"-");
		if($cek!=0){
			$pecah_barcode=explode("-",$barcode);
			$type=$pecah_barcode[0];
			$id=$pecah_barcode[1];
		}
			if($type=="BT"){
				$sql="SELECT *, COUNT(buku_tanah.id_buku_tanah)as jumlah from buku_tanah left join jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak left join desa on desa.kode_desa=buku_tanah.kode_desa where buku_tanah.id_buku_tanah='$id'";
				$query = $this->db->query($sql);
				$data=$query->result();
				foreach ($data as $isi) {
						if($isi->jumlah==1){
							$data="BT".";".$isi->no_hak.";".$isi->nama_desa.";".$isi->nama_jenis_hak.";".$isi->id_buku_tanah;
						}else{
							$data=null;
						}

				 }
		}
			elseif ($type=="SU") {
				$sql="SELECT *, COUNT(surat_ukur.id_surat_ukur)as jumlah from surat_ukur left join desa on desa.kode_desa=surat_ukur.kode_desa where surat_ukur.id_surat_ukur='$id'";
				$query = $this->db->query($sql);
				$data=$query->result();
				foreach ($data as $isi) {
					if($isi->jumlah==1){
						$data="SU".";".$isi->nomor.";".$isi->nama_desa.";".$isi->tahun.";".$isi->id_surat_ukur;
					}else{
						$data=null;
					}
				 }
			}
			elseif ($type=="W") {
				$sql="SELECT *, COUNT(warkah.id_warkah)as jumlah from warkah where warkah.id_warkah='$id'";
				$query = $this->db->query($sql);
				$data=$query->result();
				foreach ($data as $isi) {
					if($isi->jumlah==1){
						$data="W".";".$isi->nomor.";".$isi->tahun.";".$isi->id_warkah.";".$isi->id_warkah;
					}else{
						$data=null;
					}
				 }
			}else{
				$data=null;
			}
		 echo json_encode($data);
	}

	function validkan(){
		$valid=1;
		$status=1;
		$admin_valid=$this->uri->segment('3');
		$kondisi=$this->uri->segment('4');
		$kode_bundel=$this->uri->segment('5');
		// $pecah_bundel=explode("-",$kode_bundel);
		// if(isset($pecah_bundel[1])){
		// 	$kode_bundel=$pecah_bundel[1];
		// }else{
		// 	$kode_bundel=null;
		// }
		$id=$this->uri->segment('6');
		$type=$this->uri->segment('7');
		$tgl_valid=date('Y-m-d');
		$sql="SELECT count(id_bundel) as jumlah from bundel where id_bundel='$kode_bundel'";
		$query = $this->db->query($sql);
		$data=$query->result();
		foreach ($data as $isi) {
			$jumlah=$isi->jumlah;
		 }

		if($jumlah==1){
				if($type=="BT"){
					$cek= $this->M_valid->valid_bt($id,$kondisi,$admin_valid,$tgl_valid,$valid,$kode_bundel,$status);
					if($cek>0){
							$data=1;
					}else{
							$data=2;
				 	}
				 }
				else if ($type=="SU") {
					$cek= $this->M_valid->valid_su($id,$kondisi,$admin_valid,$tgl_valid,$valid,$kode_bundel,$status);
					if($cek>0){
							$data=1;
					}else{
							$data=2;
				 	}
				}
				else if ($type=="W") {
					$cek= $this->M_valid->valid_w($id,$kondisi,$admin_valid,$tgl_valid,$valid,$kode_bundel,$status);
					if($cek>0){
							$data=1;
					}else{
							$data=2;
				 	}
				}
		}else{
			$data=3;
		}
		echo json_encode($data);
	}

	function cari_buku_tanah_valid(){
		$kode_desa=$this->uri->segment('3');
		$id_jenis_hak=$this->uri->segment('4');
		$no_hak=$this->uri->segment('5');
		$sql="SELECT *, COUNT(buku_tanah.id_buku_tanah)as jumlah from buku_tanah left join jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak left join desa on desa.kode_desa=buku_tanah.kode_desa where buku_tanah.no_hak='$no_hak' and buku_tanah.id_jenis_hak=$id_jenis_hak and buku_tanah.kode_desa='$kode_desa'";
		$query = $this->db->query($sql);
		$data=$query->result();
		foreach ($data as $isi) {
				if($isi->jumlah==1){
					$data="BT".";".$isi->no_hak.";".$isi->nama_desa.";".$isi->nama_jenis_hak.";".$isi->id_buku_tanah;
				}else{
					$data=null;
				}

		 }
		 echo json_encode($data);
	}

	function cari_surat_ukur_valid(){
		$kode_desa=$this->uri->segment('3');
		$nomor=$this->uri->segment('4');
		$tahun=$this->uri->segment('5');
		$sql="SELECT *, COUNT(surat_ukur.id_surat_ukur)as jumlah from surat_ukur left join desa on desa.kode_desa=surat_ukur.kode_desa where surat_ukur.nomor='$nomor' and surat_ukur.tahun=$tahun and surat_ukur.kode_desa='$kode_desa'";
		$query = $this->db->query($sql);
		$data=$query->result();
		foreach ($data as $isi) {
			if($isi->jumlah==1){
				$data="SU".";".$isi->nomor.";".$isi->nama_desa.";".$isi->tahun.";".$isi->id_surat_ukur;
			}else{
				$data=null;
			}
		 }
		 echo json_encode($data);
	}

	function cari_warkah_valid(){
		$nomor=$this->uri->segment('3');
		$tahun=$this->uri->segment('4');
		$sql="SELECT *, COUNT(warkah.id_warkah)as jumlah from warkah where warkah.nomor='$nomor' and warkah.tahun=$tahun";
		$query = $this->db->query($sql);
		$data=$query->result();
		foreach ($data as $isi) {
			if($isi->jumlah==1){
				$data="W".";".$isi->nomor.";".$isi->tahun.";".$isi->id_warkah;
			}else{
				$data=null;
			}
		 }
		 echo json_encode($data);
	}


}
