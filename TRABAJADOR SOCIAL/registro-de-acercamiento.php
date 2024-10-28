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

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre_completo = $_POST['nombre_completo'];
    $sexo = $_POST['sexo'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $curp = $_POST['curp'];
    $rfc = $_POST['rfc'];
    $nivel_estudios = $_POST['nivel_estudios'];
    $situacion_economica = $_POST['situacion_economica'];
    $idiomas = $_POST['idiomas'];
    $identificaciones_oficiales = $_POST['identificaciones_oficiales'];
    $domicilio = $_POST['domicilio'];
    $condiciones_domicilio = $_POST['condiciones_domicilio'];
    $datos_contacto = $_POST['datos_contacto'];
    $es_migrante = $_POST['es_migrante'];
    $es_refugiada = $_POST['es_refugiada'];
    $habla_espanol = $_POST['habla_espanol'];
    $tiene_discapacidad = $_POST['tiene_discapacidad'];
    $es_aislado = $_POST['es_aislado'];
    $fue_desplazada = isset($_POST['fue_desplazada']) ? $_POST['fue_desplazada'] : '';
    $pertenece_institucion = isset($_POST['pertenece_institucion']) ? $_POST['pertenece_institucion'] : '';
    $parentesco_victima = isset($_POST['parentesco_victima']) ? $_POST['parentesco_victima'] : '';
    $trabaja = isset($_POST['trabaja']) ? $_POST['trabaja'] : '';

    

    // Preparar la consulta SQL para insertar los datos
    $sql = "INSERT INTO tutor_informacion (nombre_completo, sexo, fecha_nacimiento, curp, rfc, nivel_estudios, 
                situacion_economica, idiomas, identificaciones_oficiales, domicilio, condiciones_domicilio, datos_contacto, 
                es_migrante, es_refugiada, habla_espanol, tiene_discapacidad, es_aislado, fue_desplazada, 
                pertenece_institucion, parentesco_victima, trabaja)
            VALUES ('$nombre_completo', '$sexo', '$fecha_nacimiento', '$curp', '$rfc', '$nivel_estudios', 
                    '$situacion_economica', '$idiomas', '$identificaciones_oficiales', '$domicilio', '$condiciones_domicilio', 
                    '$datos_contacto', '$es_migrante', '$es_refugiada', '$habla_espanol', '$tiene_discapacidad', 
                    '$es_aislado', '$fue_desplazada', '$pertenece_institucion', '$parentesco_victima', '$trabaja')";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        echo "Datos guardados correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>
