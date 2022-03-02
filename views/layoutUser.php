<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="/build/css/app.css">
    <title>inmobiliaria</title>
</head>
<body>
    <header class="header">
        <div class="contenedor barra">
            <a href="index.php" class="logotipo">
                <img  src="build/img/GALLARDO SVG.svg" alt="Logotipo">
            </a>
            <div class="mobile-menu">
                <img src="build/img/barras.svg" alt="icono-responsive">
            </div>
            <nav class="navegacion">
                <a href="index.php">HOME</a>
                <a href="nosotros.php">NOSOTROS</a>
                <a href="servicios.php">SERVICIOS</a>
                <a href="inmuebles.php">INMUEBLES</a>
                <a href="departamentos.php">DEPARTAMENTOS</a>
                <a href="terrenos.php">TERRENOS</a>
                <a href="blog.php">BLOG</a>
                <a href="contacto.php">CONTACTO</a>
            </nav>
        </div> <!--.barra-->
    </header>
    <?php
        //aqui se va ir agregando el contenido de cada pagina
        echo $contenido;
    ?>
</body>
    <script src="/build/js/bundle.js"></script>
</html>