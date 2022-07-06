<?php 
include "setting/config.php";


$up_userid = $_GET['userid'];
 
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
     $std_date_up = $_POST['date_update'];

	 $std_sexe = $_POST['sexe'];
	 
	 if($std_abilite=="" or $std_adresse=="" or $std_date==""  or $std_email=="" 
     or $std_nom=="" or $std_prenom=="" or $std_password=="" or  $std_sexe=="")
	 {
		 echo "<script>alert('remplissez le formulaire');</script>";
	 }
	 else
	 {
		 
		 $update_user_done = $ravi->up_user($std_abilite,$std_adresse,$std_date,$std_email,$std_nom,$std_password,$std_prenom, $std_sexe, $std_date_up,$up_userid);
		 if($update_user_done==true)
		 {
			 echo "<script>window.location = 'table-users.php?ravi=users-information';</script>";
		 }
		 else
		 {
			 echo "<script>alert('contact with developer');</script>";
		 }
		 
	 }
	 
 }

 	

 $dis_general_data = $ravi->userBy_info_display_admin($up_userid);

$row= $dis_general_data->fetch_assoc();




?>

<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="ISO-8859-1">
    <title>Admin Management System</title>
    
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
       
        <div class="card">
            <div class="card-title">
                <h1>Modification  d'un admin</h1>
        <h2>Modifier L'admin</h2>
            </div>

            <form method="post" >
   
   <div class="vali-form row">
   
       
       <div class="col-md-6 form-group1 form-last">
           <label class="control-label">Nom</label>
           <input type="text" value="<?php echo $row['nom']; ?>" required="" name="nom" class="form-control">
       </div>
       <div class="col-md-6 form-group1 form-last">
           <label class="control-label">Prenom</label>
           <input type="text"  value="<?php echo $row['prenom']; ?>" required="" name="prenom" class="form-control">
       </div>
       
       <div class="col-md-6 form-group1">
           <label class="control-label">Mot de passe</label>
           <input type="text"  value="<?php echo $row['pwd']; ?>" required="" name="pwd" class="form-control">
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
           <input type="date"  value="<?php echo $row['date_naissance']; ?>" required="" name="dob" class="form-control">
       </div>
       <div class="col-md-6 form-group1">
           <label class="control-label">Addresse</label>
           <input type="text"  value="<?php echo $row['adresse']; ?>" required="" name="adresse" class="form-control">
       </div>
       <div class="col-md-6 form-group1 ">
           <label class="control-label">Abilité</label>
           <input type="text"  value="<?php echo $row['abilite']; ?>" required="" name="abilite" class="form-control">
       </div>
   
      
      
       <div class="col-md-6 form-group1 form-last">
           <label class="control-label">Email</label>
           <input type="text"  value="<?php echo $row['email']; ?>" required="" name="email" class="form-control">
       </div>
       <div class="col-md-6 form-group1 form-last">
           <label class="control-label">Date de Modification</label>
           <input type="date"  value="<?php echo $row['date_update']; ?>" required="" name="date_update" class="form-control">
       </div>
   </div>
   <div class="clearfix"> </div>
<div class="col-md-12 form-group button-2">
   <input type="submit" class="btn btn-primary" value="Modifier un utilisateur" name="user_add_now">
   <button type="reset" class="btn btn-default">Annuler</button>
</div>
<div class="clearfix"> </div>
</form>

      

        <a th:href="@{/users}" class="btn btn-primary col-2 m-4 text-white">retrour</a>
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
