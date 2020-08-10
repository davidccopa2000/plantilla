<!DOCTYPE html>
<html lang="es">
<head>
    <title>Anuncio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PupilosdeVidcy</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/principal/normalize.css">
    <link rel="stylesheet" href="assets/css/principal/main.css">
</head>
<body>
    
<?php
require_once('pages/nav.php');
?>
        <h1 class="fw-300 centrar-texto">Casa en venta Junto al Bosque</h1>
        <img src="assets/img/principal/destacada.jpg" alt="imagen anuncio">
        <main class="contenedor seccion contenido-centrado">
            <div class="resumen-propiedad">
                <p class ="precio">3,000,000</p>
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
            </div>    <!--resumen de propiedad-->
            <p>
                Morbi tincidunt et nulla eget tempor. Vestibulum eget volutpat urna.Proin sit amet
                lacus sit amet nisl auctor cursus. In eu felis pretium, vestibulum ligula non, cursus purus.
                Aliquam et lacus ut nibh maximus tempor eget sit amet arcu. Aliquam tempor elementum purus.
                Morbi mi diam, aliquet vitae volutpat vel, suscipit eu est. Aliquam in orci ligula.
            </p>
            <p>
                Cras ligula arcu, fringilla at tortor id, venenatis faucibus mi. Pellentesque aliquam,
                est nec luctus varius, erat tellus pellentesque sem, et scelerisque neque dui sed eros.
                Vivamus rhoncus ligula sapien, non molestie felis auctor sed. Donec ac turpis porta,
                lobortis diam vitae, faucibus lacus. Cras tincidunt tortor in est laoreet dictum.
                Nullam et arcu posuere ligula venenatis pulvinar. Morbi felis nisi, suscipit nec euismod sit amet,
                tincidunt ut orci. Sed eget arcu nec lacus lobortis porta. Curabitur id magna at enim dignissim
                aliquet et ut elit. Curabitur maximus sed arcu at ornare. Duis at ante lacus. Nulla arcu purus,
                pharetra ut lacinia non, sollicitudin et tellus. Maecenas massa dolor, malesuada nec ex sed,
                consequat tristique turpis.
            </p>
        </main>


    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.php">Nosotros</a>
                <a href="anuncios.php">Anuncios</a>
                <a href="blog.php">Blog</a>
                <a href="contacto.php">Contacto</a>

            </nav>
            <p class="copyright">"Todos los Derechos Reservados de dccopay&commat;gmail.com 2020"</p>
        </div>
    </footer>

</body>
</html>
