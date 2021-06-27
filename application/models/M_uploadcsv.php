<?php
    class M_uploadcsv extends CI_Model{

      function bukutanah($id_buku_tanah,$no_hak,$jenis_hak,$desa,$nib,$id_surat_ukur,$admin){
        $perintah1="INSERT INTO `buku_tanah`(`id_buku_tanah`, `no_hak`, `id_jenis_hak`, `kode_desa`,`nib`,`id_surat_ukur`,`admin_tambah`)
                             VALUES ('$id_buku_tanah','$no_hak','$jenis_hak','$desa','$nib','$id_surat_ukur','$admin')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function suratukur($id_surat_ukur,$no_su,$tahun_su,$desa,$nib,$admin){

        $perintah1="INSERT INTO `surat_ukur`(`id_surat_ukur`, `nomor`, `tahun`, `kode_desa`,`nib`,`admin_tambah`)
                    VALUES ('$id_surat_ukur','$no_su','$tahun_su','$desa','$nib','$admin')";
        $query=$this->db->query($perintah1);
        return $query;
      }

}

?>
