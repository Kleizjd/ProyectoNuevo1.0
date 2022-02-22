<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4">
    <meta name="description" content="Productos JD GO">
    <meta name="robots" content="noindex,nofollow">
    <link rel="shortcut icon" href="<?= media() ?>/images/background/Always2.jpg" type="image/x-icon">
    <title>Venta de productos</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= media() ?>/images/favicon.png">
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="<?= media() ?>/node_modules//morris.css" rel="stylesheet">
    <!--c3 plugins CSS -->
    <link href="<?= media() ?>/node_modules/c3-master/c3.min.css" rel="stylesheet">
     <!-- Main CSS-->
     <link rel="stylesheet" type="text/css" href="<?= media(); ?>/template/dist/css/main.css">
    <!-- Custom CSS -->
    <link href="<?= media() ?>/template/dist/css/style.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="<?= media() ?>/template/dist/css/pages/dashboard1.css" rel="stylesheet">
    <!--===================================================================================================-->
    <!--==================================== RECIENTES ====================================================-->
    <!-- STYLES -->
    <script src="<?= media() ?>/vendor/jquery/jquery.slim.min.js"></script>
    <!-- Bootstrap -->
    <link href="<?= media() ?>/vendor/bootstrap-4.4.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <!-- MetisMenu CSS -->
    <link href="<?= media() ?>/vendor/sb-admin-2-2017/lib/metisMenu/css/metisMenu.min.css" rel="stylesheet">
    <!-- Font-Awesome -->
    <link href="<?= media() ?>/vendor/fontawesome/css/all.min.css" rel="stylesheet">
    <!-- Datatables CSS -->
    <link href="<?= media() ?>/vendor/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Sweet alert 2 CSS -->
    <link href="<?= media() ?>/vendor/sweetalert/css/sweetalert2.min.css" rel="stylesheet">
    <!-- Datepicker Jquery-UI CSS -->
    <!--------------------------------CALENDAR [DATE-TIME-PICKER]-------------------------------->
    <link href="<?= media() ?>/endor/DateTimePicker/css/materialDateTimePicker.css" rel="stylesheet" />
    <link href='<?= media() ?>/endor/DateTimePicker/css/addfonts.css' rel='stylesheet' type='text/css'>
    <!------------------------------------------------------------------------------------------->
    <!-- Select2 CSS -->
    <link href="<?= media() ?>/vendor/select2/css/select2.min.css" rel="stylesheet">
    <!-- Select2 Bootstrap Theme -->
    <link rel="stylesheet" href="<?= media() ?>/vendor/select2/css/select2-bootstrap.min.css">
    <!-- Alertify CSS 1.12.0 -->
    <link rel="stylesheet" href="<?= media() ?>/vendor/alertify/css/alertify.min.css">
    <!-- Default theme -->
    <link rel="stylesheet" href="<?= media() ?>/vendor/alertify/css/themes/default.min.css">
    <link rel="stylesheet" href="<?= media() ?>/template/dist/css/style.min.css">
    <link rel="stylesheet" href="<?= media() ?>/template/my-css-js/css/my-styles.css">
    <link href="<?= media() ?>/vendor/c3-master/c3.min.css" rel="stylesheet">
    <link href="<?= media() ?>/vendor/morrisjs/morris.css" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="<?= media() ?>/vendor/toast-master/css/jquery.toast.css" rel="stylesheet">
   
</head>

<body class="skin-default-dark fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elegant admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?= base_url(); ?>/dashboard">
                        <span>
                            <img src="<?= media() ?>/images/background/Always2.jpg" alt="JD DEVELOPER" height="50" width="200">
                        </span>
                    </a>
                </div>
                <p id="demo"></p>
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item hidden-sm-up"> <a class="nav-link nav-toggler waves-effect waves-light" href="javascript:void(0)"><i class="ti-menu"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="ti-email"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox animated bounceInDown">
                                <span class="with-arrow"><span class="bg-primary"></span></span>
                                <ul>
                                    <li>
                                        <div class="drop-title bg-primary text-white">
                                            <h4 class="m-b-0 m-t-5">4 New</h4>
                                            <span class="font-light">Notifications</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Event today</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center m-b-5" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item dropdown" id="img_profile_header">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= media() ?>/images/svg/upload-user.svg" alt="user" id="img_profile" class="img-circle" width="30"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <span class="with-arrow"><span class="bg-primary"></span></span>
                                <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                                    <div class="" id="img_profile_herence_carga"><img src="<?= media() ?>/images/avatar.png" alt="user" id="img_profile_herence" class="img-circle" width="60"></div>
                                    <div class="m-l-10">
                                        <p class="app-sidebar__user-name"><?= $_SESSION['userData']['nombres']; ?></p>
                                        <p class=" m-b-0">
                                        <p class="app-sidebar__user-designation"><?= $_SESSION['userData']['nombrerol']; ?></p>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url(); ?>/perfil"><i class="ti-user m-r-5 m-l-5"></i> Mi Perfil</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url(); ?>/configuracion" id="viewOwnAcount"><i class="ti-settings m-r-5 m-l-5"></i>Configuracion</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url(); ?>/logout" data-target="#logoutModal"><i class="fa fa-power-off m-r-5 m-l-5"></i> Salir</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <!-- <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li> -->
                        <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                    </ul>
                </div>
            </nav>

            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <div class="right-sidebar">
                <div class="slimscrollright">
                    <div class="rpanel-title"> Panel de Servicio <span><i class="ti-close right-side-toggle"></i></span> </div>
                    <div class="r-panel-body">
                        <ul id="themecolors" class="m-t-20">
                            <li><b>Con barra lateral Clara</b></li>
                            <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                            <li class="d-block m-t-30"><b>Con barra lateral Oscura</b></li>
                            <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme working">7</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <?php require_once("nav_admin.php"); ?>