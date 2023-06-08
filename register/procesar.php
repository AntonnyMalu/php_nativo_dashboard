<?php
require_once "../vendor/autoload.php";
use controller\FlashMessage;
$message = new FlashMessage();
$mensaje = null;

$alert = null;
//Si esta definido el formulario y no es NULL.
if ($_POST) {        

    //Comprobacion campos vacios.
    if (empty($_POST['user'])) {
        $msg = 'El usuario es obligatorio.';
    } elseif (empty($_POST['email'])) {
        $msg = 'El correo electrónico es obligatorio.';
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $msg = 'El correo electrónico no es valido.';
    } elseif (empty($_POST['password'])) {
        $msg = 'La contraseña es obligatorio.';
    } elseif (empty($_POST['password2'])) {
        $msg = 'Debes verificar la contraseña.';
    } elseif ($_POST['password'] != $_POST['password2']) {
        $msg = 'La contraseña de verificación no coincide.';
    } else { //Todo correcto obtienes los datos desde formulario.
        //Obtenemos datos.
        $usuario = $_POST['user'];
        $correo = $_POST['email'];
        //password_hash — Crea un hash de contraseña.
        //BCRYPT, tendrá siempre 60 caracteres, importante que en la Base de datos pueda obtener 60 caracteres.
        $pass = password_hash($_POST['password'], PASSWORD_BCRYPT);     
    }

    //Los datos son verdadero, continuas con tu insert.
    if ($usuario && $correo && $pass) {
        $message->crearFlashMessage($alert="success", $mensaje="guardado", $url=header('Location: ../register/'));
        
    } 

}

