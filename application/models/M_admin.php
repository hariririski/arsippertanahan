<?php
    class M_admin extends CI_Model{
      function lihat(){
        $query=$this->db->query("SELECT * FROM `admin`");
        return $query->result();
      }
      function add(){
        $nama_lengkap = $this->input->post('nama_lengkap');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $password = md5($password);
        $level = $this->input->post('level');
        $image;
        $status=0;
        switch($level){
          case 1:
              $image="assets/images/users/admin.jpg";
              break;
          case 2:
              $image="assets/images/users/pustaka.jpg";
              break;
          case 3:
              $image="assets/images/users/umum.jpg";
              break;
        }

        $perintah1="INSERT INTO `admin`(`username`, `password`, `level`, `status`, `nama_lengkap`, `image`)
                                VALUES ('$username','$password','$level','$status','$nama_lengkap','$image')";
        $query=$this->db->query($perintah1);
        return $query;
      }
}

?>
