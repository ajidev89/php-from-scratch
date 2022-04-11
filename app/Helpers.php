<?php

use App\Database\Database;
use Jenssegers\Blade\Blade;

    function view($path,$data){
        $blade = new Blade('resources/views', 'cache');
        echo $blade->make($path,$data)->render();
    }

    function query(){
        $database = new Database();
        return $database->connect();
    }

?>