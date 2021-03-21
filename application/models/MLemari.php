<?php
    class MLemari extends CI_Model{

      function lihat(){
        $query=$this->db->query("SELECT * FROM `lemari`");
        return $query->result();
      }
      function getBaris($id){
        $query=$this->db->query("SELECT * FROM `baris` where baris.idLemari=$id");
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
        $idBaris = $this->input->post('idBaris');
        $namaBaris = $this->input->post('namaBaris');
        $keterangan = $this->input->post('keterangan');

        $perintah1="INSERT INTO `baris`(`idBaris`, `namaBaris`, `keterangan`, `idLemari`) VALUES ('$idBaris','$namaBaris','$keterangan','$idLemari')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function lihatBundel(){
        $query=$this->db->query("SELECT * FROM lemari LEFT JOIN baris on lemari.idLemari=baris.idLemari left join bundel on bundel.idBaris=baris.idBaris LEFT JOIN desa on desa.idDesa=bundel.idDesa");
        return $query->result();
      }
      function tambahBundel(){

        $idBaris = $this->input->post('idBaris');
        $idBundel = $this->input->post('idBundel');
        $namaBundel = $this->input->post('namaBundel');
        $keterangan = $this->input->post('keterangan');
        $idDesa = $this->input->post('idDesa');
        $sengketa = $this->input->post('sengketa');


        $perintah1="INSERT INTO `bundel`(`idBundel`, `namaBundel`, `idBaris`, `idDesa`, `sengketa`)
                                 VALUES ('$idBundel','$namaBundel','$idBaris','$idDesa','$sengketa')";
        $query=$this->db->query($perintah1);
        return $query;
      }
}

?>
