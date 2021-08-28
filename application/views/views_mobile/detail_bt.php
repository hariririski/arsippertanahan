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
              <h1 class="color-theme mb-0 font-18">Invoice Sample</h1>
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
            <div class="d-flex">
              <div class="mt-1">
                <p class="color-highlight font-600 mb-n1">Palo Alto, California</p>
                <h1 class="mb-0">Enabled Labs</h1>
              </div>
              <div class="ms-auto">
                <img src="../assets_m/images/pictures/31s-1.jpg" width="60" class="rounded-m shadow-xl">
              </div>
            </div>
            <div class="row mb-3 mt-4">
              <h5 class="col-4 text-start font-15">Invoice</h5>
              <h5 class="col-8 text-end font-14 opacity-60 font-400">#13241</h5>
              <h5 class="col-4 text-start font-15">Status</h5>
              <h5 class="col-8 text-end font-14 font-400"><span class="bg-green-dark px-2 rounded-s">Paid</span></h5>
              <h5 class="col-4 text-start font-15">Bill To</h5>
              <h5 class="col-8 text-end font-14 opacity-60 font-400">John Doe</h5>
              <h5 class="col-4 text-start font-15">Date</h5>
              <h5 class="col-8 text-end font-14 opacity-60 font-400">15th June 2025</h5>
              <h5 class="col-4 text-start font-15">Company</h5>
              <h5 class="col-8 text-end font-14 opacity-60 font-400">Enabled Labs</h5>
              <h5 class="col-4 text-start font-15">Address</h5>
              <h5 class="col-8 text-end font-14 opacity-60 font-400 ">PO Box 13451 Palo Alto Street California, Flat 1235</h5>
            </div>
            <div class="divider"></div>
            <div class="d-flex mb-4">
              <div>
                <img src="../assets_m/images/pictures/14s.jpg" width="110" class="rounded-s shadow-xl">
              </div>
              <div class="ps-3 w-100">
                <h1 class="mb-0">$2.150 </h1>
                <p class="mb-0 color-highlight font-11">7x Item</p>
                <h5 class="font-500 font-14 pt-1">Your awesome product or service name goes here</h5>
              </div>
            </div>
            <div class="d-flex mb-4">
              <div>
                <img src="../assets_m/images/pictures/7s.jpg" width="110" class="rounded-s shadow-xl">
              </div>
              <div class="ps-3 w-100">
                <h1 class="mb-0">$1.150 </h1>
                <p class="mb-0 color-highlight font-11">12x Item</p>
                <h5 class="font-500 font-14 pt-1">Your awesome product or service name goes here</h5>
              </div>
            </div>
            <div class="divider mt-4"></div>
            <div class="d-flex mb-0">
              <div><h5 class="opacity-50 font-500">Taxes</h5></div>
              <div class="ms-auto"><h5>$30 </h5></div>
            </div>
            <div class="d-flex mb-3">
              <div><h5 class="opacity-50 font-500">Shipping</h5></div>
              <div class="ms-auto"><h5>$20 </h5></div>
            </div>
            <div class="d-flex mb-3">
              <div><h3 class="font-700">Grand Total</h3></div>
              <div class="ms-auto"><h3>$3.500 </h3></div>
            </div>
            <div class="divider"></div>
            <a href="#" class="btn btn-full btn-l rounded-s font-800 text-uppercase gradient-highlight shadow-bg shadow-bg-m">Download Invoice in PDF</a>
          </div>
        </div>
      </div>

    <?php echo $this->load->view('views_mobile/share/menu', '', TRUE);?>
    </div>
    <?php echo $this->load->view('views_mobile/share/footer', '', TRUE);?>
    <?php echo $this->load->view('views_mobile/share/scan', '', TRUE);?>
  </body></html>
