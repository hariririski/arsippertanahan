<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $this->load->view('share/icon', '', TRUE);?>
    <title>Data Peminjaman</title>
    <link href="dist/css/style2.css" rel="stylesheet">
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
    <script>
    window.onload = Scrolldown;
    function Scrolldown() {
    window.location.hash = '#qr-reader';
  }
    </script>
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
                    <h5 class="font-medium m-b-0">Kembalikan Arsip</h5>
                    <!-- <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">Home</a>
                        <a href="#!" class="breadcrumb">Data Peminjaman</a>
                    </div> -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
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
    <div id="modal2" class="modal" >
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
            $('#stop').trigger('click');
          }
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
          $('#stop').trigger('click');

        }

        $('#btn_simpan').on('click',function(){
            var kode=$('#textkode').val();
            pecah=kode.split(";",2);
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url()?>pinjam/kembalikan/"+pecah[1]+"/<?php echo $this->session->userdata("nama_lengkap"); ?>/"+pecah[0],
            dataType : "JSON",
                    data : {kode: kode},
                    success: function(notif){
                        $('#modal1').modal('close');
                        if (notif==1) {
                          berhasil("Peminjaman Berhasil Di kembalikan!.");
                          setTimeout("location.href = '<?php echo base_url()?>kembaliqr';",1500);
                        }else if(notif==2){
                          berhasil("Peminjaman Berhasil Di kembalikan!.");
                          setTimeout("location.href = '<?php echo base_url()?>kembaliqr';",1500);
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
            camera();
        });
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
    <script src="dist/js/qrcode_scan.min.js"></script>
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
            var lastResult;

            var countResults = 0;
            function onScanSuccess(decodedText, decodedResult) {
              var audio = new Audio('dist/qr.mp3');
                if (decodedText !== lastResult) {
                    ++countResults;
                    lastResult = decodedText;
                    // Handle on success condition with the decoded message.
                    //console.log(`Scan result ${decodedText}`, decodedResult);
                    audio.play();
                    tabel(lastResult);

                }
                lastResult="";
                alert(lastResult);
            }

            var html5QrcodeScanner = new Html5QrcodeScanner(
                "qr-reader", { fps: 10, qrbox: 250 });
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
            $('#camera').trigger('click');
        });
      }
    </script>



</body>

</html>
