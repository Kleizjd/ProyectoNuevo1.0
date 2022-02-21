<!-- <footer class="footer">
    © 2020 Elegent Admin by <a href=""> .com</a>
</footer> -->
<div class="footer">
    <!-- <p>2017 Empresa. All Rights Reserved | Design by brothers Grijalba </a></p> -->
    &copy;Copyright <?= date("Y"); ?> Best -José Daniel Grijalba
</div>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<script>
    const base_url = "<?= base_url(); ?>";
    const smony = "<?= SMONEY; ?>";
</script>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?= media() ?>/node_modules/jquery/jquery-3.2.1.min.js"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="<?= media() ?>/node_modules/popper/popper.min.js"></script>
<script src="<?= media() ?>/node_modules/bootstrap/js/bootstrap.min.js"></script>
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
<script src="<?= media() ?>/node_modules/raphael/raphael.min.js"></script>
<script src="<?= media() ?>/node_modules/morrisjs/morris.min.js"></script>
<script src="<?= media() ?>/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
<!--c3 JavaScript -->
<script src="<?= media() ?>/node_modules/d3/d3.min.js"></script>
<script src="<?= media() ?>/node_modules/c3-master/c3.min.js"></script>
<!-- Popup message jquery -->
<script src="<?= media() ?>/node_modules/toast-master/js/jquery.toast.js"></script>
<!-- Chart JS -->
<script src="<?= media() ?>/template/dist/js/dashboard1.js"></script>
<!-- Data table plugin-->
<script type="text/javascript" src="<?= media(); ?>/js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?= media(); ?>/js/plugins/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="<?= media(); ?>/js/plugins/bootstrap-select.min.js"></script>
<script src="<?= media(); ?>/js/<?= $data['page_functions_js']; ?>"></script>
</body>

</html>