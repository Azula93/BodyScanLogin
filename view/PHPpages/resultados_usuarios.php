<?php
    // con este codigo se enlazan los datos de las paginas mencionadas 👇
    require_once("c://wamp64/www/login/view/head/header.php");
    ?>

<?php
    // Supongamos que tu clase db está definida en el archivo 'db.php'
require_once ("c://wamp64/www/login/config/db.php");

// Crear una nueva instancia de la clase db
$db = new db();

// Llamar al método conexion
$conexion = $db->conexion();

// Ahora puedes usar $conexion para interactuar con tu base de datos


?>

<?php


// Obtener los datos del POST
// Obtener los datos del POST
$data = json_decode(file_get_contents('php://input'), true);
$usuario_id = $data['usuario_id'];
$imc = $data['imc'];
$icc = $data['icc'];


// Preparar la consulta SQL
$sql = "INSERT INTO resultados_usuarios (usuario_id, imc, icc) VALUES (?, ?, ?)
        ON DUPLICATE KEY UPDATE imc = VALUES(imc), icc = VALUES(icc)";
$stmt = $conexion->prepare($sql);

// Vincular los parámetros
$stmt = $conexion->prepare($sql);
$stmt->bindValue(1, $usuario_id);
$stmt->bindValue(2, $imc);
$stmt->bindValue(3, $icc);


// Ejecutar la consulta
if ($stmt->execute() === TRUE) {
    echo json_encode(['success' => true]);
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>


<?php
      // con este codigo se enlazan los datos de las paginas mencionadas 👇
      require_once("c://wamp64/www/login/view/head/footer.php");

    ?>