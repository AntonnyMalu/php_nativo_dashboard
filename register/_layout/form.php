<form id="form_register">
    <div class="form-group">
        <input class="form-control form-control-lg" type="text" name="name" placeholder="Nombre" autocomplete="off" 
        data-inputmask-regex="(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?"
        id="name">
        <div class="invalid-feedback" id="error_name"></div>
    </div>
    <div class="form-group">
        <input class="form-control form-control-lg" type="email" name="email" placeholder="Email" autocomplete="off" id="email">
        <div class="invalid-feedback" id="error_email"></div>
    </div>
    <div class="form-group">
        <input class="form-control form-control-lg" type="text" name="telefono" placeholder="Teléfono" autocomplete="off" id="telefono">
        <div class="invalid-feedback" id="error_telefono"></div>
    </div>
    <div class="form-group">
        <div class="input-group">
        <input class="form-control form-control-lg" name="password" type="password"  placeholder="Contraseña" id="password">
        <div class="input-group-append" onclick="showPassword('#show_password', '#password')">
            <a class="input-group-text" style="cursor: pointer;" id="show_password">
            <i class="fas fa-eye"></i>
            </a>
        </div>
        <div class="invalid-feedback" id="error_password"></div>
        </div>
    </div>
    <div class="form-group">
    <div class="input-group">
        <input class="form-control form-control-lg" type="password" name="confirmar" placeholder="Confirmar Contraseña" id="confirmar">
        <div class="input-group-append" onclick="showPassword('#show_confirmar', '#confirmar')">
            <a class="input-group-text" style="cursor: pointer;" id="show_confirmar">
            <i class="fas fa-eye"></i>
            </a>
        </div>
        <div class="invalid-feedback" id="error_confirmar"></div>
    </div>
    </div>
    <div class="form-group pt-2">
        <button class="btn btn-block btn-primary" type="submit">Registrar</button>
    </div>
    <!-- <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Al crear una cuenta, usted acepta <a href="#">los términos y condiciones</a></span>
                    </label>
                </div> -->
</form>