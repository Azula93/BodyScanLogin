<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


    $error = "";

    class homeController{
        private $MODEL;
        public function __construct()
        {
            require_once("c:/wamp64/www/login/model/homeModel.php");
            $this -> MODEL = new homeModel();
        }

        // FUNCION PARA GUARDAR USUARIO

        public function guardarUsuario($nombreUsuario, $correo, $password){
            $valor = $this -> MODEL-> agregarNuevoUsuario($this -> limpiarnombreusuario($nombreUsuario), $this -> limpiarcorreo($correo),
            $this->encriptarPassword($this->limpiarcadena($password)),
            );
            return $valor;
        }

        // limpia la info que se envia por formulario como codigo sql o etiquetas html
        public function limpiarcadena($campo){
            $campo = strip_tags($campo);
            $campo = filter_var($campo, FILTER_SANITIZE_STRING);
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

          // limpia la info que se envia por formulario como codigo sql o etiquetas html
          public function limpiarnombreusuario($campo){
            $campo = strip_tags($campo);
            $campo = filter_var($campo, FILTER_SANITIZE_STRING);
            $campo = htmlspecialchars($campo);
            return $campo;
        }

        // FUNCION PARA ENCRIPTAR LA CONTRASEÑA
        public function encriptarPassword($password){
            return password_hash($password,PASSWORD_DEFAULT);
        }

        // FUNCION PARA VERIFICAR EL USUARIO, verifica que los datos ingresados sean iguales a los de la DB
        public function verificarUsuario($nombreUsuario,$correo, $password){
            // como no se puede o no se debe tener acceso directo a las contraseñas de los usuarios se obtiene el hash(la clave encriptada) a traves del correo
            $keydb = $this -> MODEL -> obtenerPassword($correo);

            // Verificar si el correo no existe en la base de datos
            if ($keydb === null) {
                // Mostrar un mensaje de error o devolver un valor que indique que el correo no existe
                $error .=  "<li>El correo no existe en la base de datos</li>";
            }

            // aqui verifica si la contraseña ingresada es igual a la que esta en la DB
            return (password_verify($password, $keydb)) ? true : false;
        }

    }


?>