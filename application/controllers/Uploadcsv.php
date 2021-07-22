<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uploadcsv extends CI_Controller {

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

			$this->load->view('uploadcsv');
	}

	public function bukutanah()
	{
		$sql1="SELECT kode_prov,id_prov from prov";
		$query1 = $this->db->query($sql1);
		$data1=$query1->result();


		$sql2="SELECT kode_kota,id_kota from kota";
 		$query2 = $this->db->query($sql2);
 		$data2=$query2->result();


		 $sql3="SELECT kode_kec,id_kec from kec";
  		$query3 = $this->db->query($sql3);
  		$data3=$query3->result();





		if ( isset($_POST['import'])) {

            $file = $_FILES['bukutanah']['tmp_name'];

			// Medapatkan ekstensi file csv yang akan diimport.
			$ekstensi  = explode('.', $_FILES['bukutanah']['name']);

			// Tampilkan peringatan jika submit tanpa memilih menambahkan file.
			if (empty($file)) {
				echo 'File tidak boleh kosong!';
			} else {
				// Validasi apakah file yang diupload benar-benar file csv.

				if (strtolower(end($ekstensi)) === 'csv' && $_FILES["bukutanah"]["size"] > 0) {

					$i = 0;
					$handle = fopen($file, "r");
					$values;
					$prov;
					$kota;
					$kec;
					$desa;
					while (($row = fgetcsv($handle, 2048))) {
						$i++;
						$data=explode(";",$row[0]);
						$pisahnohak=explode(".", $data[0]);
						//konvert id prov ke kode prov
						foreach ($data1 as $isi) {
							if($isi->id_prov==$pisahnohak[0]){
									$prov=$isi->kode_prov;
							}
						}

						foreach ($data2 as $isi) {
							if($isi->id_kota==$pisahnohak[1]){
									$kota=$isi->kode_kota;
							}
						}

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
						$pisahsu=explode("/", $data[1]);
						$pisahsu2=explode(".", $pisahsu[0]);
						$no_su=$pisahsu2[1];
						$tahun_su=$pisahsu[1];
						$nib=$pisahnohak[3];

						$id_buku_tanah=random_string('alnum',20);
						$id_surat_ukur=random_string('alnum',20);
						$admin= $this->session->userdata("nama_lengkap");
						$cekbukutanah= $this->M_uploadcsv->bukutanah($id_buku_tanah,$no_hak,$jenis_hak,$desa,$nib,$id_surat_ukur,$admin);
						if($cekbukutanah>0){
								// echo ($i."Berhasil Menambahkan BT".$no_hak);
								// echo "<br>";
								echo ".";
						}else{
								echo ($i."gagal Menambahkan BT ".$no_hak);
								echo "<br>";
					 	}
						$admin= $this->session->userdata("nama_lengkap");
						$ceksuratukur=$this->M_uploadcsv->suratukur($id_surat_ukur,$no_su,$tahun_su,$desa,$nib,$admin);
						if($ceksuratukur>0){
								// echo ($i."Berhasil Menambahkan SU ".$no_su);
								// echo "<br>";
								echo ".";
						}else{
								echo ($i."gagal Menambahkan SU".$no_su);
								echo "<br>";
					 	}
					}

					fclose($handle);


				} else {
					echo 'Format file tidak valid!';
				}
			}
        }
	}




}
