<?php
    require 'templates/header.php';
?>
            
            
            <h1>Nuevo representante</h1>
            <div class="contenedor volver">
                <a href="representantes.php" class="boton-azul">Volver</a>
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

                <fieldset>
                    <legend>Asignar rol</legend>
                    <label for="rol">Rol</label>
                        <select name="rol" id="rol">
                            <option value="0" selected disabled>--Seleccione un rol--</option>
                            <option value="1">rol 1</option>
                            <option value="2">rol 2</option>
                            <option value="3">rol 3</option>
                        </select>
                </fieldset>

                <fieldset>
                    <legend>Credenciales</legend>
                        <label for="correo">Correo</label>
                        <input type="email" placeholder="correo@correo.com" id="correo">
                        <label for="password">Password</label>
                        <input type="password" placeholder="Password" id="password">
                </fieldset>

                <button class="boton-azul" type="submit">Crear representante</button>
            </form>
        </main>

    </div>
    
</body>
<script src="build/js/bundle.js"></script>
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