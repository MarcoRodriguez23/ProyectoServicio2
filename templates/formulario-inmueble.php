<fieldset>
                    <legend>Información General</legend>
                    <label for="direccion">Dirección</label>
                    <input type="text" placeholder="Dirección" id="direccion">
                    <label for="ubicacion">Link de ubicación</label>
                    <input type="text" placeholder="Enlace de google maps" id="ubicacion">
                    <label for="edad">Edad de la propiedad</label>
                    <input type="number" placeholder="ejem: 10" id="edad" min="1">
                </fieldset>

                <fieldset>
                    <legend>Fotografías</legend>
                    <label for="foto">Subir Archivo</label>
                    <input type="file" id="foto" accept="image/jpeg, image/png" multiple name="file[]">
                </fieldset>

                <fieldset class="opciones">
                    <legend>Muebles</legend>
                    <input type="checkbox" id="sala">
                    <label for="sala">Sala</label>
                    <input type="checkbox" id="lavadora">
                    <label for="lavadora">Lavadora</label>
                    <input type="checkbox" id="cocina">
                    <label for="cocina">Cocina</label>
                    <input type="checkbox" id="boiler">
                    <label for="boiler">Boiler</label>
                    <input type="checkbox" id="camas">
                    <label for="camas">Camas</label>
                    <input type="checkbox" id="roperos">
                    <label for="roperos">Roperos</label>
                </fieldset>

                <fieldset class="opciones">
                    <legend>Amenidades</legend>
                    <input type="checkbox" id="garden">
                    <label for="garden">Roof garden</label>
                    <input type="checkbox" id="uso-multiple">
                    <label for="uso-multiple">Sala de usos multiples</label>
                    <input type="checkbox" id="gimnasio">
                    <label for="gimnasio">Gimnasio</label>
                    <input type="checkbox" id="cancha">
                    <label for="cancha">Canchas</label>
                </fieldset>

                <fieldset>
                    <legend>Estacionamiento</legend>
                    <div class="opciones"> 
                        <input name="estacionamiento" type="radio" value="est-normal">
                        <label for="est-normal">Normal</label>

                        <input name="estacionamiento" type="radio" value="est-mecanico">
                        <label for="est-mecanico">Mecánico</label>   
                    </div>
                </fieldset>