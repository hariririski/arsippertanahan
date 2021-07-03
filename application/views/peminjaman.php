<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $this->load->view('share/icon', '', TRUE);?>
    <title>Perminjaman Arsip Pertanahan</title>
    <link href="<?php echo base_url(); ?>dist/css/style.css" rel="stylesheet">
    <!-- This page CSS -->
    <link href="assets/extra-libs/prism/prism.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>dist/css/pages/data-table.css" rel="stylesheet">
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
                    <h5 class="font-medium m-b-0">Pinjam Arsip</h5>
                    <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">Home</a>
                        <a href="#!" class="breadcrumb">Peminjaman Arsip</a>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <div id="loading">
            </div>
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

                    <div class="col l8 s12">
                        <div class="card">
                            <div class="card-content">

                                <div class="table-responsive">
                                    <table  class="table table-bordered striped">
                                        <thead>
                                            <tr>
                                                <th width="5%">NO</th>
                                                <th>Hak/SU/warkah</th>
                                                <th width="10%">Layanan</th>
                                                <th width="20%">Pilih</th>
                                                <th width="5%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="show_data">

                                  			</tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l4 s12">
                        <div class="card">

                            <div class="card-content">

                                <div class="collection">
                                    <a href="#!" class="collection-item active indigo"><i class="ti-layers m-r-10"></i>Data Invoice</a>
                                    <a href="#!" class="collection-item"><?php echo $this->uri->segment('3');?></a>
                                </div>
                                <div class="collection">
                                    <a href="#!" class="collection-item active indigo"><i class="ti-layers m-r-10"></i>Data Pegawai</a>
                                      <?php
                                      foreach($data_pegawai as $pegawai){
                                        ?>
                                        <a href="#!" class="collection-item">
                                          <?php echo $pegawai->nip; ?>
                                        </a>
                                        <a href="#!" class="collection-item">
                                          <?php echo $pegawai->nama_lengkap; ?>
                                        </a>
                                        <a href="#!" class="collection-item">
                                          <?php echo $pegawai->jabatan; ?>
                                        </a>
                                        <a href="#!" class="collection-item">
                                          <?php
                                            if($pegawai->jenis=1){
                                              echo "ASN";
                                            }elseif ($pegawai->jenis=2) {
                                              echo "PPNPN";
                                            }elseif ($pegawai->jenis=3) {
                                              echo "ASK";
                                            }
                                          ?>
                                        </a>

                                      <?php } ?>


                                </div>
                                <div class="collection">
                                    <a onclick="simpan()" class="waves-effect waves-light btn-large btn  green"><i class="material-icons left">assignment_turned_in</i>Simpan</a>
                                    <a onclick="batal()" class="waves-effect waves-light btn-large right btn  red" ><i class="material-icons left">delete_forever</i>Batal</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Share Modal Structure -->
            <!-- <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a> -->
            <div id="modal1" class="modal">
                <div class="modal-content">
                    <h5 class="card-title">Konfirmasi</h5>
                    <div class="row">
                      <input type="hidden" name="kode" id="textkode" value="">
                      <div class="alert alert-warning"><p>Apakah Anda yakin mau memhapus barang ini?</p></div>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat blue white-text" id="btn_hapus"><i class="fas fa-share"></i> Hapus</a>
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat grey darken-4 white-text">Cancel</a>

                    </div>
                </div>
            </div>
            <div id="modal2" class="modal">
                <div class="modal-content">
                    <h5 class="card-title">Konfirmasi</h5>
                    <div class="row">
                      <div class="alert alert-warning"><p>Apakah Anda yakin mau menyelesaikan peminjaman?</p></div>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat blue white-text" id="btn_simpan"><i class="fas fa-share"></i>Lanjutkan </a>
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat grey darken-4 white-text">Cancel</a>

                    </div>
                </div>
            </div>

            <div id="modal3" class="modal">
                <div class="modal-content">
                    <h5 class="card-title">Konfirmasi</h5>
                    <div class="row">
                      <div class="alert alert-warning"><p>Apakah Anda yakin mau Membatalkan peminjaman?</p></div>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat blue white-text" id="btn_batal"><i class="fas fa-share"></i>Lanjutkan</a>
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat grey darken-4 white-text">Cancel</a>

                    </div>
                </div>
            </div>

            <!-- Create Modal Structure -->


            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <?php echo $this->load->view('share/footer', '', TRUE);?>


        </div>
        <!-- ============================================================== -->

        <!-- ============================================================== -->
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
    <!-- <script src="<?php echo base_url(); ?>assets/libs/jquery/dist/jquery.min.js"></script> -->
    <script src="<?php echo base_url(); ?>dist/js/materialize.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!-- ============================================================== -->
    <!-- Apps -->
    <!-- ============================================================== -->

    <script src="<?php echo base_url(); ?>dist/js/app.init.horizontal.js"></script>
    <script src="<?php echo base_url(); ?>dist/js/app-style-switcher.horizontal.js"></script>
    <!-- ============================================================== -->
    <!-- Custom js -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>dist/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->

    <script src="<?php echo base_url(); ?>assets/extra-libs/prism/prism.js"></script>
    <!-- start - This is for export functionality only -->
      <script>
      function simpan() {
        $('#modal2').modal('open');
      }
      function batal() {
        $('#modal3').modal('open');
      }

      $('#btn_simpan').on('click',function(){
          $.ajax({
          type : "POST",
          url  : "<?php echo base_url()?>pinjam/simpan_invoice/<?php echo $this->uri->segment('3');?>",
          dataType : "JSON",
                  success: function(notif){
                      $('#modal2').modal('close');
                      if(notif==null){
                        //kosong
                      }else if (notif==1) {
                        peringatan("Waktu Peminjaman Belum Dipilih!.")
                        //alert("Layanan Masih Ada Belum Ditentukan");
                      }else if (notif==2) {
                        peringatan("Belum Ada Arsip Yang Akan Dipinjam!.")
                      }else if (notif==3) {
                        berhasil("Peminjaman Berhasil Di Simpan!.");
                        setTimeout("location.href = '<?php echo base_url()?>datapinjam';",1500);
                      }else if (notif==4) {
                        gagal("Peminjaman Gagal Di Simpan");
                      }

                  }
              });
              return false;
      });

        $('#btn_batal').on('click',function(){
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url()?>pinjam/hapus_invoice/<?php echo $this->uri->segment('3');?>",
            dataType : "JSON",
                    success: function(notif){
                        $('#modal3').modal('close');
                        if (notif==1) {
                          berhasil("Peminjaman Berhasil Di Batalkan!.");
                          setTimeout("location.href = '<?php echo base_url()?>datapinjam';",1500);
                        }else{
                          gagal("Peminjaman Gagal Di Hapus");
                        }
                    }
                });
                return false;
        });

        changeAction = function(select){
           var id=document.getElementById("layanan").action = select.value;
           $.ajax({
             url : "<?php echo base_url();?>pinjam/update_layanan_pinjam/"+id,
             method : "POST",
             data : {id: id},
             async : true,
             dataType : 'json',
             success: function(data){
               tampil_data_pinjam();
               berhasil("Waktu Peminjaman Berhasil Di Simpan");
             }
           });


        }
      </script>

      <script type="text/javascript">
          function cari_barcode(){
            var barcode=$('#barcode').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('pinjam/cari_barcode')?>/<?php echo $this->uri->segment('3');?>/<?php echo $this->session->userdata("nama_lengkap"); ?>/"+barcode,
                dataType : "JSON",
                  success: function(data){
                    if(data==null){
                      //kosong
                    }else if (data==0) {
                      peringatan("Format Barcode Tidak Sesuai");
                    }else if (data==1) {
                      peringatan("Data Tidak Ditemukan");
                    }else if (data==2) {
                      peringatan("Arsip Belum Lengkap");
                    }else if (data==3) {
                      peringatan("Arsip Telah Di Input");
                    }else if (data==4) {
                      peringatan("Arsip Proses Peminjaman Atau Telah Di Pinjam");
                    }else if (data==5) {
                      peringatan("Arsip Telah Dikembalikan Namun Belum Di Susun, Harap Menyusun Kembali Sebelum dilakukan Proses Peminjaman");
                    }else if(data==6)
                      gagal("Arsip Hilang");
                    else{
                      tampil_data_pinjam();
                      berhasil("Bermasil Menambahkan Arsip");
                    }
                    const inputField = document.getElementById("barcode");
                    inputField.value ="";
                    document.getElementById("barcode").focus();
                }

            });
            return false;
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

      <script type="text/javascript">

    		tampil_data_pinjam();	//pemanggilan fungsi tampil pinjam.
    		//fungsi tampil pinjam
    		function tampil_data_pinjam(){
    		    $.ajax({
    		        type  : 'GET',
    		        url   : '<?php echo base_url()?>pinjam/data_pinjam/<?php echo $this->uri->segment('3');?>',
    		        async : true,
    		        dataType : 'json',
    		        success : function(data){
    		            var html = '';
    		            var loading = '';
    		            var i;
    		            var nomor=1;
                    var id_waktu;
    		            for(i=0; i<data.length; i++){
                      var barang="";
                      if(data[i].id_warkah!=null){
                        barang="W - "+data[i].w_nomor+"/"+data[i].w_tahun;
                      }else if (data[i].id_buku_tanah!=null) {
                        barang="BT - "+data[i].jenis_hak+" "+data[i].bt_hak+" - "+data[i].bt_desa;
                      }else if (data[i].id_surat_ukur!=null) {
                        barang="SU - "+data[i].su_nomor+"/"+data[i].su_tahun+" - "+data[i].su_desa;
                      }

    		                html += '<tr>'+
      		                  		'<td>'+nomor+'</td>'+
      		                  		'<td>'+barang+'</td>'+
      		                  		'<td>'+data[i].pelayanan+" "+data[i].durasi+'(Hari)</td>'+
      		                  		'<td>'+
                                '<div class="input-field col s12">'+
                                  '<select id="layanan" onchange="changeAction(this)" class="layanan" required name="layanan" style="display: table;">'+
                                      '<option value="" disabled selected>Pilih Layanan</option>'+
                                      <?php
                                      foreach($data_waktu as $waktu){
                                        ?>
                                        '<option value="<?php echo $waktu->id_waktu; ?>/'+data[i].id_pinjam+'"><?php echo $waktu->pelayanan; ?> (<?php echo $waktu->durasi; ?> Hari)</option>'+
                                      <?php } ?>
                                  '</select>'+
                              '</div>'+

                                '</td>'+
    		                        '<td style="text-align:left;">'+
                                        '<a  class="btn btn-danger btn-xs item_hapus red" data="'+data[i].id_pinjam+'"><i class="material-icons dp48">delete_forever</i></a>'+
                                    '</td>'+
    		                        '</tr>';
                        nomor++;
    		            }
    		            $('#show_data').html(html);

    		        }

    		    });
    		}

            //initialize all modals
        $('.modal').modal({
            dismissible: true
        });

    		//GET HAPUS
    		$('#show_data').on('click','.item_hapus',function(){
                var id=$(this).attr('data');
                $('#modal1').modal('open');
                $('[name="kode"]').val(id);
            });

          //Hapus list pinjam
            $('#btn_hapus').on('click',function(){
                var kode=$('#textkode').val();
                $.ajax({
                type : "POST",
                url  : "<?php echo base_url()?>pinjam/hapus_list_pinjam/"+kode,
                dataType : "JSON",
                        data : {kode: kode},
                        success: function(data){
                            $('#modal1').modal('close');
                            tampil_data_pinjam();
                            berhasil("Berhasil Menghapus Arsip");
                        }
                    });
                    return false;
                });





    </script>
      <script src="<?php echo base_url(); ?>dist/js/app.js"></script>
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
