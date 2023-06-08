<div class="splash-container">
    
    <div class="card" style="width: 360px;">
        <div class="card-header text-center"><a href="../web/"><img class="logo-img mb-5" src="../img/images/logo.png" alt="logo">
            </a><span class="splash-description">
                <h2 class="text-primary">Login</h2>
            </span>
        </div>
        <div class="card-body">
           
            <form action="../../controller/LoginController.php" method="post">
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" placeholder="Correo" value="<?php if (isset($_POST['email'])) {
                                                                                                            echo $_POST['email'];
                                                                                                        } ?>" autocomplete="off" id="email" required>
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="password" type="password" placeholder="Contraseña" required>
                </div>
                <!--<div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Recuérdame</span>
                        </label>
                    </div> -->
                <button type="submit" class="btn btn-primary btn-lg btn-block">Iniciar Sesión</button>
            </form>
        </div>
        <div class="card-footer p-0 bg-light">
            <div class="card-footer-item p-0">
                <a href="../register/" class="footer-link p-3">Crear una Cuenta</a>
            </div>
            <div class="card-footer-item card-footer-item-bordered p-3">
                <a href="../recover/" class="footer-link p-0">¿Olvidaste tu contraseña?</a>
            </div>
        </div>
    </div>
</div>