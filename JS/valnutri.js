let talla =document.getElementById("talla").value;     
let peso = document.getElementById("peso").value;  
let edad = document.getElementById("edad").value;

let resultadoGet = "";
// let factorActividad = "";
let Generoseleccionado = "";
let Deporteseleccionado = "";
let macronutrientesGr = '';


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
   
   for (const opcion of opcionesFactorAct) {
     if (opcion.checked) {
      factorActividad = opcion.value;
       break; 
     }
   };
   console.log(factorActividad);

        // Toma los datos ingresados en el genero
  const opcionesGenero = document.getElementsByName("genero");
  

  for (const opcion of opcionesGenero) {
    if (opcion.checked) {
      Generoseleccionado = opcion.value;
      break; // Sale del bucle tan pronto como se encuentra una opción seleccionada
    }
  }
  console.log(Generoseleccionado);

       
        // FORMULAS

        const formulaHombresSedentario = (66.5 + 13.75 * peso +5.0 * talla -6.78 * edad)*1.2;
        const formulaHombresLeve = (66.5 + 13.75 * peso +5.0 * talla -6.78 * edad)*1.55;
        const formulaHombresModerada = (66.5 + 13.75 * peso +5.0 * talla -6.78 * edad)*1.8;
        const formulaHombresIntensa = (66.5 + 13.75 * peso +5.0 * talla -6.78 * edad)*2.1;
        
        const formulaMujeresSedentaria = (655 + 9.56 * peso + 1.85 * talla - 4.68 * edad)*1.2;
        const formulaMujeresLeve = (655 + 9.56 * peso + 1.85 * talla - 4.68 * edad)*1.56;
        const formulaMujeresModerada = (655 + 9.56 * peso + 1.85 * talla - 4.68 * edad) * 1.64;
        const formulaMujeresIntensa = (655 + 9.56 * peso + 1.85 * talla - 4.68 * edad)*1.82;
        

     switch (true) {

         // Casos mujeres
         case Generoseleccionado == 'mujer' && factorActividad == "Menos de 3 horas semanales":
             resultadoGet  = `Tu gasto energético total es de ${Math.trunc(formulaMujeresSedentaria)} kcal`;
           break;

           case Generoseleccionado == 'mujer' && factorActividad == "3 Horas semanales":
             resultadoGet  = `Tu gasto energético total es de ${Math.trunc(formulaMujeresLeve)}  kcal`;
           break;

          case Generoseleccionado == 'mujer' && factorActividad == "6 Horas semanales":
            resultadoGet  = `Tu gasto energético total es de ${Math.trunc(formulaMujeresModerada)} kcal`;
            console.log(formulaHombresModerada, "prueba");
          break;

          case Generoseleccionado == 'mujer' && factorActividad == "4-5 horas Diarias":
            resultadoGet  = `Tu gasto energético total es de ${Math.trunc(formulaMujeresIntensa)} kcal`;
          break;

        //   CASOS HOMBRES
          case Generoseleccionado == 'hombre' && factorActividad == "Menos de 3 horas semanales":
            resultadoGet  = `Tu gasto energético total es de ${Math.trunc(formulaHombresSedentario)} kcal`;
          break;

          case Generoseleccionado == 'hombre' && factorActividad == "3 Horas semanales":
            resultadoGet  = `Tu gasto energético total es de ${Math.trunc(formulaHombresLeve)} kcal`;
          break;

          case Generoseleccionado == 'hombre' && factorActividad == "6 Horas semanales":
            resultadoGet  = `Tu gasto energético total es de ${Math.trunc(formulaHombresModerada)} kcal`;
          break;

          case Generoseleccionado == 'hombre' && factorActividad == "4-5 horas Diarias":
            resultadoGet  = `Tu gasto energético total es de ${Math.trunc(formulaHombresIntensa)} kcal`;
          break;

        default:
            resultadoGet = " Verifica que hayas ingresado todos los datos !"

    }

  // muestra el resultado en pantalla
  document.getElementById("resultadoGet").innerHTML = resultadoGet;
  console.log(resultadoGet);

   

};



  function macronutrientesDiarios (){

      // aqui van las variables de talla etc

    // Toma los datos ingresados en el factor de actividad
   const opcionesFactorAct = document.getElementsByName("factorActividad");
   

   for (const opcion of opcionesFactorAct) {
     if (opcion.checked) {
      factorActividad = opcion.value;
       break; 
     }
   };
   console.log(factorActividad);

   // Toma los datos ingresados en el genero
  const opcionesGenero = document.getElementsByName("genero");
  

  for (const opcion of opcionesGenero) {
    if (opcion.checked) {
      Generoseleccionado = opcion.value;
      break; // Sale del bucle tan pronto como se encuentra una opción seleccionada
    }
  }
  console.log(Generoseleccionado);

    // Toma los datos ingresados en el deporte
 const opcionesDeporte = document.getElementsByName("Deportista");
 

 for (const opcion of opcionesDeporte) {
   if (opcion.checked) {
     Deporteseleccionado = opcion.value;
     break; 
   }
 }
 

    // FORMULA HOMBRES GET
    const formulaHombresSedentario = (66.5 + 13.75 * peso +5.0 * talla -6.78 * edad)*1.2;
    const formulaHombresLeve = (66.5 + 13.75 * peso +5.0 * talla -6.78 * edad)*1.55;
    const formulaHombresModerada = (66.5 + 13.75 * peso +5.0 * talla -6.78 * edad)*1.8;
    const formulaHombresIntensa = (66.5 + 13.75 * peso +5.0 * talla -6.78 * edad)*2.1;

    // FORMULAS PORCENTAJES HOMBRES DEPORTISTAS
    const GrChosHombresSed =(formulaHombresSedentario * 0.50);
    const GrProtHombreSed  =(formulaHombresSedentario * 0.25);
    const GrGrasasHombreSed =(formulaHombresSedentario * 0.25);

    const GrChosHombreLeve =formulaHombresLeve * 0.50;
    const GrProtHombreLeve  =formulaHombresLeve * 0.25;
    const GrGrasasHombreLeve =formulaHombresLeve * 0.25;
    
    const GrChosHombreMod =formulaHombresModerada * 0.50;
    const GrProtHombreMod  =formulaHombresModerada * 0.25;
    const GrGrasasHombreMod =formulaHombresModerada * 0.25;

    const GrChosHombreInt =formulaHombresIntensa * 0.50;
    const GrProtHombreInt  =formulaHombresIntensa * 0.25;
    const GrGrasasHombreInt =formulaHombresIntensa * 0.25;

     // FORMULAS PORCENTAJES HOMBRES NODEPORTISTAS
     const GrChosHombresSedND =(formulaHombresSedentario * 0.60);
     const GrProtHombreSedND  =(formulaHombresSedentario * 0.25);
     const GrGrasasHombreSedND =(formulaHombresSedentario * 0.15);
 
     const GrChosHombreLeveND =formulaHombresLeve * 0.60;
     const GrProtHombreLeveND  =formulaHombresLeve * 0.25;
     const GrGrasasHombreLeveND =formulaHombresLeve * 0.15;
     
     const GrChosHombreModND =formulaHombresModerada * 0.60;
     const GrProtHombreModND  =formulaHombresModerada * 0.25;
     const GrGrasasHombreModND =formulaHombresModerada * 0.15;
 
     const GrChosHombreIntND =formulaHombresIntensa * 0.60;
     const GrProtHombreIntND  =formulaHombresIntensa * 0.25;
     const GrGrasasHombreIntND =formulaHombresIntensa * 0.15;


    // FORMULA MUJERES GET
    const formulaMujeresSedentaria = (655 + 9.56 * peso + 1.85 * talla - 4.68 * edad)*1.2;
    const formulaMujeresLeve = (655 + 9.56 * peso + 1.85 * talla - 4.68 * edad)*1.56;
    const formulaMujeresModerada = (655 + 9.56 * peso + 1.85 * talla - 4.68 * edad) * 1.64;
    const formulaMujeresIntensa = (655 + 9.56 * peso + 1.85 * talla - 4.68 * edad)*1.82;


    // FORMULAS PORCENTAJES MUJERES DEPORTISTAS
    const GrChosMujerSed =(formulaMujeresSedentaria * 0.50);
    const GrProtSed  =(formulaMujeresSedentaria * 0.25);
    const GrGrasasSed =(formulaMujeresSedentaria * 0.25);

    const GrChosMujerLeve =formulaMujeresLeve * 0.50;
    const GrProtLeve  =formulaMujeresLeve * 0.25;
    const GrGrasasLeve =formulaMujeresLeve * 0.25;
    
    const GrChosMujerMod =formulaMujeresModerada * 0.50;
    const GrProtMod  =formulaMujeresModerada * 0.25;
    const GrGrasasMod =formulaMujeresModerada * 0.25;

    const GrChosMujerInt =formulaMujeresIntensa * 0.50;
    const GrProtInt  =formulaMujeresIntensa * 0.25;
    const GrGrasasInt =formulaMujeresIntensa * 0.25;

    // FORMULAS PORCENTAJES MUJERES NO DEPORTISTAS
    const GrChosMujerSedND =(formulaMujeresSedentaria * 0.60);
    const GrProtMujerSedND  =(formulaMujeresSedentaria * 0.25);
    const GrGrasasMujerSedND =(formulaMujeresSedentaria * 0.15);

    const GrChosMujerLeveND =formulaMujeresLeve * 0.60;
    const GrProtMujerLeveND  =formulaMujeresLeve * 0.25;
    const GrGrasasMujerLeveND =formulaMujeresLeve * 0.15;
    
    const GrChosMujerModND =formulaMujeresModerada * 0.60;
    const GrProtMujerModND  =formulaMujeresModerada * 0.25;
    const GrGrasasMujerModND =formulaMujeresModerada * 0.15;

    const GrChosMujerIntND =formulaMujeresIntensa * 0.60;
    const GrProtMujerIntND  =formulaMujeresIntensa * 0.25;
    const GrGrasasMujerIntND =formulaMujeresIntensa * 0.15;

    

    switch (true){

        // CASOS MUJERES DEPORTISTAS
        case Deporteseleccionado == 'Deportista' && factorActividad == 'Menos de 3 horas semanales' && Generoseleccionado =='mujer' :
        macronutrientesGr = `Tu requerimiento de Carbohidratos es <b>${Math.trunc(GrChosMujerSed)} gr</b> ,<br>
        Tu requerimiento de Proteinas es <b>${Math.trunc(GrProtLeve)}gr</b>,<br>
        Tu requerimiento de Grasas es <b>${Math.trunc(GrGrasasSed)}gr</b>`;
        console.log(macronutrientesGr);
        break;

        case Deporteseleccionado == 'Deportista' && factorActividad == '3 Horas semanales'  && Generoseleccionado =='mujer':
          macronutrientesGr = `Tu requerimiento de Carbohidratos es <b>${Math.trunc(GrChosMujerLeve)}gr</b>,<br>
          Tu requerimiento de Proteinas es<b> ${Math.trunc(GrProtSed)}gr</b>,<br>
          Tu requerimiento de Grasas es <b>${Math.trunc(GrGrasasLeve)}gr</b>`;
          console.log(macronutrientesGr);
          break;

        case Deporteseleccionado == 'Deportista' && factorActividad == '6 Horas semanales'  && Generoseleccionado =='mujer':
          macronutrientesGr = `Tu requerimiento de Carbohidratos es <b>${Math.trunc(GrChosMujerMod)}gr</b>,<br>
          Tu requerimiento de Proteinas es <b>${Math.trunc(GrProtMod)}gr</b>,<br>
          Tu requerimiento de Grasas es <b>${Math.trunc(GrGrasasMod)}gr</b>`;
          console.log(macronutrientesGr);
          break;

         case Deporteseleccionado == 'Deportista' && factorActividad == '4-5 horas Diarias'  && Generoseleccionado =='mujer':
         macronutrientesGr = `Tu requerimiento de Carbohidratos es <b>${Math.trunc(GrChosMujerInt)}gr</b>,<br>
         Tu requerimiento de Proteinas es <b>${Math.trunc(GrProtInt)}gr</b>,<br>
         Tu requerimiento de Grasas <b>es ${Math.trunc(GrGrasasInt)}gr</b>`;
         console.log(macronutrientesGr);
         break;

         // CASOS HOMBRES DEPORTISTAS

         case Deporteseleccionado == 'Deportista' && factorActividad == 'Menos de 3 horas semanales'  && Generoseleccionado =='hombre':
         macronutrientesGr = `Tu requerimiento de Carbohidratos es <b>${Math.trunc(GrChosHombresSed)}gr</b>,<br>
         Tu requerimiento de Proteinas es <b>${Math.trunc(GrProtHombreSed)}gr</b>,<br>
         Tu requerimiento de Grasas es <b>${Math.trunc(GrGrasasHombreSed)}gr</b>`;
         console.log(macronutrientesGr);
         break;

         case Deporteseleccionado == 'Deportista' && factorActividad == '3 horas semanales'  && Generoseleccionado =='hombre':
          macronutrientesGr = `Tu requerimiento de Carbohidratos es <b>${Math.trunc(GrChosHombreLeve)}gr</b>,<br>
          Tu requerimiento de Proteinas es<b> ${Math.trunc(GrProtHombreLeve)}gr</b>,<br>
          Tu requerimiento de Grasas es<b> ${Math.trunc(GrGrasasHombreLeve)}gr</b>`;
          console.log(macronutrientesGr);
          break;

          case Deporteseleccionado == 'Deportista' && factorActividad == '6 horas semanales'  && Generoseleccionado =='hombre':
            macronutrientesGr = `Tu requerimiento de Carbohidratos es <b>${Math.trunc(GrChosHombreMod)}gr</b>,<br>
            Tu requerimiento de Proteinas es <b>${Math.trunc(GrProtHombreMod)}gr</b>,<br>
            Tu requerimiento de Grasas es <b>${Math.trunc(GrGrasasHombreMod)}gr</b>`;
            console.log(macronutrientesGr);
            break;

          case Deporteseleccionado == 'Deportista' && factorActividad == '4-5 horas Diarias'  && Generoseleccionado =='hombre':
              macronutrientesGr = `Tu requerimiento de Carbohidratos es <b>${Math.trunc(GrChosHombreInt)}gr</b>,<br>
              Tu requerimiento de Proteinas es <b>${Math.trunc(GrProtHombreInt)}gr</b>,<br>
              Tu requerimiento de Grasas es <b>${Math.trunc(GrGrasasHombreInt)}gr</b>`;
              console.log(macronutrientesGr);
              break;


            // CASOS MUJERES NO DEPORTISTAS
          case Deporteseleccionado == 'No deportista' && factorActividad == 'Menos de 3 horas semanales'  && Generoseleccionado =='mujer':
            macronutrientesGr = `Tu requerimiento de Carbohidratos es <b>${Math.trunc(GrChosMujerSedND)}gr</b>,<br>
            Tu requerimiento de Proteinas es <b>${Math.trunc(GrProtMujerSedND)}gr</b>,<br>
            Tu requerimiento de Grasas es <b>${Math.trunc(GrGrasasMujerSedND)}gr</b>`;
            console.log(macronutrientesGr);
            break;

          case Deporteseleccionado == 'No deportista' && factorActividad == '3 horas semanales'  && Generoseleccionado =='mujer':
            macronutrientesGr = `Tu requerimiento de Carbohidratos es <b>${Math.trunc(GrChosMujerLeveND)}gr</b>,<br>
            Tu requerimiento de Proteinas es <b>${Math.trunc(GrProtMujerLeveND)}gr</b>,<br>
            Tu requerimiento de Grasas es <b>${Math.trunc(GrGrasasMujerLeveND)}gr</b>`;
            console.log(macronutrientesGr);
            break;

          case Deporteseleccionado == 'No deportista' && factorActividad == '6 horas semanales'  && Generoseleccionado =='mujer':
             macronutrientesGr = `Tu requerimiento de Carbohidratos es <b>${Math.trunc(GrChosMujerModND)}gr</b>,<br>
             Tu requerimiento de Proteinas es <b>${Math.trunc(GrProtMujerModND)}gr</b>,<br>
             Tu requerimiento de Grasas es <b>${Math.trunc(GrGrasasMujerModND)}gr</b>`;   
             console.log(macronutrientesGr);
             break;

          case Deporteseleccionado == 'No deportista' && factorActividad == '4-5 horas Diarias'  && Generoseleccionado =='mujer':
           macronutrientesGr = `Tu requerimiento de Carbohidratos es <b>${Math.trunc(GrChosMujerIntND)}gr</b>,<br>
           Tu requerimiento de Proteinas es <b>${Math.trunc(GrProtMujerIntND)}gr</b>,<br>
           Tu requerimiento de Grasas es <b>${Math.trunc(GrGrasasMujerIntND)}gr</b>`; 
           console.log(macronutrientesGr);  
           break;

          //  CASOS HOMBRES NO DEPORTISTAS
          case Deporteseleccionado == 'No deportista' && factorActividad == 'Menos de 3 horas semanales'  && Generoseleccionado =='hombre':
            macronutrientesGr = `Tu requerimiento de Carbohidratos es <b>${Math.trunc(GrChosHombresSedND)}gr</b>,<br>
            Tu requerimiento de Proteinas es <b>${Math.trunc(GrProtHombreSedND)}gr</b>,<br>
            Tu requerimiento de Grasas es <b>${Math.trunc(GrGrasasHombreSedND)}gr</b>`;
            console.log(macronutrientesGr);
            break;

           case Deporteseleccionado == 'No deportista' && factorActividad == '3 horas semanales'  && Generoseleccionado =='hombre':
           macronutrientesGr = `Tu requerimiento de Carbohidratos es <b>${Math.trunc(GrChosHombreLeveND)}gr</b>,<br>
           Tu requerimiento de Proteinas es <b>${Math.trunc(GrProtHombreLeveND)}gr</b>,<br>
           Tu requerimiento de Grasas es <b>${Math.trunc(GrGrasasHombreLeveND)}gr</b>`;
           console.log(macronutrientesGr);
           break; 

           case Deporteseleccionado == 'No deportista' && factorActividad == '6 horas semanales'  && Generoseleccionado =='hombre':
           macronutrientesGr = `Tu requerimiento de Carbohidratos es <b>${Math.trunc(GrChosHombreModND)}gr</b>,<br>
           Tu requerimiento de Proteinas es <b>${Math.trunc(GrProtHombreModND)}gr</b>,<br>
           Tu requerimiento de Grasas es <b>${Math.trunc(GrGrasasHombreModND)}gr</b>`;
           console.log(macronutrientesGr);
           break;

          case Deporteseleccionado == 'No deportista' && factorActividad == '4-5 horas Diarias'  && Generoseleccionado =='hombre':
          macronutrientesGr = `Tu requerimiento de Carbohidratos es <b>${Math.trunc(GrChosHombreIntND)}gr</b>,<br>
          Tu requerimiento de Proteinas es <b>${Math.trunc(GrProtHombreIntND)}gr</b>,<br>
          Tu requerimiento de Grasas es <b>${Math.trunc(GrGrasasHombreIntND)}gr</b>`;
          console.log(macronutrientesGr);
          break;
            
          default:
          macronutrientesGr = " Verifica que hayas ingresado todos los datos !"

    } 

    document.getElementById("resultadoMacronut").innerHTML = macronutrientesGr;
    console.log(macronutrientesGr);

    }