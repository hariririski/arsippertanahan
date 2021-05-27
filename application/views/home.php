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
                                        <p class="m-b-5">
                                          <span class="white-text op-6">
                                            Total
                                            <span class="right">
                                              <?php
                                                foreach($jumlah_buku_tanah as $data){
                                                  echo $data->jumlah_buku_tanah;
                                                }
                                              ?>
                                            </span>
                                          </span>
                                        </p>
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
                              <h5 class="card-title">Data Peminjaman Terlambat</h5>
                              <h6 class="card-subtitle">Menapilkan Data dari H-3 keterlambatan</h6>
                              <div class="table-responsive">
                                  <table class="table striped m-b-20" id="editable-datatable">
                                      <thead>
                                          <tr>
                                              <th>NO</th>
                                              <th>Nama</th>
                                              <th>Tanggal Pinjam</th>
                                              <th>Waktu Peminjaman</th>
                                              <th>Keterlambatan</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr id="1" class="gradeX">
                                              <td>Trident</td>
                                              <td>Internet Explorer 4.0 </td>
                                              <td>Win 95+</td>
                                              <td class="center">4</td>
                                              <td class="center">X</td>
                                          </tr>
                                          <tr id="2" class="gradeC">
                                              <td>Trident</td>
                                              <td>Internet Explorer 5.0</td>
                                              <td>Win 95+</td>
                                              <td class="center">5</td>
                                              <td class="center">C</td>
                                          </tr>
                                          <tr id="3" class="gradeA">
                                              <td>Trident</td>
                                              <td>Internet Explorer 5.5</td>
                                              <td>Win 95+</td>
                                              <td class="center">5.5</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="4" class="gradeA">
                                              <td>Trident</td>
                                              <td>Internet Explorer 6</td>
                                              <td>Win 98+</td>
                                              <td class="center">6</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="5" class="gradeA">
                                              <td>Trident</td>
                                              <td>Internet Explorer 7</td>
                                              <td>Win XP SP2+</td>
                                              <td class="center">7</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="6" class="gradeA">
                                              <td>Trident</td>
                                              <td>AOL browser (AOL desktop)</td>
                                              <td>Win XP</td>
                                              <td class="center">6</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="7" class="gradeA">
                                              <td>Gecko</td>
                                              <td>Firefox 1.0</td>
                                              <td>Win 98+ / OSX.2+</td>
                                              <td class="center">1.7</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="8" class="gradeA">
                                              <td>Gecko</td>
                                              <td>Firefox 1.5</td>
                                              <td>Win 98+ / OSX.2+</td>
                                              <td class="center">1.8</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="9" class="gradeA">
                                              <td>Gecko</td>
                                              <td>Firefox 2.0</td>
                                              <td>Win 98+ / OSX.2+</td>
                                              <td class="center">1.8</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="10" class="gradeA">
                                              <td>Gecko</td>
                                              <td>Firefox 3.0</td>
                                              <td>Win 2k+ / OSX.3+</td>
                                              <td class="center">1.9</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="11" class="gradeA">
                                              <td>Gecko</td>
                                              <td>Camino 1.0</td>
                                              <td>OSX.2+</td>
                                              <td class="center">1.8</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="12" class="gradeA">
                                              <td>Gecko</td>
                                              <td>Camino 1.5</td>
                                              <td>OSX.3+</td>
                                              <td class="center">1.8</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="13" class="gradeA">
                                              <td>Gecko</td>
                                              <td>Netscape 7.2</td>
                                              <td>Win 95+ / Mac OS 8.6-9.2</td>
                                              <td class="center">1.7</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="14" class="gradeA">
                                              <td>Gecko</td>
                                              <td>Netscape Browser 8</td>
                                              <td>Win 98SE+</td>
                                              <td class="center">1.7</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="15" class="gradeA">
                                              <td>Gecko</td>
                                              <td>Netscape Navigator 9</td>
                                              <td>Win 98+ / OSX.2+</td>
                                              <td class="center">1.8</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="16" class="gradeA">
                                              <td>Gecko</td>
                                              <td>Mozilla 1.0</td>
                                              <td>Win 95+ / OSX.1+</td>
                                              <td class="center">1</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="17" class="gradeA">
                                              <td>Gecko</td>
                                              <td>Mozilla 1.1</td>
                                              <td>Win 95+ / OSX.1+</td>
                                              <td class="center">1.1</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="18" class="gradeA">
                                              <td>Gecko</td>
                                              <td>Mozilla 1.2</td>
                                              <td>Win 95+ / OSX.1+</td>
                                              <td class="center">1.2</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="19" class="gradeA">
                                              <td>Gecko</td>
                                              <td>Mozilla 1.3</td>
                                              <td>Win 95+ / OSX.1+</td>
                                              <td class="center">1.3</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="20" class="gradeA">
                                              <td>Gecko</td>
                                              <td>Mozilla 1.4</td>
                                              <td>Win 95+ / OSX.1+</td>
                                              <td class="center">1.4</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="21" class="gradeA">
                                              <td>Gecko</td>
                                              <td>Mozilla 1.5</td>
                                              <td>Win 95+ / OSX.1+</td>
                                              <td class="center">1.5</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="22" class="gradeA">
                                              <td>Gecko</td>
                                              <td>Mozilla 1.6</td>
                                              <td>Win 95+ / OSX.1+</td>
                                              <td class="center">1.6</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="23" class="gradeA">
                                              <td>Gecko</td>
                                              <td>Mozilla 1.7</td>
                                              <td>Win 98+ / OSX.1+</td>
                                              <td class="center">1.7</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="24" class="gradeA">
                                              <td>Gecko</td>
                                              <td>Mozilla 1.8</td>
                                              <td>Win 98+ / OSX.1+</td>
                                              <td class="center">1.8</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="25" class="gradeA">
                                              <td>Gecko</td>
                                              <td>Seamonkey 1.1</td>
                                              <td>Win 98+ / OSX.2+</td>
                                              <td class="center">1.8</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="26" class="gradeA">
                                              <td>Gecko</td>
                                              <td>Epiphany 2.20</td>
                                              <td>Gnome</td>
                                              <td class="center">1.8</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="27" class="gradeA">
                                              <td>Webkit</td>
                                              <td>Safari 1.2</td>
                                              <td>OSX.3</td>
                                              <td class="center">125.5</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="28" class="gradeA">
                                              <td>Webkit</td>
                                              <td>Safari 1.3</td>
                                              <td>OSX.3</td>
                                              <td class="center">312.8</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="29" class="gradeA">
                                              <td>Webkit</td>
                                              <td>Safari 2.0</td>
                                              <td>OSX.4+</td>
                                              <td class="center">419.3</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="30" class="gradeA">
                                              <td>Webkit</td>
                                              <td>Safari 3.0</td>
                                              <td>OSX.4+</td>
                                              <td class="center">522.1</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="31" class="gradeA">
                                              <td>Webkit</td>
                                              <td>OmniWeb 5.5</td>
                                              <td>OSX.4+</td>
                                              <td class="center">420</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="32" class="gradeA">
                                              <td>Webkit</td>
                                              <td>iPod Touch / iPhone</td>
                                              <td>iPod</td>
                                              <td class="center">420.1</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="33" class="gradeA">
                                              <td>Webkit</td>
                                              <td>S60</td>
                                              <td>S60</td>
                                              <td class="center">413</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="34" class="gradeA">
                                              <td>Presto</td>
                                              <td>Opera 7.0</td>
                                              <td>Win 95+ / OSX.1+</td>
                                              <td class="center">-</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="35" class="gradeA">
                                              <td>Presto</td>
                                              <td>Opera 7.5</td>
                                              <td>Win 95+ / OSX.2+</td>
                                              <td class="center">-</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="36" class="gradeA">
                                              <td>Presto</td>
                                              <td>Opera 8.0</td>
                                              <td>Win 95+ / OSX.2+</td>
                                              <td class="center">-</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="37" class="gradeA">
                                              <td>Presto</td>
                                              <td>Opera 8.5</td>
                                              <td>Win 95+ / OSX.2+</td>
                                              <td class="center">-</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="38" class="gradeA">
                                              <td>Presto</td>
                                              <td>Opera 9.0</td>
                                              <td>Win 95+ / OSX.3+</td>
                                              <td class="center">-</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="39" class="gradeA">
                                              <td>Presto</td>
                                              <td>Opera 9.2</td>
                                              <td>Win 88+ / OSX.3+</td>
                                              <td class="center">-</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="40" class="gradeA">
                                              <td>Presto</td>
                                              <td>Opera 9.5</td>
                                              <td>Win 88+ / OSX.3+</td>
                                              <td class="center">-</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="41" class="gradeA">
                                              <td>Presto</td>
                                              <td>Opera for Wii</td>
                                              <td>Wii</td>
                                              <td class="center">-</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="42" class="gradeA">
                                              <td>Presto</td>
                                              <td>Nokia N800</td>
                                              <td>N800</td>
                                              <td class="center">-</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="43" class="gradeA">
                                              <td>Presto</td>
                                              <td>Nintendo DS browser</td>
                                              <td>Nintendo DS</td>
                                              <td class="center">8.5</td>
                                              <td class="center">C/A<sup>1</sup></td>
                                          </tr>
                                          <tr id="44" class="gradeC">
                                              <td>KHTML</td>
                                              <td>Konqureror 3.1</td>
                                              <td>KDE 3.1</td>
                                              <td class="center">3.1</td>
                                              <td class="center">C</td>
                                          </tr>
                                          <tr id="45" class="gradeA">
                                              <td>KHTML</td>
                                              <td>Konqureror 3.3</td>
                                              <td>KDE 3.3</td>
                                              <td class="center">3.3</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="46" class="gradeA">
                                              <td>KHTML</td>
                                              <td>Konqureror 3.5</td>
                                              <td>KDE 3.5</td>
                                              <td class="center">3.5</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="47" class="gradeX">
                                              <td>Tasman</td>
                                              <td>Internet Explorer 4.5</td>
                                              <td>Mac OS 8-9</td>
                                              <td class="center">-</td>
                                              <td class="center">X</td>
                                          </tr>
                                          <tr id="48" class="gradeC">
                                              <td>Tasman</td>
                                              <td>Internet Explorer 5.1</td>
                                              <td>Mac OS 7.6-9</td>
                                              <td class="center">1</td>
                                              <td class="center">C</td>
                                          </tr>
                                          <tr id="49" class="gradeC">
                                              <td>Tasman</td>
                                              <td>Internet Explorer 5.2</td>
                                              <td>Mac OS 8-X</td>
                                              <td class="center">1</td>
                                              <td class="center">C</td>
                                          </tr>
                                          <tr id="50" class="gradeA">
                                              <td>Misc</td>
                                              <td>NetFront 3.1</td>
                                              <td>Embedded devices</td>
                                              <td class="center">-</td>
                                              <td class="center">C</td>
                                          </tr>
                                          <tr id="51" class="gradeA">
                                              <td>Misc</td>
                                              <td>NetFront 3.4</td>
                                              <td>Embedded devices</td>
                                              <td class="center">-</td>
                                              <td class="center">A</td>
                                          </tr>
                                          <tr id="52" class="gradeX">
                                              <td>Misc</td>
                                              <td>Dillo 0.8</td>
                                              <td>Embedded devices</td>
                                              <td class="center">-</td>
                                              <td class="center">X</td>
                                          </tr>
                                          <tr id="53" class="gradeX">
                                              <td>Misc</td>
                                              <td>Links</td>
                                              <td>Text only</td>
                                              <td class="center">-</td>
                                              <td class="center">X</td>
                                          </tr>
                                          <tr id="54" class="gradeX">
                                              <td>Misc</td>
                                              <td>Lynx</td>
                                              <td>Text only</td>
                                              <td class="center">-</td>
                                              <td class="center">X</td>
                                          </tr>
                                          <tr id="55" class="gradeC">
                                              <td>Misc</td>
                                              <td>IE Mobile</td>
                                              <td>Windows Mobile 6</td>
                                              <td class="center">-</td>
                                              <td class="center">C</td>
                                          </tr>
                                          <tr id="56" class="gradeC">
                                              <td>Misc</td>
                                              <td>PSP browser</td>
                                              <td>PSP</td>
                                              <td class="center">-</td>
                                              <td class="center">C</td>
                                          </tr>
                                          <tr id="57" class="gradeU">
                                              <td>Other browsers</td>
                                              <td>All others</td>
                                              <td>-</td>
                                              <td class="center">-</td>
                                              <td class="center">U</td>
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
    <script src="assets/extra-libs/jquery-datatables-editable/jquery.dataTables.js"></script>
    <script src="assets/extra-libs/tiny-editable/mindmup-editabletable.js"></script>
    <script src="assets/extra-libs/tiny-editable/numeric-input-example.js"></script>
    <script>
    $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
    $('#editable-datatable').editableTableWidget().numericInputExample().find('td:first').focus();
    $(function() {
        $('#editable-datatable').DataTable();
    });
    </script>
    <?php echo $this->load->view('share/home', '', TRUE);?>
</body>

</html>
