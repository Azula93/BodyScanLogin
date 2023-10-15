<?php

    class homeModel{
        private $PDO;
        public function __construct(){
            require_once("c:/wamp64/www/login/config/db.php");
            $pdo = new db();
            $this ->PDO = $pdo ->conexion();
        }
        // funcion para agregar un nuevo usuario
        public function agregarNuevoUsuario($correo, $password){
            // sentencia de sql para agregar el usuario a la DB
            $statement = $this->PDO->prepare("INSERT INTO usuarios values(null,:correo,:password)");
            $statement ->bindParam(":correo", $correo);
            $statement ->bindParam(":password", $password);

            // este try catch hace que se muestre el error del correo duplicado en caso de que se quiera ingresar el mismo correo dos veces
            try {
                 $statement ->execute();
                 return true;
            } catch (PDOException $e) {
                return false;
            }

            
        }
    }




?>