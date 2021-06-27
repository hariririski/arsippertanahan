<?php
    class M_admin extends CI_Model{
      function lihat(){
        $query=$this->db->query("SELECT * FROM `admin`");
        return $query->result();
      }

      function add(){
        $nama_lengkap = $this->input->post('nama_lengkap');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $password = md5($password);
        $level = $this->input->post('level');
        $image;
        $status=0;
        switch($level){
          case 1:
              $image="assets/images/users/admin.jpg";
              break;
          case 2:
              $image="assets/images/users/pustaka.jpg";
              break;
          case 3:
              $image="assets/images/users/umum.jpg";
              break;
          case 4:
              $image="assets/images/users/link.jpg";
              break;
        }

        $perintah1="INSERT INTO `admin`(`username`, `password`, `level`, `status`, `nama_lengkap`, `image`)
                                VALUES ('$username','$password','$level','$status','$nama_lengkap','$image')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function aktif_admin($kode,$aktif){
        $query=$this->db->query("UPDATE `admin` SET `status`=$aktif WHERE id_admin='$kode'");
        return $query;
      }

      function hapus_admin($kode){
        $query=$this->db->query("DELETE FROM `admin` WHERE id_admin='$kode'");
        return $query;
      }



      function jumlah_buku_tanah($nama_lengkap){
        $query=$this->db->query("SELECT COUNT(id_buku_tanah)as jumlah_buku_tanah FROM `buku_tanah` where buku_tanah.admin_tambah='$nama_lengkap'");
        return $query->result();
      }
      function jumlah_buku_tanah_valid($nama_lengkap){
        $query=$this->db->query("SELECT COUNT(id_buku_tanah)as jumlah_buku_tanah FROM `buku_tanah` where buku_tanah.valid=1 and buku_tanah.admin_valid='$nama_lengkap'");
        return $query->result();
      }

      function jumlah_surat_ukur($nama_lengkap){
        $query=$this->db->query("SELECT COUNT(id_surat_ukur)as jumlah_surat_ukur FROM `surat_ukur` where surat_ukur.admin_tambah='$nama_lengkap'");
        return $query->result();
      }
      function jumlah_surat_ukur_valid($nama_lengkap){
        $query=$this->db->query("SELECT COUNT(id_surat_ukur)as jumlah_surat_ukur FROM `surat_ukur` where surat_ukur.valid=1 and surat_ukur.admin_valid='$nama_lengkap' ");
        return $query->result();
      }
      function jumlah_warkah($nama_lengkap){
        $query=$this->db->query("SELECT COUNT(id_warkah)as jumlah_warkah FROM `warkah` where warkah.admin_tambah='$nama_lengkap'");
        return $query->result();
      }
      function jumlah_warkah_valid($nama_lengkap){
        $query=$this->db->query("SELECT COUNT(id_warkah)as jumlah_warkah FROM `warkah` where warkah.valid=1 and warkah.admin_valid='$nama_lengkap'");
        return $query->result();
      }

      function pinjam_buku_tanah($nama_lengkap){
        $query=$this->db->query("SELECT COUNT(id_pinjam)as jumlah From pinjam WHERE pinjam.id_buku_tanah is NOT null and pinjam.admin_tambah='$nama_lengkap'");
        return $query->result();
      }
      function pinjam_surat_ukur($nama_lengkap){
        $query=$this->db->query("SELECT COUNT(id_pinjam)as jumlah From pinjam WHERE pinjam.id_surat_ukur is NOT null and pinjam.admin_tambah='$nama_lengkap'");
        return $query->result();
      }
      function pinjam_warkah($nama_lengkap){
        $query=$this->db->query("SELECT pinjam.tgl_pinjam, COUNT(id_pinjam)as jumlah From pinjam WHERE pinjam.id_warkah is NOT null and pinjam.admin_tambah='$nama_lengkap'");
        return $query->result();
      }

      function kembali_buku_tanah($nama_lengkap){
        $query=$this->db->query("SELECT COUNT(id_pinjam)as jumlah From pinjam WHERE pinjam.id_buku_tanah is NOT null and pinjam.admin_kembali='$nama_lengkap'");
        return $query->result();
      }
      function kembali_surat_ukur($nama_lengkap){
        $query=$this->db->query("SELECT COUNT(id_pinjam)as jumlah From pinjam WHERE pinjam.id_surat_ukur is NOT null and pinjam.admin_kembali='$nama_lengkap'");
        return $query->result();
      }
      function kembali_warkah($nama_lengkap){
        $query=$this->db->query("SELECT pinjam.tgl_pinjam, COUNT(id_pinjam)as jumlah From pinjam WHERE pinjam.id_warkah is NOT null and pinjam.admin_kembali='$nama_lengkap'");
        return $query->result();
      }

      function susun_buku_tanah($nama_lengkap){
        $query=$this->db->query("SELECT COUNT(id_pinjam)as jumlah From pinjam WHERE pinjam.id_buku_tanah is NOT null and pinjam.admin_susun='$nama_lengkap'");
        return $query->result();
      }
      function susun_surat_ukur($nama_lengkap){
        $query=$this->db->query("SELECT COUNT(id_pinjam)as jumlah From pinjam WHERE pinjam.id_surat_ukur is NOT null and pinjam.admin_susun='$nama_lengkap'");
        return $query->result();
      }
      function susun_warkah($nama_lengkap){
        $query=$this->db->query("SELECT pinjam.tgl_pinjam, COUNT(id_pinjam)as jumlah From pinjam WHERE pinjam.id_warkah is NOT null and pinjam.admin_susun='$nama_lengkap'");
        return $query->result();
      }





}

?>
