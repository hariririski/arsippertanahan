<?php
    class MKondisi extends CI_Model{

      function lihat(){
        $query=$this->db->query("SELECT * FROM `kondisi`");
        return $query->result();
      }
      function add(){
        $idKondisi = $this->input->post('idKondisi');
        $namaKondisi = $this->input->post('namaKondisi');
        $keterangan = $this->input->post('keterangan');

        $perintah1="INSERT INTO `kondisi`(`idKondisi`, `namaKondisi`, `keterangan`) VALUES ('$idKondisi','$namaKondisi','$keterangan')";
        $query=$this->db->query($perintah1);
        return $query;
      }
}

?>
