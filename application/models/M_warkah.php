<?php
    class M_warkah extends CI_Model{


      function add($id_warkah,$id_buku_tanah){
        $id_kondisi = $this->input->post('id_kondisi');
        $kode_desa = $this->input->post('kode_desa');
        $no_warkah = $this->input->post('no_warkah');
        $tahun = $this->input->post('tahun');
        $id_bundel = $this->input->post('id_bundel');
        $perintah1="INSERT INTO `warkah`(`id_warkah`, `nomor`, `tahun`, `id_bundel`, `kode_desa`, `id_kondisi`, `id_buku_tanah`)
                    VALUES ('$id_warkah','$no_warkah','$tahun','$id_bundel','$kode_desa','$id_kondisi','$id_buku_tanah')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function data_warkah_desa($kode_desa){
        $query=$this->db->query("SELECT * FROM `warkah` LEFT JOIN desa on desa.kode_desa=warkah.kode_desa LEFT JOIN bundel on bundel.id_bundel=warkah.id_bundel LEFT JOIN kec on kec.kode_kec=desa.kode_kec left JOIN buku_tanah on buku_tanah.id_buku_tanah=warkah.id_buku_tanah LEFT JOIN jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak where desa.kode_desa='$kode_desa'");
        return $query->result();
      }



}

?>
