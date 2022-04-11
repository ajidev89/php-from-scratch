<?php
namespace App\Router;


class Router{
    
    private array $routes;

    private function addRoute($method,$path,$callback){
        
        $route = [
            'method' => $method,
            'path' => $path,
            'callback' => $callback
        ];
        $this->routes[$method.$path] = $route;
    }

    public function get(string $path, $callback)
    {
        $this->addRoute('GET',$path,$callback);
    }

    
    public function post( string $path,$callback){
        
        $this->addRoute('POST',$path,$callback);
    }

    public function put( string $path,$callback){
        $this->addRoute('PUT',$path,$callback);
    }

    public function delete( string $path,$callback){
        $this->addRoute('DELETE',$path,$callback);
    }

    public function run()
    {
        $url = parse_url($_SERVER['REQUEST_URI']);
        $path = $url['path'];
        $method = $_SERVER['REQUEST_METHOD'];
    
        $callback = null;
        foreach ($this->routes as $route) {
            if($route['path'] == $path && $route['method'] == $method){
                $callback = $route['callback'];
            }
        }

        if(is_string($callback)){
            $parts = explode('@',$callback);
            $callback  = "App\Controllers\\" .$parts[0].'::'. $parts[1];

        }

        if(empty($callback)){
            header('location: 404');
        }
    
        $request = json_encode(array_merge($_GET,$_POST));
        call_user_func($callback,[
           $request
        ]);

    }
}


?>