<?php
    class M_lemari extends CI_Model{

      function lihat(){
        $query=$this->db->query("SELECT * FROM `lemari` order by nama_lemari ASC");
        return $query->result();
      }
      function lihat2(){
        $query=$this->db->query("SELECT * FROM buku_tanah WHERE buku_tanah.kode_desa='H8uOB2fq9h'");
        return $query->result();
      }

      function jumlah_baris($id_lemari){
        $query=$this->db->query("SELECT count(baris.id_baris) as jumlah_baris from baris left join lemari on lemari.id_lemari=baris.id_lemari WHERE lemari.id_lemari='$id_lemari'");
        return $query->result();
      }

      function jumlah_bundel($id_lemari){
        $query=$this->db->query("SELECT count(bundel.id_bundel) as jumlah_bundel from baris left join lemari on lemari.id_lemari=baris.id_lemari left join bundel on bundel.id_baris=baris.id_baris WHERE lemari.id_lemari='$id_lemari'");
        return $query->result();
      }

      function lihat_lemari($id_lemari){
        $query=$this->db->query("SELECT * FROM `lemari` where lemari.id_lemari='$id_lemari'");
        return $query->result();
      }

      function detail_lemari($id_lemari){
        $query=$this->db->query("SELECT * FROM `lemari` where lemari.id_lemari='$id_lemari'");
        return $query->result();
      }

      function detail_baris($id_baris){
        $query=$this->db->query("SELECT * FROM `baris` where baris.id_baris='$id_baris' ");
        return $query->result();
      }
      function m_baris($id){
        $query=$this->db->query("SELECT * FROM `baris` left join lemari on lemari.id_lemari=baris.id_lemari where baris.id_lemari='$id' order by baris.nama_baris ASC");
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
      function edit_bundel($id_bundel,$nama_bundel,$sengketa,$kode_desa){
        $query=$this->db->query("UPDATE `bundel` SET`nama_bundel`='$nama_bundel',`kode_desa`='$kode_desa',`sengketa`='$sengketa' WHERE bundel.id_bundel='$id_bundel'");
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
        $query=$this->db->query("SELECT * FROM lemari INNER JOIN baris on lemari.id_lemari=baris.id_lemari where baris.id_lemari='$id_lemari' order by nama_baris ASC");
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
        $query=$this->db->query("SELECT *, bundel.qrcode as qrbundel FROM lemari INNER JOIN baris on lemari.id_lemari=baris.id_lemari INNER JOIN bundel on bundel.id_baris=baris.id_baris INNER JOIN desa on desa.kode_desa=bundel.kode_desa where bundel.id_baris='$id_baris' order by bundel.nama_bundel ASC");
        return $query->result();

      }

      function m_lihat_bundel($id_baris,$id_lemari){
        $query=$this->db->query("SELECT * FROM lemari INNER JOIN baris on lemari.id_lemari=baris.id_lemari INNER JOIN bundel on bundel.id_baris=baris.id_baris INNER JOIN desa on desa.kode_desa=bundel.kode_desa where bundel.id_baris='$id_baris' and lemari.id_lemari='$id_lemari'  order by bundel.nama_bundel ASC");
        return $query->result();

      }
      function tambah_bundel($id_baris,$id_bundel){
        $nama_bundel = $this->input->post('nama_bundel');
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
