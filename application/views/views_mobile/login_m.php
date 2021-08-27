<!DOCTYPE HTML>
<html lang="en">
<head>
  <?php echo $this->load->view('views_mobile/share/header', '', TRUE);?>
  <body class="theme-light">
    <div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>

    <div id="page">

      <div class="page-content my-0 py-0">
        <div class="card bg-5 card-fixed">
          <div class="card-center mx-3 px-4 py-4 bg-white rounded-m">
            <h1 class="font-30 font-800 mb-0">Manajemen Arsip Pertanahan</h1>
            <p></p>
            <form class="col s12" method="post" action="<?php echo base_url(); ?>Login/proses_login">
            <div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
              <i class="bi bi-person-circle font-13"></i>
              <input name ="username"type="text" class="form-control rounded-xs" id="c1" placeholder="Username" required>
              <label for="c1" class="color-theme">Username</label>
              <span>(required)</span>
            </div>
            <div class="form-custom form-label form-border form-icon mb-4 bg-transparent">
              <i class="bi bi-asterisk font-13"></i>
              <input type="password" class="form-control rounded-xs" id="c2" placeholder="Password" name="password" required>
              <label for="c2" class="color-theme">Password</label>
              <span>(required)</span>
            </div>

            <button type="submit" class="btn btn-full gradient-highlight shadow-bg shadow-bg-s mt-4">Masuk</button>
          </form>
          </div>
          <div class="card-overlay rounded-0 m-0 bg-black opacity-70"></div>
        </div>
      </div>



    </div>

    <?php echo $this->load->view('views_mobile/share/footer', '', TRUE);?>
  </body>
  </html>
