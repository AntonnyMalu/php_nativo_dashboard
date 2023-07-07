<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <!-- menu -->
                    <?php
                    if (!isset($modulo)) {
                        # code...
                        $modulo = null;
                    }
                    $listarMenu = menu($modulo);
                    $i = 0;
                    foreach ($listarMenu as $menu) {
                        $i++;
                    ?>
                        <li class="nav-divider">
                            <?php echo $menu['titulo'] ?>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link <?php if($menu['menu']['active']){ echo 'active'; } ?>" href="#" data-toggle="collapse" aria-expanded="<?php if($menu['menu']['active']){ echo 'true'; }else{ echo 'false'; } ?>" data-target="#submenu-<?php echo $i ?>" aria-controls="submenu-1">
                                <?php echo $menu['menu']['icono']; ?><?php echo $menu['menu']['modulo']; ?>
                                <!--<span class="badge badge-success">6</span> -->
                            </a>
                            <div id="submenu-<?php echo $i ?>" class="<?php if(!$menu['menu']['active']){ echo 'collapse'; }else{ echo 'collapse show'; } ?>" data-target="#submenu-<?php echo $i ?> submenu">
                                <ul class="nav flex-column">
                                    <?php foreach ($menu['menu']['submenu'] as $submenu) { ?>

                                        <li class="nav-item">
                                            <a class="nav-link <?php if($submenu['active']){ echo 'active'; } ?>" href="<?php asset($submenu['url']) ?>">
                                            <?php echo $submenu['icono'] ?>
                                            <?php echo $submenu['nombre'] ?>
                                        </a>
                                        </li>

                                    <?php } ?>


                                </ul>
                            </div>
                        </li>
                    <?php
                    }
                    ?>
                    <!-- /menu -->
                </ul>
            </div>
        </nav>
    </div>
</div>