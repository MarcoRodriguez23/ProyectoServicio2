let tipo,unidad,pagina=1;function iniciarApp(){scrollNav(),formularioInmueble(),cambiarSeccion()}function scrollNav(){const e=document.querySelector(".pre-imagenes a");e&&e.addEventListener("click",(function(e){e.preventDefault();const n=e.target.attributes.href.value;document.querySelector(n).scrollIntoView({behavior:"smooth"})}))}function formularioInmueble(){document.querySelectorAll('input[name="aumento-disminucion"]').forEach(e=>{e.addEventListener("click",DescuentoAumento)})}function DescuentoAumento(e){const n=document.querySelector("#tipo-a-agregar");"Descuento"===e.target.value?(n.innerHTML='\n        <label>Descuento</label>\n        <div class="opciones"> \n            <input name="tipo-a-agregar" type="radio" value="Porcentaje">\n            <label for="porcentaje">Porcentaje</label>\n            <input name="tipo-a-agregar" type="radio" value="Cantidad"> \n            <label for="cantidad">Cantidad</label>  \n        </div>\n        ',tipo="descuento"):(n.innerHTML='\n        <label>Aumento</label>\n        <div class="opciones"> \n            <input name="tipo-a-agregar" type="radio" value="Porcentaje">\n            <label for="porcentaje">Porcentaje</label>\n            <input name="tipo-a-agregar" type="radio" value="Cantidad"> \n            <label for="cantidad">Cantidad</label>  \n        </div>\n        ',tipo="aumento");const a=document.querySelectorAll('input[name="tipo-a-agregar"]');console.log(a),a.forEach(e=>{e.addEventListener("click",CantidadPorcentaje)})}function CantidadPorcentaje(e){const n=document.querySelector("#denominacion");n.innerHTML="","Cantidad"===e.target.value?(n.innerHTML='\n        <label>Cantidad</label>\n        <input type="number" placeholder="ejem: 1000" min="1" id="denominacion">\n        ',unidad="cantidad"):(n.innerHTML='\n        <label>Porcentaje</label>\n        <input type="number" placeholder="Del 1 al 100" min="1" max="100" id="denominacion">\n        ',unidad="porcentaje"),operacion()}function operacion(){const e=document.querySelector("#precio");document.querySelector('input[name="valor-final"]');let n;console.log(tipo),console.log(unidad),console.log(e.value),"aumento"===tipo&&(n=document.querySelector("#denominacion").value,console.log(n)),"descuento"===tipo&&(n=document.querySelector("#denominacion").value,console.log(n))}function cambiarSeccion(){document.querySelectorAll(".tabs button").forEach(e=>{e.addEventListener("click",e=>{e.preventDefault(),pagina=parseInt(e.target.dataset.paso),mostrarSeccion()})})}function mostrarSeccion(){const e=document.querySelector(".mostrar-seccion");e&&e.classList.remove("mostrar-seccion");document.querySelector("#paso-"+pagina).classList.add("mostrar-seccion");const n=document.querySelector(".tabs .actual");n&&n.classList.remove("actual");document.querySelector(`[data-paso="${pagina}"]`).classList.add("actual")}
/*! modernizr 3.6.0 (Custom Build) | MIT *
 * https://modernizr.com/download/?-webp-setclasses !*/document.addEventListener("DOMContentLoaded",(function(){iniciarApp()})),function(e,n,a){function o(e,n){return typeof e===n}function t(e){var n=u.className,a=s._config.classPrefix||"";if(d&&(n=n.baseVal),s._config.enableJSClass){var o=new RegExp("(^|\\s)"+a+"no-js(\\s|$)");n=n.replace(o,"$1"+a+"js$2")}s._config.enableClasses&&(n+=" "+a+e.join(" "+a),d?u.className.baseVal=n:u.className=n)}function i(e,n){if("object"==typeof e)for(var a in e)A(e,a)&&i(a,e[a]);else{var o=(e=e.toLowerCase()).split("."),r=s[o[0]];if(2==o.length&&(r=r[o[1]]),void 0!==r)return s;n="function"==typeof n?n():n,1==o.length?s[o[0]]=n:(!s[o[0]]||s[o[0]]instanceof Boolean||(s[o[0]]=new Boolean(s[o[0]])),s[o[0]][o[1]]=n),t([(n&&0!=n?"":"no-")+o.join("-")]),s._trigger(e,n)}return s}var r=[],l=[],c={_version:"3.6.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var a=this;setTimeout((function(){n(a[e])}),0)},addTest:function(e,n,a){l.push({name:e,fn:n,options:a})},addAsyncTest:function(e){l.push({name:null,fn:e})}},s=function(){};s.prototype=c,s=new s;var A,u=n.documentElement,d="svg"===u.nodeName.toLowerCase();!function(){var e={}.hasOwnProperty;A=o(e,"undefined")||o(e.call,"undefined")?function(e,n){return n in e&&o(e.constructor.prototype[n],"undefined")}:function(n,a){return e.call(n,a)}}(),c._l={},c.on=function(e,n){this._l[e]||(this._l[e]=[]),this._l[e].push(n),s.hasOwnProperty(e)&&setTimeout((function(){s._trigger(e,s[e])}),0)},c._trigger=function(e,n){if(this._l[e]){var a=this._l[e];setTimeout((function(){var e;for(e=0;e<a.length;e++)(0,a[e])(n)}),0),delete this._l[e]}},s._q.push((function(){c.addTest=i})),s.addAsyncTest((function(){function e(e,n,a){function o(n){var o=!(!n||"load"!==n.type)&&1==t.width;i(e,"webp"===e&&o?new Boolean(o):o),a&&a(n)}var t=new Image;t.onerror=o,t.onload=o,t.src=n}var n=[{uri:"data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=",name:"webp"},{uri:"data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==",name:"webp.alpha"},{uri:"data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA",name:"webp.animation"},{uri:"data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=",name:"webp.lossless"}],a=n.shift();e(a.name,a.uri,(function(a){if(a&&"load"===a.type)for(var o=0;o<n.length;o++)e(n[o].name,n[o].uri)}))})),function(){var e,n,a,t,i,c;for(var A in l)if(l.hasOwnProperty(A)){if(e=[],(n=l[A]).name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(a=0;a<n.options.aliases.length;a++)e.push(n.options.aliases[a].toLowerCase());for(t=o(n.fn,"function")?n.fn():n.fn,i=0;i<e.length;i++)1===(c=e[i].split(".")).length?s[c[0]]=t:(!s[c[0]]||s[c[0]]instanceof Boolean||(s[c[0]]=new Boolean(s[c[0]])),s[c[0]][c[1]]=t),r.push((t?"":"no-")+c.join("-"))}}(),t(r),delete c.addTest,delete c.addAsyncTest;for(var p=0;p<s._q.length;p++)s._q[p]();e.Modernizr=s}(window,document);
//# sourceMappingURL=bundle.js.map
