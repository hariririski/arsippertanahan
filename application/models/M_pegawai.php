<?php
    class M_pegawai extends CI_Model{

      function lihat(){
        $query=$this->db->query("SELECT * FROM `pegawai`");
        return $query->result();
      }
      function add(){
        $nip= $this->input->post('nip');
        $nama_lengkap= $this->input->post('nama_lengkap');
        $jabatan = $this->input->post('jabatan');
        $jenis = $this->input->post('jenis');
        $aktif=0;
        $perintah1="INSERT INTO `pegawai`(`nip`, `nama_lengkap`, `jabatan`, `aktif`, `jenis`)
                                  VALUES ('$nip','$nama_lengkap','$jabatan','$aktif','$jenis')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function aktif_pegawai($kode,$aktif){
        $query=$this->db->query("UPDATE `pegawai` SET `aktif`=$aktif WHERE nip='$kode'");
        return $query;
      }

      function hapus_pegawai($kode){
        $query=$this->db->query("DELETE FROM `pegawai` WHERE nip='$kode'");
        return $query;
      }
}

?>
