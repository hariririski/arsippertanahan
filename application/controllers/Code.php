<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Code extends CI_Controller {

	function __construct() {
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->library('Ciqrcode');
			$this->load->library('Zend');

	}
	public function index()
	{
			$this->load->view('qr');
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
