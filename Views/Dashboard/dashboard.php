     
        <body class="skin-default-dark fixed-layout">
            <!-- ============================================================== -->
            <!-- Preloader - style you can find in spinners.css -->
            <!-- ============================================================== -->
            <!-- <div class="preloader">
                <div class="loader">
                    <div class="loader__figure"></div>
                    <p class="loader__label">No al maltrato</p>
                </div>
            </div> -->
            <!-- ============================================================== -->
            <!-- Main wrapper - style you can find in pages.scss -->
            <!-- ============================================================== -->
            <div id="main-wrapper">
                <!-- ============================================================== -->
                <!-- Topbar header - style you can find in pages.scss -->
                <!-- ============================================================== -->
                <header class="topbar">
                    <!-- Barra lateral izquierda, derecha, y cabecera -->
                    <?php headerAdmin($data); ?>

                </header>
                <!-- ============================================================== -->
                <!-- End Topbar header -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Left Sidebar - style you can find in sidebar.scss  -->
                <!-- ============================================================== -->
                <?php // include_once "../Template/Modals/menu.php"; ?>
                <!-- ============================================================== -->
                <!-- End Left Sidebar - style you can find in sidebar.scss  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Page wrapper  -->
                <!-- ============================================================== -->
                <div class="page-wrapper secundaria" id="loadView">
                    <div class="container-fluid">

                        <!-- <form id="recover-form" method="POST" autocomplete="off"> -->
                        <!--------------Ajax-------------------->
                        <!-- ESTE ARCHIVO ES EL QUE AÑADE LAS VISTAS PARA NO TENER QUE ESCIBIR TODO EL CODIGO 
                             HACIENDOLA DINAMICA -->
                       
                        <!--------------Ajax-------------------->
                    </div>
                </div>
                <footer class="footer">
                    <span> &copy;Copyright <?= date("Y"); ?> Best -José Daniel Grijalba</span>
                </footer>
            </div>
            <?php //include_once "../partials/log-out.php"; ?>
            <!-- SCRIPTS -->
            <?php //include_once "../partials/scripts.php"; ?>
        </body>
        </html>