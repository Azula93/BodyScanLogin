
// Funcion para mostrar la contraseña al hacer click al icono del ojo
function mostrarPass(idPassword,idIcon){
    let inputPassword = document.getElementById(idPassword);
    let icon = document.getElementById(idIcon);

    // este if verifica si la contraseña es tipo password y si el icono tiene la clase "bi-eye-fill" para luego cambiarla y mostrar un icono diferente
    if(inputPassword.type == "password" && icon.classList.contains("bi-eye-fill")){
        inputPassword.type = "text";
        // aqui se cambia la clase del iciono para que se quite el icono del ojo normal y se muestre el ojo con el /
        icon.classList.replace("bi-eye-fill", "bi-eye-slash-fill");
    } else{
        inputPassword.type = "password";
        // aqui se hace lo contrario se quita el ojo con el / y se muestra el ojo normal
        icon.classList.replace("bi-eye-slash-fill", "bi-eye-fill");
    }   

}