$('#from_login').submit(function (e) { 
    e.preventDefault();
    let email = $('#email');
    let password = $('#password');

    if (email.val().length > 0 && password.val().length > 0) {
        
        email.removeClass('is-invalid');
        password.removeClass('is-invalid');
        Cargando.fire();
        //envio la solicitud con ajax

    }else{
        //muestro los mensajes de error
        if (email.val().length <= 0) {
            email.addClass('is-invalid');
            $('#error_email').text('El Email es obligatorio.');
        }else{
            email.removeClass('is-invalid');
        }

        if (password.val().length <= 0) {
            password.addClass('is-invalid');
            $('#error_password').text('La Contraseña es obligatorio.');
        }else{
            password.removeClass('is-invalid');
        }

    }

});