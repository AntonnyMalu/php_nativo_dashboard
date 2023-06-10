<form id="from_login">
    <div class="form-group">
        <input class="form-control form-control-lg" type="email" placeholder="Correo" name="email"  autocomplete="off" id="email" >
        <div class="invalid-feedback" id="error_email"></div>

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
    <!--<div class="form-group">
            <label class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Recuérdame</span>
            </label>
        </div> -->
    <button type="submit" class="btn btn-primary btn-lg btn-block">Iniciar Sesión</button>
</form>