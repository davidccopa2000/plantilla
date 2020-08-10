<!DOCTYPE html>
<html lang="es">
<head>
    <title>Login</title>
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
    <main class="login">

        <div class="contenedor seccion contenido-centrado-login">
            <!--<h2 class="fw-300 centrar-texto ">Llena el formulario De Contácto</h2>-->
            <form class="form-login" class="contacto" action="controllers/controllerPeople.php" method="post" enctype="multipart/form-data" >

                <fieldset>
                    <legend class="fw-300-l centrar-texto-l ">LOGIN</legend>
                    <label for="nombre"> UserName:</label>
                    <input type="text" name="username" id="nombre" placeholder="tu nombre de usuario" required >
                    <label for="password">PassWord:</label>
                    <input type="password" name="password" id="password" placeholder="Tu contraseña" required>
                    <a href="registrar_usuario.php">Crear una Cuenta</a>
                </fieldset>


                <input type="submit" value="Entrar" class="boton boton-verde">



            </form>
            <div>


            </div>
        </div>
    </main>
    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.php">Nosotros</a>
                <a href="anuncios.php">Anuncios</a>
                <a href="blog.php">Blog</a>
                <a href="contacto.php">Contacto</a>
                <a href="login.php">Ingresar</a>

            </nav>
            <p class="copyright">"Todos los Derechos Reservados de dccopay&commat;gmail.com 2020" </p>
        </div>
    </footer>

</body>
</html>