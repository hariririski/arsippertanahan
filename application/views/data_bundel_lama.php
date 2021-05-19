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
        <title>Data Bundel</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/app.css">
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="main">
        <!-- BEGIN: Mobile Menu -->
        <?php echo $this->load->view('share/mobile_menu', '', TRUE);?>
          <!-- END: Mobile Menu -->
          <!-- BEGIN: Top Bar -->
        <?php echo $this->load->view('share/profile', '', TRUE);?>
        <!-- END: Top Bar -->
        <div class="wrapper">
            <div class="wrapper-box">
                <!-- BEGIN: Side Menu -->
                <?php echo $this->load->view('share/dekstop_menu', '', TRUE);?>
                <!-- END: Side Menu -->

                 <!-- BEGIN: Notification Toggle -->
                 
                 <!-- END: Notification Toggle -->


                <div class="content">

                  <div class="intro-y flex items-center mt-8">
                    <h1 class="text-lg font-medium mr-auto">
                      Master Data Desa
                    </h1>
                  </div>

                  <div class="intro-y box p-5 mt-5 ">
                    <form action="<?php echo base_url(); ?>Lemari/tambah_bundel" method="post" enctype="multipart/form-data">
                      <div class="p-5">
                        <div>
                           <div>
                             <label>Desa</label>
                             <div class="mt-2">
                               <select data-search="true" class="tail-select w-full" required name="id_desa">
                                 <option value="">Pilih Desa</option>
                                 <?php
                                   foreach($data_desa as $data_desa){
                                 ?>
                                   <option value="<?php echo $data_desa->id_desa; ?>"><?php echo $data_desa->nama_prov; ?> -> <?php echo $data_desa->nama_kota; ?> - > <?php echo $data_desa->nama_kec; ?> -> <?php echo $data_desa->nama_desa; ?></option>
                                 <?php } ?>
                               </select>
                             </div>
                           </div>
                           <br>
                        </div>
                        <div>
                          <label for="change-password-form-1" class="form-label">Lemari</label>
                          <select class="form-select mt-2 sm:mr-2 form-control" id="lemari" aria-label="Default select example" required name="id_lemari">
                            <option value="">Pilih Lemari</option>
                            <?php
                              foreach($data_lemari as $data_lemari){
                            ?>
                              <option value="<?php echo $data_lemari->id_lemari; ?>"><?php echo $data_lemari->nama_lemari; ?></option>
                            <?php } ?>
                          </select>
                          <br>
                          <br>
                        </div>
                        <div>
                          <label for="change-password-form-1" class="form-label">Baris</label>
                          <select class="form-select mt-2 sm:mr-2 form-control getBaris" aria-label="Default select example" required name="id_baris">
                            <option value="">Pilih Baris</option>

                          </select>
                          <br>
                          <br>
                        </div>
                        <div>
                        <label for="change-password-form-1" class="form-label">Kode Bundel</label>
                        <input id="change-password-form-1" type="number" class="form-control" placeholder="Input text" required name="id_bundel">
                      </div>
                      <br>
                        <div>
                        <label for="change-password-form-1" class="form-label">Nama Bundel</label>
                        <input id="change-password-form-1" type="number" class="form-control" placeholder="Input text" required name="nama_bundel">
                      </div>
                      <br>
                      <div>
                         <div>
                           <label>Sengketa</label>
                           <div class="mt-2">
                             <select data-search="true" class="tail-select w-full" required name="sengketa">
                               <option value="">Pilih</option>
                               <option value="0">IYA</option>
                               <option value="1">TIDAK</option>

                             </select>
                           </div>
                         </div>
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
                          <th class="whitespace-nowrap" width="30%">Lemari</th>
                          <th class="whitespace-nowrap" width="30%">Baris</th>
                          <th class="whitespace-nowrap" width="30%">Kode Bundel</th>
                          <th class="whitespace-nowrap">Nomor Bundel</th>
                          <th class="whitespace-nowrap">Desa</th>
                          <th class="whitespace-nowrap" width="30%">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $i=0;
                        foreach($data_bundel as $data_bundel){
                          $i++;
                          ?>
                          <tr>
                            <td class="border-b dark:border-dark-5"><?php echo $i; ?></td>
                            <td class="border-b dark:border-dark-5"><?php echo $data_bundel->nama_lemari; ?></td>
                            <td class="border-b dark:border-dark-5"><?php echo $data_bundel->nama_baris; ?></td>
                            <td class="border-b dark:border-dark-5"><?php echo $data_bundel->id_bundel; ?></td>
                            <td class="border-b dark:border-dark-5"><?php echo $data_bundel->nama_bundel; ?></td>
                            <td class="border-b dark:border-dark-5"><?php echo $data_bundel->nama_desa; ?></td>
                            <td class="border-b dark:border-dark-5">
                              <a href="<?php echo base_url(); ?>lapor/detail_lapor/<?php echo $data_bundel->id_bundel; ?>">
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
        <script src="dist/js/markerclusterer.js"></script>
        <script src="dist/js/js.js"></script>
        <script src="<?php echo base_url(); ?>dist/js/app.js"></script>
        <script src="<?php echo base_url(); ?>dist/js/jquery-3.3.1.js"></script>
        <script type="text/javascript">
          $(document).ready(function(){
            $('#lemari').change(function(){
              var id=$(this).val();
              $.ajax({
                url : "<?php echo base_url();?>Lemari/getBaris",
                method : "POST",
                data : {id: id},
                async : false,
                dataType : 'json',
                success: function(data){
                  var html = '';
                  var i;
                  html += '<option value="">Pilih Baris</option>';
                  for(i=0; i<data.length; i++){
                    html += '<option value="'+data[i].id_baris+'">'+data[i].nama_baris+'</option>';
                  }
                  $('.getBaris').html(html);

                }
              });
            });
          });
        </script>
        <!-- END: JS Assets-->
    </body>
</html>
