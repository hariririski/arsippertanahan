<?php
    class M_pinjam extends CI_Model{

      function data(){
        $query=$this->db->query("SELECT * FROM `pinjam` left join pegawai on pegawai.nip=pinjam.nip WHERE pinjam.induk=1 order by pinjam.status ASC");
        return $query->result();
      }
      function data_pinjam_m(){
        $query=$this->db->query("SELECT *, buku_tanah.id_buku_tanah as bt_id_buku_tanah, desa_bt.nama_desa as bt_desa, desa_su.nama_desa as su_desa, warkah.nomor as w_nomor, surat_ukur.nomor as su_nomor, surat_ukur.tahun as su_tahun, warkah.tahun as w_tahun FROM `pinjam` left join pegawai on pegawai.nip=pinjam.nip LEFT JOIN buku_tanah on buku_tanah.id_buku_tanah=pinjam.id_buku_tanah LEFT JOIN surat_ukur on surat_ukur.id_surat_ukur=pinjam.id_surat_ukur LEFT JOIN warkah on warkah.id_warkah=pinjam.id_warkah left join jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak left join desa as desa_bt on desa_bt.kode_desa=buku_tanah.kode_desa LEFT JOIN desa as desa_su on desa_su.kode_desa=surat_ukur.kode_desa LEFT JOIN waktu on waktu.id_waktu=pinjam.id_waktu WHERE pinjam.induk=0 and pinjam.status=2 order by pinjam.tgl_pinjam ASC limit 10");
        return $query->result();
      }
      function data_kembali_m(){
        $query=$this->db->query("SELECT *, buku_tanah.id_buku_tanah as bt_id_buku_tanah, desa_bt.nama_desa as bt_desa, desa_su.nama_desa as su_desa, warkah.nomor as w_nomor, surat_ukur.nomor as su_nomor, surat_ukur.tahun as su_tahun, warkah.tahun as w_tahun FROM `pinjam` left join pegawai on pegawai.nip=pinjam.nip LEFT JOIN buku_tanah on buku_tanah.id_buku_tanah=pinjam.id_buku_tanah LEFT JOIN surat_ukur on surat_ukur.id_surat_ukur=pinjam.id_surat_ukur LEFT JOIN warkah on warkah.id_warkah=pinjam.id_warkah left join jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak left join desa as desa_bt on desa_bt.kode_desa=buku_tanah.kode_desa LEFT JOIN desa as desa_su on desa_su.kode_desa=surat_ukur.kode_desa LEFT JOIN waktu on waktu.id_waktu=pinjam.id_waktu WHERE pinjam.induk=0 and pinjam.status=3 order by pinjam.tgl_dikembalikan ASC limit 10");
        return $query->result();
      }
      function data_aktifitas_m(){
        $query=$this->db->query("SELECT *,pinjam.status as ket, buku_tanah.id_buku_tanah as bt_id_buku_tanah, desa_bt.nama_desa as bt_desa, desa_su.nama_desa as su_desa, warkah.nomor as w_nomor, surat_ukur.nomor as su_nomor, surat_ukur.tahun as su_tahun, warkah.tahun as w_tahun FROM `pinjam` left join pegawai on pegawai.nip=pinjam.nip LEFT JOIN buku_tanah on buku_tanah.id_buku_tanah=pinjam.id_buku_tanah LEFT JOIN surat_ukur on surat_ukur.id_surat_ukur=pinjam.id_surat_ukur LEFT JOIN warkah on warkah.id_warkah=pinjam.id_warkah left join jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak left join desa as desa_bt on desa_bt.kode_desa=buku_tanah.kode_desa LEFT JOIN desa as desa_su on desa_su.kode_desa=surat_ukur.kode_desa LEFT JOIN waktu on waktu.id_waktu=pinjam.id_waktu WHERE pinjam.induk=0 order by pinjam.tgl_pinjam and pinjam.tgl_dikembalikan and pinjam.tgl_susun ASC limit 10");
        return $query->result();
      }
      function histori($id_buku_tanah,$id_surat_ukur,$id_warkah){
        $query=$this->db->query("SELECT *, pinjam.status as status_pinjam , datediff(pinjam.tgl_pinjam,pinjam.tgl_dikembalikan) as selisih, pinjam.id_buku_tanah as buku_tanah, pinjam.id_surat_ukur as surat_ukur, pinjam.id_warkah as warkah, surat_ukur.nomor as nomor_su, surat_ukur.tahun as tahun_su , warkah.nomor as nomor_w, warkah.tahun as tahun_w FROM `pinjam` left join pegawai on pegawai.nip=pinjam.nip left join buku_tanah on buku_tanah.id_buku_tanah=pinjam.id_buku_tanah left join surat_ukur on surat_ukur.id_surat_ukur=pinjam.id_surat_ukur left join warkah on warkah.id_warkah=pinjam.id_warkah WHERE pinjam.id_buku_tanah='$id_buku_tanah' or pinjam.id_surat_ukur='$id_surat_ukur' or pinjam.id_warkah='$id_warkah' order by pinjam.tgl_pinjam desc limit 50");
        return $query->result();
      }

      function pinjam_surat_ukur($id_surat_ukur){
        $query=$this->db->query("SELECT *, datediff(pinjam.tgl_pinjam,pinjam.tgl_dikembalikan) as selisih FROM `pinjam` left join pegawai on pegawai.nip=pinjam.nip WHERE id_surat_ukur='$id_surat_ukur' order by pinjam.tgl_pinjam ASC limit 50");
        return $query->result();
      }

      function pinjam_warkah($id_warkah){
        $query=$this->db->query("SELECT *, datediff(pinjam.tgl_pinjam,pinjam.tgl_dikembalikan) as selisih FROM `pinjam` left join pegawai on pegawai.nip=pinjam.nip WHERE id_warkah='$id_warkah' order by pinjam.tgl_pinjam ASC limit 50");
        return $query->result();
      }

      function data_all(){
        $query=$this->db->query("SELECT pinjam.status, pinjam.tgl_pinjam, pinjam.admin_tambah, pegawai.nama_lengkap, pinjam.id_pinjam, pinjam.invoice, buku_tanah.no_hak, surat_ukur.nomor as nomor_su, surat_ukur.tahun as tahun_su, warkah.nomor as nomor_w, warkah.tahun as tahun_w, pinjam.id_buku_tanah, pinjam.id_surat_ukur, pinjam.id_warkah, desa_bt.nama_desa as desa_bt, desa_su.nama_desa as desa_su, jenis_hak.nama_jenis_hak FROM `pinjam` left join pegawai on pegawai.nip=pinjam.nip left join buku_tanah on buku_tanah.id_buku_tanah=pinjam.id_buku_tanah left JOIN surat_ukur on surat_ukur.id_surat_ukur=pinjam.id_surat_ukur left JOIN warkah on warkah.id_warkah=pinjam.id_warkah LEFT JOIN desa as desa_bt on buku_tanah.kode_desa=desa_bt.kode_desa LEFT join desa as desa_su on surat_ukur.kode_desa=desa_su.kode_desa left join jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak left join waktu on waktu.id_waktu=pinjam.id_waktu WHERE pinjam.induk=0 and pinjam.status=2");
        return $query->result();
      }

      function data_susun(){
        $query=$this->db->query("SELECT pinjam.status, pinjam.tgl_pinjam, pinjam.admin_tambah, pegawai.nama_lengkap, pinjam.id_pinjam, pinjam.invoice, buku_tanah.no_hak, surat_ukur.nomor as nomor_su, surat_ukur.tahun as tahun_su, warkah.nomor as nomor_w, warkah.tahun as tahun_w, pinjam.id_buku_tanah, pinjam.id_surat_ukur, pinjam.id_warkah, desa_bt.nama_desa as desa_bt, desa_su.nama_desa as desa_su, jenis_hak.nama_jenis_hak FROM `pinjam` left join pegawai on pegawai.nip=pinjam.nip left join buku_tanah on buku_tanah.id_buku_tanah=pinjam.id_buku_tanah left JOIN surat_ukur on surat_ukur.id_surat_ukur=pinjam.id_surat_ukur left JOIN warkah on warkah.id_warkah=pinjam.id_warkah LEFT JOIN desa as desa_bt on buku_tanah.kode_desa=desa_bt.kode_desa LEFT join desa as desa_su on surat_ukur.kode_desa=desa_su.kode_desa left join jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak left join waktu on waktu.id_waktu=pinjam.id_waktu WHERE pinjam.induk=0 and pinjam.status=3");
        return $query->result();
      }
      function detail_pinjam_susun($id_pinjam){
        $query=$this->db->query("SELECT pinjam.status,datediff(pinjam.tgl_kembali,pinjam.tgl_dikembalikan) as selisih, pinjam.tgl_dikembalikan, pinjam.tgl_pinjam, pinjam.admin_tambah, pegawai.nama_lengkap, pinjam.id_pinjam, pinjam.invoice, buku_tanah.no_hak, surat_ukur.nomor as nomor_su, surat_ukur.tahun as tahun_su, warkah.nomor as nomor_w, warkah.tahun as tahun_w, pinjam.id_buku_tanah, pinjam.id_surat_ukur, pinjam.id_warkah, desa_bt.nama_desa as desa_bt, desa_su.nama_desa as desa_su, jenis_hak.nama_jenis_hak, bundel_bt.nama_bundel as nama_bundel_bt, bundel_su.nama_bundel as nama_bundel_su, bundel_w.nama_bundel as nama_bundel_w, baris_bt.nama_baris as baris_bt, baris_su.nama_baris as baris_su, baris_w.nama_baris as baris_w, lemari_bt.nama_lemari as lemari_bt, lemari_su.nama_lemari as lemari_su, lemari_w.nama_lemari as lemari_w, bundel_bt.id_bundel as id_bundel_bt, bundel_su.id_bundel as id_bundel_su, bundel_w.id_bundel as id_bundel_w FROM `pinjam` left join pegawai on pegawai.nip=pinjam.nip left join buku_tanah on buku_tanah.id_buku_tanah=pinjam.id_buku_tanah left JOIN surat_ukur on surat_ukur.id_surat_ukur=pinjam.id_surat_ukur left JOIN warkah on warkah.id_warkah=pinjam.id_warkah LEFT JOIN desa as desa_bt on buku_tanah.kode_desa=desa_bt.kode_desa LEFT join desa as desa_su on surat_ukur.kode_desa=desa_su.kode_desa left join jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak left join waktu on waktu.id_waktu=pinjam.id_waktu left join bundel as bundel_bt on buku_tanah.id_bundel=bundel_bt.id_bundel left join bundel as bundel_su on bundel_su.id_bundel=surat_ukur.id_bundel left join bundel as bundel_w on bundel_w.id_bundel=warkah.id_bundel left join baris as baris_bt on baris_bt.id_baris=bundel_bt.id_baris left join baris as baris_su on baris_su.id_baris=bundel_su.id_baris left join baris as baris_w on baris_w.id_baris=bundel_w.id_baris left join lemari as lemari_bt on lemari_bt.id_lemari=baris_bt.id_lemari left join lemari as lemari_su on lemari_su.id_lemari=baris_su.id_lemari left join lemari as lemari_w on lemari_w.id_lemari=baris_w.id_lemari WHERE pinjam.induk=0 and pinjam.status=3 and pinjam.id_pinjam='$id_pinjam'");
        return $query->result();
      }

      function tambah($invoice,$tgl_pinjam,$nip,$admin){
        $perintah1="INSERT INTO `pinjam`(`invoice`,`tgl_pinjam`,`admin_tambah`,`nip`,`induk`,`status`)
                        VALUES ('$invoice','$tgl_pinjam','$admin','$nip',1,1)";
                        //1 berarti induk tidak memuat data peminjaman
        $query=$this->db->query($perintah1);
        return $query;
      }

      function tambah_bt($invoice,$tgl_pinjam,$nip,$admin,$id_buku_tanah){
        $perintah1="INSERT INTO `pinjam`(`invoice`,`tgl_pinjam`,`admin_tambah`,`nip`,`id_buku_tanah`)
                                 VALUES ('$invoice','$tgl_pinjam','$admin','$nip','$id_buku_tanah')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function tambah_su($invoice,$tgl_pinjam,$nip,$admin,$id_surat_ukur){
        $perintah1="INSERT INTO `pinjam`(`invoice`,`tgl_pinjam`,`admin_tambah`,`nip`,`id_surat_ukur`)
                                 VALUES ('$invoice','$tgl_pinjam','$admin','$nip','$id_surat_ukur')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function tambah_warkah($invoice,$tgl_pinjam,$nip,$admin,$warkah){
        $perintah1="INSERT INTO `pinjam`(`invoice`,`tgl_pinjam`,`admin_tambah`,`nip`,`id_warkah`)
                                 VALUES ('$invoice','$tgl_pinjam','$admin','$nip','$warkah')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function list_pinjam($invoice){
    		$hasil=$this->db->query("SELECT pinjam.invoice,pinjam.id_pinjam, pinjam.id_buku_tanah, pinjam.id_surat_ukur, pinjam.id_warkah, buku_tanah.no_hak as bt_hak, waktu.pelayanan,pinjam.id_waktu ,waktu.durasi, desa_bt.nama_desa as bt_desa, surat_ukur.nomor as su_nomor, surat_ukur.tahun as su_tahun, desa_su.nama_desa as su_desa, warkah.nomor as w_nomor, warkah.tahun as w_tahun, jenis_hak.nama_jenis_hak as jenis_hak FROM `pinjam` left join buku_tanah on  buku_tanah.id_buku_tanah=pinjam.id_buku_tanah left JOIN surat_ukur on surat_ukur.id_surat_ukur=pinjam.id_surat_ukur left JOIN warkah on warkah.id_warkah=pinjam.id_warkah LEFT JOIN desa as desa_bt on buku_tanah.kode_desa=desa_bt.kode_desa LEFT join desa as desa_su on surat_ukur.kode_desa=desa_su.kode_desa left join jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak left join waktu on waktu.id_waktu=pinjam.id_waktu WHERE invoice='$invoice' and pinjam.induk=0");
    		return $hasil->result();
    	}

      function detail_pinjam($invoice){
    		$hasil=$this->db->query("SELECT pinjam.invoice,pinjam.id_pinjam, pinjam.id_buku_tanah, pinjam.id_surat_ukur, pinjam.id_warkah, buku_tanah.no_hak as bt_hak, waktu.pelayanan,pinjam.id_waktu ,waktu.durasi, desa_bt.nama_desa as bt_desa, surat_ukur.nomor as su_nomor, surat_ukur.tahun as su_tahun, desa_su.nama_desa as su_desa, warkah.nomor as w_nomor, warkah.tahun as w_tahun, jenis_hak.nama_jenis_hak as jenis_hak, pinjam.tgl_pinjam, pinjam.tgl_kembali, datediff(current_date(),pinjam.tgl_kembali) as selisih, pinjam.tgl_dikembalikan, pinjam.admin_tambah, pinjam.admin_kembali FROM `pinjam` left join buku_tanah on buku_tanah.id_buku_tanah=pinjam.id_buku_tanah left JOIN surat_ukur on surat_ukur.id_surat_ukur=pinjam.id_surat_ukur left JOIN warkah on warkah.id_warkah=pinjam.id_warkah LEFT JOIN desa as desa_bt on buku_tanah.kode_desa=desa_bt.kode_desa LEFT join desa as desa_su on surat_ukur.kode_desa=desa_su.kode_desa left join jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak left join waktu on waktu.id_waktu=pinjam.id_waktu WHERE invoice='$invoice' and pinjam.induk=0");
    		return $hasil->result();
    	}

      function hapus_list_pinjam($id_pinjam){
    		$hasil=$this->db->query("DELETE FROM `pinjam` WHERE pinjam.id_pinjam=$id_pinjam");
    		return $hasil;
    	}

      function update_waktu_list_pinjam($id_pinjam,$id_waktu,$tgl_kembali){
    		$hasil=$this->db->query("UPDATE `pinjam` SET `id_waktu`=$id_waktu, `tgl_kembali`='$tgl_kembali' WHERE `id_pinjam`=$id_pinjam");
    		return $hasil;
    	}
      function simpan_pinjam($invoice,$status){
    		$hasil=$this->db->query("UPDATE `pinjam` SET `status`=$status WHERE `invoice`='$invoice'");
    		return $hasil;
    	}

      function kembalikan($id_pinjam,$status,$tgl_dikembalikan,$admin_kembali){
    		$perintah=("UPDATE `pinjam` SET `status`=$status, `tgl_dikembalikan`='$tgl_dikembalikan', `admin_kembali`='$admin_kembali' WHERE `id_pinjam`='$id_pinjam'");
        $hasil=$this->db->query($perintah);
        return $hasil;
    	}

      function susun($id_pinjam,$status,$tgl_susun,$admin_susun){
    		$perintah=("UPDATE `pinjam` SET `status`=$status, `tgl_susun`='$tgl_susun', `admin_susun`='$admin_susun' WHERE `id_pinjam`='$id_pinjam'");
        $hasil=$this->db->query($perintah);
        return $hasil;
    	}

      function ubah_status_induk($invoice,$status){
        //3 sudah di pinjam, blm disusun, 4 selesai
    		$perintah=("UPDATE `pinjam` SET `status`=$status where invoice='$invoice' and induk=1");
        $hasil=$this->db->query($perintah);
        return $hasil;
    	}



}

?>
