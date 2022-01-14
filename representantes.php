<?php
    require 'templates/header.php';

?>
            <main>
                <h1>Representantes</h1>
                <div class="creacion contenedor">
                    <a href="representante.php" class="boton-azul">Crear nuevo representante</a>
                </div>
                <div class="trabajadores contenedor">
                    <div class="plantilla">
                        <div class="trabajador">
                            <p>Nombre y apellido</p>
                            <p>Edad</p>
                            <p>Residencia</p>
                            <p>Teléfono</p>
                            <p>Rol</p>
                            <p>Comisión: %</p>
                        </div>
                        <div class="opciones">
                            <a href="actualizar-representante.php?id=<?php echo $row['id']; ?>" class="boton boton-amarillo">Actualizar</a>
                            <a href="#" class="boton boton-rojo">Eliminar</a>
                        </div>
                    </div>
                    <div class="plantilla">
                        <div class="trabajador">
                            <p>Nombre y apellido</p>
                            <p>Edad</p>
                            <p>Residencia</p>
                            <p>Teléfono</p>
                            <p>Rol</p>
                            <p>Comisión: %</p>
                        </div>
                        <div class="opciones">
                            <a href="actualizar-representante.php?id=<?php echo $row['id']; ?>" class="boton boton-amarillo">Actualizar</a>
                            <a href="#" class="boton boton-rojo">Eliminar</a>
                        </div>
                    </div>
                    <div class="plantilla">
                        <div class="trabajador">
                            <p>Nombre y apellido</p>
                            <p>Edad</p>
                            <p>Residencia</p>
                            <p>Teléfono</p>
                            <p>Rol</p>
                            <p>Comisión: %</p>
                        </div>
                        <div class="opciones">
                            <a href="actualizar-representante.php?id=<?php echo $row['id']; ?>" class="boton boton-amarillo">Actualizar</a>
                            <a href="#" class="boton boton-rojo">Eliminar</a>
                        </div>
                    </div>
                    <div class="plantilla">
                        <div class="trabajador">
                            <p>Nombre y apellido</p>
                            <p>Edad</p>
                            <p>Residencia</p>
                            <p>Teléfono</p>
                            <p>Rol</p>
                            <p>Comisión: %</p>
                        </div>
                        <div class="opciones">
                            <a href="actualizar-representante.php?id=<?php echo $row['id']; ?>" class="boton boton-amarillo">Actualizar</a>
                            <a href="#" class="boton boton-rojo">Eliminar</a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    
<?php

    require 'templates/footer.php';