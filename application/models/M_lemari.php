<?php
    class M_lemari extends CI_Model{

      function lihat(){
        $query=$this->db->query("SELECT * FROM `lemari`");
        return $query->result();
      }
      function getBaris($id){
        $query=$this->db->query("SELECT * FROM `baris` where baris.id_lemari=$id");
        return $query->result();
      }
      function add(){
        $id_lemari = $this->input->post('id_lemari');
        $nama_lemari = $this->input->post('nama_lemari');
        $keterangan = $this->input->post('keterangan');

        $perintah1="INSERT INTO `lemari`(`id_lemari`, `nama_lemari`, `keterangan`) VALUES ('$id_lemari','$nama_lemari','$keterangan')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function lihat_baris(){
        $query=$this->db->query("SELECT * FROM lemari LEFT JOIN baris on lemari.id_lemari=baris.id_lemari");
        return $query->result();
      }
      function tambah_baris(){
        $id_lemari = $this->input->post('id_lemari');
        $id_baris = $this->input->post('id_baris');
        $nama_baris = $this->input->post('nama_baris');
        $keterangan = $this->input->post('keterangan');

        $perintah1="INSERT INTO `baris`(`id_baris`, `nama_baris`, `keterangan`, `id_lemari`) VALUES ('$id_baris','$nama_baris','$keterangan','$id_lemari')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function lihat_bundel(){
        $query=$this->db->query("SELECT * FROM lemari LEFT JOIN baris on lemari.id_lemari=baris.id_lemari left join bundel on bundel.id_baris=baris.id_baris LEFT JOIN desa on desa.id_desa=bundel.id_desa");
        return $query->result();
      }
      function tambah_bundel(){

        $id_baris = $this->input->post('id_baris');
        $id_bundel = $this->input->post('id_bundel');
        $nama_bundel = $this->input->post('nama_bundel');
        $keterangan = $this->input->post('keterangan');
        $id_desa = $this->input->post('id_desa');
        $sengketa = $this->input->post('sengketa');


        $perintah1="INSERT INTO `bundel`(`id_bundel`, `nama_bundel`, `id_baris`, `id_desa`, `sengketa`)
                                 VALUES ('$id_bundel','$nama_bundel','$id_baris','$id_desa','$sengketa')";
        $query=$this->db->query($perintah1);
        return $query;
      }
}

?>
