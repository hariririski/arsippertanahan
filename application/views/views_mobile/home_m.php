<!DOCTYPE HTML>
<html lang="en">
<head>
  <?php echo $this->load->view('views_mobile/share/header', '', TRUE);?>
  <body class="theme-light">
    <div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>

    <div id="page">

      <div id="footer-bar" class="footer-bar-1 footer-bar-detached">
        <a href="<?php echo base_url(); ?>mobile/home"><i class="bi bi-house-fill"></i><span>Home</span></a>
        <a href="page-activity.html"><i class="bi bi-graph-up"></i><span>Activity</span></a>
        <a href="#" data-bs-toggle="offcanvas" data-bs-backdrop="static" data-bs-target="#scan" class="circle-nav-2" onclick="permisi();"><i class="bi bi-upc-scan"></i><span>Scan</span></a>
        <a href="page-payments.html"><i class="bi bi-receipt"></i><span>Progress</span></a>
        <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-sidebar"><i class="bi bi-three-dots"></i><span>More</span></a>
      </div>

      <div class="page-content footer-clear">

        <div class="pt-3">
          <div class="page-title d-flex">
            <div class="align-self-center me-auto">
              <p class="color-white opacity-80 header-date"></p>
              <h3 class="color-white"><?php echo $this->session->userdata("nama_lengkap"); ?></h3>
            </div>
            <div class="align-self-center ms-auto">

              <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-notifications" class="icon bg-white color-theme rounded-m shadow-xl">
                <i class="bi bi-bell-fill color-black font-17"></i>
                <em class="badge bg-red-light color-white scale-box">3</em>
              </a>
              <a href="#" data-bs-toggle="dropdown" class="icon rounded-m shadow-xl">
                <img src="<?php echo base_url(); ?><?php echo $this->session->userdata("image"); ?>" width="45" class="rounded-m" alt="img">
              </a>

              <div class="dropdown-menu">
                <div class="card card-style shadow-m mt-1 me-1">
                  <div class="list-group list-custom list-group-s list-group-flush rounded-xs px-3 py-1">
                    <a href="page-activity.html" class="list-group-item">
                      <i class="has-bg gradient-blue shadow-bg shadow-bg-xs color-white rounded-xs bi bi-graph-up"></i>
                      <strong class="font-13">Activity Profil</strong>
                    </a>
                    <a href="<?php echo base_url(); ?>login/logout" class="list-group-item">
                      <i class="has-bg gradient-red shadow-bg shadow-bg-xs color-white rounded-xs bi bi-power"></i>
                      <strong class="font-13">Log Out</strong>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <svg id="header-deco" viewbox="0 0 1440 600" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150">
          <path id="header-deco-1" d="M 0,600 C 0,600 0,120 0,120 C 92.36363636363635,133.79904306220095 184.7272727272727,147.59808612440193 287,148 C 389.2727272727273,148.40191387559807 501.4545454545455,135.40669856459328 592,129 C 682.5454545454545,122.5933014354067 751.4545454545455,122.77511961722489 848,115 C 944.5454545454545,107.22488038277511 1068.7272727272727,91.49282296650718 1172,91 C 1275.2727272727273,90.50717703349282 1357.6363636363635,105.25358851674642 1440,120 C 1440,120 1440,600 1440,600 Z"></path>
          <path id="header-deco-2" d="M 0,600 C 0,600 0,240 0,240 C 98.97607655502392,258.2105263157895 197.95215311004785,276.4210526315789 278,282 C 358.04784688995215,287.5789473684211 419.16746411483257,280.5263157894737 524,265 C 628.8325358851674,249.4736842105263 777.377990430622,225.47368421052633 888,211 C 998.622009569378,196.52631578947367 1071.3205741626793,191.57894736842107 1157,198 C 1242.6794258373207,204.42105263157893 1341.3397129186603,222.21052631578948 1440,240 C 1440,240 1440,600 1440,600 Z"></path>
          <path id="header-deco-3" d="M 0,600 C 0,600 0,360 0,360 C 65.43540669856458,339.55023923444975 130.87081339712915,319.1004784688995 245,321 C 359.12918660287085,322.8995215311005 521.9521531100479,347.1483253588517 616,352 C 710.0478468899521,356.8516746411483 735.3205741626795,342.3062200956938 822,333 C 908.6794258373205,323.6937799043062 1056.7655502392345,319.62679425837325 1170,325 C 1283.2344497607655,330.37320574162675 1361.6172248803828,345.1866028708134 1440,360 C 1440,360 1440,600 1440,600 Z"></path>
          <path id="header-deco-4" d="M 0,600 C 0,600 0,480 0,480 C 70.90909090909093,494.91866028708137 141.81818181818187,509.8373205741627 239,499 C 336.18181818181813,488.1626794258373 459.6363636363636,451.5693779904306 567,446 C 674.3636363636364,440.4306220095694 765.6363636363636,465.88516746411483 862,465 C 958.3636363636364,464.11483253588517 1059.8181818181818,436.8899521531101 1157,435 C 1254.1818181818182,433.1100478468899 1347.090909090909,456.555023923445 1440,480 C 1440,480 1440,600 1440,600 Z"></path>
        </svg>

        <div class="splide single-slider slider-no-dots slider-no-arrows slider-visible" id="single-slider-1">
          <div class="splide__track">
            <div class="splide__list">
              <div class="splide__slide">
                <div class="card card-style m-0 bg-5 shadow-card shadow-card-m" style="height:200px">
                  <div class="card-center">
                    <div class="bg-theme px-3 py-2 rounded-end d-inline-block">
                    <a class="color-theme" data-bs-toggle="collapse" href="#balance3" aria-controls="balance2">Jumlah Buku Tanah</a>
                    <div >
                      <h2 class="color-theme font-26">
                          <?php
                          $jumlah_buku_tanah;
                          foreach($jumlah_buku_tanah as $data){
                            echo   $jumlah_buku_tanah=$data->jumlah_buku_tanah;
                          }
                          ?>
                      </h2>
                    </div>
                    </div>
                  </div>
                  <strong class="card-top no-click font-12 p-3 color-white font-monospace font-20">Buku Tanah</strong>
                  <strong class="card-bottom no-click p-3 font-12 text-start color-white font-monospace font-20">
                    <?php
                    foreach($jumlah_buku_tanah_valid as $data){
                        echo "Valid : ".$data->jumlah_buku_tanah;
                    }
                    ?>
                  </strong>
                  <strong class="card-bottom no-click p-3 font-12 text-end color-white font-monospace font-20">
                    <?php
                    foreach($jumlah_buku_tanah_valid as $data){
                      if($jumlah_buku_tanah>0){
                        echo round($data->jumlah_buku_tanah/$jumlah_buku_tanah*100,2)."%";
                      }else{
                        echo "0.00 %";
                      }
                    }
                    ?>
                  </strong>
                  <div class="card-overlay bg-black opacity-50"></div>
                </div>
              </div>

              <div class="splide__slide">
                <div class="card card-style m-0 bg-5 shadow-card shadow-card-m" style="height:200px">

                  <div class="card-center">
                    <div class="bg-theme px-3 py-2 rounded-end d-inline-block">
                    <a class="color-theme" data-bs-toggle="collapse" href="#balance3" aria-controls="balance2">Jumlah Surat Ukur</a>
                    <div >
                      <h2 class="color-theme font-26">
                        <?php
                          $jumlah_surat_ukur;
                          foreach($jumlah_surat_ukur as $data){
                            echo $jumlah_surat_ukur=$data->jumlah_surat_ukur;
                          }
                        ?>
                      </h2>
                    </div>
                    </div>
                  </div>
                  <strong class="card-top no-click font-12 p-3 color-white font-monospace font-20">Surat Ukur</strong>
                  <strong class="card-bottom no-click p-3 font-12 text-start color-white font-monospace font-20">
                    <?php
                      foreach($jumlah_surat_ukur_valid as $data){

                        echo "Valid : ".$data->jumlah_surat_ukur;

                      }
                    ?>
                  </strong>
                  <strong class="card-bottom no-click p-3 font-12 text-end color-white font-monospace font-20">
                    <?php
                      foreach($jumlah_surat_ukur_valid as $data){
                        if($jumlah_surat_ukur>0){
                        echo round($data->jumlah_surat_ukur/$jumlah_surat_ukur*100,2)."%";
                        }else{
                          echo "0.00 %";
                        }
                      }
                    ?>
                  </strong>
                  <div class="card-overlay bg-black opacity-50"></div>
                </div>
              </div>
              <div class="splide__slide">
                <div class="card card-style m-0 bg-5 shadow-card shadow-card-m" style="height:200px">

                  <div class="card-center">
                    <div class="bg-theme px-3 py-2 rounded-end d-inline-block">
                    <a class="color-theme" data-bs-toggle="collapse" href="#balance3" aria-controls="balance2">Jumlah Warkah</a>
                    <div >
                      <h2 class="color-theme font-26">
                        <?php
                          $jumlah_warkah;
                          foreach($jumlah_warkah as $data){
                            echo $jumlah_warkah=$data->jumlah_warkah;
                          }
                        ?>
                      </h2>
                    </div>
                    </div>
                  </div>
                  <strong class="card-top no-click font-12 p-3 color-white font-monospace font-20">Warkah</strong>
                  <strong class="card-bottom no-click p-3 font-12 text-start color-white font-monospace font-20">
                    <?php
                      foreach($jumlah_warkah_valid as $data){
                          echo "Valid : ".$data->jumlah_warkah;
                      }
                    ?>
                  </strong>
                  <strong class="card-bottom no-click p-3 font-12 text-end color-white font-monospace font-20">
                    <?php
                      foreach($jumlah_warkah_valid as $data){
                        if($jumlah_warkah>0){
                          echo round($data->jumlah_warkah/$jumlah_warkah*100,2)."%";
                        }else{
                          echo "0.00 %";
                        }
                      }
                    ?>
                  </strong>
                  <div class="card-overlay bg-black opacity-50"></div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <?php
          $menuju=0;
          $telat=0;
          $persen_menuju=0;
          $persen_telat=0;
          foreach($pinjam_telat as $pinjam){
            if($pinjam->selisih >-2 && $pinjam->selisih <1 ){
              $menuju++;
            }else if($pinjam->selisih >0){
              $telat++;
            }
          }
          $total=$menuju+$telat;
          if($total>0){
            $persen_menuju=round(($menuju/$total)*100);
            $persen_telat=round(($telat/$total)*100);
          }
        ?>

        <div class="content py-2">
          <div class="d-flex text-center">
            <div class="me-auto">
              <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-peminjaman" class="icon icon-xxl rounded-m bg-theme shadow-m"><i class="font-28 color-green-dark bi bi-arrow-up-circle"></i><em class="badge bg-red-light color-white scale-box">3</em></a>
              <h6 class="font-13 opacity-80 font-500 mb-0 pt-2">Peminjaman</h6>
            </div>
            <div class="m-auto">
              <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-pengembalian" class="icon icon-xxl rounded-m bg-theme shadow-m"><i class="font-28 color-red-dark bi bi-arrow-down-circle"></i><em class="badge bg-red-light color-white scale-box">3</em></a>
              <h6 class="font-13 opacity-80 font-500 mb-0 pt-2">Pengembalian</h6>
            </div>
            <div data-bs-toggle="offcanvas" data-bs-target="#menu-exchange" class="m-auto">
              <a href="#" class="icon icon-xxl rounded-m bg-theme shadow-m"><i class="font-28 color-blue-dark bi bi-arrow-repeat"></i><em class="badge bg-red-light color-white scale-box"><?php echo $telat;?></em></a>
              <h6 class="font-13 opacity-80 font-500 mb-0 pt-2">Terlambat</h6>
            </div>
            <div class="ms-auto">
              <a href="page-payment-bill.html" class="icon icon-xxl rounded-m bg-theme shadow-m"><i class="font-28 color-brown-dark bi bi-filter-circle"></i><em class="badge bg-red-light color-white scale-box"><?php echo $menuju;?></em></a>
              <h6 class="font-13 opacity-80 font-500 mb-0 pt-2">Menuju</h6>
            </div>
          </div>
        </div>

        <div class="content my-0 mt-n2 px-1">
          <div class="d-flex">
            <div class="align-self-center">
              <h3 class="font-16 mb-2">Aktivitas Terbaru</h3>
            </div>
            <div class="align-self-center ms-auto">
              <a href="page-activity.html" class="font-12 pt-1">Lihat Semua</a>
            </div>
          </div>
        </div>

        <div class="card card-style">
          <div class="content">
            <?php
              $i=0;
              foreach($aktifitas as $data2){
              $i++;
            ?>
            <a href="#" class="d-flex py-1" data-bs-toggle="offcanvas" data-bs-target="#menu-activity-1">
              <div class="align-self-center">
                <span class="icon gradient-red me-2 shadow-bg shadow-bg-s rounded-s">
                  <img src="../assets_m/images/pictures/6s.jpg" width="45" class="rounded-s" alt="img">
                </span>
              </div>
              <div class="align-self-center ps-1">
                <h5 class="pt-1 mb-n1 font-13">
                  <?php
                   $barang="";
                  if($data2->id_warkah!=null){
                    $barang="W - ".$data2->w_nomor."/".$data2->w_tahun;
                  }else if ($data2->bt_id_buku_tanah!=null) {
                    $barang="BT - ".$data2->nama_jenis_hak." ".$data2->no_hak." - ".$data2->bt_desa;
                  }else if ($data2->id_surat_ukur!=null) {
                    $barang="SU - ".$data2->su_nomor."/".$data2->su_tahun." - ".$data2->su_desa;
                  }
                  ?>
                    <?php echo $barang; ?>-<?php echo $data2->pelayanan; ?>
                </h5>
                <p class="mb-0 font-11 opacity-70"><?php echo $data2->nama_lengkap; ?>-<?php echo $data2->tgl_pinjam; ?> <span class="copyright-year"></span></p>
              </div>
              <div class="align-self-center ms-auto text-end">
                <span class="btn btn-xxs gradient-green shadow-bg shadow-bg-xs">
                  <?php
                  if($data2->ket==2){
                    echo"Peminjaman";
                  }else if($data2->ket==3){
                    echo "Pengembalian";
                  }else if($data2->ket==4){
                    echo "Susun";
                  }
                  ?>
                </span>
              </div>
            </a>
            <div class="divider my-2 opacity-50"></div>
            <?php } ?>
          </div>
        </div>







      <div id="menu-sidebar" data-menu-active="nav-welcome" data-menu-load="<?php echo base_url(); ?>mobile/menu_sidebar" class="offcanvas offcanvas-start offcanvas-detached rounded-m">
      </div>

      <div id="menu-card-more" data-menu-load="<?php echo base_url(); ?>mobile/menu_card_settings" class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">
      </div>

      <div id="menu-peminjaman" data-menu-load="<?php echo base_url(); ?>mobile/menu_peminjaman" class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">
      </div>

      <div id="menu-pengembalian" data-menu-load="<?php echo base_url(); ?>mobile/menu_pengembalian" class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">
      </div>



      <div id="menu-friends-transfer" data-menu-load="<?php echo base_url(); ?>mobile/menu_friends_transfer" class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">
      </div>

      <div id="menu-request" data-menu-load="<?php echo base_url(); ?>mobile/menu_request" class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">
      </div>

      <div id="menu-exchange" data-menu-load="<?php echo base_url(); ?>mobile/menu_exchange" class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">
      </div>

      <div id="menu-notifications" data-menu-load="<?php echo base_url(); ?>mobile/menu_notifications" class="offcanvas offcanvas-top offcanvas-detached rounded-m">
      </div>

      <div id="menu-highlights" data-menu-load="<?php echo base_url(); ?>mobile/menu_highlights" class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">
      </div>


    <?php echo $this->load->view('views_mobile/share/footer', '', TRUE);?>
    <script src="../dist/js/qrcode_mobile.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <div id="scan" class="offcanvas offcanvas-bottom offcanvas-detached rounded-m" data-bs-backdrop="false" >
      <div class="menu-size" style="height:500px;">
        <div class="d-flex mx-3 mt-3 py-1">
          <div class="align-self-center">
            <h1 class="mb-0">Scan QRcode</h1>
          </div>
          <div class="align-self-center ms-auto">
            <a href="#" class="ps-4 shadow-0 me-n2" data-bs-dismiss="offcanvas" id="close">
              <i class="bi bi-x color-red-dark font-26 line-height-xl"></i>
            </a>
          </div>
        </div>
        <div class="divider divider-margins mt-1">
                      <div id="qr-reader" style="width:100%"></div>
                      <div id="qr-reader-results"></div>
        </div>

      </div>
    </div>

    <script type="text/javascript">

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
              var audio = new Audio('../dist/qr.mp3');
              audio.play();
              lastResult=1;
              cari_barcode(decodedText);
              setTimeout(function(){console.log(`Scan result ${decodedText}`, decodedResult);}, 3000);

            }

            var html5QrcodeScanner = new Html5QrcodeScanner(
                "qr-reader", { fps: 2, qrbox: 250 });
            html5QrcodeScanner.render(onScanSuccess);
        });
    </script>
    <script type="text/javascript">
      function permisi(){
          $(function(){
              $('.permisi').trigger('click');
              $('#camera').trigger('click');
          });
        }

      function camera(){
        $(function(){
          $('#camera').trigger('click');
        });
      }
      $(document).ready(function(){
        $('#close').click(function(){
          $('#stop').trigger('click');
        });
      });
    </script>
    <script type="text/javascript">
    function cari_barcode(barcode){
      //alert(barcode);
        $.ajax({
        type : "POST",
        url  : "<?php echo base_url()?>mobile/cari/"+barcode,
        dataType : "JSON",
                success: function(notif){
                  if (notif==1) {

                     document.getElementById('close').click();
                      $('#berhasil').trigger('click');
                    //$('#close').trigger('click');

                    // setTimeout("location.href = '<?php //echo base_url()?>validqr';",1500);
                  }else if(notif==2){
                    gagal("Arsip Gagal Valid");
                  }else if(notif==3){
                    gagal("Bundel Tidak Sesuai, Arsip Gagal  Valid");
                  }else{
                    gagal("Arsip Gagal Valid");

                  }

                }
            });

    }
    </script>
    <button type="submit" hidden id="berhasil" class="list-group-item" data-bs-toggle="offcanvas" data-bs-target="#ok"></button>
    <button type="submit" hidden id="gagal" class="list-group-item" data-bs-toggle="offcanvas" data-bs-target="#gagal"></button>
    <button type="submit" hidden id="berhasil" class="list-group-item" data-bs-toggle="offcanvas" data-bs-target="#menu-transfer-ok"></button>
    <div id="ok" style="width:320px" class="offcanvas offcanvas-modal offcanvas-detached rounded-m">
      <div class="content text-center">
        <i style="font-size:65px;" class="scale-box bi bi-check-circle-fill color-green-dark shadow-s rounded-circle p-0 mt-3 mb-3 d-inline-block"></i>
        <h1 class="pt-3 font-28">Transfer Successful</h1>
        <p class="font-14">
          Your transfer was successfully processed.
        </p>
        <a href="#" data-bs-toggle="offcanvas" class="btn btn-full gradient-green shadow-bg shadow-bg-xs">Okay</a>
      </div>
    </div>

    <div id="menu-transfer-pending" style="width:320px" class="offcanvas offcanvas-modal offcanvas-detached rounded-m">
      <div class="content text-center">
        <i style="font-size:65px;" class="scale-box bi bi-question-circle-fill color-blue-dark shadow-s rounded-circle p-0 mt-3 mb-3 d-inline-block"></i>
        <h1 class="pt-3 font-28">Transfer Pending</h1>
        <p class="font-14">
          Transfer process has started. Awaiting approval from bank before processing.
        </p>
        <a href="#" data-bs-toggle="offcanvas" class="btn btn-full gradient-blue shadow-bg shadow-bg-xs">Okay</a>
      </div>
    </div>

    <div id="gagal" style="width:320px" class="offcanvas offcanvas-modal offcanvas-detached rounded-m">
      <div class="content text-center">
        <i style="font-size:65px;" class="scale-box bi bi-x-circle-fill color-red-dark shadow-s rounded-circle p-0 mt-3 mb-3 d-inline-block"></i>
        <h1 class="pt-3 font-28">Transfer Failed</h1>
        <p class="font-14 mb-0">
          There was an error processing your transfer. Please contact support for more details.
        </p>
        <a href="tel:+1 234 567 155" class="py-4 font-700 text-uppercase d-block">Tap to Call Support</a>
        <a href="#" data-bs-toggle="offcanvas" class="btn btn-full gradient-red shadow-bg shadow-bg-xs">Okay</a>
      </div>
    </div>

  </body>
  </html>
