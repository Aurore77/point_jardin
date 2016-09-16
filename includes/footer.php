<footer class="green-background page-footer">
    <div class="container">
        <div class="row">
            <div class="col l4 m4 s12">
                <h5 class="white-text contact">CONTACT</h5>
                <p class="white-text textfooter">
                    54 route Nationale 12 <br />
                    28380 Saint-Rémy-sur-Avre <br />
                    Tél : 02 37 63 50 22 <br />
                    Mail : info@point-jardin.fr
                </p>
            </div>
            <div class="col l8 m8 s12">
                <h5 class="white-text horaires">HORAIRES</h5>
                <div class="row">
                    <div class="col l4 s12">
                        <p class="white-text textfooter">
                            <u>Du lundi au vendredi</u> : <br />
                            8h/12h - 13h30/18h
                        </p>
                    </div>
                    <div class="col l4 s12">
                        <p class="white-text textfooter">
                            <u>Le samedi</u> : <br />
                            9h/17h30 non stop
                        </p>
                    </div>
                    <div class="col l4 s12">
                        <p class="white-text textfooter">
                            <u>Le dimanche</u> : <br />
                            Ouverture exceptionnelle indiquée en page Accueil.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2015 Copyright Point Jardin
            <a class="grey-text text-lighten-4 right" href="#!">Mentions légales</a>
        </div>
    </div>
</footer>

<!-- Appel Script aide au Dropdown nav-->
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

<!-- Compiled and minified JavaScript Dropdown nav-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

<!-- Script Barre de navigation -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>



<!--Import jQuery before materialize.js Carousel-->
     <!--  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../materialize/js/materialize.min.js"></script> -->

<!-- Jquery Carousel -->
<script type="text/javascript" src="../materialize/js/materialize.js">$('.carousel.carousel-slider').carousel({full_width: true});</script>

<script type="text/javascript">
    $(document).ready(function(){ 
    $('.slider').slider(); 
});

</script>
<script type="text/javascript">
    $(document).ready(function(){  $(".button-collapse").sideNav(); <!--version responsive-->
});
</script>

<!-- Ajout d'un bouton scroll vers le haut -->

<script>$(document).ready(function () {
    // Add return on top button
    $('body').append('<div id="returnOnTop" title="Return on top">&nbsp;</div>');

    // On button click, let's scroll up to top
    $('#returnOnTop').on ('click', function() {
        $('html,body').animate({scrollTop: 0}, 'slow');
    });
});

$(window).scroll(function() {
    // If on top fade the bouton out, else fade it in
    if ( $(window).scrollTop() == 0 )
        $('#returnOnTop').fadeOut();
    else
        $('#returnOnTop').fadeIn();
});
</script>


</body>
</html>