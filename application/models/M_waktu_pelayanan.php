<?php
    class M_waktu_pelayanan extends CI_Model{

      function lihat(){
        $query=$this->db->query("SELECT * FROM `waktu`");
        return $query->result();
      }
      function add(){
        $id_waktu= $this->input->post('id_waktu');
        $pelayanan= $this->input->post('pelayanan');
        $durasi = $this->input->post('durasi');

        $perintah1="INSERT INTO `waktu`(`id_waktu`,`pelayanan`, `durasi`) VALUES ('$id_waktu','$pelayanan',$durasi)";
        $query=$this->db->query($perintah1);
        return $query;
      }
}

?>
