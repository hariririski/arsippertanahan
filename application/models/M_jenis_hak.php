<?php
    class M_jenis_hak extends CI_Model{

      function lihat(){
        $query=$this->db->query("SELECT * FROM `jenis_hak`");
        return $query->result();
      }
      function add(){
        $id_jenis_hak = $this->input->post('id_jenis_hak');
        $nama_jenis_hak = $this->input->post('nama_jenis_hak');
        $keterangan = $this->input->post('keterangan');

        $perintah1="INSERT INTO `jenis_hak`(`id_jenis_hak`, `nama_jenis_hak`, `keterangan`) VALUES ('$id_jenis_hak','$nama_jenis_hak','$keterangan')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function aktif_jenis_hak($kode,$aktif){
        $query=$this->db->query("UPDATE `jenis_hak` SET `aktif`=$aktif WHERE id_jenis_hak='$kode'");
        return $query;
      }

      function hapus_jenis_hak($kode){
        $query=$this->db->query("DELETE from `jenis_hak` WHERE id_jenis_hak='$kode'");
        return $query;
      }
}

?>
