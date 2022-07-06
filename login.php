<?php 
session_start();


include "admin/setting/config.php";



if(isset($_POST['login']))
{
  $admin_username = mysqli_real_escape_string($ravi->hackme(),$_POST['username']);
  $admin_password = mysqli_real_escape_string($ravi->hackme(),$_POST['password']);
// echo $admin_username.' '.$admin_password ;
if($admin_username=="" AND $admin_password=="")
{
echo "<script>alert('Entrer votre email et mot de passe');</script>";
}
else
{
$melogin = $ravi->meadmin_check($admin_username,$admin_password);
if($melogin==1)
{
  $_SESSION['admin'] = 	$admin_username;

header("location:admin/table-basic.php");
}


else
{
echo "<script>alert('mot de pas ou email incorrecte');</script>";
}

}


}

if(isset($_SESSION['admin']))
{
header("location:admin/index.php");
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Authentification</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!----CSS link----->
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
 

         

          <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
      <div class="container">
        <div class="card login-card">
          <div class="row no-gutters">
            <div class="col-md-5">
              <img src="logo1.jpg" class="login-card-img">
            </div>
            <div class="col-md-7">
              <div class="card-body">
                <div class="brand-wrapper">
                  <img src="logo1.jpg" class="logo">
                </div>
                <p class="login-card-description">Connectez-vous à votre compte</p>
                <form  method="POST">
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="username"  class="form-control col-12" placeholder="Email adress">
                  </div>
                  <div class="form-group mb-4">
                    <label for="Password" class="sr-only">Mot de passe</label>
                    <input type="password" name="password"  class="form-control" placeholder="**********">
                  </div>
                  <input type="submit" name="login"  class="btn btn-block login-btn mb-4 "  value="Login">
                </form>
                <a href="#!" class="forgot-password-link"></a>
                <p class="login-card-footer-text"><a href="#!" class="text-white">Register here</a></p>
                <nav class="login-card-footer-nav">
                  <a href="#!" class="text-white">Terms of use.</a>
                  <a href="#!" class="text-white">Privacy policy</a>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>