<?php

    require_once("c:/wamp64/www/login/controller/homeController.php");


    session_start();
    
    $obj = new homeController();

    $correo = $obj ->limpiarcorreo($_POST['correo']);
    $contraseña = $obj ->limpiarcadena($_POST['password']);
    $bandera = $obj -> verificarUsuario($correo, $contraseña);
    if($bandera){
            $_SESSION['usuario'] = $correo;
            header("Location:panel_control.php");
    }else{
        $error .= "<li>Los datos son incorrectos</li>";
        header("Location:login.php?error=".$error);
    }


?>