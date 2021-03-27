<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provinsi extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->database();
		$this->load->model('M_provinsi');
	}
	public function index()
	{
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
			echo ("<script LANGUAGE='JavaScript'>window.alert('Data Berhasil Di Simpan');window.location.href='".base_url()."dataprovinsi';</script>");

		}else{
			echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Berhasil Di Simpan');window.location.href='dataprovinsi';</script>");

		}
	}

	public function kota()
	{
		$data['data_provinsi'] = $this->M_provinsi->lihat();
		$data['data_kota'] = $this->M_provinsi->lihat_kota();
		$this->load->view('data_kota',$data);
	}
	public function tambah_kota()
	{
		$cek= $this->M_provinsi->tambah_kota();
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.alert('Data Berhasil Di Simpan');window.location.href='".base_url()."datakota';</script>");

		}else{
		echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Di Simpan');window.location.href='".base_url()."datakota';</script>");

		}
	}

	public function kecamatan()
	{
		$data['data_provinsi'] = $this->M_provinsi->lihat();
		$data['data_kecamatan'] = $this->M_provinsi->lihat_kecamatan();
		$this->load->view('data_kecamatan',$data);
	}
	public function tambah_kec()
	{
		$cek= $this->M_provinsi->tambah_kec();
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.alert('Data Berhasil Di Simpan');window.location.href='".base_url()."datakecamatan';</script>");

		}else{
		echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Di Simpan');window.location.href='".base_url()."datakecamatan';</script>");

		}
	}

	public function desa()
	{
		$data['data_provinsi'] = $this->M_provinsi->lihat();
		$data['data_kecamatan'] = $this->M_provinsi->lihat_kecamatan();
		$data['data_desa'] = $this->M_provinsi->lihat_desa();
		$this->load->view('data_desa',$data);
	}
	public function tambah_desa()
	{
		$cek= $this->M_provinsi->tambah_desa();
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.alert('Data Berhasil Di Simpan');window.location.href='".base_url()."datadesa';</script>");

		}else{
		echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Di Simpan');window.location.href='".base_url()."datadesa';</script>");

		}
	}




}
