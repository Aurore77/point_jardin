<!-- Hello World -->
<!-- Comment ça va ? -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Point Jardin</title>

	<!-- Google fonts -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <!--CSS adapté au site-->
    <link href="style.css" type="text/css" rel="stylesheet">



</head>

  
 <body>

<?php include('includes/nav.php'); ?>
<?php include('includes/carrousel.php'); ?>
<?php include('includes/bienvenue.html'); ?>
<?php include('includes/video.php'); ?>
<?php include('includes/module_facebook.php'); ?>

<!--    <script> $(document).ready(function(){
      $('.carousel').carousel();
    });</script>

  <div class="carousel carousel-slider">
    <a class="carousel-item" href="#one!"><img src="http://lorempixel.com/800/400/food/1"></a>
    <a class="carousel-item" href="#two!"><img src="http://lorempixel.com/800/400/food/2"></a>
    <a class="carousel-item" href="#three!"><img src="http://lorempixel.com/800/400/food/3"></a>
    <a class="carousel-item" href="#four!"><img src="http://lorempixel.com/800/400/food/4"></a>
  </div>
 -->
<script>$('.carousel.carousel-slider').carousel({full_width: true});</script>

<?php include('includes/footer.php'); ?>

