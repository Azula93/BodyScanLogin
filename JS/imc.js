
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
const imclow =    '/login/assets/img(26).svg';
const imcOK =     '/login/assets/img(22).svg';
const imcBad =    '/login/assets/img(24).svg';
const imcError =  '/login/assets/img(27).svg';


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
        resultadoImc  = `Tu IMC es <b> ${formulaImc} </b> Esto se clasifica como:<p class="pb-4 fs-1 text-warning"> <b>BAJO PESO</b></p> <img class="img-fluid w-50 text-center" src="${imclow}" alt="imclow">`;
        break;
        
      case formulaImc  >= 18.5 && formulaImc <= 24.9:
        resultadoImc  = `Tu IMC es <b> ${formulaImc} </b> Esto se clasifica como: <p class="pb-4 fs-1 text-success"> <b>PESO NORMAL</b> </p> <img class="img-fluid w-50 text-center" src="${imcOK}" alt="ImagenOK">`;
        break;
        
      case formulaImc  >= 25 && formulaImc <= 29.9:
        resultadoImc  = `Tu IMC es <b> ${formulaImc} </b> Esto se clasifica como: <p class="pb-4 fs-1 text-warning"><b>SOBREPESO</b></p> <img class="img-fluid w-50 text-center" src="${imcBad}" alt="imcBad">`;
        break;

      case formulaImc  >= 30 && formulaImc <= 34.9:
        resultadoImc  = `Tu IMC es <b> ${formulaImc} </b> Esto se clasifica como:<p class="pb-4 fs-1 text-danger"> <b>OBESIDAD GRADO I</b> </p><img class="img-fluid w-50 text-center" src="${imcBad}" alt="imcBad">`;
        break;
        
      case formulaImc  >= 35 && formulaImc <= 39.9:
        resultadoImc  = `Tu IMC es <b> ${formulaImc} </b> Esto se clasifica como: <p class="pb-4 fs-1 text-danger"><b>OBESIDAD GRADO II</b></p> <img class="img-fluid w-50 text-center" src="${imcBad}" alt="imcBad">`;
        break;
  
      case formulaImc  >= 40:
        resultadoImc  = `Tu IMC es <b> ${formulaImc} </b> Esto se clasifica como: <p class="pb-4 fs-1 text-danger"> <b> OBESIDAD GRADO III</b></p> <img class="img-fluid w-50 text-center" src="${imcBad}" alt="imcBad">`;
        break;

      default:
        resultadoImc = `<p class="pt-3 fs-3 fw-bold text-danger"><b>ERROR! <br> Ingresa los datos de manera correcta [talla en metros: 1.70 y peso en kg: 60]</br></p> <img class="img-fluid w-50 text-center" src="${imcError}" alt="imcError">`
        
}

    document.getElementById("resultadoImc").innerHTML = resultadoImc;
    document.getElementById("errorImc").innerHTML = errorImc;
}
