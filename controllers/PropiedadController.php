<?php

namespace Controllers;
use MVC\Router;

class PropiedadController{

    public static function index(Router $router){
        
        $router->view('/propiedades/admin',[

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

    public static function propiedad(Router $router){
        
        $router->view('/propiedades/inmueble',[

        ]);
    }

    public static function delete(){
        
    }
}