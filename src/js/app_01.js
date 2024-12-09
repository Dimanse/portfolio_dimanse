document.addEventListener('DOMContentLoaded', function (){
    appInit();
});

function appInit(){
    botonTransicion();
    mostrarTransicion();
}

function mostrarTransicion(numero) {
    // Ocultar la sección que tenga la clase de mostrar
    const anteriorSeccion = document.querySelector('.mostrar');
    if(anteriorSeccion) {
      anteriorSeccion.classList.remove('mostrar');
      anteriorSeccion.classList.add('ocultar');
    }
    // console.log(numero);
    // Seleccionar la sección con el paso...
    const pasoSelect = `#numero-${numero}`;
    
    const section = document.querySelector(pasoSelect);
    if(section){
      section.classList.remove('ocultar');
      section.classList.add('mostrar');
    }
  
  
    // Oculta el div al pasar el mouse por el footer o por la seccion de servicios
    const footer = document.querySelector('FOOTER');
    const servicios = document.querySelector('.servicios');
  
    footer.addEventListener('mouseover', function(){
      if(section){
        section.classList.add('ocultar');
      }
    })
    servicios.addEventListener('mouseover', function(){
      if(section){
        section.classList.add('ocultar');
      }
    })
    
   
  
    // Resalta el tab actual
    // const dataNumero = document.querySelector(`[data-numero="${numero}"]`);
  
    // dataNumero.classList.add('actual');
  
  
  }
  
  function botonTransicion() {
    // Agrega y cambia la variable de paso según el tab seleccionado
    const botonesTransicion = document.querySelectorAll('.transiciones__arriba');
    botonesTransicion.forEach( botonTransicion => {
        botonTransicion.addEventListener('mouseover', function(e) {
            e.preventDefault();
  
  
            numero = parseInt( e.target.dataset.numero );
            console.log(e.target.dataset.numero);
            // botonTransicion.classList.add('hide');
            mostrarTransicion(numero);
  
            
        });
    });
  }



