<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cariarsip extends CI_Controller {

	function __construct() {
			parent::__construct();
			if (!$this->session->userdata("token")){
				   redirect('login/logout', 'refresh');
				}
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->database();
			$this->load->model('M_jenis_hak');
			$this->load->model('M_waktu_pelayanan');
			$this->load->model('M_provinsi');
	}

	public function index(){
			$data['data_waktu'] = $this->M_waktu_pelayanan->lihat_aktif();
			$data['data_jenis_hak'] = $this->M_jenis_hak->lihat();
			$data['data_desa'] = $this->M_provinsi->data_desa_bundel();
			$this->load->view('cari_arsip',$data);
	}

	function cari_barcode(){
		$type="BUKAN";
		$data="null";
		$barcode=$this->uri->segment('3');
		$barcode=str_replace('%20', '', $barcode);
		$admin=$this->uri->segment('4');
		$invoice=$this->uri->segment('3');
		$cek=strpos($barcode,"-");
		if($cek!=0){
		$pecah_barcode=explode("-",$barcode);
		$type=$pecah_barcode[0];
		$id=$pecah_barcode[1];
		}
			if($type=="BT"){
				$sql="SELECT * FROM `buku_tanah`LEFT JOIN desa on desa.kode_desa=buku_tanah.kode_desa LEFT JOIN kec on kec.kode_kec=desa.kode_kec left join kota on kota.kode_kota=kec.kode_kota left JOIN prov on prov.kode_prov=kota.kode_prov left join jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak LEFT JOIN bundel on bundel.id_bundel=buku_tanah.id_bundel LEFT JOIN baris on baris.id_baris=bundel.id_baris LEFT JOIN lemari on lemari.id_lemari=baris.id_lemari LEFT JOIN kondisi on kondisi.id_kondisi=buku_tanah.id_kondisi where buku_tanah.id_buku_tanah='$id'";
				$query = $this->db->query($sql);
				$data=$query->result();
			}
			elseif ($type=="SU") {
				$sql="SELECT * FROM `surat_ukur` LEFT JOIN desa on desa.kode_desa=surat_ukur.kode_desa LEFT JOIN bundel on bundel.id_bundel=surat_ukur.id_bundel LEFT JOIN kec on kec.kode_kec=desa.kode_kec left join buku_tanah on buku_tanah.id_buku_tanah=surat_ukur.id_buku_tanah left join jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak left join kondisi on kondisi.id_kondisi=surat_ukur.id_kondisi  LEFT join baris on baris.id_baris=bundel.id_baris left join lemari on lemari.id_lemari=baris.id_baris where surat_ukur.id_surat_ukur='$id'";
				$query = $this->db->query($sql);
				$data=$query->result();
			}
			elseif ($type=="W") {
				$sql="SELECT *, warkah.keterangan as kegiatan FROM `warkah` left join bundel on bundel.id_bundel=warkah.id_bundel left JOIN buku_tanah on buku_tanah.id_buku_tanah=warkah.id_buku_tanah LEFT JOIN desa on desa.kode_desa=buku_tanah.kode_desa LEFT JOIN kec on kec.kode_kec=desa.kode_kec left join kota on kota.kode_kota=kec.kode_kota left JOIN prov on prov.kode_prov=kota.kode_prov left join jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak left join kondisi on kondisi.id_kondisi=warkah.id_kondisi LEFT join baris on baris.id_baris=bundel.id_baris left join lemari on lemari.id_lemari=baris.id_baris where warkah.id_warkah='$id'";
				$query = $this->db->query($sql);
				$data=$query->result();
			}
		 echo json_encode($data);
	}

	function cari_buku_tanah(){
		$invoice=$this->uri->segment('3');
		$pecah_invoice=explode("-",$invoice);
		$nip=$pecah_invoice[1];
		$admin_tambah=$this->uri->segment('4');
		$kode_desa=$this->uri->segment('5');
		$id_jeni_hak=$this->uri->segment('6');
		$no_hak=$this->uri->segment('7');
		$tgl_pinjam=('Y-m-d');
		$id_buku_tanah;
		$status;
		$sql="SELECT count(id_buku_tanah)as jumlah, id_buku_tanah,status from buku_tanah where no_hak='$no_hak' and id_jenis_hak=$id_jeni_hak and kode_desa='$kode_desa' ";
		$query = $this->db->query($sql);
		$buku_tanah=$query->result();
		$jumlah_buku_tanah;
		foreach ($buku_tanah as $isi) {
				$jumlah_buku_tanah=$isi->jumlah;
				$id_buku_tanah=$isi->id_buku_tanah;
				$status=$isi->status;
		 }
		 if($jumlah_buku_tanah==1 && $status==1){
			 $this->M_pinjam->tambah_bt($invoice,$tgl_pinjam,$nip,$admin_tambah,$id_buku_tanah);
			 $this->M_buku_tanah->ubah_status($id_buku_tanah,2);
			 $data=1;
		 }else if($jumlah_buku_tanah==1 && $status==0){
			 $data=2;
		 }elseif ($jumlah_buku_tanah==1 && $status==2) {
		 	 $data=3;
		 }else if($jumlah_buku_tanah==1 && $status==3){
 			$data=6;
		 }else if($jumlah_buku_tanah>1){
			 $data=4;
		 }else{
			 $data=5;
		 }
		 echo json_encode($data);
	}

	function cari_surat_ukur(){
		$invoice=$this->uri->segment('3');
		$pecah_invoice=explode("-",$invoice);
		$nip=$pecah_invoice[1];
		$admin_tambah=$this->uri->segment('4');
		$kode_desa=$this->uri->segment('5');
		$nomor_surat_ukur=$this->uri->segment('6');
		$tahun_surat_ukur=$this->uri->segment('7');
		$tgl_pinjam=('Y-m-d');
		$id_surat_ukur;
		$status;
		$sql="SELECT count(id_surat_ukur)as jumlah, id_surat_ukur,status from buku_tanah where nomor='$nomor_surat_ukur' and tahun=$tahun_surat_ukur and kode_desa='$kode_desa' ";
		$query = $this->db->query($sql);
		$buku_tanah=$query->result();
		$jumlah_surat_ukur;
		foreach ($surat_ukur as $isi) {
				echo $jumlah_surat_ukur=$isi->jumlah;
				$id_surat_ukur=$isi->id_surat;
				$status=$isi->status;
		 }
		 if($jumlah_surat_ukur==1 && $status==1){
			 $this->M_pinjam->tambah_bt($invoice,$tgl_pinjam,$nip,$admin_tambah,$id_surat_ukur);
			 $this->M_surat_ukur->ubah_status($id_surat_ukur,2);
			 $data=1;
		 }else if($jumlah_surat_ukur==1 && $status==0){
			 $data=2;
		 }elseif ($jumlah_surat_ukur==1 && $status==2) {
		 	 $data=3;
		 }else if($jumlah_surat_ukur==1 && $status==3){
 			$data=6;
		 }else if($jumlah_surat_ukur>1){
			 $data=4;
		 }else{
			 $data=5;
		 }
		 echo json_encode($data);
	}

	function cari_warkah(){
		$invoice=$this->uri->segment('3');
		$pecah_invoice=explode("-",$invoice);
		$nip=$pecah_invoice[1];
		$admin_tambah=$this->uri->segment('4');
		$nomor_warkah=$this->uri->segment('5');
		$tahun_warkah=$this->uri->segment('6');
		$tgl_pinjam=('Y-m-d');
		$id_warkah;
		$status;
		$sql="SELECT count(id_warkah)as jumlah, id_warkah,status from warkah where nomor='$nomor_warkah' and tahun='$tahun_warkah' ";
		$query = $this->db->query($sql);
		$warkah=$query->result();
		$jumlah_warkah;
		foreach ($warkah as $isi) {
				$jumlah_warkah=$isi->jumlah;
				$id_warkah=$isi->id_warkah;
				$status=$isi->status;
		 }
		 if($jumlah_warkah==1 && $status==1){
			 $this->M_pinjam->tambah_warkah($invoice,$tgl_pinjam,$nip,$admin_tambah,$id_warkah);
			 $this->M_warkah->ubah_status($id_warkah,2);
			 $data=1;
		 }else if($jumlah_warkah==1 && $status==0){
			 $data=2;
		 }elseif ($jumlah_warkah==1 && $status==2) {
		 	 $data=3;
		 }else if($jumlah_warkah==1 && $status==3){
			 $data=6;
		 }else if($jumlah_warkah>1){
			 $data=4;
		 }else{
			 $data=5;
		 }
		 echo json_encode($data);
	}



}
