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
			$this->load->model('M_admin');
			$this->load->model('M_home');
	}

	public function home(){
			$this->load->view('views_mobile/home');
	}

	public function menu_sidebar(){
			$this->load->view('views_mobile/menu_sidebar');
	}
	public function menu_card_settings(){
			$this->load->view('views_mobile/menu_card_settings');
	}
	public function menu_transfer(){
			$this->load->view('views_mobile/menu_transfer');
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
