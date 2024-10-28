<?php
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

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger datos del formulario
    $lugar_solicitud = $conn->real_escape_string($_POST['lugar_solicitud']);
    $fecha_solicitud = $conn->real_escape_string($_POST['fecha_solicitud']);
    $quien_realiza_solicitud = $conn->real_escape_string($_POST['quien_realiza_solicitud']);
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $primer_apellido = $conn->real_escape_string($_POST['primer_apellido']);
    $segundo_apellido = $conn->real_escape_string($_POST['segundo_apellido']);
    $edad = $conn->real_escape_string($_POST['edad']);
    $nacimiento = $conn->real_escape_string($_POST['nacimiento']);
    $enfermedades_alergias = $conn->real_escape_string($_POST['enfermedades_alergias']);
    $telefono_movil = $conn->real_escape_string($_POST['telefono_movil']);
    $telefono_fijo = $conn->real_escape_string($_POST['telefono_fijo']);
    $calle = $conn->real_escape_string($_POST['calle']);
    $codigo_postal = $conn->real_escape_string($_POST['codigo_postal']);
    $numero_exterior = $conn->real_escape_string($_POST['numero_exterior']);
    $numero_interior = $conn->real_escape_string($_POST['numero_interior']);
    $colonia = $conn->real_escape_string($_POST['colonia']);
    $localidad = $conn->real_escape_string($_POST['localidad']);
    $delegacion = $conn->real_escape_string($_POST['delegacion']);
    $entidad_federativa = $conn->real_escape_string($_POST['entidad_federativa']);
    $relato_hechos = $conn->real_escape_string($_POST['relato_hechos']);

    // Construir la consulta SQL
    $sql = "INSERT INTO solicitudes (lugar_solicitud, fecha_solicitud, quien_realiza_solicitud, nombre, primer_apellido, segundo_apellido, edad, fecha_nacimiento, enfermedades_alergias, telefono_movil, telefono_fijo, calle, codigo_postal, numero_exterior, numero_interior, colonia, localidad, delegacion, entidad_federativa, relato_hechos) 
            VALUES ('$lugar_solicitud', '$fecha_solicitud', '$quien_realiza_solicitud', '$nombre', '$primer_apellido', '$segundo_apellido', '$edad', '$nacimiento', '$enfermedades_alergias', '$telefono_movil', '$telefono_fijo', '$calle', '$codigo_postal', '$numero_exterior', '$numero_interior', '$colonia', '$localidad', '$delegacion', '$entidad_federativa', '$relato_hechos')";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        echo "Registro guardado exitosamente.";
    } else {
        echo "Error al guardar el registro: " . $conn->error; // Mostrar error específico
    }

    // Cerrar la conexión
    $conn->close();
}
?>

?>
