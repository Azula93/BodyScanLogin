<?php


    // con este codigo se enlazan los datos de las paginas mencionadas 👇
    require_once("c:/wamp64/www/login/view/head/head.php");

     // si hay un usuario logueado actualmete lo envia al panel de control, osea inicia sesion
     if(!empty($_SESSION['usuario'])){
        header("Location:panel_control.php");
    }
?>

    <div class="fondo-loginSU">
        <div class="icon">
            <a href="/login/index.php">
                <i class="bi bi-door-open-fill door-icon"></i>
            </a>
        </div>
        <div class="titulo">
            Crea una cuenta en BodyScan
        </div>

        <form action="store.php" method="POST" class="col-3 loginSU" autocomplete ="off" >

            <div class="mb-3">
                <label for="nombreUsuario" class="form-label">Nombre Completo</label>
                <!-- El "VALUE" hace que si el usuario envia el formulario con campos vacios los datos queden guardas en el campo asi se refresque la pag -->
                <input type="text" name="nombreUsuario" value ="<?= (!empty($_GET['nombreUsuario'])) ? $_GET['nombreUsuario'] : "" ?>" class="form-control inputs" id="nombreUsuario" >
            </div>

           <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
                <input type="email" name="correo" value ="<?= (!empty($_GET['correo'])) ? $_GET['correo'] : "" ?>" class="form-control inputs" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

           <div class="mb-3">
             <label for="password" class="form-label">Contraseña</label>
                <div class="box-eye">
                     <i id="eyepassword" class="bi bi-eye-fill   changePassword box-eye-icon" onclick="mostrarPass('password','eyepassword')" ></i>
                </div>

                <!-- EN EL "VALUE" se valida si esta vacio para luego mostrar el mensaje de error si es necesario -->
             <input type="password" name="password" value ="<?= (!empty($_GET['password'])) ? $_GET['password'] : "" ?>" class="form-control inputs" id="password">
           </div>

           <div class="mb-3">
             <label for="password" class="form-label">Repite la Contraseña</label>
                <div class="box-eye">
                     <i id="eyepassword2" class="bi bi-eye-fill   changePassword box-eye-icon" onclick="mostrarPass('password2','eyepassword2')" ></i>
                </div>
                <!-- EN EL "VALUE" se valida si esta vacio para luego mostrar el mensaje de error si es necesario -->
             <input type="password" name="confirmPass" value ="<?= (!empty($_GET['confirmPass'])) ? $_GET['confirmPass'] : "" ?>" class="form-control inputs" id="password2">
           </div>

           <!-- MUESTRA LOS MENSAJES DE ERROR POR PANTALLA -->
           <?php if(!empty($_GET['error'])): ?>
                <div id="alertError" style="margin:auto;" class="alert alert-danger mb-2" role="alert">
                <?= !empty($_GET['error']) ? $_GET['error'] : ""   ?>
                </div>
             <?php endif; ?>

            <button type="submit" class="btnSU">CREAR CUENTA</button>
  
        </form>    
    </div>
        <div class="redirectSU col-3">
            ¿Tienes cuenta? <a class="redirectSU-link" href="login.php" style="text-decoration:none">Inicia Sesión</a>
        </div>
    

<?php
    // con este codigo se enlazan los datos de las paginas mencionadas 👇
    require_once("c:/wamp64/www/login/view/head/footer.php");
?>



