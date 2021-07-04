<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $this->load->view('share/icon', '', TRUE);?>
    <title>Data Kecamatan</title>
    <link href="dist/css/style.css" rel="stylesheet">
    <!-- This page CSS -->
    <link href="assets/extra-libs/prism/prism.css" rel="stylesheet">
    <link href="dist/css/pages/data-table.css" rel="stylesheet">
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
                    <h5 class="font-medium m-b-0">Data Kecamatan</h5>
                    <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">Home</a>
                        <a href="#!" class="breadcrumb">Kecamatan</a>
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
                                foreach($data_kota as $kota){
                              ?>
                                <h5 class="card-title activator">Tambah Data Kecamatan<i class="material-icons right tooltipped" data-position="left" data-delay="50" ></i></h5>
                                <form class="formValidate" id="formValidate" action="<?php echo base_url(); ?>provinsi/tambah_kec?kota=<?php echo $kota->kode_kota;?>" method="post" enctype="multipart/form-data">
                                  <div class="row">
                                      <div class="input-field col s4">
                                          <i class="material-icons prefix">chrome_reader_mode</i>
                                          <label for="cemail">Nama Kota</label>
                                          <input  type="text"  disabled value="<?php echo $kota->nama_kota;?>">
                                          <div class="errorTxt2"></div>
                                      </div>

                              <?php  } ?>

                                        <div class="input-field col s4">
                                            <i class="material-icons prefix">chrome_reader_mode</i>
                                            <label for="cemail">Kode kecamatan *</label>
                                            <input  type="text"  required name="id_kec" autofocus>
                                            <div class="errorTxt2"></div>
                                        </div>
                                    
                                        <div class="input-field col s4">
                                            <i class="material-icons prefix">chrome_reader_mode</i>
                                            <label for="cemail">Nama Kecamatan*</label>
                                            <input  type="text"  required name="nama_kec">
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
                                            <th>Kecamatan</th>
                                            <th>QR Code</th>
                                            <th>Status</th>
                                            <th width="25%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                              $i=0;
                                              foreach($data_kecamatan as $data_kecamatan){
                                              $i++;
                                            ?>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $data_kecamatan->id_kec; ?></td>
                                            <td><?php echo $data_kecamatan->nama_kec; ?></td>
                                            <td>
                                              <center>
                                              <a href="<?php echo site_url('Code/QRcode/'.$data_kecamatan->qrcode); ?>">
                                                  <img src="<?php echo base_url('Code/QRcode/'.$data_kecamatan->qrcode);?>" width="30%"><br>
                                              </a>
                                              <?php echo $data_kecamatan->nama_kec; ?>
                                              </center>
                                            </td>
                                            <td>
                                              <?php if($data_kecamatan->aktif==1){
                                                        echo '<span class="label label-success">Aktif</span>';
                                                      }
                                                        else{
                                                        echo '<span class="label label-danger">Tidak Aktif</span>';
                                                      }
                                              ?>
                                            </td>
                                            <td>
                                              <a href="<?php echo base_url(); ?>datadesa?kec=<?php echo $data_kecamatan->kode_kec; ?>" class="waves-effect waves-light btn  green btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Lihat Desa"><i class="material-icons dp48">remove_red_eye</i></a>
                                              <a class="waves-effect waves-light btn  orange btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Edit" onclick="edit('<?php echo $data_kecamatan->kode_kec;?>')"><i class="material-icons dp48">edit</i></a>
                                              <?php
                                              if($data_kecamatan->aktif==1){
                                              ?>
                                                  <a  href="<?php echo base_url(); ?>provinsi/aktif_kec/<?php echo $data_kecamatan->kode_kota; ?>/<?php echo $data_kecamatan->kode_kec; ?>/0" class="waves-effect waves-light btn purple btn tooltipped" onclick="return confirm('Apakah Anda Yakin  Non-Aktifkan <?php echo $data_kecamatan->nama_kec; ?>?')"data-position="bottom" data-delay="50" data-tooltip="Non Aktifkan"/><i class="material-icons dp48">do_not_disturb_alt</i></a>
                                              <?php
                                                }else{
                                              ?>
                                                  <a  href="<?php echo base_url(); ?>provinsi/aktif_kec/<?php echo $data_kecamatan->kode_kota; ?>/<?php echo $data_kecamatan->kode_kec; ?>/1" class="waves-effect waves-light btn purple btn tooltipped" onclick="return confirm('Apakah Anda Yakin  Aktifkan <?php echo $data_kecamatan->nama_kec; ?>?')"data-position="bottom" data-delay="50" data-tooltip="Aktifkan"/><i class="material-icons dp48">done</i></a>
                                              <?php
                                                  }
                                              ?>
                                              <a  href="<?php echo base_url(); ?>provinsi/aktif_prov/<?php echo $data_kecamatan->kode_kota;?>/" class="waves-effect waves-light btn indigo btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Cetak QR Code"><i class="material-icons dp48">local_printshop</i></a>
                                              <a href="<?php echo base_url(); ?>provinsi/hapus_kec/<?php echo $data_kecamatan->kode_kota;?>/<?php echo $data_kecamatan->kode_kec; ?>" type="submit" class="waves-effect waves-light btn  red btn tooltipped" onclick="return confirm('Apakah Anda Yakin Menghapus Kecamatan <?php echo $data_kecamatan->nama_kec; ?>?')"data-position="bottom" data-delay="50" data-tooltip="Hapus"/><i class="material-icons dp48">delete_forever</i>  </a>
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
            <div id="modal" class="modal">
                <div class="modal-content">
                    <h5 class="card-title">Perubahan Data</h5>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">chrome_reader_mode</i>
                            <input  type="text"  required name="id_kec_edit" autofocus id="id_kec_edit">
                            <div class="errorTxt2"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">chrome_reader_mode</i>
                            <input  type="text"  required name="nama_kec_edit" id="nama_kec_edit">
                            <input  type="hidden"  required name="kode_kec" id="kode_kec">
                            <div class="errorTxt2"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a  class="modal-action modal-close waves-effect waves-green btn-flat blue white-text" id="simpan"><i class="fas fa-share"></i>Simpan</a>
                        <a  class="modal-action modal-close waves-effect waves-green btn-flat grey darken-4 white-text " id="btn_batal">Cancel</a>

                    </div>
                </div>
            </div>
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
    function edit(kode_kec){
      $.ajax({
          type : "POST",
          url  : "<?php echo base_url('provinsi/edit_kec')?>/"+kode_kec,
          dataType : "JSON",
            success: function(data){
              data_modal(data);
          }
      });
      return false;
    }

    function data_modal(data){
          $('[name="nama_kec_edit"]').val(data[0]["nama_kec"]);
          $('[name="id_kec_edit"]').val(data[0]["id_kec"]);
          $('[name="kode_kec"]').val(data[0]["kode_kec"]);
          $('#modal').modal('open');
    }


    $('#simpan').on('click',function(){
        var nama_kec_edit=$('#nama_kec_edit').val();
        var id_kec_edit=$('#id_kec_edit').val();
        var kode_kec=$('#kode_kec').val();
        $.ajax({
        type : "POST",
        url  : "<?php echo base_url()?>provinsi/simpan_edit_kec/"+kode_kec+"/"+id_kec_edit+"/"+nama_kec_edit,
        dataType : "JSON",
                success: function(notif){
                    $('#modal').modal('close');
                    if (notif==1) {
                      berhasil("Data Berhasi Diperbaharui!.");
                      setTimeout("location.href = '<?php echo base_url()?>datakecamatan?kota=<?php echo $this->input->get('kota');?>';",1500);
                    }else{
                      gagal("Gagal Memperbaharui Data!.");
                      setTimeout("location.href = '<?php echo base_url()?>datakecamatan?kota=<?php echo $this->input->get('kota');?>';",1500);
                    }

                }
            });
            return false;
        });
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
