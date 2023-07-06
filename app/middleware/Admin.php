<?php
namespace app\middleware;

class Admin extends Auth
{
    public function isAmdin()
    {
        if (!$this->USER_ROLE) {
            header('location: '. ROOT_PATH.'web\\');
        }
    }
}