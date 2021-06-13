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
                                  <form class="row">
                                    <div class="input-field col s10">
                                        <input  type="text" autofocus>
                                        <label for="icon_prefix">Barcode Buku Tanah/ Surat Ukur / Warkah</label>
                                    </div>

                                    <div class="input-field col s2">
                                      <button  class="waves-effect waves-light btn-large" type="submit" name="action"><i class="material-icons left">search</i>Cari</button>
                                    </div>
                                  </form>
                                </div>
                                <div id="test17" class="" style="display: none;">
                                    <div class="row">
                                      <div class="input-field col s4">
                                        <i class="material-icons prefix">chrome_reader_mode</i>
                                        <select required name="kode_desa">
                                          <option value="" disabled selected>Pilih Desa</option>
                                          <?php
                                          foreach($data_desa as $desa_bt){
                                            ?>
                                            <option value="<?php echo $desa_bt->kode_desa; ?>"><?php echo $desa_bt->nama_kec; ?> -- <?php echo $desa_bt->nama_desa; ?></option>
                                          <?php } ?>
                                        </select>
                                      </div>

                                      <div class="input-field col s3">
                                        <i class="material-icons prefix">chrome_reader_mode</i>
                                        <select required name="id_jenis_hak">
                                          <option value="" disabled selected>Pilih Jenis Hak</option>
                                          <?php
                                          foreach($data_jenis_hak as $data_jenis_hak){
                                            ?>
                                            <option value="<?php echo $data_jenis_hak->id_jenis_hak; ?>"><?php echo $data_jenis_hak->id_jenis_hak; ?> - <?php echo $data_jenis_hak->nama_jenis_hak; ?></option>
                                          <?php } ?>
                                        </select>
                                      </div>

                                      <div class="input-field col s3">
                                        <i class="material-icons prefix">chrome_reader_mode</i>
                                        <input  type="text" >
                                        <label for="icon_prefix">Nomor Hak</label>
                                      </div>
                                      <div class="input-field col s2">
                                          <button  class="waves-effect waves-light btn-large" type="submit" name="action"><i class="material-icons left">search</i>Cari</button>
                                      </div>
                                    </div>
                                </div>
                                <div id="test18" style="display: none;">
                                    <div class="row">
                                      <div class="input-field col s4">
                                        <i class="material-icons prefix">chrome_reader_mode</i>
                                        <select required name="kode_desa">
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
                                        <input  type="text" >
                                        <label for="icon_prefix">Nomor SU</label>
                                      </div>
                                      <div class="input-field col s3">
                                        <i class="material-icons prefix">chrome_reader_mode</i>
                                        <input  type="text" >
                                        <label for="icon_prefix">Tahun</label>
                                      </div>
                                      <div class="input-field col s2">
                                          <button  class="waves-effect waves-light btn-large" type="submit" name="action"><i class="material-icons left">search</i>Cari</button>
                                      </div>
                                    </div>
                                </div>
                                <div id="test19" style="display: none;">
                                  <div class="row">
                                    <div class="input-field col s6">
                                      <i class="material-icons prefix">chrome_reader_mode</i>
                                      <input  type="text" >
                                      <label for="icon_prefix">Nomor warkah</label>
                                    </div>
                                    <div class="input-field col s4">
                                      <i class="material-icons prefix">chrome_reader_mode</i>
                                      <input  type="text" >
                                      <label for="icon_prefix">Tahun</label>
                                    </div>
                                    <div class="input-field col s2">
                                        <button  class="waves-effect waves-light btn-large" type="submit" name="action"><i class="material-icons left">search</i>Cari</button>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col l8 s12">
                        <div class="card">
                            <div class="card-content">

                                <div class="table-responsive">
                                    <table  id="mydata" class="table table-bordered nowrap display">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>Hak/SU/warkah</th>
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
    <script src="<?php echo base_url(); ?>assets/extra-libs/DataTables/datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/extra-libs/prism/prism.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <script>
    //=============================================//
    //    File export                              //
    //=============================================//
    $('#file_export').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
      <script type="text/javascript">
    	$(document).ready(function(){
    		tampil_data_pinjam();	//pemanggilan fungsi tampil barang.

    		$('#mydata').dataTable();


    		//fungsi tampil barang
    		function tampil_data_pinjam(){
    		    $.ajax({
    		        type  : 'GET',
    		        url   : '<?php echo base_url()?>pinjam/data_pinjam/<?php echo $this->uri->segment('3');?>',
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
                      }else if (data[i].id_bt!=null) {
                        barang="BT - "+data[i].jenis_hak+" "+data[i].bt_hak+" - "+data[i].bt_desa;
                      }else if (data[i].id_su!=null) {
                        barang="BT - "+data[i].su_nomor+"/"+data[i].su_tahun+" - "+data[i].su_desa;
                      }
    		                html += '<tr>'+
      		                  		'<td>'+nomor+'</td>'+
      		                  		'<td>'+barang+'</td>'+
    		                        '<td style="text-align:right;">'+
                                        '<a  class="btn btn-danger btn-xs item_hapus" data="'+data[i].id_pinjam+'">Hapus</a>'+
                                    '</td>'+
    		                        '</tr>';
                        nomor++;
    		            }
    		            $('#show_data').html(html);
    		        }

    		    });
    		}


    		//GET UPDATE
    		$('#show_data').on('click','.item_edit',function(){
                var id=$(this).attr('data');
                $.ajax({
                    type : "GET",
                    url  : "<?php echo base_url('index.php/barang/get_barang')?>",
                    dataType : "JSON",
                    data : {id:id},
                    success: function(data){
                    	$.each(data,function(barang_kode, barang_nama, barang_harga){
                        	$('#ModalaEdit').modal('show');
                			$('[name="kobar_edit"]').val(data.barang_kode);
                			$('[name="nabar_edit"]').val(data.barang_nama);
                			$('[name="harga_edit"]').val(data.barang_harga);
                		});
                    }
                });
                return false;
            });

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

    		//Simpan Barang
    		$('#btn_simpan').on('click',function(){
                var kobar=$('#kode_barang').val();
                var nabar=$('#nama_barang').val();
                var harga=$('#harga').val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('index.php/barang/simpan_barang')?>",
                    dataType : "JSON",
                    data : {kobar:kobar , nabar:nabar, harga:harga},
                    success: function(data){
                        $('[name="kobar"]').val("");
                        $('[name="nabar"]').val("");
                        $('[name="harga"]').val("");
                        $('#ModalaAdd').modal('hide');
                        tampil_data_barang();
                    }
                });
                return false;
            });

            //Update Barang
    		$('#btn_update').on('click',function(){
                var kobar=$('#kode_barang2').val();
                var nabar=$('#nama_barang2').val();
                var harga=$('#harga2').val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('index.php/barang/update_barang')?>",
                    dataType : "JSON",
                    data : {kobar:kobar , nabar:nabar, harga:harga},
                    success: function(data){
                        $('[name="kobar_edit"]').val("");
                        $('[name="nabar_edit"]').val("");
                        $('[name="harga_edit"]').val("");
                        $('#ModalaEdit').modal('hide');
                        tampil_data_barang();
                    }
                });
                return false;
            });

            //Hapus Barang


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

    	});
    </script>
      <script src="<?php echo base_url(); ?>dist/js/app.js"></script>
</body>

</html>
