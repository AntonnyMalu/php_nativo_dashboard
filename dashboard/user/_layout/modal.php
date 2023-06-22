<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="form_register">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="form-group">
                                <input class="form-control form-control-lg" type="text" name="name" placeholder="Nombre" autocomplete="off" data-inputmask-regex="(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?" id="name">
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
                                    <input class="form-control form-control-lg" name="password" type="text" placeholder="Contraseña" id="password">
                                    <div class="input-group-append" onclick="generarPassword()">
                                        <a class="input-group-text" style="cursor: pointer;" id="show_password">
                                            <i class="fas fa-key"></i>
                                        </a>
                                    </div>
                                    <div class="invalid-feedback" id="error_password"></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <select class="custom-select" name="role" id="role">
                                        <option value="">Seleccione...</option>
                                        <option value="0">Estandar</option>
                                        <option value="1">Administrador</option>
                                    </select>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>