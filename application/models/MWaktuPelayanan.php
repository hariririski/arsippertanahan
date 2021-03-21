<?php
    class MWaktuPelayanan extends CI_Model{

      function lihat(){
        $query=$this->db->query("SELECT * FROM `waktu`");
        return $query->result();
      }
      function add(){
        $idWaktu= $this->input->post('idWaktu');
        $pelayanan= $this->input->post('pelayanan');
        $durasi = $this->input->post('durasi');

        $perintah1="INSERT INTO `waktu`(`idWaktu`,`pelayanan`, `durasi`) VALUES ('$idWaktu','$pelayanan',$durasi)";
        $query=$this->db->query($perintah1);
        return $query;
      }
}

?>
