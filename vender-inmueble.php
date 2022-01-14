<?php
    require 'templates/header.php';
?>
            <h1>Proceso de venta</h1>
            <div class="volver contenedor">
                    <a href="inmuebles.php" class="boton-azul">Volver</a>
            </div>
            <section>
                <h2>Inmueble X</h2>
                <div class="resumen-venta contenedor">
                    <h4>Resumen</h4>
                    <div class="resumen-venta_informacion">
                        <img src="build/img/1.jpg" alt="imagen del inmueble">
                        <div>
                            <p>Dirección</p>
                            <p>Precio</p>
                            <p>Forma de pago</p>
                            <p>Estado</p>
                        </div>
                        <div>
                            <ul>
                                <li>Muebles</li>
                                <li>Cocina</li>
                                <li>Baños</li>
                                <li>Estacionamientos</li>
                                <li>Habitaciones</li>
                            </ul>
                        </div>
                        <div>
                            <ul>
                                <li>Amenidad 1</li>
                                <li>Amenidad 2</li>
                                <li>Amenidad 3</li>
                                <li>Amenidad 4</li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div>
                    <form action="" method="post" class="contenedor filtro">
                        <select name="representante" id="representante">
                            <option value="" selected disabled>Representante</option>
                            <option value="representante-1">Representante X</option>
                            <option value="representante-2">Representante X</option>
                        </select>
                        <select name="vendedor" id="vendedor">
                            <option value="" selected disabled>Vendedor</option>
                            <option value="vendedor-1">Vendedor 1</option>
                            <option value="vendedor-2">Vendedor 2</option>
                        </select>

                        <button type="submit">Buscar</button>
                    </form>
                </div>
                <div class="contenedor citas">
                <table>
                        <tr>
                        <th>Representate</th>
                        <th>Precio del inmueble</th>
                        <th>Comisión</th>
                        <th>Ganancia por la venta</th>
                        </tr>
                        <tr>
                        <td>Nombre y apellido</td>
                        <td>$$$$$</td>
                        <td>%</td>
                        <td>$$$$$</td>
                        </tr>
                </table> 
                <table>
                        <tr>
                        <th>Vendedor</th>
                        <th>Precio del inmueble</th>
                        <th>Comisión</th>
                        <th>Ganancia por la venta</th>
                        </tr>
                        <tr>
                        <td>Nombre y apellido</td>
                        <td>$$$$$</td>
                        <td>%</td>
                        <td>$$$$$</td>
                        </tr>
                </table> 
                </div>
            </section>
            <div class="contenedor">
                <button class="boton-azul">Vender</button>
            </div>
            


<?php
    require 'templates/footer.php';