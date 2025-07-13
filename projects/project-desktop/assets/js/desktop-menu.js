/*
        Project: Desktop web
        Author: Borja Bas Ventín
*/
/***********************************************************************************
                                MAIN MENU
/**********************************************************************************/
// Objeto date
// Captura de elementos
//********************************************************************************************************
    const mainButton = document.querySelector('.icon-menu'); // Botón menú
    const showMenu =  document.querySelector('.main-menu-options'); // Capa primeras opciones
    const portfolioButton = document.querySelector('.portfolio-call'); // Botón submenu
    const showPortfolio =  document.querySelector('.portfolio-options'); // Capa submenu, segundas opciones
    const closeModal = document.querySelector('.modal-close'); // Cierra ventana modal
    const aboutMe = document.getElementById('about-me')


// Botón inicio menú principal
//********************************************************************************************************
    mainButton.addEventListener('click',()=>{
        console.log('Click en el botón del menu principal: OK');
        showMenu.classList.toggle('visible-div'); // Al hacer click se add/remove la clase visible-div
        console.log(showMenu)
        // Si se contiene la clase se mensajea por consola
        if (showMenu.classList.contains('visible-div')){
            console.log('contiene')
        }else{
        // Si no contiene la clase se mensajea por consola    
            console.log('No contiene')
            showPortfolio.classList.remove('visible-div')
        }
    })

// Submenu
//*********************************************************************************************************
    portfolioButton.addEventListener('click',()=>{
        console.log('Click en el botón del portfolio. Estado : OK');
        showPortfolio.classList.toggle('visible-div'); // Se oculta menu
        console.log(showPortfolio)

    })

// Evitar propagación
//*********************************************************************************************************
    showPortfolio.addEventListener('click', (event) => {
        event.stopPropagation();
    });



// Refresco página tras cierre ventana modal
//**********************************************************************************************************
    closeModal.addEventListener('click',(event)=>{
        showMenu.classList.remove('visible-div');
        showPortfolio.classList.remove('visible-div');
       window.location.href="desktop.html"; // Sí, es la mejor opción
       // window.history.back(); //  No es la mejor opción
       // window.location.reload(); // No es la mejor opción
    })

 

// CIERRA TODOS LOS MAIN MENOS SUBMENU: Seleccionar todos los enlaces de main-list menos porfolio-call
//*********************************************************************************************************
// Para todos ('.main-list a'), omitir portfolio ('.main-list a:not(.portfolio-call'))
    document.querySelectorAll('.main-list a:not(.portfolio-call)').forEach(link => { // iterar lista
        link.addEventListener('click', () => { // Para cada enlace se añade un listener para el evento click
            showMenu.classList.remove('visible-div'); // Si existe la clase de visibilidad se quita
            showPortfolio.classList.remove('visible-div'); // Si no existe se añade la clase de visibilidad
        });
    });


// Cerrar opción twt portfolio-one
//*********************************************************************************************************
    const twt = document.getElementById('portfolio-one');
            twt.addEventListener('click', (event) => {
                event.preventDefault(); 
                alert('Traveling World Tours');
                showMenu.classList.remove('visible-div');
                showPortfolio.classList.remove('visible-div');
            });

            
// Cerrar opción io portfolio-two
//*********************************************************************************************************
    const io = document.getElementById('portfolio-two');
    io.addEventListener('click', (event) => {
        event.preventDefault(); 
        alert('Traveling World Tours');
        showMenu.classList.remove('visible-div');
        showPortfolio.classList.remove('visible-div');
    });
      



// Cerrar opción contacto portfolio-three
//*********************************************************************************************************
    const contacto = document.getElementById('contacto');
    contacto.addEventListener('click', (event) => {
        event.preventDefault(); 
        alert('contacto');
        showMenu.classList.remove('visible-div');
        showPortfolio.classList.remove('visible-div');
    });
      
// Cerrar popup about-me
//*********************************************************************************************************
    aboutMe.addEventListener('click',(event)=>{
        showMenu.classList.remove('visible-div');
    })



 // Cierra al hacer click en CUALQUIER  elemento que no sea showMenu o mainButton
 //*********************************************************************************************************
    document.addEventListener('click', (event) => {
        if (!showMenu.contains(event.target) && !mainButton.contains(event.target)) {
            console.log("target evento:", event.target)
            showMenu.classList.remove('visible-div');
            showPortfolio.classList.remove('visible-div');
        }
    });










    // Functions clock & year
    function tClock(dateObject){
       let t = d.getHours()+":"+d.getMinutes()+":"+getSeconds();
        return timeClock;

    }
    function yClock(dateObject){
        let t = d.getDate() +"/"+d.getMonth()+"/"+d.getFullYear();
        return yearClock;
    }





/*

Modificado
document.addEventListener('DOMContentLoaded', () => {
    const mainButton = document.querySelector('.icon-menu');
    const showMenu = document.querySelector('.main-menu-options');
    const portfolioButton = document.querySelector('.portfolio-call');
    const showPortfolio = document.querySelector('.portfolio-options');
    const closeModal = document.querySelector('.modal-close');

    // Uso botón inicio
    mainButton.addEventListener('click', (event) => {
        event.stopPropagation();
        console.log('Click en el botón del menu principal: OK');
        showMenu.classList.toggle('visible-div');
        console.log(showMenu);
        if (showMenu.classList.contains('visible-div')) {
            console.log('contiene');
        } else {
            console.log('No contiene');
            showPortfolio.classList.remove('visible-div');
        }
    });

    // Mostrar el submenú del portafolio
    portfolioButton.addEventListener('click', (event) => {
        if (!event.target.closest('.sub-main-list')) {
            event.stopPropagation();
            console.log('Click en el botón del portfolio. Estado: OK');
            showPortfolio.classList.toggle('visible-div');
            console.log(showPortfolio);
        }
    });

    // Prevent closing when clicking inside the portfolio options
    showPortfolio.addEventListener('click', (event) => {
        event.stopPropagation();
    });

    // Refresco tras cierre ventana modal
    closeModal.addEventListener('click', (event) => {
        console.log(event);
        if (event) {
            window.location.href = "app.html"; // Sí es la mejor opción
        }
    });

    // Close menu when clicking outside of it
    document.addEventListener('click', (event) => {
        if (!showMenu.contains(event.target) && !mainButton.contains(event.target)) {
            showMenu.classList.remove('visible-div');
            showPortfolio.classList.remove('visible-div');
        }
    });

    // Close menu when clicking a portfolio option
    document.querySelectorAll('.sub-main-list a').forEach(option => {
        option.addEventListener('click', () => {
            showMenu.classList.remove('visible-div');
            showPortfolio.classList.remove('visible-div');
        });
    });

    // Close menu when clicking on other links
    document.querySelectorAll('.main-list a').forEach(link => {
        link.addEventListener('click', () => {
            showMenu.classList.remove('visible-div');
            showPortfolio.classList.remove('visible-div');
        });
    });

    // Functions clock & year
    function tClock(dateObject) {
        let t = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
        return timeClock;
    }

    function yClock(dateObject) {
        let t = d.getDate() + "/" + d.getMonth() + "/" + d.getFullYear();
        return yearClock;
    }
});




*/








/*
//====================
//      THEORY
//====================
// DATE OBJECT
// A.- GET INFO
var d = new Date();
console.log(d); // Todo
//console.log(d.now()); // Ahora
//console.log(d.parse()); // ms from 01/01/1970
console.log(d.getTime());
var basDateBorn = new Date('October 10, 1981')
var newDate = new Date();
console.log(newDate.setTime(basDateBorn.getTime()));
console.log(basDateBorn.getTime());
console.log('Día mes -date-:' + d.getDate()); // día mes (1-31)
console.log('Dia semana -getDay-: ' + d.getDay()); // día semana (0-6) - 0 domingo
console.log('Año: ' + d.getFullYear()); // Año con 4 cifras
console.log('Milisegundos: ' + d.getMilliseconds()); // Ms acorde a la hora actual
console.log('Minutos: ' + d.getMinutes()); // Ms acorde a la hora actual
console.log('Hora local: ' + d.getHours()); // Ms acorde a la hora actual
console.log('Hora UTC: ' + d.getUTCHours()); // Ms acorde a la hora actual 
//B. SET INFO
// setSeconds
// setDate(24) => getDate()
// setTime(variable) => variable = new Date('October 10, 1981'); => getTime
// setFullYear(1997) => getFullYear
// setUTCFullYear

// Usar
console.log(d.getDay() +"/"+d.getDate()+"/"+d.getFullYear());
*/




   