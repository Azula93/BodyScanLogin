<?php
    // con este codigo se enlazan los datos de las paginas mencionadas 👇
    require_once("c:/wamp64/www/login/view/head/header.php");

?>
         <!-- CARDS DE LA PAG PRINCIPAL NO TIENE LOS LINKS AL CONTENIDO -->
         <?php if(empty($_SESSION['usuario'])) : ?>
    <main>
      <!-- LOGO -->
        <!-- <section class="container d-flex justify-content-center align-items-center">
          <img class=" img-fluid w-75" src="/login/assets/banner.jpg" alt="">
        </section> -->

        <!-- SLIDER -->
          <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">

              <div class="carousel-item active" data-bs-interval="10000">
                <a href="/login/view/PHPpages/medidas.php">
                <img src="/login/assets/banner.svg" class="d-block w-100" alt="humanBodyImg"></a>
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="txtSlider">Indices Antropometricos</h5>
                  <p class="txtSlider" >Realiza la evaluación de los índices antropométricos básicos, como el IMC y el ICC</p>
                </div>
              </div>

              <div class="carousel-item" data-bs-interval="2000">
                <a href="/login/view/home/login.php">
                <img src="/login/assets/banner(1).jpg" class="d-block w-100" alt="..."> </a>
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="txtSlider">Valoracion Nutricional</h5>
                  <p class="txtSlider">Calcula tu tasa metabólica basal y determina tus necesidades nutricionales diarias.</p>
                </div>
              </div>

              <div class="carousel-item"> 
                <a href="/login/view/home/login.php"> 
                <img src="/login/assets/banner3.svg" class="d-block w-100" alt="..."></a>
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="txtSlider">Vo2 Máximo</h5>
                  <p class="txtSlider">Calcula la máxima cantidad de oxígeno que puedes utilizar durante el ejercicio .</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        <!-- FIN SLIDER -->

        <!-- INICIO cards -->
        <!-- <section class="">
          <div class="container mt-4">
            <div class="row">
              <div class="col-md-4 mb-4">
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
              </div> -->


              <!-- <div class="col-md-4 mb-4">
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

              <div class="col-md-4 mb-4">
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
              </div> -->


              <!-- <div class="col-md-4 mb-4">
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
        </section> -->
    <!-- Fin cards -->

    <!-- BLOG -->
    <section class="intro" id="introduccion">
          <h2 class="intro-title">¿Qué es el plato saludable de la familia colombiana?</h2>
          <p class="intro-parrafo">Es el ícono de las Guías alimentarias, que nos ayuda a recordar
              los seis grupos de alimentos que debemos consumir durante el día
              para elegir una alimentación variada y saludable.
              Nuestro país ofrece una gran variedad de alimentos de estos seis
              grupos, por ello debemos aprovechar esta riqueza y diversidad. 
              </p>
        </section>

        <section class="GrAlimentos" id="grupos-de-alimentos">
            <h2 class="GrAlimentos-title">Grupos de Alimentos</h2>
            <img class="GrAlimentos-img" src="/login/assets/gruposAlimentos.png" alt="gruposalimentos">
            <img  class="GrAlimentos-img" src="/login/assets/promoverAlimentacion.png" alt="gruposalimentos">
        </section>

        <section class="cita">
          <blockquote cite="https://www.icbf.gov.co/system/files/cartilla_mi_plato_un_arcoiris_divertido_de_sabores.pdf">
            <a class = "cita" href="https://www.icbf.gov.co/system/files/cartilla_mi_plato_un_arcoiris_divertido_de_sabores.pdf" target="_blank" rel="noopener noreferrer">
              <cite>Imagenes Tomadas de cartilla mi plato un arcoiris divertido de sabores</cite>
            </a>
          </blockquote>
        </section>

        <section class="porciones" id="porciones-recomendadas">
            <h2 class="porciones-title">Plato saludable de la Familia Colombiana</h2>
            <p class="porciones-parrafo">El Plato saludable de la Familia Colombiana nos ayuda a elegir una alimentación variada.
                Nos indica que en cada tiempo de comida, se deben incluir alimentos de todos los grupos
                o su mayoría, en cantidades o porciones adecuadas. <br>
                Por otra parte, los alimentos representados en el Plato saludable de la Familia Colombiana nos
                invitan a comer más alimentos frescos y menos alimentos procesados industrialmente, ya
                que estos pueden contener azúcares, sodio y grasa añadidos, que los hacen poco saludables.</p>

                <img  class="porciones-img" src="/login/assets/platoSaludable.png" alt="platosaludable">

                <section class="cita">
                  <blockquote cite="https://www.icbf.gov.co/sites/default/files/manual_facilitadores_gaba.pdf">
                    <a  class = "cita"  href="https://www.icbf.gov.co/sites/default/files/manual_facilitadores_gaba.pdf" target="_blank" rel="noopener noreferrer">
                      <cite>Tomado de Manual Facilitadores GABA</cite>
                    </a>
                  </blockquote>
                </section>
                

                <img  class="porciones-img" src="/login/assets/porcionescarne.png" alt="platosaludable">

                <section class="cita">
                  <blockquote cite="https://www.icbf.gov.co/sites/default/files/manual_facilitadores_gaba.pdf">
                    <a class = "cita"  href="https://www.icbf.gov.co/sites/default/files/manual_facilitadores_gaba.pdf" target="_blank" rel="noopener noreferrer">
                      <cite>Tomado de Manual Facilitadores GABA</cite>
                    </a>
                  </blockquote>
                </section>

                <p class="porciones-p2">
                  Recomendación de número de intercambios de alimentos por grupo de alimentos por grupo de edad por día
                </p>

                <img  class="porciones-img" src="/login/assets/gralimentoporedad.png" alt="platosaludable">
                
                <section class="cita">
                  <blockquote cite="https://www.icbf.gov.co/sites/default/files/manual_facilitadores_gaba.pdf">
                    <a class = "cita"  href="https://www.icbf.gov.co/sites/default/files/manual_facilitadores_gaba.pdf" target="_blank" rel="noopener noreferrer">
                      <cite class = "citafinal">Fuente: Equipo académico del CTNGA, ICBF y FAO - 2013.</cite>
                    </a>
                  </blockquote>
                </section>
        </section>
        
           <!-- Botón "Volver arriba" -->
      <section class="scroll"> 
        <a id="scroll-to-top" href="#" class="back-to-top" role="button">
         <i class="bi bi-arrow-up-circle-fill"></i></a>
      </section> 

    <!-- FIN BLOG -->


  <!-- CARDS CUANDO EL USUARIO INICIA SESION TIENE LOS LINKS AL CONTENIDO -->
  <?php else : ?>
   <!--  <main>
        <section class="imgPpal container d-flex justify-content-center align-items-center">
          <img class=" img img-fluid img-title" src="/login/assets/logoSinFondo.png" alt="">
        </section>

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
    <?php endif ?> 
    

    <!-- BOTON SUBIR
    <section class="scroll"> 
      <a id="scroll-to-top" href="#" class=" back-to-top d-block d-lg-none" role="button">
        <i class="bi bi-arrow-up-circle-fill"></i></a>
    </section> -->

<?php
    // con este codigo se enlazan los datos de las paginas mencionadas 👇
    require_once("c:/wamp64/www/login/view/head/footer.php");
?>