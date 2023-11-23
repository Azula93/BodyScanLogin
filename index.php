<?php
    // con este codigo se enlazan los datos de las paginas mencionadas 👇
    require_once("c:/wamp64/www/login/view/head/header.php");

?>
         <!-- CARDS DE LA PAG PRINCIPAL NO TIENE LOS LINKS AL CONTENIDO -->
         <?php if(empty($_SESSION['usuario'])) : ?>
    <main>
        <section class="imgPpal container d-flex justify-content-center align-items-center">
          <img class=" img img-fluid img-title" src="/login/assets/logoAzul.png" alt="">
        </section>

        <!-- INICIO cards -->

        <section class="informative-cards">

          <div class="container">
            <div class="row">
              <div class="col-md-3 col-lg-4 mb-4">
                <div class="card mx-auto">
                  <div class="card-image">
                    <img class="card-image-1 img-fluid" src="/login/assets/img (7).svg" alt="">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Indices Antropometricos</h5>
                    <p class="card-text">Realiza la evaluación de los índices antropométricos básicos, como el IMC  y el ICC. 
                      Estos índices te permitirán estimar tu estado de salud general, evaluar el riesgo cardiovascular y determinar tu peso ideal.
                    </p>
                    <a href="/login/view/PHPpages/medidas.php" class="card-button d-block mx-auto d-block mx-auto">Ver más</a>
                  </div>
                </div>
              </div>


              <div class="col-md-3 col-lg-4 mb-4">
                <div class="card">
                  <div class="card-image">
                    <img class="card-image-1 img-fluid" src="/login/assets/img(20).svg" alt="">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Valoración nutricional</h5>
                    <p class="card-text">Calcula tu tasa metabólica basal y determina tus necesidades nutricionales diarias de proteínas, carbohidratos, grasas y micronutrientes utilizando nuestra calculadora de calorias.
                    </p>
                    <a href="/login/view/home/signup.php" class="card-button d-block mx-auto d-block mx-auto">Ver más</a>
                  </div>
                </div>
              </div>

              <div class="col-md-3 col-lg-4 mb-4">
                <div class="card">
                  <div class="card-image">
                    <img class="card-image-1 img-fluid" src="/login/assets/img(21).svg" alt="">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Vo2 Máximo</h5>
                    <p class="card-text">
                      Calcula la máxima cantidad de oxígeno que puedes utilizar durante el ejercicio intenso 
                      y continuo, lo que refleja tu capacidad aeróbica y resistencia física. <br>
                      Calcula tu Vo2 Máximo y tus METS ! </p>
                    <a href="/login/view/home/signup.php" class="card-button d-block mx-auto d-block mx-auto">Ver más</a>
                  </div>
                </div>
              </div>


              <div class="col-md-3 col-lg-4 mb-4">
                <div class="card">
                  <div class="card-image">
                    <img class="card-image-1 img-fluid" src="/login/assets/img (4).svg" alt="">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Blog</h5>
                    <p class="card-text text-justify">Aprende cómo distribuir los alimentos en tu plato utilizando la guía nutricional del ICBF. 
                      En esta guía, encontrarás los porcentajes recomendados por grupo alimenticio que debes incluir en tus comidas.
                    </p>
                    <a href="/login/view/PHPpages/blog.php" class="card-button d-block mx-auto d-block mx-auto">Ver más</a>
                  </div>
                </div>
              </div>
        </div>
        <div>
        </section>
    <!-- Fin cards -->


  <!-- CARDS CUANDO EL USUARIO INICIA SESION TIENE LOS LINKS AL CONTENIDO -->
  <?php else : ?>
    <main>
        <section class="imgPpal container d-flex justify-content-center align-items-center">
          <img class=" img img-fluid img-title" src="/login/assets/logoSinFondo.png" alt="">
        </section>

        <!-- INICIO cards -->

        <section class="informative-cards">

          <div class="container">
            <div class="row">
              <div class="col-md-3 col-lg-4 mb-4">
                <div class="card mx-auto">
                  <div class="card-image">
                    <img class="card-image-1 img-fluid" src="/login/assets/img (7).svg" alt="">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Indices Antropometricos</h5>
                    <p class="card-text text-justify">Realiza la evaluación de los índices antropométricos básicos, como el IMC  y el ICC. 
                      Estos índices te permitirán estimar tu estado de salud general, evaluar el riesgo cardiovascular y determinar tu peso ideal.
                    </p>
                    <a href="/login/view/PHPpages/medidas.php" class="card-button d-block mx-auto d-block mx-auto">Ver más</a>
                  </div>
                </div>
              </div>


              <div class="col-md-3 col-lg-4 mb-4">
                <div class="card">
                  <div class="card-image">
                    <img class="card-image-1 img-fluid" src="/login//assets/img(20).svg" alt="">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Valoración nutricional</h5>
                    <p class="card-text text-justify">Calcula tu tasa metabólica basal y determina tus necesidades nutricionales diarias de proteínas, carbohidratos, grasas y micronutrientes utilizando nuestra calculadora de calorias
                    </p>
                    <a href="/login/view/PHPpages/valNut.php" class="card-button d-block mx-auto d-block mx-auto">Ver más</a>
                  </div>
                </div>
              </div>

              <div class="col-md-3 col-lg-4 mb-4">
                <div class="card">
                  <div class="card-image">
                    <img class="card-image-1 img-fluid" src="/login//assets/img(21).svg" alt="">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Vo2 Máximo</h5>
                    <p class=" text-justify">
                      El VO2 máximo es la máxima cantidad de oxígeno que una persona puede utilizar durante el ejercicio intenso 
                      y continuo, lo que refleja su capacidad aeróbica y resistencia física. <br>
                      Calcula tu Vo2 Máximo y tus METS ! </p>
                    <a href="/login/view/PHPpages/vo2max.php" class="card-button d-block mx-auto d-block mx-auto">Ver más</a>
                  </div>
                </div>
              </div>


              <div class="col-md-3 col-lg-4 mb-4">
                <div class="card">
                  <div class="card-image">
                    <img class="card-image-1 img-fluid" src="/login//assets/img (4).svg" alt="">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Blog</h5>
                    <p class="card-text text-justify">Aprende cómo distribuir los alimentos en tu plato utilizando la guía nutricional del ICBF. 
                      En esta guía, encontrarás los porcentajes recomendados por grupo alimenticio que debes incluir en tus comidas
                    </p>
                    <a href="/login/view/PHPpages/blog.php" class="card-button d-block mx-auto d-block mx-auto">Ver más</a>
                  </div>
                </div>
              </div>
        </div>
        <div>
        </section>
    <!-- Fin cards -->
    <?php endif ?>

    <!-- BOTON SUBIR -->
    <section class="scroll"> 
      <a id="scroll-to-top" href="#" class=" back-to-top d-block d-lg-none" role="button">
        <i class="bi bi-arrow-up-circle-fill"></i></a>
    </section>

<?php
    // con este codigo se enlazan los datos de las paginas mencionadas 👇
    require_once("c:/wamp64/www/login/view/head/footer.php");

?>