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
    $Nombre = $_POST['nombre'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $telefono = $_POST['telefono'];
    $tipo_de_sangre = $_POST['tipo_sangre'];
    $enfermedad = $_POST['enfermedad'];

    // Consulta preparada para evitar inyección SQL
    $sql = "INSERT INTO actpaciente (Nombre,fecha_nacimiento, telefono,tipo_de_sangre,enfermedad) VALUES ('$Nombre','$fecha_nacimiento','$telefono','$tipo_de_sangre','$enfermedad')";
    $resultado = $db->query($sql);

    if ($resultado) {
        // Asociar parámetros y ejecutar la consulta
        echo "Insercion exitosa";
     
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
