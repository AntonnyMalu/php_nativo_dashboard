$('#name').inputmask("*{4,20} *{0,20} *{0,20} *{0,20}");
$('#telefono').inputmask("(9999) 999-99.99");

$('#form_register').submit(function (e) { 
    e.preventDefault();
    alert("hola mundo");
    
});

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