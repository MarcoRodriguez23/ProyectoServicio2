<?php
    require 'templates/header.php';

?>
            <main>
                <h1>Vendedores</h1>
                <div class="creacion contenedor">
                    <a href="vendedor.php" class="boton-azul">Crear nuevo vendedor</a>
                </div>
                <div class="trabajadores contenedor">
                    <div class="plantilla">
                        <div class="trabajador">
                            <p>Nombre y apellido</p>
                            <p>Edad</p>
                            <p>Residencia</p>
                            <p>Teléfono</p>
                            <p>Comisión: %</p>
                        </div>
                        <div class="opciones">
                            <a href="actualizar-vendedor.php?id=<?php echo $row['id']; ?>" class="boton boton-amarillo">Actualizar</a>
                            <a href="#" class="boton boton-rojo">Eliminar</a>
                        </div>
                    </div>
                    <div class="plantilla">
                        <div class="trabajador">
                            <p>Nombre y apellido</p>
                            <p>Edad</p>
                            <p>Residencia</p>
                            <p>Teléfono</p>
                            <p>Comisión: %</p>
                        </div>
                        <div class="opciones">
                            <a href="actualizar-vendedor.php?id=<?php echo $row['id']; ?>" class="boton boton-amarillo">Actualizar</a>
                            <a href="#" class="boton boton-rojo">Eliminar</a>
                        </div>
                    </div>
                    <div class="plantilla">
                        <div class="trabajador">
                            <p>Nombre y apellido</p>
                            <p>Edad</p>
                            <p>Residencia</p>
                            <p>Teléfono</p>
                            <p>Comisión: %</p>
                        </div>
                        <div class="opciones">
                            <a href="actualizar-vendedor.php?id=<?php echo $row['id']; ?>" class="boton boton-amarillo">Actualizar</a>
                            <a href="#" class="boton boton-rojo">Eliminar</a>
                        </div>
                    </div>
                    <div class="plantilla">
                        <div class="trabajador">
                            <p>Nombre y apellido</p>
                            <p>Edad</p>
                            <p>Residencia</p>
                            <p>Teléfono</p>
                            <p>Comisión: %</p>
                        </div>
                        <div class="opciones">
                            <a href="actualizar-vendedor.php?id=<?php echo $row['id']; ?>" class="boton boton-amarillo">Actualizar</a>
                            <a href="#" class="boton boton-rojo">Eliminar</a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    
<?php

    require 'templates/footer.php';