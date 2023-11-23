<?php
    // con este codigo se enlazan los datos de las paginas mencionadas 👇
    require_once("c://wamp64/www/login/view/head/head.php");

    // si hay un usuario logueado actualmete lo envia al panel de control
    if(!empty($_SESSION['usuario'])){
        header("Location:panel_control.php");
    }

    
?>
<!-- ICONO PUERTA -->
    <div class="fondo-login">
        <div class="icon">
            <a href="/login/index.php">
                <i class="bi bi-door-open-fill door-icon"></i>
            </a>
        </div>

        <!-- TITULO -->
        <div class="titulo">
            Inicia Sesión en BodyScan
        </div>

        
    <!-- FORMULARIO -->
    <section class="container login ">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-6">
                <form action="verificar.php" method="post" class="" autocomplete ="off" >
                    <label for="exampleInputEmail1" class="form-label">Correo Electrónico</label>
                    <input class="form-control form-control-sm inputs" type="email" name="correo" id="exampleInputEmail1" aria-describedby="emailHelp">
                    

           <div class="mb-3">
             <label for="password" class="form-label">Contraseña</label>
                <div class="box-eye container">
                     <i id="eyepassword" class="bi bi-eye-fill   changePassword box-eye-icon" onclick="mostrarPass('password','eyepassword')" ></i>
                </div>
             <input class="form-control form-control-sm inputs inputpass" type="password" name="password" id="password">
           </div>

              <!-- MUESTRA LOS MENSAJES DE ERROR POR PANTALLA -->
           <?php if(!empty($_GET['error'])): ?>
                <div id="alertError" style="margin:auto;" class="alert alert-danger mb-2" role="alert">
                <?= !empty($_GET['error']) ? $_GET['error'] : ""   ?>
                </div>
             <?php endif; ?>

            <button type="submit" class="btnLogin">Inicia Sesión</button>
        </form> 
        </div>
        </div>
    </section>
         
    </div>

    <section class="container">
        <div class="redirect text-center mt-3 col-sm-10 col-md-3">
            ¿Nuevo en BodyScan? <a class="redirect-link" href="signup.php" style="text-decoration:none">Crea una cuenta</a>
        </div>
    </section>
    

<?php
    // con este codigo se enlazan los datos de las paginas mencionadas 👇
    require_once("c://wamp64/www/login/view/head/footer.php");
?>



