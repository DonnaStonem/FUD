<?php
// Configuración de la conexión a la base de datos
$host = "localhost";  // Cambia esto si es necesario
$dbname = "f_con_derechos";  // Asegúrate de usar el nombre correcto de tu base de datos
$username = "root";  // Usuario de la base de datos
$password = "";  // Contraseña de la base de datos, si la tienes

// Conectar a la base de datos
$conn = new mysqli($host, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $rfc = isset($_POST['rfc']) ? $_POST['rfc'] : '';
    $curp = isset($_POST['curp']) ? $_POST['curp'] : '';
    $grado_estudios = isset($_POST['grado_estudios']) ? $_POST['grado_estudios'] : '';
    $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : '';
    $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
    $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
    $contrasena = isset($_POST['contrasena']) ? $_POST['contrasena'] : '';
    $fecha_nacimiento = isset($_POST['fecha_nacimiento']) ? $_POST['fecha_nacimiento'] : '';
    $titulo_obtenido = isset($_POST['titulo_obtenido']) ? $_POST['titulo_obtenido'] : '';

    // Verificar que se hayan enviado los archivos
    if (isset($_FILES['foto_perfil']) && isset($_FILES['cedula_profesional'])) {
        $foto_perfil = $_FILES['foto_perfil'];
        $cedula_profesional = $_FILES['cedula_profesional'];

        // Ruta de destino
        $upload_dir = 'uploads/';

        // Verificar si la carpeta 'uploads' existe, si no, crearla
        if (!is_dir($upload_dir)) {
            if (!mkdir($upload_dir, 0777, true)) {
                die('Error al crear la carpeta de uploads.');
            }
        }

        // Procesar la foto de perfil
        $foto_perfil_nombre = basename($foto_perfil['name']);
        $foto_perfil_ruta = $upload_dir . $foto_perfil_nombre;

        if (move_uploaded_file($foto_perfil['tmp_name'], $foto_perfil_ruta)) {
            echo "La foto de perfil ha sido subida correctamente.<br>";
        } else {
            echo "Error al subir la foto de perfil.<br>";
        }

        // Procesar la cédula profesional
        $cedula_profesional_nombre = basename($cedula_profesional['name']);
        $cedula_profesional_ruta = $upload_dir . $cedula_profesional_nombre;

        if (move_uploaded_file($cedula_profesional['tmp_name'], $cedula_profesional_ruta)) {
            echo "La cédula profesional ha sido subida correctamente.<br>";
        } else {
            echo "Error al subir la cédula profesional.<br>";
        }

        // Insertar los datos en la base de datos
        $sql = "INSERT INTO empleados(nombre, rfc, curp, grado_estudios, sexo, correo, usuario, contrasena, fecha_nacimiento, titulo_obtenido, foto_perfil, cedula_profesional)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

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

            // Ejecutar la consulta
            if ($stmt->execute()) {
                echo "Empleado registrado exitosamente en la base de datos.<br>";
            } else {
                echo "Error al registrar el empleado en la base de datos: " . $stmt->error . "<br>";
            }

            // Cerrar el statement
            $stmt->close();
        } else {
            echo "Error en la preparación de la consulta: " . $conn->error . "<br>";
        }
    } else {
        echo "Error: No se enviaron correctamente los archivos.";
    }

    // Cerrar la conexión
    $conn->close();
}
?>
