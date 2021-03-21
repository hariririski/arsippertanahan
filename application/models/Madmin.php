<?php
    class MAdmin extends CI_Model{
      function lihat(){
        $query=$this->db->query("SELECT * FROM `admin`");
        return $query->result();
      }
      function add(){
        $namaLengkap = $this->input->post('namaLengkap');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $password = md5($password);
        $level = $this->input->post('level');
        $image;
        $status=0;
        switch($level){
          case 1:
              $image="dist/images/1.png";
              break;
          case 2:
              $image="dist/images/2.png";
              break;
          case 3:
              $image="dist/images/3.png";
              break;
        }

        $perintah1="INSERT INTO `admin`(`username`, `password`, `level`, `status`, `namaLengkap`, `image`)
                                VALUES ('$username','$password','$level','$status','$namaLengkap','$image')";
        $query=$this->db->query($perintah1);
        return $query;
      }
}

?>
