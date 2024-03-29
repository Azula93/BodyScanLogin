<?php
    // con este codigo se enlazan los datos de las paginas mencionadas 👇
     require_once("c://wamp64/www/login/view/head/header.php");
?>
<main>
    <!-- Indices antropometricos -->
    <section class="fs-3">
        <h1 class="titlePrincipal text-center mt-5"> Indices Antropométricos Básicos</h1>
          <h5 class="ImcCalculo-subtitle text-center pt-3 pb-3">¿Qué es el IMC?</h5>
        <!-- Calculo IMC -->
        <section class="container"> 
            <div class="row align-items-start">
                <p class="text-justify text-center ms-5 me-5 lh-base fs-3"><b>El IMC ó Índice de Masa Corporal,</b> es una medida que se utiliza para evaluar la relación entre el peso y la altura de una persona. <br>
                El IMC se utiliza comúnmente como indicador de la salud general y para clasificar a las personas en categorías como bajo peso, peso normal, sobrepeso u obesidad.</p>
                <h2 class="ImcTitle fs-1 text-center pt-5">Calcula tu IMC</h2>
                    <section class="container mt-4">
                        <div class="row">
                            <form class="col ms-5 p-3" action="#">
                                <div class="p-3 font-weight-bold">
                                    <label class="form-label" for="talla"><b>Talla en metros:</b></label>
                                    <input class="form-control form-control-lg " type="number" id="talla"   placeholder="1.50m"  step="0.01" min="1" maxlength="4" pattern="^[0-9]    +"  oninput="limitarNumero(this, 4)"> 
                                    <p id="errorMensaje" style="color: crimson;"></p>
                                </div>

                                <div class="p-3 font-weight-bold">
                                    <label class="form-label"  for="peso"><b>Peso en Kg:</b> </label>
                                    <input class="form-control form-control-lg" type="number" id="peso"     placeholder="50kg"  min="1" maxlength="3" pattern="^[0-9]+"     oninput="limitarNumero(this, 3)"> 
                                    <p id="errorMensaje" style="color: crimson;"></p>
                                </div>
                            </form>

                            <div class="col">
                                <span>
                                    <p></p> <!-- en este 👈 parrafo se dibuja el error desde JS     -->                               
                                    <div class="lh-lg col text-center fs-2" id="resultadoImc"> </div>
                                    <p id="errorImc"></p>
                                </span> 
                            </div>
                        </div>
                    </section>
            </div>
        </section>

        <section class="text-center pb-5 pt-5">
                <button class=" btnImc1 px-3 py-3 mx-auto" type="button" onclick="calculoImc()">
                    Calcular IMC
                </button>
        </section>
        <!-- FIN CALCULO IMC -->

        <!-- ICC -->
    <h5 class="IccCalculo-subtitle fs-1 text-center pt-3 pb-5">¿Qué es el ICC?</h5>
    <!-- Calculo ICC -->
    <section class="container"> 
        <div class="row align-items-start">
            <p class="text-justify text-center ms-5 me-5 lh-base fs-3"> <b>El ICC ó Índice de   Cintura-Cadera,</b> es una medida que se utiliza para evaluar la distribución de grasa en el  cuerpo de una persona. <br>
                        El ICC se utiliza para determinar el riesgo de enfermedades relacionadas con la obesidad y proporciona información sobre la distribución de la grasa corporal, ya que una distribución excesiva de grasa en la zona abdominal puede estar asociada con un mayor riesgo para la salud.</p>
         <h2 class="IccTitle fs-1 text-center pt-5">Calcula tu ICC</h2>

            <section class="container mt-4" >
                <div class="row">
                    <form class="col ms-5 p-3" action="#">
                        <section class="IccRadioBtn container mt-4 col">
                            <p class="text-start fs-2 "> <b>Elige tu sexo</b></p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genero"  value="mujer">

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
                                <input class="form-control form-control-lg" type="number" id="cintura"  placeholder="60cm"  min="2" maxlength="3" pattern="^[0-9]+"      oninput="limitarNumero(this, 3)"> 
                                <p id="errorMensaje" style="color: crimson;"></p>
                            </div>

                            <div class="PerimetroCadera-section">
                                <label class="form-label"  for="cadera">Perimetro Cadera en Cm: </label>
                                <input class="form-control form-control-lg" type="number" id="cadera"       placeholder="92cm"  min="1" maxlength="3" pattern="^[0-9]+"     oninput="limitarNumero(this, 3)"> 
                                <p id="errorMensaje" style="color: crimson;"></p>
                            </div>
                        </section>
                    </form>
                </div>
            </section>
                
            <div class="col">
                <span>
                    <p></p> 
                    <div class="lh-lg col text-center fs-2" id="resultadoIcc"></div> 
                    <p id="errorIcc"></p>
                </span> 
            </div>
            
            <section class="text-center pb-5 pt-5"> 
                <button class=" btnIcc px-3 py-3 mx-auto" type="button" onclick="calculoIcc()">
                    Calcular ICC
                </button>
            </section>
        </div> 
    </section>
     <!-- FIN ICC -->
    
    <!-- Botón "Volver arriba" -->
        <section class="scroll"> 
            <a id="scroll-to-top" href="#" class="back-to-top" role="button">
                <i class="bi bi-arrow-up-circle-fill"></i>
            </a>
        </section>
    </section>
</main>
<!-- FIN Indices antropometricos -->

    <?php
        // con este codigo se enlazan los datos de las paginas mencionadas 👇
        require_once("c://wamp64/www/login/view/head/footer.php");
    ?>