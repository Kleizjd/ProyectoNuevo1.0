<?php headerAdmin($data); ?>
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor"><i class="fas fa-user-tag"><?= $data['page_title'] ?></i></h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/dashboard">Home</a></li>
                        <li class="breadcrumb-item active"><?= $data['page_title'] ?></li>
                    </ol>
                    <button type="button" class="btn btn-success d-none d-lg-block m-l-15" onclick="openModal();"> <i class="fas fa-plus-circle"></i>Nuevo</button>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Bordered Table</h4>
                        <h6 class="card-subtitle">Add<code>.table-bordered</code>for borders on all sides of the table and cells.</h6>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Descripción</th>
                                        <th>Status</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">10</td>
                                        <td>desarrollador</td>
                                        <td>aquel que realiza esta aplicacion</td>
                                        <td><span class="badge badge-danger">Inactivo</span></td>
                                        <td>
                                            <div class="text-center">
                                                <button class="btn btn-secondary btn-sm btnPermisosRol" rl="10" title="Permisos"><i class="fas fa-key"></i></button>
                                                <button class="btn btn-primary btn-sm btnEditRol" rl="10" title="Editar"><i class="fas fa-pencil-alt"></i></button>
                                                <button class="btn btn-danger btn-sm btnDelRol" rl="10" title="Eliminar"><i class="far fa-trash-alt"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <?php footerAdmin($data); ?>