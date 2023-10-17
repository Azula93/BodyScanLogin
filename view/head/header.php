<?php
    // con este codigo se enlazan los datos de las paginas mencionadas 👇
    require_once("c:/wamp64/www/login/view/head/head.php");
    
?>

   <!-- este codigo php sirve para hacer el cambio del navbar segun el usuario es decir esta primera vista es para usuarios que 
            NO estan logueados, pueden ver el boton de iniciar sesion y   registrarse -->
            <?php if(empty($_SESSION['usuario'])) : ?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg  bg-trasnparent fixed-top">
        <div class="container">
            <!-- LOGO -->
          <a class="navbar-brand fs-4 nav-link linkInicio" href="/login/index.php">Body Scan</a>

          <!-- TOGGLE Btn -->
          <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- SideBar -->
          <div class="sidebar offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

            <!-- Sidebar Header -->
            <div class="offcanvas-header text-black border-bottom">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menú</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

           
            <!-- SideBar body -->
            <div class="offcanvas-body d-flex flex-column p-4 p-lg-0">

              <ul class="navbar-nav justify-content-center align-items-center fs-5 flex-grow-1 pe-3">

                <li class=" nav-item mx-2">
                  <a class="nav-link active" aria-current="page" href="/login/index.php"><i class="bi bi-house-door-fill"></i></a>
                </li>

                <li class=" nav-item mx-2">
                  <a class="nav-link" href="/login/view/PHPpages/medidas.php">Antropometría</a>
                </li>

                <!-- <li class=" nav-item mx-2">
                  <a class="nav-link" href="/Pages/valNutricional.html">Valoracion Nutricional</a>
                </li>

                  <li class=" nav-item mx-2">
                    <a class="nav-link" href="/Pages/vo2max.html">Vo2Máx</a>
                </li> -->

                <li class=" nav-item mx-2">
                    <a class="nav-link" href="/login/view/PHPpages/blog.php">Blog</a>
                </li> 
                <li class=" nav-item mx-2">
                <a class=" boton" href="/login/view/home/login.php">Inicia Sesión</a>
                </li>
                <li class=" nav-item mx-2">
                <a class=" boton" href="/login/view/home/signup.php">Regístrate</a>
                </li>
              </ul>
               
            </div>

            <?php else : ?>

              <!-- Navbar -->
            <nav class="navbar navbar-expand-lg  bg-trasnparent fixed-top">
                    <div class="container">
                        <!-- LOGO -->
                      <a class="navbar-brand fs-4 nav-link linkInicio" href="/login/view/home/panel_control.php">Body Scan</a>

                      <!-- TOGGLE Btn -->
                      <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>

                      <!-- SideBar -->
                      <div class="sidebar offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

                        <!-- Sidebar Header -->
                        <div class="offcanvas-header text-black border-bottom">
                          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menú</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                            <!-- SideBar body -->
                            <div class="offcanvas-body d-flex flex-column p-4 p-lg-0">

                                <ul class="navbar-nav justify-content-center align-items-center fs-5 flex-grow-1 pe-3">

                                  <li class=" nav-item mx-2">
                                    <a class="nav-link active" aria-current="page" href="/login/view/home/panel_control.php"><i class="bi bi-house-door-fill"></i></a>
                                  </li>

                                  <li class=" nav-item mx-2">
                                    <a class="nav-link" href="/login/view/PHPpages/medidas.php">Antropometría</a>
                                  </li>

                                  <li class=" nav-item mx-2">
                                    <a class="nav-link" href="/login/view/PHPpages/valNut.php">Valoracion Nutricional</a>
                                  </li>

                                    <li class=" nav-item mx-2">
                                      <a class="nav-link" href="/login/view/PHPpages/vo2max.php">Vo2Máx</a>
                                  </li>

                                  <li class=" nav-item mx-2">
                                      <a class="nav-link" href="/login/view/PHPpages/blog.php">Blog</a>
                                  </li> 
                                  <li class=" nav-item mx-2">
                                  <a class=" boton" href="/login/view/home/logout.php">Cerrar Sesión</a>
                                  </li>

                                </ul>
                              </div>
                              <?php endif ?>

                      </div>
                    </div> 
                  </nav>
                  <!-- FIN NAVBAR -->
                  <div class="fondo">

