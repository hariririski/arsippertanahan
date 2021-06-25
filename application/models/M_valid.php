<?php
    class M_valid extends CI_Model{

      function data_desa_valid_bt(){
        $query=$this->db->query("SELECT kec.nama_kec, desa.id_desa, desa.nama_desa, desa.kode_desa, COUNT(buku_tanah.kode_desa) as jumlah_hak FROM kec INNER JOIN desa on desa.kode_kec=kec.kode_kec LEFT JOIN buku_tanah on buku_tanah.kode_desa=desa.kode_desa where buku_tanah.valid=0 GROUP BY desa.kode_desa ORDER BY kec.id_kec");
        return $query->result();
      }
      function data_desa_valid_su(){
        $query=$this->db->query("SELECT kec.nama_kec, desa.id_desa, desa.nama_desa, desa.kode_desa, COUNT(surat_ukur.kode_desa) as jumlah FROM kec INNER JOIN desa on desa.kode_kec=kec.kode_kec LEFT JOIN surat_ukur on surat_ukur.kode_desa=desa.kode_desa where surat_ukur.valid=0 GROUP BY desa.kode_desa ORDER BY kec.id_kec");
        return $query->result();
      }
      function data_desa_valid_w(){
        $query=$this->db->query("SELECT warkah.tahun, COUNT(warkah.id_warkah) as jumlah from warkah  where warkah.valid=0 GROUP BY warkah.tahun ORDER BY warkah.tahun");
        return $query->result();
      }

      function data_buku_tanah_valid($kode_desa){
        $query=$this->db->query("SELECT * FROM `buku_tanah` LEFT JOIN jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak LEFT JOIN desa on desa.kode_desa=buku_tanah.kode_desa LEFT JOIN bundel on bundel.id_bundel=buku_tanah.id_bundel LEFT JOIN kec on kec.kode_kec=desa.kode_kec where desa.kode_desa='$kode_desa' and buku_tanah.valid=0");
        return $query->result();
      }

      function data_surat_ukur_valid($kode_desa){
        $query=$this->db->query("SELECT * FROM `surat_ukur` LEFT JOIN desa on desa.kode_desa=surat_ukur.kode_desa LEFT JOIN bundel on bundel.id_bundel=surat_ukur.id_bundel LEFT JOIN kec on kec.kode_kec=desa.kode_kec where desa.kode_desa='$kode_desa' and surat_ukur.valid=0");
        return $query->result();
      }

      function data_warkah_valid($tahun){
        $query=$this->db->query("SELECT * FROM `warkah`  LEFT JOIN bundel on bundel.id_bundel=warkah.id_bundel  where warkah.tahun='$tahun' and warkah.valid=0");
        return $query->result();
      }
}

?>
