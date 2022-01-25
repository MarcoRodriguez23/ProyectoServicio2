<?php
    require 'templates/header.php';
?>
            <div class="opcion-superior contenedor">
                <a href="vendedores.php" class="boton-cafe">Volver</a>
            </div>
            <h1>Actualizar vendedor</h1>
            <form action="index.html" class="contenedor formulario contenido-centrado" type="POST" enctype="multipart/form-data">
                <?php
                    require 'templates/formulario-vendedor.php';
                ?>

                <button class="boton-azul" type="submit">Actualizar vendedor</button>
            </form>
        </main>
    </div>




<?php
    require 'templates/footer.php';