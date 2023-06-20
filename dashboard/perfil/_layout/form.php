<div class="card">
    <div class="card-header">
        <h4 class="mb-0">Actualizar</h4>
    </div>
    <div class="card-body">
        <form class="needs-validation" id="form_register">
            <div class="mb-3">
                <label for="username">Nombre</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i> </span>
                    </div>
                    <input type="text" class="form-control" value="<?php echo $auth->USER_NAME ?>" name="name" id="name">
                    <div class="invalid-feedback" style="width: 100%;" id="error_name"> </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="username">Correo</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fas fa-envelope"></i> </span>
                    </div>
                    <input type="text" class="form-control" value="<?php echo $auth->USER_EMAIL ?>" name="email" id="email">
                    <div class="invalid-feedback" style="width: 100%;" id="error_email"> </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="username">Contraseña actual</label>
                <div class="input-group">
                    <input type="password" class="form-control" placeholder="Contraseña actual" name="password_actual" id="password_actual">
                    <div class="input-group-prepend" onclick="showPassword('#show_password', '#password_actual')">
                        <a class="input-group-text text-center" style="cursor: pointer;" id="show_password">
                            <i class="fas fa-eye"></i>
                        </a>
                    </div>
                    <div class="invalid-feedback" style="width: 100%;" id="error_password"> </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="username">Nueva Contraseña</label>
                <div class="input-group">
                    <input type="password" class="form-control" placeholder="Nueva Contraseña" name="password_nueva" id="password_nueva">
                    <div class="input-group-prepend" onclick="showPassword('#show_password_nueva', '#password_nueva')">
                        <a class="input-group-text text-center" style="cursor: pointer;" id="show_password_nueva">
                            <i class="fas fa-eye"></i>
                        </a>
                    </div>
                    <div class="invalid-feedback" style="width: 100%;" id="error_password_nueva"> </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="username">Confirmar Contraseña</label>
                <div class="input-group">
                    <input type="password" class="form-control" placeholder="Confirmar" name="confirmar" id="confirmar">
                    <div class="input-group-prepend" onclick="showPassword('#show_confirmar', '#confirmar')">
                        <a class="input-group-text text-center" style="cursor: pointer;" id="show_confirmar">
                            <i class="fas fa-eye"></i>
                        </a>
                    </div>
                    <div class="invalid-feedback" style="width: 100%;" id="error_confirmar"> </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="username">Teléfono</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fas fa-phone fa-rotate-180"></i> </span>
                    </div>
                    <input type="text" class="form-control" value="<?php echo $auth->USER_TELEFONO ?>" name="telefono" id="telefono">
                    <div class="invalid-feedback" style="width: 100%;" id="error_telefono"> </div>
                </div>
            </div>

            <hr class="mb-4">
            <input type="hidden" name="id" id="id">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Actualizar datos</button>
        </form>
    </div>
</div>