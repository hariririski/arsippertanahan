<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $this->load->view('share/icon', '', TRUE);?>
    <title>Profil</title>
    <link href="dist/css/style.css" rel="stylesheet">

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
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Title and breadcrumb -->
            <!-- ============================================================== -->
            <div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">Profile</h5>
                    <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">Home</a>
                        <a href="#!" class="breadcrumb">Profile</a>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-content">
                                <div class="center-align m-t-30"> <img src="assets/images/users/5.jpg" class="circle" width="150" />
                                    <h4 class="card-title m-t-10">Jon Doe</h4>
                                    <h6 class="card-subtitle">Accounts Manager Amix corp</h6>
                                    <div class="center-align">
                                        <div>
                                            <a href="javascript:void(0)" class="m-r-40"><i class="icon-people"></i> <font class="font-medium">254</font></a>
                                            <a href="javascript:void(0)"><i class="icon-picture"></i> <font class="font-medium">54</font></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-content">
                                <small>Email address </small>
                                <h6>jon@doe.com</h6>
                                <small>Phone</small>
                                <h6>+91 654 784 547</h6>
                                <small>Address</small>
                                <h6>71 Pilgrim Avenue Chevy Chase, MD 20815</h6>
                                <div class="map-box m-t-20">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                                <small class="db m-t-20">Social Profile</small>
                                <a href="javascript:void(0)" class="btn-floating indigo darken-2 m-t-10"><i class="fab fa-facebook"></i></a>
                                <a href="javascript:void(0)" class="btn-floating blue darken-1 m-t-10"><i class="fab fa-twitter"></i></a>
                                <a href="javascript:void(0)" class="btn-floating deep-orange m-t-10"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m8">
                        <div class="card">
                            <div class="row">
                                <div class="col s12">
                                    <ul class="tabs">
                                        <li class="tab col s3"><a class="active" href="#timeline">Timeline</a></li>
                                        <li class="tab col s3"><a href="#profile">Profile</a></li>
                                        <li class="tab col s3"><a href="#settings">Settings</a></li>
                                    </ul>
                                </div>
                                <div id="timeline" class="col s12">
                                    <div class="card-content">
                                        <div class="profiletimeline">
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="assets/images/users/1.jpg" alt="user" class="circle" /> </div>
                                                <div class="sl-right">
                                                    <div><a href="javascript:void(0)" class="">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                        <p>assign a new task <a href="javascript:void(0)"> Design weblayout</a></p>
                                                        <div class="row">
                                                            <div class="col l3 m6 m-b-20"><img src="assets/images/big/img1.jpg" class="responsive-img radius" /></div>
                                                            <div class="col l3 m6 m-b-20"><img src="assets/images/big/img2.jpg" class="responsive-img radius" /></div>
                                                            <div class="col l3 m6 m-b-20"><img src="assets/images/big/img3.jpg" class="responsive-img radius" /></div>
                                                            <div class="col l3 m6 m-b-20"><img src="assets/images/big/img4.jpg" class="responsive-img radius" /></div>
                                                        </div>
                                                        <div class="like-comm"> <a href="javascript:void(0)" class="m-r-10">2 comment</a> <a href="javascript:void(0)" class="m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="assets/images/users/2.jpg" alt="user" class="circle" /> </div>
                                                <div class="sl-right">
                                                    <div> <a href="javascript:void(0)" class="">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                        <div class="row m-t-30">
                                                            <div class="col s3">
                                                                <img src="assets/images/big/img1.jpg" alt="user" class="responsive-img radius" />
                                                            </div>
                                                            <div class="col s9">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                                                                <a href="javascript:void(0)" class="waves-effect waves-light btn"> Design weblayout</a>
                                                            </div>
                                                        </div>
                                                        <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="m-r-10">2 comment</a> <a href="javascript:void(0)" class="m-r-10"><i class="fa fa-heart red-text"></i> 5 Love</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="assets/images/users/3.jpg" alt="user" class="circle" /> </div>
                                                <div class="sl-right">
                                                    <div><a href="javascript:void(0)" class="">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                        <p class="m-t-10"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper </p>
                                                    </div>
                                                    <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="m-r-10">2 comment</a> <a href="javascript:void(0)" class="m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="assets/images/users/4.jpg" alt="user" class="circle" /> </div>
                                                <div class="sl-right">
                                                    <div><a href="javascript:void(0)" class="">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                        <blockquote class="m-t-10">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                                        </blockquote>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="profile" class="col s12">
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col m3 b-r"> <strong>Full Name</strong>
                                                <br>
                                                <p>John Doe</p>
                                            </div>
                                            <div class="col m3 b-r"> <strong>Mobile</strong>
                                                <br>
                                                <p>(123) 456 7890</p>
                                            </div>
                                            <div class="col m3 b-r"> <strong>Email</strong>
                                                <br>
                                                <p>john@admin.com</p>
                                            </div>
                                            <div class="col m3"> <strong>Location</strong>
                                                <br>
                                                <p>New York</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <h5 class="card-title">Skill Set</h5>
                                        <hr>
                                        <h6 class="font-light m-t-30">Wordpress <span class="pull-right">80%</span></h6>
                                        <div class="progress">
                                            <div class="determinate" style="width: 70%"></div>
                                        </div>
                                        <h6 class="font-light m-t-30">HTML 5 <span class="pull-right">90%</span></h6>
                                        <div class="progress">
                                            <div class="determinate" style="width: 70%"></div>
                                        </div>
                                        <h6 class="font-light m-t-30">jQuery <span class="pull-right">50%</span></h6>
                                        <div class="progress">
                                            <div class="determinate" style="width: 70%"></div>
                                        </div>
                                        <h6 class="font-light m-t-30">Photoshop <span class="pull-right">70%</span></h6>
                                        <div class="progress">
                                            <div class="determinate" style="width: 70%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div id="settings" class="col s12">
                                    <div class="card-content">
                                        <form>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input id="name" type="text" value="Jon Doe">
                                                    <label for="name">Name</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input id="email" type="email" value="jon@doe.com">
                                                    <label for="email">Email</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input id="password" type="password" value="123456">
                                                    <label for="password">Password</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input id="number" type="text" value="123 456 7890">
                                                    <label for="number">Phone No</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <textarea id="message" class="materialize-textarea">Hi, I am Jon Doe</textarea>
                                                    <label for="message">Message</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <select>
                                                        <option value="" disabled>Choose Country</option>
                                                        <option value="1">USA</option>
                                                        <option value="2" selected>Spain</option>
                                                        <option value="3">India</option>
                                                    </select>
                                                    <label>Select Country</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <button class="btn teal waves-effect waves-light" type="submit" name="action">Update Profile</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <?php echo $this->load->view('share/footer', '', TRUE);?>
        </div>
        <!-- ============================================================== -->

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
    <script src="dist/js/app-style-switcher.horizontal.js"></script>
    <!-- ============================================================== -->
    <!-- Custom js -->
    <!-- ============================================================== -->
    <script src="dist/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
</body>

</html>
