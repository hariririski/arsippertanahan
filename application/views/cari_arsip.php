<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $this->load->view('share/icon', '', TRUE);?>
    <title>Pencarian Arsip</title>
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

                    <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">Home</a>
                        <a href="#!" class="breadcrumb">Cari Arsip</a>
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
                              <form class="row" action="javascript:cari_barcode()" method="post">
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
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content" id="show_data">


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


      		function cari_barcode(){
              var barcode=$('#barcode').val();
              var explode =barcode.split("-");
              var loading;
              loading +='<div class="progress">'+
                        '<div class="indeterminate"></div>'+
                      '</div>';
              $('#show_data').html(loading);
              inputField.value ="";
              if(explode[0]=="BT" || explode[0]=="W" || explode[0]=="SU"){
      		    $.ajax({
      		        type  : 'GET',
      		        url   : '<?php echo base_url()?>cariarsip/cari_barcode/'+barcode,
      		        async : true,
      		        dataType : 'json',
      		        success : function(data){
      		            var html = '';
      		            var i;
      		            var nomor=1;
                      var arsip;
                      switch (explode[0]) {
                        case "BT":
                              arsip="Buku Tanah";
                              var status;
                              for(i=0; i<data.length; i++){
                                  if(data[i].status==0){
                                    status="Belum Ditentukan";
                                  }else if(data[i].status==1){
                                    status="Tersedia";
                                  }else if(data[i].status==2){
                                    status="Di Pinjam";
                                  }else if(data[i].status==3){
                                    status="Belum Di Susun";
                                  }else if(data[i].status==4){
                                    status="Belum Hilang";
                                  }
                                html +='<table id="zero_config"  class="responsive-table display" style="width:100%">'+
                                            '<thead>'+
                                                '<tr>'+
                                                    '<th>#</th>'+
                                                    '<th>Arsip</th>'+
                                                    '<th>Nomor</th>'+
                                                    '<th>Penyimpanan</th>'+
                                                    '<th>Status</th>'+
                                                    '<th>Detail</th>'+
                                                '</tr>'+
                                            '</thead>'+
                                            '<tbody >'+
                                            '<tr>'+
                  		                  		'<td>'+nomor+'</td>'+
                  		                  		'<td>'+arsip+'</td>'+
                  		                  		'<td>'+data[i].nama_kec+'/'+data[i].nama_desa+'/'+data[i].nama_jenis_hak+'/'+data[i].no_hak+'</td>'+
                                            '<td>'+data[i].nama_lemari+'/'+data[i].nama_baris+'/'+data[i].nama_bundel+'</td>'+
                                            '<td>'+status+'</td>'+
                		                        '<td style="text-align:left;">'+
                                                    '<a href="<?php echo base_url();?>/buku_tanah/detail_buku_tanah/'+data[i].id_buku_tanah+'" class="waves-effect waves-light btn green btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Detail"><i class="material-icons dp48">remove_red_eye</i></a>'+
                                                '</td>'+
                		                        '</tr>'
                                            '</tbody>'
                                        '</table>';

                                  nomor++;
              		            }
              		            $('#show_data').html(html);

                              break;

                        case "SU":
                              arsip="Surat Ukur";
                              var status;
                              for(i=0; i<data.length; i++){
                                if(data[i].status==0){
                                  status="Belum Ditentukan";
                                }else if(data[i].status==1){
                                  status="Tersedia";
                                }else if(data[i].status==2){
                                  status="Di Pinjam";
                                }else if(data[i].status==3){
                                  status="Belum Di Susun";
                                }else if(data[i].status==4){
                                  status="Belum Hilang";
                                }
                                html +='<table id="zero_config"  class="responsive-table display" style="width:100%">'+
                                            '<thead>'+
                                                '<tr>'+
                                                    '<th>#</th>'+
                                                    '<th>Arsip</th>'+
                                                    '<th>Nomor SU</th>'+
                                                    '<th>Nomor Hak</th>'+
                                                    '<th>Penyimpanan</th>'+
                                                    '<th>Status</th>'+
                                                    '<th>Detail</th>'+
                                                '</tr>'+
                                            '</thead>'+
                                            '<tbody >'+
                                            '<tr>'+
                  		                  		'<td>'+nomor+'</td>'+
                  		                  		'<td>'+arsip+'</td>'+
                  		                  		'<td>'+data[i].nomor+'/'+data[i].tahun+'</td>'+
                  		                  		'<td>'+data[i].nama_kec+'/'+data[i].nama_desa+'/'+data[i].nama_jenis_hak+'/'+data[i].no_hak+'</td>'+
                  		                  		'<td>'+data[i].nama_lemari+'/'+data[i].nama_baris+'/'+data[i].nama_bundel+'</td>'+
                  		                  		'<td>'+status+'</td>'+
                		                        '<td style="text-align:left;">'+
                                                    '<a href="<?php echo base_url();?>/buku_tanah/detail_buku_tanah/'+data[i].id_buku_tanah+'" class="waves-effect waves-light btn green btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Detail"><i class="material-icons dp48">remove_red_eye</i></a>'+
                                                '</td>'+
                		                        '</tr>'
                                            '</tbody>'
                                        '</table>';

                                  nomor++;
              		            }
              		            $('#show_data').html(html);
                              break;

                        case "W":
                        arsip="Warkah";
                        for(i=0; i<data.length; i++){
                          if(data[i].status==0){
                            status="Belum Ditentukan";
                          }else if(data[i].status==1){
                            status="Tersedia";
                          }else if(data[i].status==2){
                            status="Di Pinjam";
                          }else if(data[i].status==3){
                            status="Belum Di Susun";
                          }else if(data[i].status==4){
                            status="Belum Hilang";
                          }
                          html +='<table id="zero_config"  class="responsive-table display" style="width:100%">'+
                                      '<thead>'+
                                          '<tr>'+
                                              '<th>#</th>'+
                                              '<th>Arsip</th>'+
                                              '<th>Nomor/Tahun</th>'+
                                              '<th>Nomor Hak</th>'+
                                              '<th>Penyimpanan</th>'+
                                              '<th>Status</th>'+
                                              '<th>Detail</th>'+
                                          '</tr>'+
                                      '</thead>'+
                                      '<tbody >'+
                                      '<tr>'+
                                      '<td>'+nomor+'</td>'+
                                      '<td>'+arsip+'</td>'+
                                      '<td>'+data[i].nomor+'/'+data[i].tahun+'</td>'+
                                      '<td>'+data[i].nama_kec+'/'+data[i].nama_desa+'/'+data[i].nama_jenis_hak+'/'+data[i].no_hak+'</td>'+
                                      '<td>'+data[i].nama_lemari+'/'+data[i].nama_baris+'/'+data[i].nama_bundel+'</td>'+
                                      '<td>'+status+'</td>'+
                                      '<td style="text-align:left;">'+
                                              '<a href="<?php echo base_url();?>/buku_tanah/detail_buku_tanah/'+data[i].id_buku_tanah+'" class="waves-effect waves-light btn green btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Detail"><i class="material-icons dp48">remove_red_eye</i></a>'+
                                          '</td>'+
                                      '</tr>'
                                      '</tbody>'
                                  '</table>';

                            nomor++;
                        }
                        $('#show_data').html(html);
                        default:

                      }


      		        }

      		    });
            }else{
                gagal('Format Tidak Sesuai');
            }
      		}
      </script>


      <script type="text/javascript">
          function cari_buku_tanah(){
            var desa_buku_tanah=$('#desa_buku_tanah').val();
            var jenis_hak=$('#jenis_hak').val();
            var nomor_hak=$('#nomor_hak').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('pinjam/cari_buku_tanah')?>/<?php echo $this->uri->segment('3');?>/<?php echo $this->session->userdata("nama_lengkap"); ?>/"+desa_buku_tanah+"/"+jenis_hak+"/"+nomor_hak,
                dataType : "JSON",
                  success: function(data){
                    if(data==null){
                      //kosong
                    }else if (data==1) {
                      tampil_data_pinjam();
                      berhasil("Arsip Berhasil Di Tambahkan");
                    }else if (data==2) {
                      peringatan('Buku Tanah Belum Valid');
                    }else if (data==3){
                      peringatan('Buku Tanah Sedang / Proses Peminjaman ');
                    }else if (data==4) {
                      gagal('Buku Tanah Lebih Dari 1, Mohon Menguhungi admin');
                    }else if(data==5){
                      gagal('Buku Tanah Tidak Ditemukan');
                    }else{
                      peringatan("Arsip Telah Dikembalikan Namun Belum Di Susun, Harap Menyusun Kembali Sebelum dilakukan Proses Peminjaman");
                    }
                    const inputField = document.getElementById("nomor_hak");
                    inputField.value ="";
                }

            });
            return false;
          }

          function cari_surat_ukur(){
            var desa_buku_tanah=$('#desa_surat_ukur').val();
            var jenis_hak=$('#nomor_surat_ukur').val();
            var nomor_hak=$('#tahun_surat_ukur').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('pinjam/cari_surat_ukur')?>/<?php echo $this->uri->segment('3');?>/<?php echo $this->session->userdata("nama_lengkap"); ?>/"+desa_surat_ukur+"/"+nomor_surat_ukur+"/"+tahun_surat_ukur,
                dataType : "JSON",
                  success: function(data){
                    if(data==null){
                      //kosong
                    }else if (data==1) {
                      tampil_data_pinjam();
                      berhasil("Arsip Berhasil Di Tambahkan");
                    }else if (data==2) {
                      peringatan('Surat Ukur Belum Valid');
                    }else if (data==3){
                      peringatan('Surat Ukur Sedang / Proses Peminjaman ');
                    }else if (data==4) {
                      gagal('Surat Ukur Lebih Dari 1, Mohon Menguhungi admin');
                    }else if(data==5){
                      gagal('Surat Ukur Tidak Ditemukan');
                    }else{
                      peringatan("Arsip Telah Dikembalikan Namun Belum Di Susun, Harap Menyusun Kembali Sebelum dilakukan Proses Peminjaman");
                    }
                    const momor = document.getElementById("nomor_surat_ukur");
                    nomor.value ="";
                    const tahun = document.getElementById("tahun_surat_ukur");
                    tahun.value ="";
                }

            });
            return false;
          }

          function cari_warkah(){
            var nomor_warkah=$('#nomor_warkah').val();
            var tahun_warkah=$('#tahun_warkah').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('pinjam/cari_warkah')?>/<?php echo $this->uri->segment('3');?>/<?php echo $this->session->userdata("nama_lengkap"); ?>/"+nomor_warkah+"/"+tahun_warkah,
                dataType : "JSON",
                  success: function(data){
                    if(data==null){
                      //kosong
                    }else if (data==1) {
                      tampil_data_pinjam();
                      berhasil("Arsip Berhasil Di Tambahkan");
                    }else if (data==2) {
                      peringatan('Warkah Belum Valid');
                    }else if (data==3){
                      peringatan('Warkah Sedang / Proses Peminjaman ');
                    }else if (data==4) {
                      gagal('Warkah Lebih Dari 1, Mohon Menguhungi admin');
                    }else if(data==5){
                      gagal('Warkah Tidak Ditemukan');
                    }else{
                      peringatan("Arsip Telah Dikembalikan Namun Belum Di Susun, Harap Menyusun Kembali Sebelum dilakukan Proses Peminjaman");
                    }
                    const nomor = document.getElementById("nomor_warkah");
                    nomor.value ="";
                    const tahun = document.getElementById("tahun_warkah");
                    tahun.value ="";
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
