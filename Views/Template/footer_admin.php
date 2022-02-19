<footer class="footer">
    © 2020 Elegent Admin by <a href="https://www.wrappixel.com/">wrappixel.com</a>
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?= media() ?>/node_modules/jquery/jquery-3.2.1.min.js"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="<?= media() ?>/node_modules/popper/popper.min.js"></script>
<script src="<?= media() ?>/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?= media() ?>/template/dist/js/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="<?= media() ?>/template/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?= media() ?>/template/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="<?= media() ?>/template/dist/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--morris JavaScript -->
<script src="<?= media() ?>/node_modules/raphael/raphael-min.js"></script>
<script src="<?= media() ?>/node_modules/morrisjs/morris.min.js"></script>
<script src="<?= media() ?>/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
<!--c3 JavaScript -->
<script src="<?= media() ?>/node_modules/d3/d3.min.js"></script>
<script src="<?= media() ?>/node_modules/c3-master/c3.min.js"></script>
<!-- Chart JS -->
<script src="<?= media() ?>/template/dist/js/dashboard1.js"></script>
<!--===================================================================================================-->
<!--==================================== RECIENTES ==========================================-->
<!-- ========================<-/  añadimos los scrypts  /->=========================================== -->
<!-- ==============================<-/  SCRYPTS  /->=========================================== -->
<!-- Core plugin JavaScript-->
<script src="<?= media() ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Crypto Js -> JavaScript library of crypto standards.. -->
<script src="<?= media() ?>/vendor/crypto-js/js/crypto-js.min.js"></script>
<!-- Datatables JS -->
<!-- <script src="<?= media() ?>/vendor/sb-admin-2-2017/lib/datatables/js/datatables.min.js"></script> -->
<!-- Popper -->
<script src="<?= media() ?>/vendor/popper/popper.min.js"></script>
<!-- Select2 JS -->
<script src="<?= media() ?>/vendor/select2/js/select2.full.min.js"></script>
<!-- Select2 Language -->
<script src="<?= media() ?>/vendor/select2/language/es.min.js"></script>
<!-- Datepicker Jquery-UI JS -->
<script src="<?= media() ?>/vendor/moment/moment-with-locales.min.js"></script>
<!-- Sweet Alert -->
<script src="<?= media() ?>/vendor/sweetalert/js/sweetalert2.min.js"></script>
<!-- Jquery Validation JS -> This jQuery plugin makes simple clientside form validation easy. -->
<script src="<?= media() ?>/vendor/jquery-validate/js/jquery.validate.min.js"></script>
<script src="<?= media() ?>/vendor/jquery-validate/language/messages_es.min.js"></script>
<!--  responsive -->
<script src="<?= media() ?>/vendor/bootstrap-4.4.1-dist/js/bootstrap.bundle.min.js"></script>
<!--  //responsive -->
<!-- iconos calendar -->
<script src="<?= media() ?>/vendor/DateTimePicker/js/materialDateTimePicker.js"></script>
<!--mejor -->
<!-- Date range Plugin JavaScript -->
<script src="<?= media() ?>/vendor/timepicker/bootstrap-timepicker.min.js"></script>
<script src="<?= media() ?>/vendor/daterangepicker/daterangepicker.js"></script>
<!-- Lodash Js -> A modern JavaScript utility library delivering modularity, performance & extras. -->
<script src="<?= media() ?>/vendor/lodash/js/lodash.min.js"></script>
<!-- Cleave Js -> Format your <input/> content when you are typing. -->
<script src="<?= media() ?>/vendor/cleave/cleave.min.js"></script>
<script src="<?= media() ?>/vendor/select2/js/select2.min.js"></script>
<!-- Alertify JS -->
<script src="<?= media() ?>/vendor/alertify/js/alertify.min.js?v=<?= rand(); ?>"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?= media() ?>/template/dist/js/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="<?= media() ?>/template/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?= media() ?>/template/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="<?= media() ?>/template/dist/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!-- Popup message jquery -->
<script src="<?= media() ?>/vendor/toast-master/js/jquery.toast.js"></script>
<!-- <script src="<?= media() ?>/template/dist/js/dashboard1.js"></script> -->
<!-- Banner-Slider-JavaScript -->
<script src="<?= media() ?>/template/my-css-js/js/responsiveslides.min.js"></script>
<script>
    $(function() {
        $("#slider").responsiveSlides({
            auto: true,
            nav: true,
            speed: 800,
            namespace: "callbacks",
            pager: true,
        });
    });
</script>
<!-- //Banner-Slider-JavaScript -->

<!-- Owl-Carousel-JavaScript -->
<script src="<?= media() ?>/template/my-css-js/js/owl.carousel.js"></script>
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

<!-- Progressive-Effects-Animation-JavaScript -->
<script type="text/javascript" src="<?= media() ?>/template/my-css-js/js/jquery.inview.min.js"></script>
<script type="text/javascript" src="<?= media() ?>/template/my-css-js/js/wow.min.js"></script>
<script type="text/javascript" src="<?= media() ?>/template/my-css-js/js/mousescroll.js"></script>
<script type="text/javascript" src="<?= media() ?>/template/my-css-js/js/main.js"></script>
<script type="text/javascript" src="<?= media() ?>/template/my-css-js/js/numscroller-1.0.js"></script>
<!-- //Progressive-Effects-Animation-JavaScript -->

<!-- Magnific-Popup-Display-JavaScript -->
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
<!-- //Magnific-Popup-Display-JavaScript -->
<!-- Desplazar hacia arriba -->
<!-- Slide-To-Top JavaScript (No-Need-To-Change) -->
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
<!-- //Slide-To-Top JavaScript -->
<?php //include_once "scripts.php"; ?>

</body>

</html>