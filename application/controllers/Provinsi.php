<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provinsi extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->database();
		$this->load->model('MProvinsi');
	}
	public function index()
	{
		$data['dataProvinsi'] = $this->MProvinsi->lihat();
		$this->load->view('dataProvinsi',$data);
	}
	function getKota(){
        $id=$this->input->post('id');
        $data=$this->MProvinsi->getKota($id);
        echo json_encode($data);
  }
	function getKec(){
        $id=$this->input->post('id');
        $data=$this->MProvinsi->getKec($id);
        echo json_encode($data);
  }
	function getDesa(){
        $id=$this->input->post('id');
        $data=$this->MProvinsi->getDesa($id);
        echo json_encode($data);
  }

	public function tambah()
	{
		$cek= $this->MProvinsi->add();
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.alert('Data Berhasil Di Simpan');window.location.href='".base_url()."dataprovinsi';</script>");

		}else{
			echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Berhasil Di Simpan');window.location.href='dataprovinsi';</script>");

		}
	}

	public function kota()
	{
		$data['dataProvinsi'] = $this->MProvinsi->lihat();
		$data['dataKota'] = $this->MProvinsi->lihatKota();
		$this->load->view('dataKota',$data);
	}
	public function tambahKota()
	{
		$cek= $this->MProvinsi->tambahKota();
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.alert('Data Berhasil Di Simpan');window.location.href='".base_url()."datakota';</script>");

		}else{
		echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Di Simpan');window.location.href='".base_url()."datakota';</script>");

		}
	}

	public function kecamatan()
	{
		$data['dataProvinsi'] = $this->MProvinsi->lihat();
		$data['dataKecamatan'] = $this->MProvinsi->lihatKecamatan();
		$this->load->view('dataKecamatan',$data);
	}
	public function tambahKec()
	{
		$cek= $this->MProvinsi->tambahKec();
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.alert('Data Berhasil Di Simpan');window.location.href='".base_url()."datakecamatan';</script>");

		}else{
		echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Di Simpan');window.location.href='".base_url()."datakecamatan';</script>");

		}
	}

	public function desa()
	{
		$data['dataProvinsi'] = $this->MProvinsi->lihat();
		$data['dataKecamatan'] = $this->MProvinsi->lihatKecamatan();
		$data['dataDesa'] = $this->MProvinsi->lihatDesa();
		$this->load->view('dataDesa',$data);
	}
	public function tambahDesa()
	{
		$cek= $this->MProvinsi->tambahDesa();
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.alert('Data Berhasil Di Simpan');window.location.href='".base_url()."datadesa';</script>");

		}else{
		echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Di Simpan');window.location.href='".base_url()."datadesa';</script>");

		}
	}




}
