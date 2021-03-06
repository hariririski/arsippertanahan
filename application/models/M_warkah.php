<?php
    class M_warkah extends CI_Model{


      function add($id_warkah,$id_buku_tanah,$admin_tambah,$admin_valid,$status,$valid){
        $id_kondisi = $this->input->post('id_kondisi');
        $no_warkah = $this->input->post('no_warkah');
        $tahun = $this->input->post('tahun');
        $id_bundel = $this->input->post('id_bundel');
        $perintah1="INSERT INTO `warkah`(`id_warkah`, `nomor`, `tahun`, `id_bundel`, `id_kondisi`, `id_buku_tanah`,`admin_tambah`,`admin_valid`,`status`,`valid`)
                    VALUES ('$id_warkah','$no_warkah','$tahun','$id_bundel','$id_kondisi','$id_buku_tanah','$admin_tambah','$admin_valid','$status','$valid')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function data_warkah_desa($tahun){
        $query=$this->db->query("SELECT *, warkah.id_buku_tanah as buku_tanah, warkah.keterangan as kegiatan  FROM `warkah` LEFT JOIN bundel on bundel.id_bundel=warkah.id_bundel left JOIN buku_tanah on buku_tanah.id_buku_tanah=warkah.id_buku_tanah left join jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak left join desa on desa.kode_desa=buku_tanah.kode_desa  where warkah.tahun=$tahun");
        return $query->result();
      }

      function ubah_status($id_warkah,$status){
        $query=$this->db->query("UPDATE `warkah` SET `status`=$status WHERE id_warkah='$id_warkah'");
        return $query;
      }

      function detail_warkah($id){
        $query=$this->db->query("SELECT *,  warkah.keterangan as kegiatan  FROM `warkah` LEFT JOIN bundel on bundel.id_bundel=warkah.id_bundel left JOIN buku_tanah on buku_tanah.id_buku_tanah=warkah.id_buku_tanah left join kondisi on kondisi.id_kondisi=warkah.id_kondisi LEFT join baris on baris.id_baris=bundel.id_baris left join lemari on lemari.id_lemari=baris.id_baris  where warkah.id_warkah='$id'");
        return $query->result();
      }



}

?>
