<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Borja Bas Ventín - About me</title>
  <link rel="stylesheet" href="/about-me/assets/css/main-css.css">
</head>
<body>

  <!-- Barra lateral con enlaces -->
  <div class="controls" id="controls">
    <a href="#section-wp"><img class="bbv-controls" src="http://www.borjabasventin.es/cms/wp-content/themes/bbv_2023/assets/img/logo-50.png"></a>
    <a href="#section-home">Sobre mí</a>
    <a href="#section-portfolio">Portfolio</a>
    <!-- a href="#section-contact">Contacto</a-->
  </div>
  <!-- Pestaña del menú controls -->
<div class="tab-controls" id="tab-controls">→</div>
<script>
    const controls = document.getElementById('controls');
    const tab = document.getElementById('tab-controls');

    tab.addEventListener('click', () => {
      if (controls.style.transform === 'translateX(0px)') {
        controls.style.transform = 'translateX(-100%)';
        tab.innerHTML = '→';
      } else {
        controls.style.transform = 'translateX(0)';
        tab.innerHTML = '←';
      }
    });
  </script>

  <!-- Contenedor del scroll horizontal -->
  <div class="container">
    <div id="section-wp"></div>
    <div id="section-home">
            <div id="bio-div">
                <div class="left">  
                  <div class="draw">
                    <img src="http://www.borjabasventin.es/cms/wp-content/themes/bbv_2023/assets/img/webBBV.png"  alt="Dibujo vectorial de Borja Bas Ventín" class="image" title="Este soy yo">
                  </div>
              </div>
                <div class="right">
                <h1 class="about-me">Sobre mí</h1>
                <h2 class="sub-me">SysAdmin, Web Developer, IoT y Ciberseguridad</h2>
                <p>¡Hola!, me llamo Borja, soy un entusiasta del mundo digital, me encanta la tecnología y la informática. Una afición que realmente me acompaña desde muy joven.</p>    
                        
                        <p>Siempre tuve claro que además de ser un hobby quería poder dedicarme a ello, así que además de centrarme en ir aprendiendo poco a poco 
                        a mi ritmo, me formé académicamente en varias áreas, como fueron la electrónica (para poder comprender el funcionamiento del hardware),
                        la administración de sistemas y redes (para poder conocer como se interrelacionan los datos entre clientes y servidores) y el desarrollo
                        de aplicaciones (para poder ser capaz de "construir" algo desde cero).</p>
                        
                        <p>Dentro del desarrollo de aplicaciones, me especialicé en el mundo web, tanto en diseño como en desarollo,  ya que además de ofrecer
                        un amplío abanico de posibilidades posee una parte visual muy importante que me atrajó desde la
                        primera vez que navegué por internet.</p>

			<p>Posteriormente descubrí el mundo del IoT donde pudé combinar los conocimientos adquiridos previamente en electrónica, sistemas y desarrollo web e integrarlos  
			junto a tecnologías como los SBC (Raspberry) y controladores (8266 o ESP32) conectados a sensores, todo ello ajustándose a las buenas prácticas en ciberseguridad.</p>
                </div>
            </div>
        </div>
    <!-- End section bio -->
    <div id="section-portfolio" class="section">
    <div id="body-portfolio">
        <h1 class="title-port">Portfolio</h1>
        <div class="left-portfolio container-fluid">
    <!------------------------ start window project 01: IO Systems ---------------------->    
            <div class="window">
                <div class="browser-bar">  
                    <div class="container-bar">
                        <div class="circles">
                            <div class="circle red"></div>
                            <div class="circle yellow"></div>
                            <div class="circle green"></div>
                        </div>
                        <div class="project-name-portfolio">Proyecto: IO Systems </div>
                    </div>     
                </div>
                <div class="portfolio-container">  
                    <div class="small-image"><img src="/about-me/assets/img/IO_01.png"></div>
                    <div class="portfolio-mask">
                        <p><h2><span class="bg-mask">IO Systems Website</span></h2></p> 
                        <p class="space-mask"> <span class="bg-mask">HTML, CSS, JS, Php, Wordpress, JQuery</p></p>
                        <!-- call modal window -->
                        <p><a href="#open-popup-01" class="link bg-mask" title="Información del proyecto">+ info</a></p>
                    </div>    
                    <!-- modal window or pop-up -->
                    <div id="open-popup-01" class="window-popup">
                        <div id="window-container-portfolio">
                            <div id="close"><a href="#close" class="close">cerrar</a></div>
                            <div id="content">
                                <h2 class="format">IO Systems</h2>
                                <p class="text-project">
                                    IO Systems es un proyecto centrado en una empresa del ámbito tecnológico.
                                </p>
                                    <div class="bar">
                                        <div class="container-bar">
                                            <div class="circles">
                                                <div class="circle red"></div>
                                                <div class="circle yellow"></div>
                                                <div class="circle green"></div>
                                            </div>
                                            <div class="project-name">Proyecto: IO Systems </div>
                                        </div>
                                    </div>
                                    <img src="/about-me/assets/img/IO_01.png" alt="Imágen de la web de IO Systems">
                            
                                <p class="text-project">                            
                                    <h3 class="format">Estructura del desarrollo</h3>
                                    <ul class="tech-list">
                                        <li>Slider a pantalla completa como introducción</li>
                                        <li>Página web estilo SPA con navegación smooth scrolling</li>
                                        <li>Blog mediante CMS Wordpress</li>
                                    </ul>
                                </p>
                        
                                <p class="text-project">
                                    <h3 class="format">Tecnologías usadas</h3>
                                    <ul class="tech-list">
                                        <li>HTML 5</li>
                                        <li>CSS 3</li>
                                        <li>Php</li>
                                        <li>Javascript</li>
                                        <li>JQuery</li>
                                        <li>Wordpress</li>
                                    </ul>
                                </p>
                                <p class="text-project">
                                    <a href="/about-me/assets/img/IO_full.png" target="_new"><input type="button" value="Captura"  title="Ver un screenshoot de la web principal" class="btn-project"></a>
                                </p>         
                            </div><!-- end content -->
                        </div>  <!-- end window-container -->              
                    </div><!-- end modal -->
                </div> <!-- end portfolio container -->   
            </div><!-- end window -->
    <!------------------------ end window project 01  ----------------------->
        </div> <!-- end left -->
        <div class="right-portfolio container-fluid" >
    <!------------------------ start window project 02: Traveling world tours ---------------------->    
        <div class="window">
            <div class="browser-bar">  
                <div class="container-bar">
                    <div class="circles">
                        <div class="circle red"></div>
                
                        <div class="circle yellow"></div>
                        <div class="circle green"></div>
                    </div>
                    <div class="project-name-portfolio">Proyecto: Agencia TWT </div>
                </div>     
            </div>
            <div class="portfolio-container"> 
                <div class="small-image"><img src="/about-me/assets/img/TWT.png"></div>
                <div class="portfolio-mask">
                        <p><h2><span class="bg-mask">Traveling World Tour</span></h2></p> 
                        <p class="space-mask"> <span class="bg-mask">HTML, CSS, JS, JQuery, Php, Wordpress, Woocommerce </p></p>
                        <!-- call modal window -->
                        <p><a href="#open-popup-02" class="link bg-mask" title="Información del proyecto">+ info</a></p>
                </div>    
                <!-- modal window or pop-up -->
                <div id="open-popup-02" class="window-popup">
                    <div id="window-container-portfolio">
                        <div id="close"><a href="#close" class="close">cerrar</a></div>
                        <div id="content">
                            <h2 class="format">Traveling world tours</h2>
                            <p class="text-project">
                                TWT es un proyecto centrado en una empresa dedicada a la promoción y organización de viajes a Santo Tomé y Príncipe..
                            </p>
                                <div class="bar">
                                    <div class="container-bar">
                                        <div class="circles">
                                            <div class="circle red"></div>
                                            <div class="circle yellow"></div>
                                            <div class="circle green"></div>
                                        </div>
                                        <div class="project-name">Proyecto: Agencia TWT </div>
                                    </div>
                                </div>
                                <img src="/about-me/assets/img/TWT.png" alt="Imágen de la web de Traveling World Tours">
                        
                            <p class="text-project">                            
                                <h3 class="format">Estructura del desarrollo</h3>
                                <ul class="tech-list">
                                    <li>Página web implementada a través de un theme propio para CMS</li>
                                    <li>Blog mediante CMS Wordpress</li>
                                    <li>Contratación de los paquetes ofertados a través de un theme desarrollado para Woocommerce</li>
                                </ul>
                            </p>
                    
                            <p class="text-project">
                                <h3 class="format">Tecnologías usadas</h3>
                                <ul class="tech-list">
                                    <li>HTML 5</li>
                                    <li>CSS 3</li>
                                    <li>Php</li>
                                    <li>Javascript</li>
                                    <li>JQuery</li>
                                    <li>Wordpress</li>
                                    <li>Woocommerce</li>
                                </ul>
                            </p>
                            <p class="text-project">
                                <a href="/about-me/assets/img/TWT_full.png" target="_new"><input type="button" value="Captura"  title="Ver un screenshoot de la web principal" class="btn-project"></a>
                            </p>         
                        </div>
                    </div> <!-- end window-container -->               
                </div><!-- end modal -->                  
            </div><!-- end portfolio-container -->
        </div> <!-- end window -->   
    </div><!-- end right -->
    <!------------------------ end window project 02  ----------------------->       
    <div class="clear"></div>
        <div id="more-portfolio">Más proyectos en breve</div>
    </div><!-- end body container --> 
    </div>
    <!-----------------------------------------------------  CONTACTO SECTION ----------------------------------------------->
    <div id="section-contact" class="section">
      <div id="main-contact-container">
          <p class="title-contact">Contacto</p>
          <form class="form-container" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
            <input type="text" placeholder="Asunto" name="input-subject" class="input-subject" required>
            <textarea placeholder="Desarrollo del asunto" name="input-textarea" class="input-textarea" required></textarea>
            <div class="checkbox-container">
              <input type="checkbox" id="confirm" name="checkbox" required>
              <label for="confirm">Acepto las condiciones</label>
            </div>
            <div class="button-container">
              <button type="reset" class="reset-btn">Borrar</button>
              <button type="submit" id="submit-btn" class="submit-btn">Enviar</button>
            </div>
          </form>
      </div>
      <?php
      header('Content-Type:text/html;charset:utf-8');
// Procesamiento del formulario con Php del lado del servidor
// Inicializar variables para almacenar los datos extraidos del formulario una vez limpiados por la función clearData
    $asunto =  "";
    $desarrollo = "";
    $checkbox = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (!empty($_POST["input-subject"])) {
        // Se almacena el asunto tras limpiar los datos del input
        $asunto = clearData($_POST["input-subject"]);
      }
      if (!empty($_POST["input-textarea"])) {
        // Se almacenan los datos de textarea tras limpiarlos
        $desarrollo = clearData($_POST["input-textarea"]);
      }
      if (isset($_POST["checkbox"])) {
        // Si existe checkbox se inicializa a true
        $checkbox = true;
      }
    }

// Prevenir inyección
    function clearData($data) {
      $data = trim($data); // Limpia espacios en blanco
      $data = stripslashes($data); // Elimina barras
      $data = htmlspecialchars($data); // Elimina el procesamiento de caracteres especiales
      return $data; // Retorna los datos
    }

// Enviar los datos por email_enviado
if (!empty($asunto) && !empty($desarrollo) && $checkbox) {
    
    // Remitente
    $to = "bascore_@hotmail.com"; 
    // Asunto
    $subject = "Mensaje recibido : $asunto";
    // Mensaje
    $message = '<html><body>';
    $message .= "<p><strong>Asunto:</strong> $asunto</p>";
    $message .= "<p><strong>Desarrollo:</strong> $desarrollo</p>";
    $message .= "<p><strong>Aceptación de las condiciones:</strong> $checkbox</p>";
    $message .= "</body></html>";
    // Cabeceras
    $headers = "From: BBV Website <bascore_@hotmail.com>\r\n"; 
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n"; 
    
    /*
    // Funciona
    $to = "bascore_@hotmail.com"; 
    $subject = "Mensaje recibido : $asunto";
    $message .= "Asunto: $asunto\n\n";
    $message .= "Desarrollo:$desarrollo\n";
    $message .= "Aceptación de las condiciones: $checkbox\n\n";
    $headers = "From: BBV Website"; 
    */

    // Enviar el email y confirmar
    if (mail($to, $subject, $message, $headers)) {
            $success = true;
            $js = '<script>
            let enviar = document.getElementById("submit-btn")
            enviar.addEventListener("click",()=>{
            //e.preventDefault()
              console.log("Mensaje enviado")
              window.alert("Mensaje enviado")
           })
            </script>';
            echo $js;
        } else {
            $success = false;
        }
    }


// Mostrar los datos procesados si se ha realizado la petición POST y existe la variable checkbox
if(isset($_POST['submit-btn'])){
      echo "<h3>Datos procesados:</h3>";
      echo "<p><strong>Asunto:</strong> $asunto</p>";
      echo "<p><strong>Desarrollo:</strong> $desarrollo</p>";
      echo "<p><strong>Aceptación de las condiciones:</strong> Sí</p>";
      }
    ?>
    </div>
  <!-- JavaScript para desplazamiento suave a las anclas -->
  <script>
    const links = document.querySelectorAll('.controls a');
    const container = document.querySelector('.container');

    links.forEach(link => {
      link.addEventListener('click', (event) => {
        event.preventDefault(); // Evitar comportamiento por defecto del enlace
        const id = link.getAttribute('href').substring(1); // Obtener el ID del div, substring devuelve la cadena desde la posición 1, es decir nombre capa sin #.
        const section = document.getElementById(id); // Seleccionar el DIV en base al ID
        console.log(section)
        if(id=="section-wp"){
              location.href="https://www.borjabasventin.es/"
            }

        // Scroll de los DIV del container
        container.scrollTo({
          left: section.offsetLeft, // Distancia a la que desplazarse, se ajusta left al valor de pixeles donde está el margen izquierdo del div al que hay que ir.
          behavior: 'smooth'
        });
      });
    }); 
// Interseción Observer
document.addEventListener("DOMContentLoaded", function () {
    const sections = document.querySelectorAll(".section");
    const menuLinks = document.querySelectorAll(".menu-link");

    const observerOptions = {
        root: null, // viewport
        rootMargin: "0px",
        threshold: 0.6 // El porcentaje visible para considerar que la sección está activa
    };

    const observerCallback = (entries) => {
        entries.forEach(entry => {
            const id = entry.target.getAttribute("id");
            const menuLink = document.querySelector(`.controls a[href="#${id}"]`);
        
            if (entry.isIntersecting) {
                // Añadir la clase "active" al enlace que corresponde a la sección visible
                menuLink.classList.add("active");
            } else {
                // Eliminar la clase "active" si la sección no está visible
                menuLink.classList.remove("active");
            }
        });
    };

    const observer = new IntersectionObserver(observerCallback, observerOptions);

    // Observar cada sección
    sections.forEach(section => {
        observer.observe(section);
    });
});



  </script>



<!--

white-space:nowrap, garantiza que no se hagan saltos de línea
en display flex. Puede funcionar tb con grind o inline, inline-block,
con las disposiciones horizontales.
-->


</body>
</html>
