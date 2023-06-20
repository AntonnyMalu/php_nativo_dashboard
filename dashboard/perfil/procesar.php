<?php
session_start();
require_once "../../vendor/autoload.php";

use app\model\User;

$response = array();

if ($_POST) {
    $user = new User();

    if (
        !empty($_POST['name']) &&
        !empty($_POST['email']) &&
        !empty($_POST['telefono'])
    ) {
        try {


            $name = ucwords($_POST['name']);
            $email = $_POST['email'];
            $password_actual = $_POST['password_actual'];
            $password_nueva = $_POST['password_nueva'];
            $confirmar = $_POST['confirmar'];
            $hoy = date("Y-m-d ");
            $cambios = false;
            $getUsuario = $user->find($_SESSION['id']);
            $id = $_SESSION['id'];

            if ($getUsuario['name'] != $name) {
                $cambios = true;
                $actualizar = $user->update($id, 'name', $name);
                $actualizar = $user->update($id, 'updated_at', $hoy);
            }

            if ($getUsuario['email'] != $email) {
                $cambios = true;
                $actualizar = $user->update($id, 'email', $email);
                $actualizar = $user->update($id, 'updated_at', $hoy);
            }

            if (!empty($password_nueva)) {
                if (password_verify($password_actual, $getUsuario['password'])) {
                    if (strlen($password_nueva) >= 8) {
                        $cambios = true;
                        $password_nueva = password_hash($password_nueva, PASSWORD_DEFAULT);
                        $actualizar = $user->update($id, 'password', $password_nueva);
                        $actualizar = $user->update($id, 'updated_at', $hoy);
                    } else {
                        $response['result'] = false;
                        $response['alerta'] = false;
                        $response['error'] = 'error_password_min';
                        $response['icon'] =  "error";
                        $response['title'] = "Error.";
                        $response['message'] = "la contraseña debe tener al menos 8 caracteres.";
                    }
                } else {
                    $response['result'] = false;
                    $response['alerta'] = false;
                    $response['error'] = 'error_password_actual';
                    $response['icon'] =  "error";
                    $response['title'] = "Error.";
                    $response['message'] = "la contraseña actual es incorrecta.";
                }
            }


            if ($cambios) {
                $response['result'] = true;
                $response['alerta'] = false;
                $response['error'] = 'cambios';
                $response['icon'] =  "success";
                $response['title'] = "Cambios guardados.";
                $response['message'] = "Cambios guardados exitosamente.";
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
        # code...
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
