<?php
session_start();
require_once "../vendor/autoload.php";

use app\model\User;
use app\controller\MailerController;

$response  = array();

if ($_POST) {
    

    if (!empty($_POST['email'])) {

        try{
            
            $email = strtolower($_POST['email']);
            $user = new User();
            $exite = $user->existe('email', '=', $email, null, 1);
            if ($exite) {
                $password = generar_string_aleatorio(8);
                $DB_password = password_hash($password, PASSWORD_DEFAULT);
                
                //definir varianles
                $asunto = 'Reestablecimiento de Contraseña';
                $html = 'Tu nueva contraseña es: <strong>'.$password.'</strong>';
                $noHtml = 'Tu nueva contraseña es: '.$password;

                //envio correo
                $mailer = new MailerController();
                $mailer->enviarEmail($email, $asunto, $html, $noHtml);
            
                $user->update($exite['id'], 'password', $DB_password);
                
                $response['result'] = true;
                $response['alerta'] = false;
                $response['error'] = false;
                $response['icon'] =  "success";
                $response['title'] = "Correo Enviado.";
                $response['message'] = "Tu nueva contraseña se ha enviado a tu correo.";


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