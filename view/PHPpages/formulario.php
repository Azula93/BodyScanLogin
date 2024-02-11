<?php
    // con este codigo se enlazan los datos de las paginas mencionadas 👇
    require_once("c://wamp64/www/login/view/head/head.php");
   
?>
<!-- ICONO PUERTA -->
    <div class="fondo-login">
        <div class="icon">
            <a href="/login/index.php">
                <i class="bi bi-door-open-fill door-icon"></i>
            </a>
        </div>

        <!-- TITULO -->
        <div class="titulo">
            Historia Clinica
        </div>

        
    <!-- FORMULARIO -->
    <section class="container border border-primary rounded p-3 col-12 col-md-6 mb-3">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-10">
                <form action="verificar.php" method="post" class="" autocomplete ="off" >
                    <label for="inputEdad" class="form-label">Edad</label>
                    <input class="form-control rounded form-control-lg mb-2 w-100 " type="number" name="edad" id="inputEdad" aria-describedby="edadHelp" oninput="limitarNumero(this, 2)">
                    <p id="errorMensajeForm" style="color: crimson;"></p>
                    
                    <div class="form-group">
                       <label for="pregunta1">1. ¿Tiene alguna condición médica que podría empeorapor        la     actividad física?</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="pregunta1_si" name="pregunta1"     value="si">
                        <label class="form-check-label" for="pregunta1_si">Sí</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="pregunta1_no" name="pregunta1"     value="no">
                        <label class="form-check-label" for="pregunta1_no">No</label>
                    </div>
            </div>

            <div class="d-flex align-items-center justify-content-center">
                <button type="submit" class="btnLogin">Envia los datos</button>
            </div>
           
        </form> 
        </div>
        </div>
    </section>
         
    </div>

    
    

<?php
    // con este codigo se enlazan los datos de las paginas mencionadas 👇
    require_once("c://wamp64/www/login/view/head/footer.php");
?>



