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
                <h1 class="mb-0"><?php echo $lemari->nama_lemari; ?></h1>
              </div>
              <div class="ms-auto">
                <?php
                $qrcode="L-".$lemari->id_lemari;
                ?>
                <a href="<?php echo site_url('Code/QRcode/'.$qrcode); ?>">
                    <img style=" border: 1px solid #555;"src="<?php echo base_url('Code/QRcode/'.$qrcode);?>" class="rounded-m shadow-xl" width="100px"><br>
                </a>
              </div>
            </div>
            <div class="row mb-3 mt-4">
              <h5 class="col-4 text-start font-15">Nama Lemari</h5>
              <h5 class="col-8 text-end font-14 opacity-60 font-400"><?php echo $lemari->nama_lemari; ?></h5>
              <h5 class="col-4 text-start font-15">Jumlah Baris</h5>
              <h5 class="col-8 text-end font-14 opacity-60 font-400">
                <?php
                $ci =& get_instance();
                $ci->load->model('M_lemari');
                $data['jumlah_baris']=$ci->M_lemari->jumlah_baris($lemari->id_lemari);
                foreach(  $data['jumlah_baris'] as $jumlah_baris){
                  echo $jumlah_baris->jumlah_baris." Baris";
                }
                ?>
              </h5>
              <h5 class="col-4 text-start font-15">Jumlah Bundel</h5>
              <h5 class="col-8 text-end font-14 opacity-60 font-400">
                <?php
                $ci =& get_instance();
                $ci->load->model('M_lemari');
                $data['jumlah_bundel']=$ci->M_lemari->jumlah_bundel($lemari->id_lemari);
                foreach(  $data['jumlah_bundel'] as $jumlah_bundel){
                  echo $jumlah_bundel->jumlah_bundel." Bundel";
                }
                ?>
              </h5>
              <h5 class="col-4 text-start font-15">Keterangan</h5>
              <h5 class="col-8 text-end font-14 opacity-60 font-400"><?php echo $lemari->keterangan; ?></h5>
            </div>
            <div class="divider"></div>
            <?php } ?>

            <div class="accordion accordion-m border-0" id="accordion-group-7">
              <?php
                foreach($baris as $baris){
              ?>
              <div class="accordion-item border border-fade-highlight border-bottom-0 ">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion7-<?php echo $baris->id_baris; ?>" aria-expanded="false">
                  <i class="bi bi-heart-fill color-red-dark pe-3 font-14"></i>
                  <span class="font-600 font-13">Baris <?php echo $baris->nama_baris; ?></span>
                  <i class="bi bi-plus font-20"></i>
                </button>
                <div id="accordion7-<?php echo $baris->id_baris; ?>" class="accordion-collapse collapse " data-bs-parent="#accordion-group-7" style="">

                    <?php
                    $ci =& get_instance();
                    $ci->load->model('M_lemari');
                    $data['data_baris']=$ci->M_lemari->m_lihat_bundel($baris->id_baris,$baris->id_lemari);
                    ?>
                    <div class="table-responsive">
                      <table class="table color-theme border-blue-dark mb-0" >
                        <thead>
                          <tr>
                            <th class="border-fade-blue" scope="col">Bundel</th>
                            <th class="border-fade-blue" scope="col">Jumlah Arsip</th>
                            <th class="border-fade-blue text-center" scope="col">Valid</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          foreach($data['data_baris'] as $nilai){
                          ?>
                          <tr class="border-fade-blue">
                            <td><?php echo $nilai->nama_bundel; ?></td>
                            <td>50</td>
                            <td>35%</td>
                          </tr>
                        <?php
                      }
                        ?>
                        </tbody>
                      </table>
                    </div>


                </div>
              </div>
            <?php } ?>
            </div>

            <div class="divider"></div>

            <div class="accordion accordion-m border-0" id="accordion-group-7">
              <div class="accordion-item border border-fade-highlight border-bottom-0 rounded-top rounded-m rounded-bottom rounded-m">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#peminjaman" aria-expanded="false">
                  <i class="bi bi-heart-fill color-red-dark pe-3 font-14"></i>
                  <span class="font-600 font-13">Data Peminjaman</span>
                  <i class="bi bi-plus font-20"></i>
                </button>
                <div id="peminjaman" class="accordion-collapse collapse" data-bs-parent="#accordion-group-7" style="">
                  <p class="px-3 mb-0 pb-3 pt-1">
                    This is the accordion body. It can support most content you want without restrictions. You can use
                    images, videos lists or whatever you want.
                  </p>
                </div>
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
