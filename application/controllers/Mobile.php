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
			$this->load->view('views_mobile/home_m',$data);
	}

	public function scan(){
			$this->load->view('views_mobile/scan');
	}
	public function menu_sidebar(){
			$this->load->view('views_mobile/menu_sidebar');
	}
	public function menu_card_settings(){
			$this->load->view('views_mobile/menu_card_settings');
	}
	public function menu_peminjaman(){
			$data['data'] = $this->M_pinjam->data();
			$this->load->view('views_mobile/menu_peminjaman',$data);
	}
	public function menu_pengembalian(){
			$data['pinjam'] = $this->M_pinjam->data_all();
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
