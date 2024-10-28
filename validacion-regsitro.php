<?php
// Conexión a la base de datos
$servername = "localhost";
$username_db = "root";  // Cambiar según el usuario de MySQL
$password_db = "";      // Cambiar según la contraseña de MySQL
$dbname = "sistema_usuarios";

// Crear conexión
$conn = new mysqli($servername, $username_db, $password_db, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Encriptar contraseña

// Insertar datos en la base de datos
$sql = "INSERT INTO usuarios (nombre, email, username, password) VALUES ('$nombre', '$email', '$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso. <a href='index.html'>Iniciar sesión</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>



