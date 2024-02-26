<?php
$conexion = new mysqli('74.208.110.170','Admin','miguemipilin','chequeo');

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del cuerpo de la solicitud POST para crear el horario
    $id_crearHorario = $_POST['id_crearHorario'];
    $salida = $_POST['salida'];
    $llegada = $_POST['llegada'];
    $ruta = $_POST['ruta'];
    $fecha = $_POST['fecha'];

    // Construir la consulta SQL
    $sql = "INSERT INTO horarios(unidad, horaSalida, horaLlegada, ruta, fecha) VALUES ($id_crearHorario, '$salida', '$llegada', '$ruta', '$fecha')";

    // Ejecutar la consulta
    $result = $conexion->query($sql);

    // Verificar si la consulta fue exitosa
    if ($result) {
        // Enviar una respuesta al cliente (puedes personalizar el contenido)
        echo "Inserción exitosa";
    } else {
        // Enviar una respuesta al cliente (puedes personalizar el contenido)
        echo "Error al insertar en la base de datos: " . $conexion->error;
    }

    // Cerrar la conexión
    $conexion->close();
} else {
    // Si no es una solicitud POST, responder con un mensaje de error
    echo "Error: Se esperaba una solicitud POST";
}
?>
