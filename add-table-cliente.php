
<?php
/**
 *  IMPORTANDO EL PAQUETE DE LA SESION:::::::: 
 */

session_start();
if(!isset($_SESSION['name'])){
    header("location:http://localhost/plantilla/");
}else if($_SESSION['rol']!='3'){
    header("location:http://localhost/plantilla/login.php");
}
require_once("models/administrador.php");
$obj= new administrador();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.css">
    <link rel="shortcut icon" href="assets/icon/EscuelaVirtual.png"/>
    

    <link rel="stylesheet" href="lib/animate.css/animate.css">
    <link rel="stylesheet" href="lib/sweetAlert2/sweetalert2.min.css"> 
    <!--importando form register style-->
    <link rel="stylesheet" href="assets/css/administrador/register-form.css">
    
</head>
<body class="background-gris">


<!---------------------------- navergador principal pantalla grande---------------------------------------------------------------->
<nav class="navbar d-none d-sm-none d-lg-flex navbar-expand-lg bg-dark navbar-dark fixed-top " style=" width: 100%;">
    <a class="navbar-brand dropdown dropdown-toggle mr-3" href="navbardrop" id="navbardrop" data-toggle="dropdown">
     <img src="assets/img/administrador/admin3.jpg" alt="Logo" style="width:40px; border-radius:55%;">
    </a>
        <div class="dropdown-menu bg-dark"> 
          <a id="perfil" class="dropdown-item text-primary" href="?a=perfil">Perfil</a>
          <a class="dropdown-item text-primary" href="#configuracion">Configuracion</a>
          <a class="dropdown-item text-primary" href="controllers/controllerAdministrador.php?action=salir">Salir</a>
        </div>
    <ul class="navbar-nav ">
        <!--<li class="nav-item">
          <a id="inicio" class="nav-link" href="?a=inicio">INICIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?a=cursos">Inmuebles</a>
        </li>
        -->
        <li class="nav-item">
          <a id="inicio" class="nav-link" href="administrador.php">INICIO</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Inmuebles
          </a>
        <div class="dropdown-menu bg-dark">
          <a class="dropdown-item text-primary" href="?a=pageDocente">Propias</a>
          <a class="dropdown-item text-primary" href="#">Clientes</a>
        </div>
        </li>
<!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Usuarios
          </a>
        <div class="dropdown-menu bg-dark">
          <a class="dropdown-item text-primary" href="?a=pageDocente">Empleados</a>
          <a class="dropdown-item text-primary" href="admin-tabla-clientes.php">Clientes</a>
          <a class="dropdown-item text-primary" href="#">Administradores</a>
        </div>
        </li>
    </ul>
</nav> 

 <!------------------------ navergador principal pantalla pequeña---------------------------------------------------------------->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark  d-lg-none fixed-top">
    <a class="navbar-brand" href="#">Administrador</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="administrador.php">Inicio</a>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Inmuebles
          </a>
        <div class="dropdown-menu bg-dark">
          <a class="dropdown-item text-primary" href="?a=pageDocente">Propias</a>
          <a class="dropdown-item text-primary" href="?a">Clientes</a>
        </div>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Usuarios
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#controllers/controllerAdminstrador.php?action=salir">Empleados</a>
            <a class="dropdown-item" href="admin-tabla-clientes.php">Clientes</a>
            <a class="dropdown-item" href="#controllers/controllerAdminstrador.php?action=salir">Administradores</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Configuracion</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="?a=perfil">Perfil</a>
            <a class="dropdown-item" href="controllers/controllerAdminstrador.php?action=salir">Exit</a>
          </div>
        </li>      
      </ul>
    </div>  
</nav>



<form id="regForm" action="controllers/controllerAdministrador.php?tipo=cliente" method="post" enctype="multipart/form-data">

<h1>Registrar Cliente:</h1>

<!-- One "tab" for each step in the form: -->
<div class="tab"><h3>Datos personales:</h3>
  <p><input type="text" placeholder="Dni" name="dni" oninput="this.className = ''"></p>
  <p><input type="text" placeholder="Nombre" name="nombre" oninput="this.className = ''"></p>
  <p><input type="text" placeholder="Apellido" name="apellido" oninput="this.className = ''"></p>
  <p><input type="text" placeholder="Direccion" name="direccion" oninput="this.className = ''"></p>
  <p><input type="text" placeholder="Contacto" name="contacto" oninput="this.className = ''"></p>
  <p><input type="email" placeholder="Email" name="email" oninput="this.className = ''"></p>
  
</div>

<div class="tab"><h3>Datos personales:</h3>
    <h4>Sexo</h4>
    <label class="container">Masculino
    <input type="radio"  name="radio" value="1">
    <span class="checkmark"></span>
    </label>
    <label class="container">Femenino
    <input type="radio" name="radio" value="0">
    <span class="checkmark"></span>
    </label>

    <label><h4>Fecha de nacimiento:</h4>
    <p><input type="date" name="fecha" oninput="this.className = ''"></p>
    </label>
    
</div>



<div class="tab">Informacion de la cuenta:
  <p><input type="text" placeholder="Usuario" name="user" oninput="this.className = ''"></p>
  <p><input type="password" placeholder="Contraseña" name="pass" oninput="this.className = ''"></p>
</div>

<div style="overflow:auto;">
  <div style="float:right;">
    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Anterior</button>
    <button type="button" name="crearCliente" id="nextBtn" onclick="nextPrev(1)">Siguiente</button>
  </div>
</div>

<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
</div>

</form> 



<script src="lib/bootstrap/js/popper.min.js"></script>
<script src="lib/bootstrap/js/jquery-3.2.1.slim.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/sweetAlert2/sweetalert2.all.min.js"></script>
<script src="assets/js/administrador/register-form.js"></script>
</body>
</html>