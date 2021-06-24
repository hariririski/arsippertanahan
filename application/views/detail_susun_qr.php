<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $this->load->view('share/icon', '', TRUE);?>
    <title>detail Susun</title>
    <link href="<?php echo base_url(); ?>dist/css/style.css" rel="stylesheet">
    <!-- This page CSS -->
    <link href="<?php echo base_url(); ?>assets/extra-libs/prism/prism.css" rel="stylesheet">
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

            <div class="col s12 ">
                <div class="card">
                    <div class="card-content">
                      <table  class="striped">
                        <?php
                          $i=0;
                          foreach($pinjam as $data){
                          $i++;
                        ?>
                        <tr style="padding: 0px 0px;">
                          <td style="padding: 0px 0px;">Desa/Jenis Hak/Nomor Hak/SU/WARKAH/</td>
                          <td style="padding: 0px 0px;">
                            <?php
                              if($data->id_buku_tanah!=null){
                                echo "BT / ".$data->nama_jenis_hak." / ".$data->no_hak;
                              }else if($data->id_surat_ukur!=null){
                                echo "SU / ".$data->nomor_su." / ".$data->tahun_su;
                              }else if($data->id_warkah!=null){
                                echo "W / ".$data->nomor_w." / ".$data->tahun_w;
                              }
                            ?>
                          </td>
                        </tr>
                        <tr style="padding: 0px 0px;">
                          <td style="padding: 0px 0px;">Tanggal Pinjam</td>
                          <td style="padding: 0px 0px;"><?php echo $data->tgl_pinjam; ?></td>
                        </tr>
                        <tr style="padding: 0px 0px;">
                          <td style="padding: 0px 0px;">Tanggal Kembali</td>
                          <td style="padding: 0px 0px;"><?php echo $data->tgl_dikembalikan; ?></P></td>
                        </tr>
                        <tr style="padding: 0px 0px;">
                          <td style="padding: 0px 0px;">Tanggak Keterlambatan</td>
                          <td style="padding: 0px 0px;"><?php echo $data->selisih; ?>Hari</td>
                        </tr>
                        <tr style="padding: 0px 0px;">
                          <td style="padding: 0px 0px;">Peminjam</td>
                          <td style="padding: 0px 0px;"><?php echo $data->nama_lengkap; ?></td>
                        </tr>
                        <tr style="padding: 0px 0px;">
                          <td style="padding: 0px 0px;">Lokasi Penyimpanan</td>
                          <td style="padding: 0px 0px;">
                            <?php
                              if($data->id_buku_tanah!=null){
                                echo "Lemari : ".$data->lemari_bt."/ ";
                                echo "Baris  : ".$data->baris_bt."/ ";
                                echo "Bundel : ".$data->nama_bundel_bt;
                              }else if($data->id_surat_ukur!=null){
                                echo "Lemari : ".$data->lemari_su."/ ";
                                echo "Baris  : ".$data->baris_su."/ ";
                                echo "Bundel : ".$data->nama_bundel_su;
                              }else if($data->id_warkah!=null){
                                echo "Lemari : ".$data->lemari_w."/ ";
                                echo "Baris  : ".$data->baris_w."/ ";
                                echo "Bundel : ".$data->nama_bundel_w;
                              }
                            ?>
                          </td>
                        </tr>
                        <?php
                          if($data->id_buku_tanah!=null){
                            echo'<input type="hidden" name="id_pinjam" id="id_pinjam" value="'.$data->id_pinjam.'">';
                            echo'<input type="hidden" name="id_bundel" id="id_bundel" value="'.$data->id_bundel_bt.'">';
                          }else if($data->id_surat_ukur!=null){
                            echo'<input type="hidden" name="id_pinjam" id="id_pinjam" value="'.$data->id_pinjam.'">';
                            echo'<input type="hidden" name="id_bundel" id="id_bundel" value="'.$data->id_bundel_su.'">';
                          }else if($data->id_warkah!=null){
                            echo'<input type="hidden" name="id_pinjam" id="id_pinjam" value="'.$data->id_pinjam.'">';
                            echo'<input type="hidden" name="id_bundel" id="id_bundel" value="'.$data->id_bundel_w.'">';
                          }
                        ?>
                        <?php } ?>
                      </table>

                    </div>
                </div>
            </div>
            <div class="card info-gradient m-t-0 m-b-0">
                <div class="card-content">
                    <div class="p-b-40 p-t-20">
                      <div id="qr-reader" style="width:100%"></div>
                      <div id="qr-reader-results"></div>

                        <p class="white-text op-7 m-b-20 Center">Manajemen Arsip Lebih Mudah, Cepat, Mudah dan Efektif</p>

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
    <script src="<?php echo base_url(); ?>dist/js/materialize.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!-- ============================================================== -->
    <!-- Apps -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>dist/js/app.js"></script>
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
    <script src="<?php echo base_url(); ?>dist/js/pages/forms/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/extra-libs/Datatables/datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>dist/js/pages/datatable/datatable-basic.init.js"></script>
    <script type="text/javascript">


        function data_modal(data){
          if(data!=null){
            pecah=data.split(";",10);
            //simpan();
            if(pecah[8]=="BT" || pecah[8]=="SU" || pecah[8]=="W"){
                window.location.href='<?php echo base_url();?>'+"pinjam/detail_susunqr/"+pecah[4];
            }else{
              peringatan("Arsip Tidak Sedang Di Pinjam");
              $('#stop').trigger('click');
            }
        }
      }

        function susun(bundel){
          $('#stop').trigger('click');
            var id_pinjam=$('#id_pinjam').val();
            var id_bundel=$('#id_bundel').val();
            id_bundel="BNDL-"+id_bundel;
          if(bundel==id_bundel){
            berhasil("Bundel_sesuai");
          }else{
            gagal("Bundel Tidak Sesuai!.");
          }
            // $('#modal2').modal('close');

            // var kode_bundel=$('#kode_bundel').val();
            // pecah=kode.split(";",2);
            //
            // $.ajax({
            // type : "POST",
            // url  : "<?php //echo base_url()?>pinjam/susunkan/"+pecah[1]+"/<?php //echo $this->session->userdata("nama_lengkap"); ?>/"+pecah[0]+"/"+kode_bundel,
            // dataType : "JSON",
            //         data : {kode: kode},
            //         success: function(notif){
            //             $('#modal1').modal('close');
            //             if (notif==1) {
            //               berhasil("Peminjaman Berhasil Di Susun !.");
            //               setTimeout("location.href = '<?php //echo base_url()?>susun';",1500);
            //             }else if(notif==2){
            //               berhasil("Peminjaman Berhasil Di Susun !.");
            //               setTimeout("location.href = '<?php //echo base_url()?>susun';",1500);
            //             }else if(notif==3){
            //               gagal("Arsip Gagal Di Susun");
            //             }else if(notif==4){
            //               gagal("Bundel Tidak Sesuai, Arsip Gagal Di Susun");
            //             }else{
            //               //tampil_data_pinjam();
            //               gagal("Arsip Gagal Di Susun");
            //             }
            //
            //         }
            //     });
            //     return false;

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
    <script src="<?php echo base_url(); ?>dist/js/qrcode_scan.min.js"></script>
    <script>

        function docReady(fn) {
            // see if DOM is already available
            if (document.readyState === "complete"
                || document.readyState === "interactive") {
                // call on next available tick
                setTimeout(fn, 1);
            } else {
                document.addEventListener("DOMContentLoaded", fn);
            }
        }

        docReady(function () {
            var resultContainer = document.getElementById('qr-reader-results');
            var lastResult, countResults = 0;
            function onScanSuccess(decodedText, decodedResult) {
              var audio = new Audio('<?php echo base_url(); ?>dist/qr.mp3');
              audio.play();
              lastResult=1;
              susun(decodedText);
              setTimeout(function(){console.log(`Scan result ${decodedText}`, decodedResult);}, 3000);

            }

            var html5QrcodeScanner = new Html5QrcodeScanner(
                "qr-reader", { fps: 2, qrbox: 250 });
            html5QrcodeScanner.render(onScanSuccess);
        });
    </script>
    <script type="text/javascript">
    permisi();
      function permisi(){
          $(function(){
              $('.permisi').trigger('click');
          });
        }

      function camera(){
        $(function(){
            //$('#camera').trigger('click');
        });
      }
    </script>


</body>

</html>
