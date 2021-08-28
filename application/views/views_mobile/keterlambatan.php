<!DOCTYPE HTML>
<html lang="en">
<head>
  <?php echo $this->load->view('views_mobile/share/header', '', TRUE);?>
  <body class="theme-light">
    <div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>

    <div id="page">

      <?php echo $this->load->view('views_mobile/share/menu_bawah', '', TRUE);?>

        <div class="page-content footer-clear">

        <?php echo $this->load->view('views_mobile/share/menu_profil', '', TRUE);?>

          <div class="card card-style">
            <div class="content">
              <div class="tabs tabs-pill" id="tab-group-2">
                <div class="tab-controls rounded-m p-1 overflow-visible">
                  <a class="font-13 rounded-m shadow-bg shadow-bg-s" data-bs-toggle="collapse" href="#tab-4" aria-expanded="true">Terlambat</a>
                  <a class="font-13 rounded-m shadow-bg shadow-bg-s" data-bs-toggle="collapse" href="#tab-5" aria-expanded="false">-3 Terlambat</a>
                  <a class="font-13 rounded-m shadow-bg shadow-bg-s" data-bs-toggle="collapse" href="#tab-6" aria-expanded="false">-10 Terlambat</a>
                </div>
                <div class="mt-3"></div>

                <div class="collapse show" id="tab-4" data-bs-parent="#tab-group-2">
                  <a href="#" class="d-flex py-1" data-bs-toggle="offcanvas" data-bs-target="#menu-activity-1">
                    <div class="align-self-center">
                      <span class="icon gradient-red me-2 shadow-bg shadow-bg-s rounded-s">
                        <img src="../assets_m/images/pictures/6s.jpg" width="45" class="rounded-s" alt="img">
                      </span>
                    </div>
                    <div class="align-self-center ps-1">
                      <h5 class="pt-1 mb-n1">Karla Black</h5>
                      <p class="mb-0 font-11 opacity-70">12th March <span class="copyright-year"></span></p>
                    </div>
                    <div class="align-self-center ms-auto text-end">
                      <h4 class="pt-1 mb-n1 color-green-dark">$150.55</h4>
                      <p class="mb-0 font-11"> Received</p>
                    </div>
                  </a>
                  <div class="divider my-2 opacity-50"></div>
                  <a href="#" class="d-flex py-1" data-bs-toggle="offcanvas" data-bs-target="#menu-activity-2">
                    <div class="align-self-center">
                      <span class="icon rounded-s me-2 gradient-brown shadow-bg shadow-bg-xs"><i class="bi bi-wallet color-white"></i></span>
                    </div>
                    <div class="align-self-center ps-1">
                      <h5 class="pt-1 mb-n1">Withdrawal</h5>
                      <p class="mb-0 font-11 opacity-70">12th March <span class="copyright-year"></span></p>
                    </div>
                    <div class="align-self-center ms-auto text-end">
                      <h4 class="pt-1 mb-n1 color-blue-dark">$345.31</h4>
                      <p class="mb-0 font-11">Main Account</p>
                    </div>
                  </a>
                  <div class="divider my-2 opacity-50"></div>
                  <a href="#" class="d-flex py-1" data-bs-toggle="offcanvas" data-bs-target="#menu-activity-3">
                    <div class="align-self-center">
                      <span class="icon rounded-s me-2 gradient-orange shadow-bg shadow-bg-xs"><i class="bi bi-google color-white"></i></span>
                    </div>
                    <div class="align-self-center ps-1">
                      <h5 class="pt-1 mb-n1">Google Ads</h5>
                      <p class="mb-0 font-11 opacity-70">14th March <span class="copyright-year"></span></p>
                    </div>
                    <div class="align-self-center ms-auto text-end">
                      <h4 class="pt-1 mb-n1 color-red-dark">$324.55</h4>
                      <p class="mb-0 font-11">Bill Payment</p>
                    </div>
                  </a>
                  <div class="divider my-2 opacity-50"></div>
                  <a href="#" class="d-flex py-1" data-bs-toggle="offcanvas" data-bs-target="#menu-activity-4">
                    <div class="align-self-center">
                      <span class="icon rounded-s me-2 gradient-green shadow-bg shadow-bg-xs"><i class="bi bi-person-circle font-18 color-white"></i></span>
                    </div>
                    <div class="align-self-center ps-1">
                      <h5 class="pt-1 mb-n1">Karla Black</h5>
                      <p class="mb-0 font-11 opacity-70">Awaiting Approval</p>
                    </div>
                    <div class="align-self-center ms-auto text-end">
                      <span class="btn btn-xxs gradient-green shadow-bg shadow-bg-xs">Details</span>
                    </div>
                  </a>
                  <div class="divider my-2 opacity-50"></div>
                  <a href="#" class="d-flex py-1" data-bs-toggle="offcanvas" data-bs-target="#menu-activity-5">
                    <div class="align-self-center">
                      <span class="icon rounded-s me-2 gradient-blue shadow-bg shadow-bg-xs"><i class="bi bi-lock-fill font-18 color-white"></i></span>
                    </div>
                    <div class="align-self-center ps-1">
                      <h5 class="pt-1 mb-n1">Verification</h5>
                      <p class="mb-0 font-11 opacity-70">Action Required</p>
                    </div>
                    <div class="align-self-center ms-auto text-end">
                      <span class="btn btn-xxs gradient-blue shadow-bg shadow-bg-xs">Verify</span>
                    </div>
                  </a>
                </div>

                <div class="collapse" id="tab-5" data-bs-parent="#tab-group-2">
                  <a href="#" class="d-flex py-1" data-bs-toggle="offcanvas" data-bs-target="#menu-activity-1">
                    <div class="align-self-center">
                      <span class="icon gradient-yellow me-2 shadow-bg shadow-bg-xs rounded-s">
                        <img src="../assets_m/images/pictures/21s.jpg" width="45" class="rounded-s" alt="img"></span>
                      </div>
                      <div class="align-self-center ps-1">
                        <h5 class="pt-1 mb-n1">Jane Doe</h5>
                        <p class="mb-0 font-11 opacity-70">12th March <span class="copyright-year"></span></p>
                      </div>
                      <div class="align-self-center ms-auto text-end">
                        <h4 class="pt-1 mb-n1 color-red-dark">$250.00</h4>
                        <p class="mb-0 font-11">Transfered</p>
                      </div>
                    </a>
                    <div class="divider my-2 opacity-50"></div>
                    <a href="#" class="d-flex py-1" data-bs-toggle="offcanvas" data-bs-target="#menu-activity-1">
                      <div class="align-self-center">
                        <span class="icon gradient-red me-2 shadow-bg shadow-bg-s rounded-s">
                          <img src="../assets_m/images/pictures/6s.jpg" width="45" class="rounded-s" alt="img"></span>
                        </div>
                        <div class="align-self-center ps-1">
                          <h5 class="pt-1 mb-n1">Karla Black</h5>
                          <p class="mb-0 font-11 opacity-70">12th March <span class="copyright-year"></span></p>
                        </div>
                        <div class="align-self-center ms-auto text-end">
                          <h4 class="pt-1 mb-n1 color-green-dark">$150.55</h4>
                          <p class="mb-0 font-11"> Received</p>
                        </div>
                      </a>
                      <div class="divider my-2 opacity-50"></div>
                      <a href="#" class="d-flex py-1" data-bs-toggle="offcanvas" data-bs-target="#menu-activity-2">
                        <div class="align-self-center">
                          <span class="icon rounded-s me-2 gradient-brown shadow-bg shadow-bg-xs"><i class="bi bi-wallet color-white"></i></span>
                        </div>
                        <div class="align-self-center ps-1">
                          <h5 class="pt-1 mb-n1">Withdrawal</h5>
                          <p class="mb-0 font-11 opacity-70">12th March <span class="copyright-year"></span></p>
                        </div>
                        <div class="align-self-center ms-auto text-end">
                          <h4 class="pt-1 mb-n1 color-blue-dark">$345.31</h4>
                          <p class="mb-0 font-11">Main Account</p>
                        </div>
                      </a>
                      <div class="divider my-2 opacity-50"></div>
                      <a href="#" class="d-flex py-1" data-bs-toggle="offcanvas" data-bs-target="#menu-activity-4">
                        <div class="align-self-center">
                          <span class="icon rounded-s me-2 gradient-green shadow-bg shadow-bg-xs"><i class="bi bi-person-circle font-18 color-white"></i></span>
                        </div>
                        <div class="align-self-center ps-1">
                          <h5 class="pt-1 mb-n1">Karla Black</h5>
                          <p class="mb-0 font-11 opacity-70">Awaiting Approval</p>
                        </div>
                        <div class="align-self-center ms-auto text-end">
                          <span class="btn btn-xxs bg-green-dark shadow-bg shadow-bg-xs">Details</span>
                        </div>
                      </a>
                    </div>

                    <div class="collapse" id="tab-6" data-bs-parent="#tab-group-2">
                      <a href="#" class="d-flex py-1" data-bs-toggle="offcanvas" data-bs-target="#menu-activity-3">
                        <div class="align-self-center">
                          <span class="icon rounded-s me-2 gradient-orange shadow-bg shadow-bg-xs"><i class="bi bi-google color-white"></i></span>
                        </div>
                        <div class="align-self-center ps-1">
                          <h5 class="pt-1 mb-n1">Google Ads</h5>
                          <p class="mb-0 font-11 opacity-70">14th March <span class="copyright-year"></span></p>
                        </div>
                        <div class="align-self-center ms-auto text-end">
                          <h4 class="pt-1 mb-n1 color-red-dark">$324.55</h4>
                          <p class="mb-0 font-11">Bill Payment</p>
                        </div>
                      </a>
                      <div class="divider my-2 opacity-50"></div>
                      <a href="#" class="d-flex py-1" data-bs-toggle="offcanvas" data-bs-target="#menu-activity-4">
                        <div class="align-self-center">
                          <span class="icon rounded-s me-2 gradient-green shadow-bg shadow-bg-xs"><i class="bi bi-caret-up-fill color-white"></i></span>
                        </div>
                        <div class="align-self-center ps-1">
                          <h5 class="pt-1 mb-n1">Bitcoin</h5>
                          <p class="mb-0 font-11 opacity-70">13th March <span class="copyright-year"></span></p>
                        </div>
                        <div class="align-self-center ms-auto text-end">
                          <h4 class="pt-1 mb-n1 color-blue-dark">+0.315%</h4>
                          <p class="mb-0 font-11">Stock Update</p>
                        </div>
                      </a>
                      <div class="divider my-2 opacity-50"></div>
                      <a href="#" class="d-flex py-1" data-bs-toggle="offcanvas" data-bs-target="#menu-activity-2">
                        <div class="align-self-center">
                          <span class="icon rounded-s me-2 gradient-yellow shadow-bg shadow-bg-xs"><i class="bi bi-pie-chart-fill color-white"></i></span>
                        </div>
                        <div class="align-self-center ps-1">
                          <h5 class="pt-1 mb-n1">Dividends</h5>
                          <p class="mb-0 font-11 opacity-70">14th March <span class="copyright-year"></span></p>
                        </div>
                        <div class="align-self-center ms-auto text-end">
                          <h4 class="pt-1 mb-n1 color-green-dark">$950.00</h4>
                          <p class="mb-0 font-11">Wire Transfer</p>
                        </div>
                      </a>
                      <div class="divider my-2 opacity-50"></div>
                      <a href="#" class="d-flex py-1" data-bs-toggle="offcanvas" data-bs-target="#menu-activity-5">
                        <div class="align-self-center">
                          <span class="icon rounded-s me-2 gradient-blue shadow-bg shadow-bg-xs"><i class="bi bi-lock-fill font-18 color-white"></i></span>
                        </div>
                        <div class="align-self-center ps-1">
                          <h5 class="pt-1 mb-n1">Verification</h5>
                          <p class="mb-0 font-11 opacity-70">Action Required</p>
                        </div>
                        <div class="align-self-center ms-auto text-end">
                          <span class="btn btn-xxs gradient-blue shadow-bg shadow-bg-xs">Verify</span>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div id="menu-activity-1" class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">

              <div class="menu-size" style="height:385px;">
                <div class="content">
                  <a href="#" class="d-flex py-1 pb-4">
                    <div class="align-self-center">
                      <span class="icon gradient-red me-2 shadow-bg shadow-bg-s rounded-s">
                        <img src="../assets_m/images/pictures/6s.jpg" width="45" class="rounded-s" alt="img"></span>
                      </div>
                      <div class="align-self-center ps-1">
                        <h5 class="pt-1 mb-n1">Karla Black</h5>
                        <p class="mb-0 font-11 opacity-70">12th March <span class="copyright-year"></span></p>
                      </div>
                      <div class="align-self-center ms-auto text-end">
                        <h4 class="pt-1 font-14 mb-n1 color-green-dark">APPROVED</h4>
                        <p class="mb-0 font-11"> ID-315-6123</p>
                      </div>
                    </a>
                    <div class="row">
                      <strong class="col-5 color-theme">Type</strong>
                      <strong class="col-7 text-end">Incoming</strong>
                      <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                      <strong class="col-5 color-theme">Date</strong>
                      <strong class="col-7 text-end">12th March</strong>
                      <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                      <strong class="col-5 color-theme">Amount</strong>
                      <strong class="col-7 text-end color-highlight">$150.55</strong>
                      <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                      <strong class="col-5 color-theme">Sent Via</strong>
                      <strong class="col-7 text-end">Credit Card</strong>
                      <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                      <strong class="col-5 color-theme">Added To</strong>
                      <strong class="col-7 text-end">Main Account</strong>
                      <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                    </div>
                  </div>
                  <a href="#" data-bs-dismiss="offcanvas" class="mx-3 btn btn-full gradient-highlight shadow-bg shadow-bg-s">Back to Activity</a>
                </div>
              </div>

              <div id="menu-activity-2" class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">

                <div class="menu-size" style="height:385px;">
                  <div class="content">
                    <a href="#" class="d-flex py-1 pb-4">
                      <div class="align-self-center">
                        <span class="icon rounded-s me-2 gradient-brown shadow-bg shadow-bg-xs"><i class="bi bi-wallet color-white"></i></span>
                      </div>
                      <div class="align-self-center ps-1">
                        <h5 class="pt-1 mb-n1">Withdrawal</h5>
                        <p class="mb-0 font-11 opacity-70">12th March <span class="copyright-year"></span></p>
                      </div>
                      <div class="align-self-center ms-auto text-end">
                        <h4 class="pt-1 font-14 mb-n1 color-green-dark">APPROVED</h4>
                        <p class="mb-0 font-11"> ID-315-6123</p>
                      </div>
                    </a>
                    <div class="row">
                      <strong class="col-5 color-theme">Type</strong>
                      <strong class="col-7 text-end">Withdrawal</strong>
                      <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                      <strong class="col-5 color-theme">Date</strong>
                      <strong class="col-7 text-end">12th March</strong>
                      <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                      <strong class="col-5 color-theme">Amount</strong>
                      <strong class="col-7 text-end color-highlight">$345.31</strong>
                      <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                      <strong class="col-5 color-theme">Withdrawn To</strong>
                      <strong class="col-7 text-end">Credit Card</strong>
                      <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                      <strong class="col-5 color-theme">Withdraw From</strong>
                      <strong class="col-7 text-end">Main Account</strong>
                      <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                    </div>
                  </div>
                  <a href="#" data-bs-dismiss="offcanvas" class="mx-3 btn btn-full gradient-highlight shadow-bg shadow-bg-s">Back to Activity</a>
                </div>
              </div>

              <div id="menu-activity-3" class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">

                <div class="menu-size" style="height:385px;">
                  <div class="content">
                    <a href="#" class="d-flex py-1 pb-4">
                      <div class="align-self-center">
                        <span class="icon rounded-s me-2 gradient-orange shadow-bg shadow-bg-xs"><i class="bi bi-google color-white"></i></span>
                      </div>
                      <div class="align-self-center ps-1">
                        <h5 class="pt-1 mb-n1">Google Ads</h5>
                        <p class="mb-0 font-11 opacity-70">14th March <span class="copyright-year"></span></p>
                      </div>
                      <div class="align-self-center ms-auto text-end">
                        <h4 class="pt-1 font-14 mb-n1 color-red-dark">RECEIVED</h4>
                        <p class="mb-0 font-11"> ID-315-6123</p>
                      </div>
                    </a>
                    <div class="row">
                      <strong class="col-5 color-theme">Type</strong>
                      <strong class="col-7 text-end">Payment</strong>
                      <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                      <strong class="col-5 color-theme">Paid To</strong>
                      <strong class="col-7 text-end">GOOGLE LLC LTD</strong>
                      <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                      <strong class="col-5 color-theme">Date</strong>
                      <strong class="col-7 text-end">12th March</strong>
                      <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                      <strong class="col-5 color-theme">Amount</strong>
                      <strong class="col-7 text-end color-highlight">$324.55</strong>
                      <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                      <strong class="col-5 color-theme">Paid From</strong>
                      <strong class="col-7 text-end">Credit Card</strong>
                      <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                    </div>
                  </div>
                  <a href="#" data-bs-dismiss="offcanvas" class="mx-3 btn btn-full gradient-highlight shadow-bg shadow-bg-s">Back to Activity</a>
                </div>
              </div>

              <div id="menu-activity-4" class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">

                <div class="menu-size" style="height:380px;">
                  <div class="content">
                    <a href="#" class="d-flex py-1 pb-4">
                      <div class="align-self-center">
                        <span class="icon rounded-s me-2 gradient-green shadow-bg shadow-bg-xs"><i class="bi bi-person-circle font-18 color-white"></i></span>
                      </div>
                      <div class="align-self-center ps-1">
                        <h5 class="pt-1 mb-n1">Karla Black</h5>
                        <p class="mb-0 font-11 opacity-70">Awaiting Approval</p>
                      </div>
                      <div class="align-self-center ms-auto text-end">
                        <h4 class="pt-1 font-14 mb-n1 color-yellow-dark">PENDING</h4>
                        <p class="mb-0 font-11"> ID-315-6123</p>
                      </div>
                    </a>
                    <div class="row">
                      <strong class="col-5 color-theme">Type</strong>
                      <strong class="col-7 text-end">Transfer</strong>
                      <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                      <strong class="col-5 color-theme">Paid To</strong>
                      <strong class="col-7 text-end">GOOGLE LLC LTD</strong>
                      <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                      <strong class="col-5 color-theme">Date</strong>
                      <strong class="col-7 text-end">12th March</strong>
                      <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                      <strong class="col-5 color-theme">Amount</strong>
                      <strong class="col-7 text-end color-highlight">$324.55</strong>
                      <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                      <strong class="col-5 color-theme">Paid From</strong>
                      <strong class="col-7 text-end">Credit Card</strong>
                      <div class="col-12 mt-2 mb-4"><div class="divider my-0"></div></div>
                      <div class="col-6">
                        <a href="#" data-bs-dismiss="offcanvas" class="btn btn-s btn-full gradient-green shadow-bg shadow-bg-xs">Approve</a>
                      </div>
                      <div class="col-6">
                        <a href="#" data-bs-dismiss="offcanvas" class="btn btn-s btn-full gradient-red shadow-bg shadow-bg-xs">Reject</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div id="menu-activity-5" class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">

                <div class="menu-size" style="height:320px;">
                  <div class="content">
                    <a href="#" class="d-flex py-1 pb-4">
                      <div class="align-self-center">
                        <span class="icon rounded-s me-2 gradient-blue shadow-bg shadow-bg-xs"><i class="bi bi-lock-fill font-18 color-white"></i></span>
                      </div>
                      <div class="align-self-center ps-1">
                        <h5 class="pt-1 mb-n1">Verification</h5>
                        <p class="mb-0 font-11 opacity-70">Action Required</p>
                      </div>
                      <div class="align-self-center ms-auto text-end">
                        <h4 class="pt-1 font-14 mb-n1 color-yellow-dark">PENDING</h4>
                        <p class="mb-0 font-11"> ID-315-6123</p>
                      </div>
                    </a>
                    <div class="form-custom form-label form-icon mt-3">
                      <i class="bi bi-person-circle font-14"></i>
                      <input type="email" class="form-control rounded-xs" id="c32" placeholder="john@domain.com">
                      <label for="c32" class="form-label-always-active color-theme font-11">Account Holder Email</label>
                      <span class="font-10">(required)</span>
                    </div>
                    <div class="form-custom form-label form-icon mt-4">
                      <i class="bi bi-person-circle font-14"></i>
                      <input type="number" class="form-control rounded-xs" id="c321" placeholder="ID-125-5132">
                      <label for="c321" class="form-label-always-active color-theme font-11">Account Holder Security Code</label>
                      <span class="font-10">(required)</span>
                    </div>
                    <div class="row mt-4">
                      <div class="col-6">
                        <a href="#" data-bs-dismiss="offcanvas" class="btn btn-s btn-full gradient-green shadow-bg shadow-bg-xs">Verify</a>
                      </div>
                      <div class="col-6">
                        <a href="#" data-bs-dismiss="offcanvas" class="btn btn-s btn-full gradient-blue shadow-bg shadow-bg-xs">Later</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <?php echo $this->load->view('views_mobile/share/menu', '', TRUE);?>
            <?php echo $this->load->view('views_mobile/share/footer', '', TRUE);?>
            <?php echo $this->load->view('views_mobile/share/scan', '', TRUE);?>
          </body>
          </html>
