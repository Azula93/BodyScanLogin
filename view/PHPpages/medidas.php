    <?php
        // con este codigo se enlazan los datos de las paginas mencionadas 👇
        require_once("c://wamp64/www/login/view/head/header.php");

    ?>

        <main>

            <!-- Indices antropometricos -->
            <section class="indicesAntrop">
                <h1 class="titlePrincipal"> Indices Antropmétricos Básicos</h1>
                  <h5 class="ImcCalculo-subtitle">¿Que es el IMC?</h5>
            <!-- Calculo IMC -->
            <section class="imcCalculo"> 

                <p class="imcTexto"><b>El IMC ó Índice de Masa Corporal,</b> es una medida que se utiliza para evaluar la relación entre el peso y la altura de una persona. <br>
                El IMC se utiliza comúnmente como indicador de la salud general y para clasificar a las personas en categorías como bajo peso, peso normal, sobrepeso u obesidad.
                </p>

                <h2 class="ImcTitle">Calcula tu IMC</h2>

                <form class="datosImc" action="#">

                <div class="talla-section">
                    <label class="form-label" for="talla"><b>Talla en metros:</b></label>
                    <input class="form-control form-control-lg " type="number" id="talla" placeholder="1.50m"  step="0.01" min="1" maxlength="4" pattern="^[0-9]+"  oninput="limitarNumero(this, 4)"> 
                    <p id="errorMensaje" style="color: crimson;"></p>
                </div>

                <div class="peso-section">
                    <label class="form-label"  for="peso"><b>Peso en Kg:</b> </label>
                    <input class="form-control form-control-lg" type="number" id="peso" placeholder="50kg"  min="1" maxlength="3" pattern="^[0-9]+"  oninput="limitarNumero(this, 3)"> 
                    <p id="errorMensaje" style="color: crimson;"></p>
                </div>

            </form>

            <section class="btnImc">
                <button class="btn btn-dark px-3 py-3 mx-auto" type="button" onclick="calculoImc()">
                Calcular IMC
            </button>
            </section>

                <section class="resultadoImc-section">
                    <span>
                        <p class="parrafoImc"></p>
                        <div class="numeroImc" id="resultadoImc"> </div>
                        <p class="errorImc" id="errorImc"></p>
                    </span> 
                </section>
            </section>
            <!-- FIN CALCULO IMC -->

            <!-- ICC -->
            <section class="IccCalculo"> 
            <h5 class="IccCalculo-subtitle">¿Qué es el ICC?</h5>

                <p class="IccTexto"> <b>El ICC ó Índice de Cintura-Cadera,</b> es una medida que se utiliza para evaluar la distribución de grasa en el cuerpo de una persona. <br>
                El ICC se utiliza para determinar el riesgo de enfermedades relacionadas con la obesidad y proporciona información sobre la distribución de la grasa corporal, ya que una distribución excesiva de grasa en la zona abdominal puede estar asociada con un mayor riesgo para la salud.
                </p>

                <form class="datosIcc" action="#">

                <legend class="IccTitle">Calcula tu ICC</legend>
                <p class="datosIcc-parrafo"> <b>Elige tu sexo</b></p>

                <section class="IccRadioBtn">

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genero" value="mujer">
                    <label class="Rbtn form-check-label">Femenino</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genero" value="hombre">
                    <label class="Rbtn form-check-label">Masculino</label>
                </div>
                </section>

                <section class="perimetros-section">

                <div class="PerimetroCintura-section">
                    <label class="form-label" for="cintura">Perimetro Cintura en Cm: </label>
                    <input class="form-control form-control-lg" type="number" id="cintura" placeholder="60cm"  min="2" maxlength="3" pattern="^[0-9]+"  oninput="limitarNumero(this, 3)"> 
                    <p id="errorMensaje" style="color: crimson;"></p>
                </div>

                <div class="PerimetroCadera-section">
                    <label class="form-label"  for="cadera">Perimetro Cadera en Cm: </label>
                    <input class="form-control form-control-lg" type="number" id="cadera" placeholder="92cm"  min="1" maxlength="3" pattern="^[0-9]+"  oninput="limitarNumero(this, 3)"> 
                    <p id="errorMensaje" style="color: crimson;"></p>
                </div>
                </section>
            </form>

                <section class="iccbtn-section"> 
                <button class="btnIcc btnIcc btn btn-dark px-3 py-3 mx-auto" type="button" onclick="calculoIcc()">
                    Calcular ICC
                </button>
                </section>

                <section class="resultadoIcc-section">
                <span>
                    <p class="parrafoIcc"></p> 
                    <p class="resultIcc" id="resultIcc"></p>
                    <div class="errorIcc" id="errorIcc"></div> 
                </span> 
                </section>

            </section>
            <!-- FIN ICC -->
            </section>
            <!-- FIN Indices antropometricos -->


            <!-- Botón "Volver arriba" -->
            <section class="scroll"> 
            <a id="scroll-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button">
                <i class="bi bi-arrow-up-circle-fill"></i></a>
            </section>
        </main>

        <script src="/login/JS/imc.js"></script>
        <script src="/login/JS/icc.js"></script>
        <script src="/login/JS/btnarriba.js"></script>
        


    <?php
        // con este codigo se enlazan los datos de las paginas mencionadas 👇
        require_once("c://wamp64/www/login/view/head/footer.php");

    ?>