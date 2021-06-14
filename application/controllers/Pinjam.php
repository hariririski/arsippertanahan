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
			$this->load->model('M_waktu_pelayanan');
			$this->load->model('M_buku_tanah');
			$this->load->model('M_surat_ukur');
			$this->load->model('M_warkah');
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
		$data['data_waktu'] = $this->M_waktu_pelayanan->lihat_aktif();
		$data['data_jenis_hak'] = $this->M_jenis_hak->lihat();
		$data['data_pegawai'] = $this->M_pegawai->lihat_nip($nip);
		$data['data_desa'] = $this->M_provinsi->data_desa_bundel();
		$this->load->view('peminjaman',$data);
	}

	public function detail_peminjaman()
	{
		$invoice=$this->uri->segment('3');
		$pecah_invoice=explode("-",$invoice);
		$nip=$pecah_invoice[1];
		$data['data_waktu'] = $this->M_waktu_pelayanan->lihat_aktif();
		$data['data_jenis_hak'] = $this->M_jenis_hak->lihat();
		$data['data_pegawai'] = $this->M_pegawai->lihat_nip($nip);
		$data['data_desa'] = $this->M_provinsi->data_desa_bundel();
		$this->load->view('detail_peminjaman',$data);
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

	function detail_pinjam(){
		$invoice=$this->uri->segment('3');
		$data=$this->M_pinjam->detail_pinjam($invoice);
		echo json_encode($data);
	}
	function hapus_list_pinjam(){
		$id_pinjam=$this->uri->segment('3');
		//cari data buku tanah, SU, Warkah
		$id_buku_tanah;
		$id_surat_ukur;
		$id_warkah;
		$sql1="SELECT * from pinjam where id_pinjam='$id_pinjam'";
		$query1 = $this->db->query($sql1);
		$pinjam=$query1->result();
		foreach ($pinjam as $data) {
				$id_buku_tanah=$data->id_buku_tanah;
				$id_surat_ukur=$data->id_surat_ukur;
				$id_warkah=$data->id_warkah;
		 }
		 if(is_null($id_buku_tanah)==false){
			 //update status buku tanah menjadi tersedia
			 $data=$this->M_buku_tanah->ubah_status($id_buku_tanah,1);
		 }elseif (is_null($id_surat_ukur)==false) {
			 //update status surat ukur menjadi tersedia
			 $data=$this->M_surat_ukur->ubah_status($id_surat_ukur,1);
		 }elseif (is_null($id_warkah)==false) {
			 //update status warkah menjadi tersedia
			 $data=$this->M_warkah->ubah_status($id_warkah,1);
		 }
		 	// hapus list peminjaman
			$data=$this->M_pinjam->hapus_list_pinjam($id_pinjam);
		echo json_encode($data);
	}

	function update_layanan_pinjam(){
		$id_waktu=$this->uri->segment('3');
		$id_pinjam=$this->uri->segment('4');
		$sql1="SELECT * from waktu where id_waktu='$id_waktu'";
		$query1 = $this->db->query($sql1);
		$pinjam=$query1->result();
		$durasi="+";
		foreach ($pinjam as $data) {
				echo $durasi=$durasi.$data->durasi." days";
		 }
		 $tgl1 = date("Y-m-d");// pendefinisian tanggal awal
 	 	 $tgl_kembali = date('Y-m-d', strtotime($durasi, strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak .. hari
		 $data=$this->M_pinjam->update_waktu_list_pinjam($id_pinjam,$id_waktu,$tgl_kembali);
		echo json_encode($data);
	}
	function cari_barcode(){
		// ini_set('display_errors','off');
		$type="BUKAN";
		$data="null";
		$barcode=$this->uri->segment('5');
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
				$sql="SELECT * from buku_tanah where id_buku_tanah='$id'";
				$query = $this->db->query($sql);
				$buku_tanah=$query->result();
				$status=null;
				foreach ($buku_tanah as $isi) {
						$status=$isi->status;
				 }
				 switch ($status) {
				 	case 0:
				 		$data=2;
				 		//break;
				 		continue;

				 	case 1:
						//mengambil dari dari invoice
						$sql1="SELECT * from pinjam where invoice='$invoice'and pinjam.id_buku_tanah IS null and pinjam.id_surat_ukur IS null and pinjam.id_warkah IS NULL";
						$query1 = $this->db->query($sql1);
						$pinjam=$query1->result();
						$nip;
						foreach ($pinjam as $data) {
								$nip=$data->nip;
						 }
						$tahun=date("Y");
			 			$bulan=date("m");
			 			$tanggal=date("d");
						$tgl_pinjam=$tahun."-".$bulan."-".$tanggal;

						//memeriksa apakah sudah pernah menambahkan ke peminjaman sedang berlangsung
						$petintah="SELECT count(invoice)as jumlah from pinjam where invoice='$invoice'and id_buku_tanah='$id'";
						$query2 = $this->db->query($petintah);
						$cek=$query2->result();
						$hasil_cek;
						foreach ($cek as $data) {
								$hasil_cek=$data->jumlah;
						 }
						 if($hasil_cek==0){
							 //menambahkan buku_tanah dalam peminjaman
							 $this->M_pinjam->tambah_bt($invoice,$tgl_pinjam,$nip,$admin,$id);

							 //mengubah status bukutanah
							 $this->M_buku_tanah->ubah_status($id,2);

						 }else{
							 $data=3;
						 }

						break;

					case 2:
						$data=4;
						break;

					case 3:
						$data=5;
						break;

					case 4:
						$data=6;
						break;

				 	default:
				 		$data=1;
				 		break;
				 }

			}
			elseif ($type=="SU") {
				$sql="SELECT * from surat_ukur where id_surat_ukur='$id'";
				$query = $this->db->query($sql);
				$surat_ukur=$query->result();
				$status=null;
				foreach ($surat_ukur as $isi) {
						$status=$isi->status;
				 }
				 switch ($status) {
				 	case 0:
				 		$data=2;
				 		//break;
				 		continue;

				 	case 1:
						//mengambil dari dari invoice
						$sql1="SELECT * from pinjam where invoice='$invoice'and pinjam.id_buku_tanah IS null and pinjam.id_surat_ukur IS null and pinjam.id_warkah IS NULL";
						$query1 = $this->db->query($sql1);
						$pinjam=$query1->result();
						$nip;
						foreach ($pinjam as $data) {
								$nip=$data->nip;
						 }
						$tahun=date("Y");
			 			$bulan=date("m");
			 			$tanggal=date("d");
						$tgl_pinjam=$tahun."-".$bulan."-".$tanggal;

						//memeriksa apakah sudah pernah menambahkan ke peminjaman sedang berlangsung
						$perintah="SELECT count(invoice)as jumlah from pinjam where invoice='$invoice'and id_surat_ukur='$id'";
						$query2 = $this->db->query($perintah);
						$cek=$query2->result();
						$hasil_cek;
						foreach ($cek as $data) {
								$hasil_cek=$data->jumlah;
						 }
						 if($hasil_cek==0){
							 //menambahkan buku_tanah dalam peminjaman
							 $this->M_pinjam->tambah_su($invoice,$tgl_pinjam,$nip,$admin,$id);

							 //mengubah status bukutanah
							 $this->M_surat_ukur->ubah_status($id,2);

						 }else{
							 $data=3;
						 }

						break;

					case 2:
						$data=4;
						break;

					case 3:
						$data=5;
						break;

					case 4:
						$data=6;
						break;

				 	default:
				 		$data=1;
				 		break;
				 }
			}
			elseif ($type=="W") {
				$sql="SELECT * from warkah where id_warkah='$id'";
				$query = $this->db->query($sql);
				$warkah=$query->result();
				$status=null;
				foreach ($warkah as $isi) {
						$status=$isi->status;
				 }
				 switch ($status) {
				 	case 0:
				 		$data=2;
				 		//break;
				 		continue;

				 	case 1:
						//mengambil dari dari invoice
						$sql1="SELECT * from pinjam where invoice='$invoice'and pinjam.id_buku_tanah IS null and pinjam.id_surat_ukur IS null and pinjam.id_warkah IS NULL";
						$query1 = $this->db->query($sql1);
						$pinjam=$query1->result();
						$nip;
						foreach ($pinjam as $data) {
								$nip=$data->nip;
						 }
						$tahun=date("Y");
			 			$bulan=date("m");
			 			$tanggal=date("d");
						$tgl_pinjam=$tahun."-".$bulan."-".$tanggal;

						//memeriksa apakah sudah pernah menambahkan ke peminjaman sedang berlangsung
						$perintah="SELECT count(invoice)as jumlah from pinjam where invoice='$invoice'and id_warkah='$id'";
						$query2 = $this->db->query($perintah);
						$cek=$query2->result();
						$hasil_cek;
						foreach ($cek as $data) {
								$hasil_cek=$data->jumlah;
						 }
						 if($hasil_cek==0){
							 //menambahkan buku_tanah dalam peminjaman
							 $this->M_pinjam->tambah_warkah($invoice,$tgl_pinjam,$nip,$admin,$id);

							 //mengubah status bukutanah
							 $this->M_warkah->ubah_status($id,2);

						 }else{
							 $data=3;
						 }

						break;

					case 2:
						$data=4;
						break;

					case 3:
						$data=5;
						break;

					case 4:
						$data=6;
						break;

				 	default:
				 		$data=1;
				 		break;
				 }
			}else{
				$data=0;
			}
		 echo json_encode($data);
	}

	function simpan_invoice(){
		$invoice=$this->uri->segment('3');
		$data=null;
		$sql1="SELECT count(id_pinjam)as tgl_kosong FROM `pinjam` where invoice='$invoice' and tgl_kembali is null";
		$query1 = $this->db->query($sql1);
		$pinjam=$query1->result();
		$jumlah_kosong;
		foreach ($pinjam as $data) {
				$jumlah_kosong=$data->tgl_kosong;
		 }
		if($jumlah_kosong==1){
			$sql1="SELECT count(id_pinjam)as jumlah FROM `pinjam` where invoice='$invoice'";
			$query1 = $this->db->query($sql1);
			$pinjam=$query1->result();
			$jumlah;
			foreach ($pinjam as $data) {
					$jumlah=$data->jumlah;
			 }
			 if($jumlah>1){
				 $cek=$this->M_pinjam->simpan_pinjam($invoice,1);
				 if($cek>0){
		 				$data=3;
			 		}else{
						$data=4;
			 		}
			 }else{
				 $data=2;
			 }
		}elseif ($jumlah_kosong>1) {
			$data=1;
		}
		echo json_encode($data);
	}


	function hapus_invoice(){
		$invoice=$this->uri->segment('3');
		$sql1="DELETE FROM `pinjam` WHERE invoice='$invoice'";
		$cek = $this->db->query($sql1);
		if($cek>0){
			 $data=1;
		 }else{
			 $data=2;
		 }
		echo json_encode($data);
	}


}
