<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Code extends CI_Controller {

	function __construct() {
			parent::__construct();
			 $this->load->library('Pdf');
			if (!$this->session->userdata("token")){
				   redirect('login/logout', 'refresh');
				}
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->library('Ciqrcode');
			$this->load->library('Zend');

	}
	public function index()
	{

		error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL

			$pdf = new FPDF('L', 'mm','Letter');
			$pdf=new PDF();
			$pdf->AddPage();
			$pdf->SetFont('Arial');
			$kode ='11-1-10071-1121-1-087654-12345';
			$nama=base_url("Code/QRcode/".$kode);
			// Initialize a file URL to the variable
				$url = $nama;

				// Initialize the cURL session
				$ch = curl_init($url);

				// Inintialize directory name where
				// file will be save
				$dir = './';

				// Use basename() function to return
				// the base name of file
				$file_name = basename($url);

				// Save file into file location
				$save_file_loc = $dir . $file_name;

				// Open file
				$fp = fopen($save_file_loc, 'wb');

				// It set an option for a cURL transfer
				curl_setopt($ch, CURLOPT_FILE, $fp);
				curl_setopt($ch, CURLOPT_HEADER, 0);

				// Perform a cURL session
				curl_exec($ch);

				// Closes a cURL session and frees all resources
				curl_close($ch);

				// Close file
				fclose($fp);
			$pdf->WriteHTML('
			<html lang="en" class="light"><body>

			                                <div class="p-5" id="standard-editor">

			                                  <h3>Ini render QRcode</h3>
																				'.$nama.'
			                                  <img src="'.$nama.'" width="100%">


			                                </div>

			</body></html>

			');
			$pdf->Output();
		
	}
	public function QRcode($kodenya)
	{
		QRcode::png(
		$kodenya,
		$outfile = false,
		$level = QR_ECLEVEL_H,
		$size  = 6,
		$margin = 2
	);
	}
	public function Barcode($kodenya)
	{

		$this->zend->load('Zend/Barcode');
		Zend_Barcode::render('code128', 'image', array('text' => $kodenya));
	}



}
