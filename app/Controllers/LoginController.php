<?php
 
 namespace App\Controllers;


 class LoginController {

    public static function show(){

        $users = query()->select('users',[
            'email','id','password'
        ]);

        $data = [
            'title' => 'Login',
            'message' => "Login totpoktpok",
            'users' => json_encode($users)
        ];
        return view('auth.login',$data);        
    }

    public static function createUser(){
        return require_once realpath('views/index.php');
    }
 }

?>