<html lang="en" class="light">
<head>

</head>
<body>
  <div class="p-5" id="standard-editor">
    <h3>Ini render QRcode</h3>
    <table border="1">

    <?php
      $i=0;
      foreach($data_lemari as $data_lemari){
      $i++;
      if($i<5){
        echo"<tr>";
        echo"<td>";
      }
    ?>
          <img src="<?php echo base_url('Code/QRcode/'."BT-".$data_lemari->id_buku_tanah);?>.png" width="10%">
    <?php
    if($i<5){
      echo"</tr>";
      echo"</td>";
    }
    $i++;
}
?>
</table>
</div>

</body>
</html>
