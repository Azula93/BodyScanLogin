

// funcion para limitar la cantidad de numeros ingresados en los inputs
function limitarNumero(input, maxLength) {
    if (input.value.length > maxLength) {
      input.value = input.value.slice(0, maxLength);
      document.getElementById('errorMensaje').textContent = 'Máximo 3 dígitos permitidos.';
    } else {
      document.getElementById('errorMensaje').textContent = '';
    }
  };

// imagenes que se muestran en el resultado
const imclow = "/assets/img(26).svg";
const imcOK = "/assets/img(22).svg";
const imcBad = "/assets/img(24).svg";
const imcError = "/assets/img(27).svg";


const calculoImc = () =>{
  
    //   Tomando el datos ingresados en el input
    let talla = document.getElementById("talla").value;
    let tallaDecimal = parseFloat(talla);
    let peso = document.getElementById("peso").value;
    
    
    const formulaImc = (Math.floor (peso / (tallaDecimal*tallaDecimal)) );
    
   
    let resultadoImc = '';
    let errorImc = '';

    switch (true) {

      case formulaImc < 18.5:
        resultadoImc  = `Tu IMC es <b> ${formulaImc} </b> Esto se clasifica como:<p class="textoImcResult text-warning"> <b>BAJO PESO</b></p> <img class="imclow" src="${imclow}" alt="ImagenOK">`;
        break;
        
      case formulaImc  >= 18.5 && formulaImc <= 24.9:
        resultadoImc  = `Tu IMC es <b> ${formulaImc} </b> Esto se clasifica como: <p class="textoImcResult text-success"> <b>PESO NORMAL</b> </p> <img class="imcOK" src="${imcOK}" alt="ImagenOK">`;
        break;
        
      case formulaImc  >= 25 && formulaImc <= 29.9:
        resultadoImc  = `Tu IMC es <b> ${formulaImc} </b> Esto se clasifica como: <p class="textoImcResult text-warning"><b>SOBREPESO</b></p> <img class="imcBad" src="${imcBad}" alt="ImagenOK">`;
        break;

      case formulaImc  >= 30 && formulaImc <= 34.9:
        resultadoImc  = `Tu IMC es <b> ${formulaImc} </b> Esto se clasifica como:<p class="textoImcResult text-danger"> <b>OBESIDAD GRADO I</b> </p><img class="imcBad" src="${imcBad}" alt="ImagenOK">`;
        break;
        
      case formulaImc  >= 35 && formulaImc <= 39.9:
        resultadoImc  = `Tu IMC es <b> ${formulaImc} </b> Esto se clasifica como: <p class="textoImcResult text-danger"><b>OBESIDAD GRADO II</b></p> <img class="imcBad" src="${imcBad}" alt="ImagenOK">`;
        break;
  
      case formulaImc  >= 40:
        resultadoImc  = `Tu IMC es <b> ${formulaImc} </b> Esto se clasifica como: <p class="textoImcResult text-danger"> <b> OBESIDAD GRADO III</b></p> <img class="imcBad" src="${imcBad}" alt="ImagenOK">`;
        break;

      default:
        resultadoImc = `<p class="errorImc text-danger"><b>ERROR! <br> Ingresa los datos de manera correcta (talla en metros: 1.70 y peso en kg: 60)</br></p> <img class="imcError" src="${imcError}" alt="ImagenOK">`
        
}

    document.getElementById("resultadoImc").innerHTML = resultadoImc;
    document.getElementById("errorImc").innerHTML = errorImc;
}
