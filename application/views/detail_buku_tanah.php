<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $this->load->view('share/icon', '', TRUE);?>
    <title>Data Peminjaman</title>
    <link href="<?php echo base_url(); ?>/dist/css/style.css" rel="stylesheet">
    <!-- This page CSS -->
    <link href="<?php echo base_url(); ?>/assets/extra-libs/prism/prism.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/dist/css/pages/data-table.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/dist/css/pages/form-page.css" rel="stylesheet">

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

                    <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">Home</a>
                        <a href="#!" class="breadcrumb">Buku Tanah</a>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <div class="container-fluid">
              <div class="col s12">
                      <div class="card">
                          <div class="card-content">
                              <h5 class="card-title activator">Buku Tanah</h5>
                          </div>
                          <div class="divider"></div>
                          <form class="h-form">
                              <div class="form-body">
                                  <div class="card-content">
                                    <?php
                                      foreach($data_buku_tanah as $buku_tanah){
                                    ?>
                                      <div class="row">
                                          <div class="col s3">
                                              <div class="h-form-label">
                                                  <label for="icon_prefix1">Jenis Hak</label>
                                              </div>
                                          </div>
                                          <div class="input-field col s9">
                                              <label for="icon_prefix1" style="color: #000000"><b><?php echo $buku_tanah->nama_jenis_hak; ?></b></label>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col s3">
                                              <div class="h-form-label">
                                                  <label for="icon_prefix1">Nomor Hak</label>
                                              </div>
                                          </div>
                                          <div class="input-field col s9">
                                              <label for="icon_prefix1" style="color: #000000"><b><?php echo $buku_tanah->no_hak; ?></b></label>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col s3">
                                              <div class="h-form-label">
                                                  <label for="icon_prefix3">Provinsi/Kota/Kecamatan/Desa</label>
                                              </div>
                                          </div>
                                          <div class="input-field col s9">
                                              <label for="icon_prefix1" style="color: #000000"><b><?php echo $buku_tanah->nama_prov; ?> / <?php echo $buku_tanah->nama_kota; ?> / <?php echo $buku_tanah->nama_kec; ?> / <?php echo $buku_tanah->nama_desa; ?></b></label>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col s3">
                                              <div class="h-form-label">
                                                  <label for="icon_prefix3">Kondisi Arsip</label>
                                              </div>
                                          </div>
                                          <div class="input-field col s9">
                                              <label for="icon_prefix1" style="color: #000000"><b><?php echo $buku_tanah->nama_kondisi; ?></b></label>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col s3">
                                              <div class="h-form-label">
                                                  <label for="icon_prefix3">Lokasi Arsip</label>
                                              </div>
                                          </div>
                                          <div class="input-field col s9">
                                              <label for="icon_prefix1" style="color: #000000"><b><?php echo $buku_tanah->nama_lemari; ?> / <?php echo $buku_tanah->nama_baris; ?> / <?php echo $buku_tanah->nama_bundel; ?> </b></label>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col s3">
                                              <div class="h-form-label">
                                                  <label for="icon_prefix3">status</label>
                                              </div>
                                          </div>
                                          <div class="input-field col s9">
                                              <label for="icon_prefix1" style="color: #000000">
                                                <b>
                                                  <?php
                                                  if($buku_tanah->status==0){
                                                      echo '<span class="label label-success">Tersedia</span>';
                                                    }else if($buku_tanah->status==1){
                                                      echo '<span class="label label-info">Di Pinjam</span>';
                                                      echo '<br></br>';
                                                      echo '<a href="#" class="waves-effect waves-light btn green right  "> lihat Peminjaman</a>';
                                                    }else if($buku_tanah->status==2){
                                                      echo '<span class="label label-warning">Belum Disusun</span>';
                                                    }else if($buku_tanah->status==3){
                                                        echo '<span class="label label-danger">Hilang</span>';
                                                    }
                                                  ?>
                                                </b>
                                              </label>
                                          </div>
                                      </div>
                                      <br></br>
                                      <div class="row">
                                          <div class="col s3">
                                              <div class="h-form-label">
                                                  <label for="icon_prefix3">QR Code</label>
                                              </div>
                                          </div>
                                          <div class="input-field col s9">
                                            <?php
                                            $qrcode="BT-".$buku_tanah->id_buku_tanah;
                                            ?>
                                            <a href="<?php echo site_url('Code/QRcode/'.$qrcode); ?>">
                                                <img style=" border: 1px solid #555;"src="<?php echo base_url('Code/QRcode/'.$qrcode);?>" width="30%"><br>
                                            </a>
                                            <a href="<?php echo base_url(); ?>" class="waves-effect waves-light btn green "> Cetak Barcode</a>
                                          </div>
                                      </div>

                                      <?php } ?>
                                  </div>
                              </div>
                              <div class="divider"></div>
                          </form>
                      </div>
                  </div>

                  <div class="col s12">
                          <div class="card">
                              <div class="card-content">
                                  <h5 class="card-title activator">Surat Ukur</h5>
                              </div>
                              <div class="divider"></div>
                              <form class="h-form">
                                  <div class="form-body">
                                      <div class="card-content">
                                        <table class="responsive-table striped">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nomor</th>
                                                    <th>Tahun</th>
                                                    <th>NIB</th>
                                                    <th>Desa</th>
                                                    <th>Kondisi</th>
                                                    <th>Penyimpanan</th>
                                                    <th>status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Alvin</td>
                                                    <td>Eclair</td>
                                                    <td>$0.87</td>
                                                    <td>$0.87</td>
                                                    <td>$0.87</td>
                                                    <td>$0.87</td>
                                                    <td>$0.87</td>
                                                    <td>$0.87</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                      </div>
                                  </div>
                                  <div class="divider"></div>
                                  <div class="card-content">
                                      <div class="form-action">
                                          <button class="btn cyan waves-effect waves-light" type="submit" name="action">Tambah Surat Ukur
                                          </button>

                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>

                      <div class="col s12">
                              <div class="card">
                                  <div class="card-content">
                                      <h5 class="card-title activator">Warkah</h5>
                                  </div>
                                  <div class="divider"></div>
                                  <form class="h-form">
                                      <div class="form-body">
                                          <div class="card-content">
                                            <table class="responsive-table striped">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nomor</th>
                                                        <th>Tahun</th>
                                                        <th>Desa</th>
                                                        <th>Kondisi</th>
                                                        <th>Penyimpanan</th>
                                                        <th>status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Alvin</td>
                                                        <td>Eclair</td>
                                                        <td>$0.87</td>
                                                        <td>$0.87</td>
                                                        <td>$0.87</td>
                                                        <td>$0.87</td>
                                                        <td>$0.87</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                          </div>
                                      </div>
                                      <div class="divider"></div>
                                      <div class="card-content">
                                          <div class="form-action">
                                              <button class="btn cyan waves-effect waves-light" type="submit" name="action">Tambah Data Warkah
                                              </button>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>

                          <div class="col s12">
                                  <div class="card">
                                      <div class="card-content">
                                          <h5 class="card-title activator">Histori Peminjaman</h5>
                                      </div>
                                      <div class="divider"></div>
                                      <form class="h-form">
                                          <div class="form-body">
                                              <div class="card-content">
                                                <table class="responsive-table striped">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nomor</th>
                                                            <th>Tahun</th>
                                                            <th>Desa</th>
                                                            <th>Kondisi</th>
                                                            <th>Penyimpanan</th>
                                                            <th>status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Alvin</td>
                                                            <td>Eclair</td>
                                                            <td>$0.87</td>
                                                            <td>$0.87</td>
                                                            <td>$0.87</td>
                                                            <td>$0.87</td>
                                                            <td>$0.87</td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                              </div>
                                          </div>
                                          <div class="divider"></div>
                                          <div class="card-content">
                                              <div class="form-action">
                                                  <button class="btn cyan waves-effect waves-light" type="submit" name="action">Tambah Data Warkah
                                                  </button>
                                              </div>
                                          </div>
                                      </form>
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
    <script src="<?php echo base_url(); ?>/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>dist/js/materialize.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!-- ============================================================== -->
    <!-- Apps -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>dist/js/app.js"></script>
    <script src="<?php echo base_url(); ?>dist/js/app.init.horizontal.js"></script>
    <script src="<?php echo base_url(); ?>dist/js/app-style-switcher.horizontal.js"></script>
    <!-- ============================================================== -->
    <!-- Custom js -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>dist/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>/assets/extra-libs/prism/prism.js"></script>
    <script src="<?php echo base_url(); ?>dist/js/pages/forms/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/extra-libs/jquery-datatables-editable/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>/assets/extra-libs/tiny-editable/mindmup-editabletable.js"></script>
    <script src="<?php echo base_url(); ?>/assets/extra-libs/tiny-editable/numeric-input-example.js"></script>
    <script>
    $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
    $('#editable-datatable').editableTableWidget().numericInputExample().find('td:first').focus();
    $(function() {
        $('#editable-datatable').DataTable();
    });
    </script>

</body>

</html>
