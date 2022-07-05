
<?php 
include "setting/config.php";
 
 if(isset($_POST['user_add_now']))
 {
	 // $std_fullname,$std_username,$std_password,$std_grade,$std_roll,$std_dob,$std_address,$std_district,$std_gender,$std_father,$std_mother,$std_parent_contact
	 $std_nom = $_POST['nom'];
	 $std_prenom = $_POST['prenom'];
	 $std_password = $_POST['pwd'];
	 $std_abilite = $_POST['abilite'];
	 $std_date= $_POST['dob'];
	 $std_adresse = $_POST['adresse'];
	 $std_email = $_POST['email'];


	 $std_sexe = $_POST['sexe'];
	 
	 if($std_abilite=="" or $std_adresse=="" or $std_date==""  or $std_email=="" 
     or $std_nom=="" or $std_prenom=="" or $std_password=="" or  $std_sexe=="")
	 {
		 echo "<script>alert('remplissez le formulaire');</script>";
	 }
	 else
	 {
		 
		 $add_user_done = $ravi->add_user($std_abilite,$std_adresse,$std_date,$std_email,$std_nom,$std_password,$std_prenom, $std_sexe);
		 if($add_user_done==true)
		 {
			 echo "<script>window.location = 'table-users.php?ravi=users-information';</script>";
		 }
		 else
		 {
			 echo "<script>alert('contact with developer');</script>";
		 }
		 
	 }
	 
 }


?>


<!DOCTYPE html>
<html lang="en" >

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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
             
                 <!-- The Modal -->
                 <div class="modal" id="myModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                  
                        <!-- Modal Header -->
                        <div class="modal-header">
                          <h4 class="modal-title">Enregistrement d'une Categorie</h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                  
                        <!-- Modal body -->
                        <div class="modal-body">
                            
                               
                                   
                            <h2>Ajouter un Article</h2>
                                
                    
                <form method="post" >
   
                            <div class="vali-form row">
                            
                                
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Nom</label>
                                    <input type="text" placeholder="nom" required="" name="nom" class="form-control">
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Prenom</label>
                                    <input type="text" placeholder="prenom" required="" name="prenom" class="form-control">
                                </div>
                                
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Mot de passe</label>
                                    <input type="text" placeholder="Password" required="" name="pwd" class="form-control">
                                </div>

                                

                                <div class="col-md-6 form-group1">
                                     <label class="control-label">gendre</label>
                                     <select name="sexe" id="" class="form-control">
                                         <option value="m">Masculin</option>
                                         <option value="f">Féminin</option>
                                     </select>
                                </div>

                                <div class="col-md-6 form-group1 form-last ">
                                    <label class="control-label">Date de naissance</label>
                                    <input type="date" placeholder="eg 29 Feb 200" required="" name="dob" class="form-control">
                                </div>
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Addresse</label>
                                    <input type="text" placeholder="Addresse" required="" name="adresse" class="form-control">
                                </div>
                                <div class="col-md-6 form-group1 ">
                                    <label class="control-label">Abilité</label>
                                    <input type="text" placeholder="abilite" required="" name="abilite" class="form-control">
                                </div>
                            
                               
                               
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Email</label>
                                    <input type="text" placeholder="email" required="" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        <div class="col-md-12 form-group button-2">
                            <input type="submit" class="btn btn-primary" value="Ajouter un utilisateur" name="user_add_now">
                            <button type="reset" class="btn btn-default">Annuler</button>
                        </div>
                        <div class="clearfix"> </div>
			     </form>
                        </div>
                  
                        <!-- Modal footer -->
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                        </div>
                  
                      </div>
                    </div>
                  </div>
                <section id="main-content"> 
                
                  
                        <!-- /# column -->
                        <div class="col-lg">
                            
                            <div class="card">
                                <div class="card-title">
                                <a href="#"
                                    class="btn btn-success btn-sm mb-3"  data-bs-toggle="modal" data-bs-target="#myModal">Ajouter une nouvelle Categorie</a>
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
                                            <?php $user_dis_admin = $ravi-> user_info_display_admin();
								$t_sn = 1;
								while($user_info_admin =$user_dis_admin->fetch_assoc())					{
									
								
													?>
                                                <tr >
                                              
    
                                                    <td class="btn btn-success" ><?php echo $user_info_admin['id']; ?></td>
                                                    <td ><?php echo $user_info_admin['nom']; ?></td>
                                                        
                                                    <td ><?php echo $user_info_admin['prenom']; ?></td>
                                                    <td ><?php echo $user_info_admin['sexe']; ?></td>
                                                    <td ><?php echo $user_info_admin['adresse']; ?></td>
                                                    <td ><?php echo $user_info_admin['email']; ?></td>
                                                    <td ><?php echo $user_info_admin['abilite']; ?></td>
                                                    <td ><?php echo $user_info_admin['date_naissance']; ?></td>
                                                    <td ><?php echo $user_info_admin['password']; ?></td>
                                                    <td ><?php echo $user_info_admin['date_create']; ?></td>
                                                    <td ><?php echo $user_info_admin['date_update']; ?></td>
                                                    <td> 
                                                        <a href=" update_users.php?user=user-up&userid=<?php echo $user_info_admin['id']; ?>" class="btn btn-primary text-white"> Modifier</a>
                                                        <a href="del_users.php?user=user-del&userid=<?php echo $user_info_admin['id']; ?>" class="btn btn-danger text-white">Supprimer</a>
                                                     </td>
                                                </tr>
                                                <?php $t_sn++; } ?>
    
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