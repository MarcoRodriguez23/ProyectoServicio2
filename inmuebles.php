<?php
    require 'templates/header.php';

?>
            <a href="cargar.php" class="boton">Crear nuevo inmueble</a>
            <section>
                <h4>Filtrar</h4>
                <form action="" method="post" class="contenedor filtro">
                    <select name="ubicacion" id="ubicacion">
                        <option value="" selected disabled>Ubicación</option>
                        <option value="ubicacion-1">Ubicación X</option>
                        <option value="ubicacion-2">Ubicación X</option>
                    </select>
                    <select name="precio" id="precio">
                        <option value="" selected disabled>Precio</option>
                        <option value="precio-1">precio 1</option>
                        <option value="precio-2">precio 2</option>
                    </select>
                    <select name="pago" id="pago">
                        <option value="" selected disabled>Tipo de pago</option>
                        <option value="pago-1">Forma de pago 1</option>
                        <option value="pago-2">Forma de pago 2</option>
                    </select>
                    <select name="habitacion" id="habitacion">
                        <option value="" selected disabled>Habitaciones</option>
                        <option value="habitacion-1">1</option>
                        <option value="habitacion-2">2</option>
                    </select>
                    <select name="wc" id="wc">
                        <option value="" selected disabled>Baños</option>
                        <option value="wc-1">1</option>
                        <option value="wc-2">2</option>
                    </select>
                    <button type="submit">Buscar</button>
                </form>
            </section>
            <main>
                
                <div class="inmuebles contenedor">
                    <a href="inmueble.html">
                        <div class="inmueble">
                            <img src="build/img/1.jpg" alt="foto del inmueble">
                            <div class="info-inmueble">
                                <p class="ubicacion">Calle, Colonia, Delegación</p>
                                <p class="precio" class="precio">Precio</p>
                                <p class="pago">Forma de pago</p>
                                <p class="estado">Vendido</p>
                                <div class="beneficios">
                                    <div class="beneficio">
                                        <img src="build/img/icono_dormitorio.svg" alt="beneficio1">
                                        <p>4 rec</p>
                                    </div>
                                    <div class="beneficio">
                                        <img src="build/img/icono_estacionamiento.svg" alt="beneficio1">
                                        <p>2 est</p>
                                    </div>
                                    <div class="beneficio">
                                        <img src="build/img/medida.svg" alt="beneficio1">
                                        <p>72 m2</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="inmueble.html">
                        <div class="inmueble">
                            <img src="build/img/1.jpg" alt="foto del inmueble">
                            <div class="info-inmueble">
                                <p class="ubicacion">Calle, Colonia, Delegación</p>
                                <p class="precio" class="precio">Precio</p>
                                <p class="pago">Forma de pago</p>
                                <p class="estado">Vendido</p>
                                <div class="beneficios">
                                    <div class="beneficio">
                                        <img src="build/img/icono_dormitorio.svg" alt="beneficio1">
                                        <p>4 rec</p>
                                    </div>
                                    <div class="beneficio">
                                        <img src="build/img/icono_estacionamiento.svg" alt="beneficio1">
                                        <p>2 est</p>
                                    </div>
                                    <div class="beneficio">
                                        <img src="build/img/medida.svg" alt="beneficio1">
                                        <p>72 m2</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="inmueble.html">
                        <div class="inmueble">
                            <img src="build/img/1.jpg" alt="foto del inmueble">
                            <div class="info-inmueble">
                                <p class="ubicacion">Calle, Colonia, Delegación</p>
                                <p class="precio" class="precio">Precio</p>
                                <p class="pago">Forma de pago</p>
                                <p class="estado">Vendido</p>
                                <div class="beneficios">
                                    <div class="beneficio">
                                        <img src="build/img/icono_dormitorio.svg" alt="beneficio1">
                                        <p>4 rec</p>
                                    </div>
                                    <div class="beneficio">
                                        <img src="build/img/icono_estacionamiento.svg" alt="beneficio1">
                                        <p>2 est</p>
                                    </div>
                                    <div class="beneficio">
                                        <img src="build/img/medida.svg" alt="beneficio1">
                                        <p>72 m2</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="inmueble.html">
                        <div class="inmueble">
                            <img src="build/img/1.jpg" alt="foto del inmueble">
                            <div class="info-inmueble">
                                <p class="ubicacion">Calle, Colonia, Delegación</p>
                                <p class="precio" class="precio">Precio</p>
                                <p class="pago">Forma de pago</p>
                                <p class="estado">Vendido</p>
                                <div class="beneficios">
                                    <div class="beneficio">
                                        <img src="build/img/icono_dormitorio.svg" alt="beneficio1">
                                        <p>4 rec</p>
                                    </div>
                                    <div class="beneficio">
                                        <img src="build/img/icono_estacionamiento.svg" alt="beneficio1">
                                        <p>2 est</p>
                                    </div>
                                    <div class="beneficio">
                                        <img src="build/img/medida.svg" alt="beneficio1">
                                        <p>72 m2</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </main>
        </div>
    </div>
    
<?php

    require 'templates/footer.php';