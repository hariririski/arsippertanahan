<?php
    class M_surat_ukur extends CI_Model{


      function add($id_surat_ukur){
        $id_kondisi = $this->input->post('id_kondisi');
        $kode_desa = $this->input->post('kode_desa');
        $no_su = $this->input->post('no_su');
        $tahun = $this->input->post('tahun');
        $nib = $this->input->post('nib');
        $id_bundel = $this->input->post('id_bundel');
        $perintah1="INSERT INTO `surat_ukur`(`id_surat_ukur`, `nomor`, `tahun`, `kode_desa`, `id_bundel`,  `id_kondisi`,`nib`)
                    VALUES ('$id_surat_ukur','$no_su','$tahun','$kode_desa','$id_bundel',$id_kondisi,'$nib')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function data_surat_ukur_desa($kode_desa){
        $query=$this->db->query("SELECT * FROM `surat_ukur` LEFT JOIN desa on desa.kode_desa=surat_ukur.kode_desa LEFT JOIN bundel on bundel.id_bundel=surat_ukur.id_bundel LEFT JOIN kec on kec.kode_kec=desa.kode_kec left join buku_tanah on buku_tanah.id_surat_ukur=surat_ukur.id_surat_ukur left join jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak where desa.kode_desa='$kode_desa'");
        return $query->result();
      }




}

?>