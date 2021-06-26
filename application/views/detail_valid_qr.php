<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $this->load->view('share/icon', '', TRUE);?>
    <title>Detail Arsip QR</title>
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
                        <?php
                          $i=0;
                          foreach($valid as $value){
                          $i++;
                          $type=$this->uri->segment('3');
                          if($type=="BT"){
                      			$data="Buku Tanah : ".$value->nama_desa."/".$value->nama_jenis_hak."/".$value->no_hak;
                            $id=$value->id_buku_tanah;
                      		 }
                      		else if ($type=="SU") {
                            $data="Surat Ukur : ".$value->nama_desa."/".$value->nomor."/".$value->tahun;
                            $id=$value->id_surat_ukur;
                      		}
                      		else if ($type=="W") {
                            $data="Warkah : ".$value->nomor."/".$value->tahun;
                            $id=$value->id_warkah;
                      		}
                        ?>
                        <h5><a><center><?php echo $data; ?></center></a></h5>

                      </table>
                      <div class="row">
                            <div class="input-field col s12">
                              <i class="material-icons prefix">chrome_reader_mode</i>
                              <select required name="kondisi" id="kondisi" <?php if($value->valid==1){echo"disabled";} ?>>
                                <option value="" ><?php echo $value->nama_kondisi; ?></option>
                                <?php
                                  foreach($data_kondisi as $data_kondisi){
                                    if($data_kondisi->id_kondisi!=$value->id_kondisi){
                                ?>
                                  <option value="<?php echo $data_kondisi->id_kondisi; ?>"><?php echo $data_kondisi->id_kondisi; ?> - <?php echo $data_kondisi->nama_kondisi; ?></option>
                                <?php }} ?>
                              </select>
                            </div>
                      </div>
                          <input name="id" id="id" type="hidden" value="<?php echo $type."-".$id; ?>">

                    </div>
                </div>
            </div>
            <?php
            if($value->valid==0){
            ?>
            <div class="card info-gradient m-t-0 m-b-0">
                <div class="card-content">
                    <div class="p-b-40 p-t-20">
                      <div id="qr-reader" style="width:100%"></div>
                      <div id="qr-reader-results"></div>

                        <p class="white-text op-7 m-b-20 Center">Manajemen Arsip Lebih Mudah, Cepat, Mudah dan Efektif</p>

                    </div>
                </div>
            </div>
            <?php
            }
            ?>
            <?php
          }
            ?>
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

        function valid(barcode){
          $('#stop').trigger('click');
            var id_lama=$('#id').val();
            pecah_id=id_lama.split(";",10);
            var id=pecah[1];
            var type=pecah[0];
            pecah_barcode=barcode.split(";",10);
            var bundel=pecah[1];
            var kondisi=$('#kondisi').val();
            alert(id);
            alert(bundel);
            alert(kondisi);
            var e = document.getElementById("kondisi");
            var strUser = e.value;
            alert(strUser);
            //id_bundel_baru="BNDL-"+id_bundel;
          if(bundel==100){
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url()?>pinjam/susunkan/"+invoice+"/<?php echo $this->session->userdata("nama_lengkap"); ?>/"+id_pinjam+"/"+id_bundel,
            dataType : "JSON",
                    success: function(notif){
                        if (notif==1) {
                          berhasil("Peminjaman Berhasil Di Susun !.");
                          setTimeout("location.href = '<?php echo base_url()?>susunqr';",1500);
                        }else if(notif==2){
                          berhasil("Peminjaman Berhasil Di Susun !.");
                          setTimeout("location.href = '<?php echo base_url()?>susunqr';",1500);
                        }else if(notif==3){
                          gagal("Arsip Gagal Di Susun");
                        }else if(notif==4){
                          gagal("Bundel Tidak Sesuai, Arsip Gagal Di Susun");
                        }else{
                          gagal("Arsip Gagal Di Susun");
                        }

                    }
                });

              }else{
                gagal("Bundel Tidak Sesuai!.");
              }

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
        toastr.success(notif, 'Selamat!', { positionClass: 'toast-top-full-width', containerId: 'toast-top-full-width' });
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
              valid(decodedText);
              setTimeout(function(){console.log(`Scan result ${decodedText}`, decodedResult);}, 3000);
              $('#stop').trigger('click');
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
