<?php
    require_once __DIR__ . '/../includes/app.php';

    use MVC\Router;
    use Controllers\PropiedadController;
    use Controllers\VendedorController;
    use Controllers\PaginasController;
    use Controllers\LoginController;
    use Controllers\AgenteController;

    $router = new Router();

    //zona privada
    $router->get('/admin',[PropiedadController::class,'index']);
    $router->get('/propiedades/create',[PropiedadController::class,'create']);
    $router->post('/propiedades/create',[PropiedadController::class,'create']);
    $router->get('/propiedades/update',[PropiedadController::class,'update']);
    $router->post('/propiedades/update',[PropiedadController::class,'update']);
    $router->post('/propiedades/delete',[PropiedadController::class,'delete']);
    $router->get('/propiedades/info',[PropiedadController::class,'info']);
    $router->get('/propiedades/date',[PropiedadController::class,'date']);
    $router->post('/propiedades/date',[PropiedadController::class,'date']);
    $router->get('/propiedades/sell',[PropiedadController::class,'sell']);
    $router->post('/propiedades/sell',[PropiedadController::class,'sell']);

    $router->get('/agentes',[AgenteController::class,'index']);
    $router->get('/agentes/create',[AgenteController::class,'create']);
    $router->post('/agentes/create',[AgenteController::class,'create']);
    $router->get('/agentes/update',[AgenteController::class,'update']);
    $router->post('/agentes/update',[AgenteController::class,'update']);
    $router->post('/agentes/delete',[AgenteController::class,'delete']);

    $router->get('/vendedores',[VendedorController::class,'index']);
    $router->get('/vendedores/create',[VendedorController::class,'create']);
    $router->post('/vendedores/create',[VendedorController::class,'create']);
    $router->get('/vendedores/update',[VendedorController::class,'update']);
    $router->post('/vendedores/update',[VendedorController::class,'update']);
    $router->post('/vendedores/delete',[VendedorController::class,'delete']);

    $router->get('/ganancias',[PaginasController::class,'ganancias']);
    $router->get('/agenda',[PaginasController::class,'agenda']);

    //zona publica
    // $router->get('/',[PaginasController::class,'index']);
    // $router->get('/nosotros',[PaginasController::class,'nosotros']);
    // $router->get('/propiedades',[PaginasController::class,'propiedades']);
    // $router->get('/propiedad',[PaginasController::class,'propiedad']);
    // $router->get('/blog',[PaginasController::class,'blog']);
    // $router->get('/entrada',[PaginasController::class,'entrada']);
    // $router->get('/contacto',[PaginasController::class,'contacto']);
    // $router->post('/contacto',[PaginasController::class,'contacto']);

    //login y autenticacion
    $router->get('/login',[LoginController::class,'login']);
    $router->post('/login',[LoginController::class,'login']);
    $router->get('/logout',[LoginController::class,'logout']);
    
    $router->comprobarRutas();