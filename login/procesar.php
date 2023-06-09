<?php
session_start();
require_once "../vendor/autoload.php";

use app\model\User;

$response = array();

if ($_POST) {
    $user = new User();

    if (
        !empty($_POST['email']) &&
        !empty($_POST['password'])
        ) {

        try {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $existe = $user->existe('email', '=', $email);

            if ($existe) {
                # code...

                $id = $existe['id'];
                $name = $existe['name'];
                $db_password = $existe['password'];

                if (password_verify($password, $db_password)) {
                    
                    $band = $existe['band'];

                    if ($band) {
                        $_SESSION['id'] = $id;
                        $response['result'] = true;
                        $response['alerta'] = false;
                        $response['error'] = false;
                        $response['icon'] =  "success";
                        $response['title'] = "Guardado.";
                        $response['message'] = "Bienvenido ". $name;
                    } else {
                        $response['result'] = false;
                        $response['alerta'] = false;
                        $response['error'] = 'no_activo';
                        $response['icon'] =  "error";
                        $response['title'] = "Usuario Inactivo.";
                        $response['message'] = "Usuario Inactivo. Contacte a su Administrador.";
                    }
                

                }else{
                    $response['result'] = false;
                    $response['alerta'] = false;
                    $response['error'] = 'no_password';
                    $response['icon'] =  "error";
                    $response['title'] = "Contreseña invalida.";
                    $response['message'] = "La contraseña es incorrecta.";
                }



            } else {
                $response['result'] = false;
                $response['alerta'] = false;
                $response['error'] = 'no_email';
                $response['icon'] =  "error";
                $response['title'] = "Email NO encontrado.";
                $response['message'] = "El Email NO se encuentra en nuestros registro.";
            }
            


        }  catch (PDOException $e) {
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
