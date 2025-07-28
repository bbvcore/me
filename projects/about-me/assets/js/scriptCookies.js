// Se puede omitir este listener de comprobación del DOM y jugar con
// la carga asincrona con async/defer en JS.
document.addEventListener('DOMContentLoaded',()=>{          
    // 1. PREVIO
    //=====================================================================
    let cookies = document.getElementById('cookiesBanner')   
    var accessOK = localStorage.getItem('cookies'); 
    if(accessOK != 'true'){     
        // INICIAR FUNCIONALIDAD
        //=================================================================
        function initScriptCookies(){ 

            // 1.- OPCIÓN: SÍ
            //=================================================================
            document.getElementById('yes').addEventListener('click',()=>{
                // Remove elimina un elemento del DOM
                accessOK = localStorage.setItem('cookies',true);
                console.log(localStorage)
                cookies.remove();
            })

            //  2.- OPCIÓN AJUSTES
            //=================================================================
            let os = document.getElementById('openSettings')
            os.addEventListener('click',()=>{
                document.getElementById('windowSettings').style.display="block"
            })

            // 3.- OPCIÓN NO: Cerrar cookies
            //=================================================================
            // Se borra un elemento del DOM, en este caso la barra de Cookies 
            document.getElementById('no').addEventListener('click',()=>{
                localStorage.setItem('cookies',false);
                console.log(localStorage);
                document.getElementById('noAccept').style.display="block"
                // Remove elimina un elemento del DOM
                //cookies.remove();
            })

            // Condicionales según opción escogida
            //=================================================================
            if (localStorage.getItem('cookies') === true){
                console.log(localStorage.getItem('cookies'));
            }else if(localStorage.getItem('cookies') === false){
                console.log(localStorage.getItem('cookies'));
            } else {
                console.log("Estado de las Cookies... pendiente!")
            }
        }    
    // EJECUTAR SCRIPT
    //==========================================================================
        initScriptCookies();  
    }else{
        cookies.remove(); // Quita Banner inferior de Cookies
    }
});// END DOMContentLoaded