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
                <a href="/">HOME</a>
                <a href="/nosotros">NOSOTROS</a>
                <a href="/servicios">SERVICIOS</a>
                <a href="/inmuebles">INMUEBLES</a>
                <a href="/departamentos">DEPARTAMENTOS</a>
                <a href="/terrenos">TERRENOS</a>
                <a href="/blog">BLOG</a>
                <a href="/contacto">CONTACTO</a>
            </nav>
        </div> <!--.barra-->
    </header>
    <?php
        //aqui se va ir agregando el contenido de cada pagina
        echo $contenido;
    ?>
    <footer class="footer">
        <div class="footer-superior">
            <div class="footer-logo">
                <a href="index.php" class="logotipo">
                    <img  src="build/img/logo.jpeg" alt="Logotipo">
                </a>
            </div>
            <div class="footer-informacion">
                <p>
                    Cuauhtémoc, Ciudad de México
                </p>
                <p>
                    tel: 55-7379-2800
                </p>
            </div>
            <div class="footer-socialMedia">
                <h4>Encuentranos en:</h4>
                <div class="socialMedia-imagenes">
                    <a href="#">
                        <img src="../build/img/facebook.svg" alt="Facebook">
                    </a>
                    <a href="#">
                        <img src="../build/img/mercadolibre.png" alt="Mercado libre">
                    </a>
                    <a href="https://wa.me/5573792800" target="_blank">
                        <img src="../build/img/whatsapp.svg" alt="whatsapp">
                    </a>
                </div>
            </div>
        </div>
        <p class="copyright">
            Todos los derechos reservados <?php echo date('Y'); ?> &copy;
        </p>
    </footer>
</body>
    <script src="/build/js/bundle.js"></script>
</html>