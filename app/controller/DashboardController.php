<?php
namespace app\controller;

use app\middleware\Auth;

class DashboardController extends Auth
{
    public function isAmdin()
    {
        if (!$this->USER_ROLE) {
            header('location: '. ROOT_PATH.'web\\');
        }
    }
}