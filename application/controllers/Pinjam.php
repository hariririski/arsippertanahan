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

	public function data_peminjaman(){
		$data['data'] = $this->M_pinjam->data();
		$data['pegawai'] = $this->M_pegawai->lihat_aktif();
		$this->load->view('data_peminjaman',$data);
	}

	public function peminjaman(){
		$invoice=$this->uri->segment('3');
		$pecah_invoice=explode("-",$invoice);
		$nip=$pecah_invoice[1];
		$data['data_waktu'] = $this->M_waktu_pelayanan->lihat_aktif();
		$data['data_jenis_hak'] = $this->M_jenis_hak->lihat();
		$data['data_pegawai'] = $this->M_pegawai->lihat_nip($nip);
		$data['data_desa'] = $this->M_provinsi->data_desa_bundel();
		$this->load->view('peminjaman',$data);
	}

	public function detail_peminjaman(){
		$invoice=$this->uri->segment('3');
		$pecah_invoice=explode("-",$invoice);
		$nip=$pecah_invoice[1];
		$data['data_waktu'] = $this->M_waktu_pelayanan->lihat_aktif();
		$data['data_jenis_hak'] = $this->M_jenis_hak->lihat();
		$data['data_pegawai'] = $this->M_pegawai->lihat_nip($nip);
		$data['data_desa'] = $this->M_provinsi->data_desa_bundel();
		$this->load->view('detail_peminjaman',$data);
	}

	public function tambah(){
			$tahun=date("Y");
			$bulan=date("m");
			$tanggal=date("d");
			$nip= $this->input->post('nip');
			$admin= $this->input->post('admin');
			$acak=rand(1,100);
			$invoice=$tanggal.$bulan.$tahun."-".$nip."-".$acak;
			$tgl_pinjam=$tahun."-".$bulan."-".$tanggal;
			$cek= $this->M_pinjam->tambah($invoice,$tgl_pinjam,$nip,$admin,1);
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

	function kembalikan(){
		$invoice=$this->uri->segment('3');
		$admin_kembali=$this->uri->segment('4');
		$id_pinjam=$this->uri->segment('5');
		$tgl_dikembalikan=date('Y-m-d');
		$status=2;
		$data;
		$jumlah_tgl_dikembalikan;
		// 1 dipinjam, 2 dikembalikan, 3 dkembalikan dan disusun di tempatnya
		$sql1="SELECT count(id_pinjam) as jumlah from pinjam where invoice='$invoice' and tgl_dikembalikan is null";
		$query1 = $this->db->query($sql1);
		$pinjam=$query1->result();
		foreach ($pinjam as $data) {
				$jumlah_tgl_dikembalikan=$data->jumlah;
		 }
		 if($jumlah_tgl_dikembalikan>2){
			 $status=3;
			 $tgl_dikembalikan=date('Y-m-d');
			 $admin_kembali=$this->uri->segment('4');
				$sql1="SELECT id_pinjam, id_buku_tanah, id_surat_ukur, id_warkah from pinjam where id_pinjam='$id_pinjam' and tgl_dikembalikan is null";
		 		$query1 = $this->db->query($sql1);
				$pinjam=$query1->result();
		 		foreach ($pinjam as $data) {
		 				$id_pinjam=$data->id_pinjam;
						$id_buku_tanah=$data->id_buku_tanah;
						$id_surat_ukur=$data->id_surat_ukur;
						$id_warkah=$data->id_warkah;
						$cek=$this->M_pinjam->kembalikan($id_pinjam,$status,$tgl_dikembalikan,$admin_kembali);
						if($cek>0){
							if($id_buku_tanah!=null){
								$this->M_buku_tanah->ubah_status($id_buku_tanah,3);
								$data=1;
							}elseif ($id_surat_ukur!=null) {
								$this->M_surat_ukur->ubah_status($id_surat_ukur,3);
								$data=1;
							}elseif ($id_warkah!=null) {
								$this->M_warkah->ubah_status($id_warkah,3);
								$data=1;
							}
		 	 			}else{
		 	 				$data=3;
		 	 		 	}
					}
		 }else if($jumlah_tgl_dikembalikan==2){
			 $id_pinjam;
			 $status=3;
			 $tgl_dikembalikan=date('Y-m-d');
			 $admin_kembali=$this->uri->segment('4');
				$sql1="SELECT id_pinjam, id_buku_tanah, id_surat_ukur, id_warkah from pinjam where invoice='$invoice' and tgl_dikembalikan is null";
		 		$query1 = $this->db->query($sql1);
				$pinjam=$query1->result();
		 		foreach ($pinjam as $data) {
		 				$id_pinjam=$data->id_pinjam;
						$id_buku_tanah=$data->id_buku_tanah;
						$id_surat_ukur=$data->id_surat_ukur;
						$id_warkah=$data->id_warkah;
						$cek=$this->M_pinjam->kembalikan($id_pinjam,$status,$tgl_dikembalikan,$admin_kembali);
						$this->M_pinjam->ubah_status_induk($invoice,3);
						if($cek>0){
							if($id_buku_tanah!=null){
								// 3 sudah dikembalikan namunm belum di susun
								$this->M_buku_tanah->ubah_status($id_buku_tanah,3);
							}elseif ($id_surat_ukur!=null) {
								$this->M_surat_ukur->ubah_status($id_surat_ukur,3);
							}elseif ($id_warkah!=null) {
								$this->M_warkah->ubah_status($id_warkah,3);
							}
	 	 					$data=2;
		 	 			}else{
		 	 				$data=3;
		 	 		 	}
		 		 }


		 }
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
				$durasi=$durasi.$data->durasi." days";
		 }
		 $tgl1 = date("Y-m-d");// pendefinisian tanggal awal
 	 	 $tgl_kembali = date('Y-m-d', strtotime($durasi, strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak .. hari
		 $data=$this->M_pinjam->update_waktu_list_pinjam($id_pinjam,$id_waktu,$tgl_kembali);
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
			 //$this->M_pinjam->tambah_bt($invoice,$tgl_pinjam,$nip,$admin_tambah,$id_surat_ukur);
			 //$this->M_surat_ukur->ubah_status($id_surat_ukur,2);
			 $data=1;
		 }else if($jumlah_surat_ukur==1 && $status==0){
			 $data=2;
		 }elseif ($jumlah_surat_ukur==1 && $status==2) {
		 	 $data=3;
		 }else if($jumlah_surat_ukur>1){
			 $data=4;
		 }else{
			 $data=5;
		 }
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
							 //2 sedang dipinjam
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
							 //2 sedang di pinjam
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
							 //1 tersedia 2 sedang dipinjam, 3 dikembalikan belum di susun
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
				 //2 sedang peminjaman
				 $cek=$this->M_pinjam->simpan_pinjam($invoice,2);
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
