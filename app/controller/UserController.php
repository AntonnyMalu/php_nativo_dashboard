<?php
namespace app\controller;

use app\middleware\Admin;
use app\model\User;

class UserController extends Admin
{
    public $listarUsuarios;
    public function index(){
        $this->isAmdin();
        $user = new User();
        $this->listarUsuarios = $user->getAll(1);
    }
}
