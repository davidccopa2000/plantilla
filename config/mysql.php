<?php
if(isset($ctrl)){

}else{
    require_once 'Igestor.php';
    require_once 'config.php';
}

class mysql implements Igestor{

    public function __construct(){}

    public function getConection(){
        try{
            $con= new PDO('mysql:host='.__SERVER__.':'.__PORT__.';dbname='.__DB__.';',__USER__,__PASS__);
            $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $con->exec('SET CHARACTER SET UTF8');
            return $con;
        }catch(Exception $e){
            die('error'.$e->getMessage());
        }
    }
}