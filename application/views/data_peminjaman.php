<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php echo $this->load->view('share/icon', '', TRUE);?>
    <title>Data Peminjaman</title>
    <link href="dist/css/style.css" rel="stylesheet">
    <!-- This page CSS -->
    <link href="assets/extra-libs/prism/prism.css" rel="stylesheet">
    <link href="dist/css/pages/data-table.css" rel="stylesheet">

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
                    <h5 class="font-medium m-b-0">Data Peminjaman Arsip</h5>
                    <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">Home</a>
                        <a href="#!" class="breadcrumb">Data Peminjaman</a>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <div class="container-fluid">
              <div class="row">
                  <div class="col s12 ">
                      <div class="card">
                          <div class="card-content">
                              <h5 class="card-title activator">Tambah Data Provinsi<i class="material-icons right tooltipped" data-position="left" data-delay="50" ></i></h5>
                              <form class="formValidate" id="formValidate" action="<?php echo base_url(); ?>pinjam/tambah" method="post" enctype="multipart/form-data">
                                  <div class="row">
                                      <div class="input-field col s4">
                                          <i class="material-icons prefix">chrome_reader_mode</i>
                                          <input  name="admin" type="text" required value="<?php echo $this->session->userdata("nama_lengkap"); ?>">
                                          <label for="uname">Petugas</label>
                                          <div class="errorTxt1"></div>
                                      </div>

                                      <div class="input-field col s4">
                                        <select required name="nip">
                                          <option value="" disabled selected>Pilih Pegawai</option>
                                          <?php
                                            foreach($pegawai as $pegawai){
                                          ?>
                                            <option value="<?php echo $pegawai->nip; ?>"><?php echo $pegawai->nama_lengkap; ?></option>
                                          <?php } ?>
                                        </select>
                                      </div>

                                      <div class="input-field col s2">
                                          <button class="btn cyan waves-effect waves-light right submit" type="submit" name="action">Pinjam</button>
                                      </div>
                                  </div>
                              </form>
                          </div>

                      </div>
                  </div>
              </div>
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                              <table id="zero_config" class="responsive-table display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Invoice</th>
                                            <th>Tanggal Pinjam</th>
                                            <th>Tanggal Kembali</th>
                                            <th>Operator</th>
                                            <th>Pegawai</th>
                                            <th >Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                              $i=0;
                                              foreach($data as $data){
                                              $i++;
                                            ?>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $data->invoice; ?></td>
                                            <td><?php echo $data->tgl_pinjam; ?></td>
                                            <td><?php echo $data->tgl_kembali; ?></td>
                                            <td><?php echo $data->admin_tambah; ?></td>
                                            <td><?php echo $data->nama_lengkap; ?></td>
                                            <td>
                                              <?php
                                              if($data->status==0){
                                              ?>
                                              <a class="waves-effect waves-light btn  orange" href="<?php echo base_url(); ?>pinjam/peminjaman/<?php echo $data->invoice; ?>">Lanjutkan</a></td>
                                              <?php
                                              }elseif (condition){
                                              ?>
                                              <a class="waves-effect waves-light btn  green" href="<?php echo base_url(); ?>pinjam/peminjaman/<?php echo $data->invoice; ?>">Detail</a></td>
                                              <?php
                                              }
                                              ?>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>

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
    <script src="assets/extra-libs/prism/prism.js"></script>
    <script src="dist/js/pages/forms/jquery.validate.min.js"></script>
    <script src="assets/extra-libs/Datatables/datatables.min.js"></script>
    <script src="dist/js/pages/datatable/datatable-basic.init.js"></script>


</body>

</html>
