<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $this->load->view('share/icon', '', TRUE);?>
    <title>Profil</title>
    <link href="dist/css/style.css" rel="stylesheet">

</head>

<body>
    <div class="main-wrapper" id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <?php echo $this->load->view('share/loading', '', TRUE);?>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <?php echo $this->load->view('share/header', '', TRUE);?>
        <!-- ============================================================== -->
        <!-- Sidebar scss in sidebar.scss -->
        <!-- ============================================================== -->
        <?php echo $this->load->view('share/aside', '', TRUE);?>
        <!-- ============================================================== -->
        <!-- Sidebar scss in sidebar.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Title and breadcrumb -->
            <!-- ============================================================== -->
            <div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">Profile</h5>
                    <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">Home</a>
                        <a href="#!" class="breadcrumb">Profile</a>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-content">
                                <div class="center-align m-t-30"><img src="<?php echo base_url(); ?><?php echo $this->session->userdata("image"); ?>" alt="user" class="circle" width="150">
                                    <h4 class="card-title m-t-10"><?php echo $this->session->userdata("nama_lengkap"); ?></h4>
                                    <h6 class="card-subtitle">
                                      <?php
                                        switch ($this->session->userdata("level")){
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
                                    </h6>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col s12 m8">
                        <div class="card">
                            <div class="row">
                                <div class="col s12">
                                    <ul class="tabs">
                                        <li class="tab col s3"><a class="active" href="#pinjam">Dashboard</a></li>
                                        <li class="tab col s3"><a href="#settings">Ganti Password</a></li>
                                    </ul>
                                </div>
                                <div id="pinjam" class="col s12">
                                    <div class="card-content">
                                      <div class="col s12 ">
                                          <div class="row">
                                              <div class="col s12 m6 l6">
                                                  <div class="card warning-gradient card-hover" style="height:488px;">
                                                      <div class="card-content">
                                                          <h5 class="card-title  white-text">Buku Tanah</h5>
                                                          <p class="m-b-5">
                                                            <span class="white-text op-6">Menmbahkan
                                                              <span class="right">
                                                                <?php

                                                                  $surat_ukur_tambah;
                                                                  $surat_ukur_valid;
                                                                  $surat_ukur_pinjam;
                                                                  $surat_ukur_kembali;
                                                                  $surat_ukur_susun;

                                                                  $warkah_tambah;
                                                                  $warkah_valid;
                                                                  $warkah_pinjam;
                                                                  $warkah_kembali;
                                                                  $warkah_susun;

                                                                  $buku_tanah_tambah;
                                                                  $buku_tanah_valid;
                                                                  $buku_tanah_pinjam;
                                                                  $buku_tanah_kembali;
                                                                  $buku_tanah_susun;

                                                                  foreach($jumlah_buku_tanah as $data){
                                                                    echo   $buku_tanah_tambah=$data->jumlah_buku_tanah;
                                                                  }
                                                                ?>
                                                              </span>
                                                            </span>
                                                          </p>
                                                          <p class="m-b-5">
                                                            <span class="white-text op-6">Validasi
                                                              <span class="right">
                                                                <?php
                                                                foreach($jumlah_buku_tanah_valid as $data){
                                                                  echo $buku_tanah_valid=$data->jumlah_buku_tanah;
                                                                }
                                                                ?>
                                                              </span>
                                                            </span>
                                                          </p>

                                                          <p>
                                                            <span class="white-text op-6">Peminjam
                                                                <span class="right">
                                                                  <?php
                                                                  foreach($jumlah_buku_tanah_pinjam as $data){
                                                                    echo $buku_tanah_pinjam=$data->jumlah;
                                                                  }
                                                                  ?>
                                                                </span>
                                                              </span>
                                                          </p>

                                                          <p>
                                                            <span class="white-text op-6">Pengembalian
                                                                <span class="right">
                                                                  <?php
                                                                  foreach($jumlah_buku_tanah_kembali as $data){
                                                                    echo $buku_tanah_kembali=$data->jumlah;
                                                                  }
                                                                  ?>
                                                                </span>
                                                              </span>
                                                          </p>

                                                          <p>
                                                            <span class="white-text op-6">Susun
                                                                <span class="right">
                                                                  <?php
                                                                  foreach($jumlah_buku_tanah_susun as $data){
                                                                    echo $buku_tanah_susun=$data->jumlah;
                                                                  }
                                                                  ?>
                                                                </span>
                                                              </span>
                                                          </p>

                                                      </div>

                                                  </div>
                                              </div>
                                              <div class="col s12 m6 l6">
                                                  <div class="card primary-gradient card-hover">
                                                      <div class="card-content">
                                                          <h5 class="card-title white-text">Surat Ukur</h5>
                                                          <p class="m-b-5">
                                                            <span class="white-text op-6">Penambahan
                                                              <span class="right">
                                                                <?php
                                                                  $jumlah_surat_ukur;
                                                                  foreach($jumlah_surat_ukur as $data){
                                                                    echo $surat_ukur_tambah=$data->jumlah_surat_ukur;
                                                                  }
                                                                ?>
                                                              </span>
                                                            </span>
                                                          </p>
                                                          <p class="m-b-5">
                                                            <span class="white-text op-6">Validasi
                                                              <span class="right">
                                                                <?php
                                                                  foreach($jumlah_surat_ukur_valid as $data){
                                                                    echo $surat_ukur_valid=$data->jumlah_surat_ukur;
                                                                  }
                                                                ?>
                                                              </span>
                                                            </span>
                                                          </p>

                                                          <p>
                                                            <span class="white-text op-6">Peminjam
                                                                <span class="right">
                                                                  <?php
                                                                  foreach($jumlah_surat_ukur_pinjam as $data){
                                                                    echo $surat_ukur_pinjam=$data->jumlah;
                                                                  }
                                                                  ?>
                                                                </span>
                                                              </span>
                                                          </p>

                                                          <p>
                                                            <span class="white-text op-6">Pengembalian
                                                                <span class="right">
                                                                  <?php
                                                                  foreach($jumlah_surat_ukur_kembali as $data){
                                                                    echo $surat_ukur_kembali=$data->jumlah;
                                                                  }
                                                                  ?>
                                                                </span>
                                                              </span>
                                                          </p>

                                                          <p>
                                                            <span class="white-text op-6">Susun
                                                                <span class="right">
                                                                  <?php
                                                                  foreach($jumlah_surat_ukur_susun as $data){
                                                                    echo $surat_ukur_susun=$data->jumlah;
                                                                  }
                                                                  ?>
                                                                </span>
                                                              </span>
                                                          </p>
                                                      </div>
                                                      <div class="center-align">
                                                          <div id="visits"></div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col s12 m6 l6">
                                                  <div class="card danger-gradient card-hover">
                                                      <div class="card-content">
                                                          <h5 class="card-title white-text">Warkah</h5>
                                                          <p class="m-b-5">
                                                            <span class="white-text op-6">Penambahan
                                                              <span class="right">
                                                                <?php
                                                                  $jumlah_warkah;
                                                                  foreach($jumlah_warkah as $data){
                                                                    echo $warkah_tambah=$data->jumlah_warkah;
                                                                  }
                                                                ?>
                                                              </span>
                                                            </span>
                                                          </p>
                                                          <p class="m-b-5">
                                                            <span class="white-text op-6">Validasi
                                                              <span class="right">
                                                                <?php
                                                                  foreach($jumlah_warkah_valid as $data){
                                                                      echo $warkah_valid=$data->jumlah_warkah;
                                                                  }
                                                                ?>
                                                              </span>
                                                            </span>
                                                          </p>

                                                          <p>
                                                            <span class="white-text op-6">Peminjam
                                                                <span class="right">
                                                                <?php
                                                                foreach($jumlah_warkah_pinjam as $data){
                                                                  echo $warkah_pinjam=$data->jumlah;
                                                                }
                                                                  ?>
                                                                </span>
                                                              </span>
                                                          </p>

                                                          <p>
                                                            <span class="white-text op-6">Pengembalian
                                                                <span class="right">
                                                                  <?php
                                                                  foreach($jumlah_warkah_kembali as $data){
                                                                    echo $warkah_kembali=$data->jumlah;
                                                                  }
                                                                    ?>
                                                                </span>
                                                              </span>
                                                          </p>

                                                          <p>
                                                            <span class="white-text op-6">Susun
                                                                <span class="right">
                                                                  <?php
                                                                  foreach($jumlah_surat_ukur_susun as $data){
                                                                    echo $warkah_susun=$data->jumlah;
                                                                  }
                                                                  ?>
                                                                </span>
                                                              </span>
                                                          </p>
                                                      </div>

                                                  </div>
                                              </div>
                                              <div class="col s12">
                                                  <div class="card success-gradient card-hover">
                                                      <div class="card-content">
                                                          <h5 class="card-title white-text">Keseluruhan</h5>
                                                          <p class="m-b-5">
                                                            <span class="white-text op-6">Total Penambahan
                                                              <span class="right">
                                                                  <?php
                                                                  echo $buku_tanah_tambah+$surat_ukur_tambah+$warkah_tambah;
                                                                  ?>
                                                              </span>
                                                            </span>
                                                          </p>
                                                          <p class="m-b-5">
                                                            <span class="white-text op-6">Total Validasi
                                                              <span class="right">
                                                                  <?php
                                                                  echo $buku_tanah_valid+$surat_ukur_valid+$warkah_valid;
                                                                  ?>
                                                              </span>
                                                            </span>
                                                          </p>
                                                          <p class="m-b-5">
                                                            <span class="white-text op-6">Total Peminjaman
                                                              <span class="right">
                                                                <?php
                                                                echo $buku_tanah_pinjam+$surat_ukur_pinjam+$warkah_pinjam;
                                                                ?>
                                                              </span>
                                                            </span>
                                                          </p>

                                                          <p>
                                                            <span class="white-text op-6">Total Pengembalian
                                                            <span class="right">
                                                              <?php
                                                              echo $buku_tanah_kembali+$surat_ukur_kembali+$warkah_kembali;
                                                              ?>
                                                            </span>
                                                            </span>
                                                          </p>

                                                          <p>
                                                            <span class="white-text op-6">Total Susun
                                                            <span class="right">
                                                              <?php
                                                              echo $buku_tanah_susun+$surat_ukur_susun+  $warkah_susun;
                                                              ?>
                                                            </span>
                                                            </span>
                                                          </p>


                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                                <div id="settings" class="col s12">
                                    <div class="card-content">
                                        <form>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input id="name" type="text" >
                                                    <label for="name">Password Lama</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input id="email" type="text" >
                                                    <label for="email">Password Baru</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input id="password" type="text" >
                                                    <label for="password">Ulangi Password Baru</label>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <button class="btn teal waves-effect waves-light" type="submit" name="action">Ganti Password</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <?php echo $this->load->view('share/footer', '', TRUE);?>
        </div>
        <!-- ============================================================== -->

    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="dist/js/materialize.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!-- ============================================================== -->
    <!-- Apps -->
    <!-- ============================================================== -->
    <script src="dist/js/app.js"></script>
    <script src="dist/js/app.init.horizontal.js"></script>
    <script src="dist/js/app-style-switcher.horizontal.js"></script>
    <!-- ============================================================== -->
    <!-- Custom js -->
    <!-- ============================================================== -->
    <script src="dist/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
</body>

</html>
