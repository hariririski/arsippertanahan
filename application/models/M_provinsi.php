<?php
    class M_provinsi extends CI_Model{

      function lihat(){
        $query=$this->db->query("SELECT * FROM `prov`");
        return $query->result();
      }

      function lihat_prov($id){
        $query=$this->db->query("SELECT * FROM `prov` where id_prov=$id");
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
        $nama_provinsi = $this->input->post('nama_prov');
        $qrcode="P-".$id_provinsi;
        $perintah1="INSERT INTO `prov`(`id_prov`, `nama_prov`,`qrcode`) VALUES ('$id_provinsi','$nama_provinsi','$qrcode')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function lihat_kota($id_prov){
        $query=$this->db->query("SELECT *, kota.qrcode as qrkota FROM prov LEFT JOIN kota on prov.id_prov=kota.id_prov where prov.id_prov=$id_prov");
        return $query->result();
      }

      function lihat_kota_barcode(){
        $query=$this->db->query("SELECT * FROM prov LEFT JOIN kota on prov.id_prov=kota.id_prov ");
        return $query->result();
      }

      function lihat_kota2($id_kota){
        $query=$this->db->query("SELECT *, kota.qrcode as qrkota FROM prov LEFT JOIN kota on prov.id_prov=kota.id_prov where kota.id_kota=$id_kota");
        return $query->result();
      }

      function tambah_kota($id_prov){
        $id_kota = $this->input->post('id_kota');
        $nama_kota = $this->input->post('nama_kota');
        $qrcode="K-".$id_kota;
        $perintah1="INSERT INTO `kota`(`id_kota`, `nama_kota`, `id_prov`,`qrcode`) VALUES ('$id_kota','$nama_kota','$id_prov','$qrcode')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function lihat_kecamatan($id_kota){
        $query=$this->db->query("SELECT *, kec.qrcode as qrkec FROM `kec` LEFT JOIN kota on kota.id_kota=kec.id_kota WHERE kec.id_kota=$id_kota");
        return $query->result();
      }

      function lihat_kecamatan2($id_kec){
        $query=$this->db->query("SELECT * FROM `kec`WHERE id_kec=$id_kec");
        return $query->result();
      }

      function tambah_kec($id_kota){
        $id_kecamatan= $this->input->post('id_kec');
        $nama_kecamatan= $this->input->post('nama_kec');
        $qrcode="KEC-".$id_kecamatan;
        $perintah1="INSERT INTO `kec`(`id_kec`, `nama_kec`, `id_kota`,`qrcode`) VALUES ('$id_kecamatan','$nama_kecamatan','$id_kota','$qrcode')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function lihat_desa($id_kec){
        $query=$this->db->query("SELECT *, desa.qrcode as qrdesa FROM prov LEFT JOIN kota on prov.id_prov=kota.id_prov left join kec on kec.id_kota=kota.id_kota left join desa on desa.id_kec=kec.id_kec WHERE desa.id_kec=$id_kec");
        return $query->result();
      }

      function lihat_desa_barcode(){
        $query=$this->db->query("SELECT * FROM prov LEFT JOIN kota on prov.id_prov=kota.id_prov left join kec on kec.id_kota=kota.id_kota left join desa on desa.id_kec=kec.id_kec ");
        return $query->result();
      }

      function tambah_desa($id_kec){
        $id_desa= $this->input->post('id_desa');
        $nama_desa= $this->input->post('nama_desa');
        $qrcode="D-".$id_desa;
        $perintah1="INSERT INTO `desa`(`id_desa`, `nama_desa`, `id_kec`,`qrcode`) VALUES ('$id_desa','$nama_desa','$id_kec','$qrcode')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function data_desa_bundel(){
        $query=$this->db->query("SELECT kec.nama_kec, desa.id_desa, desa.nama_desa, desa.kode_desa FROM prov INNER JOIN kota on prov.id_prov=kota.id_prov INNER join kec on kec.id_kota=kota.id_kota INNER join desa on desa.id_kec=kec.id_kec ORDER BY kec.nama_kec");
        return $query->result();
      }
}

?>
