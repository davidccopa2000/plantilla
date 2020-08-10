<!DOCTYPE html>
<html lang="es">
<head>
    <title>Contacto</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PupilosdeVidcy</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/principal/normalize.css">
    <link rel="stylesheet" href="assets/css/principal/main.css">
</head>
<body>
    <header class="site-header ">
        <div class="contenedor contenido-header">
            <div class="barrasub">
                <a href="index.php">
                <img src="assets/img/principal/logo_secundario.svg" alt="logotipo de Mobiliaria Ccopa">
                </a>
                <nav class="navegacion">
                    <a href="nosotros.php">Nosotros</a>
                    <a href="anuncios.php">Anuncios</a>
                    <a href="blog.php">Blog</a>
                    <a href="contacto.php">Contacto</a>
                </nav>
            </div> <!--contenedor-->
        </div>

    </header>
        <h1 class="fw-300 centrar-texto"></h1>
        <img src="assets/img/principal/destacada3.jpg" alt="Imgen Principal">
        <main class="contenedor seccion contenido-centrado">
            <h2 class="fw-300 centrar-texto ">Llena el formulario De Contácto</h2>
            <form action="" class="contacto">

                <fieldset>
                    <legend>Información Personal</legend>
                    <label for="nombre"> Nombre:</label>
                    <input type="text" id="nombre" placeholder="Tu Nombre" required >
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" placeholder="Tu Correo Electrónico" required>
                    <label for="telefono">Teléfono:</label>
                    <input type="tel" id="telefono" placeholder="Tu Teléfono" required>
                    <label for="mensaje"">Mensaje:</label>
                    <textarea id="mensaje" > </textarea>

                </fieldset>

                <fieldset>
                    <legend>Informacion de La Propiedad</legend>
                    <label for="opciones"> Vende o Compra</label>
                    <select id="opciones">
                        <option value="" disabled selected >--Seleccione--</option>
                        <option value="Compra">Compra</option>
                        <option value="Vende">Vende</option>
                    </select>

                    <label for="cantidad">Cantidad:</label>
                    <input type="number" id="cantidad" min="0" step="10">

                </fieldset>
                <form class="contacto" action=""></form>
                <fieldset>
                    <legend>Contacto</legend>
                    <p>Como desea ser Contactado</p>
                    <div class="forma-contacto">
                        <label for="telefono">Teléfono</label>
                        <input type="radio" name="contacto" value="telefono" id="telefono">

                        <label for="correo">E-mail</label>
                        <input type="radio" name="contacto" value="correo" id="correo">
                    </div>
                    <p>Si Eligió Telefono, elija la fecha y la hora</p>
                    <label for="fecha">Fecha:</label>
                    <input type="date" id="fecha">

                    <label for="hora">Hora:</label>
                    <input type="time" id="hora" min="9:00" max="22:00">



                </fieldset>
                <input type="submit" value="Enviar" class="boton boton-verde">

            </form>

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
