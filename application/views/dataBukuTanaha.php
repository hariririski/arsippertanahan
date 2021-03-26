
<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Icewall admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Icewall Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title></title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="dist/css/app.css">
  


        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="main">
        <!-- BEGIN: Mobile Menu -->
      <?php echo $this->load->view('share/mobilemenu', '', TRUE);?>
        <!-- END: Mobile Menu -->
        <!-- BEGIN: Top Bar -->
      <?php echo $this->load->view('share/profile', '', TRUE);?>
        <!-- END: Top Bar -->
        <div class="wrapper">
            <div class="wrapper-box">
                <!-- BEGIN: Side Menu -->
                <?php echo $this->load->view('share/dekstopmenu', '', TRUE);?>
                <!-- END: Side Menu -->
                <!-- BEGIN: Content -->
                <div class="content">
                    <div class="flex items-center mt-8">
                        <h2 class="text-lg font-medium mr-auto">
                            Pencarian Buku Tanah
                        </h2>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <!-- BEGIN: Simple Editor -->
                        <div class="col-span-12 lg:col-span-12">
                            <div class="box">
                                <form action="<?php echo base_url(); ?>caribukutanah1" method="GET" enctype="multipart/form-data">
                                  <div id="inline-form" class="p-5">
                                      <div class="preview">
                                          <div class="grid grid-cols-12 gap-3">
                                              <select class="form-select form-control col-span-5" aria-label=".form-select-lg example" id="provinsi" name="idProv">

                                               <?php
                                                 foreach($dataProvinsi as $dataProvinsi){
                                               ?>
                                                 <option value="<?php echo $dataProvinsi->idProv; ?>"><?php echo $dataProvinsi->namaProv; ?></option>
                                               <?php } ?>
                                              </select>
                                              <select class="form-select form-control col-span-5 getKota" aria-label=".form-select-lg example" id="kota" name="idKota">
                                                <?php
                                                  foreach($dataKota as $dataKota){
                                                ?>
                                                  <option value="<?php echo $dataKota->idKota; ?>"><?php echo $dataKota->namaKota; ?></option>
                                                <?php } ?>
                                              </select>
                                              <select class="form-select form-control col-span-5 getKec" aria-label=".form-select-lg example" id="kec" name="idKec">
                                               <option value="">Kecamatan</option>
                                               <?php
                                                 foreach($dataKecamatan as $dataKecamatan){
                                               ?>
                                                 <option value="<?php echo $dataKecamatan->idKec; ?>"><?php echo $dataKecamatan->namaKec; ?></option>
                                               <?php } ?>
                                              </select>
                                              <select class="form-select form-control col-span-3 getDesa" aria-label=".form-select-lg example" name="idDesa">
                                               <option value="">Desa</option>

                                              </select>
                                              <select class="form-select form-control col-span-5" aria-label=".form-select-lg example" name="idJenisHak">
                                                <option value="">Jenis Hak</option>
                                                <?php
                                                  foreach($dataJenisHak as $dataJenisHak){
                                                ?>
                                                  <option value="<?php echo $dataJenisHak->idJenisHak; ?>"><?php echo $dataJenisHak->namaJenisHak; ?></option>
                                                <?php } ?>
                                              </select>
                                              <input type="text" class="form-control col-span-3" placeholder="No Hak" aria-label="default input inline 1" name="noHak">
                                              <button align="right" class=" form-control col-span-5 btn btn-primary">Cari</button>
                                          </div>
                                      </div>
                                  </div>
                              </form>
                            </div>
                        </div>
                        <!-- END: Simple Editor -->
                    </div>

                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <!-- BEGIN: Simple Editor -->
                        <div class="col-span-12 lg:col-span-12">
                            <div class="box">
                                <form action="<?php echo base_url(); ?>caribukutanah1" method="GET" enctype="multipart/form-data" >
                                  <div id="inline-form" class="p-5">
                                      <div class="preview">
                                          <div class="grid grid-cols-12 gap-3">
                                              <input type="text" class="form-control col-span-6" placeholder="No Hak Pada Barcode" aria-label="default input inline 1" name="id" autofocus=”autofocus”>
                                              <button align="right" class=" form-control col-span-5 btn btn-primary">Cari</button>
                                          </div>
                                      </div>
                                  </div>
                              </form>
                            </div>
                        </div>
                        <!-- END: Simple Editor -->
                    </div>



                </div>
                <!-- END: Content -->
            </div>
        </div>

        <!-- BEGIN: JS Assets-->
        <script src="dist/js/markerclusterer.js"></script>
        <script src="dist/js/js.js"></script>
        <script src="dist/js/app.js"></script>
        <script src="<?php echo base_url(); ?>dist/js/jquery-3.3.1.js"></script>
        <script type="text/javascript">
          $(document).ready(function(){
            $('#provinsi').change(function(){
              var id=$(this).val();
              $.ajax({
                url : "<?php echo base_url();?>Provinsi/getKota",
                method : "POST",
                data : {id: id},
                async : false,
                dataType : 'json',
                success: function(data){
                  var html = '';
                  var i;
                  html += '<option value="">Pilih Kota</option>';
                  for(i=0; i<data.length; i++){
                    html += '<option value="'+data[i].idKota+'">'+data[i].namaKota+'</option>';
                  }
                  $('.getKota').html(html);

                }
              });
            });
          });
        </script>
        <script type="text/javascript">
          $(document).ready(function(){
            $('#kota').change(function(){
              var id=$(this).val();
              $.ajax({
                url : "<?php echo base_url();?>Provinsi/getKec",
                method : "POST",
                data : {id: id},
                async : false,
                dataType : 'json',
                success: function(data){
                  var html = '';
                  var i;
                  html += '<option value="">Pilih Kecamatan</option>';
                  for(i=0; i<data.length; i++){
                    html += '<option value="'+data[i].idKec+'">'+data[i].namaKec+'</option>';
                  }
                  $('.getKec').html(html);

                }
              });
            });
          });
        </script>
        <script type="text/javascript">
          $(document).ready(function(){
            $('#kec').change(function(){
              var id=$(this).val();
              $.ajax({
                url : "<?php echo base_url();?>Provinsi/getDesa",
                method : "POST",
                data : {id: id},
                async : false,
                dataType : 'json',
                success: function(data){
                  var html = '';
                  var i;
                  html += '<option value="">Pilih Desa</option>';
                  for(i=0; i<data.length; i++){
                    html += '<option value="'+data[i].idDesa+'">'+data[i].namaDesa+'</option>';
                  }
                  $('.getDesa').html(html);

                }
              });
            });
          });
        </script>


        <!-- END: JS Assets-->
    </body>
</html>