<?php

namespace Controllers;
use MVC\Router;

class VendedorController{

    public static function index(Router $router){

        $router->view('vendedores/lista',[

        ]);
        
    }

    public static function create(Router $router){
        
        $router->view('vendedores/create',[

        ]);
    }

    public static function update(Router $router){
        
        $router->view('vendedores/update',[

        ]);
    }

    public static function delete(){
        
        
    }
}