<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $this->load->view('share/icon', '', TRUE);?>
    <title>Cetak Data QR</title>
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
                    <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">Home</a>
                        <a href="#!" class="breadcrumb">Cetak QR</a>
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
                            <ul class="tabs tab-demo z-depth-1">
                                <li class="tab"><a href="#test16" class="active">Barcode</a></li>
                                <li class="tab"><a class="" href="#test17">Buku Tanah</a></li>
                                <li class="tab"><a href="#test18">Surat Ukur</a></li>
                                <li class="tab"><a href="#test19">Warkah</a></li>
                            <li class="indicator" style="left: 0px; right: 538px;"></li></ul>
                            <div id="test16" class="active" style="display: block;">
                              <form class="row" action="javascript:cari_barcode()">
                                <div class="input-field col s10">
                                    <input name="barcode" id="barcode" required type="text" autofocus>
                                    <label for="icon_prefix">Barcode Buku Tanah/ Surat Ukur / Warkah</label>
                                </div>

                                <div class="input-field col s2">
                                  <button  class="waves-effect waves-light btn-large" submit><i class="material-icons left">search</i>Cari</button>
                                </div>
                              </form>
                            </div>
                            <div id="test17" class="" style="display: none;">
                                <div class="row">
                                  <form class="row" action="javascript:cari_buku_tanah()">
                                    <div class="input-field col s4">
                                      <select id="desa_buku_tanah" required name="kode_desa" class="browser-default">
                                        <option value="" disabled selected>Pilih Desa</option>
                                        <?php
                                        foreach($data_desa as $desa_bt){
                                          ?>
                                          <option value="<?php echo $desa_bt->kode_desa; ?>"><?php echo $desa_bt->nama_kec; ?> -- <?php echo $desa_bt->nama_desa; ?></option>
                                        <?php } ?>
                                      </select>
                                    </div>
                                    <div class="input-field col s3">
                                      <select class="browser-default" required id="jenis_hak">
                                        <option class="browser-default" value="" disabled selected>Pilih Jenis Hak</option>
                                        <?php
                                        foreach($data_jenis_hak as $data_jenis_hak){
                                          ?>
                                          <option value="<?php echo $data_jenis_hak->id_jenis_hak; ?>"><?php echo $data_jenis_hak->id_jenis_hak; ?> - <?php echo $data_jenis_hak->nama_jenis_hak; ?></option>
                                        <?php } ?>
                                      </select>
                                    </div>

                                    <div class="input-field col s3">
                                      <i class="material-icons prefix">chrome_reader_mode</i>
                                      <input  type="number" id="nomor_hak" required >
                                      <label for="icon_prefix">Nomor Hak</label>
                                    </div>
                                    <div class="input-field col s2">
                                        <button  class="waves-effect waves-light btn-large" type="submit" name="action"><i class="material-icons left">search</i>Cari</button>
                                    </div>
                                  </form>
                                </div>
                            </div>
                            <div id="test18" style="display: none;">
                                <div class="row">
                                  <form class="row" action="javascript:cari_surat_ukur()">
                                    <div class="input-field col s4">
                                      <select required id="desa_surat_ukur" class="browser-default">
                                        <option value="" disabled selected>Pilih Desa</option>
                                        <?php
                                        foreach($data_desa as $desa_su){
                                          ?>
                                          <option value="<?php echo $desa_su->kode_desa; ?>"><?php echo $desa_su->nama_kec; ?> -- <?php echo $desa_su->nama_desa; ?></option>
                                        <?php } ?>
                                      </select>
                                    </div>
                                    <div class="input-field col s3">
                                      <i class="material-icons prefix">chrome_reader_mode</i>
                                      <input  type="text" required id="nomor_surat_ukur">
                                      <label for="icon_prefix">Nomor SU</label>
                                    </div>
                                    <div class="input-field col s3">
                                      <i class="material-icons prefix">chrome_reader_mode</i>
                                      <input  type="number" required id="tahun_surat_ukur" >
                                      <label for="icon_prefix">Tahun</label>
                                    </div>
                                    <div class="input-field col s2">
                                        <button  class="waves-effect waves-light btn-large" type="submit" name="action"><i class="material-icons left">search</i>Cari</button>
                                    </div>
                                  </form>
                                </div>
                            </div>
                            <div id="test19" style="display: none;">
                              <div class="row">
                                <form class="row" action="javascript:cari_warkah()">
                                  <div class="input-field col s6">
                                    <i class="material-icons prefix">chrome_reader_mode</i>
                                    <input  type="number" required id="nomor_warkah">
                                    <label for="icon_prefix">Nomor warkah</label>
                                  </div>
                                  <div class="input-field col s4">
                                    <i class="material-icons prefix">chrome_reader_mode</i>
                                    <input  type="number"required id="tahun_warkah">
                                    <label for="icon_prefix">Tahun</label>
                                  </div>
                                  <div class="input-field col s2">
                                      <button  class="waves-effect waves-light btn-large" type="submit" name="action"><i class="material-icons left">search</i>Cari</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <ul class="tabs tab-demo z-depth-1">
                                <li class="tab"><a href="#test16" class="active">Barcode</a></li>
                                <li class="tab"><a class="" href="#test17">Buku Tanah</a></li>
                                <li class="tab"><a href="#test18">Surat Ukur</a></li>
                                <li class="tab"><a href="#test19">Warkah</a></li>
                            <li class="indicator" style="left: 0px; right: 538px;"></li></ul>
                            <div id="test16" class="active" style="display: block;">
                              <form class="row" action="javascript:cari_barcode()">
                                <div class="input-field col s10">
                                    <input name="barcode" id="barcode" required type="text" autofocus>
                                    <label for="icon_prefix">Barcode Buku Tanah/ Surat Ukur / Warkah</label>
                                </div>

                                <div class="input-field col s2">
                                  <button  class="waves-effect waves-light btn-large" submit><i class="material-icons left">search</i>Cari</button>
                                </div>
                              </form>
                            </div>
                            <div id="test17" class="" style="display: none;">
                                <div class="row">
                                  <form class="row" action="javascript:cari_buku_tanah()">
                                    <div class="input-field col s4">
                                      <select id="desa_buku_tanah" required name="kode_desa" class="browser-default">
                                        <option value="" disabled selected>Pilih Desa</option>
                                        <?php
                                        foreach($data_desa as $desa_bt){
                                          ?>
                                          <option value="<?php echo $desa_bt->kode_desa; ?>"><?php echo $desa_bt->nama_kec; ?> -- <?php echo $desa_bt->nama_desa; ?></option>
                                        <?php } ?>
                                      </select>
                                    </div>
                                    <div class="input-field col s3">
                                      <select class="browser-default" required id="jenis_hak">
                                        <option class="browser-default" value="" disabled selected>Pilih Jenis Hak</option>
                                        <?php
                                        foreach($data_jenis_hak as $data_jenis_hak){
                                          ?>
                                          <option value="<?php echo $data_jenis_hak->id_jenis_hak; ?>"><?php echo $data_jenis_hak->id_jenis_hak; ?> - <?php echo $data_jenis_hak->nama_jenis_hak; ?></option>
                                        <?php } ?>
                                      </select>
                                    </div>

                                    <div class="input-field col s3">
                                      <i class="material-icons prefix">chrome_reader_mode</i>
                                      <input  type="number" id="nomor_hak" required >
                                      <label for="icon_prefix">Nomor Hak</label>
                                    </div>
                                    <div class="input-field col s2">
                                        <button  class="waves-effect waves-light btn-large" type="submit" name="action"><i class="material-icons left">search</i>Cari</button>
                                    </div>
                                  </form>
                                </div>
                            </div>
                            <div id="test18" style="display: none;">
                                <div class="row">
                                  <form class="row" action="javascript:cari_surat_ukur()">
                                    <div class="input-field col s4">
                                      <select required id="desa_surat_ukur" class="browser-default">
                                        <option value="" disabled selected>Pilih Desa</option>
                                        <?php
                                        foreach($data_desa as $desa_su){
                                          ?>
                                          <option value="<?php echo $desa_su->kode_desa; ?>"><?php echo $desa_su->nama_kec; ?> -- <?php echo $desa_su->nama_desa; ?></option>
                                        <?php } ?>
                                      </select>
                                    </div>
                                    <div class="input-field col s3">
                                      <i class="material-icons prefix">chrome_reader_mode</i>
                                      <input  type="text" required id="nomor_surat_ukur">
                                      <label for="icon_prefix">Nomor SU</label>
                                    </div>
                                    <div class="input-field col s3">
                                      <i class="material-icons prefix">chrome_reader_mode</i>
                                      <input  type="number" required id="tahun_surat_ukur" >
                                      <label for="icon_prefix">Tahun</label>
                                    </div>
                                    <div class="input-field col s2">
                                        <button  class="waves-effect waves-light btn-large" type="submit" name="action"><i class="material-icons left">search</i>Cari</button>
                                    </div>
                                  </form>
                                </div>
                            </div>
                            <div id="test19" style="display: none;">
                              <div class="row">
                                <form class="row" action="javascript:cari_warkah()">
                                  <div class="input-field col s6">
                                    <i class="material-icons prefix">chrome_reader_mode</i>
                                    <input  type="number" required id="nomor_warkah">
                                    <label for="icon_prefix">Nomor warkah</label>
                                  </div>
                                  <div class="input-field col s4">
                                    <i class="material-icons prefix">chrome_reader_mode</i>
                                    <input  type="number"required id="tahun_warkah">
                                    <label for="icon_prefix">Tahun</label>
                                  </div>
                                  <div class="input-field col s2">
                                      <button  class="waves-effect waves-light btn-large" type="submit" name="action"><i class="material-icons left">search</i>Cari</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <ul class="tabs tab-demo z-depth-1">
                                <li class="tab"><a href="#test16" class="active">Barcode</a></li>
                                <li class="tab"><a class="" href="#test17">Buku Tanah</a></li>
                                <li class="tab"><a href="#test18">Surat Ukur</a></li>
                                <li class="tab"><a href="#test19">Warkah</a></li>
                            <li class="indicator" style="left: 0px; right: 538px;"></li></ul>
                            <div id="test16" class="active" style="display: block;">
                              <form class="row" action="javascript:cari_barcode()">
                                <div class="input-field col s10">
                                    <input name="barcode" id="barcode" required type="text" autofocus>
                                    <label for="icon_prefix">Barcode Buku Tanah/ Surat Ukur / Warkah</label>
                                </div>

                                <div class="input-field col s2">
                                  <button  class="waves-effect waves-light btn-large" submit><i class="material-icons left">search</i>Cari</button>
                                </div>
                              </form>
                            </div>
                            <div id="test17" class="" style="display: none;">
                                <div class="row">
                                  <form class="row" action="javascript:cari_buku_tanah()">
                                    <div class="input-field col s4">
                                      <select id="desa_buku_tanah" required name="kode_desa" class="browser-default">
                                        <option value="" disabled selected>Pilih Desa</option>
                                        <?php
                                        foreach($data_desa as $desa_bt){
                                          ?>
                                          <option value="<?php echo $desa_bt->kode_desa; ?>"><?php echo $desa_bt->nama_kec; ?> -- <?php echo $desa_bt->nama_desa; ?></option>
                                        <?php } ?>
                                      </select>
                                    </div>
                                    <div class="input-field col s3">
                                      <select class="browser-default" required id="jenis_hak">
                                        <option class="browser-default" value="" disabled selected>Pilih Jenis Hak</option>
                                        <?php
                                        foreach($data_jenis_hak as $data_jenis_hak){
                                          ?>
                                          <option value="<?php echo $data_jenis_hak->id_jenis_hak; ?>"><?php echo $data_jenis_hak->id_jenis_hak; ?> - <?php echo $data_jenis_hak->nama_jenis_hak; ?></option>
                                        <?php } ?>
                                      </select>
                                    </div>

                                    <div class="input-field col s3">
                                      <i class="material-icons prefix">chrome_reader_mode</i>
                                      <input  type="number" id="nomor_hak" required >
                                      <label for="icon_prefix">Nomor Hak</label>
                                    </div>
                                    <div class="input-field col s2">
                                        <button  class="waves-effect waves-light btn-large" type="submit" name="action"><i class="material-icons left">search</i>Cari</button>
                                    </div>
                                  </form>
                                </div>
                            </div>
                            <div id="test18" style="display: none;">
                                <div class="row">
                                  <form class="row" action="javascript:cari_surat_ukur()">
                                    <div class="input-field col s4">
                                      <select required id="desa_surat_ukur" class="browser-default">
                                        <option value="" disabled selected>Pilih Desa</option>
                                        <?php
                                        foreach($data_desa as $desa_su){
                                          ?>
                                          <option value="<?php echo $desa_su->kode_desa; ?>"><?php echo $desa_su->nama_kec; ?> -- <?php echo $desa_su->nama_desa; ?></option>
                                        <?php } ?>
                                      </select>
                                    </div>
                                    <div class="input-field col s3">
                                      <i class="material-icons prefix">chrome_reader_mode</i>
                                      <input  type="text" required id="nomor_surat_ukur">
                                      <label for="icon_prefix">Nomor SU</label>
                                    </div>
                                    <div class="input-field col s3">
                                      <i class="material-icons prefix">chrome_reader_mode</i>
                                      <input  type="number" required id="tahun_surat_ukur" >
                                      <label for="icon_prefix">Tahun</label>
                                    </div>
                                    <div class="input-field col s2">
                                        <button  class="waves-effect waves-light btn-large" type="submit" name="action"><i class="material-icons left">search</i>Cari</button>
                                    </div>
                                  </form>
                                </div>
                            </div>
                            <div id="test19" style="display: none;">
                              <div class="row">
                                <form class="row" action="javascript:cari_warkah()">
                                  <div class="input-field col s6">
                                    <i class="material-icons prefix">chrome_reader_mode</i>
                                    <input  type="number" required id="nomor_warkah">
                                    <label for="icon_prefix">Nomor warkah</label>
                                  </div>
                                  <div class="input-field col s4">
                                    <i class="material-icons prefix">chrome_reader_mode</i>
                                    <input  type="number"required id="tahun_warkah">
                                    <label for="icon_prefix">Tahun</label>
                                  </div>
                                  <div class="input-field col s2">
                                      <button  class="waves-effect waves-light btn-large" type="submit" name="action"><i class="material-icons left">search</i>Cari</button>
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
