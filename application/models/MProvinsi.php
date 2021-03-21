<?php
    class MProvinsi extends CI_Model{

      function lihat(){
        $query=$this->db->query("SELECT * FROM `prov`");
        return $query->result();
      }
      function getKota($id){
        $query=$this->db->query("SELECT * FROM `kota` inner join prov on prov.idProv=kota.idProv where kota.idProv=$id");
        return $query->result();
      }
      function getKec($id){
        $query=$this->db->query("SELECT * FROM `kec` where kec.idKota=$id");
        return $query->result();
      }
      function getDesa(){
        $query=$this->db->query("SELECT * FROM `desa` where desa.idKecamatan=$id");
        return $query->result();
      }

      function add(){
        $idProvinsi = $this->input->post('idProv');
        $namaProvinsi = $this->input->post('namaProv');

        $perintah1="INSERT INTO `prov`(`idProv`, `namaProv`) VALUES ('$idProvinsi','$namaProvinsi')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function lihatKota(){
        $query=$this->db->query("SELECT * FROM prov LEFT JOIN kota on prov.idProv=kota.idProv");
        return $query->result();
      }
      function tambahKota(){
        $idProvinsi = $this->input->post('idProv');
        $idKota = $this->input->post('idKota');
        $namaKota = $this->input->post('namaKota');

        $perintah1="INSERT INTO `kota`(`idKota`, `namaKota`, `idProv`) VALUES ('$idKota','$namaKota','$idProvinsi')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function lihatKecamatan(){
        $query=$this->db->query("SELECT * FROM prov LEFT JOIN kota on prov.idProv=kota.idProv left join kec on kec.idKota=kota.idKota");
        return $query->result();
      }
      function tambahKec(){

        $idKota = $this->input->post('idKota');
        $idKecamatan= $this->input->post('idKec');
        $namaKecamatan= $this->input->post('namaKec');

        $perintah1="INSERT INTO `kec`(`idKec`, `namaKec`, `idKota`) VALUES ('$idKecamatan','$namaKecamatan','$idKota')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function lihatDesa(){
        $query=$this->db->query("SELECT * FROM prov LEFT JOIN kota on prov.idProv=kota.idProv left join kec on kec.idKota=kota.idKota left join desa on desa.idKec=kec.idKec");
        return $query->result();
      }
      function tambahDesa(){
        $idKec = $this->input->post('idKec');
        $idDesa= $this->input->post('idDesa');
        $namaDesa= $this->input->post('namaDesa');

        $perintah1="INSERT INTO `desa`(`idDesa`, `namaDesa`, `idKec`) VALUES ('$idDesa','$namaDesa','$idKec')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function dataDesaBundel(){
        $query=$this->db->query("SELECT * FROM prov INNER JOIN kota on prov.idProv=kota.idProv INNER join kec on kec.idKota=kota.idKota INNER join desa on desa.idKec=kec.idKec");
        return $query->result();
      }
}

?>
