document.addEventListener('DOMContentLoaded',function(){
    iniciarApp();
});

function iniciarApp(){
    scrollNav();
    valorInmueble();
}

function scrollNav(){
    const enlace = document.querySelector(".pre-imagenes a");
    if(enlace){
        enlace.addEventListener('click',function(e){
            e.preventDefault();
    
            const seccionScroll = e.target.attributes.href.value;
            const seccion = document.querySelector(seccionScroll);
            seccion.scrollIntoView({behavior:"smooth"});
        }); 
    }
      
}

function valorInmueble(){

    // const fieldset = document.querySelector('#valor-inmueble');
    // const descuentoAumento = document.createElement('div');
    // const aumentoDisminucion = document.querySelector('input[name="aumento-disminucion"]:checked');

    // aumentoDisminucion.addEventListener('onclick',function(){
    //     console.log(aumentoDisminucion.value);
    // });

    // let valor = parseInt(aumentoDisminucion);
        
    // if(valor===1){
    //     descuentoAumento.innerHTML = `
    //     <label for="tipo-a-agregar">Descuento</label>
    //     <div class="opciones"> 
    //         <input name="tipo-a-agregar" type="radio" value="1">
    //         <label for="est-normal">Porcentaje</label>

    //         <input name="tipo-a-agregar" type="radio" value="2">
    //         <label for="est-mecanico">Cantidad</label>   
    //     </div>`;
    // }
    // if(valor===2){
    //     descuentoAumento.innerHTML = `
    //     <label for="tipo-a-agregar">Aumento</label>
    //     <div class="opciones"> 
    //         <input name="tipo-a-agregar" type="radio" value="1">
    //         <label for="est-normal">Porcentaje</label>

    //         <input name="tipo-a-agregar" type="radio" value="2">
    //         <label for="est-mecanico">Cantidad</label>   
    //     </div>`;
    // }
    // fieldset.appendChild(descuentoAumento);
    
}