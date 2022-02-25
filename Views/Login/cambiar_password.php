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
  <title><?= $data['page_tag']; ?></title>

</head>

<body>

  <section id="wrapper">

    <div class="login-register" style="background-image:url(<?= media() ?>/images/background/fondo-login-1024x427.jpg);">
      <div class="login-box card login-box">
        <div class="card-header">
          <div class="justify-content-center row">
            <div class="col-10">
              <!-- <h1> Ingreso</h1> -->
              <h1><?= $data['page_title']; ?></h1>

            </div>
          </div>
          <div class="card-body">
            <form class="form-horizontal" id="formCambiarPass" name="formCambiarPass" action="" method="POST" autocomplete="off">
              <input type="hidden" id="idUsuario" name="idUsuario" value="<?= $data['idpersona']; ?>" required>
              <input type="hidden" id="txtEmail" name="txtEmail" value="<?= $data['email']; ?>" required>
              <input type="hidden" id="txtToken" name="txtToken" value="<?= $data['token']; ?>" required>
              <div class="form-group ">
                <div class="col-xs-12">
                  <h3>Cambiar Contraseña</h3>
                </div>
              </div>
              <div class="form-group ">
                <div class="col-xs-12">
                  <input id="txtPassword" name="txtPassword" class="form-control" type="password" placeholder="Nueva Contraseña" required>
                </div>
              </div>
              <div class="form-group ">
                <div class="col-xs-12">
                  <input id="txtPasswordConfirm" name="txtPasswordConfirm" class="form-control" type="password" placeholder="Confirmar Contraseña" required>
                </div>
              </div>
              <div class="form-group text-center m-t-20">
                <div class="col-xs-12">
                  <button type="submit" class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light"><i class="fa fa-unlock fa-lg fa-fw"></i> Reiniciar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
  </section>
  <script>
    const base_url = "<?= base_url(); ?>";
  </script>
  <!-- Essential javascripts for application to work-->
  <script src="<?= media(); ?>/js/jquery-3.3.1.min.js"></script>
  <script src="<?= media(); ?>/js/popper.min.js"></script>
  <script src="<?= media(); ?>/js/bootstrap.min.js"></script>
  <script src="<?= media(); ?>/js/fontawesome.js"></script>
  <script src="<?= media(); ?>/js/main.js"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="<?= media(); ?>/js/plugins/pace.min.js"></script>
  <script src="<?= media() ?>/vendor/sweetalert/js/sweetalert2.min.js" type="text/javascript"></script>
  <script src="<?= media(); ?>/js/<?= $data['page_functions_js']; ?>"></script>
</body>

</html>
<script>
  // $('#to-recover').on("click", function() {
  $("#formLogin").slideUp();
  $("#formResetPass").fadeIn();
  // });
</script>