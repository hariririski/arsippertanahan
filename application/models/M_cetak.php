<?php
    class M_cetak extends CI_Model{
      function buku_tanah_desa($kode_desa){
        $query=$this->db->query("SELECT * FROM buku_tanah left join jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak left join desa on desa.kode_desa=buku_tanah.kode_desa left join kec on kec.kode_kec=desa.kode_kec left join kota on kota.kode_kota=kec.kode_kota left join prov on prov.kode_prov=kota.kode_prov where buku_tanah.kode_desa='$kode_desa'");
        return $query->result();
      }


}

?>
