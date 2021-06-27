<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $this->load->view('share/icon', '', TRUE);?>
    <title>Detail surat_ukur</title>
    <link href="<?php echo base_url(); ?>dist/css/style.css" rel="stylesheet">
    <!-- This page CSS -->
    <link href="<?php echo base_url(); ?>assets/extra-libs/prism/prism.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>dist/css/pages/data-table.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>dist/css/pages/form-page.css" rel="stylesheet">

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
                        <a href="#!" class="breadcrumb">Surat Ukur</a>
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
                                  <h5 class="card-title activator">Surat Ukur</h5>
                              </div>
                              <div class="divider"></div>
                              <form class="h-form">
                                  <div class="form-body">
                                      <div class="card-content">
                                        <table class="responsive-table striped">
                                            <thead>
                                                <tr>
                                                    <th>Nomor</th>
                                                    <th>Tahun</th>
                                                    <th>NIB</th>
                                                    <th>Desa</th>
                                                    <th>Kondisi</th>
                                                    <th>Penyimpanan</th>
                                                    <th>Status</th>
                                                    <th>Valid</th>
                                                    <th width="100px">QR</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <?php
                                                $i=0;
                                                foreach($data_surat_ukur as $su){
                                                $i++;
                                              ?>
                                                <tr>
                                                    <td style="color: #000000"><?php echo $su->nomor; ?></td>
                                                    <td style="color: #000000"><?php echo $su->tahun; ?></td>
                                                    <td style="color: #000000"><?php echo $su->nib; ?></td>
                                                    <td style="color: #000000"><?php echo $su->nama_desa; ?></td>
                                                    <td style="color: #000000"><?php echo $su->nama_kondisi; ?></td>
                                                    <td style="color: #000000"><?php echo $su->nama_lemari; ?> / <?php echo $su->nama_baris; ?> / <?php echo $su->nama_bundel; ?></td>
                                                    <td>
                                                      <?php
                                                      if($su->status==0){
                                                          echo '<span class="label label-danger">Belum Di Tentukan</span>';
                                                        }else if($su->status==1){
                                                          echo '<span class="label label-success">Tersedia</span>';
                                                        }else if($su->status==2){
                                                          echo '<span class="label label-info">Di Pinjam</span>';
                                                        }else if($su->status==3){
                                                          echo '<span class="label label-warning">Belum Disusun</span>';
                                                        }else if($su->status==4){
                                                            echo '<span class="label label-danger">Hilang</span>';
                                                        }
                                                      ?>

                                                    </td>
                                                    <td style="color: #000000">
                                                      <?php
                                                      if($su->valid==0){
                                                          echo '<span class="label label-danger">Belum Valid</span>';
                                                        }else if($su->valid==1){
                                                          echo '<span class="label label-success">Telah Valid</span>';
                                                        }
                                                      ?>
                                                    </td>
                                                    <td style="color: #000000">
                                                      <?php
                                                      $qrcode="SU-".$su->id_surat_ukur;
                                                      ?>
                                                      <a href="<?php echo site_url('Code/QRcode/'.$qrcode); ?>">
                                                          <img style=" border: 1px solid #555;"src="<?php echo base_url('Code/QRcode/'.$qrcode);?>" width="100px"><br>
                                                      </a>
                                                    </td>
                                                </tr>
                                                <?php
                                                }
                                                ?>

                                            </tbody>
                                        </table>
                                      </div>
                                  </div>
                                  <div class="divider"></div
                              </form>
                          </div>
                      </div>

                          <div class="col s12">
                                  <div class="card">
                                      <div class="card-content">
                                          <h5 class="card-title activator">Histori Peminjaman</h5>
                                          <label>
                                            50 Peminjaman Terakhir
                                          </label>
                                      </div>
                                      <div class="divider"></div>
                                      <form class="h-form">
                                          <div class="form-body">
                                              <div class="card-content">
                                                <table class="responsive-table striped">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Tanggal Pinjam</th>
                                                            <th>Tanggal Kembali</th>
                                                            <th>Tanggal Dikembalikan</th>
                                                            <th>Telat</th>
                                                            <th>Pegawai</th>
                                                            <th>Status</th>
                                                            <th width="100px">QR</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      <?php
                                                        $i=0;
                                                        foreach($histori as $histori){
                                                        $i++;
                                                      ?>
                                                        <tr>
                                                            <td style="color: #000000"><?php echo $i; ?></td>
                                                            <td style="color: #000000"><?php echo $histori->tgl_pinjam; ?></td>
                                                            <td style="color: #000000"><?php echo $histori->tgl_kembali; ?></td>
                                                            <td style="color: #000000"><?php echo $histori->tgl_dikembalikan; ?></td>
                                                            <td style="color: #000000"><?php echo $histori->selisih; ?> Hari</td>
                                                            <td style="color: #000000"><?php echo $histori->nama_lengkap; ?></td>
                                                            <td>
                                                              <?php
                                                              if($histori->status==0){
                                                                  echo '<span class="label label-success">Belum Di Tentukan</span>';
                                                                }else if($histori->status==1){
                                                                  echo '<span class="label label-warning">Proses Peminjaman</span>';
                                                                }else if($histori->status==2){
                                                                  echo '<span class="label label-warning">Di Pinjam</span>';
                                                                }else if($histori->status==3){
                                                                  echo '<span class="label label-warning">Belum Disusun</span>';
                                                                }else if($histori->status==4){
                                                                    echo '<span class="label label-success">Selesai</span>';
                                                                }
                                                              ?>
                                                            </td>
                                                            <td style="color: #000000">
                                                              <?php
                                                              $qrcode="P-".$histori->invoice;
                                                              ?>
                                                              <a href="<?php echo site_url('Code/QRcode/'.$qrcode); ?>">
                                                                  <img style=" border: 1px solid #555;"src="<?php echo base_url('Code/QRcode/'.$qrcode);?>" width="100px"><br>
                                                              </a>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                        }
                                                        ?>

                                                    </tbody>
                                                </table>
                                              </div>
                                          </div>
                                          <div class="divider"></div>

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
    <script src="<?php echo base_url(); ?>assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>dist/js/materialize.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
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
    <script src="<?php echo base_url(); ?>assets/extra-libs/prism/prism.js"></script>
    <script src="<?php echo base_url(); ?>dist/js/pages/forms/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/extra-libs/jquery-datatables-editable/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets/extra-libs/tiny-editable/mindmup-editabletable.js"></script>
    <script src="<?php echo base_url(); ?>assets/extra-libs/tiny-editable/numeric-input-example.js"></script>
    <script>
    $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
    $('#editable-datatable').editableTableWidget().numericInputExample().find('td:first').focus();
    $(function() {
        $('#editable-datatable').DataTable();
    });
    </script>

</body>

</html>
