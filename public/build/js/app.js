let paso=1;const pasoInicial=1,pasoFinal=3;function iniciarApp(){animacionTexto(),mostrarSeccion(),tabs()}function animacionTexto(){var e=[" Bienvenido a mi página, ",' Soy Domingo Curberia "Dimanse", '," Creo paginas web y aplicaciones. "],n=document.getElementById("word"),t=n.innerHTML,a=!1,o=1;setInterval((function(){t.length>0&&!a?(n.innerHTML=t.slice(0,-1),t=n.innerHTML):a=!0,a&&(t.length<e[o].length?(n.innerHTML=e[o].slice(0,t.length+1),t=n.innerHTML):(o<e.length&&o++,a=!1)),o==e.length&&(o=0)}),110)}function mostrarSeccion(){const e=document.querySelector(".mostrar");e&&e.classList.remove("mostrar");const n=`#paso-${paso}`;document.querySelector(n).classList.add("mostrar");const t=document.querySelector(".actual");t&&t.classList.remove("actual");document.querySelector(`[data-paso="${paso}"]`).classList.add("actual")}function tabs(){document.querySelectorAll(".tabs button").forEach((e=>{e.addEventListener("click",(function(e){e.preventDefault(),paso=parseInt(e.target.dataset.paso),mostrarSeccion()}))}))}document.addEventListener("DOMContentLoaded",(function(){iniciarApp()}));