<?php

namespace Controllers;
use MVC\Router;

class PaginasController{

    public static function ganancias(Router $router){
        
        $router->view('/ganancias/lista',[

        ]);
    }

    public static function agenda(Router $router){
        
        $router->view('/citas/lista',[

        ]);
    }

}