<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Users table</title>

 
    <link href="admin/assets/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="admin/assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="admin/assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="admin/assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="admin/assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="admin/assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="admin/assets/css/lib/weather-icons.css" rel="stylesheet" />
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
                                <i class="ti-email"></i>
                                <div class="drop-down dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">2 New Messages</span>
                                        <a href="email.html">
                                            <i class="ti-pencil-alt pull-right"></i>
                                        </a>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li class="notification-unread">
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/1.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Michael Qin</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="notification-unread">
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/2.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Michael Qin</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/2.jpg" alt="" />
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
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome Here</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Table-Basic</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
             
                <section id="main-content"> 
                
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Table  </h4>
                                    
                                </div>
                                <div class="card-body">
                                    <form action="#" th:action="@{/saveUsers}" th:object="${users}" method="POST">
                                        <div class="input-group input-group-default">
                                            <input type="text" th:field="*{nom}" placeholder="nom de l'utilisateur " class="form-control m-4 col  ">
                            
                                            <input type="text" th:field="*{prenom}" placeholder="prenom l'etudiant" class="form-control m-4 col mb-4 ">
                                            
                            
                                        </div>
                                        <div  class="input-group input-group-default">
                                            <select name="" id=""  th:field="*{sexe}" class="form-control m-4 col-3 mb-4">
                                                <option value="f">feminin</option>
                                                <option value="m">masculin</option>
                                            </select>
                                        <input type="text" th:field="*{adresse}" placeholder="l'adresse" class="form-control m-4 col-7 mb-4 ">
                                        </div>
                                        <input type="text" th:field="*{abilite}" placeholder="l'abilite" class="form-control m-4 col-8 mb-4 ">
                                        
                            
                                        
                                        <div class="input-group input-group-default">
                                            <input type="text" th:field="*{email}" placeholder="entrer l'email" class="form-control m-4 col-4  ">
                                        <input type="date" th:field="*{dateNaissance}" placeholder="Date de naissance" class="form-control m-4 col-4">
                                        
                                        </div>
                                        <input type="text" th:field="*{password}" placeholder="password" class="form-control m-4 col-4">
                                       
                            
                                        <button type="submit" class="btn btn-success col-4"> Ajouter</button>
                                        <button type="reset" class="btn btn-info col-4"> Annuler</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                        <div class="col-lg-8">
                            
                            <div class="card">
                                <div class="card-title">
                                    <h4>Table Users </h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                        <th>Nom</th>
                                                        <th>Prenom</th>
                                                        <th>sexe</th>
                                                        <th>Adresse</th>
                                                        <th>Email</th>
                                                        <th>Abilite</th>
                                                        <th>DateNaissance</th>
                                                        <th>Password</th>
                                                        <th>DateCreate</th>
                                                        <th>DateUpdate</th>
                                                        <th>Operation</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr th:each="users : ${listusers}">
    
                                                    <td class="badge badge-success" th:text="${users.id}">
                                                    <td th:text="${users.nom}"></td>
                                                        
                                                    <td th:text="${users.prenom}"></td>
                                                    <td th:text="${users.sexe}"></td>
                                                    <td th:text="${users.adresse}"></td>
                                                    <td th:text="${users.email}"></td>
                                                    <td th:text="${users.abilite}"></td>
                                                    <td th:text="${users.dateNaissance}"></td>
                                                    <td th:text="${users.password}"></td>
                                                    <td th:text="${users.dateCreate}"></td>
                                                    <td th:text="${users.dateUpdate}"></td>
                                                    <td> 
                                                        <a th:href="@{/showFormUpdateUsers/{id}(id=${users.id})}" class="btn btn-primary"> Modifier</a>
                                                        <a th:href="@{/deleteUsers/{id}(id=${users.id})}" class="btn btn-danger"> Supprimer</a>
                                                     </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->

                    </div>
                    <!-- /# row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2022 © Mydodadev.com - <a href="#">groupe.com</a></p>
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
     <script src="assets/js/lib/calendar-2/pignose.init.js"></script>
 
 
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