<!DOCTYPE html>
<html lang="en" xmlns:f="http://xmlns.jcp.org/jsf/core" 
xmlns:h="http://xmlns.jcp.org/jsf/html">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>page d' accueil</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v4.7.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <style>
        /**********************************/
/********** Top Bar CSS ***********/
/**********************************/
.top-bar {
    position: relative;
    height: 75px;
    display: flex;
    align-items: center;
    background: #ffffff;
}

.logo {
    text-align: left;
    overflow: hidden;
}

.top-top.logo h1 {
    margin: -4px 0 0 0;
    color: #8d0612;
    font-size: 50px;
    line-height: 50px;
    font-weight: 800;
    letter-spacing: 1px;
    font-style: italic;
}

 .logo h1 span {
    color: #e976ad;
}

 .logo img {
    max-width: 100%;
    max-height: 60px;
}

 .top-bar-item {
    display: flex;
    align-items: center;
    justify-content: flex-end;
}

.top-bar-icon {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #e976ad;
    border-radius: 40px;
}

 .top-bar-icon i {
    margin: 0;
    color: #ffffff;
    font-size: 16px;
}

 .top-bar-text {
    padding-left: 15px;
}

 .top-bar-text h3 {
    margin: 0 0 5px 0;
    font-size: 18px;
    font-weight: 600;
}

 .top-bar-text p {
    margin: 0;
    font-size: 14px;
    font-weight: 400;
}

@media (max-width: 991.98px) {
    .top-bar .logo {
        text-align: center;
    }
}
    </style>
  
  

  <!-- ======= Header ======= -->
  
  <header id="header" class="fixed-top" >
    <div class="container " >
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12">
                <div class="logo">
                    <a href="index.html">
                        <h1>DODA<span>Shop</span></h1>
                        <!-- <img src="img/logo.jpg" alt="Logo"> -->
                    </a>
                </div>
            </div>
            <div class="col-lg-8 col-md-7 d-none d-lg-block">
                <div class="row">
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="far fa-clock"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>Heure D'ouverture</h3>
                                <p>Lun - Dimanche, 7j &nbsp; /  &nbsp;7j</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>Appellez</h3>
                                <p>+227 96 86 84 26</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>Email</h3>
                                <p>floricia@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
  

    <div class="container d-flex justify-content-between text-align-center mt-4" >
        
        
        <a href="#" class="facebook" ><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      
      

      <nav id="navbar" class="navbar order-last order-lg-0">
           
        <ul>
          <li><a class="active" href="index.html">Home</a></li>
          <li><a href="#about">Qui nous-sommes ?</a></li>
          <li><a href="#popular-courses">Maquillage</a></li>
          <li><a href="#trainers">visage</a></li>
          <li><a href="#">Corps</a></li>
          <li><a href="#">Parfums</a></li>

          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a href="contact.html">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>

      </nav><!-- .navbar -->

      <a href="login.php" class="get-started-btn">Admin space</a>
      

    </div>
  </header><!-- End Header -->


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center" >

    
    

    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">

      <h1>Découvrez nos nouveautés Beauté & Hygiène 
       <br> SOIS ÉCLATANTE AVEC NOS PRODUITS</h1>
      <h2>Livraison gratuite au Niger </h2>
      <a href="courses.html" class="btn-get-started">Commencer</a>
    </div>
  </section><!-- End Hero -->
  

  <div class="container-fluid mt-4" style="padding: 0 30px 30px;">
    <div class=" thumbnails row"  >
        <div class="col-lg-2 col-sm-4 ">
            <div  tabindex="0">
                <img src="image/parfums.jpg"  class="image-overlay-remove-50 image-zoom image-cover" style=" border-radius:50%;" width="200px" height="200px">
            </div>

        </div>
        <div class="col-lg-2  col-sm-4">
            <div  tabindex="0">
                <img src="image/maquillage.jpeg"  class="image-overlay-remove-50 image-zoom image-cover" style=" border-radius:50%;" width="200px" height="200px">
            </div>

        </div>

        
        <div class="col-lg-2 col-sm-4">
            <div  tabindex="0">
                <img src="image/soins-visage.jpg"  class="image-overlay-remove-50 image-zoom image-cover" style=" border-radius:50%;" width="200px" height="200px">
            </div>

        </div>
        <div class="col-lg-2 col-sm-4 ">
            <div  tabindex="0">
                <img src="image/gomme.jpg"  class="image-overlay-remove-50 image-zoom image-cover" style=" border-radius:50%;" width="200px" height="200px">
            </div>

        </div>
        <div class="col-lg-2 col-sm-4 ">
            <div  tabindex="0">
                <img src="image/soins-crops.jpg"  class="image-overlay-remove-50 image-zoom image-cover" style=" border-radius:50%;" width="200px" height="200px">
            </div>

        </div>
        <div class="col-lg-2 col-sm-4 ">
            <div  tabindex="0">
                <img src="image/produit-cheveux.jpg"  class="image-overlay-remove-50 image-zoom image-cover" style=" border-radius:50%;" width="200px" height="200px">
                
            </div>
           <p class="text-center mt-4">lokjh</p>

        </div>
  </div>
  <div>
    <div class="container bg-white mb-4">
      <div  class="row pt-4 p-2   ">
        <div class="col ">
          <div class="media-image">
            <img src="produit/prod.webp"  class="image-overlay-remove-50 image-zoom image-cover" style="width: 100%;
display: block;
border: none;" width="100%" height="320vh">

          </div>
          <h5 class="text-center mt-3">
            Assouplit la peau des mains ,unifie ,enlève les tâches
          </h5>
          <div class="text-center"style="font-weight: bold;
          font-size: 17px;
          padding-bottom: 3px;
          line-height: 1.5em;
          height: 1.5em;color: #000;">Je decouvre</div>
            
  
        </div>
        <div class="col pr-0">
          <div class="media-image">
            <img src="produit/savon.jpg"  class="image-overlay-remove-50 image-zoom image-cover" style="width: 100%;
            display: block;
            border: none;" width="100%" height="320vh">
          </div>
          <h5 class="text-center mt-3">
            Traite et enlève les taches et les boutons du visage et du corps.
          </h5>
          <div class="text-center" style="font-weight: bold;
          font-size: 17px;
          padding-bottom: 3px;
          line-height: 1.5em;
          height: 1.5em;color: #000;">j'en profite</div>
  
        </div>
      </div>

    </div>
  </div>
  <main id="main">

 

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="2232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="34" data-purecounter-duration="1" class="purecounter"></span>
            <p>Vendeurs</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>
            <p>Pays</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Points de ventes</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->


    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-4.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>KOi-SONN MANES MANA</h4>
                <span>DEVELLOPEUR web & mobil (ful-stack)</span>
                <p>
                  Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Trainers Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>projetKEG</h4>
            <p>
              Niger niamey<br>
              niamey, Niger<br>
             Afrique<br><br>
              <strong>Phone:</strong> +227 89 29 12 49<br>
              <strong>Email:</strong> floricia@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Liens utiles</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Accueil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">Apropos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#t">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#trainers">Equipe</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Votre commentaire ici</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Soumettre">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>MydodoDEv</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          
          Creer par <a href="#">MyDodaDEv</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>