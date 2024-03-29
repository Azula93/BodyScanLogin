
// funcion para limitar la cantidad de numeros ingresados en los inputs
function limitarNumero(input, maxLength) {
    if (input.value.length > maxLength) {
      input.value = input.value.slice(0, maxLength);
      document.getElementById('errorMensaje').textContent = 'Máximo 3 dígitos permitidos.';
    } else {
      document.getElementById('errorMensaje').textContent = '';
    }
  };

  // trae las imagenes que se muestran en el resultado final
  const imagenMujerOk =   '/login/assets/img(22).svg';
  const imagenMujerbad =  '/login/assets/img(24).svg';
  const imagenHombreOk =  '/login/assets/img(23).svg';
  const imagenHombreBad = '/login/assets/img(25).svg';
  const iccimgError =     '/login/assets/img(27).svg';

//   Tomando el dato ingresado en el input
const calculoIcc = () =>{

  // Toma los datos ingresados en el genero
    const opciones = document.getElementsByName("genero");
    let Generoseleccionado = "";

    for (const opcion of opciones) {
      if (opcion.checked) {
        Generoseleccionado = opcion.value;
        break; // Sale del bucle tan pronto como se encuentra una opción seleccionada
      }
    }
    

    let cintura = document.getElementById("cintura").value;
    let cadera = document.getElementById("cadera").value;

    const formulaIcc = (cintura/cadera).toFixed(2);
    // document.getElementById("numIcc").innerHTML = formulaIcc;

    let resultadoIcc = "";
    let errorIcc = '';

    switch (true) {

      // CASOS MUJERES 
      case formulaIcc < 0.85 && Generoseleccionado === "mujer":
        resultadoIcc  = `Tu ICC es <b> ${formulaIcc} </b> Esto se clasifica como:<p class="pb-4 fs-1 text-success"><b> SIN RIESGO CARDIOVASCULAR</b></p> <img class="img-fluid w-50 text-center" src="${imagenMujerOk}" alt="ImagenOK">`;
        break;
        
      case formulaIcc  > 0.85 && Generoseleccionado === "mujer":
        resultadoIcc  = `Tu ICC es <b> ${formulaIcc} </b> Esto se clasifica como: <p class="pb-4 fs-1 text-danger"><b> CON RIESGO CARDIOVASCULAR</b></p> <img class="img-fluid w-50 text-center" src="${imagenMujerbad}" alt="Imagenbad">`;
        break;

      // CASOS HOMBRES
      case formulaIcc < 0.94 && Generoseleccionado === "hombre":
        resultadoIcc  = `Tu ICC es <b> ${formulaIcc} </b> Esto se clasifica como: <p class="pb-4 fs-1 text-success"> <b>SIN RIESGO CARDIOVASCULAR </b></p> <img class="img-fluid w-50 text-center" src="${imagenHombreOk}" alt="ImagenOK">`;
          break;  

      case formulaIcc  > 0.94 && Generoseleccionado === "hombre":
        resultadoIcc  = `Tu ICC es <b> ${formulaIcc} </b> Esto se clasifica como: <p class="pb-4 fs-1 text-danger"><b> CON RIESGO CARDIOVASCULAR </b></p> <img class="img-fluid w-50 text-center" src="${imagenHombreBad}" alt="Imagenbad">`;
          break;

      default:
        resultadoIcc = `<p class="pt-3 fs-3 fw-bold text-danger">ERROR! <br> Verifica que hayas ingresado los datos de manera correcta</b></p> <img class="img-fluid w-50 text-center" src="${iccimgError}" alt="ImagenEroor">`
}
  document.getElementById("resultadoIcc").innerHTML = resultadoIcc;
  document.getElementById("errorIcc").innerHTML = errorIcc;
}
