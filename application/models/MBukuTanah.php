<?php
    class MBukuTanah extends CI_Model{

      // function lihat(){
      //   $query=$this->db->query("SELECT * FROM `kondisi`");
      //   return $query->result();
      // }
      function cariBarcode(){
        $id=null;
        $id= $this->input->GET('id');
        if($id!=null){
          $query=$this->db->query("SELECT * FROM `bt` LEFT JOIN desa on desa.idDesa=bt.idDesa left join kec on kec.idKec=desa.idKec LEFT JOIN kota on kota.idKota=kec.idKota LEFT join prov on prov.idProv=kota.idProv LEFT JOIN jenisHak on jenisHak.idJenisHak=bt.idJenisHak WHERE bt.idBukuTanah='$id'");
          return $query->result();
        }else{
          print $noHak= $this->input->GET('noHak');
          print"<br>";
          print $idDesa= $this->input->GET('idDesa');
          print"<br>";
          print $idJenisHak= $this->input->GET('idJenisHak');
          print"<br>";
          print $idKota= $this->input->GET('idKota');
          print"<br>";
          print $idKec= $this->input->GET('idKec');
          print"<br>";
          print $idDesa= $this->input->GET('idDesa');
          print"<br>";
        }

      }
      function add(){
        $dataalamat = $this->input->post('dataAlamat');
        $idKondisi = $this->input->post('idKondisi');
        $noHak = $this->input->post('noHak');
        $idJenisHak = $this->input->post('idJenisHak');
        $pecah=explode('-',$dataalamat);
        $idProv=$pecah[0];
        $idKota=$pecah[1];
        $idKec=$pecah[2];
        $idDesa=$pecah[3];
        $idBukuTanah=$idProv."-".$idKota."-".$idKec."-".$idDesa."-".$idJenisHak."-".$noHak;
        $status=1;
        //1 false (tersedia)
        //0 false(tidak tersedia)
        //2 Hilang()
        //3 Belum di tentukan


        print $perintah1="INSERT INTO `bt`(`idBukuTanah`, `noHak`, `idJenisHak`, `idDesa`, `idKondisi`,`status`)
                             VALUES ('$idBukuTanah','$noHak','$idJenisHak','$idDesa','$idKondisi','$status')";
        $query=$this->db->query($perintah1);
        //return $query;
      }
}

?>
