<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $this->load->view('share/icon', '', TRUE);?>
    <title>Data Bundel</title>
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
                    <h5 class="font-medium m-b-0">Data Bundel</h5>
                    <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">Home</a>
                        <a href="#!" class="breadcrumb">Bundel</a>
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
                                foreach($data_baris as $baris){
                              ?>
                                <h5 class="card-title activator">Tambah Data Bundel<i class="material-icons right tooltipped" data-position="left" data-delay="50" ></i></h5>
                                <form class="formValidate" id="formValidate" action="<?php echo base_url(); ?>Lemari/tambah_bundel?baris=<?php echo $baris->id_baris;?>" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">chrome_reader_mode</i>

                                            <input   type="text" disabled required name="id_Kota" autofocus value="<?php echo $baris->nama_lemari; ?> - <?php echo $baris->nama_baris; ?>">

                                            <label for="uname">Kode Bundel - Baris *</label>
                                            <div class="errorTxt1"></div>
                                        </div>
                                    </div>
                              <?php  } ?>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">chrome_reader_mode</i>
                                            <label for="cemail">Nama Bundel *</label>
                                            <input  type="text"  required name="nama_bundel">
                                            <div class="errorTxt2"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                          <div class="input-field col s12">
                                            <i class="material-icons prefix">chrome_reader_mode</i>
                                              <select required name="sengketa">
                                                  <option value="" disabled selected>Pilih Sengketa/Tidak</option>
                                                  <option value="1">IYA</option>
                                                  <option value="0">TIDAK</option>
                                              </select>
                                          </div>
                                    </div>
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
                                            <label for="cemail">Keterangan *</label>
                                            <input  type="text"  required name="keterangan">
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
                                            <th>Bundel</th>
                                            <th>QR Code</th>
                                            <th>Desa</th>
                                            <th>Sengketa</th>
                                            <th width="15%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                              $i=0;
                                              foreach($data_bundel as $data_bundel){
                                              $i++;
                                            ?>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $data_bundel->nama_bundel; ?></td>
                                            <td>
                                              <center>
                                              <a href="<?php echo site_url('Code/QRcode/'.$data_bundel->qrbundel); ?>">
                                                  <img src="<?php echo base_url('Code/QRcode/'.$data_bundel->qrbundel);?>" width="30%"><br>
                                              </a>
                                              <?php echo $data_bundel->nama_bundel; ?>
                                              </center>
                                            </td>
                                            <td><?php echo $data_bundel->nama_desa; ?></td>
                                            <td>
                                              <?php
                                              switch ($data_bundel->sengketa){
                                                case 1:
                                                      echo "Sengketa";
                                                      break;
                                                case 0:
                                                      echo "Tidak Sengketa";
                                                      break;
                                              }
                                              ?>
                                            </td>
                                            <td>
                                              <a class="waves-effect waves-light btn  orange btn tooltipped"data-position="bottom" data-delay="50" data-tooltip="Edit" onclick="edit('<?php echo  $data_bundel->id_bundel; ?>')"><i class="material-icons dp48">edit</i></a>
                                              <a href="<?php echo base_url(); ?>lemari/hapus_bundel/<?php echo $data_bundel->id_baris; ?>/<?php echo $data_bundel->id_bundel; ?>" type="submit" class="waves-effect waves-light btn  red btn tooltipped" onclick="return confirm('Apakah Anda Ingin Menghapus Bundel <?php echo $data_bundel->nama_bundel; ?>?')"data-position="bottom" data-delay="50" data-tooltip="Hapus"/><i class="material-icons dp48">delete_forever</i> </a>
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
                            <input  type="text"  required name="nama_bundel_edit" id="nama_bundel_edit">
                            <input  type="hidden"  required name="id_bundel" id="id_bundel">
                            <div class="errorTxt2"></div>
                        </div>
                    </div>
                    <div class="row">
                          <div class="input-field col s12">
                            <i class="material-icons prefix">chrome_reader_mode</i>
                              <select required name="sengketa">
                                  <option value="" disabled selected>Pilih Sengketa/Tidak</option>
                                  <option value="1">IYA</option>
                                  <option value="0">TIDAK</option>
                              </select>
                          </div>
                    </div>
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
                            <input  type="text"  required name="keterangan_edit" id="keterangan_edit">
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
    function edit(id_bundel){
      $.ajax({
          type : "POST",
          url  : "<?php echo base_url('lemari/edit_bundel')?>/"+id_bundel,
          dataType : "JSON",
            success: function(data){
              data_modal(data);
          }
      });
      return false;
    }

    function data_modal(data){
          $('[name="nama_bundel_edit"]').val(data[0]["nama_bundel"]);
          $('[name="id_bundel"]').val(data[0]["id_bundel"]);
          $('#modal').modal('open');
    }


    $('#simpan').on('click',function(){
        var nama_baris_edit=$('#nama_baris_edit').val();
        var id_baris=$('#id_baris').val();
        $.ajax({
        type : "POST",
        url  : "<?php echo base_url()?>lemari/simpan_edit_baris/"+id_baris+"/"+nama_baris_edit,
        dataType : "JSON",
                success: function(notif){
                    $('#modal').modal('close');
                    if (notif==1) {
                      berhasil("Data Berhasi Diperbaharui!.");
                      setTimeout("location.href = '<?php echo base_url()?>databaris?lemari=<?php echo $this->input->get('lemari');?>';",1500);
                    }else{
                      gagal("Gagal Memperbaharui Data!.");
                      setTimeout("location.href = '<?php echo base_url()?>databaris?lemari=<?php echo $this->input->get('lemari');?>';",1500);
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
