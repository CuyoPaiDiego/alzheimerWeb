<?php
$server = '159.54.132.73';
$username = 'User';
$password = '12345';
$database = 'pastillero';

// Conexión a la base de datos
$db = new mysqli($server, $username, $password, $database);

// Verificar si la conexión fue exitosa
if ($db->connect_error) {
    die("Conexión fallida: " . $db->connect_error);
}

// Verificar si el formulario ha sido enviado y los datos están presentes
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario y escaparlos para evitar inyección SQL
    $nombre = $_POST['nombre'];
    $apellido_paterno = $_POST['apellido_paterno'];
    $apellido_materno = $_POST['apellido_materno'];
    $rol = $_POST['rol'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    // Consulta preparada para evitar inyección SQL
    $sql = "INSERT INTO usuario (nombre, ApellidoPaterno,ApellidoMaterno,rol,usuario,contrasenna) VALUES ('$nombre','$apellido_paterno','$apellido_materno','$rol','$usuario','$contraseña')";
    $resultado = $db->query($sql);

    if ($resultado) {
        // Asociar parámetros y ejecutar la consulta
        echo "Registro exitoso";
     
    } else {
        echo "Error al preparar la consulta: " . $db->error;
    }

    // Cerrar la conexión
    $db->close();
} else {
    echo "No se recibieron datos del formulario";
}

// Cerrar la conexión
$db->close();
?>
