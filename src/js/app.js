let positivo;
let tipo;

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
    const descuento = document.querySelector('input[value="Descuento"]');
    const aumento = document.querySelector('input[value="Aumento"]');
    const tipoAgregar = document.querySelector('#tipo-a-agregar');
   
    
    

    descuento.onclick =function(){
        console.log("presionaste el boton de descuento");
        tipoAgregar.textContent="Descuento";
        positivo=false;
    }

    aumento.onclick =function(){
        console.log("presionaste el boton de aumento");
        tipoAgregar.textContent="Aumento";
        positivo=true;
    }

    const cantidad = document.querySelector('input[value="Cantidad"]');
    const porcentaje = document.querySelector('input[value="Porcentaje"]');
    const denominacion = document.querySelector('#denominacion');
    const inputDenominacion = document.getElementById('input-denominacion');

    cantidad.onclick =function(){
        console.log("presionaste el boton de descuento");
        denominacion.textContent="Cantidad";
        inputDenominacion.placeholder="ejem: 1000";
        inputDenominacion.value=1;
        inputDenominacion.max="";
        tipo="cantidad";
    }

    porcentaje.onclick =function(){
        console.log("presionaste el boton de aumento");
        denominacion.textContent="Porcentaje";
        inputDenominacion.placeholder="1 al 100";
        inputDenominacion.value=1;
        inputDenominacion.max="100";
        tipo="porcentaje";
    }

    setInterval(() => {
        const valorFinal = document.querySelector('input[name="valor-final"]');
        const valorinicial = document.querySelector('#precio');
        valorFinal.placeholder=parseInt(valorinicial.value);
        if(positivo===true){
            if(tipo==="cantidad"){
                if(inputDenominacion.value>0){
                    valorFinal.placeholder=parseInt(valorinicial.value) + parseInt(inputDenominacion.value);
                    valorFinal.value=parseInt(valorinicial.value) + parseInt(inputDenominacion.value);
                } 
            }
            else{
                let porcentaje;
                if(inputDenominacion.value>0){
                    porcentaje = parseFloat(inputDenominacion.value)/100;
                }
                let porcentajeFinal = 1+porcentaje;
                let resultado;
                resultado=parseFloat(valorinicial.value) * porcentajeFinal;
                valorFinal.placeholder=resultado.toFixed(2);
                valorFinal.value=resultado.toFixed(2);
            }
        }
        if(positivo===false){
            if(tipo==="cantidad"){
                if(inputDenominacion.value>0 && inputDenominacion.value<= (valorinicial.value)){
                    valorFinal.placeholder=parseInt(valorinicial.value) - parseInt(inputDenominacion.value);
                    valorFinal.value=parseInt(valorinicial.value) - parseInt(inputDenominacion.value);
                } 
            }
            else{
                let porcentaje;
                if(inputDenominacion.value>0){
                    porcentaje = parseFloat(inputDenominacion.value)/100;
                }
                let porcentajeFinal = 1-porcentaje;
                let resultado;
                resultado=parseFloat(valorinicial.value) * porcentajeFinal;
                valorFinal.placeholder=resultado.toFixed(2);
                valorFinal.value=resultado.toFixed(2);
            }
        }
    }, 100);

}

