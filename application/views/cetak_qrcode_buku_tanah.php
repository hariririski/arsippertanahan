<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Gutter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>

</head>

<body>

    <div class="container">
      <div class="row g-1">
      <?php
        $i=0;
        $a;
        $b;
        $jumlah=count($buku_tanah);
        foreach($buku_tanah as $data){
        $a[$i]=$data->id_buku_tanah;
        $b[$i]=$data->id_prov.".".$data->id_kota.".".$data->id_kec.".".$data->id_desa.".".$data->id_jenis_hak.".".$data->no_hak;
        $i++;
        }
        for($j=0; $j<$jumlah; $j++){
        ?>

          <div class="col 2">
          <p align="center" style="font-size:2vw; font-style:Times New Roman;">
               <img src="<?php echo base_url('Code/QRcode/'."BT-".$a[$j]);?>" width="120px" >
               <?php echo $b[$j];?>
             </p>
          </div>

        <?php
        // if($j%6==0){
        //   echo'
        //   <div class="col 2">
        //     <p align="center" style="font-size:2vw; font-style:Times New Roman;">
        //        <br>
        //        <br>
        //        <br>
        //      </p>
        //   </div>
        //   ';
        // }
        }
        ?>
</div>
    </div>

</body>

</html>
