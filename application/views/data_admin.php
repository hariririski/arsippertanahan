<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $this->load->view('share/icon', '', TRUE);?>
    <title>Jenis Administrator</title>
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
                    <h5 class="font-medium m-b-0">Data Administrator</h5>
                    <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">Home</a>
                        <a href="#!" class="breadcrumb">Administrator</a>
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
                                <h5 class="card-title activator">Tambah Data Administrator<i class="material-icons right tooltipped" data-position="left" data-delay="50" ></i></h5>
                                <form class="formValidate" id="formValidate" action="<?php echo base_url(); ?>Admin/tambah" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">chrome_reader_mode</i>
                                            <input name="nama_lengkap" type="text" required>
                                            <label for="uname">Nama Lengkap *</label>
                                            <div class="errorTxt1"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">chrome_reader_mode</i>
                                            <label for="cemail">Username *</label>
                                            <input  type="text" name="username" required>
                                            <div class="errorTxt2"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">chrome_reader_mode</i>
                                            <label for="cemail">Password *</label>
                                            <input  type="text" name="password" required>
                                            <div class="errorTxt2"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                          <div class="input-field col s12">
                                            <i class="material-icons prefix">chrome_reader_mode</i>
                                              <select required name="level">
                                                  <option value="" disabled selected>Pilih Level Administrator</option>
                                                  <option value="1">Admnistrator</option>
                                                  <option value="2">Pustakawan</option>
                                                  <option value="3">Umum</option>
                                                  <option value="4">Link Arsip</option>
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
                                            <th>Icon</th>
                                            <th>Nama Lengkap</th>
                                            <th>Username</th>
                                            <th>Level</th>
                                            <th>Status</th>
                                            <th width="20%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                              $i=0;
                                              foreach($data_admin as $data_admin){
                                              $i++;
                                            ?>
                                            <td><?php echo $i; ?></td>
                                            <td><image src="<?php echo base_url(); ?><?php echo $data_admin->image; ?>" width="70px"></td>
                                            <td><?php echo $data_admin->nama_lengkap; ?></td>
                                            <td><?php echo $data_admin->username; ?></td>
                                            <td>
                                              <?php
                                              switch ($data_admin->level){
                                                case 1:
                                                      echo "Administrator";
                                                      break;
                                                case 2:
                                                      echo "Pustakawan";
                                                      break;
                                                case 3:
                                                      echo "Umum";
                                                      break;
                                                case 4:
                                                      echo "Umum";
                                                      break;
                                              }
                                              ?>
                                            </td>
                                            <td>
                                              <?php if($data_admin->status==1){
                                                echo '<span class="label label-success">Aktif</span>';
                                              }
                                                else{
                                                echo '<span class="label label-danger">Tidak Aktif</span>';
                                                      }
                                              ?>
                                            </td>
                                            <td>
                                              <button class="waves-effect waves-light btn orange btn tooltipped" onclick="edit('<?php echo $data_admin->id_admin; ?>')" data-position="bottom" data-delay="50" data-tooltip="Edit"><i class="material-icons dp48" >edit</i></button>
                                              <?php
                                              if($data_admin->status==1){
                                              ?>
                                                  <a  href="<?php echo base_url(); ?>admin/aktif_admin/<?php echo $data_admin->id_admin; ?>/0" class="waves-effect waves-light btn purple btn tooltipped" onclick="return confirm('Apakah Anda Yakin Non-Aktifkan  User<?php echo $data_admin->nama_lengkap; ?>?')"data-position="bottom" data-delay="50" data-tooltip="Non Aktifkan User"/><i class="material-icons dp48">do_not_disturb_alt</i></a>
                                              <?php
                                                }else{
                                              ?>
                                                  <a  href="<?php echo base_url(); ?>admin/aktif_admin/<?php echo $data_admin->id_admin; ?>/1" class="waves-effect waves-light btn purple btn tooltipped" onclick="return confirm('Apakah Anda Yakin Aktifkan User<?php echo $data_admin->nama_lengkap; ?>?')"data-position="bottom" data-delay="50" data-tooltip="Aktifkan User"/><i class="material-icons dp48">done</i></a>
                                              <?php
                                                  }
                                              ?>
                                              <a href="<?php echo base_url(); ?>admin/hapus_admin/<?php echo $data_admin->id_admin; ?>" type="submit" class="waves-effect waves-light btn  red btn tooltipped" onclick="return confirm('Apakah Anda Yakin Menghapus User <?php echo $data_admin->nama_lengkap; ?>?')" data-position="bottom" data-delay="50" data-tooltip="Hapus Data" /><i class="material-icons dp48">delete_forever</i> </a>
                                              <a href="<?php echo base_url(); ?>admin/hapus_admin/<?php echo $data_admin->id_admin; ?>" type="submit" class="waves-effect waves-light btn  blue btn tooltipped" onclick="return confirm('Apakah Anda Yakin Me Reset Password Menjadi atrbpn2021 User <?php echo $data_admin->nama_lengkap; ?>?')" data-position="bottom" data-delay="50" data-tooltip="Reset Password" /><i class="material-icons dp48">cached</i></a>
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
                          <div class="row">
                              <div class="input-field col s12">
                                  <i class="material-icons prefix">chrome_reader_mode</i>
                                  <input name="nama_lengkap_edit" id="nama" type="text" required>
                                  <input name="id_admin" id="id_admin" type="hidden" required>
                                  <div class="errorTxt1"></div>
                              </div>
                          </div>

                          <div class="row" id="level_edit">

                          </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat blue white-text" id="simpan"><i class="fas fa-share"></i>Simpan</a>
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat grey darken-4 white-text " id="btn_batal">Cancel</a>

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
    <script type="text/javascript">

    $(document).ready(function(){
    $('.tooltipped').tooltip();
    });

    function edit(id_admin){
      $.ajax({
          type : "POST",
          url  : "<?php echo base_url('admin/edit')?>/"+id_admin,
          dataType : "JSON",
            success: function(data){
              data_modal(data);
          }
      });
      return false;
    }

    function data_modal(data){
          $('[name="nama_lengkap_edit"]').val(data[0]["nama_lengkap"]);
          $('[name="id_admin"]').val(data[0]["id_admin"]);
          var level="";
          var nilai=parseInt(data[0]["level"]);
          switch (nilai){
            case 1: level +='<div class="input-field col s12">'+
                        '<select required name="level2" id="level2" class="browser-default" >'+
                           '<option selected value="1">Admnistrator</option>'+
                           '<option value="2">Pustakawan</option>'+
                          '<option value="3">Umum</option>'+
                        '<option value="4">Link Arsip</option>'+
                        '</select>'+
                      '</div>';
                      $('#level_edit').html(level);
                      break;
              case 2: level +='<div class="input-field col s12">'+
                          '<select required name="level2" id="level2" class="browser-default" >'+
                             '<option  value="1">Admnistrator</option>'+
                             '<option selected value="2">Pustakawan</option>'+
                            '<option value="3">Umum</option>'+
                          '<option value="4">Link Arsip</option>'+
                          '</select>'+
                        '</div>';
                        $('#level_edit').html(level);
                      break;
              case 3: level +='<div class="input-field col s12">'+
                          '<select required name="level2" id="level2" class="browser-default" >'+
                             '<option  value="1">Admnistrator</option>'+
                             '<option  value="2">Pustakawan</option>'+
                            '<option selected value="3">Umum</option>'+
                          '<option value="4">Link Arsip</option>'+
                          '</select>'+
                        '</div>';
                        $('#level_edit').html(level);
                      break;
              case 4: level +='<div class="input-field col s12">'+
                          '<select required name="level2" id="level2" class="browser-default" >'+
                             '<option  value="1">Admnistrator</option>'+
                             '<option value="2">Pustakawan</option>'+
                            '<option value="3">Umum</option>'+
                          '<option selected value="4">Link Arsip</option>'+
                          '</select>'+
                        '</div>';
                        $('#level_edit').html(level);
                      break;
          }

            $('#modal').modal('open');
    }


    $('#simpan').on('click',function(){
        var nama=$('#nama').val();
        var level=$('#level2').val();
        var id_admin=$('#id_admin').val();
        $.ajax({
        type : "POST",
        url  : "<?php echo base_url()?>admin/simpan_edit/"+id_admin+"/"+nama+"/"+level,
        dataType : "JSON",
                success: function(notif){
                    $('#modal').modal('close');
                    if (notif==1) {
                      berhasil("Data Berhasi Diperbaharui!.");
                      setTimeout("location.href = '<?php echo base_url()?>dataadmin';",1500);
                    }else{
                      gagal("Gagal Memperbaharui Data!.");
                      setTimeout("location.href = '<?php echo base_url()?>dataadmin';",1500);
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
