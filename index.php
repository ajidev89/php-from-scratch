<?php

use App\Router\Router;
use Jenssegers\Blade\Blade;

//Getting all necessary clases
require_once realpath('vendor/autoload.php');

$blade = new Blade('views', 'cache');

$router = New Router();
$router->get('/login', "LoginController@show");
$router->get('/404', "ErrorController@get404page");

$router->run();


?>