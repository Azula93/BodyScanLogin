<?php
    // con este codigo se enlazan los datos de las paginas mencionadas 👇
    require_once("c:/wamp64/www/login/view/head/head.php");

    // si hay un usuario logueado actualmete lo envia al panel de control
    if(!empty($_SESSION['usuario'])){
        header("Location:panel_control.php");
    }

    
?>

    <div class="fondo-login">
        <div class="icon">
            <a href="/login/index.php">
                <i class="bi bi-door-open-fill door-icon"></i>
            </a>
        </div>
        <div class="titulo">
            Inicia Sesión en BodyScan
        </div>

        <form action="verificar.php" method="post" class="col-3 login" autocomplete ="off" >
           <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
                <input type="email" name="correo" class="form-control inputs" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

           <div class="mb-3">
             <label for="password" class="form-label">Contraseña</label>
                <div class="box-eye">
                     <i id="eyepassword" class="bi bi-eye-fill   changePassword box-eye-icon" onclick="mostrarPass('password','eyepassword')" ></i>
                </div>
             <input type="password" name="password" class="form-control inputs" id="password">
           </div>

              <!-- MUESTRA LOS MENSAJES DE ERROR POR PANTALLA -->
           <?php if(!empty($_GET['error'])): ?>
                <div id="alertError" style="margin:auto;" class="alert alert-danger mb-2" role="alert">
                <?= !empty($_GET['error']) ? $_GET['error'] : ""   ?>
                </div>
             <?php endif; ?>

            <button type="submit" class="btn btn-primary btnLogin">Inicia Sesión</button>
  
        </form>    
    </div>
        <div class="redirect col-3">
            ¿Nuevo en BodyScan? <a href="signup.php" style="text-decoration:none">Crea una cuenta</a>
        </div>
    

<?php
    // con este codigo se enlazan los datos de las paginas mencionadas 👇
    require_once("c:/wamp64/www/login/view/head/footer.php");
?>



