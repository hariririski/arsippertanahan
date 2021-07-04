<?php
    class M_lemari extends CI_Model{

      function lihat(){
        $query=$this->db->query("SELECT * FROM `lemari`");
        return $query->result();
      }
      function lihat2(){
        $query=$this->db->query("SELECT * FROM buku_tanah WHERE buku_tanah.kode_desa='H8uOB2fq9h'");
        return $query->result();
      }

      function lihat_lemari($id_lemari){
        $query=$this->db->query("SELECT * FROM `lemari` where lemari.id_lemari='$id_lemari'");
        return $query->result();
      }

      function detail_baris($id_baris){
        $query=$this->db->query("SELECT * FROM `baris` where baris.id_baris='$id_baris'");
        return $query->result();
      }

      function detail_bundel($id_bundel){
        $query=$this->db->query("SELECT * FROM `bundel` WHERE bundel.id_bundel='$id_bundel'");
        return $query->result();
      }

      function edit_lemari($id_lemari,$nama_lemari,$keterangan){
        $query=$this->db->query("UPDATE `lemari` SET `nama_lemari`='$nama_lemari' ,`keterangan`='$keterangan'  WHERE lemari.id_lemari='$id_lemari'");
        return $query;
      }

      function edit_baris($id_baris,$nama_baris){
        $query=$this->db->query("UPDATE `baris` SET `nama_baris`='$nama_baris' WHERE baris.id_baris='$id_baris'");
        return $query;
      }

      function getBaris($id){
        $query=$this->db->query("SELECT * FROM `baris` where baris.id_lemari='$id'");
        return $query->result();
      }

      function add($id_lemari){
        $nama_lemari = $this->input->post('nama_lemari');
        $keterangan = $this->input->post('keterangan');
        $qrcode="L-".$id_lemari;
        $perintah1="INSERT INTO `lemari`(`id_lemari`, `nama_lemari`, `keterangan`,`qrcode`) VALUES ('$id_lemari','$nama_lemari','$keterangan','$qrcode')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function lihat_baris($id_lemari){
        $query=$this->db->query("SELECT * FROM lemari INNER JOIN baris on lemari.id_lemari=baris.id_lemari where baris.id_lemari='$id_lemari'");
        return $query->result();
      }

      function lihat_baris2($id_baris){
        $query=$this->db->query("SELECT * FROM lemari INNER JOIN baris on lemari.id_lemari=baris.id_lemari where baris.id_baris='$id_baris'");
        return $query->result();
      }

      function tambah_baris($id_lemari,$id_baris){
        $nama_baris = $this->input->post('nama_baris');
        $keterangan = $this->input->post('keterangan');
        $qrcode="B-".$id_baris;
        $perintah1="INSERT INTO `baris`(`id_baris`, `nama_baris`, `keterangan`, `id_lemari`,`qrcode`) VALUES ('$id_baris','$nama_baris','$keterangan','$id_lemari','$qrcode')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function lihat_bundel($id_baris){
        $query=$this->db->query("SELECT *, bundel.qrcode as qrbundel FROM lemari INNER JOIN baris on lemari.id_lemari=baris.id_lemari INNER JOIN bundel on bundel.id_baris=baris.id_baris INNER JOIN desa on desa.kode_desa=bundel.kode_desa where bundel.id_baris='$id_baris'");
        return $query->result();

      }
      function tambah_bundel($id_baris,$id_bundel){
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

      function hapus_bundel($id_bundel){
        $query=$this->db->query("DELETE from bundel where bundel.id_bundel='$id_bundel'");
        return $query;
      }

      function hapus_baris($id_baris){
        $query=$this->db->query("DELETE baris, bundel from baris left JOIN bundel on baris.id_baris=bundel.id_baris where baris.id_baris='$id_baris'");
        return $query;
      }

      function hapus_lemari($id_lemari){
        $query=$this->db->query("DELETE lemari, baris, bundel from lemari LEFT JOIN baris on lemari.id_lemari=baris.id_lemari LEFT JOIN bundel on baris.id_baris=bundel.id_baris WHERE lemari.id_lemari='$id_lemari'");
        return $query;
      }
}

?>
