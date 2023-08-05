<div class="card">
    <div class="card-header d-flex">
        <h4 class="mb-0">Registrados</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead class="text-center">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Tabla_id</th>
                        <th scope="col">Valor</th>
                        <th scope="col" style="width: 10%;"> </th>
                    </tr>
                </thead>
                <tbody id="table_tbody">

                   <?php
                    $i = 0;
                    foreach ($auth->listarParametros as $parametro) {
                        $i++;
                    ?> 
                        <tr id="table_row_<?php echo $parametro['id']; ?>">
                            <th scope="row"><?php echo $i; ?></th>
                            <td id="table_nombre_<?php echo $parametro['id']; ?>">
                                <?php echo $parametro['nombre'] ?>
                            </td>
                            <td id="table_tabla_id_<?php echo $parametro['id']; ?>">
                                <?php echo $parametro['tabla_id'] ?>
                            </td>
                            <td class="text-center" id="table_valor_<?php echo $parametro['id']; ?>">
                                <?php echo $parametro['valor'] ?>
                            </td>
                           
                            <td>
                                <div class="btn-group btn-group-sm" role="group" aria-label="First group">
                                    <button type="button" class="btn btn-primary">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-primary">
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
</div>