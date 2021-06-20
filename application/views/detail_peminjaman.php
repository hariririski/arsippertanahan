<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $this->load->view('share/icon', '', TRUE);?>
    <title>Detail Perminjaman Arsip Pertanahan</title>
    <link href="<?php echo base_url(); ?>dist/css/style.css" rel="stylesheet">
    <!-- This page CSS -->
    <link href="<?php echo base_url(); ?>dist/css/pages/data-table.css" rel="stylesheet">

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
            <div class="container-fluid">
              <div class="row">
                  <div class="col l8 s12">
                        <div class="card">
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table  class="table table-bordered striped">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>Hak/SU/warkah</th>
                                                <th>Keterlambatan</th>
                                                <th>Tanggal Dikembalikan</th>
                                                <th>Action</th>
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
    <script src="<?php echo base_url(); ?>assets/libs/jquery/dist/jquery.min.js"></script>
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
      <script type="text/javascript">

    		tampil_data_pinjam();	//pemanggilan fungsi tampil pinjam.
    		//fungsi tampil pinjam
    		function tampil_data_pinjam(){
    		    $.ajax({
    		        type  : 'GET',
    		        url   : '<?php echo base_url()?>pinjam/detail_pinjam/<?php echo $this->uri->segment('3');?>',
    		        async : true,
    		        dataType : 'json',
    		        success : function(data){
    		            var html = '';
    		            var i;
    		            var nomor=1;

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
      		                  		'<td>'+barang+'<br>'+data[i].pelayanan+" "+data[i].durasi+'(Hari)<br>'+
      		                  		      data[i].tgl_pinjam+' s/d '+data[i].tgl_kembali+'</td>'+
      		                  		'<td>'+data[i].selisih+' Hari</td>'+
      		                  		'<td>'+data[i].tgl_dikembalikan+'</td>'+
    		                        '<td style="text-align:left;">'+
                                        '<a  class="btn btn-danger btn-xs item_hapus" data="'+data[i].id_pinjam+'">Kembalikan</a>'+
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
                   });
                   tampil_data_pinjam();
                }



    </script>
      <script src="<?php echo base_url(); ?>dist/js/app.js"></script>
</body>

</html>
