const getResultImg = '/login/assets/img(31).svg';

// funcion para limitar la cantidad de numeros ingresados en los inputs
function limitarNumero(input, maxLength) {
  if (input.value.length > maxLength) {
    input.value = input.value.slice(0, maxLength);
    document.getElementById('errorMensajeTalla').textContent = 'Máximo 3 dígitos permitidos.';
    document.getElementById('errorMensajePeso').textContent = 'Máximo 3 dígitos permitidos.';
    document.getElementById('errorMensajeEdad').textContent = 'Máximo 2 dígitos permitidos.';
  } else {
    document.getElementById('errorMensajeTalla').textContent = '';
  }
};

function GeneroSeleccionado () {
  // Toma los datos ingresados en el genero
  const opcionesGenero = document.getElementsByName("genero");
  let Generoseleccionado = "";

  for (const opcion of opcionesGenero) {
    if (opcion.checked) {
      Generoseleccionado = opcion.value;
      break; // Sale del bucle tan pronto como se encuentra una opción seleccionada
    }
  }
  console.log(Generoseleccionado);
  return GeneroSeleccionado;
};

function factorActividad  () {
   // Toma los datos ingresados en el factor de actividad
   const opcionesFactorAct = document.getElementsByName("factorActividad");
   let factorActividad = "";

   for (const opcion of opcionesFactorAct) {
     if (opcion.checked) {
      factorActividad = opcion.value;
       break; 
     }
   };
   console.log(factorActividad);
   return factorActividad;
};


function EleccionDeporte  () {
  // Toma los datos ingresados en el deporte
 const opcionesDeporte = document.getElementsByName("Deportista");
 let Deporteseleccionado = "";

 for (const opcion of opcionesDeporte) {
   if (opcion.checked) {
     Deporteseleccionado = opcion.value;
     break; 
   }
 }
 console.log(Deporteseleccionado);
 return Deporteseleccionado;
};


function calculoGet ()  {

         // Toma los datos ingresados en el factor de actividad
   const opcionesFactorAct = document.getElementsByName("factorActividad");
   let factorActividad = "";

   for (const opcion of opcionesFactorAct) {
     if (opcion.checked) {
      factorActividad = opcion.value;
       break; 
     }
   };
  

        // Toma los datos ingresados en el genero
  const opcionesGenero = document.getElementsByName("genero");
  let Generoseleccionado = "";

  for (const opcion of opcionesGenero) {
    if (opcion.checked) {
      Generoseleccionado = opcion.value;
      break; // Sale del bucle tan pronto como se encuentra una opción seleccionada
    }
  }
  

       let resultadoGet = "";

       let talla =document.getElementById("talla").value;     
       let peso = document.getElementById("peso").value;  
       let edad = document.getElementById("edad").value;
      
       
        // FORMULAS

        let formulaHombresSedentario = (66.5 + 13.75 * peso +5.0 * talla -6.78 * edad)*1.2;
        let formulaHombresLeve = (66.5 + 13.75 * peso +5.0 * talla -6.78 * edad)*1.55;
        let formulaHombresModerada = (66.5 + 13.75 * peso +5.0 * talla -6.78 * edad)*1.8;
        let formulaHombresIntensa = (66.5 + 13.75 * peso +5.0 * talla -6.78 * edad)*2.1;
        
        let formulaMujeresSedentaria = (655 + 9.56 * peso + 1.85 * talla - 4.68 * edad)*1.2;
        let formulaMujeresLeve = (655 + 9.56 * peso + 1.85 * talla - 4.68 * edad)*1.56;
        let formulaMujeresModerada = (655 + 9.56 * peso + 1.85 * talla - 4.68 * edad) * 1.64;
        let formulaMujeresIntensa = (655 + 9.56 * peso + 1.85 * talla - 4.68 * edad)*1.82;
        

     switch (true) {

         // Casos mujeres
         case Generoseleccionado === 'mujer' && factorActividad === "Menos de 3 horas semanales":
             resultadoGet  = `Tu gasto energético total es de <b> ${Math.round(formulaMujeresSedentaria)} </b> kcal <img class="Getimgresult" src="${getResultImg}" alt="ImagenOK">`;
           break;

           case Generoseleccionado === 'mujer' && factorActividad === "3 Horas semanales":
             resultadoGet  = `Tu gasto energético total es de  <b> ${Math.round(formulaMujeresLeve)} </b> kcal <img class="Getimgresult" src="${getResultImg}" alt="ImagenOK">`;
           break;

          case Generoseleccionado === 'mujer' && factorActividad === "6 Horas semanales":
            resultadoGet  = `Tu gasto energético total es de <b> ${Math.round(formulaMujeresModerada)}</b> kcal <img class="Getimgresult" src="${getResultImg}" alt="ImagenOK">`;
          break;

          case Generoseleccionado === 'mujer' && factorActividad === "4-5 horas Diarias":
            resultadoGet  = `Tu gasto energético total es de <b> ${Math.round(formulaMujeresIntensa)}</b> kcal <img class="Getimgresult" src="${getResultImg}" alt="ImagenOK">`;
          break;

        //   CASOS HOMBRES
          case Generoseleccionado === 'hombre' && factorActividad === "Menos de 3 horas semanales":
            resultadoGet  = `Tu gasto energético total es de <b> ${Math.round(formulaHombresSedentario)}</b> kcal <img class="Getimgresult" src="${getResultImg}" alt="ImagenOK">`;
          break;

          case Generoseleccionado === 'hombre' && factorActividad === "3 Horas semanales":
            resultadoGet  = `Tu gasto energético total es de <b> ${Math.round(formulaHombresLeve)}</b> kcal <img class="Getimgresult" src="${getResultImg}" alt="ImagenOK">`;
          break;

          case Generoseleccionado === 'hombre' && factorActividad === "6 Horas semanales":
            resultadoGet  = `Tu gasto energético total es de <b> ${Math.round(formulaHombresModerada)}</b> kcal <img class="Getimgresult" src="${getResultImg}" alt="ImagenOK">`;
          break;

          case Generoseleccionado === 'hombre' && factorActividad === "4-5 horas Diarias":
            resultadoGet  = `Tu gasto energético total es de <b> ${Math.round(formulaHombresIntensa)}</b> kcal <img class="Getimgresult" src="${getResultImg}" alt="ImagenOK">`;
          break;

        default:
            resultadoGet = `<p class="textoGetResult text-danger"> Ingresa los datos correspondientes!</p>`

    }

  // muestra el resultado en pantalla
  document.getElementById("resultadoGet").innerHTML = resultadoGet;

};

const imgMacro = '/login/assets/img(20).svg'


// Funcion para calcular los macronutientes en Gramos
  function macronutrientesDiarios(){

    let talla =document.getElementById("talla").value;     
    let peso = document.getElementById("peso").value;  
    let edad = document.getElementById("edad").value;

    // Toma los datos ingresados en el factor de actividad
   const opcionesFactorAct = document.getElementsByName("factorActividad");
   let factorActividad = "";

   for (const opcion of opcionesFactorAct) {
     if (opcion.checked) {
      factorActividad = opcion.value;
       break; 
     }
   };
   console.log(factorActividad);

   // Toma los datos ingresados en el genero
    const opcionesGenero = document.getElementsByName("genero");
    let Generoseleccionado = "";

    for (const opcion of opcionesGenero) {
      if (opcion.checked) {
        Generoseleccionado = opcion.value;
        break; // Sale del bucle tan pronto como se encuentra una opción seleccionada
      }
    }
    console.log(Generoseleccionado);

    // Toma los datos ingresados en el deporte
    const opcionesDeporte = document.getElementsByName("Deportista");
    let Deporteseleccionado = "";

    for (const opcion of opcionesDeporte) {
      if (opcion.checked) {
        Deporteseleccionado = opcion.value;
        break; 
      }
    }
    console.log(Deporteseleccionado);

    // FORMULA HOMBRES GET
    let formulaHombresSedentario = ((66.5 + 13.75 * peso +5.0 * talla -6.78 * edad)*1.2);
    let formulaHombresLeve = (66.5 + 13.75 * peso +5.0 * talla -6.78 * edad)*1.55;
    let formulaHombresModerada = (66.5 + 13.75 * peso +5.0 * talla -6.78 * edad)*1.8;
    let formulaHombresIntensa = ((66.5 + 13.75 * peso +5.0 * talla -6.78 * edad)*2.1);

    // FORMULAS PORCENTAJES HOMBRES DEPORTISTAS
    let GrChosHombresSed =  ((formulaHombresSedentario) * 0.50);
    let GrProtHombreSed  =  ((formulaHombresSedentario) * 0.25);
    let GrGrasasHombreSed = ((formulaHombresSedentario) * 0.25);

    let GrChosHombreLeve =    ((formulaHombresLeve) * 0.50);
    let GrProtHombreLeve  =   ((formulaHombresLeve) * 0.25);
    let GrGrasasHombreLeve =  ((formulaHombresLeve) * 0.25);


    let GrChosHombreMod =   ((formulaHombresModerada) * 0.50);
    let GrProtHombreMod  =  ((formulaHombresModerada) * 0.25);
    let GrGrasasHombreMod = ((formulaHombresModerada) * 0.25);

    let GrChosHombreInt =   ((formulaHombresIntensa) * 0.50);
    let GrProtHombreInt  =  ((formulaHombresIntensa) * 0.25);
    let GrGrasasHombreInt = ((formulaHombresIntensa) * 0.25);

     // FORMULAS PORCENTAJES HOMBRES NODEPORTISTAS
     let GrChosHombresSedND =((formulaHombresSedentario) * 0.60);
     let GrProtHombreSedND  =((formulaHombresSedentario) * 0.25);
     let GrGrasasHombreSedND =((formulaHombresSedentario) * 0.15);
 
     let GrChosHombreLeveND =   ((formulaHombresLeve) * 0.60);
     let GrProtHombreLeveND  =  ((formulaHombresLeve) * 0.25);
     let GrGrasasHombreLeveND = ((formulaHombresLeve) * 0.15);
     
     let GrChosHombreModND =    ((formulaHombresModerada) * 0.60);
     let GrProtHombreModND  =   ((formulaHombresModerada) * 0.25);
     let GrGrasasHombreModND =  ((formulaHombresModerada) * 0.15);
 
     let GrChosHombreIntND =   ((formulaHombresIntensa) * 0.60);
     let GrProtHombreIntND  =  ((formulaHombresIntensa) * 0.25);
     let GrGrasasHombreIntND = ((formulaHombresIntensa) * 0.15);


    // FORMULA MUJERES GET
    let formulaMujeresSedentaria = ((655 + 9.56 * peso + 1.85 * talla - 4.68 * edad) * 1.2);
    let formulaMujeresLeve = ((655 + 9.56 * peso + 1.85 * talla - 4.68 * edad) *  1.56);
    let formulaMujeresModerada = ((655 + 9.56 * peso + 1.85 * talla - 4.68 * edad) * 1.64);
    let formulaMujeresIntensa = ((655 + 9.56 * peso + 1.85 * talla - 4.68 * edad) * 1.82);


    // FORMULAS PORCENTAJES MUJERES DEPORTISTAS
    let GrChosMujerSed =      ((formulaMujeresSedentaria) * 0.50);
    let GrProtMujerSed  =    ((formulaMujeresSedentaria) * 0.25);
    let GrGrasasMujerSed =   ((formulaMujeresSedentaria) * 0.25);

    let GrChosMujerLeve=      ((formulaMujeresLeve) * 0.50);
    let GrProtMujerLeve  =    ((formulaMujeresLeve) * 0.25);
    let GrGrasasMujerLeve =   ((formulaMujeresLeve) * 0.25);
    
    let GrChosMujerMod=      ((formulaMujeresModerada) * 0.50);
    let GrProtMujerMod  =    ((formulaMujeresModerada) * 0.25);
    let GrGrasasMujerMod =   ((formulaMujeresModerada) * 0.25);

    let GrChosMujerInt=      ((formulaMujeresIntensa) * 0.50);
    let GrProtMujerInt  =    ((formulaMujeresIntensa) * 0.25);
    let GrGrasasMujerInt =   ((formulaMujeresIntensa) * 0.25);

    // FORMULAS PORCENTAJES MUJERES NO DEPORTISTAS
    let GrChosMujerSedND =  ((formulaMujeresSedentaria) * 0.60);
    let GrProtMujerSedND  = ((formulaMujeresSedentaria) * 0.25);
    let GrGrasasMujerSedND= ((formulaMujeresSedentaria) * 0.15);

    let GrChosMujerLeveND =  ((formulaMujeresLeve) * 0.60);
    let GrProtMujerLeveND  = ((formulaMujeresLeve) * 0.25);
    let GrGrasasMujerLeveND= ((formulaMujeresLeve) * 0.15);
    
    let GrChosMujerModND =  ((formulaMujeresModerada) * 0.60);
    let GrProtMujerModND =  ((formulaMujeresModerada) * 0.25);
    let GrGrasasMujerModND= ((formulaMujeresModerada) * 0.15);

    let GrChosMujerIntND =  ((formulaMujeresIntensa) * 0.60);
    let GrProtMujerIntND  = ((formulaMujeresIntensa) * 0.25);
    let GrGrasasMujerIntND= ((formulaMujeresIntensa) * 0.15);

    let macronutrientesGr = '';

    switch (true){

        // CASOS MUJERES DEPORTISTAS
          case Deporteseleccionado === 'Deportista' && factorActividad === 'Menos de 3 horas semanales' && Generoseleccionado ==='mujer' :
        macronutrientesGr = `Tu requerimiento de Carbohidratos es <b>${Math.round(GrChosMujerSed)} gr</b> ,<br>
        Tu requerimiento de Proteinas es <b>${Math.round(GrProtMujerSed)}gr</b>,<br>
        Tu requerimiento de Grasas es <b>${Math.round(GrGrasasMujerSed)}gr</b> <img class="imgMacro" src="${imgMacro}" alt="ImagenOK">`;
        console.log(macronutrientesGr);
        break;

          case Deporteseleccionado === 'Deportista' && factorActividad === '3 Horas semanales'  && Generoseleccionado ==='mujer':
          macronutrientesGr = `Tu requerimiento de Carbohidratos es <b>${Math.round(GrChosMujerLeve)}gr</b>,<br>
          Tu requerimiento de Proteinas es<b> ${Math.round(GrProtMujerLeve)}gr</b>,<br>
          Tu requerimiento de Grasas es <b>${Math.round(GrGrasasMujerLeve)}gr</b> <img class="imgMacro" src="${imgMacro}" alt="ImagenOK">`;
          break;

          case Deporteseleccionado === 'Deportista' && factorActividad === '6 Horas semanales'  && Generoseleccionado ==='mujer':
          macronutrientesGr = `Tu requerimiento de Carbohidratos es <b>${Math.round(GrChosMujerMod)}gr</b>,<br>
          Tu requerimiento de Proteinas es <b>${Math.round(GrProtMujerMod)}gr</b>,<br>
          Tu requerimiento de Grasas es <b>${Math.round(GrGrasasMujerMod)}gr</b> <img class="imgMacro" src="${imgMacro}" alt="ImagenOK">`;
          console.log(macronutrientesGr);
          break;

          case Deporteseleccionado === 'Deportista' && factorActividad === '4-5 horas Diarias'  && Generoseleccionado ==='mujer':
            macronutrientesGr = `Tu requerimiento de Carbohidratos es <b>${Math.round(GrChosMujerInt)}gr</b>,<br>
            Tu requerimiento de Proteinas es <b>${Math.round(GrProtMujerInt)}gr</b>,<br>
            Tu requerimiento de Grasas <b>es ${Math.round(GrGrasasMujerInt)}gr</b> <img class="imgMacro" src="${imgMacro}" alt="ImagenOK">`;
            console.log(macronutrientesGr);
            break;


          // CASOS MUJERES NO DEPORTISTAS
          case Deporteseleccionado === 'No deportista' && factorActividad === 'Menos de 3 horas semanales'  && Generoseleccionado ==='mujer':
           macronutrientesGr = `Tu requerimiento de Carbohidratos es <b>${Math.round(GrChosMujerSedND)}gr</b>,<br>
           Tu requerimiento de Proteinas es <b>${Math.round(GrProtMujerSedND)}gr</b>,<br>
           Tu requerimiento de Grasas es <b>${Math.round(GrGrasasMujerSedND)}gr</b> <img class="imgMacro" src="${imgMacro}" alt="ImagenOK">`;
           console.log(macronutrientesGr);
           break;

         case Deporteseleccionado === 'No deportista' && factorActividad === '3 Horas semanales'  && Generoseleccionado ==='mujer':
           macronutrientesGr = `Tu requerimiento de Carbohidratos es <b>${Math.round(GrChosMujerLeveND)}gr</b>,<br>
           Tu requerimiento de Proteinas es <b>${Math.round(GrProtMujerLeveND)}gr</b>,<br>
           Tu requerimiento de Grasas es <b>${Math.round(GrGrasasMujerLeveND)}gr</b> <img class="imgMacro" src="${imgMacro}" alt="ImagenOK">`;
           console.log(macronutrientesGr);
           break;

         case Deporteseleccionado === 'No deportista' && factorActividad === '6 Horas semanales'  && Generoseleccionado ==='mujer':
            macronutrientesGr = `Tu requerimiento de Carbohidratos es <b>${Math.round(GrChosMujerModND)}gr</b>,<br>
            Tu requerimiento de Proteinas es <b>${Math.round(GrProtMujerModND)}gr</b>,<br>
            Tu requerimiento de Grasas es <b>${Math.round(GrGrasasMujerModND)}gr</b> <img class="imgMacro" src="${imgMacro}" alt="ImagenOK">`;   
            console.log(macronutrientesGr);
            break;

         case Deporteseleccionado === 'No deportista' && factorActividad === '4-5 horas Diarias'  && Generoseleccionado ==='mujer':
          macronutrientesGr = `Tu requerimiento de Carbohidratos es <b>${Math.round(GrChosMujerIntND)}gr</b>,<br>
         Tu requerimiento de Proteinas es <b>${Math.round(GrProtMujerIntND)}gr</b>,<br>
         Tu requerimiento de Grasas es <b>${Math.round(GrGrasasMujerIntND)}gr</b> <img class="imgMacro" src="${imgMacro}" alt="ImagenOK">`;   
         console.log(macronutrientesGr);
         break;
        
        
        
         // CASOS HOMBRES DEPORTISTAS

         case Deporteseleccionado === 'Deportista' && factorActividad === 'Menos de 3 horas semanales'  && Generoseleccionado ==='hombre':
         macronutrientesGr = `Tu requerimiento de Carbohidratos es <b>${Math.round(GrChosHombresSed)}gr</b>,<br>
         Tu requerimiento de Proteinas es <b>${Math.round(GrProtHombreSed)}gr</b>,<br>
         Tu requerimiento de Grasas es <b>${Math.round(GrGrasasHombreSed)}gr</b> <img class="imgMacro" src="${imgMacro}" alt="ImagenOK">`;
         console.log(macronutrientesGr);
         break;

         case Deporteseleccionado === 'Deportista' && factorActividad === '3 Horas semanales'  && Generoseleccionado ==='hombre':
          macronutrientesGr = `Tu requerimiento de Carbohidratos es <b>${Math.round(GrChosHombreLeve)}gr</b>,<br>
          Tu requerimiento de Proteinas es<b> ${Math.round(GrProtHombreLeve)}gr</b>,<br>
          Tu requerimiento de Grasas es<b> ${Math.round(GrGrasasHombreLeve)}gr</b> <img class="imgMacro" src="${imgMacro}" alt="ImagenOK">`;
          console.log(macronutrientesGr);
          break;

          case Deporteseleccionado === 'Deportista' && factorActividad === '6 Horas semanales'  && Generoseleccionado ==='hombre':
            macronutrientesGr = `Tu requerimiento de Carbohidratos es <b>${Math.round(GrChosHombreMod)}gr</b>,<br>
            Tu requerimiento de Proteinas es <b>${Math.round(GrProtHombreMod)}gr</b>,<br>
            Tu requerimiento de Grasas es <b>${Math.round(GrGrasasHombreMod)}gr</b> <img class="imgMacro" src="${imgMacro}" alt="ImagenOK">`;
            console.log(macronutrientesGr);
            break;

          case Deporteseleccionado === 'Deportista' && factorActividad === '4-5 horas Diarias'  && Generoseleccionado ==='hombre':
           macronutrientesGr = `Tu requerimiento de Carbohidratos es <b>${Math.round(GrChosHombreInt)}gr</b>,<br>
           Tu requerimiento de Proteinas es <b>${Math.round(GrProtHombreInt)}gr</b>,<br>
           Tu requerimiento de Grasas es <b>${Math.round(GrGrasasHombreInt)}gr</b> <img class="imgMacro" src="${imgMacro}" alt="ImagenOK">`; 
           console.log(macronutrientesGr);  
           break;



          //  CASOS HOMBRES NO DEPORTISTAS
          case Deporteseleccionado === 'No deportista' && factorActividad === 'Menos de 3 horas semanales'  && Generoseleccionado ==='hombre':
            macronutrientesGr = `Tu requerimiento de Carbohidratos es <b>${Math.round(GrChosHombresSedND)}gr</b>,<br>
            Tu requerimiento de Proteinas es <b>${Math.round(GrProtHombreSedND)}gr</b>,<br>
            Tu requerimiento de Grasas es <b>${Math.round(GrGrasasHombreSedND)}gr</b> <img class="imgMacro" src="${imgMacro}" alt="ImagenOK">`;
            break;

          case Deporteseleccionado === 'No deportista' && factorActividad === '3 Horas semanales'  && Generoseleccionado ==='hombre':
              macronutrientesGr = `Tu requerimiento de Carbohidratos es <b>${Math.round(GrChosHombreLeveND)}gr</b>,<br>
              Tu requerimiento de Proteinas es <b>${Math.round(GrProtHombreLeveND)}gr</b>,<br>
              Tu requerimiento de Grasas es <b>${Math.round(GrGrasasHombreLeveND)}gr</b> <img class="imgMacro" src="${imgMacro}" alt="ImagenOK">`;
              break;

          case Deporteseleccionado === 'No eportista' && factorActividad == '6 Horas semanales'  && Generoseleccionado ==='hombre':
            macronutrientesGr = `Tu requerimiento de Carbohidratos es <b>${Math.round(GrChosHombreModND)}gr</b>,<br>
            Tu requerimiento de Proteinas es <b>${Math.round(GrProtHombreModND)}gr</b>,<br>
            Tu requerimiento de Grasas es <b>${Math.round(GrGrasasHombreModND)}gr</b> <img class="imgMacro" src="${imgMacro}" alt="ImagenOK">`;
            break;

          case Deporteseleccionado === 'No deportista' && factorActividad === '4-5 horas Diarias'  && Generoseleccionado ==='hombre':
            macronutrientesGr = `Tu requerimiento de Carbohidratos es <b>${Math.round(GrChosHombreIntND)}gr</b>,<br>
            Tu requerimiento de Proteinas es <b>${Math.round(GrProtHombreIntND)}gr</b>,<br>
            Tu requerimiento de Grasas es <b>${Math.round(GrGrasasHombreIntND)}gr</b> <img class="imgMacro" src="${imgMacro}" alt="ImagenOK">`;
            break;
            
          default:
          macronutrientesGr = `<p class="textoGetResult text-danger"> Puedes realizar el cálculo cuando ingreses todos los datos solicitados 
          en la sección del GET ☝️</p>`

    } 

    document.getElementById("resultadoMacronut").innerHTML = macronutrientesGr;
    console.log(macronutrientesGr);

    }