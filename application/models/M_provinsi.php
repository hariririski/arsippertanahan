<?php
    class M_provinsi extends CI_Model{

      function lihat(){
        $query=$this->db->query("SELECT * FROM `prov`");
        return $query->result();
      }

      function lihat_prov($id){
        $query=$this->db->query("SELECT * FROM `prov` where kode_prov='$id'");
        return $query->result();
      }

      function getKota($id){
        $query=$this->db->query("SELECT * FROM `kota` inner join prov on prov.kode_prov=kota.kode_prov where kota.kode_prov='$id'");
        return $query->result();
      }

      function getKec($id){
        $query=$this->db->query("SELECT * FROM `kec` where kec.kode_kota='$id'");
        return $query->result();
      }

      function getDesa($id){
        $query=$this->db->query("SELECT * FROM `desa` where desa.kode_kec='$id'");
        return $query->result();
      }

      function add($kode_prov){
        $id_provinsi = $this->input->post('id_prov');
        $nama_provinsi = $this->input->post('nama_prov');
        $qrcode="P-".$kode_prov;
        $perintah1="INSERT INTO `prov`(`kode_prov`,`id_prov`, `nama_prov`,`qrcode`) VALUES ('$kode_prov','$id_provinsi','$nama_provinsi','$qrcode')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function lihat_kota($kode_prov){
        $query=$this->db->query("SELECT *, kota.qrcode as qrkota FROM prov INNER JOIN kota on prov.kode_prov=kota.kode_prov where prov.kode_prov='$kode_prov'");
        return $query->result();
      }

      function lihat_kota_barcode(){
        $query=$this->db->query("SELECT * FROM prov INNER JOIN kota on prov.kode_prov=kota.kode_prov ");
        return $query->result();
      }

      function lihat_kota2($kode_kota){
        $query=$this->db->query("SELECT *, kota.qrcode as qrkota FROM prov INNER JOIN kota on prov.kode_prov=kota.kode_prov where kota.kode_kota='$kode_kota'");
        return $query->result();
      }

      function tambah_kota($kode_prov,$kode_kota){
        $id_kota = $this->input->post('id_kota');
        $nama_kota = $this->input->post('nama_kota');
        $qrcode="K-".$kode_kota;
        $perintah1="INSERT INTO `kota`(`kode_kota`,`id_kota`, `nama_kota`, `kode_prov`,`qrcode`) VALUES ('$kode_kota','$id_kota','$nama_kota','$kode_prov','$qrcode')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function lihat_kecamatan($kode_kota){
        $query=$this->db->query("SELECT * from kec WHERE kec.kode_kota='$kode_kota' ORDER BY kec.id_kec");
        return $query->result();
      }

      function lihat_kecamatan2($kode_kec){
        $query=$this->db->query("SELECT * FROM `kec`WHERE kode_kec='$kode_kec' ORDER BY kec.id_kec");
        return $query->result();
      }

      function tambah_kec($kode_kota,$kode_kec){
        $id_kecamatan= $this->input->post('id_kec');
        $nama_kecamatan= $this->input->post('nama_kec');
        $qrcode="KEC-".$kode_kec;
        $perintah1="INSERT INTO `kec`(`kode_kec`,`id_kec`, `nama_kec`, `kode_kota`,`qrcode`) VALUES ('$kode_kec','$id_kecamatan','$nama_kecamatan','$kode_kota','$qrcode')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function lihat_desa($kode_kec){
        $query=$this->db->query("SELECT *, desa.qrcode as qrdesa FROM prov INNER JOIN kota on prov.kode_prov=kota.kode_prov INNER join kec on kec.kode_kota=kota.kode_kota INNER join desa on desa.kode_kec=kec.kode_kec WHERE desa.kode_kec='$kode_kec' ORDER BY desa.id_desa");
        return $query->result();
      }

      function lihat_desa_barcode(){
        $query=$this->db->query("SELECT * FROM prov INNER JOIN kota on prov.kode_prov=kota.kode_prov INNER join kec on kec.kode_kota=kota.kode_kota INNER join desa on desa.kode_kec=kec.kode_kec ");
        return $query->result();
      }

      function tambah_desa($kode_kec,$kode_desa){
        $id_desa= $this->input->post('id_desa');
        $nama_desa= $this->input->post('nama_desa');
        $qrcode="D-".$kode_desa;
        $perintah1="INSERT INTO `desa`(`kode_desa`,`id_desa`, `nama_desa`, `kode_kec`,`qrcode`) VALUES ('$kode_desa','$id_desa','$nama_desa','$kode_kec','$qrcode')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function data_desa_bundel(){
        $query=$this->db->query("SELECT kec.nama_kec, desa.id_desa, desa.nama_desa, desa.kode_desa FROM prov INNER JOIN kota on prov.kode_prov=kota.kode_prov INNER join kec on kec.kode_kota=kota.kode_kota INNER join desa on desa.kode_kec=kec.kode_kec where desa.aktif=1 and kec.aktif=1 and kota.aktif=1 and prov.aktif=1 ORDER BY kec.nama_kec");
        return $query->result();
      }

      function hapus_kota($kode_kota){
        $query=$this->db->query("DELETE kota, kec, desa FROM kota INNER JOIN kec on kota.kode_kota=kec.kode_kota INNER JOIN desa on kec.kode_kec=desa.kode_kec WHERE kota.kode_kota='$kode_kota'");
        return $query;
      }

      function hapus_prov($kode_prov){
        $query=$this->db->query("DELETE prov,kota,kec,desa FROM prov LEFT join kota on kota.kode_prov=prov.kode_prov left JOIN kec on kota.kode_kota=kec.kode_kota left JOIN desa on kec.kode_kec=desa.kode_kec WHERE prov.kode_prov='$kode_prov'");
        return $query;
      }

      function hapus_data($where,$table){
      	$this->db->where($where);
      	$query=$this->db->delete($table);
        return $query;
      }

      function aktif_prov($kode,$aktif){
        $query=$this->db->query("UPDATE `prov` SET `aktif`=$aktif WHERE kode_prov='$kode'");
        return $query;
      }

      function aktif_kota($kode,$aktif){
        $query=$this->db->query("UPDATE `kota` SET `aktif`=$aktif WHERE kode_kota='$kode'");
        return $query;
      }

      function aktif_kec($kode,$aktif){
        $query=$this->db->query("UPDATE `kec` SET `aktif`=$aktif WHERE kode_kec='$kode'");
        return $query;
      }

      function aktif_desa($kode,$aktif){
        $query=$this->db->query("UPDATE `desa` SET `aktif`=$aktif WHERE kode_desa='$kode'");
        return $query;
      }

      function data_desa_buku_tanah(){
        $query=$this->db->query("SELECT kec.nama_kec, desa.id_desa, desa.nama_desa, desa.kode_desa, COUNT(buku_tanah.kode_desa) as jumlah_hak FROM kec INNER JOIN desa on desa.kode_kec=kec.kode_kec LEFT JOIN buku_tanah on buku_tanah.kode_desa=desa.kode_desa GROUP BY desa.kode_desa ORDER BY kec.id_kec");
        return $query->result();
      }
      function data_desa_surat_ukur(){
        $query=$this->db->query("SELECT kec.nama_kec, desa.id_desa, desa.nama_desa, desa.kode_desa, COUNT(surat_ukur.kode_desa) as jumlah FROM kec INNER JOIN desa on desa.kode_kec=kec.kode_kec LEFT JOIN surat_ukur on surat_ukur.kode_desa=desa.kode_desa GROUP BY desa.kode_desa ORDER BY kec.id_kec");
        return $query->result();
      }

}

?>
