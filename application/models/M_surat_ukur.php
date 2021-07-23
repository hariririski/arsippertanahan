<?php
    class M_surat_ukur extends CI_Model{


      function add($id_surat_ukur,$admin_tambah,$id_bundel,$admin_valid,$status,$valid){
        $id_kondisi = $this->input->post('id_kondisi');
        $kode_desa = $this->input->post('kode_desa');
        $no_su = $this->input->post('no_su');
        $tahun = $this->input->post('tahun');
        $nib = $this->input->post('nib');
        $perintah1="INSERT INTO `surat_ukur`(`id_surat_ukur`, `nomor`, `tahun`, `kode_desa`, `id_bundel`,  `id_kondisi`,`nib`,`admin_tambah`,`admin_valid`,`status`,`valid`)
                    VALUES ('$id_surat_ukur','$no_su','$tahun','$kode_desa','$id_bundel',$id_kondisi,'$nib','$admin_tambah','$admin_valid','$status','$valid')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function data_surat_ukur_desa($kode_desa){
        $query=$this->db->query("SELECT *, surat_ukur.id_surat_ukur as surat_ukur FROM `surat_ukur` LEFT JOIN desa on desa.kode_desa=surat_ukur.kode_desa LEFT JOIN bundel on bundel.id_bundel=surat_ukur.id_bundel LEFT JOIN kec on kec.kode_kec=desa.kode_kec left join buku_tanah on buku_tanah.id_surat_ukur=surat_ukur.id_surat_ukur left join jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak where desa.kode_desa='$kode_desa'");
        return $query->result();
      }
      function data_surat_ukur($id_surat_ukur){
        $query=$this->db->query("SELECT * FROM `surat_ukur` LEFT JOIN desa on desa.kode_desa=surat_ukur.kode_desa LEFT JOIN bundel on bundel.id_bundel=surat_ukur.id_bundel LEFT JOIN kec on kec.kode_kec=desa.kode_kec left join buku_tanah on buku_tanah.id_surat_ukur=surat_ukur.id_surat_ukur left join jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak left join kondisi on kondisi.id_kondisi=surat_ukur.id_kondisi  LEFT join baris on baris.id_baris=bundel.id_baris left join lemari on lemari.id_lemari=baris.id_baris where surat_ukur.id_surat_ukur='$id_surat_ukur'");
        return $query->result();
      }

      function ubah_status($id_surat_ukur,$status){
        $query=$this->db->query("UPDATE `surat_ukur` SET `status`=$status WHERE id_surat_ukur='$id_surat_ukur'");
        return $query;
      }

      function detail_surat_ukur($id){
        $query=$this->db->query("SELECT * FROM `surat_ukur` left JOIN bundel on bundel.id_bundel=surat_ukur.id_bundel left join desa on desa.kode_desa=surat_ukur.kode_desa left JOIN kondisi on kondisi.id_kondisi=surat_ukur.id_kondisi  where surat_ukur.id_surat_ukur='$id'");
        return $query->result();
      }




}

?>
