<?php
    require 'templates/header.php';
?>
            <a href="representante.php" class="boton">Nuevo represenante</a>
            <h1>Nuevo representante</h1>
            <form action="index.html" class="contenedor formulario contenido-centrado" type="POST" enctype="multipart/form-data">
                <fieldset>
                    <legend>Información Personal</legend>
                    <label for="nombre">Nombre(s)</label>
                    <input type="text" placeholder="Tu nombre" id="nombre">
                    <label for="apellido">Apellidos</label>
                    <input type="text" placeholder="apellidos" id="apellido">
                    <label for="puesto">Puesto</label>
                    <input type="text" placeholder="Tu puesto" id="puesto">
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

                <button class="boton" type="submit">Crear representante</button>
            </form>
        </main>

    </div>
    
<?php
    require 'templates/footer.php';