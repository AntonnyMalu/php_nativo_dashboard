<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Prueba <?php echo $auth->isAmdin(); ?></h2>
                        <!-- ============================================================== -->
                        <!-- breadcrumb  -->
                        <!-- ============================================================== -->
                        <?php require_once "breadcrumb.php"; ?>
                        <!-- ============================================================== -->
                        <!-- end breadcrumb  -->
                        <!-- ============================================================== -->

                        <ul>
                            <li>
                                menu
                                <ul>
                                    <li>
                                        dashboard
                                        <ul>
                                            <li>Perfil</li>
                                            <li>Prueba</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                        </ul>


                        <ul>
                            <li>
                                Administrador
                                <ul>
                                    <li>
                                        Configuracion
                                        <ul>
                                            <li>usuarios</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                        </ul>


                    </div>
                </div>
            </div>

            <!-- ============================================================== -->
            <!-- end pageheader  -->

        </div>
    </div>
</div>