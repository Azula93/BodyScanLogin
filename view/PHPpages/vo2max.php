<?php
    // con este codigo se enlazan los datos de las paginas mencionadas 👇
    require_once("c://wamp64/www/login/view/head/header.php");

?>

    <main>

            <section class=" vo2-section ">
                <section class="vo2-section-titulos">
                    <h1 class="vo2-section-titleone">Vo2 Máximo</h1>
                    <p class="vo2-section-parrafo">El VO2 máximo o consumo máximo de oxígeno, es la cantidad máxima de oxígeno que una persona puede utilizar durante un ejercicio intenso y sostenido. Se utiliza como medida de la capacidad cardiovascular y la resistencia física de una persona, y es un indicador de su salud y condición física general. Un mayor VO2 máximo generalmente se asocia con una mejor capacidad aeróbica y cardiovascular.</p>
                    <h2 class="vo2-section-subtitle">Test de la Banca</h2>
                    <p class="vo2-section-parrafodos">Es una prueba de esfuerzo que mide la capacidad aeróbica del paciente, en donde por medio de formulas puede estimar el VO2 max, los MET´s y la expectativa de vida del paciente. </p>
                    <h5 class="vo2-section-subtitledos">Materiales:</h5>
                        <ol class="vo2-section-ol">
                          <li>Banca o escalon, sobre una superficie estable, de altura <b>mínima</b> de 30 cm y <b>máxima</b> de 50 cm</li>
                          <li>Cinta metrica o metro de modisteria </li>
                          <li>Cronómetro</li>
                          <li>Descargar la aplicación Metronomo Beats en el celular.</li>
                        </ol>
                </section>

            <section class="vo2-section-video ">
                <iframe class="vo2-section-video-iframe" width="460" height="215" src="https://www.youtube.com/embed/vEEVDZyIf9s?si=MUX7_6OzyCHMyULn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </section>

        <section class="indicaciones-section">
          <p class="indicaciones-section-p1"> <span class="indicaciones-section-p2">Indicaciones</span>
            <ul class="indicaciones-section-ul">
              <li>El paciente debe haber  desayunado, almorzado o comido con al menos 1 hora de anterioridad</li>
              <li>El paciente debe ser <b>mayor de 16 años</b> y <b>menor de 55 años</b></li>
            </ul>
        
            <span class="indicaciones-section-p3 text-danger">Contraindicaciones</span> <br>

            <span class="indicaciones-section-p4 text-warning">⚠️ NO PODRÁ PRESENTAR EL TEST DE LA BANCA 
              SI UD PRESENTA CUALQUIERA DE LAS SIGUIENTES PATOLOGÍAS ⚠️</span> 
            <ul class="indicaciones-section-ul2">
              <li>problemas cardiácos </li>
              <li>problemas coronarios</li>
              <li>soplos del corazon</li>
              <li>sufre dolores de pecho frecuentes</li>
              <li>hipoglicemia</li>
              <li>Anemia</li>
              <li>Hipertención</li>
              <li>Hipotención</li>
              <li>Problemas respiratorios</li>
              <li>Asma</li>
              <li>Osteocondritis</li>
              <li>Falta de aire</li>
              <li>Tendinopatias miembros inferiores </li>
              <li>Esguinces de rodilla en fase aguda</li>
              <li>Fracturas recientes </li>
              <li>Desmayos</li>
              <li>Epilepcia</li>
              <li>Mareos frecuentes</li>
              <li>Diabetes tipo I y II</li>
            </ul> 
            </p>

        </section>

        <section class="vo2-section-datos">
              <h2 class="ppm-section-title">Calcula tu Vo2 Máximo</h2>
                <p class="ppm-section-parrafodos">Calcula tu Vo2Máx a través del test de la banca, primero debes convertir los valores de <b>BPM a PPM</b>, ingresa en la siguiente casilla los datos de BPM</p>

                <section class="ppm-section-inputs">
                    <section class="ppm-section-input">
                        <label class="form-label" for="BPM">BPM: </label>
                        <input class="form-control" type="number" id="BPM" placeholder="PPM"  step="0.01" min="1"  maxlength="3" pattern="^[0-9]+"      oninput="limitarNumero(this, 3)"> 
                        <p id="errorMensajePPM" style="color: crimson;"></p>
                    </section>
                </section>

            <section class="ppm-section-input">
                <div class="H-section">
                    <p class="H-section-parrafo">Ingresa el dato de la altura del banco en Cm</p>
                    <label class="form-label" for="H">Altura de la Banca: </label>
                    <input class="form-control " type="number" id="H" placeholder="45cm"  step="0.01" min="1" maxlength="4" pattern="^[0-9]+"   oninput="limitarNumero(this, 2)"> 
                    <p id="errorMensajeH" style="color: crimson;"></p>
                </div>
            </section>
        </section>
        
            <section class="btnvo2">
                <button class=" btn btn-dark px-3 py-3 mx-auto" type="button" onclick="calculoVo2()">
                    Calcular Vo2 Máx
                </button>
            </section>
        

            <section class="resultadoVo2-section">
                 <span>
                    <p class="resultadoVo2-section-parrafoVo2" > <b>Tu Vo2 Máximo es:</b> </p>
                    <p class="resultadoVo2-section-resultVo2" id="numVo2"></p>
                    <div class="resultadoVo2-section-numeroVo2" id="resultadoVo2"> </div>
                </span> 
            </section>
          </section> 
            <hr>
            <section class="resultadoMets-section">
                <span class="resultadoMets-section-span">
                  <h2 class="resultadoMets-section-title">METS</h2>
                   <p class="resultadoMets-section-parrafo"> <b>los METs (Metabolic Equivalent of Task) </b> son una medida para cuantificar la intensidad del ejercicio en relación con el consumo de oxígeno 
                    y el gasto metabólico. <br> </p>
                    <p class="resultadoMets-section-parrafo2"> <b>Según tu Vo2Máx tus METS son:</b></p>
                   <p class="resultadoMets-section-resultMets" id="numMets"></p>
                   <div class="resultadoMets-section-numeroMets" id="resultadoMets"> </div>
                  </span>
           </section>
          </section>
            <hr>
           <section class="expectVida-section">
              <h2 class="expectVida-section-title">EXPECTATIVA DE VIDA</h2>
               <p class="expectVida-section-parrafo">Si quieres conocer tu <b>EXPECTATIVA DE VIDA</b> selecciona la cantidad de ejercicio que realizas </p>

                <section class="expectVida-section-radiobtn">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="expectvida" value="menos 3 v-s" id="menos3v-s">
                        <label class="Rbtn form-check-label" for="menos3v-s"> Menos de 3 veces por Semana</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="expectvida" value="mas 3 v-s">
                        <label class="Rbtn form-check-label"> 3 o más veces por Semana</label>
                    </div>
                </section>

           <section class="btnResultExpectvida">
                <button class="btn btn-dark px-3 py-3 mx-auto btnResultGet" type="button" id="mostrarSeleccion" onclick="ExpectativaVida()">
                    Calcula tu Expectativa de Vida 😲
                </button>
           </section>
       </section>

        <section class="expectVidaResult">
            <p class="expectVidaResult-result" id="numexpectVida"></p>
            <div class="expectVidaResult-numeroexpectVida" id="resultadoexpectVida"> </div>
        </section> 
        


    <section class="citas">
      <blockquote cite="https://www.linkedin.com/in/carlos-alejandro-lopez-alban-a7187956/?originalSubdomain=co">
        Las formulas e información contenida en esta pagina fueron tomadas del 
        <a class="citas-link" target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/carlos-alejandro-lopez-alban-a7187956/?originalSubdomain=co"><cite>Dr. Carlos Alejandro Lopez Alban</cite></a></blockquote>
    </section>

     <!-- Botón "Volver arriba" -->
    <section class="scroll"> 
         <a id="scroll-to-top" href="#" class="back-to-top" role="button">
        <i class="bi bi-arrow-up-circle-fill"></i></a>
    </section>

    <!-- <script src="/login/JS/vo2.js"></script> -->
    

<?php
    // con este codigo se enlazan los datos de las paginas mencionadas 👇
    require_once("c://wamp64/www/login/view/head/footer.php");

?>