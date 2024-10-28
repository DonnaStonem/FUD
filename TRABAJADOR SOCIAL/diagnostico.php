<?php
// Muestra errores para depuración
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "f_con_derechos"; // Cambia por tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Comprobar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopilar datos del formulario
    $nombre = $_POST['nombre'] ?? null;
    $direccion = $_POST['direccion'] ?? null;
    $tipo = $_POST['tipo'] ?? null;
    $descripcion = $_POST['descripcion'] ?? null;
    $servicios = $_POST['servicios'] ?? null;
    $tipos_servicios = $_POST['tipos_servicios'] ?? null;
    $horario = $_POST['horario'] ?? null;
    $contacto = $_POST['contacto'] ?? null;
    $capacidad = $_POST['capacidad'] ?? null;
    $fecha_deteccion = $_POST['fecha_deteccion'] ?? null;

    // Verificar que todos los campos requeridos no sean nulos
    if ($nombre && $direccion && $tipo && $descripcion && $servicios && $tipos_servicios && $horario && $contacto && $capacidad && $fecha_deteccion) {
        // Preparar la consulta
        $sql = "INSERT INTO actores (nombre, direccion, tipo, descripcion, servicios, tipos_servicios, horario, contacto, capacidad, fecha_deteccion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        // Preparar y vincular la declaración
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssssss", $nombre, $direccion, $tipo, $descripcion, $servicios, $tipos_servicios, $horario, $contacto, $capacidad, $fecha_deteccion);

        // Ejecutar la declaración
        if ($stmt->execute()) {
            echo "Nuevo registro creado exitosamente.";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Cerrar la declaración
        $stmt->close();
    } else {
        echo "Por favor, complete todos los campos requeridos.";
    }
}

// Cerrar la conexión
$conn->close();
?>
