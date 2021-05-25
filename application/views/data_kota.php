<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Data Kota</title>
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
                    <h5 class="font-medium m-b-0">Data Kota</h5>
                    <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">Home</a>
                        <a href="#!" class="breadcrumb">Kota</a>
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
                              <?php
                                foreach($data_prov as $prov){
                              ?>
                                <h5 class="card-title activator">Tambah Data Kota<i class="material-icons right tooltipped" data-position="left" data-delay="50" ></i></h5>
                                <form class="formValidate" id="formValidate" action="<?php echo base_url(); ?>provinsi/tambah_kota?prov=<?php echo $prov->kode_prov;?>" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">account_circle</i>

                                            <input   type="text" disabled required name="id_Kota" autofocus value="<?php echo $prov->nama_prov; ?>">

                                            <label for="uname">Provinsi *</label>
                                            <div class="errorTxt1"></div>
                                        </div>
                                    </div>
                              <?php  } ?>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">chrome_reader_mode</i>
                                            <label for="cemail">Kode Kota *</label>
                                            <input  type="text"  required name="id_kota" autofocus>
                                            <div class="errorTxt2"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">chrome_reader_mode</i>
                                            <label for="cemail">Nama Kota *</label>
                                            <input  type="text"  required name="nama_kota">
                                            <div class="errorTxt2"></div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <button class="btn cyan waves-effect waves-light right submit" type="submit" name="action">Submit
                                            </button>
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
                                            <th>Kode</th>
                                            <th>Kota</th>
                                            <th>QR Code</th>
                                            <th>Status</th>
                                            <th width="30%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                              $i=0;
                                              foreach($data_kota as $data_kota){
                                              $i++;
                                            ?>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $data_kota->id_kota; ?></td>
                                            <td><?php echo $data_kota->nama_kota; ?></td>
                                            <td>
                                              <center>
                                              <a href="<?php echo site_url('Code/QRcode/'.$data_kota->qrkota); ?>">
                                                  <img src="<?php echo base_url('Code/QRcode/'.$data_kota->qrkota);?>" width="30%"><br>
                                              </a>
                                              <?php echo $data_kota->nama_kota; ?>
                                              </center>
                                            </td>
                                            <td>
                                              <?php if($data_kota->aktif==1){
                                                        echo '<span class="label label-success">Aktif</span>';
                                                      }
                                                        else{
                                                        echo '<span class="label label-danger">Tidak Aktif</span>';
                                                      }
                                              ?>
                                            </td>
                                            <td>
                                              <a href="<?php echo base_url(); ?>datakecamatan?kota=<?php echo $data_kota->kode_kota; ?>" class="waves-effect waves-light btn green">Kecamatan</a>
                                              <a class="waves-effect waves-light btn orange">Edit</a>
                                              <?php
                                              if($data_kota->aktif==1){
                                              ?>
                                                  <a  href="<?php echo base_url(); ?>provinsi/aktif_kota/<?php echo $data_kota->kode_prov; ?>/<?php echo $data_kota->kode_kota; ?>/0" class="waves-effect waves-light btn purple" onclick="return confirm('Apakah Anda Yakin  Non-Aktifkan <?php echo $data_kota->nama_kota; ?>?')"/>Non Aktifkan</a>
                                              <?php
                                                }else{
                                              ?>
                                                  <a  href="<?php echo base_url(); ?>provinsi/aktif_kota/<?php echo $data_kota->kode_prov; ?>/<?php echo $data_kota->kode_kota; ?>/1" class="waves-effect waves-light btn purple" onclick="return confirm('Apakah Anda Yakin Aktifkan <?php echo $data_kota->nama_kota; ?>?')"/>Aktifkan</a>
                                              <?php
                                                  }
                                              ?>
                                              <a href="<?php echo base_url(); ?>provinsi/hapus_kota/<?php echo $data_kota->kode_prov; ?>/<?php echo $data_kota->kode_kota; ?>" type="submit" class="waves-effect waves-light btn red" onclick="return confirm('Apakah Yakin Mengahpus Kota <?php echo $data_kota->nama_kota; ?> ?')"/>Hapus </a>
                                            </td>
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
