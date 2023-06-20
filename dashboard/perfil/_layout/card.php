<div class="card">
    <div class="card-header">
        <h4 class="d-flex justify-content-between align-items-center mb-0">
            <span>Mis Datos</span>
        </h4>
    </div>
    <div class="card-body">
        <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between">
                <div>
                    <h6 class="my-0">Nombre:</h6>
                    <small class="text-muted" id="label_nombre"><?php echo $auth->USER_NAME ?></small>
                </div>

            </li>
            <li class="list-group-item d-flex justify-content-between">
                <div>
                    <h6 class="my-0">Correo:</h6>
                    <small class="text-muted" id="label_email"><?php echo $auth->USER_EMAIL ?></small>
                </div>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                <div>
                    <h6 class="my-0">Teléfono:</h6>
                    <small class="text-muted" id="label_telefono"><?php echo $auth->USER_TELEFONO ?></small>
                </div>
            </li>
    </div>
</div>