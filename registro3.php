<?php
// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbformulario3";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$fecha = $_POST['fecha'] ?? null;
$numero_reporte = $_POST['num_reporte'] ?? null;
$ciudad = $_POST['ciudad'] ?? null;
$nombre_caso = $_POST['nombre_caso'] ?? null;
$miembro_proteccion = $_POST['miembro_proteccion'] ?? null;
$narracion = $_POST['narracion'] ?? null;
$registro_dibujo = $_POST['registro_dibujo'] ?? null;
$registro_molestia = $_POST['registro_molestia'] ?? null;
$temores = $_POST['temores'] ?? null;
$adulto_significativo = $_POST['adulto_significativo'] ?? null;

// Preparar y ejecutar la consulta
$stmt = $conn->prepare("INSERT INTO tabla3 (fecha, num_reporte, ciudad, nombre_caso, miembro_proteccion, narracion, registro_dibujo, registro_molestia, temores, adulto_significativo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param('ssssssssss', $fecha, $numero_reporte, $ciudad, $nombre_caso, $miembro_proteccion, $narracion, $registro_dibujo, $registro_molestia, $temores, $adulto_significativo);

if ($stmt->execute()) {
    // Redirigir a la página de inicio si la inserción fue exitosa
    header("Location: fin.html");
    exit;
} else {
    echo "Error: " . $stmt->error;
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>
