<?php
    class M_home extends CI_Model{

      function jumlah_buku_tanah(){
        $query=$this->db->query("SELECT COUNT(id_buku_tanah)as jumlah_buku_tanah FROM `buku_tanah`");
        return $query->result();
      }

      function jumlah_surat_ukur(){
        $query=$this->db->query("SELECT COUNT(id_surat_ukur)as jumlah_surat_ukur FROM `surat_ukur`");
        return $query->result();
      }

      function jumlah_warkah(){
        $query=$this->db->query("SELECT COUNT(id_warkah)as jumlah_warkah FROM `warkah`");
        return $query->result();
      }

      //grafik Kondisi
      function kondisi_buku_tanah(){
        $query=$this->db->query("SELECT kondisi.id_kondisi, COUNT(buku_tanah.id_kondisi) as jumlah FROM `buku_tanah` left JOIN kondisi on kondisi.id_kondisi=buku_tanah.id_kondisi GROUP BY buku_tanah.id_kondisi");
        return $query->result();
      }
      function kondisi_Surat_ukur(){
        $query=$this->db->query("SELECT kondisi.id_kondisi, COUNT(surat_ukur.id_kondisi) as jumlah FROM `surat_ukur` left JOIN kondisi on kondisi.id_kondisi=surat_ukur.id_kondisi GROUP BY surat_ukur.id_kondisi");
        return $query->result();
      }
      function kondisi_warkah(){
        $query=$this->db->query("SELECT kondisi.id_kondisi, COUNT(warkah.id_kondisi)as jumlah FROM `warkah` left JOIN kondisi on kondisi.id_kondisi=warkah.id_kondisi GROUP BY warkah.id_kondisi");
        return $query->result();
      }

      function jenis_hak(){
        $query=$this->db->query("SELECT jenis_hak.nama_jenis_hak, COUNT(buku_tanah.id_jenis_hak) as jumlah FROM jenis_hak left JOIN buku_tanah on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak GROUP by jenis_hak.id_jenis_hak");
        return $query->result();
      }



}

?>
