<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Calender</title>




    <!-- Toastr -->
    <link href="admin/assets/css/lib/toastr/toastr.min.css" rel="stylesheet">
    <!-- Sweet Alert -->
    <link href="admin/assets/css/lib/sweetalert/sweetalert.css" rel="stylesheet">
    <!-- Range Slider -->
    <link href="admin/assets/css/lib/rangSlider/ion.rangeSlider.css" rel="stylesheet">
    <link href="admin/assets/css/lib/rangSlider/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <!-- Bar Rating -->
    <link href="admin/assets/css/lib/barRating/barRating.css" rel="stylesheet">
    <!-- Nestable -->
    <link href="admin/assets/css/lib/nestable/nestable.css" rel="stylesheet">
    <!-- JsGrid -->
    <link href="admin/assets/css/lib/jsgrid/jsgrid-theme.min.css" rel="stylesheet" />
    <link href="admin/assets/css/lib/jsgrid/jsgrid.min.css" type="text/css" rel="stylesheet" />
    <!-- Datatable -->
    <link href="admin/assets/css/lib/datatable/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="admin/assets/css/lib/data-table/buttons.bootstrap.min.css" rel="stylesheet" />
    <!-- Calender 2 -->
    <link href="admin/assets/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <!-- Weather Icon -->
    <link href="admin/assets/css/lib/weather-icons.css" rel="stylesheet" />
    <!-- Owl Carousel -->
    <link href="admin/assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="admin/assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <!-- Select2 -->
    <link href="admin/assets/css/lib/select2/select2.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link href="admin/assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <!-- Calender -->
    <link href="admin/assets/css/lib/calendar/fullcalendar.css" rel="stylesheet" />

    <!-- Common -->
    <link href="admin/assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="admin/assets/css/lib/themify-icons.css" rel="stylesheet">
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
                            <li><a href="index1.html">Dashboard 2</a></li>
                        </ul>
                    </li>

                    <li class="label">Apps</li>
                    <li><a href="uc-calendar.php"><i class="ti-calendar"></i> Calandrier </a></li>
                    <li><a href="email.php"><i class="ti-email"></i> Email</a></li>
                    <li><a href="profile.php"><i class="ti-user"></i> Profile</a></li>
                    <li><a href="table-produit.php"><i class="ti-truck"></i>produits</a></li>
                    <li><a href="table-categorie.php"><i class="ti-view-list-alt"></i>categories </a></li>
        
                    <li><a class="sidebar-sub-toggle"><i class="ti-layout-grid4-alt"></i> Table <span
                                class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="table-basic.php">Basic</a></li>

                            <li><a href="table-users.php">Utilisateurs</a></li>
                           
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
        <!-- /# sidebar -->


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
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">5 members joined today </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Mariam</div>
                                                        <div class="notification-text">likes a photo of you</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Tasnim</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="text-center">
                                                <a href="#" class="more-link">See All</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <span class="user-avatar">John
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
                                                <a href="#">
                                                    <i class="ti-user"></i>
                                                    <span>Profile</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="ti-email"></i>
                                                    <span>Inbox</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-settings"></i>
                                                    <span>Setting</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="ti-lock"></i>
                                                    <span>Lock Screen</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-power-off"></i>
                                                    <span>Logout</span>
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
                
                <div class="content-wrap">
                    <div class="main">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-lg-8 p-r-0 title-margin-right">
                            <div class="page-header">
                              <div class="page-title">
                                <h1>Hello,
                                  <span>Bienvenue</span>
                                </h1>
                              </div>
                            </div>
                          </div>
                          <!-- /# column -->
                          <div class="col-lg-4 p-l-0 title-margin-left">
                            <div class="page-header">
                              <div class="page-title">
                                <ol class="breadcrumb">
                                  <li class="breadcrumb-item">
                                    <a href="#">Dashboard</a>
                                  </li>
                                  <li class="breadcrumb-item active">App-Emploi-Temps</li>
                                </ol>
                              </div>
                            </div>
                          </div>
                          <!-- /# column -->
                        </div>
                        <!-- /# row -->
                        <section id="main-content">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="card">
                                <div class="card-title">
                                  <h4>Emploi du Temps</h4>
                                </div>
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-lg-3">
                                      <a href="#" data-toggle="modal" data-target="#add-category" class="btn btn-lg btn-success btn-block waves-effect waves-light">
                                        <i class="fa fa-plus"></i> Nouvelle creation
                                      </a>
                
                                      
                
                                    </div>
                                    <div class="col-md-9">
                                      <div class="card-box">
                                        <div id="calendar"></div>
                                      </div>
                                    </div>
                                    <!-- end col -->
                                    <!-- BEGIN MODAL -->
                                    <div class="modal fade none-border" id="event-modal">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">
                                              <strong>Ajouter un evenement</strong>
                                            </h4>
                                          </div>
                                          <div class="modal-body"></div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fermer</button>
                                            <button type="button" class="btn btn-success save-event waves-effect waves-light">Creer un evennement</button>
                                            <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Supprimer</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                
                                    <!-- Modal Add Category -->
                                    <div class="modal fade none-border" id="add-category">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">
                                              <strong>Ajouter une categorie </strong>
                                            </h4>
                                          </div>
                                          <div class="modal-body">
                                            <form>
                                              <div class="row">
                                                <div class="col-md-6">
                                                  <label class="control-label">Nom du categorie</label>
                                                  <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name" />
                                                </div>
                                                <div class="col-md-6">
                                                  <label class="control-label">choisissez une couleur</label>
                                                  <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                    <option value="success">Vert</option>
                                                    <option value="danger">Rouge</option>
                                                    <option value="info">Info</option>
                                                    <option value="pink">Pink</option>
                                                    <option value="primary">bleu</option>
                                                    <option value="warning">jaune</option>
                                                  </select>
                                                </div>
                                              </div>
                                            </form>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- END MODAL -->
                                  </div>
                                </div>
                              </div>
                              <!-- /# card -->
                            </div>
                            <!-- /# column -->
                          </div>
                          <!-- /# row -->
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="footer">
                                <p>2022 © . -
                                  <a href="#">groupeAPI.com</a>
                                </p>
                              </div>
                            </div>
                          </div>
                        </section>
                
                      </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    
       <script src="admin/assets/js/lib/jquery.min.js"></script>
       <script src="admin/assets/js/lib/jquery.nanoscroller.min.js"></script>
       <script src="admin/assets/js/lib/menubar/sidebar.js"></script>
       <script src="admin/assets/js/lib/preloader/pace.min.js"></script>
       <script src="admin/assets/js/lib/bootstrap.min.js"></script>
       <script src="admin/assets/js/scripts.js"></script>
     
       <script src="admin/assets/js/lib/jquery-ui/jquery-ui.min.js"></script>
       <script src="admin/assets/js/lib/moment/moment.js"></script>
       <script src="admin/assets/js/lib/calendar/fullcalendar.min.js"></script>
       <script src="admin/assets/js/lib/calendar/fullcalendar-init.js"></script>
       <!-- scripit init-->
    <!-- scripit init-->
</body>

</html>