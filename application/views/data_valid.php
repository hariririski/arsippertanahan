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
                                <li class="tab"><a class="" href="#test17">Buku Tanah</a></li>
                                <li class="tab"><a href="#test18">Surat Ukur</a></li>
                                <li class="tab"><a href="#test19">Warkah</a></li>
                            <li class="indicator" style="left: 0px; right: 538px;"></li></ul>
                            <div id="test16" class="active" style="display: block;">
                              <form class="row" action="javascript:cari_barcode()">
                                <div class="input-field col s10">
                                    <input name="barcode" id="barcode" required type="text">
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
            <h5 class="card-title">Pengembalian</h5>
            <div class="row">
              <table  class="striped">
                <tr style="padding: 0px 0px;">
                  <td style="padding: 0px 0px;">Desa/Jenis Hak/Nomor Hak/SU/WARKAH/</td>
                  <td style="padding: 0px 0px;">
                    <P id="id"></P>
                  </td>
                </tr>
                <tr style="padding: 0px 0px;">
                  <td style="padding: 0px 0px;">Tanggal Pinjam</td>
                  <td style="padding: 0px 0px;"><P id="tgl_pinjam"></P></td>
                </tr>
                <tr style="padding: 0px 0px;">
                  <td style="padding: 0px 0px;">Tanggal Kembali</td>
                  <td style="padding: 0px 0px;"><P id="tgl_kembali"></P></td>
                </tr>
                <tr style="padding: 0px 0px;">
                  <td style="padding: 0px 0px;">Tanggak Keterlambatan</td>
                  <td style="padding: 0px 0px;"><P id="selisih"></P></td>
                </tr>
                <tr style="padding: 0px 0px;">
                  <td style="padding: 0px 0px;">Peminjam</td>
                  <td style="padding: 0px 0px;"><P id="nama_lengkap"></P></td>
                </tr>
              </table>
              <input type="hidden" name="id_pinjam" id="textkode" value="">
              <div class="alert alert-warning"><p>Apakah Anda yakin mau menyelesaikan peminjaman?</p></div>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat blue white-text" id="btn_simpan"><i class="fas fa-share"></i>Kembalikan</a>
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat grey darken-4 white-text " id="btn_batal">Cancel</a>

            </div>
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
        function setFocus(){
          document.getElementById("barcode").focus();
        }

        function data_modal(data){
          if(data!=null){
            pecah=data.split(";",10);
            simpan();
            if(pecah[8]=="BT"){
              pecah[4]=pecah[4]+";"+pecah[9];
              $('[name="id_pinjam"]').val(pecah[4]);
              pecah[0]=pecah[1]+" / "+pecah[7]+" / "+pecah[0];
              $('#id').html(pecah[0]);
              $('#tgl_pinjam').html(pecah[2]);
              $('#tgl_kembali').html(pecah[3]);
              $('#nama_lengkap').html(pecah[5]);
              $('#selisih').html(pecah[6]);
            }else if(pecah[8]=="SU"){
              pecah[4]=pecah[4]+";"+pecah[9];
              $('[name="id_pinjam"]').val(pecah[4]);
              pecah[0]=pecah[1]+" / "+pecah[0]+" / "+pecah[7];
              $('#id').html(pecah[0]);
              $('#desa').html(pecah[1]);
              $('#tgl_pinjam').html(pecah[2]);
              $('#tgl_kembali').html(pecah[3]);
              $('#nama_lengkap').html(pecah[5]);
              $('#selisih').html(pecah[6]);
            }else if(pecah[8]=="W"){
              pecah[4]=pecah[4]+";"+pecah[9];
              $('[name="id_pinjam"]').val(pecah[4]);
              pecah[0]=pecah[0]+" / "+pecah[7];
              $('#id').html(pecah[0]);
              $('#desa').html(pecah[1]);
              $('#tgl_pinjam').html(pecah[2]);
              $('#tgl_kembali').html(pecah[3]);
              $('#nama_lengkap').html(pecah[5]);
              $('#selisih').html(pecah[6]);
            }
          }else{
            peringatan("Arsip Tidak Sedang Di Pinjam");
          }
        }


        function cari_barcode(){
          var barcode=$('#barcode').val();
          $.ajax({
              type : "POST",
              url  : "<?php echo base_url('pinjam/cari_barcode_pengembalian')?>/<?php echo $this->session->userdata("nama_lengkap"); ?>/"+barcode,
              dataType : "JSON",
                success: function(data){
                  data_modal(data);
              }
          });
          return false;
        }

        function tabel(barcode){
          $.ajax({
              type : "POST",
              url  : "<?php echo base_url('pinjam/cari_barcode_pengembalian')?>/<?php echo $this->session->userdata("nama_lengkap"); ?>/"+barcode,
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

        $('#btn_simpan').on('click',function(){
            var kode=$('#textkode').val();
            pecah=kode.split(";",2);
            $('#modal2').modal('close');
            setFocus();
            inputField.value ="";
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url()?>pinjam/kembalikan/"+pecah[1]+"/<?php echo $this->session->userdata("nama_lengkap"); ?>/"+pecah[0],
            dataType : "JSON",
                    data : {kode: kode},
                    success: function(notif){
                        $('#modal1').modal('close');
                        if (notif==1) {
                          berhasil("Peminjaman Berhasil Di kembalikan!.");
                          setTimeout("location.href = '<?php echo base_url()?>kembali';",1500);
                        }else if(notif==2){
                          berhasil("Peminjaman Berhasil Di kembalikan!.");
                          setTimeout("location.href = '<?php echo base_url()?>kembali';",1500);
                        }else{
                          //tampil_data_pinjam();
                          gagal("Peminjaman Gagal Di kembalikan");
                        }

                    }
                });
                return false;

        });
        $('#btn_batal').on('click',function(){
            $('#modal2').modal('close');
            setFocus();
            inputField.value ="";
        });
    </script>

    <script type="text/javascript">
        function cari_buku_tanah(){
          var desa_buku_tanah=$('#desa_buku_tanah').val();
          var jenis_hak=$('#jenis_hak').val();
          var nomor_hak=$('#nomor_hak').val();
          $.ajax({
              type : "POST",
              url  : "<?php echo base_url('pinjam/cari_buku_tanah_pengembalian')?>/"+desa_buku_tanah+"/"+jenis_hak+"/"+nomor_hak,
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
              url  : "<?php echo base_url('pinjam/cari_surat_ukur_pengembalian')?>/"+desa_surat_ukur+"/"+nomor+"/"+tahun,
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
              url  : "<?php echo base_url('pinjam/cari_warkah_pengembalian')?>/"+nomor_warkah+"/"+tahun_warkah,
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
