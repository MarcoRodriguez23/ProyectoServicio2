<?php
    require 'templates/header.php';
?>
            <h1>Actualizar vendedor</h1>
            <div class="volver contenedor">
                    <a href="vendedores.php" class="boton-azul">Volver</a>
            </div>
            <form action="index.html" class="contenedor formulario contenido-centrado" type="POST" enctype="multipart/form-data">
                <fieldset>
                    <legend>Información Personal</legend>
                    <label for="nombre">Nombre(s)</label>
                    <input type="text" placeholder="Tu nombre" id="nombre">
                    <label for="apellido">Apellidos</label>
                    <input type="text" placeholder="apellidos" id="apellido">
                    <label for="residencia">Residencia (Calle, colonia, alcaldia o municipio)</label>
                    <input type="text" placeholder="Tu dirección" id="residencia">
                    <label for="edad">Edad</label>
                    <input type="number" placeholder="ejem: 30" id="residencia" min="15">
                    <label for="telefono">Teléfono</label>
                    <input type="number" placeholder="ejem: 5546782345" id="telefono">
                </fieldset>

                <button class="boton-azul" type="submit">Actualizar vendedor</button>
            </form>
        </main>
    </div>




<?php
    require 'templates/footer.php';