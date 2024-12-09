
let paso = 1;
const pasoInicial = 1;
const pasoFinal = 3;
// let numero = 1;



document.addEventListener('DOMContentLoaded', function (){
    iniciarApp();
});

function iniciarApp(){
    animacionTexto();
    mostrarSeccion(); // Muestra y oculta las secciones
    tabs(); // Cambia la sección cuando se presionen los tabs
}

function animacionTexto(){
  
    var words = [
        ' Bienvenido a mi página, ',
        ' Soy Domingo Curberia "Dimanse", ',
        ' Creo paginas web y aplicaciones. '
        
    ],
    wordWrapper = document.getElementById('word'),
    wordWrapperContent = wordWrapper.innerHTML,
    addingWord = false,
    counter = 1;

setInterval(function(){

  if(wordWrapperContent.length > 0 && !addingWord ) {
    wordWrapper.innerHTML = wordWrapperContent.slice(0, -1);
    wordWrapperContent = wordWrapper.innerHTML;
  } else {
    addingWord = true;
  }

  if( addingWord ){
    if( wordWrapperContent.length < words[counter].length  ) {
      wordWrapper.innerHTML = words[counter].slice(0, wordWrapperContent.length + 1);
      wordWrapperContent = wordWrapper.innerHTML;
    } else {
      if( counter < words.length) {
        counter ++
      }
      addingWord = false;
    }
  }

  if( counter == words.length) {
    counter = 0;
  }

}, 110);
}

function mostrarSeccion() {

  // Ocultar la sección que tenga la clase de mostrar
  const seccionAnterior = document.querySelector('.mostrar');
  if(seccionAnterior) {
      seccionAnterior.classList.remove('mostrar');
  }

  // Seleccionar la sección con el paso...
  const pasoSelector = `#paso-${paso}`;
  const seccion = document.querySelector(pasoSelector);
  seccion.classList.add('mostrar');

  // Quita la clase de actual al tab anterior
  const tabAnterior = document.querySelector('.actual');
  if(tabAnterior) {
      tabAnterior.classList.remove('actual');
  }

  // Resalta el tab actual
  const tab = document.querySelector(`[data-paso="${paso}"]`);
  tab.classList.add('actual');
}

function tabs() {

  // Agrega y cambia la variable de paso según el tab seleccionado
  const botones = document.querySelectorAll('.tabs button');
  botones.forEach( boton => {
      boton.addEventListener('click', function(e) {
          e.preventDefault();

          paso = parseInt( e.target.dataset.paso );
          mostrarSeccion();
      });
  });
}










