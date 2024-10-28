<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta DB</title>
    <style type="text/css">
        table {
            border: solid 2px #7e7c7c;
            border-collapse: collapse;
        }
        th, h1 {
            background-color: #edf797;
        }
        td, th {
            border: solid 1px #7e7c7c;
            padding: 2px;
            text-align: center;
        }
    </style>
</head>
<body>

<?php
// Configuración de la conexión
$user = "root";
$pass = ""; // Añade tu contraseña si es necesario
$host = "localhost";
$datab = "dbformulario"; // Asegúrate de que este nombre coincida con el de tu base de datos

// Conexión a la base de datos
$connection = mysqli_connect($host, $user, $pass, $datab);

// Verificar conexión
if (!$connection) {
    die("No se ha podido conectar con el servidor: " . mysqli_connect_error());
}

// Verificar si los datos del formulario están definidos
$fecha = $_POST["fecha"] ?? null;
$num_reporte = $_POST["num_reporte"] ?? null;
$ciudad = $_POST["ciudad"] ?? null;
$nombre_caso = $_POST["nombre_caso"] ?? null;
$miembro_proteccion = $_POST["miembro_proteccion"] ?? null;
$narracion = $_POST["narracion"] ?? null;
$ubicacion = $_POST["ubicacion"] ?? null;
$elaborador = $_POST["elaborador"] ?? null;
$firma = $_POST["firma"] ?? null;
$observaciones = $_POST["observaciones"] ?? null;

// Verificar que todos los campos requeridos tengan valores
if (!$fecha || !$num_reporte || !$ciudad || !$nombre_caso || !$miembro_proteccion || !$narracion || !$ubicacion || !$elaborador || !$firma || !$observaciones) {
    die("Error: Todos los campos del formulario son obligatorios.");
}

// Insertar los datos en la tabla
$instruccion_SQL = "INSERT INTO registro_deteccion (fecha, num_reporte, ciudad, nombre_caso, miembro_proteccion, narracion, ubicacion, elaborador, firma, observaciones) 
                    VALUES ('$fecha', '$num_reporte', '$ciudad', '$nombre_caso', '$miembro_proteccion', '$narracion', '$ubicacion', '$elaborador', '$firma', '$observaciones')";

if (!mysqli_query($connection, $instruccion_SQL)) {
    echo "Error al insertar los datos: " . mysqli_error($connection);
    mysqli_close($connection);
    exit;
}

// Cerrar la conexión
mysqli_close($connection);

// Redirigir a la página de inicio
header("Location: fin.html"); // Asegúrate de que la ruta de la página de destino sea correcta
exit;
?>



</body>
</html>

// Preparar la consulta para evitar inyecciones SQL
        $stmt = $conn->prepare($sql);
        if ($stmt) {
            // Vincular los parámetros
            $stmt->bind_param(
                "ssssssssssss", 
                $nombre, 
                $rfc, 
                $curp, 
                $grado_estudios, 
                $sexo, 
                $correo, 
                $usuario, 
                $contrasena, 
                $fecha_nacimiento, 
                $titulo_obtenido, 
                $foto_perfil_nombre, 
                $cedula_profesional_nombre
            );
