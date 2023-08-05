<!-- Modal -->
<div class="modal fade" id="modal-permisos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="form_register">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Permisos de Usuario</h5>
                    <button type="button" class="close" onclick="reset()" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="row col-md-12">

                            <form>
                                <div class="col-md-3 mt-4">
                                    <h5>Checkbox</h5>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input is-valid" id="customControlValidation1" required="">
                                        <label class="custom-control-label" for="customControlValidation1">Success</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input is-valid" id="customControlValidation1" required="">
                                        <label class="custom-control-label" for="customControlValidation1">Success</label>
                                    </div>
                                    <div class="custom-control custom-checkbox was-validated">
                                        <input type="checkbox" class="custom-control-input is-invalid" id="customControlValidation2" required="">
                                        <label class="custom-control-label" for="customControlValidation2">Error</label>
                                    </div>
                                    <div class="custom-control custom-checkbox was-validated">
                                        <input type="checkbox" class="custom-control-input is-invalid" id="customControlValidation2" required="">
                                        <label class="custom-control-label" for="customControlValidation2">Error</label>
                                    </div>
                                </div>
                                <div class="col-md-3 mt-4">
                                    <h5>Checkbox</h5>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input is-valid" id="customControlValidation1" required="">
                                        <label class="custom-control-label" for="customControlValidation1">Success</label>
                                    </div>
                                    <div class="custom-control custom-checkbox was-validated">
                                        <input type="checkbox" class="custom-control-input is-invalid" id="customControlValidation2" required="">
                                        <label class="custom-control-label" for="customControlValidation2">Error</label>
                                    </div>
                                    <div class="custom-control custom-checkbox was-validated">
                                        <input type="checkbox" class="custom-control-input is-invalid" id="customControlValidation2" required="">
                                        <label class="custom-control-label" for="customControlValidation2">Error</label>
                                    </div>
                                </div>
                                <div class="col-md-3 mt-4">
                                    <h5>Checkbox</h5>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input is-valid" id="customControlValidation1" required="">
                                        <label class="custom-control-label" for="customControlValidation1">Success</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input is-valid" id="customControlValidation1" required="">
                                        <label class="custom-control-label" for="customControlValidation1">Success</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input is-valid" id="customControlValidation1" required="">
                                        <label class="custom-control-label" for="customControlValidation1">Success</label>
                                    </div>
                                    <div class="custom-control custom-checkbox was-validated">
                                        <input type="checkbox" class="custom-control-input is-invalid" id="customControlValidation2" required="">
                                        <label class="custom-control-label" for="customControlValidation2">Error</label>
                                    </div>
                                    <div class="custom-control custom-checkbox was-validated">
                                        <input type="checkbox" class="custom-control-input is-invalid" id="customControlValidation2" required="">
                                        <label class="custom-control-label" for="customControlValidation2">Error</label>
                                    </div>
                                </div>
                                <div class="col-md-3 mt-4">
                                    <h5>Checkbox</h5>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input is-valid" id="customControlValidation1" required="">
                                        <label class="custom-control-label" for="customControlValidation1">Success</label>
                                    </div>
                                    <div class="custom-control custom-checkbox was-validated">
                                        <input type="checkbox" class="custom-control-input is-invalid" id="customControlValidation2" required="">
                                        <label class="custom-control-label" for="customControlValidation2">Error</label>
                                    </div>
                                </div>
                                <div class="col-md-3 mt-4">
                                    <h5>Checkbox</h5>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input is-valid" id="customControlValidation1" required="">
                                        <label class="custom-control-label" for="customControlValidation1">Success</label>
                                    </div>
                                    <div class="custom-control custom-checkbox was-validated">
                                        <input type="checkbox" class="custom-control-input is-invalid" id="customControlValidation2" required="">
                                        <label class="custom-control-label" for="customControlValidation2">Error</label>
                                    </div>
                                </div>
                                <div class="col-md-3 mt-4">
                                    <h5>Checkbox</h5>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input is-valid" id="customControlValidation1" required="">
                                        <label class="custom-control-label" for="customControlValidation1">Success</label>
                                    </div>
                                    <div class="custom-control custom-checkbox was-validated">
                                        <input type="checkbox" class="custom-control-input is-invalid" id="customControlValidation2" required="">
                                        <label class="custom-control-label" for="customControlValidation2">Error</label>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="hidden" name="opcion" value="guardar" id="form_registrar_user">
                    <input type="hidden" name="id" id="id">
                    <input type="reset" class="d-none" value="borrar" id="btn_reset">
                    <input type="hidden" name="item" id="input_item">
                    <input type="button" class="btn btn-secondary" onclick="reset()" value="Cerrar" data-dismiss="modal" id="btn_modal_cerrar">
                    <!--<button type="submit" class="btn btn-primary">Guardar</button>-->
                </div>
            </form>
        </div>
    </div>
</div>