<?php

namespace Controllers;
use MVC\Router;

class PaginasController{

    public static function index(Router $router){
        $router->view('/user/index',[

        ]);
    }

    public static function nosotros(Router $router){
        $router->view('/user/nosotros',[

        ]);
    }

    public static function servicios(Router $router){
        $router->view('/user/servicios',[

        ]);
    }

    public static function servicio(Router $router){
        $router->view('/user/servicio',[

        ]);
    }

    public static function inmuebles(Router $router){
        $router->view('/user/inmuebles',[

        ]);
    }

    public static function inmueble(Router $router){
        $router->view('/user/inmueble',[

        ]);
    }

    public static function departamentos(Router $router){
        $router->view('/user/departamentos',[

        ]);
    }

    public static function departamento(Router $router){
        $router->view('/user/departamento',[

        ]);
    }

    public static function terrenos(Router $router){
        $router->view('/user/terrenos',[

        ]);
    }

    public static function terreno(Router $router){
        $router->view('/user/terreno',[

        ]);
    }

    public static function blog(Router $router){
        $router->view('/user/blog',[

        ]);
    }

    public static function entrada(Router $router){
        $router->view('/user/entrada',[

        ]);
    }

    public static function contacto(Router $router){
        $router->view('/user/contacto',[

        ]);
    }

}