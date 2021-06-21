<?php
    class M_buku_tanah extends CI_Model{

      function cari_barcode(){

        if(empty($this->input->GET('id'))==false){
          $id=$this->input->GET('id');
          $query=$this->db->query("SELECT * FROM `buku_tanah` INNER JOIN desa on desa.id_desa=buku_tanah.id_desa INNER join kec on kec.id_kec=desa.id_kec INNER JOIN kota on kota.id_kota=kec.id_kota INNER JOIN prov on prov.id_prov=kota.id_prov INNER JOIN jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak WHERE buku_tanah.id_buku_tanah='$id'");
          return $query->result();
        }else{
          $id_kec= $this->input->GET('id_kec');
          $id_desa= $this->input->GET('id_desa');
          $id_jenis_hak= $this->input->GET('id_jenis_hak');
          $no_hak1= $this->input->GET('no_hak');
          if(!empty($no_hak1)){
              $no_hak=number_format($no_hak1);
            }
          if(empty($id_kec)==false && empty($id_desa)==True && empty($id_jenis_hak)==True && empty($no_hak)==true){
            $query=$this->db->query("SELECT * FROM `buku_tanah` INNER JOIN desa on desa.id_desa=buku_tanah.id_desa INNER join kec on kec.id_kec=desa.id_kec INNER JOIN kota on kota.id_kota=kec.id_kota INNER JOIN prov on prov.id_prov=kota.id_prov INNER JOIN jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak WHERE desa.id_kec='$id_kec'");
            return $query->result();
          }else if(empty($id_kec)==false && empty($id_desa)==False && empty($id_jenis_hak)==True && empty($no_hak)==true){
            $query=$this->db->query("SELECT * FROM `buku_tanah` INNER JOIN desa on desa.id_desa=buku_tanah.id_desa INNER join kec on kec.id_kec=desa.id_kec INNER JOIN kota on kota.id_kota=kec.id_kota INNER JOIN prov on prov.id_prov=kota.id_prov INNER JOIN jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak WHERE buku_tanah.id_desa='$id_desa' and kec.id_kec='$id_kec'");
            return $query->result();
          }else if(empty($id_kec)==false && empty($id_desa)==False && empty($id_jenis_hak)==False && empty($no_hak)==true){
            $query=$this->db->query("SELECT * FROM `buku_tanah` INNER JOIN desa on desa.id_desa=buku_tanah.id_desa INNER join kec on kec.id_kec=desa.id_kec INNER JOIN kota on kota.id_kota=kec.id_kota INNER JOIN prov on prov.id_prov=kota.id_prov INNER JOIN jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak WHERE buku_tanah.id_desa='$id_desa' and buku_tanah.id_jenis_hak='$id_jenis_hak' and kec.id_kec='$id_kec'");
            return $query->result();
          }else if(empty($id_kec)==false && empty($id_desa)==False && empty($id_jenis_hak)==False && empty($no_hak)==False){
            $query=$this->db->query("SELECT * FROM `buku_tanah` INNER JOIN desa on desa.id_desa=buku_tanah.id_desa INNER join kec on kec.id_kec=desa.id_kec INNER JOIN kota on kota.id_kota=kec.id_kota INNER JOIN prov on prov.id_prov=kota.id_prov INNER JOIN jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak WHERE buku_tanah.id_desa='$id_desa' and buku_tanah.id_jenis_hak='$id_jenis_hak' and buku_tanah.no_hak='$no_hak' and kec.id_kec='$id_kec'");
            //print $a="SELECT * FROM `buku_tanah` INNER JOIN desa on desa.id_desa=buku_tanah.id_desa INNER join kec on kec.id_kec=desa.id_kec INNER JOIN kota on kota.id_kota=kec.id_kota INNER JOIN prov on prov.id_prov=kota.id_prov INNER JOIN jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak WHERE buku_tanah.id_desa='$id_desa' and buku_tanah.id_jenis_hak='$id_jenis_hak' and buku_tanah.no_hak='$no_hak'";
            return $query->result();
          }else if(empty($id_kec)==false && empty($id_desa)==false && empty($id_jenis_hak)==True && empty($no_hak)==false){
            $query=$this->db->query("SELECT * FROM `buku_tanah` INNER JOIN desa on desa.id_desa=buku_tanah.id_desa INNER join kec on kec.id_kec=desa.id_kec INNER JOIN kota on kota.id_kota=kec.id_kota INNER JOIN prov on prov.id_prov=kota.id_prov INNER JOIN jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak WHERE buku_tanah.id_desa='$id_desa' and buku_tanah.no_hak='$no_hak' and kec.id_kec='$id_kec'");
            return $query->result();
          }else if(empty($id_kec)==true && empty($id_desa)==True && empty($id_jenis_hak)==True && empty($no_hak)==False){
            $query=$this->db->query("SELECT * FROM `buku_tanah` INNER JOIN desa on desa.id_desa=buku_tanah.id_desa INNER join kec on kec.id_kec=desa.id_kec INNER JOIN kota on kota.id_kota=kec.id_kota INNER JOIN prov on prov.id_prov=kota.id_prov INNER JOIN jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak WHERE buku_tanah.no_hak LIKE '%$no_hak%'");
            return $query->result();
          }else if(empty($id_kec)==True && empty($id_desa)==True && empty($id_jenis_hak)==False && empty($no_hak)==False){
            $query=$this->db->query("SELECT * FROM `buku_tanah` INNER JOIN desa on desa.id_desa=buku_tanah.id_desa INNER join kec on kec.id_kec=desa.id_kec INNER JOIN kota on kota.id_kota=kec.id_kota INNER JOIN prov on prov.id_prov=kota.id_prov INNER JOIN jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak WHERE buku_tanah.no_hak='$no_hak' and buku_tanah.id_jenis_hak='$id_jenis_hak'");
            return $query->result();
          }else if(empty($id_kec)==True && empty($id_desa)==True && empty($id_jenis_hak)==False && empty($no_hak)==True){
            $query=$this->db->query("SELECT * FROM `buku_tanah` INNER JOIN desa on desa.id_desa=buku_tanah.id_desa INNER join kec on kec.id_kec=desa.id_kec INNER JOIN kota on kota.id_kota=kec.id_kota INNER JOIN prov on prov.id_prov=kota.id_prov INNER JOIN jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak WHERE buku_tanah.id_jenis_hak='$id_jenis_hak'");
            return $query->result();
          }else{
            print"nggak termasuk";
          }

        }

      }
      function add($id_buku_tanah){
        $id_kondisi = $this->input->post('id_kondisi');
        $kode_desa = $this->input->post('kode_desa');
        $no_hak = $this->input->post('nomor_hak');
        $id_jenis_hak = $this->input->post('id_jenis_hak');
        $nib = $this->input->post('nib');
        $id_bundel = $this->input->post('id_bundel');
        $perintah1="INSERT INTO `buku_tanah`(`id_buku_tanah`, `no_hak`, `id_jenis_hak`, `kode_desa`, `id_kondisi`,`nib`,`id_bundel`)
                             VALUES ('$id_buku_tanah','$no_hak','$id_jenis_hak','$kode_desa','$id_kondisi','$nib','$id_bundel')";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function data_buku_tanah_desa($kode_desa){
        $query=$this->db->query("SELECT * FROM `buku_tanah` LEFT JOIN jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak LEFT JOIN desa on desa.kode_desa=buku_tanah.kode_desa LEFT JOIN bundel on bundel.id_bundel=buku_tanah.id_bundel LEFT JOIN kec on kec.kode_kec=desa.kode_kec where desa.kode_desa='$kode_desa'");
        return $query->result();
      }

      function detail_buku_tanah($id_buku_tanah){
        $query=$this->db->query("SELECT * FROM `buku_tanah`LEFT JOIN desa on desa.kode_desa=buku_tanah.kode_desa LEFT JOIN kec on kec.kode_kec=desa.kode_kec left join kota on kota.kode_kota=kec.kode_kota left JOIN prov on prov.kode_prov=kota.kode_prov left join jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak LEFT JOIN bundel on bundel.id_bundel=buku_tanah.id_bundel LEFT JOIN baris on baris.id_baris=bundel.id_baris LEFT JOIN lemari on lemari.id_lemari=baris.id_lemari LEFT JOIN kondisi on kondisi.id_kondisi=buku_tanah.id_kondisi where buku_tanah.id_buku_tanah='$id_buku_tanah'");
        return $query->result();
      }

      function getBukuTanahSuratUkur($id){
        $query=$this->db->query("SELECT * FROM `buku_tanah` LEFT JOIN jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak WHERE buku_tanah.kode_desa='$id' and buku_tanah.id_surat_ukur IS NULL");
        return $query->result();
      }
      function getBukuTanahWarkah($id){
        $query=$this->db->query("SELECT * FROM `buku_tanah` LEFT JOIN jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak WHERE buku_tanah.kode_desa='$id'");
        return $query->result();
      }

      function link_su_bt($id_surat_ukur,$id_buku_tanah){
        $perintah1="UPDATE `buku_tanah` SET `id_surat_ukur`='$id_surat_ukur' WHERE buku_tanah.id_buku_tanah='$id_buku_tanah'";
        $query=$this->db->query($perintah1);
        return $query;
      }

      function detail_su_bt($id_buku_tanah){
        $query=$this->db->query("SELECT desa.nama_desa, lemari.nama_lemari, baris.nama_baris, bundel.nama_bundel, surat_ukur.nib, surat_ukur.nomor, kondisi.nama_kondisi, surat_ukur.nib, surat_ukur.tahun, surat_ukur.status, surat_ukur.id_surat_ukur, surat_ukur.valid from surat_ukur LEFT JOIN desa on desa.kode_desa=surat_ukur.kode_desa LEFT JOIN kec on kec.kode_kec=desa.kode_kec left join kota on kota.kode_kota=kec.kode_kota left JOIN prov on prov.kode_prov=kota.kode_prov LEFT JOIN bundel on bundel.id_bundel=surat_ukur.id_bundel LEFT JOIN baris on baris.id_baris=bundel.id_baris LEFT JOIN lemari on lemari.id_lemari=baris.id_lemari LEFT JOIN buku_tanah on buku_tanah.id_surat_ukur=surat_ukur.id_surat_ukur left join kondisi on surat_ukur.id_kondisi=kondisi.id_kondisi WHERE buku_tanah.id_buku_tanah='$id_buku_tanah'");
        return $query->result();
      }

      function detail_warkah_bt($id_buku_tanah){
        $query=$this->db->query("SELECT desa.nama_desa, lemari.nama_lemari, baris.nama_baris, bundel.nama_bundel, warkah.nomor, kondisi.nama_kondisi, warkah.tahun, warkah.status, warkah.nomor, warkah.id_warkah, warkah.valid from warkah LEFT JOIN desa on desa.kode_desa=warkah.kode_desa LEFT JOIN kec on kec.kode_kec=desa.kode_kec left join kota on kota.kode_kota=kec.kode_kota left JOIN prov on prov.kode_prov=kota.kode_prov LEFT JOIN bundel on bundel.id_bundel=warkah.id_bundel LEFT JOIN baris on baris.id_baris=bundel.id_baris LEFT JOIN lemari on lemari.id_lemari=baris.id_lemari left join kondisi on warkah.id_kondisi=kondisi.id_kondisi WHERE warkah.id_buku_tanah='$id_buku_tanah'");
        return $query->result();
      }

      function ubah_status($id_buku_tanah,$status){
        $query=$this->db->query("UPDATE `buku_tanah` SET `status`=$status WHERE id_buku_tanah='$id_buku_tanah'");
        return $query;
      }
}

?>
