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
        <title>Data Baris</title>
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

                <div class="content">

                  <div class="intro-y flex items-center mt-8">
                    <h1 class="text-lg font-medium mr-auto">
                      Master Data Baris Pada Lemari
                    </h1>
                  </div>

                  <div class="intro-y box p-5 mt-5 ">
                    <form action="<?php echo base_url(); ?>Lemari/tambah_baris" method="post" enctype="multipart/form-data">
                      <div class="p-5">
                        <div>
                          <label for="change-password-form-1" class="form-label">Lemari Penyimpanan</label>
                          <select class="form-select mt-2 sm:mr-2 form-control" aria-label="Default select example" required name="id_lemari">
                            <option value="">Pilih Lemari Penyimpanan</option>
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
                        <label for="change-password-form-1" class="form-label">Kode Baris</label>
                        <input id="change-password-form-1" type="number" class="form-control" placeholder="Input text" required name="id_baris">
                      </div>
                      <div class="mt-3">
                        <label for="change-password-form-2" class="form-label">Nama Baris</label>
                        <input id="change-password-form-2" type="text" class="form-control" placeholder="Input text"  required name="nama_baris">
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
                          <th class="whitespace-nowrap">Kode Baris</th>
                          <th class="whitespace-nowrap">Nama Baris</th>
                          <th class="whitespace-nowrap" width="30%">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $i=0;
                        foreach($data_baris as $data_baris){
                          $i++;
                          ?>
                          <tr>
                            <td class="border-b dark:border-dark-5"><?php echo $i; ?></td>
                            <td class="border-b dark:border-dark-5"><?php echo $data_baris->nama_lemari; ?></td>
                            <td class="border-b dark:border-dark-5"><?php echo $data_baris->id_baris; ?></td>
                            <td class="border-b dark:border-dark-5"><?php echo $data_baris->nama_baris; ?></td>
                            <td class="border-b dark:border-dark-5">
                              <a href="<?php echo base_url(); ?>lapor/detail_lapor/<?php echo $data_baris->id_baris; ?>">
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
        <!-- END: JS Assets-->
    </body>
</html>
