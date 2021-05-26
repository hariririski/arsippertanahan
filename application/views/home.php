<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Dashboard Arsip Pertanahan</title>
    <!-- This page CSS -->
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="assets/extra-libs/css-chart/css-chart.css" rel="stylesheet">
    <link href="dist/css/style.css" rel="stylesheet">
    <link href="dist/css/pages/dashboard3.css" rel="stylesheet">

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
                        <h3 class="white-text">Welcome back <?php echo $this->session->userdata("nama_lengkap"); ?>!</h3>
                        <p class="white-text op-7 m-b-20">Success is not a destination, its a Journey!!!</p>
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
                                        <p class="m-b-5"><span class="white-text op-6">Total <span class="right">$250</span></span></p>
                                        <p><span class="white-text op-6">Validasi <span class="right">$158</span></span></p>

                                    </div>
                                    <div id="revenue" style="height:75px; width:100%;"></div>
                                </div>
                            </div>
                            <div class="col s12 m6 l6">
                                <div class="card primary-gradient card-hover">
                                    <div class="card-content">
                                        <h5 class="card-title white-text">Surat Ukur</h5>
                                        <p class="m-b-5"><span class="white-text op-6">Total <span class="right">1255</span></span></p>
                                        <p><span class="white-text op-6">Validasi <span class="right">1470</span></span></p>
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
                                        <ul class="m-t-15">
                                            <li>
                                                <div class="d-flex no-block align-items-center">
                                                    <div>
                                                        <span class="m-b-0 white-text op-6">Telah Jatuh Tempo</span>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <span class="m-b-0 white-text">26</span>
                                                    </div>
                                                </div>
                                                <div class="progress m-t-10" style="background-color: rgba(0,0,0,.1);">
                                                    <div class="determinate white" style="width: 26%"></div>
                                                </div>
                                            </li>
                                            <li class="m-t-25">
                                                <div class="d-flex no-block align-items-center">
                                                    <div>
                                                        <span class="m-b-0 white-text op-6">Menuju Keterlambatan</span>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <span class="m-b-0 white-text">15</span>
                                                    </div>
                                                </div>
                                                <div class="progress m-t-10" style="background-color: rgba(0,0,0,.1);">
                                                    <div class="determinate white" style="width: 15%"></div>
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
                                        <p class="m-b-5"><span class="white-text op-6">Total <span class="right">88%</span></span></p>
                                        <p><span class="white-text op-6">Validasi <span class="right">75%</span></span></p>
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
                                <!-- title -->
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="card-title">Data Keterlambatan Pengembalian</h5>
                                        <h6 class="card-subtitle">3 Hari Sebelum Keterlambatan atau Melebihi Batas Pengembalian</h6>
                                    </div>

                                </div>
                                <!-- title -->
                                <div class="table-responsive">
                                    <table class="">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Tanggal Peminjaman</th>
                                                <th>Durasi Peminjaman</th>
                                                <th>Keterlambatan</th>
                                                <th>Detail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                  1
                                                </td>
                                                <td>
                                                    <div class="d-flex no-block align-items-center">
                                                        <div class="">
                                                            <h5 class="m-b-0 font-16 font-medium">Hariririski</h5><span>NIP. 199509252019031002</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>22 Januari 2021</td>
                                                <td>5 Hari</td>
                                                <td>5 Hari</td>
                                                <td><a class="waves-effect waves-light btn orange">Detail</a></td>
                                            </tr>
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
                                <h4 class="card-title">Pie Chart</h4>
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
                                <h4 class="card-title">Bar Chart Horizontal</h4>
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
                <div class="row">
                    <!-- Column -->
                    <div class="col l4">
                        <div class="card">
                            <img class="card-img-top responsive-img" src="assets/images/big/img4.jpg" alt="Card image cap">
                            <div class="card-content">
                                <div class="d-flex no-block align-items-center m-b-15">
                                    <span><i class="ti-calendar"></i> 20 May 2018</span>
                                    <div class="ml-auto">
                                        <a href="javascript:void(0)" class="link"><i class="ti-comments"></i> 3 Comments</a>
                                    </div>
                                </div>
                                <h5>Featured Hydroflora Pots Garden &amp; Outdoors</h5>
                                <p class="m-b-0 m-t-10">Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.</p>
                                <button class="waves-effect waves-light btn btn-round indigo m-t-20">Read more</button>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col l4">
                        <div class="card">
                            <img class="card-img-top responsive-img" src="assets/images/big/img5.jpg" alt="Card image cap">
                            <div class="card-content">
                                <div class="d-flex no-block align-items-center m-b-15">
                                    <span><i class="ti-calendar"></i> 19 May 2018</span>
                                    <div class="ml-auto">
                                        <a href="javascript:void(0)" class="link"><i class="ti-comments"></i> 5 Comments</a>
                                    </div>
                                </div>
                                <h5>Featured Hydroflora Pots Garden &amp; Outdoors</h5>
                                <p class="m-b-0 m-t-10">Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.</p>
                                <button class="waves-effect waves-light btn btn-round indigo m-t-20">Read more</button>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col l4">
                        <div class="card">
                            <img class="card-img-top responsive-img" src="assets/images/big/img6.jpg" alt="Card image cap">
                            <div class="card-content">
                                <div class="d-flex no-block align-items-center m-b-15">
                                    <span><i class="ti-calendar"></i> 29 May 2018</span>
                                    <div class="ml-auto">
                                        <a href="javascript:void(0)" class="link"><i class="ti-comments"></i> 6 Comments</a>
                                    </div>
                                </div>
                                <h5>Featured Hydroflora Pots Garden &amp; Outdoors</h5>
                                <p class="m-b-0 m-t-10">Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.</p>
                                <button class="waves-effect waves-light btn btn-round indigo m-t-20">Read more</button>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
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
    <?php echo $this->load->view('share/home', '', TRUE);?>
</body>

</html>
