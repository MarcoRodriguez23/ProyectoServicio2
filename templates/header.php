<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="build/css/app.css">
    <title>inmobiliaria</title>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Panel de administración</h3>
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="inmuebles.php">Inmuebles</a>
                </li>
                <li>
                    <a href="representantes.php">Representates</a>
                </li>
                <li>
                    <a href="vendedores.php">Vendedores</a>
                </li>
            </ul>
            <ul class="list-unstyled components">
                <li>
                    <a href="ganancias.php">Ganancias</a>
                </li>
                <li>
                    <a href="citas.php">Agenda</a>
                </li>
            </ul>
            <ul class="list-unstyled components">
                <li>
                    <a class="boton-amarillo descargar" href="../prueba.txt" download="lista-inmuebles.txt">Descargar lista de inmuebles</a>
                </li>
                
            </ul>
        </nav>
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <!-- <i class="fas fa-align-left"></i> -->
                        <span>&#8592;</span>
                    </button>
                </div>
            </nav>