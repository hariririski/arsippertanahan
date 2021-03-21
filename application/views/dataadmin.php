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
        <title>Data Admin</title>
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
                      Master Data Admin
                    </h1>
                  </div>

                  <div class="intro-y box p-5 mt-5 ">
                    <form action="<?php echo base_url(); ?>Provinsi/tambahKota" method="post" enctype="multipart/form-data">
                      <div class="p-5">

                        <div>
                        <label for="change-password-form-1" class="form-label">Nama Lengkap</label>
                        <input id="change-password-form-1" type="number" class="form-control" placeholder="Input text" required name="namaLengkap">
                      </div>
                      <div class="mt-3">
                        <label for="change-password-form-2" class="form-label">Username</label>
                        <input id="change-password-form-2" type="text" class="form-control" placeholder="Input text"  required name="username">
                      </div>
                      <div class="mt-3">
                        <label for="change-password-form-2" class="form-label">Password</label>
                        <input id="change-password-form-2" type="text" class="form-control" placeholder="Input text"  required name="password">
                      </div>
                      <div>
                        <label for="change-password-form-1" class="form-label">Level</label>
                        <select class="form-select mt-2 sm:mr-2 form-control" aria-label="Default select example" required name="level">
                          <option value="">Pilih Level</option>
                          <option value="1">Admnistrator</option>
                          <option value="2">Pustakawan</option>
                          <option value="3">Umum</option>
                        </select>
                        <br>
                        <br>
                      </div>

                      <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                    </div>
                  </form>
                  </div>
                  <!-- BEGIN: HTML Table Data -->
                  <div class="intro-y box p-5 mt-5">
                    <table class="table">
                      <thead>
                        <tr class="bg-gray-700 dark:bg-dark-1 text-white">
                          <th class="whitespace-nowrap" width="10%">#</th>
                          <th class="whitespace-nowrap" width="20%">Icon</th>
                          <th class="whitespace-nowrap" width="30%">Nama Lengkap</th>
                          <th class="whitespace-nowrap">Level</th>
                          <th class="whitespace-nowrap">Status</th>
                          <th class="whitespace-nowrap" width="30%">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $i=0;
                        foreach($dataAdmin as $dataAdmin){
                          $i++;
                          ?>
                          <tr>
                            <td class="border-b dark:border-dark-5"><?php echo $i; ?></td>
                            <td class="border-b dark:border-dark-5"><image src="<?php echo base_url(); ?><?php echo $dataAdmin->image; ?>" width="30%"></td>
                            <td class="border-b dark:border-dark-5"><?php echo $dataAdmin->namaLengkap; ?></td>
                            <td class="border-b dark:border-dark-5">
                              <?php
                                switch ($dataAdmin->level){
                                  case 1:
                                        echo "Administrator";
                                        break;
                                  case 2:
                                        echo "Pustakawan";
                                        break;
                                  case 3:
                                        echo "Umum";
                                        break;
                                }
                              ?>
                            </td>
                            <td class="border-b dark:border-dark-5">
                              <?php if($dataAdmin->status==0){
                                        echo "Aktif";
                                      }
                                        else{
                                        echo "Tidak Aktif";
                                      }
                              ?>
                            </td>
                            <td class="border-b dark:border-dark-5">
                              <a href="">
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
        <!-- END: JS Assets-->
    </body>
</html>
