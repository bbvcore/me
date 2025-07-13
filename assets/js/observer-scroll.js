/*
        Project: Portfolio web
        Author: Borja Bas Ventín
*/
const init = () => {
    // Previo 1.- Configurar las opciones del Observador
    //==================================================
    const options = {
        root: null, // La propiedad ROOT especifica que contenedor será el viewport para la intersección y activar efecto, si se usa null se usará el objeto window, podría ser un div o una class también
        rootMargin: '0px', // Valor que amplia el tamaño del contenedor para la intersección
        threshold: 0.1 // Límite que marca el mínimo del elemento visible para que se muestre
    };

    // Previo 2.- Función para gestionar la intersección
    //==================================================
    const intersection = (entries, observer) => { //entries array de objetos de intersección, cada entrada tiene información de un evento observado
                            // Observer es una referencia al objeto "IntersectionObserver" que se está usando
        entries.forEach(entry => { // entry es un OBJETO, aunque parezca un evento, que describe la intersección
            if (entry.isIntersecting) { // Si se produce la intersección, propiedad booleana
                if (entry.target.classList.contains('hidden-left-scroll')) { //entry.target => Objeto observado del DOM
                    // target es una propiedad del objeto observado, no tiene nada que ver con eventos aunque lo parezca
                    // Actua como un puntero observando el nodo HTMl observado
                    entry.target.classList.add('visible-left-scroll');
                }
                if (entry.target.classList.contains('hidden-right-scroll')) {
                    entry.target.classList.add('visible-right-scroll');
                }
            } else { // Si no se produce la intersección
                if (entry.target.classList.contains('hidden-left-scroll')) {
                    entry.target.classList.remove('visible-left-scroll');
                }
                if (entry.target.classList.contains('hidden-right-scroll')) {
                    entry.target.classList.remove('visible-right-scroll');
                }
            }
        });
    };

    // INICIO.- Creación del objeto: Páramétros 2 (funcción manejadora y objeto options)
    //==================================================================================
    const observer = new IntersectionObserver(intersection, options);

    // Colección iterable con los elementos HTML a observar
    const divsHiddenLeft = document.querySelectorAll('.hidden-left-scroll');
    const divsHiddenRight = document.querySelectorAll('.hidden-right-scroll');

    // Añadir el observer a cada elemento HTML mediante el método observe()
    divsHiddenLeft.forEach(div => observer.observe(div));
    divsHiddenRight.forEach(div => observer.observe(div));
};

// Lanzar Script con el DOM renderizado
window.addEventListener('DOMContentLoaded', init);
