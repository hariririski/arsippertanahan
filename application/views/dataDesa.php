<!DOCTYPE html>

<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="<?php echo base_url(); ?>dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Icewall admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Icewall Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Data Desa</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/app.css">
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

                 <!-- BEGIN: Notification Toggle -->
                 <
                 <!-- END: Notification Toggle -->


                <div class="content">

                  <div class="intro-y flex items-center mt-8">
                    <h1 class="text-lg font-medium mr-auto">
                      Master Data Desa
                    </h1>
                  </div>

                  <div class="intro-y box p-5 mt-5 ">
                    <form action="<?php echo base_url(); ?>Provinsi/tambahDesa" method="post" enctype="multipart/form-data">
                      <div class="p-5">
                        <div>
                          <label for="change-password-form-1" class="form-label">Provinsi</label>
                          <select class="form-select mt-2 sm:mr-2 form-control" id="provinsi" aria-label="Default select example" required name="idProv">
                            <option value="">Pilih Provinsi</option>
                            <?php
                              foreach($dataProvinsi as $dataProvinsi){
                            ?>
                              <option value="<?php echo $dataProvinsi->idProv; ?>"><?php echo $dataProvinsi->namaProv; ?></option>
                            <?php } ?>
                          </select>
                          <br>
                          <br>
                        </div>
                        <div>
                          <label for="change-password-form-1" class="form-label">Kota</label>
                          <select class="form-select mt-2 sm:mr-2 form-control getKota" id="kota" aria-label="Default select example" required name="idKota">
                            <option value="">Pilih Kota</option>

                          </select>
                          <br>
                          <br>
                        </div>
                        <div>
                          <label for="change-password-form-1" class="form-label">Kecamatan</label>
                          <select class="form-select mt-2 sm:mr-2 form-control getKec" id="kota" aria-label="Default select example" required name="idKec">
                            <option value="">Pilih Kecamatan</option>

                          </select>
                          <br>
                          <br>
                        </div>
                        <div>
                        <label for="change-password-form-1" class="form-label">Kode Desa</label>
                        <input id="change-password-form-1" type="number" class="form-control" placeholder="Input text" required name="idDesa">
                      </div>
                      <div class="mt-3">
                        <label for="change-password-form-2" class="form-label">Nama Desa</label>
                        <input id="change-password-form-2" type="text" class="form-control" placeholder="Input text"  required name="namaDesa">
                      </div>

                      <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                    </div>
                  </form>
                  </div>
                  <!-- BEGIN: HTML Table Data -->
                  <div class="overflow-x-auto intro-y box p-5 mt-5">
                    <table class="table">
                      <thead>
                        <tr class="bg-gray-700 dark:bg-dark-1 text-white">
                          <th class="whitespace-nowrap" width="10%">#</th>
                          <th class="whitespace-nowrap" width="30%">Provinsi</th>
                          <th class="whitespace-nowrap" width="30%">Kecamatan</th>
                          <th class="whitespace-nowrap" width="30%">Kota</th>
                          <th class="whitespace-nowrap">Kode Desa</th>
                          <th class="whitespace-nowrap">Nama Desa</th>
                          <th class="whitespace-nowrap" width="30%">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $i=0;
                        foreach($dataDesa as $dataDesa){
                          $i++;
                          ?>
                          <tr>
                            <td class="border-b dark:border-dark-5"><?php echo $i; ?></td>
                            <td class="border-b dark:border-dark-5"><?php echo $dataDesa->namaProv; ?></td>
                            <td class="border-b dark:border-dark-5"><?php echo $dataDesa->namaKota; ?></td>
                            <td class="border-b dark:border-dark-5"><?php echo $dataDesa->namaKec; ?></td>
                            <td class="border-b dark:border-dark-5"><?php echo $dataDesa->idDesa; ?></td>
                            <td class="border-b dark:border-dark-5"><?php echo $dataDesa->namaDesa; ?></td>
                            <td class="border-b dark:border-dark-5">
                              <a href="<?php echo base_url(); ?>lapor/detail_lapor/<?php echo $dataDesa->idProv; ?>">
                              </a>
                               <button class="btn btn-success mr-1 mb-2"> <i data-feather="calendar" class="w-5 h-5"></i> </button>
                               <button class="btn btn-warning mr-1 mb-2"> <i data-feather="share-2" class="w-5 h-5"></i> </button>
                               <button class="btn btn-danger mr-1 mb-2"> <i data-feather="trash" class="w-5 h-5"></i> </button>
                            </td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- END: HTML Table Data -->
                </div>
                <!-- END: Content -->
            </div>
        </div>

        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBG7gNHAhDzgYmq4-EHvM4bqW1DNj2UCuk&libraries=places"></script>
        <script src="<?php echo base_url(); ?>dist/js/app.js"></script>
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
        <!-- END: JS Assets-->
    </body>
</html>
