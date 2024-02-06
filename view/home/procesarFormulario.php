<?php
// procesar_encuesta.php

// Recoger datos del formulario
$respuestaPregunta1 = $_POST['pregunta1'];
$respuestaPregunta2 = $_POST['pregunta2'];
// Recoge más respuestas según sea necesario

// Realizar lógica para determinar la información a mostrar
if ($respuestaPregunta1 == 'opcion1' && $respuestaPregunta2 == 'opcion1') {
    // Mostrar información A
    header("Location: informacion_a.php");
    exit();
} else {
    // Mostrar información B
    header("Location: informacion_b.php");
    exit();
}
?>
