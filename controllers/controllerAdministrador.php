<?php
//require_once('models/administrador.php');
//require_once("../bin/sesion.php");
if(isset($_SERVER['REQUEST_METHOD'])){

    if($_SERVER['REQUEST_METHOD']==='POST'){
        if(isset($_POST['actualizar'])){
            echo "actuaizzamos";
        }else if(isset($_GET['tipo'])){
            if($_GET['tipo']=="cliente"){
                /**
                 * logica de registro con ddbb
                 * 
                 */
                $ctrl=true;
                require_once("../models/administrador.php");
                $obj= new administrador();
                $dni=$_POST['dni'];
                $nombre=$_POST['nombre'];
                $apellido=$_POST['apellido'];
                $direccion=$_POST['direccion'];
                $tel=$_POST['contacto'];
                $email=$_POST['email'];
                $sexo=$_POST['radio'];
                $birthDay=$_POST['fecha'];
                $user=$_POST['user'];
                $pass=$_POST['pass'];
                
               // echo "estamos aqui";

                $obj->createPeople($dni,$nombre,$apellido,$direccion,$tel,$email,$sexo,$birthDay,$user,$pass);
                $obj->createClient($dni);
                //$obj=null;
               // $ctrl=null;
                header("location:http://localhost/plantilla/admin-tabla-clientes.php");
            }
        }

    }else if($_SERVER['REQUEST_METHOD']==='GET'){
        if($_GET['action']=="salir"){
            session_start();
            session_unset();
            session_destroy();

            /**
             * redirigiendo 
             */
            header("location:http://localhost/plantilla/index.php");

        }else if($_GET['action']=="ListarClientes"){
            /**
             * redirigiendo 
             */

            header("location:http://localhost/plantilla/admin-tabla-clientes.php");
        }
        else if($_GET['action']=="registrarCliente"){

            header("location:http://localhost/plantilla/add-table-cliente.php");
        }else if($_GET['action']=="eliminarCliente"){
            $idPeople=$_GET['idPeople'];
            $ctrl=true;
            require_once("../models/administrador.php");
            $obj= new administrador();
            $obj->eliminarCliente($idPeople);
            header("location:http://localhost/plantilla/admin-tabla-clientes.php");
        }else if($_GET['action']=="infoCliente"){

            header("location:http://localhost/plantilla/info-tabla-cliente.php?idCliente=".$_GET['idPeople']);

        }
    }
}else{
    echo 'ACCESO RESTRINGIDO';
}