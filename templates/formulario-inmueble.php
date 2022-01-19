<fieldset>
    <legend>Información General</legend>
    <label for="direccion">Dirección</label>
    <input type="text" placeholder="Dirección" id="direccion">
    <label for="ubicacion">Link de ubicación</label>
    <input type="text" placeholder="Enlace de google maps" id="ubicacion">
    <label for="edad">Edad de la propiedad</label>
    <input type="number" placeholder="ejem: 10" id="edad" min="1">
</fieldset>

<fieldset id="valor-inmueble">
    <legend>Valor del inmueble</legend>
    <label for="precio">Precio</label>
    <input type="number" placeholder="ejem: 1000000" id="precio" min="1">

    <label for="aumento-disminucion">Agregar</label>
    <div class="opciones"> 
        <input name="aumento-disminucion" type="radio" value="1">
        <label for="est-normal">Descuento</label>
        <input name="aumento-disminucion" type="radio" value="2">
        <label for="est-mecanico">Aumento</label>   
    </div>

    <label for="tipo-a-agregar">Descuento/aumento</label>
    <div class="opciones"> 
        <input name="tipo-a-agregar" type="radio" value="1">
        <label for="est-normal">Porcentaje</label>

        <input name="tipo-a-agregar" type="radio" value="2">
        <label for="est-mecanico">Cantidad</label>   
    </div>
    
    <label for="precio">Cantidad/porcentaje</label>
    <input type="number" placeholder="ejem: 10" id="precio" min="1">
    <label for="valor-final">Valor final:</label>
    <input type="number" name="valor-final" id="valor-final" disabled placeholder="valor">
</fieldset>

<fieldset>
    <legend>Fotografías</legend>
    <label for="foto">Subir Archivo</label>
    <input type="file" id="foto" accept="image/jpeg, image/png" multiple name="imagenes[]">
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