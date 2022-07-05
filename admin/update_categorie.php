<?php 
session_start();


include "setting/config.php";

$up_categorieid = $_GET['categorieid'];



if(isset($_POST['modif']))
 {
	 //$add_t_fullname,$add_t_address,$add_t_email,$add_t_username,$add_t_pass,$add_t_father,$add_t_mother,$add_t_dob,$add_t_qualification,$add_t_contact,$add_t_staff,$add_t_gender
	 
     $add_c_libelle = $_POST['libelle'];
     $date=$_POST['date'];
    
	 if( $add_c_libelle=="" ){
		 echo "<script>alert('remplir le formulaire....');</script>";
	 }
	 else
	 {
	
        $add_done = $ravi->update_categorie($add_c_libelle,$date,$up_categorieid);
	 
	 if($add_done==true)
	 {
		 echo "<script>window.location='table-categorie.php?categorie=categorie-information';</script>";
	 }
	 else
	 {
		 echo "<script>alert('unsuccess add teacher information');</script>";
	 }
 }
 }


?>

<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">

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
            <h1 class="text-center">Modfication d'une categorie</h1>
            
        </div>

    <form  th:object="${categorie}" method="POST">
        <input type="hidden" th:field="*{id}" />
        <div class="input-group input-group-default">
            <input type="text" name="libelle" placeholder="le nom du categorie" class="form-control m-4 col-4  ">
            <input type="date" name="date" placeholder="date mise a jour" class="form-control m-4 col-4  ">



        </div>
        <button type="submit" class="btn btn-success col-3" name="modif"> Modifier</button>
        <button type="reset" class="btn btn-info col-3 mb-3"> Annuler</button>
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

