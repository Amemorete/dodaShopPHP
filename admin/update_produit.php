

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

            <h1 class="text-center">Modfication d'un article</h1>
            
        </div>

        <form action="#" th:action="@{/updateProduit}" th:object="${produit}" method="POST" enctype="multipart/form-data">
            <input type="hidden" th:field="*{id}" placeholder="le nom de l'article" class="form-control m-4 col-4 ">
            <div class="row input-group input-group-default">

                <input type="text" th:field="*{libelle}" placeholder="le nom de l'article" class="form-control m-4 col-4 ">
                <input type="number" th:field="*{quantite}" placeholder="quantite" class="form-control m-4 col-4 mb-4 ">
                <input type="number" th:field="*{prixUnitaire}" placeholder="prixUnitaire" class="form-control m-4 col-4  ">
               

            </div>
            <div class="row input-group input-group-default">

                <input type="text" th:field="*{description}" placeholder="description" class="form-control m-4 col-4 mb-4 ">
                

                    <select th:field="*{categorie}" class="form-control m-4 col-4  " >
                        <option value="">choissiez la categorie</option>
                        <option th:each="categorie : ${listcategorie}" 
                        th:value="${categorie.id}"
                        th:text="${categorie.libelle}">
    
                        </option>
                    </select>
    

                <input type="file" name="image1" placeholder="photo1"    class="form-control m-4 col-6 mb-4 ">
               

            </div>
            <div class="row input-group input-group-default">

                <input type="file" name="image2" placeholder="photo2"    class="form-control m-4 col-4 mb-4 ">
                <input type="file" name="image3" placeholder="photo3"    class="form-control m-4 col-4 mb-4 ">
                <input type="file" name="image4" placeholder="photo4"    class="form-control m-4 col-4 mb-4 ">
               

            </div>
            
            <button type="submit" class="btn btn-success col-3"> Modifier</button>
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

