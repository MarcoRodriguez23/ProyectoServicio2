<?php

namespace MVC;

class Router{
    public $rutasGET=[];
    public $rutasPOST=[];
    
    public function get($url, $fn){
        $this->rutasGET[$url]=$fn;
    }

    public function post($url, $fn){
        $this->rutasPOST[$url]=$fn;
    }

    public function comprobarRutas(){
        // session_start();

        // $auth= $_SESSION['login']??null;

        // //arreglo de rutas protegidas
        // $rutas_protegidas=['/admin','propiedades/crear','propiedades/actualizar','propiedades/eliminar','vendedores/crear','vendedores/actualizar','vendedores/eliminar'];
        
        $urlActual =  $_SERVER['PATH_INFO']?? '/';
        $metodo = $_SERVER['REQUEST_METHOD'];
        
        if($metodo === 'GET'){
            $fn = $this->rutasGET[$urlActual]??null;
        }
        else{
            $fn = $this->rutasPOST[$urlActual]??null;
        }

        // //protegiendo rutas
        // if(in_array($urlActual, $rutas_protegidas) && !$auth){
        //     header('Location: /');
        // }


        if($fn){
            //la URL existe y tiene una funcion asociada, el this le pasa las rutas get y post (atributos)
            call_user_func($fn,$this);
        }
        else{
            echo "pagina no encontrada";
        }
        // debuguear($this);
    }

    // muestra la vista
    public function view($view, $datos=[]){
        foreach ($datos as $key => $value) {
            $$key = $value;
        }

        ob_start();

        include __DIR__ . "/views/$view.php";

        $contenido = ob_get_clean();
        
        // session_start();
        
        if (session_status()===2) {
            include __DIR__ . "/views/layoutAdmin.php";
        }
        else{
            include __DIR__ . "/views/layoutUser.php";
        }
        
    }

}