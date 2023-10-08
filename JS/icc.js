
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
  const imagenMujerOk = '/assets/img(22).svg';
  const imagenMujerbad = '/assets/img(24).svg';
  const imagenHombreOk = '/assets/img(23).svg';
  const imagenHombreBad = '/assets/img(25).svg';
  const iccimgError = "/assets/img(27).svg";

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
        resultadoIcc  = `Tu ICC es <b> ${formulaIcc} </b> Esto se clasifica como:<p class="textoIccResult text-success"><b> SIN RIESGO CARDIOVASCULAR</b></p> <img class="imagenMujerOk" src="${imagenMujerOk}" alt="ImagenOK">`;
        break;
        
      case formulaIcc  > 0.85 && Generoseleccionado === "mujer":
        resultadoIcc  = `Tu ICC es <b> ${formulaIcc} </b> Esto se clasifica como: <p class="textoIccResult text-danger"><b> CON RIESGO CARDIOVASCULAR</b></p> <img class="imagenMujerbad" src="${imagenMujerbad}" alt="Imagenbad">`;
        break;

      // CASOS HOMBRES
      case formulaIcc < 0.94 && Generoseleccionado === "hombre":
        resultadoIcc  = `Tu ICC es <b> ${formulaIcc} </b> Esto se clasifica como: <p class="textoIccResult text-success"> <b>SIN RIESGO CARDIOVASCULAR </b></p> <img class="imagenHombreOk" src="${imagenHombreOk}" alt="ImagenOK">`;
          break;  

      case formulaIcc  > 0.94 && Generoseleccionado === "hombre":
        resultadoIcc  = `Tu ICC es <b> ${formulaIcc} </b> Esto se clasifica como: <p class="textoIccResult text-danger"><b> CON RIESGO CARDIOVASCULAR </b></p> <img class="imagenHombreBad" src="${imagenHombreBad}" alt="Imagenbad">`;
          break;

      default:
        resultadoIcc = `<p class="errorImc text-danger">ERROR! <br> Verifica que hayas ingresado los datos de manera correcta</b></p> <img class="imcError" src="${iccimgError}" alt="ImagenOK">`

}
  document.getElementById("resultIcc").innerHTML = resultadoIcc;
  document.getElementById("errorIcc").innerHTML = errorIcc;
}