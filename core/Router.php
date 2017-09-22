<?php
/**
 * Created by PhpStorm.
 * User: sergi
 * Date: 22/09/17
 * Time: 16:27
 */

class Router
{

    protected $routes;

    public function define($routes){
        $this->routes = $routes;
    }


    public static function load($file)
    {

        $router = new static;
        $router->define(require $file);
        return $router;
    }

    public function direct($uri){

//      array_key_exists($this->toutes,$uri);
        require $this->toutes[$uri];
    }

}