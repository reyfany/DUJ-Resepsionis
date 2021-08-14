<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities." />
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app" />
    <meta name="author" content="pixelstrap" />
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon" />
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon" />
    <title>Cuba - Premium Admin Template</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet" />
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css" />
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/icofont.css" />
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/themify.css" />
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/flag-icon.css" />
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/feather-icon.css" />
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="../assets/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/chartist.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/date-picker.css" />
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css" />
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen" />
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css" />
</head>

<body onload="startTime()">
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-main-header">
            <div class="main-header-right row m-0">
                <form class="form-inline search-full" action="#" method="get">
                    <div class="form-group w-100">
                        <div class="Typeahead Typeahead--twitterUsers">
                            <div class="u-posRelative">
                                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Cuba .." name="q" title="" autofocus />
                                <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div>
                                <i class="close-search" data-feather="x"></i>
                            </div>
                            <div class="Typeahead-menu"></div>
                        </div>
                    </div>
                </form>
                <div class="left-menu-header col horizontal-wrapper pl-0">
                </div>
                <div class="nav-right col-8 pull-right right-menu">
                    <ul class="nav-menus">
                        <li class="onhover-dropdown">
                            <div class="notification-box"><i data-feather="bell"></i><span class="badge badge-pill badge-secondary"></span></div>
                            <ul class="notification-dropdown onhover-show-div">
                                <li class="bg-primary">
                                    <h6 class="f-18 mb-0">Notitication</h6>
                                    <p class="mb-0">You have 4 new notification</p>
                                </li>
                                <li>
                                    <p class="mb-0"><i class="fa fa-circle-o mr-3 font-primary"> </i>Delivery processing <span class="pull-right">10 min.</span></p>
                                </li>
                                <li>
                                    <p class="mb-0"><i class="fa fa-circle-o mr-3 font-success"></i>Order Complete<span class="pull-right">1 hr</span></p>
                                </li>
                                <li>
                                    <p class="mb-0"><i class="fa fa-circle-o mr-3 font-info"></i>Tickets Generated<span class="pull-right">3 hr</span></p>
                                </li>
                                <li>
                                    <p class="mb-0"><i class="fa fa-circle-o mr-3 font-danger"></i>Delivery Complete<span class="pull-right">6 hr</span></p>
                                </li>
                                <li>
                                    <a class="btn btn-primary" href="#">Check all notification</a>
                                    <!--a.f-15.f-w-500.txt-dark(href="#") Check all notification-->
                                </li>
                            </ul>
                        </li>

                        <li class="onhover-dropdown">
                            <i data-feather="message-square"></i>
                            <ul class="chat-dropdown onhover-show-div">
                                <li class="bg-primary text-center">
                                    <h6 class="f-18 mb-0">Message Box</h6>
                                    <p class="mb-0">You have 3 new messages</p>
                                </li>
                                <li>
                                    <div class="media">
                                        <img class="img-fluid rounded-circle mr-3" src="../assets/images/user/1.jpg" alt="" />
                                        <div class="status-circle online"></div>
                                        <div class="media-body">
                                            <span>Erica Hughes</span>
                                            <p>Lorem Ipsum is simply dummy...</p>
                                        </div>
                                        <p class="f-12 font-success">58 mins ago</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <img class="img-fluid rounded-circle mr-3" src="../assets/images/user/2.jpg" alt="" />
                                        <div class="status-circle online"></div>
                                        <div class="media-body">
                                            <span>Kori Thomas</span>
                                            <p>Lorem Ipsum is simply dummy...</p>
                                        </div>
                                        <p class="f-12 font-success">1 hr ago</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <img class="img-fluid rounded-circle mr-3" src="../assets/images/user/4.jpg" alt="" />
                                        <div class="status-circle offline"></div>
                                        <div class="media-body">
                                            <span>Ain Chavez</span>
                                            <p>Lorem Ipsum is simply dummy...</p>
                                        </div>
                                        <p class="f-12 font-danger">32 mins ago</p>
                                    </div>
                                </li>
                                <li class="text-center"><a class="btn btn-primary" href="#">View All </a></li>
                            </ul>
                        </li>
                        <li class="maximize">
                            <a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a>
                        </li>
                        <li class="profile-nav onhover-dropdown p-0">
                            <div class="media profile-media">
                                <img class="b-r-10" src="../assets/images/dashboard/profile.jpg" alt="" />
                                <div class="media-body">
                                    <span>DUJ User</span>
                                    <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li><i data-feather="user"></i><span>Account </span></li>
                                <li><i data-feather="mail"></i><span>Inbox</span></li>
                                <li><i data-feather="file-text"></i><span>Taskboard</span></li>
                                <li><i data-feather="settings"></i><span>Settings</span></li>
                                <li><i data-feather="log-in"> </i><span>Log in</span></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <script id="result-template" type="text/x-handlebars-template">
                    <div class="ProfileCard u-cf">
                        <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
                        <div class="ProfileCard-details">
                            <div class="ProfileCard-realName"></div>
                        </div>
                    </div>
                </script>
                <script id="empty-template" type="text/x-handlebars-template">
                    <div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div>
                </script>
            </div>
        </div>
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper sidebar-icon">
            <!-- Page Sidebar Start-->
            <header class="main-nav">
                <div class="logo-wrapper">
                    <a href="index-resepsionis.html" style="margin-left: 10px; font-size:medium;"><b>DUJ Dashboard</b> </a>
                    <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                    <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="grid" id="sidebar-toggle"> </i></div>
                </div>
                <nav>
                    <div class="main-navbar">
                        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                        <div id="mainnav">
                            <ul class="nav-menu custom-scrollbar">
                                <li class="back-btn">
                                    <a href="index-resepsionis.html"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt="" /></a>
                                    <div class="mobile-back text-right"><span>Back</span><i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
                                </li>
                                <li class="sidebar-title">
                                    <div>
                                        <h6>DUJ Dashboard</h6>
                                    </div>
                                </li>
                                <li class="">
                                    <a class="nav-link menu-title" href="index-resepsionis.html"><i data-feather="home"></i><span>Dashboard</span></a>
                                </li>
                                <li class="">
                                    <a class="nav-link menu-title" href="data-tamu-resepsionis.html"><i data-feather="users"></i><span>Data Tamu</span></a>
                                </li>
                                <li class="">
                                    <a class="nav-link menu-title" href="detail-profile-resepsionis.html"><i data-feather="user"></i><span>Profile</span></a>
                                </li>

                        </div>
                </nav>
            </header>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <!-- Container-fluid starts-->
                <div class="card">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row">
                                <div class="col-6">
                                    <h3 style="color: #7366FF;">Dashboard</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ini content -->
                    <div class="col-xl-8 xl-100 dashboard-sec box-col-12">
                        <div class="card earning-card">
                            <div class="card-body p-0">
                                <div class="row m-0">
                                    <div class="col-xl-3 earning-content p-0">
                                        <div class="row m-0 chart-left">
                                            <div class="col-xl-12 p-0 left_side_earning">
                                                <h5>Dashboard</h5>
                                                <p class="font-roboto">Overview of last month</p>
                                            </div>
                                            <div class="col-xl-12 p-0 left_side_earning">
                                                <h5>$4055.56 </h5>
                                                <p class="font-roboto">This Month Earning</p>
                                            </div>
                                            <div class="col-xl-12 p-0 left_side_earning">
                                                <h5>$1004.11</h5>
                                                <p class="font-roboto">This Month Profit</p>
                                            </div>
                                            <div class="col-xl-12 p-0 left_side_earning">
                                                <h5>90%</h5>
                                                <p class="font-roboto">This Month Sale</p>
                                            </div>
                                            <div class="col-xl-12 p-0 left-btn"><a class="btn btn-gradient">Summary</a></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 p-0">
                                        <div class="chart-right">
                                            <div class="row m-0 p-tb">
                                                <div class="col-xl-8 col-md-8 col-sm-8 col-12 p-0">
                                                    <div class="inner-top-left">
                                                        <ul class="d-flex list-unstyled">
                                                            <li>Daily</li>
                                                            <li class="active">Weekly</li>
                                                            <li>Monthly</li>
                                                            <li>Yearly</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-4 col-sm-4 col-12 p-0 justify-content-end">
                                                    <div class="inner-top-right">
                                                        <ul class="d-flex list-unstyled justify-content-end">
                                                            <li>Online</li>
                                                            <li>Store</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="card-body p-0">
                                                        <div class="current-sale-container">
                                                            <div id="chart-currently"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row border-top m-0">
                                            <div class="col-xl-4 pl-0 col-md-6 col-sm-6">
                                                <div class="media p-0">
                                                    <div class="media-left"><i class="icofont icofont-crown"></i></div>
                                                    <div class="media-body">
                                                        <h6>Referral Earning</h6>
                                                        <p>$5,000.20</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6 col-sm-6">
                                                <div class="media p-0">
                                                    <div class="media-left bg-secondary"><i class="icofont icofont-heart-alt"></i></div>
                                                    <div class="media-body">
                                                        <h6>Cash Balance</h6>
                                                        <p>$2,657.21</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-12 pr-0">
                                                <div class="media p-0">
                                                    <div class="media-left"><i class="icofont icofont-cur-dollar"></i></div>
                                                    <div class="media-body">
                                                        <h6>Sales forcasting</h6>
                                                        <p>$9,478.50 </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 xl-100 chart_data_left box-col-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="row m-0 chart-main">
                                    <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                                        <div class="media align-items-center">
                                            <div class="hospital-small-chart">
                                                <div class="small-bar">
                                                    <div class="small-chart flot-chart-container"></div>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="right-chart-content">
                                                    <h4>1001</h4><span>purchase </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                                        <div class="media align-items-center">
                                            <div class="hospital-small-chart">
                                                <div class="small-bar">
                                                    <div class="small-chart1 flot-chart-container"></div>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="right-chart-content">
                                                    <h4>1005</h4><span>Sales</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                                        <div class="media align-items-center">
                                            <div class="hospital-small-chart">
                                                <div class="small-bar">
                                                    <div class="small-chart2 flot-chart-container"></div>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="right-chart-content">
                                                    <h4>100</h4><span>Sales return</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                                        <div class="media border-none align-items-center">
                                            <div class="hospital-small-chart">
                                                <div class="small-bar">
                                                    <div class="small-chart3 flot-chart-container"></div>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="right-chart-content">
                                                    <h4>101</h4><span>Purchase ret</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 xl-50 chart_data_right box-col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="media-body right-chart-content">
                                        <h4>$95,900<span class="new-box">Hot</span></h4><span>Purchase Order Value</span>
                                    </div>
                                    <div class="knob-block text-center">
                                        <input class="knob1" data-width="10" data-height="70" data-thickness=".3" data-angleoffset="0" data-linecap="round" data-fgcolor="#7366ff" data-bgcolor="#eef5fb" value="60">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 xl-50 chart_data_right second d-none">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="media-body right-chart-content">
                                        <h4>$95,000<span class="new-box">New</span></h4><span>Product Order Value</span>
                                    </div>
                                    <div class="knob-block text-center">
                                        <input class="knob1" data-width="50" data-height="70" data-thickness=".3" data-fgcolor="#7366ff" data-linecap="round" data-angleoffset="0" value="60">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
            <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 footer-copyright">
                            <p class="mb-0">Copyright 2020 © Cuba All rights reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p class="pull-right mb-0">Developed with <i class="fa fa-heart font-secondary"></i></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <s id="greeting" style="opacity: 0;"></s>
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/popper.min.js"></script>
    <script src="../assets/js/bootstrap/bootstrap.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/sidebar-menu.js"></script>
    <script src="../assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="../assets/js/chart/chartist/chartist.js"></script>
    <script src="../assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="../assets/js/chart/knob/knob.min.js"></script>
    <script src="../assets/js/chart/knob/knob-chart.js"></script>
    <script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="../assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="../assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="../assets/js/dashboard/default.js"></script>
    <script src="../assets/js/notify/index.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <script src="../assets/js/typeahead/handlebars.js"></script>
    <script src="../assets/js/typeahead/typeahead.bundle.js"></script>
    <script src="../assets/js/typeahead/typeahead.custom.js"></script>
    <script src="../assets/js/typeahead-search/handlebars.js"></script>
    <script src="../assets/js/typeahead-search/typeahead-custom.js"></script>
    <script src="../assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <!-- <script src="../assets/js/theme-customizer/customizer.js"></script> -->
    <!-- login js-->
    <!-- Plugin used-->

</body>

</div>

</html>