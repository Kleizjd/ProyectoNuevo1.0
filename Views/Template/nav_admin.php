<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <div class="d-flex no-block nav-text-box align-items-center">
        <!-- <span><img src="<?= media() ?>/images/logo-icon.png" alt="elegant admin template"></span> -->
        
        <a class="waves-effect waves-dark ml-auto hidden-sm-down" href="javascript:void(0)">
        <div class="app-header__logo">Tienda Virtual</div>

            <a class="nav-lock waves-effect waves-dark ml-auto hidden-md-down" href="javascript:void(0)"><i class="mdi mdi-toggle-switch"></i></a>
            <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
    </div>
    <!-- <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?= media(); ?>/images/avatar.png" alt="User Image">
        <div>
            <p class="app-sidebar__user-name">Jose</p>
            <p class="app-sidebar__user-designation">Administrador</p>
        </div>
    </div> -->
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- <li> <a class="waves-effect waves-dark" href="<?= base_url(); ?>/dashboard" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a></li> -->
                <li> <a class="waves-effect waves-dark" aria-expanded="false" href="<?= base_url(); ?>/sitioWeb" href="<?= base_url(); ?>/perfil"><i class="app-menu__icon fa fas fa-globe"></i><span class="hide-menu">Ver sitio Web</span></a></li>
                <li> <a class="waves-effect waves-dark" aria-expanded="false" href="<?= base_url(); ?>/perfil"><i class="ti-user"></i><span class="hide-menu">Perfil</span></a></li>

                </li>
                <li> <a class="app-menu__item has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="app-menu__icon fa fa-users"></i><span class="hide-menu">Usuarios</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?= base_url(); ?>/usuarios">Usuarios <i class="far fa-circle text-success"></i></a></li>
                        <li><a href="<?= base_url(); ?>/roles">Roles<i class="far fa-circle text-success"></i></a></li>
                        <!-- <li><a href="app-compose.html">Compose Mail <i class="icon-note"></i></a></li> -->
                    </ul>
                </li>   
                <li> <a class="app-menu__item has-arrow waves-effect waves-dark" aria-expanded="false"><i class="app-menu__icon fa fa-archive"></i><span class="hide-menu">Tienda</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?= base_url(); ?>/tienda">Productos<i class="far fa-circle text-success"></i></a></li>
                        <li><a href="<?= base_url(); ?>/tienda">Categorias<i class="far fa-circle text-success"></i></a></li>
                        <!-- <li><a href="app-compose.html">Compose Mail <i class="icon-note"></i></a></li> -->
                    </ul>
                </li>
                <li> <a class="app-menu__item waves-effect waves-dark" aria-expanded="false" href="<?= base_url(); ?>/pedidos"><i class="app-menu__icon fa fa-shopping-cart"></i><span class="hide-menu">Pedido</span></a></li>
                <li> <a class="app-menu__item waves-effect waves-dark" href="icon-fontawesome.html" aria-expanded="false" href="<?= base_url(); ?>/subscritores"><i class="app-menu__icon fas fa-user-tie"></i><span class="hide-menu">Subscritores</span></a></li>
                <li> <a class="app-menu__item waves-effect waves-dark" aria-expanded="false" href="<?= base_url(); ?>/mensajes"><i class="app-menu__icon fas fa-envelope"></i><span class="hide-menu">Mensajes</span></a></li>
                <li> <a class="app-menu__item waves-effect waves-dark" aria-expanded="false" href="<?= base_url(); ?>/paginas"><i class="app-menu__icon fas fa-file-alt"></i><span class="hide-menu">Paginas</span></a></li>
                <li> <a class="app-menu__item waves-effect waves-light" aria-expanded="false" href="<?= base_url(); ?>/salir"><i class="fa fa-power-off text-success"></i><span class="hide-menu">Salir</span></a></li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        $('.collapse').click(function() {
            $('.navbar-toggle:visible').click();
        });
    }, false);
 
</script>