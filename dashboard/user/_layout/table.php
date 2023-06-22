<div class="card">
    <div class="card-header d-flex">
        <h4 class="mb-0">Usuarios registrados</h4>
        <div class="dropdown ml-auto">
            <a class="toolbar" href="#" role="button" id="dropdownMenuLink5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-dots-vertical"></i> </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink5">
                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal">
                     <i class="fas fa-user-plus"></i> Nuevo
                </button>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead class="text-center">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Role</th>
                        <th scope="col">Estatus</th>
                        <th scope="col">Registro</th>
                        <th scope="col" style="width: 10%;"> </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <th scope="row">1</th>
                        <td>Antonny Maluenga</td>
                        <td>antonnymalu15gmail.com</td>
                        <td>04121995647</td>
                        <td>Administrador</td>
                        <td>Activo</td>
                        <td>22/06/2023</td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group" aria-label="First group">
                                <button type="button" class="btn btn-primary"><i class="m-r-7 mdi mdi-account-edit"></i></button>
                                <button type="button" class="btn btn-primary"><i class="fas fa-cogs"></i></button>
                                <button type="button" class="btn btn-primary"><i class="far fa-trash-alt"></i></button>
                            </div>
                        </td>
                    </tr>

                    <tr class="text-center">
                        <th scope="row">2</th>
                        <td>Manuel Peréz</td>
                        <td>manuelgmail.com</td>
                        <td>04124521963</td>
                        <td>Usuario</td>
                        <td>Activo</td>
                        <td>22/06/2023</td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group" aria-label="First group">
                                <button type="button" class="btn btn-primary"><i class="m-r-7 mdi mdi-account-edit"></i></button>
                                <button type="button" class="btn btn-primary"><i class="fas fa-cogs"></i></button>
                                <button type="button" class="btn btn-primary"><i class="far fa-trash-alt"></i></button>
                            </div>
                        </td>

                    </tr>
                </tbody>

            </table>
        </div>

    </div>
    <div class="card-footer p-1 mb-0">
        <nav aria-label="...">
            <ul class="pagination d-flex justify-content-end">
                <li class="page-item disabled">
                    <span class="page-link">Previous</span>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item" aria-current="page">
                    <span class="page-link">2</span>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
    <?php require_once "modal.php" ?>
</div>