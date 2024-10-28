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
// Validamos datos del servidor
$user = "root";
$pass = "";
$host = "localhost";

// Conectamos a la base de datos
$connection = mysqli_connect($host, $user, $pass);

// Obtenemos los datos del formulario
$fecha = $_POST["fecha"];
$num_reporte = $_POST["num_reporte"];
$ciudad = $_POST["ciudad"];
$nombre_caso = $_POST["nombre_caso"];
$miembro_proteccion = $_POST["miembro_proteccion"];
$narracion = $_POST["narracion"];
$ubicacion = $_POST["ubicacion"];
$elaborador = $_POST["elaborador"];
$firma = $_POST["firma"];
$observaciones = $_POST["observaciones"];

// Verificamos la conexión a la base de datos
if (!$connection) {
    echo "No se ha podido conectar con el servidor" . mysqli_connect_error();
    exit;
}

// Seleccionamos la base de datos
$datab = "dbformulario";
$db = mysqli_select_db($connection, $datab);

if (!$db) {
    echo "No se ha podido encontrar la base de datos";
    exit;
}

// Insertamos los datos de registro
$instruccion_SQL = "INSERT INTO registro_casos (fecha, num_reporte, ciudad, nombre_caso, miembro_proteccion, narracion, ubicacion, elaborador, firma, observaciones) 
                    VALUES ('$fecha', '$num_reporte', '$ciudad', '$nombre_caso', '$miembro_proteccion', '$narracion', '$ubicacion', '$elaborador', '$firma', '$observaciones')";

$resultado = mysqli_query($connection, $instruccion_SQL);

if (!$resultado) {
    echo "Error al insertar los datos";
    exit;
}

// Cerrar la conexión
mysqli_close($connection);

// Redirigir a la página de inicio
header("Location: inicio.html"); // Cambia 'inicio.html' por la página a la que quieres redirigir
exit;
?>


</body>
</html>
