<?php

$response = array();

if ($_POST) {
    //proceso
    if (
        !empty($_POST['name']) &&
        !empty($_POST['email'])
        ) {
        //procesar

        $response['result'] = false;
        $response['alerta'] = false;
        $response['error'] = "email_duplicado";
        $response['icon'] = "error";
        $response['message'] = "Email Duplicado";




    } else {
        $response['result'] = false;
        $response['alerta'] = true;
        $response['error'] = "faltan_datos";
        $response['icon'] = "warning";
        $response['title'] = "Faltan datos.";
        $response['message'] = "Todos los campos son requeridos.";
    }
    

} else {
    $response['result'] = false;
    $response['alerta'] = true;
    $response['error'] = 'error_method';
    $response['icon'] =  "error";
    $response['title'] = "Error Method.";
    $response['message'] = "Deben enviarse los datos por el method POST.";
}


echo json_encode($response, JSON_UNESCAPED_UNICODE);
