<?php
    class M_buku_tanah extends CI_Model{

      // function lihat(){
      //   $query=$this->db->query("SELECT * FROM `kondisi`");
      //   return $query->result();
      // }
      function cariBarcode(){

        if(empty($this->input->GET('id'))==false){
          $id=$this->input->GET('id');
          $query=$this->db->query("SELECT * FROM `buku_tanah` LEFT JOIN desa on desa.id_desa=buku_tanah.id_desa left join kec on kec.id_kec=desa.id_kec LEFT JOIN kota on kota.id_kota=kec.id_kota LEFT join prov on prov.id_prov=kota.id_prov LEFT JOIN jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak WHERE buku_tanah.id_buku_tanah='$id'");
          return $query->result();
        }else{
          $id_kec= $this->input->GET('id_kec');
          $id_desa= $this->input->GET('id_desa');
          $id_jenis_hak= $this->input->GET('id_jenis_hak');
          $no_hak= $this->input->GET('no_hak');

          if(empty($id_kec)==false && empty($id_desa)==True && empty($id_jenis_hak)==True && empty($no_hak)==true){
            $query=$this->db->query("SELECT * FROM `buku_tanah` LEFT JOIN desa on desa.id_desa=buku_tanah.id_desa left join kec on kec.id_kec=desa.id_kec LEFT JOIN kota on kota.id_kota=kec.id_kota LEFT join prov on prov.id_prov=kota.id_prov LEFT JOIN jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak WHERE desa.id_kec='$id_kec'");
            return $query->result();
          }else if(empty($id_kec)==false && empty($id_desa)==False && empty($id_jenis_hak)==True && empty($no_hak)==true){
            $query=$this->db->query("SELECT * FROM `buku_tanah` LEFT JOIN desa on desa.id_desa=buku_tanah.id_desa left join kec on kec.id_kec=desa.id_kec LEFT JOIN kota on kota.id_kota=kec.id_kota LEFT join prov on prov.id_prov=kota.id_prov LEFT JOIN jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak WHERE buku_tanah.id_desa='$id_desa'");
            return $query->result();
          }else if(empty($id_kec)==false && empty($id_desa)==False && empty($id_jenis_hak)==False && empty($no_hak)==true){
            $query=$this->db->query("SELECT * FROM `buku_tanah` LEFT JOIN desa on desa.id_desa=buku_tanah.id_desa left join kec on kec.id_kec=desa.id_kec LEFT JOIN kota on kota.id_kota=kec.id_kota LEFT join prov on prov.id_prov=kota.id_prov LEFT JOIN jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak WHERE buku_tanah.id_desa='$id_desa' and buku_tanah.id_jenis_hak='$id_jenis_hak'");
            return $query->result();
          }else if(empty($id_kec)==false && empty($id_desa)==False && empty($id_jenis_hak)==False && empty($no_hak)==False){
            $query=$this->db->query("SELECT * FROM `buku_tanah` LEFT JOIN desa on desa.id_desa=buku_tanah.id_desa left join kec on kec.id_kec=desa.id_kec LEFT JOIN kota on kota.id_kota=kec.id_kota LEFT join prov on prov.id_prov=kota.id_prov LEFT JOIN jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak WHERE buku_tanah.id_desa='$id_desa' and buku_tanah.id_jenis_hak='$id_jenis_hak' and buku_tanah.no_hak='$no_hak'");
            return $query->result();
          }else if(empty($id_kec)==false && empty($id_desa)==false && empty($id_jenis_hak)==True && empty($no_hak)==false){
            $query=$this->db->query("SELECT * FROM `buku_tanah` LEFT JOIN desa on desa.id_desa=buku_tanah.id_desa left join kec on kec.id_kec=desa.id_kec LEFT JOIN kota on kota.id_kota=kec.id_kota LEFT join prov on prov.id_prov=kota.id_prov LEFT JOIN jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak WHERE buku_tanah.id_desa='$id_desa' and buku_tanah.no_hak='$no_hak'");
            return $query->result();
          }else if(empty($id_kec)==true && empty($id_desa)==True && empty($id_jenis_hak)==True && empty($no_hak)==False){
            $query=$this->db->query("SELECT * FROM `buku_tanah` LEFT JOIN desa on desa.id_desa=buku_tanah.id_desa left join kec on kec.id_kec=desa.id_kec LEFT JOIN kota on kota.id_kota=kec.id_kota LEFT join prov on prov.id_prov=kota.id_prov LEFT JOIN jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak WHERE buku_tanah.no_hak='$no_hak'");
            return $query->result();
          }else if(empty($id_kec)==True && empty($id_desa)==True && empty($id_jenis_hak)==False && empty($no_hak)==False){
            $query=$this->db->query("SELECT * FROM `buku_tanah` LEFT JOIN desa on desa.id_desa=buku_tanah.id_desa left join kec on kec.id_kec=desa.id_kec LEFT JOIN kota on kota.id_kota=kec.id_kota LEFT join prov on prov.id_prov=kota.id_prov LEFT JOIN jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak WHERE buku_tanah.no_hak='$no_hak' and buku_tanah.id_jenis_hak='$id_jenis_hak'");
            return $query->result();
          }else if(empty($id_kec)==True && empty($id_desa)==True && empty($id_jenis_hak)==False && empty($no_hak)==True){
            $query=$this->db->query("SELECT * FROM `buku_tanah` LEFT JOIN desa on desa.id_desa=buku_tanah.id_desa left join kec on kec.id_kec=desa.id_kec LEFT JOIN kota on kota.id_kota=kec.id_kota LEFT join prov on prov.id_prov=kota.id_prov LEFT JOIN jenis_hak on jenis_hak.id_jenis_hak=buku_tanah.id_jenis_hak WHERE buku_tanah.id_jenis_hak='$id_jenis_hak'");
            return $query->result();
          }

        }

      }
      function add(){
        $data_alamat = $this->input->post('data_alamat');
        $id_kondisi = $this->input->post('id_kondisi');
        $no_hak = $this->input->post('no_hak');
        $id_jenis_hak = $this->input->post('id_jenis_hak');
        $nib = $this->input->post('nib');
        $pecah=explode('-',$data_alamat);
        $id_prov=$pecah[0];
        $id_kota=$pecah[1];
        $id_kec=$pecah[2];
        $id_desa=$pecah[3];
        $id_buku_tanah=$id_prov."-".$id_kota."-".$id_kec."-".$id_desa."-".$id_jenis_hak."-".$no_hak."-".$nib;
        $status=1;
        //1 false (tersedia)
        //0 false(tidak tersedia)
        //2 Hilang()
        //3 Belum di tentukan


        print $perintah1="INSERT INTO `buku_tanah`(`id_buku_tanah`, `no_hak`, `id_jenis_hak`, `id_desa`, `idKondisi`,`status`,`nib`)
                             VALUES ('$id_buku_tanah','$no_hak','$id_jenis_hak','$id_desa','$idKondisi','$status','$nib')";
        $query=$this->db->query($perintah1);
        //return $query;
      }
}

?>
