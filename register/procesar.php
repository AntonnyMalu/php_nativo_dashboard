<?php
session_start();
require_once "../vendor/autoload.php";

use app\model\User;

$response = array();

if ($_POST) {

    $user = new User();

    if (
        !empty($_POST['name']) &&
        !empty($_POST['email'] &&
        !empty($_POST['password']) &&
        !empty($_POST['telefono']) )
        ) {

        try {
            //code...
            $name = ucwords($_POST['name']);
            $email = strtolower($_POST['email']);
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $telefono = $_POST['telefono'];
            $created_at = date("Y-m-d");

            $existeEmail = $user->existe('email', '=', $email, null, 1);

            if (!$existeEmail) {
                
                $data = [
                    $name,
                    $email,
                    $password,
                    $telefono,
                    $created_at
                ];

                $guardar = $user->save($data);
                $getUser = $user->first('email', '=', $email);
                $_SESSION['id'] = $getUser['id'];
                $response['result'] = true;
                $response['alerta'] = false;
                $response['error'] = false;
                $response['icon'] =  "success";
                $response['title'] = "Guardado.";
                $response['message'] = "Bienvenido ". $name;

            } else {
                $response['result'] = false;
                $response['alerta'] = false;
                $response['error'] = 'email_duplicado';
                $response['icon'] =  "warning";
                $response['title'] = "Email Duplicado.";
                $response['message'] = "El email ya esta registrado.";
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
