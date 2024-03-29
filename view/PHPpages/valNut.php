<?php
    // con este codigo se enlazan los datos de las paginas mencionadas 👇
    require_once("c://wamp64/www/login/view/head/header.php");
?>
     <main>
      <section class="get-section pb-4">
        <section class="get-section-definicion">
          <h1 class="get-section-definicion-titulo text-center pt-3 pb-3">¿Qué es el GET?</h1>
            <p class="text-justify text-center ms-5 me-5 lh-base fs-3 pb-5"> El gasto energético total (GET) es la cantidad total de energía que una persona gasta en un día típico.
            El GET es importante porque proporciona una idea de la cantidad de calorías que una persona necesita consumir
             en un día para mantener su peso actual, perder peso o ganar peso, dependiendo de sus objetivos. 
             El conocimiento del (GET) también es esencial para planificar dietas y programas de ejercicio adecuados para alcanzar metas de salud y estado  físico.</p>
        </section>
      
        <section class="subtitle-get">
          <h2 class="subtitle-get-h2 text-center mt-5 pt-5 pb-3">Calcula tu GET</h2>
          <p class="fs-3 text-justify pb-5 pt-3">Para calcular tu GET ingresa los siguientes datos:</p>
        </section>

        <section class="infoGet">
          <section class="GetRadioBtn">
            <div class="GetRadioBtn-1">
              <p class="infoGet-texto"> <b> Selecciona tu Sexo:</b></p>
                <div class="form-check fs-2">
                    <input class="form-check-input" type="radio" name="genero" value="mujer">
                    <label class="Rbtn form-check-label"> Femenino </label>
                </div>

                 <div class="form-check fs-2 pb-3 pt-2">
                    <input class="form-check-input" type="radio" name="genero" value="hombre">
                    <label class="Rbtn form-check-label"> Masculino</label>
                 </div>
            </div>
          </section>

           <section class="inputsGet">
             <div class="inputsGet-talla ">
                <label class="form-label " for="talla"><b>Talla en Cm: </b> </label>
                <input class="form-control  form-control-lg " type="number" id="talla" placeholder="170cm"  min="2" maxlength="3" pattern="^[0-9]+"  oninput="limitarNumero(this, 3)"> 
                <p id="errorMensajeTalla" style="color: crimson;"></p>
              </div>

              <div class="inputsGet-peso">
                <label class="form-label" for="peso"><b>Peso en Kg: </b></label>
                <input class="form-control form-control-lg " type="number" id="peso" placeholder="60kg"  min="2" maxlength="2" pattern="^[0-9]+"  oninput="limitarNumero(this, 2)"> 
                <p id="errorMensajePeso" style="color: crimson;"></p>
              </div>

              <div class="inputsGet-edad">
                <label class="form-label" for="edad"><b>Edad en años: </b></label>
                <input class="form-control form-control-lg " type="number" id="edad" placeholder="25"  min="1" maxlength="2" pattern="^[0-9]+"  oninput="limitarNumero(this, 2)"> 
                <p id="errorMensajeEdad" style="color: crimson;"></p>
              </div>
            </section>

            <section class="factorActividad">
              <h2 class="factorActividad-Title">Factor de la actividad Fisica</h2>

              <section class="factorActividad-RadioBtn">
                <p class="factorActividad-subtitle"> De las siguientes opciones elige cuantas veces por semana practicas deporte y/o actividad fisica</p>

                   <section class="factorActividad-btns">

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="factorActividad" value="Menos de 3 horas semanales">
                      <label class="Rbtn form-check-label">Menos de 3 horas semanales</label>
                    </div>

                    <div class="form-check"> 
                      <input class="form-check-input" type="radio" name="factorActividad" value="3 Horas semanales">
                      <label class="Rbtn form-check-label"> 3 Horas semanales</label>
                    </div>

                    <div class="form-check"> 
                      <input class="form-check-input" type="radio" name="factorActividad" value="6 Horas semanales"> 
                      <label class="Rbtn form-check-label">6 Horas semanales</label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="factorActividad" value="4-5 horas Diarias">
                      <label class="Rbtn form-check-label">4-5 horas Diarias</label>
                    </div>
                 </section>
                </section>
            </section>
        </section>
      </section>

      <section class="results">
        <section class="btnResultGet">
          <button class="card-button  px-3 py-3 mx-auto " type="button" id="mostrarSeleccion" onclick="calculoGet()">
            Calcular GET
          </button>
        </section>

            <section class="resultadoGet-section">
                 <span>
                    <p class="parrafoGet" ></p>
                    <p class="resultGet" id="opcionSeleccionada"></p>
                    <div class="numeroGet" id="resultadoGet"> </div>
                </span> 
            </section> 
        </section>

       <section class="Macro">

       <section class="Macro-info">
          <section >
            <h2 class="Macro-Title text-center pt-3 pb-3">Requerimiento de Macronutrientes Diario </h2>
          </section>

            <p class="Macro-parrafo lh-base"> Ahora que conoces tu GET podrás calcular tu requerimiento de macronutrientes diario en gramos, distribuidos en: 
              carbohidratos, proteinas y grasas. Selecciona una de las siguientes opciones según sea tu caso:     
            </p>

          <section class="DeporteRadioBtn">

            <div class="form-check DeporteRadioBtn-rbtns">
             <input class="form-check-input" type="radio" name="Deportista" value="Deportista">
              <label class="Rbtn form-check-label">Deportista</label>
            </div>

            <div class="form-check DeporteRadioBtn-rbtns">
             <input class="form-check-input" type="radio" name="Deportista" value="No deportista">
              <label class="Rbtn form-check-label">No deportista</label>
            </div>
          </section>
        </section>

          <section class="btnResultDeporte">
              <button class="btnResultDeporte-calc card-button  px-3 py-3 mx-auto btnResulReq" type="button" id="mostrarDeporte" onclick="macronutrientesDiarios()" >
                Calcular Requerimiento 👇
              </button>

            <section class="resultadoMacronut-section">
               <span>
                  <p class="parrafoMacronut" >  </p>
                  <p class="resultMacronut" id="opcionSeleccionada"></p>
                  <div class="numeroMacronut" id="resultadoMacronut"> </div>
              </span> 
            </section>

          

       <section class="dieta-section">
          <p class="dieta-section-parrafo">En este 👉 <a class="fs-3 text-primary" href="/Pages/blog.html">LINK</a> podrás obtener más información acerca de la dieta que debes seguir 🥕 </p>
        </section>
      </section>
      </section>

      <!-- Botón "Volver arriba" -->
       <section class="scroll"> 
       <a id="scroll-to-top" href="#" class="back-to-top" role="button">
        <i class="bi bi-arrow-up-circle-fill"></i></a>
       </section>
    
    </main>
    <!-- <script src="/login/JS/ValoracionNut.js"></script>
    <script type="module" src="/login/JS/btnarriba.js"></script> -->
    

    <?php
      // con este codigo se enlazan los datos de las paginas mencionadas 👇
      require_once("c://wamp64/www/login/view/head/footer.php");

    ?>