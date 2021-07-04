<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $this->load->view('share/icon', '', TRUE);?>
    <title>Data Pegawai</title>
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
                    <h5 class="font-medium m-b-0">Data Pegawai</h5>
                    <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">Home</a>
                        <a href="#!" class="breadcrumb">Pegawai</a>
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
                                <h5 class="card-title activator">Tambah Pegawai<i class="material-icons right tooltipped" data-position="left" data-delay="50" ></i></h5>
                                <form class="formValidate" id="formValidate" action="<?php echo base_url(); ?>Pegawai/tambah" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">chrome_reader_mode</i>
                                            <input   type="text" required name="nip" autofocus>
                                            <label for="uname">NIP / NIK *</label>
                                            <div class="errorTxt1"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">chrome_reader_mode</i>
                                            <label for="cemail">Nama Lengkap *</label>
                                            <input  type="text"  required name="nama_lengkap" >
                                            <div class="errorTxt2"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">chrome_reader_mode</i>
                                            <label for="cemail">Jabatan *</label>
                                            <input  type="text"  required name="jabatan">
                                            <div class="errorTxt2"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                          <div class="input-field col s12">
                                            <i class="material-icons prefix">chrome_reader_mode</i>
                                              <select required name="jenis">
                                                  <option value="" disabled selected>Pilih Jenis</option>
                                                  <option value="1">ASN</option>
                                                  <option value="2">ASK</option>
                                                  <option value="3">PPNPN</option>
                                              </select>
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
                                            <th>NIP/NIK</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Jenis</th>
                                            <th width="10%">Status</th>
                                            <th width="20%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                              $i=0;
                                              foreach($data_pegawai as $data_pegawai){
                                              $i++;
                                            ?>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $data_pegawai->nip; ?></td>
                                            <td><?php echo $data_pegawai->nama_lengkap; ?></td>
                                            <td><?php echo $data_pegawai->jabatan; ?></td>
                                            <td>
                                              <?php
                                                switch ($data_pegawai->jenis){
                                                  case 1:
                                                        echo "ASN";
                                                        break;
                                                  case 2:
                                                        echo "ASK";
                                                        break;
                                                  case 3:
                                                        echo "PPNPN";
                                                        break;
                                                }
                                              ?>
                                            </td>
                                            <td>
                                              <?php if($data_pegawai->aktif==1){
                                                        echo '<span class="label label-success">Aktif</span>';
                                                      }
                                                        else{
                                                        echo '<span class="label label-danger">Tidak Aktif</span>';
                                                      }
                                              ?>
                                            </td>
                                            <td>
                                              <a class="waves-effect waves-light btn orange btn tooltipped"  data-position="bottom" data-delay="50" data-tooltip="Edit"  onclick="edit('<?php echo $data_pegawai->nip; ?>')"><i class="material-icons dp48">edit</i></a>
                                              <?php
                                              if($data_pegawai->aktif==1){
                                              ?>
                                                  <a  href="<?php echo base_url(); ?>pegawai/aktif_pegawai/<?php echo $data_pegawai->nip; ?>/0" class="waves-effect waves-light btn purple btn tooltipped" onclick="return confirm('Apakah Anda Yakin Non-Aktifkan <?php echo $data_pegawai->nama_lengkap; ?>?')"  data-position="bottom" data-delay="50" data-tooltip="Non Aktifkan"/><i class="material-icons dp48">do_not_disturb_alt</i></a>
                                              <?php
                                                }else{
                                              ?>
                                                  <a  href="<?php echo base_url(); ?>pegawai/aktif_pegawai/<?php echo $data_pegawai->nip; ?>/1" class="waves-effect waves-light btn purple btn tooltipped" onclick="return confirm('Apakah Anda Yakin Aktifkan <?php echo $data_pegawai->nama_lengkap; ?>?')" data-position="bottom" data-delay="50" data-tooltip="Aktifkan"/><i class="material-icons dp48">done</i></a>
                                              <?php
                                                  }
                                              ?>
                                              <a href="<?php echo base_url(); ?>pegawai/hapus_pegawai/<?php echo $data_pegawai->nip; ?>" type="submit" class="waves-effect waves-light btn  red btn tooltipped" onclick="return confirm('Apakah Anda Yakin Menghapus pegawai <?php echo $data_pegawai->nama_lengkap; ?>?')" data-position="bottom" data-delay="50" data-tooltip="Hapus"/><i class="material-icons dp48">delete_forever</i> </a>
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
                            <input  type="text"  required name="nama_lengkap_edit" id="nama_lengkap_edit" >
                            <input  type="hidden"  required name="nip_edit" id="nip_edit" >
                            <div class="errorTxt2"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">chrome_reader_mode</i>
                            <input  type="text"  required name="jabatan_edit" id="jabatan_edit">
                            <div class="errorTxt2"></div>
                        </div>
                    </div>
                    <div class="row">
                          <div class="input-field col s12" id="show_jenis_edit">

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
    function edit(nip){
      $.ajax({
          type : "POST",
          url  : "<?php echo base_url('pegawai/edit_pegawai')?>/"+nip,
          dataType : "JSON",
            success: function(data){
              data_modal(data);
          }
      });
      return false;
    }

    function data_modal(data){
          $('[name="nama_lengkap_edit"]').val(data[0]["nama_lengkap"]);
          $('[name="nip_edit"]').val(data[0]["nip"]);
          $('[name="jabatan_edit"]').val(data[0]["jabatan"]);
          var jenis="";
          var nilai=parseInt(data[0]["jenis"]);
          switch (nilai){
            case 1: jenis +='<div class="input-field col s12">'+
                        '<select required name="jenis_edit" id="jenis_edit" class="browser-default" >'+
                           '<option selected value="1">ASN</option>'+
                           '<option value="2">ASK</option>'+
                          '<option value="3">PPNPN</option>'+
                        '</select>'+
                      '</div>';
                      $('#show_jenis_edit').html(jenis);
                      break;
              case 2: jenis +='<div class="input-field col s12">'+
                          '<select required name="jenis_edit" id="jenis_edit" class="browser-default" >'+
                              '<option  value="1">ASN</option>'+
                              '<option  value="2">ASK</option>'+
                             '<option selected value="3">PPNPN</option>'+
                          '</select>'+
                        '</div>';
                        $('#show_jenis_edit').html(jenis);
                      break;
              case 3: jenis +='<div class="input-field col s12">'+
                          '<select required name="jenis_edit" id="jenis_edit" class="browser-default" >'+
                              '<option value="1">ASN</option>'+
                              '<option selected value="2">PPNPN</option>'+
                             '<option value="3">ASK</option>'+
                          '</select>'+
                        '</div>';
                        $('#show_jenis_edit').html(jenis);
                      break;

          }
          $('#modal').modal('open');
    }


    $('#simpan').on('click',function(){
        var nama_lengkap_edit=$('#nama_lengkap_edit').val();
        var jabatan_edit=$('#jabatan_edit').val();
        var jenis_edit=$('#jenis_edit').val();
        var nip_edit=$('#nip_edit').val();
        $.ajax({
        type : "POST",
        url  : "<?php echo base_url()?>pegawai/simpan_edit_pegawai/"+nip_edit+"/"+nama_lengkap_edit+"/"+jabatan_edit+"/"+jenis_edit,
        dataType : "JSON",
                success: function(notif){
                    $('#modal').modal('close');
                    if (notif==1) {
                      berhasil("Data Berhasi Diperbaharui!.");
                      setTimeout("location.href = '<?php echo base_url()?>datapegawai';",1500);
                    }else{
                      gagal("Gagal Memperbaharui Data!.");
                      setTimeout("location.href = '<?php echo base_url()?>datapegawai';",1500);
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
