<?php
namespace App\Controllers;

class ErrorController{

    public static function get404page(){
        return require_once realpath('views/error/404.php');
    }

}