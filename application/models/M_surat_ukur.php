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




}

?>
