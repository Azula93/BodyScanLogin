const Vo2Bad = "/assets/img(28).svg";
const Vo2Regular = "/assets/img(30).svg";
const Vo2Bueno = "/assets/img(22).svg";
const Vo2MuyBueno = "/assets/img(29).svg";
const Vo2Error = "/assets/img(27).svg";
const Vo2imgthink = "/assets/img (10).svg";


// funcion para limitar la cantidad de numeros ingresados en los inputs
function limitarNumero(input, maxLength) {
    if (input.value.length > maxLength) {
      input.value = input.value.slice(0, maxLength);
      document.getElementById('errorMensajePPM').textContent = 'Máximo 3 dígitos permitidos.';
      document.getElementById('errorMensajeH').textContent = 'Máximo 3 dígitos permitidos.';
      
    } else {
      document.getElementById('errorMensajePPM').textContent = '';
    }
  };


// PONER UN ALERT ANTES DE DAR ACCESO A LA PAG

function calculoVo2(){
    
    let BPM = document.getElementById("BPM").value;
    let altura = document.getElementById("H").value;

    let H = altura/100;

    let PPM = BPM /4;

    let Vo2Max = Math.trunc(PPM * 0.2 + PPM * H * 1.33 * 1.8 + 3.5);

    let Mets = Vo2Max/3.5;

    document.getElementById("resultadoVo2").innerHTML = `${Vo2Max} ml/kg/min`;
    document.getElementById("numMets").innerHTML = `${Math.trunc(Mets)} `;

    let resultadoMets='';


    switch(true){

        case Math.trunc(Mets) <= 9 :
        resultadoMets = `<p class="textoVo2Result"> Tu condicion fisica es </p> <br> <p class="textoVo2Result text-danger"> MUY MALA</p> <img class="vo2imgresult" src="${Vo2Bad}" alt="ImagenBad">`;
        break;

        case Math.trunc(Mets) == 10 :
        resultadoMets = `<p class="textoVo2Result"> Tu condicion fisica es </p> <br> <p class="textoVo2Result text-warning"> REGULAR </p> <img class="vo2imgresult" src="${Vo2Regular}" alt="ImagenBad"> `;
        break;

        case Math.trunc(Mets) == 11 :
        resultadoMets = `<p class="textoVo2Result"> Tu condicion fisica es </p>  <br> <p class="textoVo2Result text-success"> SALUDABLE </p> <img class="vo2imgresult" src="${Vo2Bueno}" alt="ImagenOK">`;
        break;

        case Math.trunc(Mets) == 12 || Math.trunc(Mets) ==13 :
        resultadoMets = `<p class="textoVo2Result"> Tu condicion fisica es  </p><br> <p class="textoVo2Result text-success"> BUENA </p> <img class="vo2imgresult" src="${Vo2Bueno}" alt="ImagenOK">`;
        break;

        case Math.trunc(Mets) >= 14 :
        resultadoMets = `<p class="textoVo2Result"> Tu condicion fisica es </p> <br> <p class="textoVo2Result text-success"> MUY BUENA </p> <img class="vo2imgresult" src="${Vo2MuyBueno}" alt="ImagenOK">`;
        break;

        default:
            resultadoMets = ` <p class="textoVo2Result text-danger">error </p>`;
    }
    document.getElementById("resultadoMets").innerHTML = resultadoMets;
 }

 function ExpectativaVida(){

    // Toma los datos ingresados en la actividad fisica de la expectativa de vida
   const opcinesActFisica = document.getElementsByName("expectvida");
   let ActividadFisicaExpectVida = "";

   for (const opcion of opcinesActFisica) {
     if (opcion.checked) {
        ActividadFisicaExpectVida = opcion.value;
       break; 
     }
   };
   console.log(ActividadFisicaExpectVida);

    let BPM = document.getElementById("BPM").value;
    let altura = document.getElementById("H").value;

    let H = altura/100;

    let PPM = BPM /4;

    let Vo2Max = Math.trunc(PPM * 0.2 + PPM * H * 1.33 * 1.8 + 3.5);

    let inactivo = Vo2Max/0.5;
    let activo = Vo2Max/0.4;

    let resultadoExpectVida = ''

    switch(true){
        case ActividadFisicaExpectVida == 'menos 3 v-s':
            resultadoExpectVida =  `Tu expectativa de vida es  <b>${inactivo} años.</b> <img class="expectimgresult" src="${Vo2imgthink}" alt="Imagenthink">
            <br>Recuerda que este dato es <b>SOLO UNA ESTIMACIóN.</b> 
            Tu expectativa de vida puede variar en función de tus habitos de vida y condiciones externas.`;
            break;

        case ActividadFisicaExpectVida == 'mas 3 v-s':
            resultadoExpectVida = `Tu expectativa de vida es <b>${activo} años.</b> <img class="expectimgresult" src="${Vo2imgthink}" alt="Imagentjink">
            <br>Recuerda que este dato es <b>SOLO UNA ESTIMACIóN.</b><br>  
            Tu expectativa de vida puede variar en función de tus habitos de vida y condiciones externas.`;
            break;

        default:
          resultadoExpectVida = ` <p class="textoVo2Result text-danger"> Verifica que hayas ingresado los datos correctamente!</p> <img class="expectimgerror" src="${Vo2Error}" alt="ImagenError">`;

    }
    document.getElementById("resultadoexpectVida").innerHTML = resultadoExpectVida;
 }