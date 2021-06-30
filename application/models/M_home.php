<?php
    class M_home extends CI_Model{

      function jumlah_buku_tanah(){
        $query=$this->db->query("SELECT COUNT(id_buku_tanah)as jumlah_buku_tanah FROM `buku_tanah`");
        return $query->result();
      }
      function jumlah_buku_tanah_valid(){
        $query=$this->db->query("SELECT COUNT(id_buku_tanah)as jumlah_buku_tanah FROM `buku_tanah` where buku_tanah.valid=1");
        return $query->result();
      }
      function pinjam_buku_tanah(){
        $query=$this->db->query("SELECT pinjam.tgl_pinjam, COUNT(id_pinjam)as jumlah From pinjam WHERE pinjam.id_buku_tanah is NOT null and pinjam.status>=1 GROUP BY tgl_pinjam limit 30");
        return $query->result();
      }
      function pinjam_surat_ukur(){
        $query=$this->db->query("SELECT pinjam.tgl_pinjam, COUNT(id_pinjam)as jumlah From pinjam WHERE pinjam.id_surat_ukur is NOT null and pinjam.status>=1 GROUP BY tgl_pinjam limit 30");
        return $query->result();
      }
      function pinjam_warkah(){
        $query=$this->db->query("SELECT pinjam.tgl_pinjam, COUNT(id_pinjam)as jumlah From pinjam WHERE pinjam.id_warkah is NOT null and pinjam.status>=1 GROUP BY tgl_pinjam limit 30");
        return $query->result();
      }
      function tgl_pinjam(){
        $query=$this->db->query("SELECT tgl_pinjam FROM `pinjam` GROUP by tgl_pinjam LIMIT 30");
        return $query->result();
      }

      function pinjam_telat(){
        $query=$this->db->query("SELECT *, datediff(current_date(),pinjam.tgl_kembali) as selisih from pinjam left JOIN pegawai on pegawai.nip=pinjam.nip LEFT join waktu on waktu.id_waktu=pinjam.id_waktu WHERE pinjam.tgl_dikembalikan is null and pinjam.induk=0 and pinjam.status=1 order by datediff(current_date(),pinjam.tgl_kembali) desc ");
        return $query->result();
      }


      function jumlah_surat_ukur(){
        $query=$this->db->query("SELECT COUNT(id_surat_ukur)as jumlah_surat_ukur FROM `surat_ukur`");
        return $query->result();
      }
      function jumlah_surat_ukur_valid(){
        $query=$this->db->query("SELECT COUNT(id_surat_ukur)as jumlah_surat_ukur FROM `surat_ukur` where surat_ukur.valid=1");
        return $query->result();
      }

      function jumlah_warkah(){
        $query=$this->db->query("SELECT COUNT(id_warkah)as jumlah_warkah FROM `warkah`");
        return $query->result();
      }
      function jumlah_warkah_valid(){
        $query=$this->db->query("SELECT COUNT(id_warkah)as jumlah_warkah FROM `warkah` where warkah.valid=1");
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
