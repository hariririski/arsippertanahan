<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $this->load->view('share/icon', '', TRUE);?>
    <title>Perminjaman Arsip Pertanahan</title>
    <link href="dist/css/style.css" rel="stylesheet">
    <!-- This page CSS -->
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
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Title and breadcrumb -->
            <!-- ============================================================== -->
            <div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">Pinjam Arsip</h5>
                    <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">Home</a>
                        <a href="#!" class="breadcrumb">Peminjaman Arsip</a>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <div class="container-fluid">
              <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <ul class="tabs tab-demo z-depth-1">
                                    <li class="tab"><a href="#test16" class="active">Barcode</a></li>
                                    <li class="tab"><a class="" href="#test17">Buku Tanah</a></li>
                                    <li class="tab"><a href="#test18">Surat Ukur</a></li>
                                    <li class="tab"><a href="#test19">Warkah</a></li>
                                <li class="indicator" style="left: 0px; right: 538px;"></li></ul>
                                <div id="test16" class="active" style="display: block;">
                                  <form class="row">
                                    <div class="input-field col s10">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="icon_prefix" type="text" autofocus
                                        <label for="icon_prefix">First Name</label>
                                    </div>

                                    <div class="input-field col s2">
                                        <button class="btn cyan waves-effect waves-light" type="submit" name="action">Cari</button>

                                    </div>
                                  </form>
                                </div>
                                <div id="test17" class="" style="display: none;">
                                    <p class="p-15 p-b-0">Another Tab content</p>
                                </div>
                                <div id="test18" style="display: none;">
                                    <p class="p-15 p-b-0">Test 3</p>
                                </div>
                                <div id="test19" style="display: none;">
                                    <p class="p-15 p-b-0">Test 4</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col l8 s12">
                        <div class="card">
                            <div class="card-content">
                                <div class="d-flex no-block align-items-center">
                                    <h5 class="card-title">All Contacts</h5>
                                    <div class="ml-auto">
                                        <a class="waves-effect waves-light btn blue-grey darken-4 modal-trigger" href="#modal2">Create New Contact</a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="file_export" class="table table-bordered nowrap display">
                                        <thead>
                                            <tr>
                                                <th> </th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Role</th>
                                                <th>Age</th>
                                                <th>Joining date</th>
                                                <th>Salery</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                        <label class="m-l-15">
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                    </p>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img src="assets/images/users/1.jpg" alt="user" class="circle" width="30px" /> Genelia Deshmukh</a>
                                                </td>
                                                <td>genelia@gmail.com</td>
                                                <td>+123 456 789</td>
                                                <td><span class="label label-danger">Designer</span> </td>
                                                <td>23</td>
                                                <td>12-10-2014</td>
                                                <td>$1200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>
                                                        <label class="m-l-15">
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                    </p>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img src="assets/images/users/2.jpg" alt="user" class="circle" width="30px" /> Arijit Singh</a>
                                                </td>
                                                <td>arijit@gmail.com</td>
                                                <td>+234 456 789</td>
                                                <td><span class="label label-info">Developer</span> </td>
                                                <td>26</td>
                                                <td>10-09-2014</td>
                                                <td>$1800</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>
                                                        <label class="m-l-15">
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                    </p>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img src="assets/images/users/3.jpg" alt="user" class="circle" width="30px" /> Govinda jalan</a>
                                                </td>
                                                <td>govinda@gmail.com</td>
                                                <td>+345 456 789</td>
                                                <td><span class="label label-success">Accountant</span></td>
                                                <td>28</td>
                                                <td>1-10-2013</td>
                                                <td>$2200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>
                                                        <label class="m-l-15">
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                    </p>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img src="assets/images/users/4.jpg" alt="user" class="circle" width="30px" /> Hritik Roshan</a>
                                                </td>
                                                <td>hritik@gmail.com</td>
                                                <td>+456 456 789</td>
                                                <td><span class="label label-inverse">HR</span></td>
                                                <td>25</td>
                                                <td>2-10-2017</td>
                                                <td>$200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>
                                                        <label class="m-l-15">
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                    </p>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img src="assets/images/users/5.jpg" alt="user" class="circle" width="30px" /> John Abraham</a>
                                                </td>
                                                <td>john@gmail.com</td>
                                                <td>+567 456 789</td>
                                                <td><span class="label label-danger">Manager</span></td>
                                                <td>23</td>
                                                <td>10-9-2015</td>
                                                <td>$1200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>
                                                        <label class="m-l-15">
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                    </p>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img src="assets/images/users/6.jpg" alt="user" class="circle" width="30px" /> Pawandeep kumar</a>
                                                </td>
                                                <td>pawandeep@gmail.com</td>
                                                <td>+678 456 789</td>
                                                <td><span class="label label-warning">Chairman</span></td>
                                                <td>29</td>
                                                <td>10-5-2013</td>
                                                <td>$1500</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>
                                                        <label class="m-l-15">
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                    </p>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img src="assets/images/users/7.jpg" alt="user" class="circle" width="30px" /> Ritesh Deshmukh</a>
                                                </td>
                                                <td>ritesh@gmail.com</td>
                                                <td>+123 456 789</td>
                                                <td><span class="label label-danger">Designer</span></td>
                                                <td>35</td>
                                                <td>05-10-2012</td>
                                                <td>$3200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>
                                                        <label class="m-l-15">
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                    </p>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img src="assets/images/users/8.jpg" alt="user" class="circle" width="30px" /> Salman Khan</a>
                                                </td>
                                                <td>salman@gmail.com</td>
                                                <td>+234 456 789</td>
                                                <td><span class="label label-info">Developer</span></td>
                                                <td>27</td>
                                                <td>11-10-2014</td>
                                                <td>$1800</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>
                                                        <label class="m-l-15">
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                    </p>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img src="assets/images/users/1.jpg" alt="user" class="circle" width="30px" /> Govinda jalan</a>
                                                </td>
                                                <td>govinda@gmail.com</td>
                                                <td>+345 456 789</td>
                                                <td><span class="label label-success">Accountant</span></td>
                                                <td>18</td>
                                                <td>12-5-2017</td>
                                                <td>$100</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>
                                                        <label class="m-l-15">
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                    </p>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img src="assets/images/users/2.jpg" alt="user" class="circle" width="30px" /> Sonu Nigam</a>
                                                </td>
                                                <td>sonu@gmail.com</td>
                                                <td>+456 456 789</td>
                                                <td><span class="label label-inverse">HR</span></td>
                                                <td>36</td>
                                                <td>18-5-2009</td>
                                                <td>$4200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>
                                                        <label class="m-l-15">
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                    </p>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img src="assets/images/users/3.jpg" alt="user" class="circle" width="30px" /> Varun Dhawan</a>
                                                </td>
                                                <td>varun@gmail.com</td>
                                                <td>+567 456 789</td>
                                                <td><span class="label label-danger">Manager</span></td>
                                                <td>43</td>
                                                <td>12-10-2010</td>
                                                <td>$5200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>
                                                        <label class="m-l-15">
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                    </p>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img src="assets/images/users/4.jpg" alt="user" class="circle" width="30px" /> Genelia Deshmukh</a>
                                                </td>
                                                <td>genelia@gmail.com</td>
                                                <td>+123 456 789</td>
                                                <td><span class="label label-danger">Designer</span> </td>
                                                <td>23</td>
                                                <td>12-10-2014</td>
                                                <td>$1200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>
                                                        <label class="m-l-15">
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                    </p>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img src="assets/images/users/5.jpg" alt="user" class="circle" width="30px" /> Arijit Singh</a>
                                                </td>
                                                <td>arijit@gmail.com</td>
                                                <td>+234 456 789</td>
                                                <td><span class="label label-info">Developer</span> </td>
                                                <td>26</td>
                                                <td>10-09-2014</td>
                                                <td>$1800</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>
                                                        <label class="m-l-15">
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                    </p>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img src="assets/images/users/6.jpg" alt="user" class="circle" width="30px" /> Govinda jalan</a>
                                                </td>
                                                <td>govinda@gmail.com</td>
                                                <td>+345 456 789</td>
                                                <td><span class="label label-success">Accountant</span></td>
                                                <td>28</td>
                                                <td>1-10-2013</td>
                                                <td>$2200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>
                                                        <label class="m-l-15">
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                    </p>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img src="assets/images/users/1.jpg" alt="user" class="circle" width="30px" /> Genelia Deshmukh</a>
                                                </td>
                                                <td>genelia@gmail.com</td>
                                                <td>+123 456 789</td>
                                                <td><span class="label label-danger">Designer</span> </td>
                                                <td>23</td>
                                                <td>12-10-2014</td>
                                                <td>$1200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>
                                                        <label class="m-l-15">
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                    </p>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img src="assets/images/users/2.jpg" alt="user" class="circle" width="30px" /> Arijit Singh</a>
                                                </td>
                                                <td>arijit@gmail.com</td>
                                                <td>+234 456 789</td>
                                                <td><span class="label label-info">Developer</span> </td>
                                                <td>26</td>
                                                <td>10-09-2014</td>
                                                <td>$1800</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>
                                                        <label class="m-l-15">
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                    </p>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img src="assets/images/users/3.jpg" alt="user" class="circle" width="30px" /> Govinda jalan</a>
                                                </td>
                                                <td>govinda@gmail.com</td>
                                                <td>+345 456 789</td>
                                                <td><span class="label label-success">Accountant</span></td>
                                                <td>28</td>
                                                <td>1-10-2013</td>
                                                <td>$2200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>
                                                        <label class="m-l-15">
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                    </p>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img src="assets/images/users/4.jpg" alt="user" class="circle" width="30px" /> Hritik Roshan</a>
                                                </td>
                                                <td>hritik@gmail.com</td>
                                                <td>+456 456 789</td>
                                                <td><span class="label label-inverse">HR</span></td>
                                                <td>25</td>
                                                <td>2-10-2017</td>
                                                <td>$200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>
                                                        <label class="m-l-15">
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                    </p>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img src="assets/images/users/5.jpg" alt="user" class="circle" width="30px" /> John Abraham</a>
                                                </td>
                                                <td>john@gmail.com</td>
                                                <td>+567 456 789</td>
                                                <td><span class="label label-danger">Manager</span></td>
                                                <td>23</td>
                                                <td>10-9-2015</td>
                                                <td>$1200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>
                                                        <label class="m-l-15">
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                    </p>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img src="assets/images/users/6.jpg" alt="user" class="circle" width="30px" /> Pawandeep kumar</a>
                                                </td>
                                                <td>pawandeep@gmail.com</td>
                                                <td>+678 456 789</td>
                                                <td><span class="label label-warning">Chairman</span></td>
                                                <td>29</td>
                                                <td>10-5-2013</td>
                                                <td>$1500</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>
                                                        <label class="m-l-15">
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                    </p>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img src="assets/images/users/7.jpg" alt="user" class="circle" width="30px" /> Ritesh Deshmukh</a>
                                                </td>
                                                <td>ritesh@gmail.com</td>
                                                <td>+123 456 789</td>
                                                <td><span class="label label-danger">Designer</span></td>
                                                <td>35</td>
                                                <td>05-10-2012</td>
                                                <td>$3200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>
                                                        <label class="m-l-15">
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                    </p>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img src="assets/images/users/8.jpg" alt="user" class="circle" width="30px" /> Salman Khan</a>
                                                </td>
                                                <td>salman@gmail.com</td>
                                                <td>+234 456 789</td>
                                                <td><span class="label label-info">Developer</span></td>
                                                <td>27</td>
                                                <td>11-10-2014</td>
                                                <td>$1800</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>
                                                        <label class="m-l-15">
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                    </p>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img src="assets/images/users/1.jpg" alt="user" class="circle" width="30px" /> Govinda jalan</a>
                                                </td>
                                                <td>govinda@gmail.com</td>
                                                <td>+345 456 789</td>
                                                <td><span class="label label-success">Accountant</span></td>
                                                <td>18</td>
                                                <td>12-5-2017</td>
                                                <td>$100</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>
                                                        <label class="m-l-15">
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                    </p>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img src="assets/images/users/2.jpg" alt="user" class="circle" width="30px" /> Sonu Nigam</a>
                                                </td>
                                                <td>sonu@gmail.com</td>
                                                <td>+456 456 789</td>
                                                <td><span class="label label-inverse">HR</span></td>
                                                <td>36</td>
                                                <td>18-5-2009</td>
                                                <td>$4200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l4 s12">
                        <div class="card">
                            <div class="card-content">
                                <a href="#modal1" class="waves-effect waves-light btn indigo modal-trigger" style="width: 100%;"><i class="fas fa-share-alt-square m-r-10"></i>Share With</a>
                            </div>
                            <div class="divider"></div>
                            <div class="card-content">
                                <div class="row">
                                    <form class="col s12">
                                        <div class="input-field">
                                            <i class="material-icons prefix">search</i>
                                            <input id="icon_prefix" type="text" class="validate">
                                            <label for="icon_prefix">Search Contact Here</label>
                                        </div>
                                    </form>
                                </div>
                                <div class="collection">
                                    <a href="#!" class="collection-item active indigo"><i class="ti-layers m-r-10"></i>All Contacts</a>
                                    <a href="#!" class="collection-item"><i class="ti-star m-r-10"></i>Favourite Contacts</a>
                                    <a href="#!" class="collection-item"><i class="ti-bookmark m-r-10"></i>Recently Created</a>
                                </div>
                                <h5 class="card-title m-t-30">Groups</h5>
                                <div class="collection">
                                    <a href="#!" class="collection-item"><i class="ti-flag-alt-2 m-r-10"></i>Success Warriers<span class="new badge red">40</span></a>
                                    <a href="#!" class="collection-item"><i class="ti-notepad m-r-10"></i>Project<span class="new badge blue">14</span></a>
                                    <a href="#!" class="collection-item"><i class="ti-target m-r-10"></i>Envato Author<span class="new badge indigo">114</span></a>
                                    <a href="#!" class="collection-item"><i class="ti-comments m-r-10"></i>IT Friends<span class="new badge red">120</span></a>
                                </div>
                                <h5 class="card-title m-t-30">More</h5>
                                <div class="collection">
                                    <a href="#!" class="collection-item"><i class="ti-import m-r-10"></i>Import Contacts</a>
                                    <a href="#!" class="collection-item"><i class="ti-export m-r-10"></i>Export Contacts</a>
                                    <a href="#!" class="collection-item"><i class="ti-share-alt m-r-10"></i>Restore Contacts</a>
                                    <a href="#!" class="collection-item"><i class="ti-layers-alt m-r-10"></i>Duplicate Contacts</a>
                                    <a href="#!" class="collection-item"><i class="ti-trash m-r-10"></i>Delete All Contacts</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Share Modal Structure -->
            <div id="modal1" class="modal">
                <div class="modal-content">
                    <h5 class="card-title"><i class="material-icons m-r-10">share</i>Share With</h5>
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s9">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="icon_prefi2" type="text" class="validate">
                                    <label for="icon_prefi2">Enter Name Here</label>
                                </div>
                            </div>
                        </form>
                        <div class="col s3 center-align">
                            <a href="#Whatsapp">
                                <i class="display-6 fab fa-whatsapp green-text"></i><h6 class="m-t-15">Whatsapp</h6>
                            </a>
                        </div>
                        <div class="col s3 center-align">
                            <a href="#Facebook">
                                <i class="display-6 fab fa-facebook-f blue-text"></i><h6 class="m-t-15">Facebook</h6>
                            </a>
                        </div>
                        <div class="col s3 center-align">
                            <a href="#Instagram">
                                <i class="display-6 fab fa-instagram red-text"></i><h6 class="m-t-15">Instagram</h6>
                            </a>
                        </div>
                        <div class="col s3 center-align">
                            <a href="#Skype">
                                <i class="display-6 fab fa-skype"></i><h6 class="m-t-15">Skype</h6>
                            </a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat blue white-text"><i class="fas fa-share"></i> Send</a>
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat grey darken-4 white-text">Cancel</a>
                    </div>
                </div>
            </div>
            <!-- Create Modal Structure -->
            <div id="modal2" class="modal">
                <div class="modal-content">
                    <h5 class="card-title"> <i class="fas fa-phone-square m-r-10"></i>New Contact</h5>
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s9">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="icon_prefix" type="text" class="validate">
                                    <label for="icon_prefix">Enter Name Here</label>
                                </div>
                                <div class="input-field col s9">
                                    <i class="material-icons prefix">phone</i>
                                    <input id="icon_telephone" type="tel" class="validate">
                                    <label for="icon_telephone">Telephone</label>
                                </div>
                                <div class="file-field input-field col s9">
                                    <div class="btn indigo">
                                        <span>File</span>
                                        <input type="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat indigo white-text"><i class="far fa-save m-r-10"></i> Save Contact</a>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <?php echo $this->load->view('share/footer', '', TRUE);?>
        </div>
        <!-- ============================================================== -->

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
    <script src="assets/extra-libs/DataTables/datatables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <script>
    //=============================================//
    //    File export                              //
    //=============================================//
    $('#file_export').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
</body>

</html>
