<?php
if(isset($ctrl)){

}else{
    require_once('mysql.php');
}


class database{
    static private $instance=null;

    private function __construct(){}

    static function create(){
        if(self::$instance==null){
            self::$instance= new database();
        }
        return self::$instance;
    }
    
    public function conect(Igestor $db){
        return $db->getConection();
    }
}