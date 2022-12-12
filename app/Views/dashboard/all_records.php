<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Attendee Checkin Form and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-8 col-sm-4 col-xs-12">
                <div class="">
                    <form method="POST" action="">
                         <input type="number" class="form-control" id="attendeeId_input" name="attendeeId_input" placeholder="Enter Attendee ID..." aria-describedby="emailHelp">
                         <button id="checkin_button" type="submit" class="btn btn-primary  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">
                                 CheckIn Attendee
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="#" class="fw-normal"></a></li>
                    </ol>
                    <!-- <button id="checkin_btn" class="btn btn-primary  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">
                        CheckIn Attendee
                    </button> -->
                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- ============================================================== -->
    <!-- Attendee Checkin Form and right sidebar toggle -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Three charts -->
        <!-- ============================================================== -->
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-12">
                <div class="white-box analytics-info">
                    <h3 class="box-title">Total Visit</h3>
                    <ul class="list-inline two-part d-flex align-items-center mb-0">
                        <li>
                            <div id="sparklinedash"><canvas width="67" height="30" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                            </div>
                        </li>
                        <li class="ms-auto"><span class="counter text-success">659</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="white-box analytics-info">
                    <h3 class="box-title">Total Page Views</h3>
                    <ul class="list-inline two-part d-flex align-items-center mb-0">
                        <li>
                            <div id="sparklinedash2"><canvas width="67" height="30" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                            </div>
                        </li>
                        <li class="ms-auto"><span class="counter text-purple">869</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="white-box analytics-info">
                    <h3 class="box-title">Unique Visitor</h3>
                    <ul class="list-inline two-part d-flex align-items-center mb-0">
                        <li>
                            <div id="sparklinedash3"><canvas width="67" height="30" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                            </div>
                        </li>
                        <li class="ms-auto"><span class="counter text-info">911</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- PRODUCTS YEARLY SALES -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="white-box">
                    <h3 class="box-title">Products Yearly Sales</h3>
                    <div class="d-md-flex">
                        <ul class="list-inline d-flex ms-auto">
                            <li class="ps-3">
                                <h5><i class="fa fa-circle me-1 text-info"></i>Mac</h5>
                            </li>
                            <li class="ps-3">
                                <h5><i class="fa fa-circle me-1 text-inverse"></i>Windows</h5>
                            </li>
                        </ul>
                    </div>
                    <div id="ct-visits" style="height: 405px;">
                        <div class="chartist-tooltip" style="top: -17px; left: -12px;"><span class="chartist-tooltip-value">6</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Recent Comments -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- .col -->
            <div class="col-md-12 col-lg-8 col-sm-12">
                <div class="card white-box p-0">
                    <div class="card-body">
                        <h3 class="box-title mb-0">Recent Comments</h3>
                    </div>
                    <div class="comment-widgets">
                        <!-- Comment Row -->
                        <div class="d-flex flex-row comment-row p-3 mt-0">
                            <div class="p-2"><img src="db/plugins/images/users/varun.jpg" alt="user" width="50" class="rounded-circle"></div>
                            <div class="comment-text ps-2 ps-md-3 w-100">
                                <h5 class="font-medium">James Anderson</h5>
                                <span class="mb-3 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry.It has survived not only five centuries. </span>
                                <div class="comment-footer d-md-flex align-items-center">
                                    <span class="badge bg-primary rounded">Pending</span>

                                    <div class="text-muted fs-2 ms-auto mt-2 mt-md-0">April 14, 2021</div>
                                </div>
                            </div>
                        </div>
                        <!-- Comment Row -->
                        <div class="d-flex flex-row comment-row p-3">
                            <div class="p-2"><img src="db/plugins/images/users/genu.jpg" alt="user" width="50" class="rounded-circle"></div>
                            <div class="comment-text ps-2 ps-md-3 active w-100">
                                <h5 class="font-medium">Michael Jorden</h5>
                                <span class="mb-3 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry.It has survived not only five centuries. </span>
                                <div class="comment-footer d-md-flex align-items-center">

                                    <span class="badge bg-success rounded">Approved</span>

                                    <div class="text-muted fs-2 ms-auto mt-2 mt-md-0">April 14, 2021</div>
                                </div>
                            </div>
                        </div>
                        <!-- Comment Row -->
                        <div class="d-flex flex-row comment-row p-3">
                            <div class="p-2"><img src="db/plugins/images/users/ritesh.jpg" alt="user" width="50" class="rounded-circle"></div>
                            <div class="comment-text ps-2 ps-md-3 w-100">
                                <h5 class="font-medium">Johnathan Doeting</h5>
                                <span class="mb-3 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry.It has survived not only five centuries. </span>
                                <div class="comment-footer d-md-flex align-items-center">

                                    <span class="badge rounded bg-danger">Rejected</span>

                                    <div class="text-muted fs-2 ms-auto mt-2 mt-md-0">April 14, 2021</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card white-box p-0">
                    <div class="card-heading">
                        <h3 class="box-title mb-0">Chat Listing</h3>
                    </div>
                    <div class="card-body">
                        <ul class="chatonline">
                            <li>
                                <div class="call-chat">
                                    <button class="btn btn-success text-white btn-circle btn" type="button">
                                        <i class="fas fa-phone"></i>
                                    </button>
                                    <button class="btn btn-info btn-circle btn" type="button">
                                        <i class="far fa-comments text-white"></i>
                                    </button>
                                </div>
                                <a href="javascript:void(0)" class="d-flex align-items-center"><img src="db/plugins/images/users/varun.jpg" alt="user-img" class="img-circle">
                                    <div class="ms-2">
                                        <span class="text-dark">Varun Dhavan <small class="d-block text-success d-block">online</small></span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="call-chat">
                                    <button class="btn btn-success text-white btn-circle btn" type="button">
                                        <i class="fas fa-phone"></i>
                                    </button>
                                    <button class="btn btn-info btn-circle btn" type="button">
                                        <i class="far fa-comments text-white"></i>
                                    </button>
                                </div>
                                <a href="javascript:void(0)" class="d-flex align-items-center"><img src="db/plugins/images/users/genu.jpg" alt="user-img" class="img-circle">
                                    <div class="ms-2">
                                        <span class="text-dark">Genelia
                                            Deshmukh <small class="d-block text-warning">Away</small></span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="call-chat">
                                    <button class="btn btn-success text-white btn-circle btn" type="button">
                                        <i class="fas fa-phone"></i>
                                    </button>
                                    <button class="btn btn-info btn-circle btn" type="button">
                                        <i class="far fa-comments text-white"></i>
                                    </button>
                                </div>
                                <a href="javascript:void(0)" class="d-flex align-items-center"><img src="db/plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle">
                                    <div class="ms-2">
                                        <span class="text-dark">Ritesh
                                            Deshmukh <small class="d-block text-danger">Busy</small></span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="call-chat">
                                    <button class="btn btn-success text-white btn-circle btn" type="button">
                                        <i class="fas fa-phone"></i>
                                    </button>
                                    <button class="btn btn-info btn-circle btn" type="button">
                                        <i class="far fa-comments text-white"></i>
                                    </button>
                                </div>
                                <a href="javascript:void(0)" class="d-flex align-items-center"><img src="db/plugins/images/users/arijit.jpg" alt="user-img" class="img-circle">
                                    <div class="ms-2">
                                        <span class="text-dark">Arijit
                                            Sinh <small class="d-block text-muted">Offline</small></span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="call-chat">
                                    <button class="btn btn-success text-white btn-circle btn" type="button">
                                        <i class="fas fa-phone"></i>
                                    </button>
                                    <button class="btn btn-info btn-circle btn" type="button">
                                        <i class="far fa-comments text-white"></i>
                                    </button>
                                </div>
                                <a href="javascript:void(0)" class="d-flex align-items-center"><img src="db/plugins/images/users/govinda.jpg" alt="user-img" class="img-circle">
                                    <div class="ms-2">
                                        <span class="text-dark">Govinda
                                            Star <small class="d-block text-success">online</small></span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="call-chat">
                                    <button class="btn btn-success text-white btn-circle btn" type="button">
                                        <i class="fas fa-phone"></i>
                                    </button>
                                    <button class="btn btn-info btn-circle btn" type="button">
                                        <i class="far fa-comments text-white"></i>
                                    </button>
                                </div>
                                <a href="javascript:void(0)" class="d-flex align-items-center"><img src="db/plugins/images/users/hritik.jpg" alt="user-img" class="img-circle">
                                    <div class="ms-2">
                                        <span class="text-dark">John
                                            Abraham<small class="d-block text-success">online</small></span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center"> 2021 © Ample Admin brought to you by <a href="https://www.wrappixel.com/">wrappixel.com</a>
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="db/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="db/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="db/js/app-style-switcher.js"></script>
<script src="db/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
<!--Wave Effects -->
<script src="db/js/waves.js"></script>
<!--Menu sidebar -->
<script src="db/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="db/js/custom.js"></script>
<!--This page JavaScript -->
<!--chartis chart-->
<script src="db/plugins/bower_components/chartist/dist/chartist.min.js"></script>
<script src="db/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
<script src="db/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>