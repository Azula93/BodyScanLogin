<?php

    // CONEXION A LA DB

    class db{
        private $host = "localhost";
        private $dbname = "bodyscan";
        private $user ="root";
        private $password= "";
    
        // se capturan los datos de la DB
        public function conexion(){
            try {
                $PDO = new PDO("mysql:host=".$this->host.";dbname=".    $this->dbname, $this->user, $this->password);
                return $PDO;
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }
}
// con este codigo verificamos que la conexion se hizo de manera correcta
// $obj = new db();
// en pantalla deberia aparecer "PDO Object ( )"
// print_r($obj->conexion());

?>