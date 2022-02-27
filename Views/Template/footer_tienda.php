<div class="footer">
    <div class="container">
        <br>
        <div class="row footer-info">
            <div class="col-md-4 col-sm-4 footer-info-grid links">
                <h4>ENLACES RÁPIDOS</h4>
                <ul>
                    <li><a href="#about">Acerca</a></li>
                    <li><a href="#features">Caracteristicas</a></li>
                    <li><a href="#skills">Habilidades</a></li>
                    <li><a href="#team">Equipo</a></li>
                    <li><a href="#">Inicio</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-4 footer-info-grid address">
                <h4>Direccion</h4>
                <address>
                    <ul>
                        <li>Alfonzo Lopez III Etapa</li>
                        <li>Cali Valle</li>
                        <li>Colombia</li>
                        <li>Telefono : +5 (314) 707-2792</li>
                        <li>Email : <a class="mail" href="mailto:jose.dgo97@gmail.com">info jose.dgo97@gmail.com</a></li>
                    </ul>
                </address>
            </div>
            <div class="col-md-4 col-sm-4 footer-info-grid email">
                <h4>Boletin</h4>
                <p>Suscríbase a nuestro boletín y le informaremos sobre los proyectos y promociones más recientes.
                </p>

                <form class="newsletter">
                    <input class="email" type="email" placeholder="Tu email...">
                    <input type="submit" class="submit" value="">
                </form>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="connect">
            <div class="connect-social">
                <h4>CONECTATE CON NOSOTROS</h4>
                <ul>
                    <li><a href="#" class="facebook" title="Go to Our Facebook Page"></a></li>
                    <li><a href="#" class="twitter" title="Go to Our Twitter Account"></a></li>
                    <li><a href="#" class="googleplus" title="Go to Our Google Plus Account"></a></li>
                    <li><a href="#" class="linkedin" title="Go to Our Linkedin Page"></a></li>
                    <li><a href="#" class="blogger" title="Go to Our Blogger Account"></a></li>
                    <li><a href="#" class="tumblr" title="Go to Our Tumblr Page"></a></li>
                    <li><a href="#" class="rss" title="Go to Our RSS Feed"></a></li>
                    <li><a href="#" class="youtube" title="Go to Our Youtube Channel"></a></li>
                    <li><a href="#" class="vimeo" title="Go to Our Vimeo Channel"></a></li>
                    <li><a href="#" class="deviantart" title="Go to Our Deviantart Page"></a></li>
                </ul>
            </div>
        </div>

        <div class="copyright">
            <!-- <p>2017 Empresa. All Rights Reserved | Design by brothers Grijalba </a></p> -->
        </div>

    </div>
</div>
<!--===============================[ SCRIPTS ]================================================-->
 <!-- <script src="app/lib/global.js"></script> -->
    <!-- Supportive-JavaScript -->
         <script type="text/javascript" src="<?= media(); ?>/js/plugins/sweetalert.min.js"></script>
    <!-- Banner-Slider-JavaScript -->
    <script src="<?= media() ?>/template/my-css-js/js/responsiveslides.min.js"></script>
    <script src="<?= media() ?>/vendor/bootstrap-4.4.1-dist/js/bootstrap.bundle.min.js"></script>
    <!-- Owl Carousel -->
    <script src="<?= media() ?>/template/my-css-js/js/owl.carousel.js"></script>
    <!-- /END/[ Owl Carousel ] --/START/  Slide-To-Top JavaScript (No-Need-To-Change) -->
    
    <script type="text/javascript">
        $(document).ready(function() {
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 100,
                easingType: 'linear'
            };
        });
    </script>
    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 0;"> </span></a>
    <!-- /END/[ Slide-To-Top JavaScript ] // -- /START/ Owl-Carousel-JavaScript -->
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                items: 4,
                lazyLoad: true,
                autoPlay: true,
                pagination: false,
            });
        });
    </script>
    <!-- //Owl-Carousel-JavaScript -->
    <script src="<?= media() ?>/template/my-css-js/js/jquery.magnific-popup.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });
        });
    </script>
<!-- <script src="<?= media() ?>/vendor/moment/moment-with-locales.min.js"></script> -->
<!-- <script type="text/javascript" src="<?= media() ?>/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script> -->
<!--===================================================================================================-->
<!--==================================== RECIENTES ==========================================-->

<!-- \\Fin SCRIPTS -->