<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $this->load->view('share/icon', '', TRUE);?>
    <title>Surat Ukur Per desa</title>
    <link href="../../dist/css/style.css" rel="stylesheet">
    <!-- This page CSS -->
    <link href="../../assets/extra-libs/prism/prism.css" rel="stylesheet">
    <link href="../../dist/css/pages/data-table.css" rel="stylesheet">

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
                        <a href="#!" class="breadcrumb">Data Surat Ukur</a>
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
                              <h5 class="card-title">Data Surat Ukur</h5>
                              <div class="table-responsive">
                                  <table class="table striped m-b-20" id="editable-datatable">
                                      <thead>
                                          <tr>
                                              <th>#</th>
                                              <th>Kecamatan</th>
                                              <th>Desa</th>
                                              <th>Nomor Surat Ukur</th>
                                              <th>Tahun</th>
                                              <th>Jenis Hak</th>
                                              <th>Buku Tanah</th>
                                              <th>Detail</th>
                                          </tr>
                                      </thead>
                                      <tbody>

                                        <?php
                                          $i=0;
                                          foreach($data_surat_ukur as $surat_ukur){
                                          $i++;
                                        ?>
                                          <tr class="gradeX">
                                              <td><?php echo $i;?></td>
                                              <td><?php echo $surat_ukur->nama_kec; ?></td>
                                              <td><?php echo $surat_ukur->nama_desa; ?></td>
                                              <td><?php echo $surat_ukur->nomor; ?></td>
                                              <td><?php echo $surat_ukur->tahun; ?></td>
                                              <td><?php echo $surat_ukur->nama_jenis_hak; ?></td>
                                              <td><?php echo $surat_ukur->no_hak; ?></td>
                                              <td>
                                                <?php if($surat_ukur->id_buku_tanah!=null){  ?>
                                                  <a href="<?php echo base_url(); ?>buku_tanah/detail_buku_tanah/<?php echo $surat_ukur->id_buku_tanah; ?>" class="waves-effect waves-light btn  green btn tooltipped"data-position="bottom" data-delay="50" data-tooltip="Detail"><i class="material-icons dp48">remove_red_eye</i></a>
                                                <?php }else{  ?>
                                                    <a href="<?php echo base_url(); ?>surat_ukur/detail_surat_ukur/<?php echo $surat_ukur->surat_ukur; ?>" class="waves-effect waves-light btn orange btn tooltipped"data-position="bottom" data-delay="50" data-tooltip="Detail"><i class="material-icons dp48">remove_red_eye</i></a>
                                                <?php } ?>
                                              </td>
                                          </tr>
                                          <?php
                                          }
                                          ?>
                                      </tbody>
                                  </table>
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


    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../../dist/js/materialize.min.js"></script>
    <script src="../../assets/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!-- ============================================================== -->
    <!-- Apps -->
    <!-- ============================================================== -->
    <script src="../../dist/js/app.js"></script>
    <script src="../../dist/js/app.init.horizontal.js"></script>
    <script src="../../dist/js/app-style-switcher.horizontal.js"></script>
    <!-- ============================================================== -->
    <!-- Custom js -->
    <!-- ============================================================== -->
    <script src="../../dist/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script src="../../assets/extra-libs/prism/prism.js"></script>
    <script src="../../dist/js/pages/forms/jquery.validate.min.js"></script>
    <script src="../../assets/extra-libs/jquery-datatables-editable/jquery.dataTables.js"></script>
    <script src="../../assets/extra-libs/tiny-editable/mindmup-editabletable.js"></script>
    <script src="../../assets/extra-libs/tiny-editable/numeric-input-example.js"></script>
    <script>
    $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
    $('#editable-datatable').editableTableWidget().numericInputExample().find('td:first').focus();
    $(function() {
        $('#editable-datatable').DataTable();
    });
    </script>

</body>

</html>
