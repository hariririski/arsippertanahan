<?php
    class MPegawai extends CI_Model{

      function lihat(){
        $query=$this->db->query("SELECT * FROM `pegawai`");
        return $query->result();
      }
      function add(){
        $nip= $this->input->post('nip');
        $namaLengkap= $this->input->post('namaLengkap');
        $jabatan = $this->input->post('jabatan');
        $jenis = $this->input->post('jenis');
        $status=0;
        $perintah1="INSERT INTO `pegawai`(`nip`, `namaLengkap`, `jabatan`, `status`, `jenis`)
                                  VALUES ('$nip','$namaLengkap','$jabatan','$status','$jenis')";
        $query=$this->db->query($perintah1);
        return $query;
      }
}

?>
