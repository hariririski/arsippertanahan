<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {

	function __construct() {
			parent::__construct();
			if (!$this->session->userdata("token")){
				   redirect('login/logout', 'refresh');
				}
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->database();
			$this->load->model('M_cetak');
			$this->load->model('M_provinsi');
			$this->load->library('Ciqrcode');
			$this->load->library('Zend');
	}

	public function index(){
			$this->load->view('cetak_data_qr');
	}

	public function cetak_bt_desa(){
		require_once(APPPATH . 'third_party/fpdf/fpdf.php');
		error_reporting(E_ALL);
		$kode_desa=$this->uri->segment('3');
		$jumlah_bt=$this->uri->segment('4');
		if(is_dir("qr")){

		}else{
		 	mkdir("qr");
		}

		if(is_dir("qr/".$kode_desa)){

		}else{
		 	mkdir("qr/".$kode_desa);
		}

		$directory = getcwd()."/qr/".$kode_desa."/";

		$filecount = 0;
		$files2 = glob( $directory ."*" );
		if( $files2 ) {
				$filecount = count($files2);
		}
		$filecount . "files ";
		$jumlah_bt;
		if($filecount!=$jumlah_bt){
			$sql="SELECT * FROM buku_tanah left join jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak left join desa on desa.kode_desa=buku_tanah.kode_desa left join kec on kec.kode_kec=desa.kode_kec left join kota on kota.kode_kota=kec.kode_kota left join prov on prov.kode_prov=kota.kode_prov where buku_tanah.kode_desa='$kode_desa'";
			$query = $this->db->query($sql);
			$data=$query->result();
			foreach ($data as $isi) {
				QRcode::png(
				"BT-".$isi->id_buku_tanah,
				"qr/".$kode_desa."/BT-".$isi->id_buku_tanah.".png",
				$level = QR_ECLEVEL_H,
				$size  = 6,
				$margin = 2
			);
			}
		}

		$directory = getcwd()."/qr/".$kode_desa."/";

		$filecount = 0;
		$files2 = glob( $directory ."*" );
		if( $files2 ) {
				$filecount = count($files2);
		}
		$filecount . "files ";

		if($filecount==$jumlah_bt){
				$pdf = new FPDF('P','mm','A4');
				$pdf->SetFont('Times','',12);
				$pdf->AddPage();
				$sql1="SELECT * FROM buku_tanah left join jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak left join desa on desa.kode_desa=buku_tanah.kode_desa left join kec on kec.kode_kec=desa.kode_kec left join kota on kota.kode_kota=kec.kode_kota left join prov on prov.kode_prov=kota.kode_prov where buku_tanah.kode_desa='$kode_desa'";
				$query1 = $this->db->query($sql1);
				$data1=$query1->result();
				$i=0;$a;$b;$j;$x=0;
				$jumlah=count($data1);
				$nama_desa="";
				foreach ($data1 as $isi1) {
					$a[$i]=$isi1->id_buku_tanah;
					$b[$i]=$isi1->id_prov.".".$isi1->id_kota.".".$isi1->id_kec.".".$isi1->id_desa.".".$isi1->id_jenis_hak.".".$isi1->no_hak;
					$i++;
					$nama_desa=$isi1->nama_desa;
				}
				$x=10;
				$y=15;
				$w=30;
				$h=30;
				$baris=0;
				$kertas=0;
				$pdf -> Line(7.5, 13, 7.5, 293);
				$pdf->  Line(7.5, 13, 207.5, 13);

				$pdf -> Line(47.5, 13, 47.5, 293);
				$pdf->  Line(7.5, 53, 207.5, 53);

				$pdf -> Line(87.5, 13, 87.5, 293);
				$pdf->  Line(7.5, 93, 207.5, 93);

				$pdf -> Line(127.5, 13, 127.5, 293);
				$pdf->  Line(7.5, 133, 207.5, 133);

				$pdf -> Line(167.5, 13, 167.5, 293);
				$pdf->  Line(7.5, 173, 207.5, 173);

				$pdf -> Line(207.5, 13, 207.5, 293);
				$pdf->  Line(7.5, 213, 207.5, 213);

				$pdf->  Line(7.5, 253, 207.5, 253);
				$pdf->  Line(7.5, 293, 207.5, 293);
				$pdf->Text(10, 10,"Barcode Buku Tanah Desa ".$nama_desa);
				for($j=0; $j<$jumlah; $j++){
					$pdf->Image("qr/".$kode_desa."/BT-".$a[$j].".png", $x+2.5, $y, $w, $h, "png");
					$pdf->Text($x, $y+35,$b[$j]);
					$x=$x+40;$baris++;$kertas++;
					if($baris==5){
						$x=10;
						$y=$y+40;
						$baris=0;
					}
					$a[$j];
					$b[$j];
					if($kertas==35){
						$pdf->AddPage();
						$pdf -> Line(7.5, 8, 7.5, 288);
						$pdf->  Line(7.5, 8, 207.5, 8);

						$pdf -> Line(47.5, 8, 47.5, 288);
						$pdf->  Line(7.5, 48, 207.5, 48);

						$pdf -> Line(87.5, 8, 87.5, 288);
						$pdf->  Line(7.5, 88, 207.5, 88);

						$pdf -> Line(127.5, 8, 127.5, 288);
						$pdf->  Line(7.5, 128, 207.5, 128);

						$pdf -> Line(167.5, 8, 167.5, 288);
						$pdf->  Line(7.5, 168, 207.5, 168);

						$pdf -> Line(207.5, 8, 207.5, 288);
						$pdf->  Line(7.5, 208, 207.5, 208);

						$pdf->  Line(7.5, 248, 207.5, 248);
						$pdf->  Line(7.5, 288, 207.5, 288);
						$x=10;
						$y=10;
						$w=30;
						$h=30;
						$baris=0;
						$kertas=0;
					}
					//if($j==120){break;}
				}

		}
		$pdf->Output();
	}





}
