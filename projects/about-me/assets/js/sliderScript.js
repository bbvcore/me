document.addEventListener('DOMContentLoaded',()=>{          

 // Variables        
 let position = 0;
 const slides = document.querySelectorAll('.slide');
 const total = slides.length;

// Función para comprobar la posición
const start = (index) => {
 const sliderWidth = document.querySelector('.slider-container').clientWidth; // Obtener el 100% del viewport, de la superficie visible en el navegador
 const slideContainer = document.querySelector('.slides'); // Capturar todos los slides
 slideContainer.style.transform = `translateX(${-index * sliderWidth}px)`; // Desplazarse al slide buscado debido a recorrer el eje X en busca de los pixeles correspondientes al width del slide requerido.
}

const next = () => {
 position = (position + 1) % total; // Desplazar los Slides incrementando
 start(position);
}

const prev = () => {
 position = (position - 1 + total) % total; // Desplazar los Slides decrementando
 start(position);
}

window.next = next
window.prev = prev
// Avanze automático, temporizador hacía adelante cada 3 segundos
setInterval(next, 3000);

// Evento resize para ajustar con cada cambio
window.addEventListener('resize', () => start(position));
})