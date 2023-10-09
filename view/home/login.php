<?php
    // con este codigo se enlazan los datos de las paginas mencionadas 👇
    require_once("c://xampp/htdocs/login/view/head/head.php");
?>

<div class="container-fluid">
    <div class="row no-gutter">
        <!-- The image half -->
        <div class="col-md-6 d-none d-md-flex bg-image"></div>


        <!-- The content half -->
        <div class="col-md-6 bg-light">
            <div class="login d-flex align-items-center py-5">

                <!-- Demo content-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-7 mx-auto">
                            <h3 class="display-4">Inicia Sesión</h3>
                            <!-- <p class="text-muted mb-4">Create a login split page using Bootstrap 4.</p> -->
                            <form action="verificar.php" method="POST" class="col-3 login" autocomplete="off" >
                                <div class="form-group mb-3">
                                    <input id="inputEmail" name="correo" type="email" placeholder="Correo Electronico" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                </div>
                                <div class="form-group mb-3">
                                    <input id="inputPassword" name="contraseña" type="password" placeholder="Contraseña" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                                    <label for="customCheck1" class="custom-control-label">Recuerda mis datos</label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Iniciar Sesión</button>

                                <!-- <div class="text-center d-flex justify-content-between mt-4">
                                    <p>¿Nuevo en BodyScan? <a href="signup.php" class="font-italic text-muted"> 
                                        <u>Crea una Cuenta</u>
                                    </a>
                                    </p>
                                </div> -->
                            </form>
                        </div>
                    </div>
                </div><!-- End -->

            </div>
        </div><!-- End -->

    </div>
</div>

   

<?php
    // con este codigo se enlazan los datos de las paginas mencionadas 👇
    require_once("c://xampp/htdocs/login/view/head/footer.php");
?>
