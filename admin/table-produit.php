<?php

include "setting/config.php";
session_start();
if(!$_SESSION['admin'])
{
	header("location:../login.php");
}



if(isset($_POST['add_produit_info']))
 {
	 //$add_t_fullname,$add_t_address,$add_t_email,$add_t_username,$add_t_pass,$add_t_father,$add_t_mother,$add_t_dob,$add_t_qualification,$add_t_contact,$add_t_staff,$add_t_gender
	 
     $add_p_nom = $_POST['nom'];
     $add_p_qte = $_POST['quantite'];
     $add_p_prix = $_POST['prixUnitaire'];
     $add_p_description = $_POST['description'];
     $add_p_categorie = $_POST['categorie'];



     $photo1=$_FILES['image1']['name'];
     $upload="picture/".$photo1;
     move_uploaded_file($_FILES['image1']['tmp_name'],$upload);

     $photo2=$_FILES['image2']['name'];
     $upload="picture/".$photo2;
     move_uploaded_file($_FILES['image2']['tmp_name'],$upload);

     $photo3=$_FILES['image3']['name'];
     $upload="picture/".$photo3;
     move_uploaded_file($_FILES['image3']['tmp_name'],$upload);

     $photo4=$_FILES['image4']['name'];
     $upload="picture/".$photo4;
     move_uploaded_file($_FILES['image4']['tmp_name'],$upload);


    
    
	 if( $add_p_nom=="" OR  $add_p_prix=="" OR   $add_p_qte=="" OR $add_p_description=="" OR  $add_p_categorie==""){
		 echo "<script>alert('remplir le formulaire....');</script>";
	 }
	 else
	 {
	
        $add_done = $ravi->add_produit($add_p_nom,$add_p_qte,$add_p_prix,$add_p_description,$add_p_categorie,$photo1,$photo2,$photo3,$photo4);
	 
	 if($add_done==true)
	 {
		 echo "<script>window.location='table-produit.php?produit=produit-information';</script>";
	 }
	 else
	 {
		 echo "<script>alert('unsuccess add produit information');</script>";
	 }
 }
 }
?>



<!DOCTYPE html>
<html lang="fr" >

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin: Data Table</title>

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
    <link href="admin/assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="admin/assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="admin/assets/css/lib/data-table/buttons.bootstrap.min.css" rel="stylesheet" />
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
    <!-- /# sidebar -->


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
                            <li><a href="deconnexion.php">Deconnexion </a></li>
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
                                <span class="user-avatar">Admin
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
                                <h1>Bienvenue sur la <span>Table-article</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Table-article</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>

                  <!-- The Modal -->
                  <div class="modal" id="myModal">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                  
                        <!-- Modal Header -->
                        <div class="modal-header">
                          <h4 class="modal-title">Enregistrement d'un produit</h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                  
                        <!-- Modal body -->
                        <div class="modal-body">
                            
                               
                                   
                          
                               
                            <h2>Ajouter un produit</h2>
                                
                    
                            <form  method="POST" enctype="multipart/form-data">
                                <div class="row input-group input-group-default">
                    
                                    <input type="text" name="nom" placeholder="le nom de l'article" class="form-control m-4 col-4 ">
                                    <input type="number" name="quantite" placeholder="quantite" class="form-control m-4 col-4 mb-4 ">
                                    <input type="number" name="prixUnitaire" placeholder="prixUnitaire" class="form-control m-4 col-4  ">
                                   
                    
                                </div>
                                <div class="row input-group input-group-default">
                    
                                    <input type="text" name="description" placeholder="description" class="form-control m-4 col-4 mb-4 ">
                                    
                    
                                        <select name="categorie" class="form-control m-4 col-4  " >
                                            <option value="">choissiez la categorie</option>

                                            <?php 
                                                    $st_add_categorie = $ravi->categorie_info_display_admin();
                                                    while($st_add_categorie_fetch = $st_add_categorie->fetch_assoc())
                                                    {
                                                    ?>
                                                            <option value="<?php echo $st_add_categorie_fetch['id']; ?>"><?php echo $st_add_categorie_fetch['libelle']; ?></option>
                                                    
                                            <?php } ?>
                                          
                        
                                            </option>
                                        </select>

                        
                    
                                    <input type="file" name="image1" placeholder="photo1"    class="form-control m-4 col-6 mb-4 ">
                                   
                    
                                </div>
                                <div class="row input-group input-group-default">
                    
                                    <input type="file" name="image2" placeholder="photo2"    class="form-control m-4 col-4 mb-4 ">
                                    <input type="file" name="image3" placeholder="photo3"    class="form-control m-4 col-4 mb-4 ">
                                    <input type="file" name="image4" placeholder="photo4"    class="form-control m-4 col-4 mb-4 ">
                                   
                    
                                </div>
                                
                                <button type="submit" class="btn btn-success col-3" name="add_produit_info"> Ajouter</button>
                                <button type="reset" class="btn btn-info col-3 m-4"> Annuler</button>
                            </form>
                        </div>
                  
                        <!-- Modal footer -->
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                        </div>
                  
                      </div>
                    </div>
                  </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="bootstrap-data-table-panel">
                                    <a href="#"
                                    class="btn btn-success btn-sm mb-3" data-bs-toggle="modal" data-bs-target="#myModal">Ajouter un article</a>
                                    <div class="table-responsive">
                                            <table id="bootstrap-data-table-export" class="table table-striped ">
                                                <thead >
                                                    <tr class=" shadow btn-white text-white ">
                                                        <th>ID</th>
                                                        <th>Libelle</th>
                                                        <th>Quantite</th>
                                                        <th>Prix</th>
                                                        <th>Description</th>
                                                        <th>Photo1</th>
                                                        <th>Photo2</th>
                                                        <th>Photo3</th>
                                                        <th>Photo4</th>
                                                        <th>Categorie</th>
                                                        <th>DateCreation</th>
                                                        <th>DateModification</th>
                                                        <th>operation</th>
                                                    </tr>
                                                </thead>
                                                <tbody >
                                                <?php $produit_dis_admin = $ravi-> produit_info_display_admin();
								$t_sn = 1;
								while($produit_info_admin =$produit_dis_admin->fetch_assoc())					{
									
								
													?>	
                                                    <tr >
    
                                                        <td class="btn-success" ><?php echo $produit_info_admin['idProd']; ?></td>
                                                        <td > <?php echo $produit_info_admin['libelleProd']; ?></td>
                                                        <td ><?php echo $produit_info_admin['quantite']; ?></td>
                                                         <td ><?php echo $produit_info_admin['prix_unitaire']; ?></td>
                                                         <td ><?php echo $produit_info_admin['description']; ?></td>
                                                        
                                                         <td ><img   width="100" height="50"  src="<?php echo 'picture/'.$produit_info_admin['photo1']; ?>"></td>
                                                         <td ><img   width="100" height="50"  src="<?php echo 'picture/'.$produit_info_admin['photo2']; ?>"></td>
                                                         <td ><img   width="100" height="50"  src="<?php echo 'picture/'.$produit_info_admin['photo3']; ?>"></td>
                                                         <td ><img   width="100" height="50"  src="<?php echo 'picture/'.$produit_info_admin['photo4']; ?>"></td>
                                                         <td ><?php echo $produit_info_admin['libelle']; ?></td>
                                                        <td ><?php echo $produit_info_admin['date_createp']; ?></td>
                                                         <td ><?php echo $produit_info_admin['date_updatep']; ?></td>
                                                        
                
                                                        
                                                        <td> 
                                                        <a href="update_produit.php?produit=produit-up&produitid=<?php echo $produit_info_admin['idProd']; ?>" class="btn btn-primary text-white"> Modifier</a>
                                                            <a href="del_produit.php?produit=produit-del&produitid=<?php echo $produit_info_admin['idProd']; ?>" class="btn btn-danger text-white"> Supprimer</a>
                                                            
                                                        </td>
                                                    </tr>
                                                    <?php $t_sn++; } ?>
    
                                                        
                                                </tbody>
                                            </table>
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
                                <p>2022 © MyDodadev . - <a href="#">mydodadev.com</a></p>
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
    
    <!-- bootstrap -->

    <script src="admin/assets/js/lib/bootstrap.min.js"></script><script src="assets/js/scripts.js"></script>
    <!-- scripit init-->
    <script src="admin/assets/js/lib/data-table/datatables.min.js"></script>
    <script src="admin/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="admin/assets/js/lib/data-table/buttons.flash.min.js"></script>
    <script src="admin/assets/js/lib/data-table/jszip.min.js"></script>
    <script src="admin/assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="admin/assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="admin/assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="admin/assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="admin/assets/js/lib/data-table/datatables-init.js"></script>










</body>

</html>