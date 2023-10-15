<?php
    class homeController{
        private $MODEL;
        public function __construct()
        {
            require_once("c:/wamp64/www/login/model/homeModel.php");
            $this -> MODEL = new homeModel();
        }

        // FUNCION PARA GUARDAR USUARIO

        public function guardarUsuario($correo, $password){
            $valor = $this -> MODEL-> agregarNuevoUsuario($this -> limpiarcorreo($correo),$this->encriptarPassword($this->limpiarcadena($password)));
            return $valor;
        }

        // limpia la info que se envia por formulario como codigo sql o etiquetas html
        public function limpiarcadena($campo){
            $campo = strip_tags($campo);
            $campo = filter_var($campo, FILTER_UNSAFE_RAW);
            $campo = htmlspecialchars($campo);
            return $campo;
        }

         // limpia la info que se envia por formulario como codigo sql o etiquetas html
         public function limpiarcorreo($campo){
            $campo = strip_tags($campo);
            $campo = filter_var($campo, FILTER_SANITIZE_EMAIL);
            $campo = htmlspecialchars($campo);
            return $campo;
        }

        // FUNCION PARA ENCRIPTAR LA CONTRASEÑA
        public function encriptarPassword($password){
            return password_hash($password,PASSWORD_DEFAULT);
        }

    }


?>