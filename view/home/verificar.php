<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);


    require_once("c:/wamp64/www/login/controller/homeController.php");


    session_start();
    
    $obj = new homeController();
    $nombreUsuario = $obj ->limpiarnombreusuario($_POST['nombreUsuario']);
    $correo = $obj ->limpiarcorreo($_POST['correo']);
    $password = $obj ->limpiarcadena($_POST['password']);
    $bandera = $obj -> verificarUsuario($nombreUsuario,$correo, $password);
    if($bandera){
            $_SESSION['usuario'] = $correo;
            header("Location:panel_control.php");
            
    }else{
        $error .= "<li>Los datos son incorrectos</li>";
        header("Location:login.php?error=".$error);
    }


?>