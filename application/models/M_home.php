<?php
    class M_home extends CI_Model{

      function jumlah_buku_tanah(){
        $query=$this->db->query("SELECT COUNT(id_buku_tanah)as jumlah_buku_tanah FROM `buku_tanah`");
        return $query->result();
      }



}

?>
