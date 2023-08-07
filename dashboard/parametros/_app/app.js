$('#nombre').inputmask("*{1,20}");
$('#tabla_id').inputmask("9{1,10}");

$('#form_register_parametro').submit(function (e) {
    e.preventDefault();
    let condicion = true;
    let name = $('#nombre');
    let tabla_id = $('#tabla_id');
    let valor = $('#valor');
    let opcion = $('#opcion_parametros').val();

    if (!name.inputmask("isComplete")) {
        condicion = false;
        name.addClass('is-invalid');
        $('#error_nombre_parametro').text('El nombre es obligatorio.')
    }

    if (tabla_id.val().length <= 0 && valor.val().length <= 0){
        condicion = false;
        tabla_id.addClass('is-invalid');
        valor.addClass('is-invalid')
        $('#error_valor_parametro').text('El valor es obligatorio.');
        $('#error_tabla_id_parametro').text('La tabla_id es obligatoria.');
    }


    if (condicion){
        Cargando.fire();
        $.ajax({
            type:'POST',
            url: 'procesar.php',
            data: $(this).serialize(),
            success: function (response){
                let data = JSON.parse(response);

                if (data.result){

                    let html = '<tr id="table_row_' + data.id +'">\n' +
                        '                            <th scope="row">'+ data.item +'</th>\n' +
                        '                            <td id="table_nombre_' + data.id +'">\n' +
                                                        data.nombre +
                        '                            </td>\n' +
                        '                            <td id="table_tabla_id_' + data.id +'">\n' +
                                                        data.tabla_id +
                        '                            </td>\n' +
                        '                            <td class="text-center" id="table_valor_' + data.id +'">\n' +
                                                        data.valor +
                        '                            </td>\n' +
                        '                           \n' +
                        '                            <td>\n' +
                        '                                <div class="btn-group btn-group-sm" role="group" aria-label="First group">\n' +
                        '                                    <button type="button" class="btn btn-primary" onclick="edit(' + data.id + ', ' + data.item +')"  >\n' +
                        '                                        <i class="fas fa-edit"></i>\n' +
                        '                                    </button>\n' +
                        '                                    <button type="button" class="btn btn-primary">\n' +
                        '                                        <i class="far fa-trash-alt"></i>\n' +
                        '                                    </button>\n' +
                        '                                </div>\n' +
                        '                            </td>\n' +
                        '                        </tr>';


                    if (opcion === 'guardar'){
                        $('#table_tbody').append(html);
                    }

                    if (opcion === 'editar'){
                        $('#table_nombre_' + data.id).text(data.nombre);
                        $('#table_tabla_id_' + data.id).text(data.tabla_id);
                        $('#table_valor_' + data.id).text(data.valor);
                    }

                    $('#btn_cancelar').click();
                    reset();

                }

                if (data.alerta) {
                    Alerta.fire({
                        icon: data.icon,
                        title: data.title,
                        text: data.message
                    });
                } else {
                    Toast.fire({
                        icon: data.icon,
                        text: data.title
                    });
                }
            }
        });
    }

});


function edit(id) {
    reset();
    $.ajax({
        type: 'POST',
        url: 'procesar.php',
        data: {
            id: id,
            opcion: 'get_parametro'
        },
        success: function (response) {
            let data = JSON.parse(response);

            if (data.result){
                $('#nombre').val(data.nombre);
                $('#tabla_id').val(data.tabla_id);
                $('#valor').val(data.valor);
                $('#opcion_parametros').val("editar");
                $('#id_parametro').val(data.id);
            }

            if (data.alerta) {
                Alerta.fire({
                    icon: data.icon,
                    title: data.title,
                    text: data.message
                });
            } else {
                Toast.fire({
                    icon: data.icon,
                    text: data.title
                });
            }
        }
    });
}

function reset() {
    $('#nombre').removeClass('is-invalid');
    $('#tabla_id').removeClass('is-invalid');
    $('#valor').removeClass('is-invalid');
    $('#opcion_parametros').val("guardar");
    $('#id_parametro').val("");
}

$('#btn_cancelar').click(function () {
    reset();
});

function borrar(id) {
    MessageDelete.fire().then((result) => {
        $.ajax({
            type: 'POST',
            url: 'procesar.php',
            data: {
                id: id,
                opcion: 'eliminar'
            },
            success: function (response) {
                let data = JSON.parse(response);

                if (data.result){
                    $('#table_row_' + id).remove();
                }

                if (data.alerta) {
                    Alerta.fire({
                        icon: data.icon,
                        title: data.title,
                        text: data.message
                    });
                } else {
                    Toast.fire({
                        icon: data.icon,
                        text: data.title
                    });
                }
            }
        });
    });
}

console.log('hi!');
