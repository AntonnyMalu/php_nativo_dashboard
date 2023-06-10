$('#form_recover').submit(function (e) { 
    e.preventDefault();

    var condicion = true;

    let email = $('#email');

    if (email.val().length <= 0) {
        //condicion = false;
        email.addClass('is-invalid');
        $('#error_email').text('El Email es obligatorio.');
    }else{
        email.removeClass('is-invalid');
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

                    email.addClass('is-valid');
                    $('#send_email').text(data.message);
                    let html = '<a href="../login" class="btn btn-block btn-primary btn-xl">Ir al Login</a>';
                    $('#btn_enviar').html(html);
                    Toast.fire({
                        icon: data.icon,
                        text: data.title
                    });
                    
                } else {

                    if (data.error === "no_email") {
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
        
    }

});
