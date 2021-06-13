<?php
    class M_pinjam extends CI_Model{

      function data(){
        $query=$this->db->query("SELECT * FROM `pinjam`");
        return $query->result();
      }

      function tambah($invoice,$tgl_pinjam,$admin,$nip){
        $perintah1="INSERT INTO `pinjam`(`invoice`,`tgl_pinjam`,`admin_tambah`,`nip`)
                        VALUES ('$invoice','$tgl_pinjam','$admin','$nip')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function list_pinjam($invoice){
    		$hasil=$this->db->query("SELECT pinjam.invoice,pinjam.id_pinjam, pinjam.id_bt, pinjam.id_su, pinjam.id_warkah, buku_tanah.no_hak as bt_hak, desa_bt.nama_desa as bt_desa, surat_ukur.nomor as su_nomor, surat_ukur.tahun as su_tahun, desa_su.nama_desa as su_desa, warkah.nomor as w_nomor, warkah.tahun as w_tahun, jenis_hak.nama_jenis_hak as jenis_hak FROM `pinjam` left join buku_tanah on buku_tanah.id_buku_tanah=pinjam.id_bt left JOIN surat_ukur on surat_ukur.id_surat_ukur=pinjam.id_su left JOIN warkah on warkah.id_warkah=pinjam.id_warkah LEFT JOIN desa as desa_bt on buku_tanah.kode_desa=desa_bt.kode_desa LEFT join desa as desa_su on surat_ukur.kode_desa=desa_su.kode_desa left join jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak WHERE pinjam.id_bt IS NOT null or pinjam.id_su IS NOT null or pinjam.id_warkah IS NOT NULL");
    		return $hasil->result();
    	}

      function hapus_list_pinjam($id_pinjam){
    		$hasil=$this->db->query("DELETE FROM `pinjam` WHERE pinjam.id_pinjam=$id_pinjam");
    		return $hasil;
    	}



}

?>
