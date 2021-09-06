<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tools extends CI_Controller {
	function __construct() {
			parent::__construct();
			if (!$this->session->userdata("token")){
				   redirect('login/logout', 'refresh');
				}
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->database();
			$this->load->model('M_uploadcsv');
			$this->load->helper('string');
	}

	public function index()
	{
		$sql="SELECT * From buku_tanah";
		$query = $this->db->query($sql);
		$buku_tanah=$query->result();
		$jumlah_buku_tanah;
		foreach ($buku_tanah as $isi) {
			$query=$this->db->query("UPDATE `surat_ukur` SET `id_buku_tanah`='$isi->id_buku_tanah' where surat_ukur.id_surat_ukur='$isi->id_surat_ukur'");
			if($query>0){
				echo ("ok");
			}else{
				echo ("Gagal");
			}
		 }
	}

	public function pencocokan_data()
	{

		 $sql3="SELECT kode_kec,id_kec from kec";
  		$query3 = $this->db->query($sql3);
  		$data3=$query3->result();

		if ( isset($_POST['upload'])) {

            $file = $_FILES['buku_tanah']['tmp_name'];

			// Medapatkan ekstensi file csv yang akan diimport.
			$ekstensi  = explode('.', $_FILES['buku_tanah']['name']);

			// Tampilkan peringatan jika submit tanpa memilih menambahkan file.
			if (empty($file)) {
				echo 'File tidak boleh kosong!';
			} else {
				// Validasi apakah file yang diupload benar-benar file csv.

				if (strtolower(end($ekstensi)) === 'csv' && $_FILES["buku_tanah"]["size"] > 0) {

					$i = 0;
					$handle = fopen($file, "r");
					$values;
					$prov;
					$kota;
					$kec;
					$desa;
					$baris=0;
					while (($row = fgetcsv($handle, 2048))) {
						$i++;
						$data=explode(";",$row[0]);
						$pisahnohak=explode(".", $data[0]);
						$pemilik_pertama=$data[3];

						foreach ($data3 as $isi) {
							if($isi->id_kec==$pisahnohak[2]){
									$kec=$isi->kode_kec;
							}
						}

						$sql4="SELECT kode_desa,id_desa,kode_kec from desa WHERE kode_kec='$kec'";
		 	  		$query4 = $this->db->query($sql4);
		 	  		$data4=$query4->result();
						foreach ($data4 as $isi) {
							if( $isi->id_desa==$pisahnohak[3]){
									$desa=$isi->kode_desa;
							}
						}

						$jenis_hak=$pisahnohak[4];
						$no_hak=$pisahnohak[5];
						$nib=sprintf('%05d',$data[2]);
						if($nib=="null"){
							$nib=null;
						}

						$admin= $this->session->userdata("nama_lengkap");

						// cari buku Tanah
								// Jika Ada
										// cek apakah SU sama dengan data
												// jika sama
														// update add_pemilik_pertama
												// jika berbeda update dengan data terbaru dan pemilik bertama
								// jika tidak ditemukan
										// insert buku tanah dan surat ukur dari data dan pemilik pertama
						$sql7="SELECT *,count(buku_tanah.id_buku_tanah)as jumlah, buku_tanah.id_buku_tanah as id_buku_tanah1 FROM buku_tanah left JOIn surat_ukur on surat_ukur.id_buku_tanah=buku_tanah.id_buku_tanah left JOIN desa on desa.kode_desa= buku_tanah.kode_desa left JOIN jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak left JOIN kec on kec.kode_kec=desa.kode_kec
									 WHERE buku_tanah.no_hak='$no_hak' and desa.id_desa='$pisahnohak[3]' and kec.id_kec='$pisahnohak[2]' and jenis_hak.id_jenis_hak='$jenis_hak'";
						$query7 = $this->db->query($sql7);
						$data7=$query7->result();
						foreach ($data7 as $isi) {
							if(!empty($isi->id_buku_tanah1)){
										echo $isi->no_hak." ditemukan";
										if($isi->pemilik_pertama==NULL){
												echo " ".$data[3]." ";
												$cekbukutanah=$this->M_uploadcsv->update_buku_tanah($isi->id_buku_tanah1,$data[3],$nib);
												if($cekbukutanah>0){
													echo " update pemilik";
												}else{
													echo " gagal update pemilik";
												}
											}else if($isi->pemilik_pertama==$isi->pemilik_pertama){
												echo " Pemilik Sama";
											}else{
												echo"Pemilik berbeda";
											}

										if($data[1]!="null")
										{
											$no_su=0;
											$tahun_su=0;
											$pisahsu=explode("/", $data[1]);
											$pisahsu2=explode(".", $pisahsu[0]);
											$jumlah=count($pisahsu);
											$no_su_sementara=$pisahsu2[1];
											$no_su_sementara=intval($no_su_sementara);
											$no_su=sprintf('%05d',$no_su_sementara);
											$tahun_su=$pisahsu[$jumlah-1];

											if($isi->nomor==$no_su && $isi->tahun==$tahun_su){
												echo " SU Sama <br>";
											}else{
												// $ceksuratukur=$this->M_uploadcsv->update_surat_ukur($isi->id_surat_ukur,$no_su,$tahun_su,$nib);
												// if($ceksuratukur>0){
												// 	echo " SU di perbaharui <br>";
												// }else{
												// 	echo " SU gagal diperbaharui <br>";
											 	// }
												echo " SU Berbeda <br>";
											}
										}


							}else{
											echo " tidak ditemukan ";

											$id_buku_tanah=random_string('alnum',20);
											$id_surat_ukur=random_string('alnum',20);
											$admin= $this->session->userdata("nama_lengkap");
											$cekbukutanah= $this->M_uploadcsv->bukutanah($id_buku_tanah,$no_hak,$jenis_hak,$desa,$nib,$id_surat_ukur,$admin,$data[3]);
											if($cekbukutanah>0){
													echo ("Berhasil Menambahkan BT".$no_hak."<br>");
											}else{
													echo ("gagal Menambahkan BT ".$no_hak."<br>");
										 	}

										if( $data[1]!="null"){
												$pisahsu=explode("/", $data[1]);
												$pisahsu2=explode(".", $pisahsu[0]);
												$jumlah=count($pisahsu);
												$no_su_sementara=$pisahsu2[1];
												$no_su_sementara=intval($no_su_sementara);
												$no_su=sprintf('%05d',$no_su_sementara);
												//echo $no_su_lain=$no_su." ";
												$tahun_su=$pisahsu[$jumlah-1];
												$ceksuratukur=$this->M_uploadcsv->suratukur($id_surat_ukur,$no_su,$tahun_su,$desa,$nib,$admin,$id_buku_tanah);
												if($ceksuratukur>0){
														echo ("Berhasil Menambahkan SU ".$no_su."<br>");
												}else{
														echo ("gagal Menambahkan SU".$no_su."<br>");
											 	}
											}

							}

						}
						$admin= $this->session->userdata("nama_lengkap");


					}

					fclose($handle);
				//	echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url()."home';</script>");


				} else {
					echo 'Format file tidak valid!';
				}
			}
        }
	}




}
