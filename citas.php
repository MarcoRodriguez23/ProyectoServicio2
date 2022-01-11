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
                <h4>Filtrar</h4>
                <form action="" method="post" class="contenedor filtro">
                    <div>
                        <label for="nombre">Nombre: </label>
                        <input type="text" placeholder="nombre">
                    </div>
                    <div>
                        <label for="inmueble">Inmueble: </label>
                        <input type="text" placeholder="inmueble">
                    </div>
                    <div>
                        <label for="fecha">Fecha: </label>
                        <input type="text" placeholder="fecha">
                    </div>
                    <div>
                        <label for="hora">Hora: </label>
                        <input type="text" placeholder="hora">
                    </div>
                    
                    <button type="submit">Buscar</button>
                </form>
            </section>
            <main>
                <h2>Citas agendadas</h2>
                <div class="contenedor citas contenido-centrado">
                    
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