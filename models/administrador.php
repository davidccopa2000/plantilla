<?php
if(isset($ctrl)){
    /**
     * importando database-config/controller
     */
    require_once("../config/database.php");
    require_once("../config/config.php");
    require_once("../config/Igestor.php");
    require_once("../config/mysql.php");
}else{
    require_once("config/database.php");
}
class administrador{
    private $con=null;

    public function __construct(){
        $this->con=database::create()->conect(new mysql);
    }
    private function getIdPeople($dni){
        $sql="SELECT id_people FROM people WHERE dni=?";
        $rs=$this->con->prepare($sql);
        $rs->execute(array($dni));
        return $rs->fetch(PDO::FETCH_OBJ);
    }

    /**
     * get all users from table people
     */
    public function listUsers(){
        $sql="SELECT id_people,dni,first_name,last_name,adress,email,is_active FROM people";
        $rs=$this->con->prepare($sql);
        $rs->execute();
        return $rs->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * set register user client
     */
    public function createPeople($dni,$nombre,$apellido,$dir,$cel,$email,$sex,$fechNac,$user,$pass){
        /**
         * action 1: access system
         * action 0: is active
         */
        $active=1;
        $logueado=0;
        $var=null;

        $sql="INSERT INTO people VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
       // $sql="INSERT INTO people(id_people,dni,first_name,last_name) VALUES(?,?,?,?)";
        $rs=$this->con->prepare($sql);
        //$rs->execute(array($logueado,$dni,$nombre,$apellido));
        $rs->execute(array($logueado,$dni,$nombre,$apellido,$dir,$cel,$email,$sex,$fechNac,$user,$pass,$active,$logueado,3,$var));
    }
    public function createClient($dni){
        $idPeople=$this->getIdPeople($dni);
        /**param::::
         * 1->null auto increment
         */

        $var=0; // var autoincrement
        $ruc=null;
        $idClient=$this->generateIdClient();
        $sql="INSERT INTO  client VALUES(?,?,?,?)";
        $rs=$this->con->prepare($sql);
        $rs->execute(array($var,$idClient,$idPeople,$ruc));
    }
    private function generateIdClient(){

        $sql="SELECT fnReturnId('3') AS id";
        $rs=$this->con->prepare($sql);
        $rs->execute();
        return $rs->fetch(PDO::FETCH_OBJ);
    }
    public function eliminarCliente($idPeople){
        $sql="DELETE FROM client WHERE id_people=? ";
        $rss=$this->con->prepare($sql);
        $rss->execute(array($idPeople));
        $sql="DELETE FROM people WHERE id_people=? ";
        $rs=$this->con->prepare($sql);
        $rs->execute(array($idPeople));
    }


}