
<?php

include "setting/config.php";

$up_produitid = $_GET['produitid'];


if(isset($_POST['up_produit_info']))
 {
	 //$add_t_fullname,$add_t_address,$add_t_email,$add_t_username,$add_t_pass,$add_t_father,$add_t_mother,$add_t_dob,$add_t_qualification,$add_t_contact,$add_t_staff,$add_t_gender
	 
     $add_p_nom = $_POST['nom'];
     $add_p_qte = $_POST['quantite'];
     $add_p_prix = $_POST['prixUnitaire'];
     $add_p_description = $_POST['description'];
     $add_p_categorie = $_POST['categorie'];
     $add_p_date=$_POST['date'];



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


    
    
	 if( $add_p_nom=="" OR  $add_p_prix=="" OR   $add_p_qte=="" OR $add_p_description=="" OR  $add_p_categorie=="" OR $add_p_date==""){
		 echo "<script>alert('remplir le formulaire....');</script>";
	 }
	 else
	 {
	
        $add_done = $ravi->update_produit($add_p_nom,$add_p_qte,$add_p_prix,$add_p_description,$add_p_categorie,$photo1,$photo2,$photo3,$photo4,$add_p_date,$up_produitid);
	 
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

 $dis_general = $ravi->getByIdProduit($up_produitid);

$row= $dis_general->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="ISO-8859-1">
    <title>Categorie</title>
    
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
<div class="container">
    
   
    <div class="card shadow mt-4">
        <div class="card-title">

            <h1 class="text-center">Modfication d'un article</h1>
            
        </div>

        <form  method="POST" enctype="multipart/form-data">
                                <div class="row input-group input-group-default">
                    
                                    <input type="text" name="nom" value="<?php echo $row['libelleProd']; ?>" class="form-control m-4 col-4 ">
                                    <input type="number" name="quantite" value="<?php echo $row['quantite']; ?>" class="form-control m-4 col-4 mb-4 ">
                                    <input type="number" name="prixUnitaire" value="<?php echo $row['prix_unitaire']; ?>" class="form-control m-4 col-4  ">
                                   
                    
                                </div>
                                <div class="row input-group input-group-default">
                    
                                    <input type="text" name="description" value="<?php echo $row['description']; ?>" class="form-control m-4 col-4 mb-4 ">
                                    
                    
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
                                <div class="row input-group input-group-default">
                                <input type="date" name="date"    class="form-control m-4 col-4 mb-4 ">
                                   
                    
                                </div>
                               
                                
                                <button type="submit" class="btn btn-success col-3" name="up_produit_info"> Ajouter</button>
                                <button type="reset" class="btn btn-info col-3 m-4"> Annuler</button>
                            </form>
  

    <a th:href="@{/produit}" class="btn btn-primary col-2">retrour</a>
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

