<?php
    class MBukuTanah extends CI_Model{

      // function lihat(){
      //   $query=$this->db->query("SELECT * FROM `kondisi`");
      //   return $query->result();
      // }
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


        print $perintah1="INSERT INTO `bt`(`idBukuTanah`, `noHak`, `idJenisHak`, `idDesa`, `idKondisi`)
                             VALUES ('$idBukuTanah','$noHak','$idJenisHak','$idDesa','$idKondisi')";
        $query=$this->db->query($perintah1);
        //return $query;
      }
}

?>
