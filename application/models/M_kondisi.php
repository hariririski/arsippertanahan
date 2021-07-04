<?php
    class M_kondisi extends CI_Model{

      function lihat(){
        $query=$this->db->query("SELECT * FROM `kondisi`");
        return $query->result();
      }

      function detail_kondisi($id_kondisi){
        $query=$this->db->query("SELECT * FROM `kondisi` where id_kondisi='$id_kondisi'");
        return $query->result();
      }

      function edit_kondisi($id_kondisi,$nama_kondisi,$keterangan){
        $query=$this->db->query("UPDATE `kondisi` SET `nama_kondisi`='$nama_kondisi',`keterangan`='$keterangan' WHERE kondisi.id_kondisi='$id_kondisi'");
        return $query;
      }

      function add(){
        $id_kondisi = $this->input->post('id_kondisi');
        $nama_kondisi = $this->input->post('nama_kondisi');
        $keterangan = $this->input->post('keterangan');

        $perintah1="INSERT INTO `kondisi`(`id_kondisi`, `nama_kondisi`, `keterangan`) VALUES ('$id_kondisi','$nama_kondisi','$keterangan')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function aktif_kondisi($kode,$aktif){
        $query=$this->db->query("UPDATE `kondisi` SET `aktif`=$aktif WHERE id_kondisi='$kode'");
        return $query;
      }

      function hapus_kondisi($kode){
        $query=$this->db->query("DELETE FROM `kondisi` WHERE id_kondisi='$kode'");
        return $query;
      }
}

?>
