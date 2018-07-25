<?php

namespace app\classes;

class Routes {

    public static function load($routes, $uri){
    
        if(!array_key_exists($routes, $uri)) {
            throw new \Exception("Rota não existe {$uri}");
        }
        
        return "../app/{$routes[$uri]}";
    }
}
