
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



<div class="container-fluid" style="margin-top:100px;">
  <div class="">
    <div class="row">
      <div class="col-9">
        <input class="form-control " id="myInput" type="text" placeholder="Search..">
      </div>
      <div class="col-2">
        <a class="btn btn-info" href="controllers/controllerAdministrador.php?action=registrarCliente">
          <img src="assets/icon/administrador/agregar.svg" class="p-0" style="width: 40px;" >
        </a>
      </div>
    </div>
  </div>
  <div class="contanier" style="overflow:auto;">
      <table class="table table-hover table-bordered mt-3">
        <thead class="bg-dark text-white">
          <tr>
            <th>Dni</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Dirección</th>
            <th>Correo</th>
            <th>Estado</th>
            <th>Opciones</th>
          </tr>
        </thead>
        <tbody id="myTable" class="bg-secondary text-white">
            <!-- contenido DOCENTE API -->
                <?php
                  $rs=$obj->listUsers();
                  foreach($rs as $cliente):
                ?>
                <tr>
                    <td><?php echo $cliente->dni; ?></td>
                    <td><?php echo $cliente->first_name; ?></td>
                    <td><?php echo $cliente->last_name ; ?></td>
                    <td><?php echo $cliente->adress; ?></td>
                    <td><?php echo $cliente->email; ?></td>
                    <td><?php echo ($cliente->is_active=='1')?'activo':'inactivo'; ?></td>

                    <?php echo '<td><a href="'.htmlspecialchars("controllers/controllerAdministrador.php?action=eliminarCliente&idPeople=".urlencode($cliente->id_people)).'">delete</a>'; ?>
                    <?php echo '<a href="'.htmlspecialchars("controllers/controllerAdministrador.php?action=infoCliente&idPeople=".urlencode($cliente->id_people)).'">info</a></td>'; ?>
                    
                </tr>
                  <?php
                  endforeach;
                  ?>
        </tbody>
      </table>
  </div>

  <ul id="table-pagination-global" class="pagination">
    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>

</div>





<!-- PINRT THE MODAL FOR VIEW TABLE BY BUTTON -->
<!--div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informacion Personal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!- desde aqui comienza el formulario ->

        <div class="container">
          <form id="formulario-info-update">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputNombres">Nombres</label>
              <input type="text" class="form-control" id="inputNombres" placeholder="Nombres">
            </div>
            <div class="form-group col-md-6">
              <label for="inputApellidos">Apellidos</label>
              <input type="text" class="form-control" id="inputApellidos" placeholder="Apellidos">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail">Email</label>
              <input type="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword">Password</label>
              <input type="password" class="form-control" id="inputPassword" placeholder="Password">
            </div>
          </div>
          <div class="form-group">
            <label for="inputContacto">Contacto</label>
            <input type="text" class="form-control" id="inputContacto" placeholder="telefono o celular">
          </div>
          <div class="form-group">
            <label for="inputDomicilio">Domicilio</label>
            <input type="text" class="form-control" id="inputDomicilio" placeholder="Jr ejemplo 888">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">City</label>
              <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
              <label for="inputState">Sexo</label>
              <select id="inputState" class="form-control">
                <option selected>Opcion</option>
                <option>Masculino</option>
                <option>Femenino</option>
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Zip</label>
              <input type="text" class="form-control" id="inputZip">
            </div>
          </div>
          
          <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        </div>

        <!- aqui teermina el formulario ->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div--> 


<script src="lib/bootstrap/js/popper.min.js"></script>
<script src="lib/bootstrap/js/jquery-3.2.1.slim.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/sweetAlert2/sweetalert2.all.min.js"></script>
</body>
</html>