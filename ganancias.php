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
                        <label for="vendedor">Vendedor: </label>
                        <input type="text" placeholder="vendedor">
                    </div>
                    <div>
                        <label for="inmueble">Inmueble: </label>
                        <input type="text" placeholder="inmueble">
                    </div>
                    <div>
                        <label for="comision">Comisión: </label>
                        <input type="text" placeholder="comision">
                    </div>
                    <div>
                        <label for="fecha">Fecha: </label>
                        <input type="text" placeholder="fecha">
                    </div>
                    
                    <button type="submit">Buscar</button>
                </form>
            </section>
            <main>
                <h2>Ganancias</h2>
                <div class="contenedor citas contenido-centrado">
                    
                    <table>
                        <tr>
                        <th>Vendedor</th>
                        <th>Comisión</th>
                        <th>Inmueble</th>
                        <th>Fecha</th>
                        <th>Lugar</th>
                        </tr>
                        <tr>
                        <td>Nombre y apellido</td>
                        <td>$$$$$</td>
                        <td>inmueble X</td>
                        <td>dd/mm/aaaa</td>
                        <td>dirección</td>
                        </tr>
                    </table> 
                </div>
            </main>
        </div>
    </div>
    
<?php
    require 'templates/footer.php';