<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight" id="titulo_form">Registrar</h4>
    </div>
    <div class="card-body">

    <form id="form_register_parametro">

        <div class="form-group">
            <label>Nombre</label>
            <input type="text" class="form-control" name="nombre" placeholder="Ingresar Nombre" id="nombre" />
            <div class="invalid-feedback" style="width: 100%;" id="error_nombre_parametro"></div>
        </div>

        <div class="form-group">
            <label>Tabla_id</label>
            <input type="text" class="form-control" name="tabla_id" placeholder="Ingresar Tabla_id" id="tabla_id" />
            <div class="invalid-feedback" style="width: 100%;" id="error_tabla_id_parametro"> </div>
        </div>

        <div class="form-group">
            <label>Valor</label>
            <input type="text" class="form-control" name="valor" placeholder="Ingresar Valor" id="valor" />
            <div class="invalid-feedback" style="width: 100%;" id="error_valor_parametro"> </div>
        </div>

        <input type="hidden" name="opcion" value="guardar" id="opcion_parametros">
        <input type="hidden" name="id" id="id_parametro">
        <button type="submit" class="btn btn-primary float-right ml-1">Guardar</button>
        <button type="reset" class="btn btn-danger float-right" id="btn_cancelar">Cancelar</button>

    </form>
        
    </div>
</div>