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
        $status=0;
        $perintah1="INSERT INTO `pegawai`(`nip`, `nama_lengkap`, `jabatan`, `status`, `jenis`)
                                  VALUES ('$nip','$nama_lengkap','$jabatan','$status','$jenis')";
        $query=$this->db->query($perintah1);
        return $query;
      }
}

?>
