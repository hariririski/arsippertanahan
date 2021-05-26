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
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                              <table id="zero_config" class="responsive-table display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Kode</th>
                                            <th>Provinsi</th>
                                            <th>QR Code</th>
                                            <th>Status</th>
                                            <th width="40%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                              $i=0;
                                              foreach($data_provinsi as $data_provinsi){
                                              $i++;
                                            ?>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $data_provinsi->id_prov; ?></td>
                                            <td><?php echo $data_provinsi->nama_prov; ?></td>
                                            <td>
                                              <center>
                                              <a href="<?php echo site_url('Code/QRcode/'.$data_provinsi->qrcode); ?>">
                                                  <img src="<?php echo base_url('Code/QRcode/'.$data_provinsi->qrcode);?>" width="30%"><br>
                                              </a>
                                              <?php echo $data_provinsi->nama_prov; ?>
                                              </center>
                                            </td>
                                            <td>
                                              <?php
                                              if($data_provinsi->aktif==1){
                                                        echo '<span class="label label-success">Aktif</span>';
                                                      }
                                                        else{
                                                        echo '<span class="label label-danger">Tidak Aktif</span>';
                                                      }
                                              ?>
                                            </td>
                                            <td>
                                              <a href="<?php echo base_url(); ?>datakota?prov=<?php echo $data_provinsi->kode_prov; ?>" class="waves-effect waves-light btn green">Kota</a>
                                              <a class="waves-effect waves-light btn orange">Edit</a>
                                              <?php
                                              if($data_provinsi->aktif==1){
                                              ?>
                                                  <a  href="<?php echo base_url(); ?>provinsi/aktif_prov/<?php echo $data_provinsi->kode_prov; ?>/0" class="waves-effect waves-light btn purple" onclick="return confirm('Apakah Anda Yakin Me Non-Aktifkan <?php echo $data_provinsi->nama_prov; ?>?')"/>Non Aktifkan</a>
                                              <?php
                                                }else{
                                              ?>
                                                  <a  href="<?php echo base_url(); ?>provinsi/aktif_prov/<?php echo $data_provinsi->kode_prov; ?>/1" class="waves-effect waves-light btn purple " onclick="return confirm('Apakah Anda Yakin Aktifkan <?php echo $data_provinsi->nama_prov; ?>?')"/>Aktifkan</a>
                                              <?php
                                                  }
                                              ?>
                                              <a  href="<?php echo base_url(); ?>provinsi/aktif_prov/<?php echo $data_provinsi->kode_prov; ?>/" class="waves-effect waves-light btn indigo" >Cetak Barcode</a>
                                              <a href="<?php echo base_url(); ?>provinsi/hapus_prov/<?php echo $data_provinsi->kode_prov; ?>" type="submit" class="waves-effect waves-light btn red" onclick="return confirm('Apakah Anda Ingin Menghapus Provinsi <?php echo $data_provinsi->nama_prov; ?>?')"/>Hapus </a>
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
