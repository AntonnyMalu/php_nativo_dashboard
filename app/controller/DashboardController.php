<?php
namespace app\controller;

use app\middleware\Admin;


class DashboardController extends Admin
{
    public function index(){
        $this->isAmdin();

    }
}