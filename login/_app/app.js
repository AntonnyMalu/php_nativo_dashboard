$('#from_login').submit(function (e) { 
    e.preventDefault();
    let email = $('#email');
    let password = $('#password');

    if (email.val().length > 0 && password.val().length > 0) {
        
        email.removeClass('is-invalid');
        password.removeClass('is-invalid');
        Cargando.fire();
        //envio la solicitud con ajax
        $.ajax({
            type: "POST",
            url: "procesar.php",
            data: $(this).serialize(),
            success: function (response) {
                let data = JSON.parse(response);

                if (data.result) {
                    //redireccionar
                    window.location.replace ("../../dashboard/");
                }else{
                    //mensajes de error

                    if (data.error === "no_email") {
                        email.addClass('is-invalid');
                        $('#error_email').text(data.message);
                    }

                    if (data.error === "no_password") {
                        password.addClass('is-invalid');
                        $('#error_password').text(data.message);
                    }

                    if (data.error === "no_activo") {
                        email.addClass('is-invalid');
                        $('#error_email').text(data.message);
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
                            text: data.title
                        });
                    }
                    

                }



            }
        });

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