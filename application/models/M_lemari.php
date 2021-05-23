<?php
    class M_lemari extends CI_Model{

      function lihat(){
        $query=$this->db->query("SELECT * FROM `lemari`");
        return $query->result();
      }

      function lihat_lemari($id_lemari){
        $query=$this->db->query("SELECT * FROM `lemari` where lemari.id_lemari=$id_lemari");
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
        $qrcode="L-".$id_lemari;
        $perintah1="INSERT INTO `lemari`(`id_lemari`, `nama_lemari`, `keterangan`,`qrcode`) VALUES ('$id_lemari','$nama_lemari','$keterangan','$qrcode')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function lihat_baris($id_lemari){
        $query=$this->db->query("SELECT * FROM lemari LEFT JOIN baris on lemari.id_lemari=baris.id_lemari where baris.id_lemari=$id_lemari");
        return $query->result();
      }

      function lihat_baris2($id_baris){
        $query=$this->db->query("SELECT * FROM lemari LEFT JOIN baris on lemari.id_lemari=baris.id_lemari where baris.id_baris=$id_baris");
        return $query->result();
      }

      function tambah_baris($id_lemari){
        $id_baris = $this->input->post('id_baris');
        $nama_baris = $this->input->post('nama_baris');
        $keterangan = $this->input->post('keterangan');
        $qrcode="B-".$id_baris;
        $perintah1="INSERT INTO `baris`(`id_baris`, `nama_baris`, `keterangan`, `id_lemari`,`qrcode`) VALUES ('$id_baris','$nama_baris','$keterangan','$id_lemari','$qrcode')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function lihat_bundel($id_baris){
        $query=$this->db->query("SELECT *, bundel.qrcode as qrbundel FROM lemari LEFT JOIN baris on lemari.id_lemari=baris.id_lemari left join bundel on bundel.id_baris=baris.id_baris LEFT JOIN desa on desa.id_desa=bundel.kode_desa where bundel.id_baris=$id_baris");
        return $query->result();

      }
      function tambah_bundel($id_baris){
        $id_bundel = $this->input->post('id_bundel');
        $nama_bundel = $this->input->post('nama_bundel');
        $keterangan = $this->input->post('keterangan');
        $kode_desa = $this->input->post('kode_desa');
        $sengketa = $this->input->post('sengketa');
        $qrcode="BNDL-".$id_bundel;
        $perintah1="INSERT INTO `bundel`(`id_bundel`, `nama_bundel`, `id_baris`, `kode_desa`, `sengketa`,`qrcode`)
                                 VALUES ('$id_bundel','$nama_bundel','$id_baris','$kode_desa','$sengketa','$qrcode')";
        $query=$this->db->query($perintah1);
        return $query;
      }
}

?>
