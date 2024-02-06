// funcion para limitar la cantidad de numeros ingresados en los inputs
function limitarNumero(input, maxLength) {
  if (input.value.length > maxLength) {
    input.value = input.value.slice(0, maxLength);
    document.getElementById('errorMensajeForm').textContent = 'Máximo 2 dígitos permitidos.';
  } else {
    document.getElementById('errorMensajeForm').textContent = '';
  }
};


document.getElementById('abrirFormulario').addEventListener('click', function() {
  // Abre una nueva ventana o pestaña con un formulario
  let nuevaVentana = window.open('formulario.php', 'Formulario', 'width=400,height=300');
  
  // Puedes manipular la nueva ventana aquí si es necesario
  nuevaVentana.focus();
});
