<?php

namespace Controllers;
use MVC\Router;

class PropiedadController{

    public static function index(Router $router){
        
        $router->view('/propiedades/lista',[

        ]);
    }

    public static function create(Router $router){

        $router->view('/propiedades/create',[

        ]);
        
    }

    public static function update(Router $router){
        
        $router->view('/propiedades/update',[

        ]);

    }

    public static function delete(){
        
    }

    public static function info(Router $router){
        
        $router->view('/propiedades/info',[

        ]);
    }

    public static function date(Router $router){
        
        $router->view('/propiedades/visita',[

        ]);
    }

    public static function sell(Router $router){
        
        $router->view('/propiedades/sell',[

        ]);
    }
}