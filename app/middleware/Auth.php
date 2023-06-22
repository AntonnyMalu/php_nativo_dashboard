<?php
namespace app\middleware;

use app\model\User;
use PDOException;
use Exception;

class Auth
{

    public $USER_ID;
    public $USER_NAME;
    public $USER_EMAIL;
    public $USER_PASSWORD;
    public $USER_TELEFONO;
    public $USER_TOKEN;
    public $USER_PATH;
    public $USER_ROLE;
    public $USER_ROLE_ID;
    public $USER_PERMISOS;
    public $USER_STATUS;
    public $USER_BAND;
    public $USER_DISPOSITIVO;
    
    public function __construct($index = false)
    {
        if (isset($_SESSION['id'])) {
            
            try {
                
                $user = new User();
                $getUser = $user->find($_SESSION['id']);
                $this->USER_ID = $getUser['id'];
                $this->USER_NAME = $getUser['name'];
                $this->USER_EMAIL = $getUser['email'];
                $this->USER_PASSWORD = $getUser['password'];
                $this->USER_TELEFONO = $getUser['telefono'];
                $this->USER_TOKEN = $getUser['token'];
                $this->USER_PATH = $getUser['path'];
                $this->USER_ROLE = $getUser['role'];
                $this->USER_ROLE_ID = $getUser['role_id'];
                $this->USER_STATUS = $getUser['permisos'];
                $this->USER_STATUS = $getUser['estatus'];
                $this->USER_BAND = $getUser['band'];
                $this->USER_DISPOSITIVO = $getUser['dispositivo']; 

                if (!$this->USER_BAND) {
                    session_destroy();
                    header('location: '. ROOT_PATH. 'login\\');
                }
                
            } catch (PDOException $e) {
                session_destroy();
                header('location: '. ROOT_PATH. 'login\\'); 
            }

        } else {
            if (!$index) {
                session_destroy();
                header('location: '. ROOT_PATH. 'login\\');
            }
        }
        
    }


}