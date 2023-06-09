<?php
namespace app\controller;
use app\database\Query;

class GuestController
{
    public function __construct()
    {
        if (isset($_SESSION['id'])) {
            header('location:'. ROOT_PATH.'dashboard\\');
        }
    }
}