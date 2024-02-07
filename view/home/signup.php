<?php


    // con este codigo se enlazan los datos de las paginas mencionadas 👇
    require_once("c:/wamp64/www/login/view/head/head.php");

     // si hay un usuario logueado actualmete lo envia al panel de control, osea inicia sesion
     if(!empty($_SESSION['usuario'])){
        header("Location:panel_control.php");
    }
?>
    <!-- ICONO PUERTA -->
    <div class="fondo-loginSU">
        <div class="icon text-center p-3">
            <a href="/login/index.php">
                <i class="bi bi-door-open-fill door-icon"></i>
            </a>
        </div>
        <!-- TITULO -->
        <div class="text-center fs-4 p-3">Crea una cuenta en BodyScan</div>

        <!-- FORMULARIO -->
        <section class="fs-3 container border border-primary rounded p-3 col-12 col-md-6 mb-3">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-10">
                    <form action="store.php" method="POST" class="" autocomplete ="off" >

            <div class="mb-3">
                <label for="nombreUsuario" class="form-label">Nombre Completo</label>
                <!-- El "VALUE" hace que si el usuario envia el formulario con campos vacios los datos queden guardas en el campo asi se refresque la pag -->
                <input type="text" name="nombreUsuario" value ="<?= (!empty($_GET['nombreUsuario'])) ? $_GET['nombreUsuario'] : "" ?>" class="form-control rounded form-control-lg mb-2 w-100" id="nombreUsuario" >
            </div>

           <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
                <input type="email" name="correo" value ="<?= (!empty($_GET['correo'])) ? $_GET['correo'] : "" ?>" class="form-control rounded form-control-lg mb-2 w-100" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

           <div class="mb-3 position-relative">
             <label for="password" class="form-label">Contraseña</label>
                <!-- EN EL "VALUE" se valida si esta vacio para luego mostrar el mensaje de error si es necesario -->
             <input type="password" name="password" value ="<?= (!empty($_GET['password'])) ? $_GET['password'] : "" ?>" class="form-control rounded form-control-lg mb-2 w-100" id="password">
                 <div class="box-eyeSU">
                    <i id="eyepassword" class="bi bi-eye-fill changePassword box-eye-icon" onclick="mostrarPass('password','eyepassword')" ></i>
                </div>
           </div>

           <div class="mb-3 position-relative">
             <label for="password" class="form-label">Repite la Contraseña</label>
             <input type="password" name="confirmPass" value ="<?= (!empty($_GET['confirmPass'])) ? $_GET['confirmPass'] : "" ?>" class="form-control rounded form-control-lg mb-2 w-100" id="password2">
                <div class="box-eyeSU">
                     <i id="eyepassword2" class="bi bi-eye-fill changePassword box-eye-icon" onclick="mostrarPass('password2','eyepassword2')" ></i>
                </div>
                <!-- EN EL "VALUE" se valida si esta vacio para luego mostrar el mensaje de error si es necesario -->
             
           </div>

           <!-- MUESTRA LOS MENSAJES DE ERROR POR PANTALLA -->
           <?php if(!empty($_GET['error'])): ?>
                <div id="alertError" style="margin:auto;" class="alert alert-danger mb-2" role="alert">
                <?= !empty($_GET['error']) ? $_GET['error'] : "" ?>
                </div>
             <?php endif; ?>
            <!-- MUESTRA LOS MENSAJES DE ERROR POR PANTALLA -->

            <div class="d-flex align-items-center justify-content-center">
                <button type="submit" class="btnSU">CREAR CUENTA<button>                   
            </div>
        </form>    
    </div>
    </div>
    </div>
    </section>

    <section class="container border border-primary rounded p-3 col-12 col-md-6 mb-3 text-center fs-4">
        <div class="">
            ¿Tienes cuenta? <a class="text-primary fs-4" href="login.php" style="text-decoration:none">Inicia Sesión</a>
        </div>
    </section>

<?php
    // con este codigo se enlazan los datos de las paginas mencionadas 👇
    require_once("c:/wamp64/www/login/view/head/footer.php");
?>



