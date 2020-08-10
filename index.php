

  <!-- Add your site or application content here -->

<?php
require_once('pages/header.php');
require_once('pages/nav.php');
?>

    <section class="contenedor seccion">
        <h2 class="fw-300 centrar-texto">Mas Sobre Nosotros</h2>
        <div class="iconos-nosotros">
            <div class="icono" >
                <img src="assets/img/principal/icono1.svg" alt="Icono Seguridad">

                <h3 class="encabezado">Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit magnam sequi aspernatur expedita fugiat id soluta nihil sit asperiores quibusdam, illo sed. Cumque, rerum dolorum. Eligendi excepturi et quam porro!</p>
            </div>

            <div class="icono">
                <img src="assets/img/principal/icono2.svg" alt="Icono Mejor Precio">
                <h3 class="encabezado">El Mejor Precio</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi unde dignissimos placeat at ad consectetur voluptates obcaecati sed expedita repellendus aut dicta quibusdam, maxime tempore architecto omnis fugit totam? Quidem.</p>
            </div>

            <div class="icono">
                <img src="assets/img/principal/icono3.svg" alt="Icono Mejor a Tiempo">
                <h3 class="encabezado">A Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus voluptatum alias accusantium optio neque aliquam nihil in dolore repudiandae. Eligendi ea id eveniet delectus voluptatibus! Dolor saepe deserunt libero asperiores.</p>
            </div>
        </div>
    </section>
    <main class="seccion contenedor">
        <h2 class="fw-300 centrar-texto">Casas y Depas en Ventas</h2>

        <div class="contenedor-anuncios">
            <div class="anuncio">
                <img src="assets/img/principal/anuncio1.jpg" alt="Anuncio Casa Lujo en el Lago">
                <div class="contenido-anuncio">
                    <h3>Casas de Lujo en el Lago</h3>
                    <p>Casa en el Lago con Exelente Vista, acabados de lujo a un excelente precio</p>
                    <p class="precio">$3,000,000</p>


                    <ul class="iconos-caracteristicas">
                        <li>
                            <img src="assets/img/principal/icono_wc.svg" alt="">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="assets/img/principal/icono_estacionamiento.svg" alt="">
                            <p>4</p>
                        </li>
                        <li>
                            <img src="assets/img/principal/icono_dormitorio.svg" alt="">
                            <p>4</p>
                        </li>
                    </ul>
                    <a href="anuncio.php" class="boton boton-amarillo d-block">Ver Propiedad</a>
                </div>
            </div>
            <div class="anuncio">
                <img src="assets/img/principal/anuncio2.jpg" alt="Anuncio Casas Terminadas de Lujo">
                <div class="contenido-anuncio">
                    <h3>Casas terminadas de lujo</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                    <p class="precio">$2,000,000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img src="assets/img/principal/icono_wc.svg" alt="">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="assets/img/principal/icono_estacionamiento.svg" alt="">
                            <p>4</p>
                        </li>
                        <li>
                            <img src="assets/img/principal/icono_dormitorio.svg" alt="">
                            <p>4</p>
                        </li>
                    </ul>
                    <a href="anuncio.php" class="boton boton-amarillo d-block">Ver Propiedad</a>
                </div>
            </div>
            <div class="anuncio">
                <img src="assets/img/principal/anuncio3.jpg" alt="Anuncio Casa con ALberca">
                <div  class ="contenido-anuncio">
                    <h3>Casa con alberca</h3>
                    <p>Casa con alberca  y acabados de lujo  en la ciudad, excelente oportunidad</p>
                    <p class="precio">$3,000,000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img src="assets/img/principal/icono_wc.svg" alt="">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="assets/img/principal/icono_estacionamiento.svg" alt="">
                            <p>4</p>
                        </li>
                        <li>
                            <img src="assets/img/principal/icono_dormitorio.svg" alt="">
                            <p>4</p>
                        </li>
                    </ul>
                    <a href="anuncio.php" class="boton boton-amarillo d-block">Ver Propiedad</a>
                </div>
            </div>
        </div>
        <div class="ver-todas">
            <a href="anuncios.php" class="boton boton-verde">Ver Todas</a>
        </div>
    </main>
    <section class="imagen-contacto">
        <div class="contenedor contenido-contacto">
            <h2>Encuentra la casa de tus sueños</h2>
            <p>llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
            <a href="contacto.php"class="boton boton-amarillo">Contactanos</a>
        </div>
    </section>
    <div class="seccion-inferior contenedor">
        <section class="blog">
            <h3 class="centrar-texto fw-300">Nuestro Blog</h3>
            <article class=" entrada-blog">
                <div class="imagen">
                    <img src="assets/img/principal/blog1.jpg" alt="Entrada de Blog">
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el techo de tu casa</h4>
                    </a>
                    <p>Escrito el: <span> 20/20/2020 </span> por: <span> Admin </span> </p>
                    <p>Consejos para construir una terraza en el techo de tu casa, con los mejores
                    maeriales y ahorrando dinero</p>
                </div>
            </article>
            <article class="entrada-blog">
                <div class="imagen">
                    <img src="assets/img/principal/blog2.jpg" alt="Entrada de Blog">
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guía para la decoración de tu hogar</h4>
                    </a>
                    <p>Escrito el: <span>20/20/2020 </span> por: <span> Admin </span></p>
                    <p>Maximiza el espacio en tu hogar con este guia , aprende a combinar muebles y colores para darle vida a tu espacio</p>
                </div>
            </article>
        </section>
        <section class="testimoniales">
            <h3 class="centrar-texto fw-300">Testimoniales</h3>
          <!-- <header>
                <p>Escrito por:</p>
            </header>-->
            <div class="testimonial">
                <blockquote>El personal se comporto de una excelente forma, muy buena atención
                y la casa que me ofrecieron cumple con todas las espectativas</blockquote>
                <p>David Ccopa Yapura</p>
            </div>
        </section>
    </div>
    
<?php
require_once('pages/navFooter.php');
?>


  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>


<?php
require_once('pages/footer.php');
?>