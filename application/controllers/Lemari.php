<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lemari extends CI_Controller {

	function __construct() {
			parent::__construct();
			if (!$this->session->userdata("token")){
				   redirect('login/logout', 'refresh');
				}
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->database();
			$this->load->model('M_lemari');
			$this->load->model('M_provinsi');
			$this->load->helper('string');
	}

	public function index(){
			$data['data_lemari'] = $this->M_lemari->lihat();
			$this->load->view('data_lemari',$data);
	}

	function getBaris(){
        $id=$this->input->post('id');
        $data=$this->M_lemari->getBaris($id);
        echo json_encode($data);
  }

	function edit_lemari(){
        $id=$this->uri->segment('3');
        $data=$this->M_lemari->lihat_lemari($id);
        echo json_encode($data);
  }

	function edit_baris(){
        $id=$this->uri->segment('3');
        $data=$this->M_lemari->detail_baris($id);
        echo json_encode($data);
  }

	function edit_bundel(){
        $id=$this->uri->segment('3');
        $data=$this->M_lemari->detail_bundel($id);
        echo json_encode($data);
  }
	function simpan_edit_bundel(){
        $id_bundel=$this->uri->segment('3');
        $nama_bundel=$this->uri->segment('4');
        $sengketa=$this->uri->segment('5');
        $kode_desa=$this->uri->segment('6');
        $keterangan=$this->uri->segment('7');
				$nama_bundel=preg_replace('/%20/'," ", $nama_bundel);
				$keterangan=preg_replace('/%20/'," ", $keterangan);
        $data=$this->M_lemari->edit_bundel($id_bundel,$nama_bundel,$sengketa,$kode_desa,$keterangan);
				if($data>0){
					$data=1;
				}else{
					$data=0;
				}
        echo json_encode($data);
  }
	function simpan_edit_lemari(){
        $id_lemari=$this->uri->segment('3');
        $nama_lemari=$this->uri->segment('4');
        $keterangan=$this->uri->segment('5');
				$nama_lemari=preg_replace('/%20/'," ", $nama_lemari);
				$keterangan=preg_replace('/%20/'," ", $keterangan);
        $data=$this->M_lemari->edit_lemari($id_lemari,$nama_lemari,$keterangan);
				if($data>0){
					$data=1;
				}else{
					$data=0;
				}
        echo json_encode($data);
  }

	function simpan_edit_baris(){
        $id_baris=$this->uri->segment('3');
        $nama_baris=$this->uri->segment('4');
				$nama_baris=preg_replace('/%20/'," ", $nama_baris);
        $data=$this->M_lemari->edit_baris($id_baris,$nama_baris);
				if($data>0){
					$data=1;
				}else{
					$data=0;
				}
        echo json_encode($data);
  }

	public function tambah(){
		$id_lemari=random_string('alnum',10);
		$cek= $this->M_lemari->add($id_lemari);
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url()."datalemari';</script>");
		}else{
			echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal di Simpan');window.location.href='".base_url()."datalemari';</script>");
	 }
	}

	public function baris(){
			$id_lemari = $this->input->get('lemari');
			$data['data_lemari'] = $this->M_lemari->lihat_lemari($id_lemari);
			$data['data_baris'] = $this->M_lemari->lihat_baris($id_lemari);
			$this->load->view('data_baris',$data);
	}

	public function tambah_baris(){
		$id_baris=random_string('alnum',10);
		$id_lemari = $this->input->get('lemari');
		$cek= $this->M_lemari->tambah_baris($id_lemari,$id_baris);
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url()."databaris?lemari=".$id_lemari."';</script>");
		}else{
			echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal di Simpan');window.location.href='".base_url()."databaris';</script>");
	 	}
	}

	public function bundel(){
			$id_baris = $this->input->get('baris');
			$data['data_desa'] = $this->M_provinsi->data_desa_bundel();
			$data['data_baris'] = $this->M_lemari->lihat_baris2($id_baris);
			$data['data_bundel'] = $this->M_lemari->lihat_bundel($id_baris);
			$this->load->view('data_bundel',$data);
	}

	public function tambah_bundel(){
		$id_bundel=random_string('alnum',10);
		$id_baris = $this->input->get('baris');
		$cek= $this->M_lemari->tambah_bundel($id_baris,$id_bundel);
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url()."databundel?baris=".$id_baris."';</script>");
		}else{
			echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal di Simpan');window.location.href='".base_url()."databundel';</script>");

	 }
	}

	function hapus_bundel(){
		$id_baris=$this->uri->segment('3');
		$id_bundel=$this->uri->segment('4');
		$cek= $this->M_lemari->hapus_bundel($id_bundel);
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url()."databundel?baris=".$id_baris."';</script>");
		}else{
		echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Di Simpan');window.location.href='".base_url()."databundel?baris=".$id_baris."';</script>");
		}
	}

	function hapus_baris(){
		$id_lemari=$this->uri->segment('3');
		$id_baris=$this->uri->segment('4');
		$cek= $this->M_lemari->hapus_baris($id_baris);
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url()."databaris?lemari=".$id_lemari."';</script>");
		}else{
		echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Di Simpan');window.location.href='".base_url()."databaris?lemari=".$id_lemari."';</script>");
		}
	}

	function hapus_lemari(){
		$id_lemari=$this->uri->segment('3');
		$cek= $this->M_lemari->hapus_lemari($id_lemari);
		if($cek>0){
			echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url()."datalemari';</script>");
		}else{
		echo ("<script LANGUAGE='JavaScript'>window.alert('Data Gagal Di Simpan');window.location.href='".base_url()."datalemari';</script>");
		}
	}

}
