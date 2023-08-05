$('#name').inputmask("*{4,20} *{0,20} *{0,20} *{0,20}");
$('#telefono').inputmask("(9999) 999-99.99");

function generarPassword() {
    $.ajax({
        type: "POST",
        url: "procesar.php",
        data: {
            opcion: "generar_password"
        },
        success: function (response) {
            let data = JSON.parse(response);
            if (data.result) {
                $('#password').val(data.message);

            } else {

                if (data.alerta) {
                    Alerta.fire({
                        icon: data.icon,
                        title: data.title,
                        text: data.message
                    });
                } else {
                    Toast.fire({
                        icon: data.icon,
                        text: data.message
                    });
                }
            }
        }
    });
}

$('#form_register').submit(function (e) {
    e.preventDefault();
    var condicion = true;
    let name = $('#name');
    let email = $('#email');
    let telefono = $('#telefono');
    let password = $('#password');
    let role = $('#role');


    if (!name.inputmask("isComplete")) {
        condicion = false;
        name.addClass('is-invalid');
        $('#error_name').text('El Nombre es obligatorio y debe tener al menos 4 caracteres');
    } else {
        name.removeClass('is-invalid');
    }

    if (!telefono.inputmask("isComplete")) {
        condicion = false;
        telefono.addClass('is-invalid');
        $('#error_telefono').text('El Teléfono es invalido.');
    } else {
        telefono.removeClass('is-invalid');
    }

    if (email.val().length <= 0) {
        condicion = false;
        email.addClass('is-invalid');
        $('#error_email').text('El Email es obligatorio.');
    } else {
        email.removeClass('is-invalid');
    }

    if (password.val().length > 0) {
        if (password.val().length > 0 && password.val().length < 8) {
            condicion = false;
            password.addClass('is-invalid');
            $('#error_password').text('La contraseña debe tener al menos 8 caracteres');
        } else {
            password.removeClass('is-invalid');
        }
    }

    if (role.val().length <= 0) {
        condicion = false;
        $('#error_role').text('El rol es obligatorio.');
        role.addClass('is-invalid');
    } else {
        role.removeClass('is-invalid');
    }

    if (condicion) {
        Cargando.fire();
        $.ajax({
            type: 'POST',
            url: 'procesar.php',
            data: $(this).serialize(),
            success: function (response) {
                let data = JSON.parse(response);

                if (data.result) {
                    let tr = '<th scope="row"> ' + data.item + ' </th>' +
                        '<td id="table_nombre_' + data.id + '">' +
                        data.name +
                        ' </td>' +
                        '<td id="table_email_' + data.id + '"> ' +
                        data.email +
                        '</td>' +
                        '<td class="text-center" id="table_telefono_' + data.id + '"> ' +
                        data.telefono +
                        '</td>' +
                        '<td class="text-center" id="table_role_' + data.id + '">' +
                        data.role +
                        '</td>' +
                        '<td class="text-center" id="table_estatus_' + data.id + '">' +
                        '<i class="fas fa-user text-success"></i>' +
                        '</td>' +
                        '<td>' +
                        '<div class="btn-group btn-group-sm" role="group" aria-label="First group">' +
                        '<button type="button" class="btn btn-primary" onclick="edit(' + data.id + ')" ' +
                        'data-toggle="modal" data-target="#exampleModal" > ' +
                        '<i class="fas fa-edit"></i> ' +
                        ' </button> ' +
                        '<button type="button" class="btn btn-primary"><i class="fas fa-cogs"></i></button>' +
                        '<button type="button" class="btn btn-primary"><i class="far fa-trash-alt"></i></button>' +
                        ' </div> ' +
                        '</td>'
                        ;
                    if (!data.tr) {
                        let html = '<tr id="table_row_' + data.id + '">' +
                            tr +
                            '</tr>';
                        $('#table_tbody').append(html);

                    } else {

                        $('#table_row_' + data.tr).html(tr);
                    }

                    $('#btn_modal_cerrar').click();

                    Toast.fire({
                        icon: data.icon,
                        text: data.message
                    });

                } else {
                    //mensajes de error

                    if (data.error === "email_duplicado") {
                        email.addClass('is-invalid');
                        $('#error_email').text(data.message);
                    }

                    if (password.val().length <= 0 && data.error !== "no_cambios" && data.error !== "email_duplicado") {
                        // condicion = false;
                        password.addClass('is-invalid');
                        $('#error_password').text('La contraseña es obligatoria.');
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
            }

        });
    }

});


function edit(id, item) {
    reset();
    $('#exampleModalLabel').text('Editar Usuario');
    $.ajax({
        type: "post",
        url: "procesar.php",
        data: {
            opcion: "get_usuario",
            id: id,
            item: item
        },
        success: function (response) {
            let data = JSON.parse(response);
            if (data.result) {
                $('#name').val(data.name);
                $('#email').val(data.email);
                $('#telefono').val(data.telefono);
                $('#role').val(data.role);
                $('#role').trigger('change');
                $('#form_registrar_user').val('editar');
                $('#id').val(data.id);
                $('#input_item').val(item);
                Cargando.close();


            } else {
                if (data.alerta) {
                    Alerta.fire({
                        icon: data.icon,
                        title: data.title,
                        text: data.message
                    });
                } else {
                    Toast.fire({
                        icon: data.icon,
                        text: data.message
                    });
                }
            }
        }
    });
}

function reset() {
    $('#btn_reset').click();
    $('#form_registrar_user').val('guardar');
    $('#id').val('');
    $('#name').removeClass('is-invalid');
    $('#email').removeClass('is-invalid');
    $('#telefono').removeClass('is-invalid');
    $('#password').removeClass('is-invalid');
    $('#role').removeClass('is-invalid');
    $('#exampleModalLabel').text('Crear Usuario');
}

function eliminar(id) {
    MessageDelete.fire().then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "post",
                url: "procesar.php",
                data: {
                    opcion : "eliminar",
                    id : id
                },
                success: function (response) {  
                    let data = JSON.parse(response);
                    if (data.result) {
                        $('#table_row_' + id).remove();
                        Toast.fire({
                            icon: data.icon,
                            text: data.title
                        });

                    } else {
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
                }
            });
        }
    });
}