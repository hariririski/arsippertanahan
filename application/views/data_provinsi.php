<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $this->load->view('share/icon', '', TRUE);?>
    <title>Data Provinsi</title>
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
                    <h5 class="font-medium m-b-0">Data Provinsi</h5>
                    <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">Home</a>
                        <a href="#!" class="breadcrumb">Provinsi</a>
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
                                <form class="formValidate" id="formValidate" action="<?php echo base_url(); ?>Provinsi/tambah" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">chrome_reader_mode</i>
                                            <input  name="id_prov" type="text" required>
                                            <label for="uname">Kode Provinsi *</label>
                                            <div class="errorTxt1"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">chrome_reader_mode</i>
                                            <label for="cemail">Nama Provinsi *</label>
                                            <input  type="text" name="nama_prov" required>
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
                                            <th>Provinsi</th>
                                            <th>QR Code</th>
                                            <th>Status</th>
                                            <th width="25%">Aksi</th>
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
                                              <a href="<?php echo base_url(); ?>datakota?prov=<?php echo $data_provinsi->kode_prov; ?>" class="waves-effect waves-light btn green btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Lihat Kota"><i class="material-icons dp48">remove_red_eye</i></a>
                                              <a class="waves-effect waves-light btn orange btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Edit"><i class="material-icons dp48">edit</i></a>
                                              <?php
                                              if($data_provinsi->aktif==1){
                                              ?>
                                                  <a  href="<?php echo base_url(); ?>provinsi/aktif_prov/<?php echo $data_provinsi->kode_prov; ?>/0" class="waves-effect waves-light btn purple btn tooltipped" onclick="return confirm('Apakah Anda Yakin Me Non-Aktifkan <?php echo $data_provinsi->nama_prov; ?>?')" data-position="bottom" data-delay="50" data-tooltip="Non Aktifkan"/><i class="material-icons dp48">do_not_disturb_alt</i></a>
                                              <?php
                                                }else{
                                              ?>
                                                  <a  href="<?php echo base_url(); ?>provinsi/aktif_prov/<?php echo $data_provinsi->kode_prov; ?>/1" class="waves-effect waves-light btn purple btn tooltipped" onclick="return confirm('Apakah Anda Yakin Aktifkan <?php echo $data_provinsi->nama_prov; ?>?')"data-position="bottom" data-delay="50" data-tooltip="Aktifkan"/><i class="material-icons dp48">done</i></a>
                                              <?php
                                                  }
                                              ?>
                                              <a  href="<?php echo base_url(); ?>provinsi/aktif_prov/<?php echo $data_provinsi->kode_prov; ?>/" class="waves-effect waves-light btn indigo btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Cetak QR Code"><i class="material-icons dp48">local_printshop</i></a>
                                              <a href="<?php echo base_url(); ?>provinsi/hapus_prov/<?php echo $data_provinsi->kode_prov; ?>" type="submit" class="waves-effect waves-light btn red btn tooltipped" onclick="return confirm('Apakah Anda Ingin Menghapus Provinsi <?php echo $data_provinsi->nama_prov; ?>?')"data-position="bottom" data-delay="50" data-tooltip="Hapus"/><i class="material-icons dp48">delete_forever</i> </a>
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
    <script>
    $(document).ready(function(){
    $('.tooltipped').tooltip();
    });
    </script>

</body>

</html>
