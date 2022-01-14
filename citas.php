<?php
    require 'templates/header.php';
?>
            <!-- <header class="header">
                <h1>Inmuebles en venta</h1>
                <div class="buscador">
                    &#128270;<input class="buscador" type="search" placeholder="buscar por ciudad, colonia, alcaldía, municipio">
                </div>
            </header> -->
            <section>
                <form action="" method="post" class="contenedor filtro contenido-centrado">
                    <select name="nombre" id="nombre">
                        <option value="" selected disabled>Nombre</option>
                        <option value="nombre-1">Nombre X</option>
                        <option value="nombre-2">Nombre X</option>
                    </select>
                    <select name="inmueble" id="inmueble">
                        <option value="" selected disabled>Inmueble</option>
                        <option value="inmueble-1">Inmueble 1</option>
                        <option value="inmueble-2">Inmueble 2</option>
                    </select>
                    <select name="fecha" id="fecha">
                        <option value="" selected disabled>Fecha</option>
                        <option value="fecha-1">DD/MM/AA</option>
                        <option value="fecha-2">DD/MM/AA</option>
                    </select>
                    <select name="hora" id="hora">
                        <option value="" selected disabled>Hora</option>
                        <option value="hora-1">00:00</option>
                        <option value="hora-2">00:00</option>
                    </select>
                    
                    <button type="submit">Buscar</button>
                </form>
            </section>
            <main>
                <h2>Citas agendadas</h2>
                <div class="contenedor citas">
                    
                    <table>
                        <tr>
                          <th>Nombre</th>
                          <th>Inmueble de interés</th>
                          <th>Fecha</th>
                          <th>Hora</th>
                        </tr>
                        <tr>
                          <td>Nombre y apellido</td>
                          <td>inmueble X</td>
                          <td>dd/mm/aaaa</td>
                          <td>hh:mm</td>
                        </tr>
                      </table> 
                </div>
            </main>
        </div>
    </div>
    
    <?php
    require 'templates/footer.php';