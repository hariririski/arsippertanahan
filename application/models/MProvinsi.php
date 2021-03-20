<?php
    class MProvinsi extends CI_Model{

      function lihat(){
        $query=$this->db->query("SELECT * FROM `prov`");
        return $query->result();
      }
      function add(){
        $idProvinsi = $this->input->post('idProv');
        $namaProvinsi = $this->input->post('namaProv');

        $perintah1="INSERT INTO `prov`(`idProv`, `namaProv`) VALUES ('$idProvinsi','$namaProvinsi')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function lihatKota(){
        $query=$this->db->query("SELECT * FROM prov LEFT JOIN kota on prov.idProv=kota.idProv");
        return $query->result();
      }
      function tambahKota(){
        $idProvinsi = $this->input->post('idProv');
        $idKota = $this->input->post('idKota');
        $namaKota = $this->input->post('namaKota');

        $perintah1="INSERT INTO `kota`(`idKota`, `namaKota`, `idProv`) VALUES ('$idKota','$namaKota','$idProvinsi')";
        $query=$this->db->query($perintah1);
        return $query;
      }
}

?>
