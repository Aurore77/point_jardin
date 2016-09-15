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

<!-- Initialisation JQuery special option-->
<!--    <script> $(document).ready(function(){
        $('.slider').slider();
    });</script> -->
</head>


 <body>

<?php include('includes/nav.php'); ?>

<div class="titre row">
    <div class="col l12 s6 offset-s3">
        <h1>BIENVENUE CHEZ POINT JARDIN !</h1>
        <h3 class="soustitre">La qualité à prix malin</h3>
        <h4>Paul et Laurentine vous accueillent dans votre nouveau point de vente de mat&eacute;riaux pour l'am&eacute;nagement du jardin.</h4>
    </div>
</div>


<?php include('includes/carrousel.html'); ?>
<div class="presentation">
    <?php include('includes/bienvenue.html'); ?>
    <?php include('includes/video.php'); ?>
</div>
<?php include('includes/module_facebook.php'); ?>
<?php include('includes/footer.php'); ?>