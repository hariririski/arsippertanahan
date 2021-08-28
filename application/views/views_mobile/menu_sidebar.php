
<div class="menu-size" style="width:230px;">

  <div class="pt-3">
    <div class="page-title sidebar-title d-flex">
      <div class="align-self-center me-auto">
        <p class="color-highlight"></p>
        <h4><?php echo $this->session->userdata("nama_lengkap"); ?></h4>
      </div>
      <div class="align-self-center ms-auto">
        <a href="#"
        data-bs-toggle="dropdown"
        class="icon gradient-blue shadow-bg shadow-bg-s rounded-m">
        <img src="<?php echo base_url(); ?><?php echo $this->session->userdata("image"); ?>" width="45" class="rounded-m" alt="img">
      </a>

      <div class="dropdown-menu">
        <div class="card card-style shadow-m mt-1 me-1">
          <div class="list-group list-custom list-group-s list-group-flush rounded-xs px-3 py-1">
            <a href="page-wallet.html" class="list-group-item">
              <i class="has-bg gradient-green shadow-bg shadow-bg-xs color-white rounded-xs bi bi-credit-card"></i>
              <strong class="font-13">Wallet</strong>
            </a>
            <a href="page-activity.html" class="list-group-item">
              <i class="has-bg gradient-blue shadow-bg shadow-bg-xs color-white rounded-xs bi bi-graph-up"></i>
              <strong class="font-13">Activity</strong>
            </a>
            <a href="page-profile.html" class="list-group-item">
              <i class="has-bg gradient-yellow shadow-bg shadow-bg-xs color-white rounded-xs bi bi-person-circle"></i>
              <strong class="font-13">Account</strong>
            </a>
            <a href="page-signin-1.html" class="list-group-item">
              <i class="has-bg gradient-red shadow-bg shadow-bg-xs color-white rounded-xs bi bi-power"></i>
              <strong class="font-13">Log Out</strong>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="divider divider-margins mb-3 opacity-50"></div>

  <div class="list-group list-custom list-menu-large">
    <a href="index-waves.html" id="nav-welcome" class="list-group-item">
      <i class="bi bg-red-dark shadow-bg shadow-bg-xs bi-heart-fill"></i>
      <div>Welcome</div>
      <i class="bi bi-chevron-right"></i>
    </a>
    <a href="pages.html" id="nav-pages" class="list-group-item">
      <i class="bi bg-green-dark shadow-bg shadow-bg-xs bi-star-fill"></i>
      <div>Page Packs</div>
      <i class="bi bi-chevron-right"></i>
    </a>
    <a href="#" id="nav-homes" data-submenu="sub1" class="list-group-item">
      <i class="bi bg-blue-dark shadow-bg shadow-bg-xs bi-house-fill"></i>
      <div>Home Styles</div>
      <i class="bi bi-plus font-18"></i>
    </a>
    <div class="list-submenu" id="sub1">
      <a href="index-waves.html" id="nav-waves" class="list-group-item">
        <div class="ps-4">Waves</div>
        <i class="bi bi-chevron-right"></i>
      </a>
      <a href="index.html" id="nav-classic" class="list-group-item">
        <div class="ps-4">Classic</div>
        <i class="bi bi-chevron-right"></i>
      </a>
    </div>
    <a href="components.html" id="nav-comps" class="list-group-item">
      <i class="bi bg-brown-dark shadow-bg shadow-bg-xs bi-gear-wide-connected"></i>
      <div>Components</div>
      <i class="bi bi-chevron-right"></i>
    </a>
    <a data-bs-toggle="offcanvas" data-bs-target="#menu-highlights" href="#" class="list-group-item">
      <i class="bi bg-magenta-dark shadow-bg shadow-bg-xs bi-droplet"></i>
      <div>Color Theme</div>
      <i class="bi bi-chevron-right"></i>
    </a>
    <a href="#" class="list-group-item" data-toggle-theme data-trigger-switch="switch-1">
      <i class="bi bg-yellow-dark shadow-bg shadow-bg-xs bi-lightbulb-fill"></i>
      <div>Dark Mode</div>
      <div class="form-switch ios-switch switch-green switch-s me-2">
        <input type="checkbox" data-toggle-theme class="ios-input" id="switch-1">
        <label class="custom-control-label" for="switch-1"></label>
      </div>
    </a>
  </div>
  <div class="divider divider-margins mb-3 opacity-50"></div>


  <p class="px-3 font-9 opacity-30 color-theme mt-n3">Copyright <span class="copyright-year"></span>.</i>Kantah Kota Banda Aceh</p>
</div>
</div>
