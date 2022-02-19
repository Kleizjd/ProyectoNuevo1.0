<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--===============================[ JQuery ]================================================-->
    <script src="<?= media() ?>/vendor/jquery/jquery.slim.min.js"></script>
    <!--================================[ STYLES ]========================================================-->
    <link rel="stylesheet" href="<?= media() ?>/template/my-css-js/css/style.css">
    <!--===============================[ Owl-Carousel-CSS ]================================================-->
    <link rel="stylesheet" href="<?= media() ?>/template/my-css-js/css/owl.carousel.css" type="text/css" media="all" />
    <!--===================================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= media() ?>/vendor/bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <!--===============================[  Popup-Box-CSS   ]================================================-->
    <link rel="stylesheet" href="<?= media() ?>/template/my-css-js/css/popuo-box.css" type="text/css" media="all" />
    <!--===================================================================================================-->    
    <link rel="stylesheet" type="text/css" href="<?= media() ?>/vendor/fontawesome/css/fontawesome.min.css">
    <!--===================================================================================================-->
    <link rel="stylesheet" href="<?= media() ?>/vendor/sweetalert/css/sweetalert2.min.css">
    <!--===================================================================================================-->
    <link rel="shortcut icon" href="<?= media() ?>/images/favicon/logo.png" type="image/x-icon">
    <!--===================================================================================================-->
    <!--==================================== RECIENTES ====================================================-->
    <!-- Select2 CSS -->
    <link href="<?= media() ?>/vendor/select2/css/select2.min.css?v=<?= rand(); ?>" rel="stylesheet">
    <!-- Select2 Bootstrap Theme -->
    <link rel="stylesheet" href="<?= media() ?>/vendor/select2/css/select2-bootstrap.min.css?v=<?= rand(); ?>">
    <!-- Alertify CSS 1.12.0 -->
    <link rel="stylesheet" href="<?= media() ?>/vendor/alertify/css/alertify.min.css?v=<?= rand(); ?>">
    <!-- Default theme -->
    <link rel="stylesheet" href="<?= media() ?>/vendor/alertify/css/themes/default.min.css?v=<?= rand(); ?>">
    <link rel="stylesheet" href="<?= media() ?>/template/dist/css/style.min.css?v=<?= rand(); ?>">
    <link rel="stylesheet" href="<?= media() ?>/template/my-css-js/css/my-styles.css">
    <link href="<?= media() ?>/vendor/c3-master/c3.min.css" rel="stylesheet">
    <link href="<?= media() ?>/vendor/morrisjs/morris.css" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="<?= media() ?>/vendor/toast-master/css/jquery.toast.css" rel="stylesheet">

</head>
<!-- Header -->
<div class="header">
    <!-- Navbar -->
    <nav class="navbar bg-dark navbar-expand-md">
        <a class="navbar-brand" href="#">Cuentame</a>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav ml-auto">
                <li class="hover-effect nav-item" id="btnInicio"><a href="?p=Start/main" class="nav-link">No al Maltrato</a>
                </li>
                <li class="hover-effect nav-item" id="btnContact"><a href="?p=Start/contact-us" class="nav-link">Contactanos</a>
                </li>
                </li>
                <li class="hover-effect nav-item" id="btnColab"><a href="?p=Start/colaborators" class="nav-link">Colaboradores</a>
                </li>
                <li class="hover-effect nav-item" id="btnSession"><a href="?p=Session/Session" class="nav-link">Ingresar</a>
                </li>
                <li class="hover-effect nav-item" id="registerUser"><a href="?p=Session/pages-register" class="nav-link">Crear cuenta</a>
                </li>
                </li>
            </ul>
        </div>
    </nav>
    <!-- //Navbar -->
</div>