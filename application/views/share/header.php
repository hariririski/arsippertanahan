<header class="topbar">
    <!-- ============================================================== -->
    <!-- Navbar scss in header.scss -->
    <!-- ============================================================== -->
    <nav>
        <div class="nav-wrapper">
            <!-- ============================================================== -->
            <!-- Logo you can find that scss in header.scss -->
            <!-- ============================================================== -->
            <a href="javascript:void(0)" class="brand-logo">
                <span class="icon">
                    <img class="light-logo" src="assets/images/logo-light-icon.png">
                    <img class="dark-logo" src="assets/images/logo-icon.png">
                </span>
                <span class="text">
                    <img class="light-logo" src="assets/images/logo-light-text.png">
                    <img class="dark-logo" src="assets/images/logo-text.png">
                </span>
            </a>
            <!-- ============================================================== -->
            <!-- Logo you can find that scss in header.scss -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left topbar icon scss in header.scss -->
            <!-- ============================================================== -->
            <ul class="left">
                <li class="hide-on-med-and-down">
                    <a href="javascript: void(0);" class="nav-toggle">
                        <span class="bars bar1"></span>
                        <span class="bars bar2"></span>
                        <span class="bars bar3"></span>
                    </a>
                </li>
                <li class="hide-on-large-only">
                    <a href="javascript: void(0);" class="sidebar-toggle">
                        <span class="bars bar1"></span>
                        <span class="bars bar2"></span>
                        <span class="bars bar3"></span>
                    </a>
                </li>

            </ul>
            <!-- ============================================================== -->
            <!-- Left topbar icon scss in header.scss -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right topbar icon scss in header.scss -->
            <!-- ============================================================== -->
            <ul class="right">

                <!-- <li><a class="dropdown-trigger" href="javascript: void(0);" data-target="msg_dropdown"><i class="material-icons">comment</i></a>
                    <ul id="msg_dropdown" class="mailbox dropdown-content">
                        <li>
                            <div class="drop-title">You have 4 new messages</div>
                        </li>
                        <li>
                            <div class="message-center">

                                <a href="#">
                                        <span class="user-img">
                                            <img src="assets/images/users/1.jpg" alt="user" class="circle">
                                            <span class="profile-status online pull-right"></span>
                                        </span>
                                        <span class="mail-contnet">
                                            <h5>Chris Evans</h5>
                                            <span class="mail-desc">Just see the my admin!</span>
                                            <span class="time">9:30 AM</span>
                                        </span>
                                    </a>

                                <a href="#">
                                        <span class="user-img">
                                            <img src="assets/images/users/2.jpg" alt="user" class="circle">
                                            <span class="profile-status busy pull-right"></span>
                                        </span>
                                        <span class="mail-contnet">
                                            <h5>Ray Hudson</h5>
                                            <span class="mail-desc">I've sung a song! See you at</span>
                                            <span class="time">9:10 AM</span>
                                        </span>
                                    </a>

                                <a href="#">
                                        <span class="user-img">
                                            <img src="assets/images/users/3.jpg" alt="user" class="circle">
                                            <span class="profile-status away pull-right"></span>
                                        </span>
                                        <span class="mail-contnet">
                                            <h5>Lb James</h5>
                                            <span class="mail-desc">I am a singer!</span>
                                            <span class="time">9:08 AM</span>
                                        </span>
                                    </a>

                                <a href="#">
                                        <span class="user-img">
                                            <img src="assets/images/users/4.jpg" alt="user" class="circle">
                                            <span class="profile-status offline pull-right"></span>
                                        </span>
                                        <span class="mail-contnet">
                                            <h5>Don Andres</h5>
                                            <span class="mail-desc">Just see the my admin!</span>
                                            <span class="time">9:02 AM</span>
                                        </span>
                                    </a>
                            </div>
                        </li>
                        <li>
                            <a class="center-align" href="javascript:void(0);"> <strong>See all e-Mails</strong> </a>
                        </li>
                    </ul>
                </li> -->
                <!-- ============================================================== -->
                <!-- Profile icon scss in header.scss -->
                <!-- ============================================================== -->
                <li><a class="dropdown-trigger" href="javascript: void(0);" data-target="user_dropdown"><img src="<?php echo base_url(); ?><?php echo $this->session->userdata("image"); ?>" alt="user" class="circle profile-pic"></a>
                    <ul id="user_dropdown" class="mailbox dropdown-content dropdown-user">
                        <li>
                            <div class="dw-user-box">
                                <div class="u-img"><img src="<?php echo base_url(); ?><?php echo $this->session->userdata("image"); ?>" alt="user"></div>
                                <div class="u-text">
                                    <h4><?php echo $this->session->userdata("nama_lengkap"); ?></h4>
                                    <p><?php
                                      switch ($this->session->userdata("level")){
                                        case 1:
                                              echo "Administrator";
                                              break;
                                        case 2:
                                              echo "Pustakawan";
                                              break;
                                        case 3:
                                              echo "Umum";
                                              break;
                                      }
                                    ?>
                                  </p>
                                    <a href="<?php echo base_url('profil'); ?>" class="waves-effect waves-light btn-small red white-text">View Profile</a>
                                </div>
                            </div>
                        </li>
                        <!-- <li role="separator" class="divider"></li>
                        <li><a href="#"><i class="material-icons">account_circle</i> My Profile</a></li>
                        <li><a href="#"><i class="material-icons">account_balance_wallet</i> My Balance</a></li>
                        <li><a href="#"><i class="material-icons">inbox</i> Inbox</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#"><i class="material-icons">settings</i> Account Setting</a></li>
                        <li role="separator" class="divider"></li> -->
                        <li><a href="<?php echo base_url('login/logout'); ?>"><i class="material-icons">power_settings_new</i> Logout</a></li>
                    </ul>
                </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right topbar icon scss in header.scss -->
            <!-- ============================================================== -->
        </div>
    </nav>
    <!-- ============================================================== -->
    <!-- Navbar scss in header.scss -->
    <!-- ============================================================== -->
</header>
