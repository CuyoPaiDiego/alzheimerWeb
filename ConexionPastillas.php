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
    $frecuencia = $_POST['frecuencia'];
    $dosis1 = $_POST['dosis1'];
    $dosis2 = $_POST['dosis2'];
    $dosis3 = $_POST['dosis3'];
    $dosis4 = $_POST['dosis4'];

    // Consulta preparada para evitar inyección SQL
    $sql = "INSERT INTO receta (nombre, frecuencia,dosis1,dosis2,dosis3,dosis4) VALUES ('$nombre','$frecuencia','$dosis1','$dosis2','$dosis3','$dosis4')";
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

