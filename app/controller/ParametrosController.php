<?php
namespace app\controller;

use app\middleware\Admin;
use app\model\Parametros;

class ParametrosController extends Admin
{
    public $listarParametros;
    public function index(){
        $this->isAmdin();
        $parametros = new Parametros();
        $this->listarParametros = $parametros->getAll();
    }
}
