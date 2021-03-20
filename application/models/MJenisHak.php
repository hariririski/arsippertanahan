<?php
    class MJenisHak extends CI_Model{

      function lihat(){
        $query=$this->db->query("SELECT * FROM `jenisHak`");
        return $query->result();
      }
      function add(){
        $idJenisHak = $this->input->post('idJenisHak');
        $namaJenisHak = $this->input->post('namaJenisHak');
        $keterangan = $this->input->post('keterangan');

        $perintah1="INSERT INTO `jenishak`(`idJenisHak`, `namaJenisHak`, `keterangan`) VALUES ('$idJenisHak','$namaJenisHak','$keterangan')";
        $query=$this->db->query($perintah1);
        return $query;
      }
}

?>
