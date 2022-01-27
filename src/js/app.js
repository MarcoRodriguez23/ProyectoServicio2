let tipo;
let unidad;
let pagina = 1;
document.addEventListener('DOMContentLoaded',function(){
    iniciarApp();
});

function iniciarApp(){
    scrollNav();
    formularioInmueble();
    cambiarSeccion();
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

// function valorInmueble(){
//     const descuento = document.querySelector('input[value="Descuento"]');
//     const aumento = document.querySelector('input[value="Aumento"]');
//     const tipoAgregar = document.querySelector('#tipo-a-agregar');
   
    
    

//     descuento.onclick =function(){
//         console.log("presionaste el boton de descuento");
//         tipoAgregar.textContent="Descuento";
//         positivo=false;
//     }

//     aumento.onclick =function(){
//         console.log("presionaste el boton de aumento");
//         tipoAgregar.textContent="Aumento";
//         positivo=true;
//     }

//     const cantidad = document.querySelector('input[value="Cantidad"]');
//     const porcentaje = document.querySelector('input[value="Porcentaje"]');
//     const denominacion = document.querySelector('#denominacion');
//     const inputDenominacion = document.getElementById('input-denominacion');

//     cantidad.onclick =function(){
//         console.log("presionaste el boton de descuento");
//         denominacion.textContent="Cantidad";
//         inputDenominacion.placeholder="ejem: 1000";
//         inputDenominacion.value=1;
//         inputDenominacion.max="";
//         tipo="cantidad";
//     }

//     porcentaje.onclick =function(){
//         console.log("presionaste el boton de aumento");
//         denominacion.textContent="Porcentaje";
//         inputDenominacion.placeholder="1 al 100";
//         inputDenominacion.value=1;
//         inputDenominacion.max="100";
//         tipo="porcentaje";
//     }

//     setInterval(() => {
//         const valorFinal = document.querySelector('input[name="valor-final"]');
//         const valorinicial = document.querySelector('#precio');
//         valorFinal.placeholder=parseInt(valorinicial.value);
//         if(positivo===true){
//             if(tipo==="cantidad"){
//                 if(inputDenominacion.value>0){
//                     valorFinal.placeholder=parseInt(valorinicial.value) + parseInt(inputDenominacion.value);
//                     valorFinal.value=parseInt(valorinicial.value) + parseInt(inputDenominacion.value);
//                 } 
//             }
//             else{
//                 let porcentaje;
//                 if(inputDenominacion.value>0){
//                     porcentaje = parseFloat(inputDenominacion.value)/100;
//                 }
//                 let porcentajeFinal = 1+porcentaje;
//                 let resultado;
//                 resultado=parseFloat(valorinicial.value) * porcentajeFinal;
//                 valorFinal.placeholder=resultado.toFixed(2);
//                 valorFinal.value=resultado.toFixed(2);
//             }
//         }
//         if(positivo===false){
//             if(tipo==="cantidad"){
//                 if(inputDenominacion.value>0 && inputDenominacion.value<= (valorinicial.value)){
//                     valorFinal.placeholder=parseInt(valorinicial.value) - parseInt(inputDenominacion.value);
//                     valorFinal.value=parseInt(valorinicial.value) - parseInt(inputDenominacion.value);
//                 } 
//             }
//             else{
//                 let porcentaje;
//                 if(inputDenominacion.value>0){
//                     porcentaje = parseFloat(inputDenominacion.value)/100;
//                 }
//                 let porcentajeFinal = 1-porcentaje;
//                 let resultado;
//                 resultado=parseFloat(valorinicial.value) * porcentajeFinal;
//                 valorFinal.placeholder=resultado.toFixed(2);
//                 valorFinal.value=resultado.toFixed(2);
//             }
//         }
//     }, 100);

// }


// function opcionesDeVenta(){
//     const fovissste = document.querySelector('#fovissste');
//     const cofinavit = document.querySelector('#cofinavit');
//     const credito = document.querySelector('#credito');
//     const efectivo = document.querySelector('#efectivo');
//     const opcionesDeVenta = document.querySelector('#opcionesDeVenta');
    
//     opcionesDeVenta.onclick=function(){
//         if(opcionesDeVenta.checked){
//             fovissste.checked=true;
//             cofinavit.checked=true;
//             credito.checked=true;
//             efectivo.checked=true;
//         }
//         else{
//             fovissste.checked=false;
//             cofinavit.checked=false;
//             credito.checked=false;
//             efectivo.checked=false; 
//         }
//     }
// }

function formularioInmueble(){
      const AumentoODisminucion = document.querySelectorAll('input[name="aumento-disminucion"]');
      
      AumentoODisminucion.forEach(element => {
          element.addEventListener('click',DescuentoAumento);
      });
}

function DescuentoAumento(e){
    const tipoAAgregar = document.querySelector('#tipo-a-agregar');

    if(e.target.value === "Descuento"){
        tipoAAgregar.innerHTML=`
        <label>Descuento</label>
        <div class="opciones"> 
            <input name="tipo-a-agregar" type="radio" value="Porcentaje">
            <label for="porcentaje">Porcentaje</label>
            <input name="tipo-a-agregar" type="radio" value="Cantidad"> 
            <label for="cantidad">Cantidad</label>  
        </div>
        `;
        tipo="descuento";
    }
    else{
        tipoAAgregar.innerHTML=`
        <label>Aumento</label>
        <div class="opciones"> 
            <input name="tipo-a-agregar" type="radio" value="Porcentaje">
            <label for="porcentaje">Porcentaje</label>
            <input name="tipo-a-agregar" type="radio" value="Cantidad"> 
            <label for="cantidad">Cantidad</label>  
        </div>
        `;
        tipo="aumento";
    }
    
    const denominacion=document.querySelectorAll('input[name="tipo-a-agregar"]');
    console.log(denominacion);

    denominacion.forEach(element => {
        element.addEventListener('click',CantidadPorcentaje);
    });
}

function CantidadPorcentaje(e){
    const denominacion = document.querySelector('#denominacion');
    denominacion.innerHTML="";
    if(e.target.value === "Cantidad"){
        denominacion.innerHTML= `
        <label>Cantidad</label>
        <input type="number" placeholder="ejem: 1000" min="1" id="denominacion">
        `;
        unidad="cantidad";
    }
    else{
        denominacion.innerHTML= `
        <label>Porcentaje</label>
        <input type="number" placeholder="Del 1 al 100" min="1" max="100" id="denominacion">
        `;
        unidad="porcentaje";
    }
    
    operacion();
}

function operacion(){
    const valorinicial = document.querySelector('#precio');
    const valorFinal = document.querySelector('input[name="valor-final"]');
    let inputDenominacion;
    console.log(tipo);
    console.log(unidad);
    console.log(valorinicial.value);
    if(tipo==="aumento"){
        if(unidad==="cantidad"){
            inputDenominacion =  document.querySelector('#denominacion').value;
            console.log(inputDenominacion);
        }
        else{
            inputDenominacion =  document.querySelector('#denominacion').value;
            console.log(inputDenominacion);
        }
    }
    if(tipo==="descuento"){
        if(unidad==="cantidad"){
            inputDenominacion =  document.querySelector('#denominacion').value;
            console.log(inputDenominacion);
            
        }
        else{
            inputDenominacion =  document.querySelector('#denominacion').value;
            console.log(inputDenominacion);

        }
    }

} 



function cambiarSeccion() {
    const enlaces = document.querySelectorAll('.tabs button');

    enlaces.forEach( enlace => {
        enlace.addEventListener('click', e => {
            e.preventDefault();
            pagina = parseInt(e.target.dataset.paso);

            // Llamar la función de mostrar sección
            mostrarSeccion();

            // botonesPaginador();
        })
    })
}

function mostrarSeccion() {

    // Eliminar mostrar-seccion de la sección anterior
    const seccionAnterior = document.querySelector('.mostrar-seccion');
    if( seccionAnterior ) {
        seccionAnterior.classList.remove('mostrar-seccion');
    }

    const seccionActual = document.querySelector(`#paso-${pagina}`);
    seccionActual.classList.add('mostrar-seccion');

    // Eliminar la clase de actual en el tab anterior
    const tabAnterior = document.querySelector('.tabs .actual');
    if(tabAnterior) {
        tabAnterior.classList.remove('actual');
    }
   
    // Resalta el Tab Actual
    const tab = document.querySelector(`[data-paso="${pagina}"]`);
    tab.classList.add('actual');
}