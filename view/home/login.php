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
        <div class="icon text-center p-3">
            <a href="/login/index.php">
                <i class="bi bi-door-open-fill door-icon"></i>
            </a>
        </div>
        <!-- TITULO -->
        <div class="text-center fs-4 p-3">Inicia Sesión en BodyScan</div>

    <!-- FORMULARIO -->
    <section class="container border border-primary rounded p-3 col-12 col-md-6 mb-3">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-10">
                <form action="verificar.php" method="post" class="" autocomplete ="off" >
                    <label for="exampleInputEmail1" class="form-label fs-3">Correo Electrónico</label>
                    <input class="form-control rounded form-control-lg mb-2 w-100 " type="email" name="correo" id="exampleInputEmail1" aria-describedby="emailHelp">
                    

           <div class="mb-3 position-relative">
             <label for="password" class="form-label fs-3">Contraseña</label>
             <input class="form-control rounded form-control-lg mb-2 w-100 " type="password" name="password" id="password">
            
             <div class="box-eye">
                    <i id="eyepassword" class="bi bi-eye-fill " onclick="mostrarPass('password','eyepassword')" ></i>    
             </div>
           </div>

              <!-- MUESTRA LOS MENSAJES DE ERROR POR PANTALLA -->
           <?php if(!empty($_GET['error'])): ?>
                <div id="alertError" style="margin:auto;" class="alert alert-danger mb-2" role="alert">
                <?= !empty($_GET['error']) ? $_GET['error'] : ""   ?>
                </div>
             <?php endif; ?>

            <div class="d-flex align-items-center justify-content-center">
                <button type="submit" class="btnLogin">Inicia Sesión</button>
            </div>
        </form> 
        </div>
        </div>
    </section>
         
    </div>

    <section class="container border border-primary rounded p-3 col-12 col-md-6 mb-3 text-center fs-4">
        <div class=" ">
            ¿Nuevo en BodyScan? <a class="text-primary fs-4" href="signup.php" style="text-decoration:none">Crea una cuenta</a>
        </div>
    </section>
    

<?php
    // con este codigo se enlazan los datos de las paginas mencionadas 👇
    require_once("c://wamp64/www/login/view/head/footer.php");
?>



