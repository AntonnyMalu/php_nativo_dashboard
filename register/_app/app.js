$('#name').inputmask("*{4,20} *{0,20} *{0,20} *{0,20}");
$('#telefono').inputmask("(9999) 999-99.99");

function showPassword(id_btn, id_input)
{
    
        let tipo = $(id_input).attr('type');
        if (tipo === "text") {
            $(id_input).attr('type', 'password');
            $(id_btn).html('<i class="fas fa-eye"></i>');
        } else {
            $(id_input).attr('type', 'text');
            $(id_btn).html('<i class="fas fa-eye-slash"></i>');
        }
    
}


$('#form_register').submit(function (e) { 
    e.preventDefault();
    var condicion = true;
    let name = $('#name');
    let telefono = $('#telefono');
    let email = $('#email');
    let password = $('#password');
    let confirmar = $('#confirmar');

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
    
    if (password.val() != confirmar.val()) {
        condicion = false;
        confirmar.addClass('is-invalid');
        $('#error_confirmar').text('Las contraseñas NO coinciden');
    }else{
        confirmar.removeClass('is-invalid');
    }



    if (condicion) {
        Cargando.fire();
        $.ajax({
            type: 'POST',
            url: 'procesar.php',
            data: $(this).serialize(),
            success: function(response){
                let data = JSON.parse(response);
                
                if (data.result) {
                    //redireccionar
                    window.location.replace ("../../dashboard/");
                }else{
                    //mensajes de error

                    if (data.error === "email_duplicado") {
                        email.addClass('is-invalid');
                        $('#error_email').text("email ya registrado.");
                    }

                    

                    if (data.alerta) {
                        Alerta.fire({
                            icon: data.icon,
                            title: data.title,
                            text: data.message
                        });
                    }else{
                        Toast.fire({
                            icon: data.icon,
                            text: data.message
                        });
                    }

                }
            }
            
        });
    }






});