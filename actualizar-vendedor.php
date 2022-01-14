<?php
    require 'templates/header.php';
?>
            <h1>Actualizar vendedor</h1>
            <div class="volver contenedor">
                    <a href="vendedores.php" class="boton-azul">Volver</a>
            </div>
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