
  <!-- este codigo php sirve para hacer el cambio del navbar segun el usuario es decir esta primera vista es para usuarios que 
            NO estan logueados, pueden ver solo los links que estan habilitados para usuarios free -->
            <?php if(empty($_SESSION['usuario'])) : ?>


<!-- Se cortan las etiquetas de cierre para que el codigo
 inicie en una pag y finalice en otra -->
</div>
     <!-- Incio FOOTER -->
     <footer class="fixed-bottom bg-dark pt-5 pb-4 text-center">
      <div class="container-fluid text-center text-md-start justify-content-lg-between ">
        <div class="row text-center text-md-start">
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold text-primary"> <b>Body Scan</b></h6>
            <hr class="mb-4 ">
            <p class="text-white">
              Te brindamos los datos que necesitas para mejorar tu salud y bienestar. 
              Creemos en la importancia de entender tus medidas corporales para tomar decisiones informadas
               sobre tu estilo de vida y dieta. Queremos ofrecerte una experiencia precisa 
               y amigable para que puedas alcanzar tus metas de salud.
            </p>
          </div>

          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold text-primary">
              <b>Navegación</b></h6>
              <hr class="mb-4">
              <p>
                <a href="/login/view/home/login.php" class="">Tu cuenta</a>
              </p>
              <p>
                <a href="/login/view/PHPpages/blog.php" class="">Blog</a>
              </p>
              <p>
                <a href="/login/view/PHPpages/medidas.php" class="">Medidas Antropometricas</a>
              </p>

              <!-- <p>
                <a href="/login/view/PHPpages/valNut.php" class="">Valoración Nutricional</a>
              </p>

              <p>
                <a href="/login/view/PHPpages/vo2max.php" class="">Vo2Máx</a>
              </p> -->
              
          </div>

          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold text-primary">
             <b>Acerca de nosotros</b></h6>
              <hr class="mb-4">
              <p>
                <a href="/login/view/PHPpages/aboutUs.php" class="">  ¿Quienes somos?</a>
              </p>
              <p>
                <a href="/login/view/PHPpages/politica_privacidad.php" class="">Politica de privacidad</a>
              </p>
              <p>
                <a href="#" class="">Manejo de Cuenta</a>
              </p>
              <p>
                <a href="#" class="">Ayuda</a>
              </p>
          </div>

          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold text-primary">
              <b>Contáctanos</b></h6>
              <hr class="mb-4">
              <p class="">
                <a href="#"><li class="fas fa-home me-3 "></li>Cali - Colombia</p></a>

              <p class="">
               <a href="mailto:azuladev@gmail.com"> <li class="fas fa-envelope me-3"></li>info@bodyscan.com</a>
              </p>

              <p class="">
               <a href="tel:3183348608"> <li class="fas fa-phone me-3"></li>Llamanos!</a>
              </p>
              
          </div>
            <hr class="mb-4">

            <div class=" mb-2 ">
              <p class="text-center text-white">
                Copyright Todos los derechos reservados
                <a href="#">
                  <strong class="azuladev">AzulaDev</strong>
                </a>
              </p>
            </div>

            <div class="d-flex align-items-center justify-content-center">
              <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                  <a href="#" class="text-light">
                    <i class="fab fa-facebook"></i>
                  </a>
                </li>

                <li class="list-inline-item">
                  <a href="#" class="text-light">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>

                <li class="list-inline-item">
                  <a href="#" class="text-light">
                    <i class="fab fa-youtube"></i>
                  </a>
                </li>

                <li class="list-inline-item">
                  <a href="#" class="text-light">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>

              </ul>

            </div>

        </div>

      </div>

      <?php else : ?>

        <footer class=" bg-dark pt-5 pb-4 text-center">
      <div class="container-fluid text-center text-md-start justify-content-lg-between ">
        <div class="row text-center text-md-start">
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold text-primary"> <b>Body Scan</b></h6>
            <hr class="mb-4 ">
            <p class="text-white">
              Te brindamos los datos que necesitas para mejorar tu salud y bienestar. 
              Creemos en la importancia de entender tus medidas corporales para tomar decisiones informadas
               sobre tu estilo de vida y dieta. Queremos ofrecerte una experiencia precisa 
               y amigable para que puedas alcanzar tus metas de salud.
            </p>
          </div>

          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold text-primary">
              <b>Navegación</b></h6>
              <hr class="mb-4">
              <p>
                <a href="/login/view/home/login.php" class="">Tu cuenta</a>
              </p>
              <p>
                <a href="/login/view/PHPpages/blog.php" class="">Blog</a>
              </p>
              <p>
                <a href="/login/view/PHPpages/medidas.php" class="">Medidas Antropometricas</a>
              </p>

              <p>
                <a href="/login/view/PHPpages/valNut.php" class="">Valoración Nutricional</a>
              </p>

              <p>
                <a href="/login/view/PHPpages/vo2max.php" class="">Vo2Máx</a>
              </p>
              
          </div>

          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold text-primary">
             <b>Acerca de nosotros</b></h6>
              <hr class="mb-4">
              <p>
                <a href="/login/view/PHPpages/aboutUs.php" class="">  ¿Quienes somos?</a>
              </p>
              <p>
                <a href="/login/view/PHPpages/politica_privacidad.php" class="">Politica de privacidad</a>
              </p>
              <p>
                <a href="#" class="">Manejo de Cuenta</a>
              </p>
              <p>
                <a href="#" class="">Ayuda</a>
              </p>
          </div>

          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold text-primary">
              <b>Contáctanos</b></h6>
              <hr class="mb-4">
              <p class="">
                <a href="#"><li class="fas fa-home me-3 "></li>Cali - Colombia</p></a>

              <p class="">
               <a href="mailto:azuladev@gmail.com"> <li class="fas fa-envelope me-3"></li>info@bodyscan.com</a>
              </p>

              <p class="">
               <a href="tel:3183348608"> <li class="fas fa-phone me-3"></li>Llamanos!</a>
              </p>
              
          </div>
            <hr class="mb-4">

            <div class=" mb-2 ">
              <p class="text-center text-white">
                Copyright Todos los derechos reservados
                <a href="#">
                  <strong class="azuladev">AzulaDev</strong>
                </a>
              </p>
            </div>

            <div class="d-flex align-items-center justify-content-center">
              <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                  <a href="#" class="text-light">
                    <i class="fab fa-facebook"></i>
                  </a>
                </li>

                <li class="list-inline-item">
                  <a href="#" class="text-light">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>

                <li class="list-inline-item">
                  <a href="#" class="text-light">
                    <i class="fab fa-youtube"></i>
                  </a>
                </li>

                <li class="list-inline-item">
                  <a href="#" class="text-light">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
              </ul>
            </div>
            <?php endif ?>
        </div>
      </div>
    </footer>
    <!-- FIN FOOTER -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="/login/JS/main.js"></script>
    <script src="/login/JS/imc.js"></script>
    <script src="/login/JS/icc.js"></script>
    <script src="/login/JS/btnarriba.js"></script>
    <script src="/login/JS/ValoracionNut.js"></script>
    <script src="/login/JS/vo2.js"></script>
    <script src="/login/JS/formulario.js"></script>
    <script src="/login/JS/404.js"></script>
  </body>
</html>