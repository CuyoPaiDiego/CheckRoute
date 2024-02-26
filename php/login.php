<?php
$conexion = new mysqli('74.208.110.170','Admin','miguemipilin','chequeo');

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del cuerpo de la solicitud POST
    $user = $_POST['usuario'];
    $contra = $_POST['password'];
    
    // Construir la consulta SQL
    $sql = "select *from empleados where usuario = '$user' and password = '$contra';";

    // Ejecutar la consulta
    $result = $conexion->query($sql);
    
    // Verificar si la consulta fue exitosa
    if ($result) {
        // Verificar si hay al menos una fila de resultados
        if ($result->num_rows > 0) {
            // Autenticación exitosa
            echo "Autenticación exitosa";
            // Redirigir a otra página HTML, puedes usar JavaScript para hacerlo desde el lado del cliente
            // echo "<script>window.location.href = 'Index.html';</script>";
        } else {
            // No se encontraron coincidencias en la base de datos
            echo "Usuario o contraseña incorrectos";
        }
    } else {
        // Error en la consulta
        echo "Error al autenticar en la base de datos: " . $conexion->error;
    }

    // Cerrar la conexión
    $conexion->close();
} else {
    // Si no es una solicitud POST, responder con un mensaje de error
    echo "Error: Se esperaba una solicitud POST";
}
?>
