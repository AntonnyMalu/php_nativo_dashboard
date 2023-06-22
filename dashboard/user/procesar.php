<?php
session_start();
require_once "../../vendor/autoload.php";

$response = array();

if ($_POST) {

    try {
        //code...
        if (!empty($_POST['opcion'])) {

            $opcion = $_POST['opcion'];
            if ($opcion == "generar_password") {

                $password = generar_string_aleatorio();

                $response['result'] = true;
                $response['alerta'] = false;
                $response['error'] = null;
                $response['icon'] =  "success";
                $response['title'] = "Contraseña generada.";
                $response['message'] = $password;

            }


        } else {
            $response['result'] = false;
            $response['alerta'] = true;
            $response['error'] = 'error_opcion';
            $response['icon'] =  "error";
            $response['title'] = "Error opcion.";
            $response['message'] = "Faltan Datos.";
        }
    } catch (PDOException $e) {
        $response['result'] = false;
        $response['alerta'] = true;
        $response['error'] = 'error_model';
        $response['icon'] =  "error";
        $response['title'] = "Error en el Model";
        $response['message'] = "PDOException {$e->getMessage()}";
    } catch (Exception $e) {
        $response['result'] = false;
        $response['alerta'] = true;
        $response['error'] = 'error_model';
        $response['icon'] =  "error";
        $response['title'] = "Error en el Model";
        $response['message'] = "General Error: {$e->getMessage()}";
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
