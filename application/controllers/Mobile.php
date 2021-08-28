<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobile extends CI_Controller {

	function __construct() {
			parent::__construct();
			if (!$this->session->userdata("token")){
				   redirect('login/logout_mobile', 'refresh');
				}
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->database();
			$this->load->model('M_home');
			$this->load->model('M_kondisi');
			$this->load->model('M_pinjam');
	}

	public function home(){
			$data['jumlah_buku_tanah'] = $this->M_home->jumlah_buku_tanah();
			$data['jumlah_buku_tanah_valid'] = $this->M_home->jumlah_buku_tanah_valid();
			$data['jumlah_warkah'] = $this->M_home->jumlah_warkah();
			$data['jumlah_warkah_valid'] = $this->M_home->jumlah_warkah_valid();
			$data['jumlah_surat_ukur'] = $this->M_home->jumlah_surat_ukur();
			$data['jumlah_surat_ukur_valid'] = $this->M_home->jumlah_surat_ukur_valid();
			$data['pinjam_telat'] = $this->M_home->pinjam_telat();
			$data['aktifitas'] = $this->M_pinjam->data_aktifitas_m();
			$this->load->view('views_mobile/home_m',$data);
	}

	public function scan(){
			$this->load->view('views_mobile/scan');
	}
	public function detail_bt(){
			$this->load->view('views_mobile/detail_bt');
	}
	public function aktivitas(){
			$this->load->view('views_mobile/aktivitas');
	}
	public function cari(){
			$type="BUKAN";
			$data="null";
			$barcode=$this->uri->segment('3');
			$barcode=str_replace('%20', '', $barcode);
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
								$data=1;
							}else{
								$data=0;
							}

					 }
			}
				elseif ($type=="SU") {
					$sql="SELECT *, COUNT(surat_ukur.id_surat_ukur)as jumlah from surat_ukur left join desa on desa.kode_desa=surat_ukur.kode_desa where surat_ukur.id_surat_ukur='$id'";
					$query = $this->db->query($sql);
					$data=$query->result();
					foreach ($data as $isi) {
						if($isi->jumlah==1){
							$data=1;
						}else{
							$data=0;
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
				}
				elseif ($type=="L") {
				}
				elseif ($type=="B") {
				}
				elseif ($type=="Bndl") {
				}
				else{
					$data=0;
				}
			echo json_encode($data);
	}
	public function menu_sidebar(){
			$this->load->view('views_mobile/menu_sidebar');
	}
	public function menu_card_settings(){
			$this->load->view('views_mobile/menu_card_settings');
	}
	public function menu_peminjaman(){
			$data['data'] = $this->M_pinjam->data_pinjam_m();
			$this->load->view('views_mobile/menu_peminjaman',$data);
	}
	public function menu_pengembalian(){
			$data['data'] = $this->M_pinjam->data_kembali_m();
			$this->load->view('views_mobile/menu_pengembalian',$data);
	}
	public function menu_friends_transfer(){
			$this->load->view('views_mobile/menu_friends_transfer');
	}
	public function menu_exchange(){
			$this->load->view('views_mobile/menu_exchange');
	}
	public function menu_notifications(){
			$this->load->view('views_mobile/menu_notifications');
	}
	public function menu_highlights(){
			$this->load->view('views_mobile/menu_highlights');
	}

}
