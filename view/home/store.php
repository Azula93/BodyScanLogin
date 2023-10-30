<?php   


    session_start();
    require_once("c:/wamp64/www/login/controller/homeController.php");

    $obj = new homeController();
    $nombreUsuario = $_POST['nombreUsuario'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $confirmPass = $_POST['confirmPass'];
    $error = "";


    // este if verifica si los campos password, correo estan vacios 
    if(empty($nombreUsuario)  || empty($correo) || empty($password) || empty($confirmPass) ){
        // .= sirve para concatenar 
        $error .= "<li>Completa Todos los campos</li>";

         header("Location:signup.php?error=".$error."&&nombreUsuario=".$nombreUsuario."&&correo=".$correo);
        //  ."&&correo=".$correo."&&password=".$password."&&confirmPass=".$confirmPass
        
    } else if( $correo && $password && $confirmPass && $nombreUsuario){

            if($password == $confirmPass){
               if ($obj -> guardarUsuario($nombreUsuario,$correo,$password) == false){
                $error .= "<li>El correo ya se está registrado</li>";
                header("Location:signup.php?error=".$error);
               }else{
                    
                    // si todo sale bien y no hay error pasa a este else que llevara al usuario al login 
                    header("Location:login.php");
               }
            }else{

            $error .= "<li>Las contraseñas no coinciden</li>";
                header("Location:signup.php?error=".$error);    
        }
    }

?>