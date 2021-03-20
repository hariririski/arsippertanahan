<?php
    class MLemari extends CI_Model{

      function lihat(){
        $query=$this->db->query("SELECT * FROM `lemari`");
        return $query->result();
      }
      function add(){
        $idLemari = $this->input->post('idLemari');
        $namaLemari = $this->input->post('namaLemari');
        $keterangan = $this->input->post('keterangan');

        $perintah1="INSERT INTO `lemari`(`idLemari`, `namaLemari`, `keterangan`) VALUES ('$idLemari','$namaLemari','$keterangan')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function lihatBaris(){
        $query=$this->db->query("SELECT * FROM lemari LEFT JOIN baris on lemari.idLemari=baris.idLemari");
        return $query->result();
      }
      function tambahBaris(){
        $idLemari = $this->input->post('idLemari');
        $idbaris = $this->input->post('idbaris');
        $namaBaris = $this->input->post('namaBaris');
        $keterangan = $this->input->post('keterangan');

        $perintah1="INSERT INTO `baris`(`idBaris`, `namaBaris`, `keterangan`, `idLemari`) VALUES ('$idbaris','$namaBaris','$keterangan','$idLemari')";
        $query=$this->db->query($perintah1);
        return $query;
      }
}

?>
