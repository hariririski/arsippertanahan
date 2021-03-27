<?php
    class M_provinsi extends CI_Model{

      function lihat(){
        $query=$this->db->query("SELECT * FROM `prov`");
        return $query->result();
      }
      function getKota($id){
        $query=$this->db->query("SELECT * FROM `kota` inner join prov on prov.id_prov=kota.id_prov where kota.id_prov=$id");
        return $query->result();
      }
      function getKec($id){
        $query=$this->db->query("SELECT * FROM `kec` where kec.id_kota=$id");
        return $query->result();
      }
      function getDesa($id){
        $query=$this->db->query("SELECT * FROM `desa` where desa.id_kec=$id");
        return $query->result();
      }

      function add(){
        $id_provinsi = $this->input->post('id_prov');
        $namaProvinsi = $this->input->post('namaProv');

        $perintah1="INSERT INTO `prov`(`id_prov`, `namaProv`) VALUES ('$id_provinsi','$namaProvinsi')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function lihat_kota(){
        $query=$this->db->query("SELECT * FROM prov LEFT JOIN kota on prov.id_prov=kota.id_prov");
        return $query->result();
      }
      function tambah_kota(){
        $id_provinsi = $this->input->post('id_prov');
        $id_kota = $this->input->post('id_kota');
        $nama_kota = $this->input->post('nama_kota');

        $perintah1="INSERT INTO `kota`(`id_kota`, `nama_kota`, `id_prov`) VALUES ('$id_kota','$nama_kota','$id_provinsi')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function lihat_kecamatan(){
        $query=$this->db->query("SELECT * FROM prov LEFT JOIN kota on prov.id_prov=kota.id_prov left join kec on kec.id_kota=kota.id_kota");
        return $query->result();
      }
      function tambah_kec(){

        $id_kota = $this->input->post('id_kota');
        $id_kecamatan= $this->input->post('id_kec');
        $nama_kecamatan= $this->input->post('nama_kec');

        $perintah1="INSERT INTO `kec`(`id_kec`, `nama_kec`, `id_kota`) VALUES ('$id_kecamatan','$nama_kecamatan','$id_kota')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function lihat_desa(){
        $query=$this->db->query("SELECT * FROM prov LEFT JOIN kota on prov.id_prov=kota.id_prov left join kec on kec.id_kota=kota.id_kota left join desa on desa.id_kec=kec.id_kec");
        return $query->result();
      }
      function tambah_desa(){
        $id_kec = $this->input->post('id_kec');
        $id_desa= $this->input->post('id_desa');
        $nama_desa= $this->input->post('nama_desa');

        $perintah1="INSERT INTO `desa`(`id_desa`, `nama_desa`, `id_kec`) VALUES ('$id_desa','$nama_desa','$id_kec')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function data_desa_bundel(){
        $query=$this->db->query("SELECT * FROM prov INNER JOIN kota on prov.id_prov=kota.id_prov INNER join kec on kec.id_kota=kota.id_kota INNER join desa on desa.id_kec=kec.id_kec");
        return $query->result();
      }
}

?>
