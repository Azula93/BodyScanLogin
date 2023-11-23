
<?php
// Verificar si se ha enviado un archivo
if ($_FILES['nueva_foto']['error'] === UPLOAD_ERR_OK) {
    $nombre_temporal = $_FILES['nueva_foto']['tmp_name'];
    $nombre_archivo = $_FILES['nueva_foto']['name'];

    // Verificar si es una imagen
    $es_imagen = getimagesize($nombre_temporal);
    if ($es_imagen !== false) {
        // Mover la imagen a una ubicación permanente en el servidor
        $nueva_ruta = 'directorio_destino/' . $nombre_archivo; // Ruta donde se guardará la imagen
        move_uploaded_file($nombre_temporal, $nueva_ruta);

        // Aquí podrías guardar la ruta en la base de datos asociada al usuario
        // UPDATE usuarios SET ruta_imagen = '$nueva_ruta' WHERE id = 'ID_DEL_USUARIO';
        
        echo "La imagen se ha subido correctamente.";
    } else {
        echo "El archivo seleccionado no es una imagen válida.";
    }
} else {
    echo "Hubo un error al subir la imagen.";
}
?>



<form action="cambiarfoto.php" method="post" enctype="multipart/form-data">
    <input type="file" name="nueva_foto" accept="image/*">
    <input type="submit" value="Subir foto">
</form>
