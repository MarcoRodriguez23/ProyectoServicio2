<?php
    require 'templates/header.php';
?>
        <div class="opcion-superior contenedor contenido-centrado">
            <a href="inmuebles.php" class="boton-cafe">Volver</a>
        </div>
        <main>
            <h1>Nuevo inmueble</h1>
            <form action="index.html" class="contenedor formulario contenido-centrado" type="POST" enctype="multipart/form-data">
                <?php
                    require 'templates/formulario-inmueble.php';
                ?>
                
                <button class="boton-azul" type="submit">subir inmueble</button>
            </form>
        </main>
    </div>
    
<?php
    require 'templates/footer.php';