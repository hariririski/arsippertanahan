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
                        <video id="preview" style="width:100%"></video>
                    </div>
                </div>
            </div>

          <?php echo $this->load->view('share/footer', '', TRUE);?>
        </div>

    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/instascan.min.js"></script>
    <script type="text/javascript">
      let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
      scanner.addListener('scan', function (content) {
    	alert(content);
      });
      Instascan.Camera.getCameras().then(function (cameras) {
    	if (cameras.length > 0) {
    	  scanner.start(cameras[2]);
    	} else {
    	  alert.error('No cameras found.');
    	}
      }).catch(function (e) {
    	alert.error(e);
      });
    </script>


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

    <script src="assets/libs/gaugeJS/dist/gauge.min.js"></script>
    <script src="assets/extra-libs/c3/d3.min.js"></script>
    <script src="assets/extra-libs/c3/c3.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>




</body>

</html>
