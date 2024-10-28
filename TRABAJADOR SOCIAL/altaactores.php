<?php
// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Datos de conexión a la base de datos
$servername = "localhost";  // Servidor de la base de datos
$username = "root";         // Nombre de usuario
$password = "";             // Contraseña
$dbname = "f_con_derechos";  // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

    // Verificar si los campos están definidos
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
    $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : null;
    $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : null;
    $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : null;
    $servicios = isset($_POST['servicios']) ? $_POST['servicios'] : null;
    $tipos_servicios = isset($_POST['tipos_servicios']) ? $_POST['tipos_servicios'] : null;
    $horario = isset($_POST['horario']) ? $_POST['horario'] : null;
    $contacto = isset($_POST['contacto']) ? $_POST['contacto'] : null;
    $capacidad = isset($_POST['capacidad']) ? $_POST['capacidad'] : null;
    $fecha_deteccion = isset($_POST['fecha_deteccion']) ? $_POST['fecha_deteccion'] : null;

    // Verificar si alguna variable es null
    if (is_null($nombre) || is_null($direccion) || is_null($tipo) || is_null($descripcion) || 
        is_null($servicios) || is_null($tipos_servicios) || is_null($horario) || 
        is_null($contacto) || is_null($capacidad) || is_null($fecha_deteccion)) {
        die("Error: Uno o más campos del formulario están vacíos.");
    }

    // Preparar la consulta SQL
    $sql = "INSERT INTO actores (nombre, direccion, tipo, descripcion, servicios, tipos_servicios, horario, contacto, capacidad, fecha_deteccion)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssss", $nombre, $direccion, $tipo, $descripcion, $servicios, $tipos_servicios, $horario, $contacto, $capacidad, $fecha_deteccion);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Nuevo actor registrado exitosamente.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Cerrar conexión
    $stmt->close();
    $conn->close();
} else {
    echo "No se han enviado datos.";
}
?>
