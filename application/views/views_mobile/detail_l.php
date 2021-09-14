<!DOCTYPE HTML>
<html lang="en">
<head>
  <?php echo $this->load->view('views_mobile/share/header', '', TRUE);?>
  <body class="theme-light">
    <div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>

    <div id="page">

      <?php echo $this->load->view('views_mobile/share/menu_bawah', '', TRUE);?>

      <div class="page-content footer-clear">

        <div class="pt-3">
          <div class="page-title d-flex">
            <div class="align-self-center">
              <a href="#" data-back-button="" class="me-3 ms-0 icon icon-xxs bg-theme rounded-s shadow-m">
                <i class="bi bi-chevron-left color-theme font-14"></i>
              </a>
            </div>
            <div class="align-self-center me-auto">
              <h1 class="color-theme mb-0 font-18">Detail Lemari</h1>
            </div>
            <div class="align-self-center ms-auto">
              <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-sidebar" class="icon icon-xxs gradient-highlight color-white shadow-bg shadow-bg-xs rounded-s">
                <i class="bi bi-list font-20"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="card card-style">
          <div class="content">
            <?php
              foreach($lemari as $lemari){
            ?>
            <div class="d-flex">
              <div class="mt-1">
                <h1 class="mb-0">Lemari</h1>
              </div>
              <div class="ms-auto">
                <img src="<?php echo base_url(); ?>assets_m/images/pictures/arsip.png" width="60" class="rounded-m shadow-xl">
              </div>
            </div>
            <div class="row mb-3 mt-4">
              <h5 class="col-4 text-start font-15">Nama Lemari</h5>
              <h5 class="col-8 text-end font-14 opacity-60 font-400"><?php echo $buku_tanah->nama_lemari; ?></h5>
              <h5 class="col-4 text-start font-15">Nomor Hak</h5>
              <h5 class="col-8 text-end font-14 font-400"><span class="bg-green-dark px-2 rounded-s"></span></h5>
              <h5 class="col-4 text-start font-15">Pemilik Pertama</h5>
              <h5 class="col-8 text-end font-14 font-400">
                <span class="bg-green-dark px-2 rounded-s">

                </span></h5>
              <h5 class="col-4 text-start font-15">Provinsi/Kota/Kecamatan/Desa</h5>
              <h5 class="col-8 text-end font-14 opacity-60 font-400"></h5>
              <h5 class="col-4 text-start font-15">Kondisi Arsip</h5>
              <h5 class="col-8 text-end font-14 opacity-60 font-400"></h5>
              <h5 class="col-4 text-start font-15">Lokasi Arsip</h5>
              <h5 class="col-8 text-end font-14 opacity-60 font-400"></h5>
              <h5 class="col-4 text-start font-15">Valid</h5>
              <h5 class="col-8 text-end font-14 opacity-60 font-400 ">
              </h5>
              <h5 class="col-4 text-start font-15">Status</h5>
              <h5 class="col-8 text-end font-14 opacity-60 font-400 ">

              </h5>
              <h5 class="col-4 text-start font-15">QrCode</h5>
              <h5 class="col-8 text-end font-14  ">
                <?php
                $qrcode="L-".$lemari->id_lemari;
                ?>
                <a href="<?php echo site_url('Code/QRcode/'.$qrcode); ?>">
                    <img style=" border: 1px solid #555;"src="<?php echo base_url('Code/QRcode/'.$qrcode);?>" width="100px"><br>
                </a>
              </h5>

            </div>
            <div class="divider"></div>
            <?php } ?>

            <div class="row mb-3 mt-4">
              <h5 class="col-4 text-start font-15"></h5>
              <h5 class="col-8 text-end font-20 ">Surat Ukur</h5>
            </div>


            <div class="d-flex mb-4">
              <div>
                <img src="<?php echo base_url(); ?>assets_m/images/pictures/arsip.png" width="80" class="rounded-s shadow-xl">
              </div>
              <div class="ps-3 w-100">
                <h1 class="mb-0"></h1>
                <p class="mb-0 color-highlight font-11">NIB : </p>
                <p class="mb-0 color-highlight font-11">Desa : </p>
                <p class="mb-0 color-highlight font-11">Kondisi : </p>
                <p class="mb-0 color-highlight font-11">Valid :

                </p>
                <h5 class="font-500 font-14 pt-1">Lokasi : </h5>
                <h5 class="font-500 font-14 pt-1"> Status :

                </h5>
                <h5 class="font-500 font-14 pt-1 text-end">


                </h5>
              </div>
            </div>



            <div class="divider mt-4"></div>
            <div class="row mb-3 mt-4">
              <h5 class="col-4 text-start font-15"></h5>
              <h5 class="col-8 text-end font-20 ">Warkah</h5>
            </div>

              <div class="d-flex mb-4">
                <div>
                  <img src="<?php echo base_url(); ?>assets_m/images/pictures/arsip.png" width="80" class="rounded-s shadow-xl">
                </div>
                <div class="ps-3 w-100">
                  <h1 class="mb-0"></h1>
                  <p class="mb-0 color-highlight font-11">Kondisi : </p>
                  <p class="mb-0 color-highlight font-11">Keterangan : </p>
                  <p class="mb-0 color-highlight font-11">Kondisi :</p>
                  <p class="mb-0 color-highlight font-11">
                    Valid :

                  <h5 class="font-500 font-14 pt-1">
                    Status :

                  </h5>
                  <h5 class="font-500 font-14 pt-1 text-end">
                    <
                  </h5>
                </div>
              </div>


            <div class="divider mt-4"></div>
            <div class="row mb-3 mt-4">
              <h5 class="col-4 text-start font-15"></h5>
              <h5 class="col-8 text-end font-20 ">Peminjaman</h5>
            </div>

            <div class="d-flex mb-4">
              <div>
                <img src="<?php echo base_url(); ?>assets_m/images/pictures/14s.jpg" width="80" class="rounded-s shadow-xl">
              </div>
              <div class="ps-3 w-100">
                <h1 class="mb-0">

                </h1>
                <p class="mb-0 color-highlight font-11">Pinjam : </p>
                <p class="mb-0 color-highlight font-11">Kembali : </p>
                <p class="mb-0 color-highlight font-11">DiKembalikan :</p>
                <p class="mb-0 color-highlight font-11">Selisih :  Hari</p>
                <p class="mb-0 color-highlight font-11">Peminjam : </p>
                <h5 class="font-500 font-14 pt-1">

              </h5>
              <h5 class="font-500 font-14 pt-1 text-end">

              </h5>
              </div>
            </div>
            
            <!-- <div class="divider"></div>
            <a href="#" class="btn btn-full btn-l rounded-s font-800 text-uppercase gradient-highlight shadow-bg shadow-bg-m">Kembalikan/Susun Buku Tanah</a>
            <div class="divider"></div>
            <a href="#" class="btn btn-full btn-l rounded-s font-800 text-uppercase gradient-highlight shadow-bg shadow-bg-m">Kembalikan/Susun Surat Ukur</a>
            <div class="divider"></div>
            <a href="#" class="btn btn-full btn-l rounded-s font-800 text-uppercase gradient-highlight shadow-bg shadow-bg-m">Kambalikan/Susun Warkah</a>
            <div class="divider"></div>
            <a href="#" class="btn btn-full btn-l rounded-s font-800 text-uppercase gradient-highlight shadow-bg shadow-bg-m">Download Invoice in PDF</a> -->
          </div>
        </div>
      </div>

    <?php echo $this->load->view('views_mobile/share/menu', '', TRUE);?>
    </div>
    <?php echo $this->load->view('views_mobile/share/footer', '', TRUE);?>
    <?php echo $this->load->view('views_mobile/share/scan', '', TRUE);?>
  </body></html>
