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
                                                  <div class="card warning-gradient card-hover" style="height:433px;">
                                                      <div class="card-content">
                                                          <h5 class="card-title  white-text">Buku Tanah</h5>
                                                          <p class="m-b-5">
                                                            <span class="white-text op-6">Validasi
                                                              <span class="right">
                                                                xxxx
                                                              </span>
                                                            </span>
                                                          </p>

                                                          <p>
                                                            <span class="white-text op-6">Peminjam
                                                                <span class="right">
                                                                xxxx
                                                                </span>
                                                              </span>
                                                          </p>

                                                          <p>
                                                            <span class="white-text op-6">Pengembalian
                                                                <span class="right">
                                                                xxxx
                                                                </span>
                                                              </span>
                                                          </p>

                                                          <p>
                                                            <span class="white-text op-6">Susun
                                                                <span class="right">
                                                                xxxx
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
                                                            <span class="white-text op-6">Validasi
                                                              <span class="right">
                                                                xxxx
                                                              </span>
                                                            </span>
                                                          </p>

                                                          <p>
                                                            <span class="white-text op-6">Peminjam
                                                                <span class="right">
                                                                xxxx
                                                                </span>
                                                              </span>
                                                          </p>

                                                          <p>
                                                            <span class="white-text op-6">Pengembalian
                                                                <span class="right">
                                                                xxxx
                                                                </span>
                                                              </span>
                                                          </p>

                                                          <p>
                                                            <span class="white-text op-6">Susun
                                                                <span class="right">
                                                                xxxx
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
                                                            <span class="white-text op-6">Validasi
                                                              <span class="right">
                                                                xxxx
                                                              </span>
                                                            </span>
                                                          </p>

                                                          <p>
                                                            <span class="white-text op-6">Peminjam
                                                                <span class="right">
                                                                xxxx
                                                                </span>
                                                              </span>
                                                          </p>

                                                          <p>
                                                            <span class="white-text op-6">Pengembalian
                                                                <span class="right">
                                                                  xxxx
                                                                </span>
                                                              </span>
                                                          </p>

                                                          <p>
                                                            <span class="white-text op-6">Susun
                                                                <span class="right">
                                                                xxxx
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
                                                            <span class="white-text op-6">Total Validasi
                                                              <span class="right">
                                                                  xxxx
                                                              </span>
                                                            </span>
                                                          </p>
                                                          <p class="m-b-5">
                                                            <span class="white-text op-6">Total Peminjaman
                                                              <span class="right">
                                                                  xxxx
                                                              </span>
                                                            </span>
                                                          </p>

                                                          <p>
                                                            <span class="white-text op-6">Total Pengembalian
                                                            <span class="right">
                                                                  xxxx
                                                            </span>
                                                            </span>
                                                          </p>

                                                          <p>
                                                            <span class="white-text op-6">Total Susun
                                                            <span class="right">
                                                                  xxxx
                                                            </span>
                                                            </span>
                                                          </p>


                                                          <p>
                                                            <span class="white-text op-6">Peminjaman Terlambat
                                                            <span class="right">
                                                                  xxxx
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
                                                    <input id="name" type="text" value="Jon Doe">
                                                    <label for="name">Password Lama</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input id="email" type="email" value="jon@doe.com">
                                                    <label for="email">Password Baru</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input id="password" type="password" value="123456">
                                                    <label for="password">ulangi Password Baru</label>
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
