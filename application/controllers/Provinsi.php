<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provinsi extends CI_Controller {

	function __construct() {
		parent::__construct();
		if (!$this->session->userdata("token")){
			   redirect('login/logout', 'refresh');
			}
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->database();
		$this->load->model('M_provinsi');
	}
	public function index(){
		$data['data_provinsi'] = $this->M_provinsi->lihat();
		$this->load->view('data_provinsi',$data);
	}

	function getKota(){
        $id=$this->input->post('id');
        $data=$this->M_provinsi->getKota($id);
        echo json_encode($data);
  }

	function getKec(){
        $id=$this->input->post('id');
        $data=$this->M_provinsi->getKec($id);
        echo json_encode($data);
  }

	function getDesa(){
        $id=$this->input->post('id');
        $data=$this->M_provinsi->getDesa($id);
        echo json_encode($data);
  }

	public function tambah()
	{
		$cek= $this->M_provinsi->add();
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url()."dataprovinsi';</script>");
		}else{
			echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Berhasil Di Simpan');window.location.href='dataprovinsi';</script>");
		}
	}

	public function kota(){
		$id_prov = $this->input->get('prov');
		$data['data_prov'] = $this->M_provinsi->lihat_prov($id_prov);
		$data['data_kota'] = $this->M_provinsi->lihat_kota($id_prov);

		$this->load->view('data_kota',$data);
	}

	public function tambah_kota(){
		$id_prov = $this->input->get('prov');
		$cek= $this->M_provinsi->tambah_kota($id_prov);
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url()."datakota?prov=".$id_prov."';</script>");

		}else{
		echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Di Simpan');window.location.href='".base_url()."datakota?prov=".$id_prov."';</script>");
		}
	}

	public function kecamatan(){
		$id_kota = $this->input->get('kota');
		$data['data_kota'] = $this->M_provinsi->lihat_kota2($id_kota);
		$data['data_kecamatan'] = $this->M_provinsi->lihat_kecamatan($id_kota);
		$this->load->view('data_kecamatan',$data);
	}

	public function tambah_kec(){
		$id_kota= $this->input->get('kota');
		$cek= $this->M_provinsi->tambah_kec($id_kota);
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url()."datakecamatan?kota=".$id_kota."';</script>");
		}else{
		echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Di Simpan');window.location.href='".base_url()."datakecamatan';</script>");
		}
	}

	public function desa(){
		$id_kec= $this->input->get('kec');
		$data['data_kecamatan'] = $this->M_provinsi->lihat_kecamatan2($id_kec);
		$data['data_desa'] = $this->M_provinsi->lihat_desa($id_kec);
		$this->load->view('data_desa',$data);
	}

	public function tambah_desa(){
		$id_kec= $this->input->get('kec');
		$cek= $this->M_provinsi->tambah_desa($id_kec);
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url()."datadesa?kec=".$id_kec."';</script>");
		}else{
		echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Di Simpan');window.location.href='".base_url()."datadesa';</script>");
		}
	}




}
