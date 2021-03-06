<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $this->load->view('share/icon', '', TRUE);?>
    <title>Dashboard Arsip Pertanahan</title>
    <!-- This page CSS -->
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="assets/extra-libs/css-chart/css-chart.css" rel="stylesheet">
    <link href="dist/css/style.css" rel="stylesheet">
    <link href="dist/css/pages/dashboard3.css" rel="stylesheet">
    <link href="assets/extra-libs/prism/prism.css" rel="stylesheet">
    <link href="dist/css/pages/data-table.css" rel="stylesheet">

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
        <div class="page-wrapper page-header">
            <!-- ============================================================== -->
            <!-- Temp - Earnings -->
            <!-- ============================================================== -->
            <div class="card info-gradient m-t-0 m-b-0">
                <div class="card-content">
                    <div class="p-b-40 p-t-20">
                        <h4 class="white-text">Selamat Datang <?php echo $this->session->userdata("nama_lengkap"); ?> </h4>
                        <p class="white-text op-7 m-b-20">Manajemen Arsip Lebih Mudah, Cepat, Mudah dan Efektif</p>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Devices - Income - Sales -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- col -->
                    <div class="col s12 l7">
                        <div class="card card-hover">
                            <div class="card-content">
                              <h4 class="card-title">Peminjaman</h4>
                              <div>
                                  <canvas id="chart1" height="171"></canvas>
                              </div>


                            </div>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col s12 l5">
                        <div class="row">
                            <div class="col s12 m6 l6">
                                <div class="card warning-gradient card-hover">
                                    <div class="card-content">
                                        <h5 class="card-title  white-text">Buku Tanah</h5>
                                        <p class="m-b-5">
                                          <span class="white-text op-6">
                                            Total
                                            <span class="right">
                                              <?php
                                                $jumlah_buku_tanah;
                                                foreach($jumlah_buku_tanah as $data){
                                                  echo   $jumlah_buku_tanah=$data->jumlah_buku_tanah;
                                                }
                                              ?>
                                            </span>
                                          </span>
                                        </p>
                                        <p>
                                          <span class="white-text op-6">Validasi
                                              <span class="right">
                                                <?php
                                                foreach($jumlah_buku_tanah_valid as $data){
                                                  if($jumlah_buku_tanah>0){
                                                    echo round($data->jumlah_buku_tanah/$jumlah_buku_tanah*100,2)."%";
                                                  }else{
                                                    echo "0.00 %";
                                                  }
                                                }
                                                ?>
                                              </span>
                                            </span>
                                        </p>

                                    </div>
                                    <div id="revenue" style="height:75px; width:100%;"></div>
                                </div>
                            </div>
                            <div class="col s12 m6 l6">
                                <div class="card primary-gradient card-hover">
                                    <div class="card-content">
                                        <h5 class="card-title white-text">Surat Ukur</h5>
                                        <p class="m-b-5">
                                          <span class="white-text op-6">
                                            Total
                                            <span class="right">
                                              <?php
                                                $jumlah_surat_ukur;
                                                foreach($jumlah_surat_ukur as $data){
                                                  echo $jumlah_surat_ukur=$data->jumlah_surat_ukur;
                                                }
                                              ?>
                                            </span>
                                          </span>
                                        </p>
                                        <p>
                                          <span class="white-text op-6">Validasi
                                            <span class="right">
                                              <?php
                                                foreach($jumlah_surat_ukur_valid as $data){
                                                  if($jumlah_surat_ukur>0){
                                                  echo round($data->jumlah_surat_ukur/$jumlah_surat_ukur*100,2)."%";
                                                  }else{
                                                    echo "0.00 %";
                                                  }
                                                }
                                              ?>
                                            </span>
                                          </span>
                                        </p>
                                    </div>
                                    <div class="center-align">
                                        <div id="visits"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l6">
                                <div class="card success-gradient card-hover">
                                    <div class="card-content">
                                        <h5 class="card-title  white-text">Keterlambatan</h5>
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
                                        <ul class="m-t-15">
                                            <li>
                                                <div class="d-flex no-block align-items-center">
                                                    <div>
                                                        <span class="m-b-0 white-text op-6">Telah Jatuh Tempo</span>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <span class="m-b-0 white-text"><?php echo $persen_telat?>%</span>
                                                    </div>
                                                </div>
                                                <div class="progress m-t-10" style="background-color: rgba(0,0,0,.1);">
                                                    <div class="determinate white" style="width: <?php echo $persen_telat?>%"></div>
                                                </div>
                                            </li>
                                            <li class="m-t-25">
                                                <div class="d-flex no-block align-items-center">
                                                    <div>
                                                        <span class="m-b-0 white-text op-6">Menuju Terlambat</span>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <span class="m-b-0 white-text"><?php echo $persen_menuju?>%</span>
                                                    </div>
                                                </div>
                                                <div class="progress m-t-10" style="background-color: rgba(0,0,0,.1);">
                                                    <div class="determinate white" style="width: <?php echo $persen_menuju?>%"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l6">
                                <div class="card danger-gradient card-hover">
                                    <div class="card-content">
                                        <h5 class="card-title white-text">Warkah</h5>
                                        <p class="m-b-5">
                                          <span class="white-text op-6">
                                            Total
                                            <span class="right">
                                              <?php
                                                $jumlah_warkah;
                                                foreach($jumlah_warkah as $data){
                                                  echo $jumlah_warkah=$data->jumlah_warkah;
                                                }
                                              ?>
                                            </span>
                                          </span>
                                        </p>
                                        <p>
                                          <span class="white-text op-6">Validasi
                                          <span class="right">
                                            <?php
                                              foreach($jumlah_warkah_valid as $data){
                                                if($jumlah_warkah>0){
                                                  echo round($data->jumlah_warkah/$jumlah_warkah*100,2)."%";
                                                }else{
                                                  echo "0.00 %";
                                                }
                                              }
                                            ?>
                                          </span>
                                          </span>
                                        </p>
                                    </div>
                                    <div id="sales" style="height:60px; width:100%;"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- col -->
                    <div class="col s12">
                        <div class="card">
                          <div class="card-content">
                              <h5 class="card-title">Data Peminjaman Terlambat</h5>
                              <h6 class="card-subtitle">Menapilkan Data dari H-3 keterlambatan</h6>
                              <div class="table-responsive">
                                  <table class="table product-overview" id="zero_config" >
                                      <thead>
                                          <tr>
                                              <th>NO</th>
                                              <th>Nama Peminjam</th>
                                              <th>Tanggal Pinjam</th>
                                              <th>Waktu Peminjaman</th>
                                              <th>Keterlambatan</th>
                                              <th>Operator</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        <?php
                                          $i=0;
                                          foreach($pinjam_telat as $pinjam_telat){
                                          $i++;
                                          if($pinjam_telat->selisih >-2){
                                          ?>
                                          <tr <?php if($pinjam_telat->selisih >0){echo 'style="background-color: #ff2525;"';}?>>
                                            <td <?php if($pinjam_telat->selisih >0){echo 'style="color: #ffffff;"';}?>><?php echo $i; ?></td>
                                            <td <?php if($pinjam_telat->selisih >0){echo 'style="color: #ffffff;"';}?> ><?php echo $pinjam_telat->nama_lengkap; ?></td>
                                            <td <?php if($pinjam_telat->selisih >0){echo 'style="color: #ffffff;"';}?> ><?php echo $pinjam_telat->tgl_pinjam; ?></td>
                                            <td <?php if($pinjam_telat->selisih >0){echo 'style="color: #ffffff;"';}?> ><?php echo $pinjam_telat->pelayanan; ?>(<?php echo $pinjam_telat->durasi; ?> Hari) </td>
                                            <td <?php if($pinjam_telat->selisih >0){echo 'style="color: #ffffff;"';}?> ><?php echo $pinjam_telat->selisih; ?> Hari</td>
                                            <td <?php if($pinjam_telat->selisih >0){echo 'style="color: #ffffff;"';}?> ><?php echo $pinjam_telat->admin_tambah; ?></td>
                                          </tr>
                                        <?php }
                                          } ?>

                                      </tbody>
                                  </table>
                              </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- col -->
                    <div class="col s12">
                        <div class="card">
                          <div class="card-content">
                              <h5 class="card-title">Data Arsip Belum Susun</h5>
                              <div class="table-responsive">
                                  <table class="table product-overview" id="zero_config1" >
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Invoice</th>
                                            <th>Tanggal Pinjam</th>
                                            <th>Operator</th>
                                            <th>Pegawai</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                              $i=0;
                                              foreach($pinjam as $data){
                                              $i++;
                                            ?>
                                            <td><?php echo $i; ?></td>
                                            <td>
                                              <?php
                                              if($data->id_buku_tanah!=null){
                                                echo "BT - ".$data->desa_bt."/".$data->nama_jenis_hak."/".$data->no_hak;
                                              }else if($data->id_surat_ukur!=null){
                                                echo "SU - ".$data->desa_su."/".$data->nomor_su."/".$data->tahun_su;
                                              }else if($data->id_warkah!=null){
                                                echo "W - ".$data->nomor_w."/".$data->tahun_w;
                                              }
                                              ?>
                                            </td>
                                            <td><?php echo $data->tgl_pinjam; ?></td>
                                            <td><?php echo $data->admin_tambah; ?></td>
                                            <td><?php echo $data->nama_lengkap; ?></td>
                                            <td>
                                              <?php if($data->status==1){
                                                        echo"Proses Peminjaman";
                                                      }else if($data->status==2){
                                                        echo"Peminjaman";
                                                      }else if($data->status==3){
                                                        echo"Dikembalikan, Belum Disusun";
                                                      }else if($data->status==4){
                                                        echo"Selesai";
                                                      } ?>
                                            </td>
                                            
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                  </table>
                              </div>
                          </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Devices - Income - Sales -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- col -->
                    <div class="col s12 l6">
                        <div class="card">
                            <div class="card-content">
                                <h4 class="card-title">Grafik Kondisi Arsip</h4>
                                <div>
                                    <canvas id="chart3" height="150"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col s12 l6">
                        <div class="card">
                            <div class="card-content">
                                <h4 class="card-title">Grafik Berdasarkan Jenis Hak</h4>
                                <div>
                                    <canvas id="chart4" height="150"> </canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col -->

                </div>
                <!-- ============================================================== -->
                <!-- Projects of the month -->
                <!-- ============================================================== -->

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
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="dist/js/materialize.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!-- ============================================================== -->
    <!-- Apps -->
    <!-- ============================================================== -->
    <script src="dist/js/app.js"></script>
    <script src="dist/js/app.init.horizontal.js"></script>
    <script src="dist/js/app-style-switcher.js"></script>
    <!-- ============================================================== -->
    <!-- Custom js -->
    <!-- ============================================================== -->
    <script src="dist/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script src="assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="assets/libs/gaugeJS/dist/gauge.min.js"></script>
    <script src="assets/extra-libs/c3/d3.min.js"></script>
    <script src="assets/extra-libs/c3/c3.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="assets/libs/chart.js/dist/chart.min.js"></script>
    <script src="dist/js/pages/chartjs/chartjs.init.js"></script>
    <!-- <script src="dist/js/pages/dashboards/dashboard3.js"></script> -->
    <script src="assets/extra-libs/jquery-datatables-editable/jquery.dataTables.js"></script>
    <script src="assets/extra-libs/tiny-editable/mindmup-editabletable.js"></script>
    <script src="assets/extra-libs/tiny-editable/numeric-input-example.js"></script>
    <script>
    /****************************************
     *       Basic Table                   *
     ****************************************/
    $('#zero_config').DataTable();
    $('#zero_config1').DataTable();
    </script>
    <?php echo $this->load->view('share/home', '', TRUE);?>
</body>

</html>
