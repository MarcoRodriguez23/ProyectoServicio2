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
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Panel de administración</h3>
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="/admin">Inmuebles</a>
                </li>
                <li>
                    <a href="/agentes/index">Agente inmobiliario</a>
                </li>
                <li>
                    <a href="/vendedores/index">Vendedores</a>
                </li>
            </ul>
            <ul class="list-unstyled components">
                <li>
                    <a href="/ganacias">Ganancias</a>
                </li>
                <li>
                    <a href="/citas">Agenda</a>
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
                        <span>Menú</span>
                    </button>
                </div>
            </nav>

            <?php
            //aqui se va ir agregando el contenido de cada pagina
            echo $contenido;
            ?>
        </div>
    </div>
</body>
    <script src="/build/js/bundle.js"></script>
    <!-- jQuery CDN - Slim version (=without AJAX)-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</html>