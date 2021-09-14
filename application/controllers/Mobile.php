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
			$this->load->model('M_warkah');
			$this->load->model('M_surat_ukur');
			$this->load->model('M_kondisi');
			$this->load->model('M_pinjam');
			$this->load->model('M_provinsi');
			$this->load->model('M_jenis_hak');
			$this->load->model('M_kondisi');
			$this->load->model('M_buku_tanah');
			$this->load->model('M_pinjam');
			$this->load->helper('string');
	}
	public function index(){
			redirect(base_url('mobile/home'));
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
	public function detail_w(){
		$id_warkah=$this->uri->segment('3');
		$data['data_warkah'] = $this->M_warkah->detail_warkah($id_warkah);
		$data['histori'] = $this->M_pinjam->pinjam_warkah($id_warkah);
		$this->load->view('views_mobile/detail_w',$data);
	}
	public function detail_su(){
		$id_surat_ukur=$this->uri->segment('3');
		$data['data_surat_ukur'] = $this->M_surat_ukur->data_surat_ukur($id_surat_ukur);
		$data['histori'] = $this->M_pinjam->pinjam_surat_ukur($id_surat_ukur);
		$this->load->view('views_mobile/detail_su',$data);
	}
	public function detail_bt(){
			$id_buku_tanah=$this->uri->segment('3');
			$data['data_buku_tanah'] = $this->M_buku_tanah->detail_buku_tanah($id_buku_tanah);
			$data['data_su_bt'] = $this->M_buku_tanah->detail_su_bt($id_buku_tanah);
			$data['data_warkah_bt'] = $this->M_buku_tanah->detail_warkah_bt($id_buku_tanah);
			$id_buku_tanah;$id_warkah;$id_surat_ukur;
			$sql="SELECT buku_tanah.id_buku_tanah, surat_ukur.id_surat_ukur, warkah.id_warkah FROM buku_tanah left join warkah on warkah.id_buku_tanah=buku_tanah.id_buku_tanah  left join surat_ukur on surat_ukur.id_buku_tanah=buku_tanah.id_buku_tanah WHERE buku_tanah.id_buku_tanah='$id_buku_tanah'";
			$query = $this->db->query($sql);
			$hasil=$query->result();
			foreach ($hasil as $isi) {
					$id_buku_tanah=$isi->id_buku_tanah;
					$id_warkah=$isi->id_warkah;
					$id_surat_ukur=$isi->id_surat_ukur;
			 }
			$data['histori'] = $this->M_pinjam->histori($id_buku_tanah,$id_surat_ukur,$id_warkah);
			$this->load->view('views_mobile/detail_bt',$data);
	}

	public function detail_l(){
		$id=$this->uri->segment('3');
		$data['lemari'] = $this->M_lemari->detail_lemari($id);
		$this->load->view('views_mobile/detail_l',$data);
	}

	public function detail_b(){
		$id=$this->uri->segment('3');
		$this->load->view('views_mobile/detail_b');
	}

	public function detail_Bndl(){
		$id=$this->uri->segment('3');
		$this->load->view('views_mobile/detail_Bndl');
	}

	public function aktivitas(){
			$this->load->view('views_mobile/aktivitas');
	}
	public function keterlambatan(){
			$this->load->view('views_mobile/keterlambatan');
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
								$data="BT-".$id;
							}else{
								$data="NULL".$id;
							}

					 }
			}
				elseif ($type=="SU") {
					$sql="SELECT *, COUNT(surat_ukur.id_surat_ukur)as jumlah from surat_ukur left join desa on desa.kode_desa=surat_ukur.kode_desa where surat_ukur.id_surat_ukur='$id'";
					$query = $this->db->query($sql);
					$data=$query->result();
					foreach ($data as $isi) {
						if($isi->jumlah==1){
							if($isi->id_buku_tanah==null){
								$data="SU-".$id;
							}else{
								$data="BT-".$isi->id_buku_tanah;
							}
						}else{
							$data="NULL".$id;
						}
					 }
				}
				elseif ($type=="W") {
					$sql="SELECT *, COUNT(warkah.id_warkah)as jumlah from warkah where warkah.id_warkah='$id'";
					$query = $this->db->query($sql);
					$data=$query->result();
					foreach ($data as $isi) {
						if($isi->jumlah==1){
							if($isi->id_buku_tanah==null){
								$data="W-".$id;
							}else{
								$data="BT-".$isi->id_buku_tanah;
							}
						}else{
							$data="NULL".$id;
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
					$data="BUKAN"."-";
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
	public function menu_terlambat(){
			$this->load->view('views_mobile/menu_terlambat');
	}
	public function menu_susun(){
			$data['pinjam'] = $this->M_pinjam->data_susun();
			$this->load->view('views_mobile/menu_susun',$data);
	}
	public function menu_notifications(){
			$this->load->view('views_mobile/menu_notifications');
	}
	public function menu_highlights(){
			$this->load->view('views_mobile/menu_highlights');
	}

}
