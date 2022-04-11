<?php

namespace App\Database;

use Medoo\Medoo;

//connect to Database
Class Database {

    public function __construct(){
        $this->host = 'localhost';
        $this->database_name = 'project-canada';
        $this->username = 'root';
        $this->password = "";
    }

    public function connect(){
        // Connect the database.
        return new Medoo([
            'type' => 'mysql',
            'host' => $this->host,
            'database' =>  $this->database_name,
            'username' => $this->username,
            'password' => $this->password
        ]); 
    }
}

?>