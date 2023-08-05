<div class="card">
    <div class="card-header d-flex">
        <h4 class="mb-0">Usuarios registrados</h4>
        <div class="dropdown ml-auto">
            <a class="toolbar" href="#" role="button" id="dropdownMenuLink5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-dots-vertical"></i> </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink5">
                <button type="button" class="btn btn-link" onclick="reset()" data-toggle="modal" data-target="#exampleModal">
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
                        <th scope="col" style="width: 10%;"> </th>
                    </tr>
                </thead>
                <tbody id="table_tbody">

                    <?php
                    $i = 0;
                    foreach ($auth->listarUsuarios as $usuario) {
                        $i++;
                    ?>
                        <tr id="table_row_<?php echo $usuario['id']; ?>">
                            <th scope="row"><?php echo $i; ?></th>
                            <td id="table_nombre_<?php echo $usuario['id']; ?>">
                                <?php echo $usuario['name'] ?>
                            </td>
                            <td id="table_email_<?php echo $usuario['id']; ?>">
                                <?php echo $usuario['email'] ?>
                            </td>
                            <td class="text-center" id="table_telefono_<?php echo $usuario['id']; ?>">
                                <?php echo $usuario['telefono'] ?>
                            </td>
                            <td class="text-center" id="table_role_<?php echo $usuario['id']; ?>">
                                <?php
                                if ($usuario['role'] < 1) {
                                    echo 'Estandar';
                                } else {
                                    echo 'Administrador';
                                }
                                ?>
                            </td>
                            <td class="text-center" id="table_estatus_<?php echo $usuario['id']; ?>">
                                <?php
                                if ($usuario['estatus'] == 0) {
                                    echo '<i class="fas fa-user-times"></i>';
                                } else {
                                    echo '<i class="fas fa-user text-success"></i>';
                                }
                                ?>
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group" aria-label="First group">
                                    <button type="button" class="btn btn-primary" onclick="edit(<?php echo $usuario['id'] ?>, <?php echo $i ?>)" 
                                    data-toggle="modal" data-target="#exampleModal" <?php if($usuario['role'] == 100){ echo  ' disabled';} ?>>
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-primary"
                                            data-toggle="modal" data-target="#modal-permisos"
                                        <?php if($usuario['role'] == 100){ echo  ' disabled';} ?>>
                                        <i class="fas fa-cogs"></i>
                                    </button>
                                    <button type="button" class="btn btn-primary" onclick="eliminar(<?php echo $usuario['id'] ?>)"  <?php if($usuario['role'] == 100){ echo  ' disabled';} ?>>
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                    <?php
                    }
                    ?>
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
    <?php require_once "modal_permisos.php" ?>
</div>