<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $this->load->view('share/icon', '', TRUE);?>
    <title>Scan Qr Code</title>
    <link href="dist/css/style2.css" rel="stylesheet">
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
                        <h3 class="white-text">Selamat Datang <?php echo $this->session->userdata("nama_lengkap"); ?>!</h3>
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
                    <div class="col s12 ">
                        <div class="card card-hover">
                            <div class="card-content">
                              <h4 class="card-title">Peminjaman</h4>
                              <div>
                                <div id="qr-reader" style="width:100%"></div>
                                <div id="qr-reader-results"></div>
                              </div>


                            </div>
                        </div>
                    </div>
                    <!-- col -->

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

    <script src="dist/js/html5-qrcode.min.js"></script>
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
                if (decodedText !== lastResult) {
                    ++countResults;
                    lastResult = decodedText;
                    // Handle on success condition with the decoded message.
                    alert(`Scan result ${decodedText}`, decodedResult);
                    location.reload();
                }
            }

            var html5QrcodeScanner = new Html5QrcodeScanner(
                "qr-reader", { fps: 10, qrbox: 250 });
            html5QrcodeScanner.render(onScanSuccess);
        });
    </script>
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

</body>

</html>
