<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $this->load->view('share/icon', '', TRUE);?>
    <title>Data Buku Tanah</title>
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
                    <h5 class="font-medium m-b-0">Buku Tanah</h5>
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
              <div class="row">
                  <div class="col s12 ">
                      <div class="card">
                          <div class="card-content">

                              <h5 class="card-title activator">Tambah Buku Tanah<i class="material-icons right tooltipped" data-position="left" data-delay="50" ></i></h5>
                              <form class="formValidate" id="formValidate" action="<?php echo base_url(); ?>buku_tanah/tambah" method="post" enctype="multipart/form-data">
                                <div class="row">
                                      <div class="input-field col s12">
                                        <i class="material-icons prefix">chrome_reader_mode</i>
                                        <select required name="kode_desa">
                                          <option value="" disabled selected>Pilih Desa</option>
                                          <?php
                                            foreach($data_desa as $data_desa){
                                          ?>
                                            <option value="<?php echo $data_desa->kode_desa; ?>"><?php echo $data_desa->nama_kec; ?> -- <?php echo $data_desa->nama_desa; ?></option>
                                          <?php } ?>
                                        </select>
                                      </div>
                                </div>
                                <div class="row">
                                      <div class="input-field col s12">
                                        <i class="material-icons prefix">chrome_reader_mode</i>
                                        <select required name="id_jenis_hak">
                                          <option value="" disabled selected>Pilih Jenis Hak</option>
                                          <?php
                                            foreach($data_jenis_hak as $data_jenis_hak){
                                          ?>
                                            <option value="<?php echo $data_jenis_hak->id_jenis_hak; ?>"><?php echo $data_jenis_hak->id_jenis_hak; ?> - <?php echo $data_jenis_hak->nama_jenis_hak; ?></option>
                                          <?php } ?>
                                        </select>
                                      </div>
                                </div>
                                  <div class="row">
                                      <div class="input-field col s12">
                                          <i class="material-icons prefix">chrome_reader_mode</i>
                                          <input   type="text" required name="nomor_hak" autofocus >
                                          <label for="uname">Nomor Hak *</label>
                                          <div class="errorTxt1"></div>
                                      </div>
                                  </div>
                                  <div class="row">
                                        <div class="input-field col s12">
                                          <i class="material-icons prefix">chrome_reader_mode</i>
                                          <select required name="id_kondisi">
                                            <option value="" disabled selected>Pilih Kondisi Arsip</option>
                                            <?php
                                              foreach($data_kondisi as $data_kondisi){
                                            ?>
                                              <option value="<?php echo $data_kondisi->id_kondisi; ?>"><?php echo $data_kondisi->id_kondisi; ?> - <?php echo $data_kondisi->nama_kondisi; ?></option>
                                            <?php } ?>
                                          </select>
                                        </div>
                                  </div>
                                  <div class="row">
                                      <div class="input-field col s12">
                                          <i class="material-icons prefix">chrome_reader_mode</i>
                                          <label for="cemail">NIB (Nomor Induk Bidang)*</label>
                                          <input  type="text"  required name="nib">
                                          <div class="errorTxt2"></div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="input-field col s12">
                                          <i class="material-icons prefix">chrome_reader_mode</i>
                                          <label for="cemail">Kode Bundel (Scan Barcode Pada Bundel) *</label>
                                          <input  type="text"  required name="id_bundel">
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
                              <h5 class="card-title">Data Buku Tanah</h5>
                              <div class="table-responsive">
                                  <table class="table striped m-b-20" id="editable-datatable">
                                      <thead>
                                          <tr>
                                              <th>#</th>
                                              <th>Kecamatan</th>
                                              <th>Desa</th>
                                              <th>Total Hak</th>
                                              <th>Cetak QR Code </th>

                                          </tr>
                                      </thead>
                                      <tbody>
                                        <?php
                                          $i=0;
                                          foreach($desa_tabel as $desa){
                                          $i++;
                                        ?>
                                          <tr class="gradeX">
                                              <td  style="color: #000000;"><?php echo $i;?></td>
                                              <td  style="color: #000000;"><?php echo $desa->nama_kec; ?></td>
                                              <td  style="color: #000000;"><?php echo $desa->nama_desa; ?></td>
                                              <td  style="color: #000000;"><a href="<?php echo base_url(); ?>buku_tanah/detail_buku_tanah_desa/<?php echo $desa->kode_desa; ?>"><?php echo $desa->jumlah_hak; ?></a></td>
                                              <td  style="color: #000000;">
                                                <a href="<?php echo base_url(); ?>cetak/cetak_bt_desa/<?php echo $desa->kode_desa; ?>/<?php echo $desa->jumlah_hak; ?>" target="_blank"class="waves-effect waves-light btn  green">Cetak</a>
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
    <script src="assets/extra-libs/jquery-datatables-editable/jquery.dataTables.js"></script>
    <script src="assets/extra-libs/tiny-editable/mindmup-editabletable.js"></script>
    <script src="assets/extra-libs/tiny-editable/numeric-input-example.js"></script>
    <script>
    $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
    $(function() {
        $('#editable-datatable').DataTable();
    });
    </script>

</body>

</html>
