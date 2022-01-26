<?php

namespace Controllers;
use MVC\Router;

class AgenteController{

    public static function index(Router $router){

        $router->view('/agentes/lista',[

        ]);
        
    }

    public static function create(Router $router){

        $router->view('/agentes/create',[

        ]);
        
    }

    public static function update(Router $router){

        $router->view('/agentes/update',[

        ]);
        

    }

    public static function delete(){
        
    }
}