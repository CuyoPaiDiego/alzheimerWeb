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

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Telefono = $_POST['Telefono'];
    $Edad = $_POST['Edad'];

    // Consulta preparada para evitar inyección SQL
    $sql = "INSERT INTO pacientes (Nombre, Apellido,Telefono,Edad) VALUES ('$Nombre','$Apellido','$Telefono','$Edad')";

    // Preparar la consulta
    $resultado = $db->query($sql);
    
    // Verificar si la preparación de la consulta fue exitosa
    if ($resultado) {
        // Asociar parámetros y ejecutar la consulta
        echo "Insercion exitosa";
     
    } else {
        echo "Error al preparar la consulta: " . $db->error;
    }

    // Cerrar la conexión
    $db->close();
}
?>

