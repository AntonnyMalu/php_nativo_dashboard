$('#name').inputmask("*{4,20} *{0,20} *{0,20} *{0,20}");
$('#telefono').inputmask("(9999) 999-99.99");

function generarPassword(){
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
                
            }else{

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
    }else{
        name.removeClass('is-invalid');
    }

    if (!telefono.inputmask("isComplete")) {
        condicion = false;
        telefono.addClass('is-invalid');
        $('#error_telefono').text('El Teléfono es invalido.');
    }else{
        telefono.removeClass('is-invalid');
    }

    if (email.val().length <= 0) {
        condicion = false;
        email.addClass('is-invalid');
        $('#error_email').text('El Email es obligatorio.');
    }else{
        email.removeClass('is-invalid');
    }

    if (password.val().length <= 0) {
        condicion = false;
        password.addClass('is-invalid');
        $('#error_password').text('La contraseña es obligatoria.');
    }else{
        if (password.val().length > 0 && password.val().length < 8) {
            condicion = false;
            password.addClass('is-invalid');
            $('#error_password').text('La contraseña debe tener al menos 8 caracteres');
        }else{
            password.removeClass('is-invalid');
        }
    }

    if (role.val().length <= 0) {
        condicion = false;
        $('#error_role').text('El rol es obligatorio.');
        role.addClass('is-invalid');
    }else{
        role.removeClass('is-invalid');
    }

});