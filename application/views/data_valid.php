<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $this->load->view('share/icon', '', TRUE);?>
    <title>Data Belum Valid</title>
    <link href="dist/css/style.css" rel="stylesheet">
    <!-- This page CSS -->
    <link href="assets/extra-libs/prism/prism.css" rel="stylesheet">
    <link href="dist/css/pages/data-table.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
    <style>
      .selectize-input {
        min-height: 44px;
      }
      .selectize-input {
        padding: 16px 12px;
      }
    </style>
    <link href="<?php echo base_url(); ?>assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
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
                    <h5 class="font-medium m-b-0">Data Arsip Belum Valid</h5>
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
                            <ul class="tabs tab-demo z-depth-1">
                                <li class="tab"><a href="#test16" class="active">Barcode</a></li>
                                <li class="tab"><a href="#test17">Buku Tanah</a></li>
                                <li class="tab"><a href="#test18">Surat Ukur</a></li>
                                <li class="tab"><a href="#test19">Warkah</a></li>
                            <li class="indicator" style="left: 0px; right: 538px;"></li></ul>
                            <div id="test16" class="active" style="display: block;">
                              <form class="row" action="javascript:cari_barcode()">
                                <div class="input-field col s10">
                                    <input name="barcode" id="barcode" required type="text" autofocus="on">
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
                                      <select id="desa_buku_tanah"  required name="kode_desa" class="browser-default" >
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
                    <div class="col s6">
                        <div class="card">
                            <div class="card-content">
                              <h5>Buku Tanah</h5>
                              <table class="table striped m-b-20"  id="zero_config" class="responsive-table display">
                                  <thead>
                                      <tr>
                                          <th>#</th>
                                          <th>Desa</th>
                                          <th>Total Hak</th>

                                      </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      $i=0;
                                      foreach($valid as $desa){
                                      $i++;
                                    ?>
                                      <tr class="gradeX">
                                          <td  style="color: #000000;"><?php echo $i;?></td>
                                          <td  style="color: #000000;"><?php echo $desa->nama_desa; ?></td>
                                          <td  style="color: #000000;"><a href="<?php echo base_url(); ?>valid/detail_buku_tanah_valid/<?php echo $desa->kode_desa; ?>"><?php echo $desa->jumlah_hak; ?></a></td>

                                      </tr>
                                      <?php
                                      }
                                      ?>
                                  </tbody>
                              </table>

                            </div>
                        </div>
                    </div>
                    <div class="col s6">
                        <div class="card">
                            <div class="card-content">
                              <h5>Surat Ukur</h5>
                              <table class="table striped m-b-20"  id="zero_config1" class="responsive-table display">
                                  <thead>
                                      <tr>
                                          <th>#</th>
                                          <th>Desa</th>
                                          <th>Total SU</th>

                                      </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      $i=0;
                                      foreach($valid1 as $desa){
                                      $i++;
                                    ?>
                                      <tr class="gradeX">
                                          <td  style="color: #000000;"><?php echo $i;?></td>
                                          <td  style="color: #000000;"><?php echo $desa->nama_desa; ?></td>
                                          <td  style="color: #000000;"><a href="<?php echo base_url(); ?>valid/detail_surat_ukur_valid/<?php echo $desa->kode_desa; ?>"><?php echo $desa->jumlah; ?></a></td>

                                      </tr>
                                      <?php
                                      }
                                      ?>
                                  </tbody>
                              </table>

                            </div>
                        </div>
                    </div>

                    <div class="col s6">
                        <div class="card">
                            <div class="card-content">
                              <h5>Warkah</h5>
                              <table class="table striped m-b-20"  id="zero_config2" class="responsive-table display">
                                  <thead>
                                      <tr>
                                          <th>#</th>
                                          <th>Desa</th>
                                          <th>Total Warkah</th>

                                      </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      $i=0;
                                      foreach($valid2 as $data){
                                      $i++;
                                    ?>
                                      <tr class="gradeX">
                                          <td  style="color: #000000;"><?php echo $i;?></td>
                                          <td  style="color: #000000;"><?php echo $data->tahun; ?></td>
                                          <td  style="color: #000000;"><a href="<?php echo base_url(); ?>valid/detail_warkah_valid/<?php echo $data->tahun; ?>"><?php echo $data->jumlah; ?></a></td>

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
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <?php echo $this->load->view('share/footer', '', TRUE);?>
        </div>



    </div>
    <div id="modal2" class="modal">
        <div class="modal-content">
            <div class="row">
              <h5><a id="data"></a></h5>
              <form action="javascript:valid()">
                <div class="row">
                      <div class="input-field col s12">
                        <i class="material-icons prefix">chrome_reader_mode</i>
                        <select required name="kondisi" id="kondisi">
                          <option value="" disabled selected>Pilih Kondisi Arsip</option>
                          <?php
                            foreach($data_kondisi as $data_kondisi){
                          ?>
                            <option value="<?php echo $data_kondisi->id_kondisi; ?>"><?php echo $data_kondisi->id_kondisi; ?> - <?php echo $data_kondisi->nama_kondisi; ?></option>
                          <?php } ?>
                        </select>
                      </div>
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">chrome_reader_mode</i>
                    <input name="kode_bundel" id="kode_bundel" required type="text">
                    <input name="id" id="id" required type="hidden" value="">
                    <input name="type" id="type" required type="hidden" value="">
                    <label for="icon_prefix">Barcode Bundel</label>
                </div>
            </div>
            <br></br>
            <br></br>
            <div class="modal-footer">
                <button href="#!" class="waves-effect waves-green btn-flat blue white-text" type="submit" ><i class="fas fa-share"></i>Simpan</button>
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat grey darken-4 white-text " id="btn_batal">Cancel</a>

            </div>
          </form>

        </div>
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function () {
          $('.browser-default').selectize({
              sortField: 'text'
          });
      });
    </script>
    <!-- <script src="assets/libs/jquery/dist/jquery.min.js"></script> -->
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

    <script type="text/javascript">
        setFocus();
        const inputField = document.getElementById("barcode");
        const bundel = document.getElementById("kode_bundel");
        function setFocus(){
          document.getElementById("barcode").focus();
        }

        function data_modal(data){
          if(data!=null){
            pecah=data.split(";",10);
            simpan();
            if(pecah[0]=="BT"){
              var kirim="Buku Tanah : "+pecah[2]+" / "+pecah[3]+" / "+pecah[1];
              $('#data').html(kirim);
              $('[name="id"]').val(pecah[4]);
              $('[name="type"]').val(pecah[0]);
            }else if(pecah[0]=="SU"){
              var kirim="Surat Ukur : "+pecah[2]+" / "+pecah[1]+" / "+pecah[3];
              $('#data').html(kirim);
              $('[name="id"]').val(pecah[4]);
              $('[name="type"]').val(pecah[0]);
            }else if(pecah[0]=="W"){
              var kirim="Warkah : "+pecah[1]+" / "+pecah[2];
              $('#data').html(kirim);
              $('[name="id"]').val(pecah[3]);
              $('[name="type"]').val(pecah[0]);
            }
          }else{
            peringatan("Arsip Tidak Ditemukan");
          }
        }


        function cari_barcode(){
          var barcode=$('#barcode').val();
          $.ajax({
              type : "POST",
              url  : "<?php echo base_url('valid/cari_barcode_valid')?>/<?php echo $this->session->userdata("nama_lengkap"); ?>/"+barcode,
              dataType : "JSON",
                success: function(data){
                  data_modal(data);
              }
          });
          return false;
        }

        function simpan() {
          $('#modal2').modal('open');
        }

        function valid(){
            $('#modal2').modal('close');
            var kondisi=$('#kondisi').val();
            var kode_bundel=$('#kode_bundel').val();
            var id=$('#id').val();
            var type=$('#type').val();
            setFocus();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url()?>valid/validkan/<?php echo $this->session->userdata("nama_lengkap"); ?>/"+kondisi+"/"+kode_bundel+"/"+id+"/"+type,
            dataType : "JSON",
                    success: function(notif){
                        $('#modal1').modal('close');
                        if (notif==1) {
                          berhasil("Arsip Valid !.");
                          setTimeout("location.href = '<?php echo base_url()?>valid';",1500);
                          bundel.value ="";
                        }else if(notif==2){
                          gagal("Arsip Gagal Valid");
                          setFocus();
                          bundel.value ="";
                        }else if(notif==3){
                          gagal("Bundel Tidak Sesuai, Arsip Gagal  Valid");
                          setFocus();
                          bundel.value ="";
                        }else{
                          gagal("Arsip Gagal Valid");
                          setFocus();
                          bundel.value ="";

                        }

                    }
                });
                return false;

        }

        $('#btn_batal').on('click',function(){
            $('#modal2').modal('close');
            setFocus();
            inputField.value ="";
            bundel.value ="";
        });
    </script>

    <script type="text/javascript">
        function cari_buku_tanah(){
          var desa_buku_tanah=$('#desa_buku_tanah').val();
          var jenis_hak=$('#jenis_hak').val();
          var nomor_hak=$('#nomor_hak').val();
          $.ajax({
              type : "POST",
              url  : "<?php echo base_url('valid/cari_buku_tanah_valid')?>/"+desa_buku_tanah+"/"+jenis_hak+"/"+nomor_hak,
              dataType : "JSON",
              success: function(data){
                data_modal(data);
            }
          });
          return false;
        }

        function cari_surat_ukur(){
          var desa_surat_ukur=$('#desa_surat_ukur').val();
          var nomor=$('#nomor_surat_ukur').val();
          var tahun=$('#tahun_surat_ukur').val();
          $.ajax({
              type : "POST",
              url  : "<?php echo base_url('valid/cari_surat_ukur_valid')?>/"+desa_surat_ukur+"/"+nomor+"/"+tahun,
              dataType : "JSON",
              success: function(data){
                data_modal(data);
            }
          });
          return false;
        }

        function cari_warkah(){
          var nomor_warkah=$('#nomor_warkah').val();
          var tahun_warkah=$('#tahun_warkah').val();
          $.ajax({
              type : "POST",
              url  : "<?php echo base_url('valid/cari_warkah_valid')?>/"+nomor_warkah+"/"+tahun_warkah,
              dataType : "JSON",
              success: function(data){
                data_modal(data);
            }
          });
          return false;
        }


    </script>
    <!-- Latest compiled and minified CSS -->
    <script>
    /****************************************
     *       Basic Table                   *
     ****************************************/
    $('#zero_config').DataTable();
    $('#zero_config1').DataTable();
    $('#zero_config2').DataTable();
    </script>
    <script src="<?php echo base_url(); ?>assets/libs/toastr/build/toastr.min.js"></script>
    <script>
      function berhasil(notif) {
        toastr.success(notif, '', { "progressBar": true });
      }
      function peringatan(notif) {
        toastr.warning(notif, 'Peringatan!', { positionClass: 'toast-top-full-width', containerId: 'toast-top-full-width' });
      }
      function gagal(notif) {
        toastr.error(notif, 'Peringatan!', { positionClass: 'toast-top-full-width', containerId: 'toast-top-full-width' });
      }
    </script>



</body>

</html>
