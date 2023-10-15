<?php   

    require_once("c:/wamp64/www/login/controller/homeController.php");
    $obj = new homeController();
    $correo = $_POST['correo'];
    $contraseña = $_POST['password'];
    $confirmarContraseña = $_POST['confirmPass'];
    $error = "";

    // este if verifica si los campos password, correo estan vacios 
    if(empty($correo) || empty($contraseña) || empty($confirmarContraseña)){
        // .= sirve para concatenar 
        $error .= "<li>Completa los campos</li>";

        header("Location:signup.php?error=".$error."&&correo=".$correo."&&contraseña=".$contraseña."&&confirmarContraseña=".$confirmarContraseña);
        
    } else if($correo && $contraseña && $confirmarContraseña){
        if($confirmarContraseña === $confirmarContraseña){
           if ($obj -> guardarUsuario($correo,$contraseña) == false){
            $error .= "<li>El correo ya se está registrado</li>";
            header("Location:signup.php?error=".$error."&&correo=".$correo."&&contraseña=".$contraseña."&&confirmarContraseña=".$confirmarContraseña);
           }else{
            // si todo sale bien y no hay error pasa a este else que llevara al usuario al login 
                header("Location:login.php");
           }
        }else{
            $error .= "<li>Las contraseñas no coinciden</li>";
            header("Location:signup.php?error=".$error."&&correo=".$correo."&&contraseña=".$contraseña."&&confirmarContraseña=".$confirmarContraseña);
        }
    }

?>