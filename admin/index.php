
<?php 
include "setting/config.php";
session_start();
if(!$_SESSION['admin'])
{
	header("location:../login.php");
}
else
{
	$adminname = $_SESSION['admin'];
	$meadmin_username = $ravi->meadmin_username($adminname);
	$meadmin_username_display = $meadmin_username->fetch_assoc();
	/* $meadmin_info= $meadmin_username_display['admin_username']; 
	$t_staff_type = $meadmin_username_display['t_staff_type'];
	$info = $ravi->teacher_info($adminname,$t_staff_type);
	$info_display = $info->fetch_assoc(); */
	
}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DodoaShop</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="admin/assets/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="admin/assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="admin/assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="admin/assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="admin/assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="admin/assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="admin/admin/assets/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="admin/assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="admin/assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="admin/assets/css/lib/helper.css" rel="stylesheet">
    <link href="admin/assets/css/style.css" rel="stylesheet">
</head>

<body>

<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo"><a href="/admin">
                            <!-- <img src="assets/images/logo.png" alt="" /> --><span>DodoaShop</span></a></div>
                    <li class="label">Main</li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-home"></i> Dashboard <span
                                class="badge badge-primary">2</span> <span
                                class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="index.php">Dashboard 1</a></li>
                            <li><a href="#">Dashboard 2 </a></li>
                        </ul>
                    </li>

                    <li class="label">Apps</li>
                    <li><a href="uc-calendar.php"><i class="ti-calendar"></i> Calandrier </a></li>
                    <li><a href="table-produit.php"><i class="ti-truck"></i>produits</a></li>
                    <li><a href="table-categorie.php"><i class="ti-view-list-alt"></i>categories </a></li>
        
                    <li><a class="sidebar-sub-toggle"><i class="ti-layout-grid4-alt"></i> Table <span
                                class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="table-basic.php">Basic</a></li>

                            <li><a href="table-users.php">Utilisateurs</a></li>
                           
                        </ul>
                    </li>
                    <li><a href="deconnexion.php"> <i class="ti-power-off"></i>Deconnexion </a></li>
                    
                </ul>
            </div>
        </div>
    </div>

    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <i class="ti-bell"></i>
                                <div class="drop-down dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">Recent Notifications</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <span class="user-avatar">Adminn
                                    <i class="ti-angle-down f-s-10"></i>
                                </span>
                                <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">Upgrade Now</span>
                                        <p class="trial-day">30 Days Trail</p>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="deconnexion.php">
                                                    <i class="ti-power-off"></i>
                                                    <span>Se deconnecter</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Bienvenue sur le  panel Admininsateur</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Home</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-money color-success border-success"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Total Profit</div>
                                        <div class="stat-digit">1,012</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-user color-primary border-primary"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">New Customer</div>
                                        <div class="stat-digit">961</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-layout-grid2 color-pink border-pink"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Active Projects</div>
                                        <div class="stat-digit">770</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-link color-danger border-danger"></i></div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Referral</div>
                                        <div class="stat-digit">2,781</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Fee Collections and Expenses</h4>

                                </div>
                                <div class="card-body">
                                    <div class="ct-bar-chart m-t-30"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card">

                                <div class="card-body">
                                    <div class="ct-pie-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                        
                   
                    <!-- /# row -->
</div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2022 © MyDodaDEv. - <a href="#">mydodadev.com</a></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- jquery vendor -->
    <script src="admin/assets/js/lib/jquery.min.js"></script>
    <script src="admin/assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="admin/assets/js/lib/menubar/sidebar.js"></script>
    <script src="admin/assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->

    <script src="admin/assets/js/lib/bootstrap.min.js"></script>
    <script src="admin/assets/js/scripts.js"></script>
    <!-- bootstrap -->

    <script src="admin/assets/js/lib/calendar-2/moment.latest.min.js"></script>
    <script src="admin/assets/js/lib/calendar-2/pignose.calendar.min.js"></script>
    <script src="admin/assets/js/lib/calendar-2/pignose.init.js"></script>


    <script src="admin/assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="admin/assets/js/lib/weather/weather-init.js"></script>
    <script src="admin/assets/js/lib/circle-progress/circle-progress.min.js"></script>
    <script src="admin/assets/js/lib/circle-progress/circle-progress-init.js"></script>
    <script src="admin/assets/js/lib/chartist/chartist.min.js"></script>
    <script src="admin/assets/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
    <script src="admin/assets/js/lib/sparklinechart/sparkline.init.js"></script>
    <script src="admin/assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="admin/assets/js/lib/owl-carousel/owl.carousel-init.js"></script>
    <!-- scripit init-->
    <script src="admin/assets/js/dashboard2.js"></script>
</body>

</html>