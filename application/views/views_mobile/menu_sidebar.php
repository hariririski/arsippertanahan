
<div class="menu-size" style="width:230px;">

  <div class="pt-3">
    <div class="page-title sidebar-title d-flex">
      <div class="align-self-center me-auto">
        <p class="color-highlight"></p>
        <h4><?php echo $this->session->userdata("nama_lengkap"); ?></h4>
      </div>
      <div class="align-self-center ms-auto">
        <a href="#"
        class="icon gradient-blue shadow-bg shadow-bg-s rounded-m">
        <img src="<?php echo base_url(); ?><?php echo $this->session->userdata("image"); ?>" width="45" class="rounded-m" alt="img">
      </a>
    </div>
  </div>
  <div class="divider divider-margins mb-3 opacity-50"></div>

  <div class="list-group list-custom list-menu-large">
    <a href="<?php echo base_url(); ?>home" id="nav-welcome" class="list-group-item">
      <i class="bi bg-red-dark shadow-bg shadow-bg-xs bi bi-house-fill"></i>
      <div>Home Deskop</div>
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
