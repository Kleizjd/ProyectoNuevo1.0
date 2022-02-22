<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="José Daniel Grijalba">

    <script src="<?= media() ?>/vendor/jquery/jquery.slim.min.js"></script>
    <link rel="stylesheet" href="<?= media() ?>/vendor/bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= media() ?>/vendor/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= media() ?>/vendor/sweetalert/css/sweetalert2.min.css">
    <link href="<?= media() ?>/template/my-css-js/css/login-register-lock.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= media() ?>/template/my-css-js/css/style.min.css" rel="stylesheet">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/template/dist/css/style.css">
    <title><?php $data['page_tag']; ?></title>

</head>

<body>

    <section id="wrapper">

        <div class="login-register" style="background-image:url(assets/images/background/fondo-login-1024x427.jpg);">
            <div class="login-box card login-box">
                <div class="card-header">
                    <div class="justify-content-center row">
                        <div class="col-10">
                            <!-- <h1> Ingreso</h1> -->
                            <title><?php $data['page_title']; ?></title>

                        </div>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal form-material" id="formLogin" name="formLogin" action="" method="POST" autocomplete="off">
                            <div class="form-group ">
                                <input type="text" class="form-control" placeholder="Email" id="txtEmail" name="txtEmail" autofocus required>
                            </div>
                            <div class="input-group form-group">
                                <input type="password" class="form-control" placeholder="Password" id="txtPassword" name="txtPassword" required>

                                <button type="button" class="btn btn-outline-primary showPassword">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Recordarme</label>
                                        <a href="javascript:void(0)" id="to-recover" class="text-dark float-right"><i class="fa fa-lock m-r-5"></i> olvidaste la contraseña?</a>
                                    </div>
                                </div>
                            </div>
                            <div id="alertLogin" class="text-center"></div>
                            <div class="form-group text-center">
                                <div class="col-xs-12 p-b-20">
                                    <button class="btn btn-block btn-lg btn-info btn-rounded" type="submit">Ingresar</button>
                                </div>
                            </div>
                            <div class="form-group m-b-0">
                                <div class="col-sm-12 text-center">
                                    No tienes cuenta? <a href="pages-register.html" class="text-info m-l-5"><b>Registrate</b></a>
                                </div>
                            </div>
                        </form>
                        <form class="form-horizontal" id="formResetPass" name="formResetPass" action="" method="POST" autocomplete="off">
                            <div class="form-group ">
                                <div class="col-xs-12">
                                    <h3>Recuperar Contraseña</h3>
                                    <p class="text-muted">Ingresa tu correo y se te enviaran las instrucciones para restablacerla! </p>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="col-xs-12">
                                    <input class="form-control" type="text" required="" placeholder="Email" id="txtEmailReset">
                                </div>
                            </div>
                            <div class="form-group text-center m-t-20">
                                <div class="col-xs-12">
                                    <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reiniciar</button>
                                </div>
                            </div>
                            <a class="d-block small mt-3" href="javascript:void(0)" id="to-return" class="text-info">
                                <p class="text-center"><b>Iniciar sesion </b></p>
                            </a>

                        </form>
                    </div>
                </div>
            </div>
    </section>
    <script src="<?= media() ?>/vendor/sweetalert/js/sweetalert2.min.js"></script>
    <script src="<?= media() ?>/vendor/popper/popper.min.js"></script>
    <script src="<?= media(); ?>/js/<?= $data['page_functions_js']; ?>"></script>
</body>

</html>
<script>
    const base_url = "<?= base_url(); ?>";
    const smony = "<?= SMONEY; ?>";
</script>
<script>
    // ============================================================== 
    // Login and Recover Password 
    // ============================================================== 
    $('#to-recover').on("click", function() {
        $("#form_session").slideUp();
        $("#recoverform").fadeIn();
    });
    $('#to-return').on("click", function() {
        $("#recoverform").slideUp();
        $("#form_session").fadeIn();
    });
    $(document).ready(function() {

        $(document).on("click", ".showPassword", function() {
            let inputPassword = $(this).parent().find("input");
            if ($(inputPassword).val() != "") {
                if ($(inputPassword).prop("type") == "password") {
                    $(inputPassword).prop("type", "text");
                    $(this).html('<i class="fas fa-eye-slash"></i>');
                } else if ($(inputPassword).prop("type") == "text") {
                    $(inputPassword).prop("type", "password");
                    $(this).html('<i class="fas fa-eye"></i>');
                }
            }
        });
    });
</script>