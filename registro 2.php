<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbformulario2";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$fecha = $_POST['fecha'] ?? null;
$num_reporte = $_POST['num_reporte'] ?? null;
$ciudad = $_POST['ciudad'] ?? null;
$nombre_caso = $_POST['nombre_caso'] ?? null;
$miembro_proteccion = $_POST['miembro_proteccion'] ?? null;
$narracion_situacion_nna = $_POST['narracion_situacion_nna'] ?? null;
$narracion_redes_familiares = $_POST['narracion_redes_familiares'] ?? null;
$residencia_familiar = $_POST['residencia_familiar'] ?? null;
$sosten_economico = $_POST['sosten_economico'] ?? null;
$relacion_madre_familia = $_POST['relacion_madre_familia'] ?? null;
$patron_migracion = $_POST['patron_migracion'] ?? null;
$sistema_compadrazgo = $_POST['sistema_compadrazgo'] ?? null;
$espacios_socializacion = $_POST['espacios_socializacion'] ?? null;
$participacion_familiar = $_POST['participacion_familiar'] ?? null;
$alcoholismo_enfermedades = $_POST['alcoholismo_enfermedades'] ?? null;
$bilinguisimo_comunidad = $_POST['bilinguisimo_comunidad'] ?? null;
$registro_civil = $_POST['registro_civil'] ?? null;
$acta_nacimiento = $_POST['acta_nacimiento'] ?? null;
$hijo_no_vive_familia = $_POST['hijo_no_vive_familia'] ?? null;
$opinion_nna = $_POST['opinion_nna'] ?? null;
$cuidado_principal = $_POST['cuidado_principal'] ?? null;
$violencia_violencia = $_POST['violencia_violencia'] ?? null;
$golpes_insultos = $_POST['golpes_insultos'] ?? null;
$alimentacion = $_POST['alimentacion'] ?? null;
$ultima_visita_doctor = $_POST['ultima_visita_doctor'] ?? null;
$cartilla_vacunacion = $_POST['cartilla_vacunacion'] ?? null;
$cartilla_completa = $_POST['cartilla_completa'] ?? null;
$enfermedad = $_POST['enfermedad'] ?? null;
$asistencia_medica = $_POST['asistencia_medica'] ?? null;
$servicio_medico = $_POST['servicio_medico'] ?? null;
$discapacidad = $_POST['discapacidad'] ?? null;
$aditamentos = $_POST['aditamentos'] ?? null;
$escuela = $_POST['escuela'] ?? null;
$calificaciones = $_POST['calificaciones'] ?? null;
$clase_favorita = $_POST['clase_favorita'] ?? null;
$clase_dificil = $_POST['clase_dificil'] ?? null;
$hora_dormir = $_POST['hora_dormir'] ?? null;
$hora_levantar = $_POST['hora_levantar'] ?? null;
$hora_jugar = $_POST['hora_jugar'] ?? null;
$jugar = $_POST['jugar'] ?? null;
$socializar = $_POST['socializar'] ?? null;
$deporte = $_POST['deporte'] ?? null;
$observaciones_negacion = $_POST['observaciones_negacion'] ?? null;
$observaciones_afectacion = $_POST['observaciones_afectacion'] ?? null;
$familiograma = $_POST['familiograma'] ?? null;
$narracion_general = $_POST['narracion_general'] ?? null;
$fecha_plan_restitucion = $_POST['fecha_plan_restitucion'] ?? null;
$nombre_elaborador = $_POST['nombre_elaborador'] ?? null;
$firmas_elaboradores = $_POST['firmas_elaboradores'] ?? null;
$otros_datos = $_POST['otros_datos'] ?? null;

// Insertar los datos en la tabla
$sql = "INSERT INTO formulario (
    fecha, num_reporte, ciudad, nombre_caso, miembro_proteccion, narracion_situacion_nna, 
    narracion_redes_familiares, residencia_familiar, sosten_economico, relacion_madre_familia, 
    patron_migracion, sistema_compadrazgo, espacios_socializacion, participacion_familiar, 
    alcoholismo_enfermedades, bilinguisimo_comunidad, registro_civil, acta_nacimiento, 
    hijo_no_vive_familia, opinion_nna, cuidado_principal, violencia_violencia, golpes_insultos, 
    alimentacion, ultima_visita_doctor, cartilla_vacunacion, cartilla_completa, enfermedad, 
    asistencia_medica, servicio_medico, discapacidad, aditamentos, escuela, calificaciones, 
    clase_favorita, clase_dificil, hora_dormir, hora_levantar, hora_jugar, jugar, socializar, 
    deporte, observaciones_negacion, observaciones_afectacion, familiograma, narracion_general, 
    fecha_plan_restitucion, nombre_elaborador, firmas_elaboradores, otros_datos
) VALUES (
    '$fecha', '$num_reporte', '$ciudad', '$nombre_caso', '$miembro_proteccion', '$narracion_situacion_nna', 
    '$narracion_redes_familiares', '$residencia_familiar', '$sosten_economico', '$relacion_madre_familia', 
    '$patron_migracion', '$sistema_compadrazgo', '$espacios_socializacion', '$participacion_familiar', 
    '$alcoholismo_enfermedades', '$bilinguisimo_comunidad', '$registro_civil', '$acta_nacimiento', 
    '$hijo_no_vive_familia', '$opinion_nna', '$cuidado_principal', '$violencia_violencia', '$golpes_insultos', 
    '$alimentacion', '$ultima_visita_doctor', '$cartilla_vacunacion', '$cartilla_completa', '$enfermedad', 
    '$asistencia_medica', '$servicio_medico', '$discapacidad', '$aditamentos', '$escuela', '$calificaciones', 
    '$clase_favorita', '$clase_dificil', '$hora_dormir', '$hora_levantar', '$hora_jugar', '$jugar', '$socializar', 
    '$deporte', '$observaciones_negacion', '$observaciones_afectacion', '$familiograma', '$narracion_general', 
    '$fecha_plan_restitucion', '$nombre_elaborador', '$firmas_elaboradores', '$otros_datos'
)";

// Redirigir a la página de inicio
header("Location: fin.html"); // Asegúrate de que la ruta de la página de destino sea correcta
exit;

// Cerrar la conexión
$conn->close();
?>