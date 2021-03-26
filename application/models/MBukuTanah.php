<?php
    class MBukuTanah extends CI_Model{

      // function lihat(){
      //   $query=$this->db->query("SELECT * FROM `kondisi`");
      //   return $query->result();
      // }
      function cariBarcode(){

        if(empty($this->input->GET('id'))==false){
          $id=$this->input->GET('id');
          $query=$this->db->query("SELECT * FROM `bt` LEFT JOIN desa on desa.idDesa=bt.idDesa left join kec on kec.idKec=desa.idKec LEFT JOIN kota on kota.idKota=kec.idKota LEFT join prov on prov.idProv=kota.idProv LEFT JOIN jenisHak on jenishak.idJenisHak=bt.idJenisHak WHERE bt.idBukuTanah='$id'");
          return $query->result();
        }else{
          $idKec= $this->input->GET('idKec');
          $idDesa= $this->input->GET('idDesa');
          $idJenisHak= $this->input->GET('idJenisHak');
          $noHak= $this->input->GET('noHak');

          if(empty($idKec)==false && empty($idDesa)==True && empty($idJenisHak)==True && empty($noHak)==true){
            $query=$this->db->query("SELECT * FROM `bt` LEFT JOIN desa on desa.idDesa=bt.idDesa left join kec on kec.idKec=desa.idKec LEFT JOIN kota on kota.idKota=kec.idKota LEFT join prov on prov.idProv=kota.idProv LEFT JOIN jenisHak on jenisaak.idJenisHak=bt.idJenisHak WHERE desa.idKec='$idKec'");
            return $query->result();
          }else if(empty($idKec)==false && empty($idDesa)==False && empty($idJenisHak)==True && empty($noHak)==true){
            $query=$this->db->query("SELECT * FROM `bt` LEFT JOIN desa on desa.idDesa=bt.idDesa left join kec on kec.idKec=desa.idKec LEFT JOIN kota on kota.idKota=kec.idKota LEFT join prov on prov.idProv=kota.idProv LEFT JOIN jenisHak on jenisaak.idJenisHak=bt.idJenisHak WHERE bt.idDesa='$idDesa'");
            return $query->result();
          }else if(empty($idKec)==false && empty($idDesa)==False && empty($idJenisHak)==False && empty($noHak)==true){
            $query=$this->db->query("SELECT * FROM `bt` LEFT JOIN desa on desa.idDesa=bt.idDesa left join kec on kec.idKec=desa.idKec LEFT JOIN kota on kota.idKota=kec.idKota LEFT join prov on prov.idProv=kota.idProv LEFT JOIN jenisHak on jenisaak.idJenisHak=bt.idJenisHak WHERE bt.idDesa='$idDesa' and bt.idJenisHak='$idJenisHak'");
            return $query->result();
          }else if(empty($idKec)==false && empty($idDesa)==False && empty($idJenisHak)==False && empty($noHak)==False){
            $query=$this->db->query("SELECT * FROM `bt` LEFT JOIN desa on desa.idDesa=bt.idDesa left join kec on kec.idKec=desa.idKec LEFT JOIN kota on kota.idKota=kec.idKota LEFT join prov on prov.idProv=kota.idProv LEFT JOIN jenisHak on jenisaak.idJenisHak=bt.idJenisHak WHERE bt.idDesa='$idDesa' and bt.idJenisHak='$idJenisHak' and bt.noHak='$noHak'");
            return $query->result();
          }else if(empty($idKec)==false && empty($idDesa)==false && empty($idJenisHak)==True && empty($noHak)==false){
            $query=$this->db->query("SELECT * FROM `bt` LEFT JOIN desa on desa.idDesa=bt.idDesa left join kec on kec.idKec=desa.idKec LEFT JOIN kota on kota.idKota=kec.idKota LEFT join prov on prov.idProv=kota.idProv LEFT JOIN jenisHak on jenisaak.idJenisHak=bt.idJenisHak WHERE bt.idDesa='$idDesa' and bt.noHak='$noHak'");
            return $query->result();
          }else if(empty($idKec)==true && empty($idDesa)==True && empty($idJenisHak)==True && empty($noHak)==False){
            $query=$this->db->query("SELECT * FROM `bt` LEFT JOIN desa on desa.idDesa=bt.idDesa left join kec on kec.idKec=desa.idKec LEFT JOIN kota on kota.idKota=kec.idKota LEFT join prov on prov.idProv=kota.idProv LEFT JOIN jenisHak on jenisaak.idJenisHak=bt.idJenisHak WHERE bt.nohak='$noHak'");
            return $query->result();
          }else if(empty($idKec)==True && empty($idDesa)==True && empty($idJenisHak)==False && empty($noHak)==False){
            $query=$this->db->query("SELECT * FROM `bt` LEFT JOIN desa on desa.idDesa=bt.idDesa left join kec on kec.idKec=desa.idKec LEFT JOIN kota on kota.idKota=kec.idKota LEFT join prov on prov.idProv=kota.idProv LEFT JOIN jenisHak on jenisaak.idJenisHak=bt.idJenisHak WHERE bt.nohak='$noHak' and bt.idJenisHak='$idJenisHak'");
            return $query->result();
          }else if(empty($idKec)==True && empty($idDesa)==True && empty($idJenisHak)==False && empty($noHak)==True){
            $query=$this->db->query("SELECT * FROM `bt` LEFT JOIN desa on desa.idDesa=bt.idDesa left join kec on kec.idKec=desa.idKec LEFT JOIN kota on kota.idKota=kec.idKota LEFT join prov on prov.idProv=kota.idProv LEFT JOIN jenisHak on jenishak.idJenisHak=bt.idJenisHak WHERE bt.idJenisHak='$idJenisHak'");
            return $query->result();
          }

        }

      }
      function add(){
        $dataalamat = $this->input->post('dataAlamat');
        $idKondisi = $this->input->post('idKondisi');
        $noHak = $this->input->post('noHak');
        $idJenisHak = $this->input->post('idJenisHak');
        $nib = $this->input->post('nib');
        $pecah=explode('-',$dataalamat);
        $idProv=$pecah[0];
        $idKota=$pecah[1];
        $idKec=$pecah[2];
        $idDesa=$pecah[3];
        $idBukuTanah=$idProv."-".$idKota."-".$idKec."-".$idDesa."-".$idJenisHak."-".$noHak."-".$nib;
        $status=1;
        //1 false (tersedia)
        //0 false(tidak tersedia)
        //2 Hilang()
        //3 Belum di tentukan


        print $perintah1="INSERT INTO `bt`(`idBukuTanah`, `noHak`, `idJenisHak`, `idDesa`, `idKondisi`,`status`,`nib`)
                             VALUES ('$idBukuTanah','$noHak','$idJenisHak','$idDesa','$idKondisi','$status','$nib')";
        $query=$this->db->query($perintah1);
        //return $query;
      }
}

?>
