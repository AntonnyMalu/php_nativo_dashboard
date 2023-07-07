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
                        <br>
                        <br>
                        <ul>
                            <?php
                            $listarMenu = menu($modulo);
                            foreach ($listarMenu as $menu) {
                            ?>
                                <li>
                                    <?php echo $menu['titulo'] ?>
                                    <ul>
                                        <li>
                                            <?php echo $menu['menu']['icono']; ?><?php echo $menu['menu']['modulo']; ?>

                                            <ul>
                                                <?php foreach ($menu['menu']['submenu'] as $submenu) {
                                                ?>
                                                    <li>
                                                        <a href="<?php echo $submenu['url'] ?>"><?php echo $submenu['nombre'] ?></a>
                                                    </li>
                                                <?php
                                                }
                                                ?>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>

                        <br>
                        <br>
                        <!--   <ul>
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

                        </ul> -->


                    </div>
                </div>
            </div>

            <!-- ============================================================== -->
            <!-- end pageheader  -->

        </div>
    </div>
</div>