
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
                <!-- BEGIN: Content -->
                <div class="content">
                    <div class="flex items-center mt-8">
                        <h2 class="text-lg font-medium mr-auto">
                            Tambah Buku Tanah
                        </h2>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <!-- BEGIN: Simple Editor -->
                        <div class="col-span-12 lg:col-span-12">
                            <div class="box">
                                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                                    Buku Tanah
                                </div>
                                <form action="<?php echo base_url(); ?>Buku_tanah/tambah" method="post" enctype="multipart/form-data">

                                <div class="p-5">
                                    <div class="preview">
                                        <div class="form-inline mt-5">
                                          <label for="horizontal-form-2" class="form-label sm:w-20">Provinsi</label>
                                          <select id="horizontal-form-2" data-search="true" class="tail-select w-full form-control" required name="data_alamat">
                                            <option value="">Pilih Desa</option>
                                            <?php
                                              foreach($data_desa as $data_desa){
                                            ?>
                                              <option value="<?php echo $data_desa->id_prov; ?>-<?php echo $data_desa->id_kota;?>-<?php echo $data_desa->id_kec;?>-<?php echo $data_desa->id_desa; ?>"><?php echo $data_desa->id_prov; ?><?php echo $data_desa->id_kota; ?><?php echo $data_desa->id_kec; ?> <?php echo $data_desa->id_desa; ?>- <?php echo $data_desa->nama_prov; ?> - <?php echo $data_desa->nama_kota; ?> -  <?php echo $data_desa->nama_kec; ?> -> <?php echo $data_desa->nama_desa; ?></option>
                                            <?php } ?>
                                          </select>
                                        </div>
                                         <div class="form-inline mt-5">
                                           <label for="horizontal-form-1" class="form-label sm:w-20">No Hak</label>
                                           <input id="horizontal-form-1" type="text" class="form-control" name="no_hak">
                                         </div>
                                         <div class="form-inline mt-5">
                                           <label for="horizontal-form-1" class="form-label sm:w-20">No NIB</label>
                                           <input id="horizontal-form-1" type="text" class="form-control" name="nib">
                                         </div>
                                         <div class="form-inline mt-5">
                                           <label for="horizontal-form-2" class="form-label sm:w-20">Jenis Hak</label>
                                           <select id="horizontal-form-2" data-search="true" class="tail-select w-full form-control" required name="id_jenis_hak">
                                             <option value="">Pilih Jenis Hak</option>
                                             <?php
                                               foreach($data_jenis_hak as $data_jenis_hak){
                                             ?>
                                               <option value="<?php echo $data_jenis_hak->id_jenis_hak; ?>"><?php echo $data_jenis_hak->nama_jenis_hak; ?></option>
                                             <?php } ?>
                                           </select>
                                         </div>
                                         <div class="form-inline mt-5">
                                           <label for="horizontal-form-2" class="form-label sm:w-20">Kondisi</label>
                                           <select id="horizontal-form-2" data-search="true" class="tail-select w-full form-control" required name="id_kondisi">
                                             <option value="">Pilih Kondisi</option>
                                             <?php
                                               foreach($data_kondisi as $data_kondisi){
                                             ?>
                                               <option value="<?php echo $data_kondisi->id_kondisi; ?>"><?php echo $data_kondisi->nama_kondisi; ?></option>
                                             <?php } ?>
                                           </select>
                                         </div>
                                         <div class="sm:ml-20 sm:pl-5 mt-5">
                                           <button class="btn btn-primary">Tambah</button>
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
        <!-- END: JS Assets-->
    </body>
</html>
