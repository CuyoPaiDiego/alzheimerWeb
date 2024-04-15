
<?php
$server = '159.54.132.73';
$username = 'User';
$password = '12345';
$database = 'pastillero';

$db = new mysqli($server, $username, $password, $database);

if ($db->connect_error) {
    die("Conexión fallida: " . $db->connect_error);
}
// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tus credenciales de usuario (deberían estar en una base de datos)
    $usuario_valido = "usuario";
    $contrasena_valida = "contrasena";

    // Obtener los datos del formulario
    $usuario_ingresado = $_POST['username'];
    $contrasena_ingresada = $_POST['password'];
   


    $sql = "select *from usuario where Usuario = '$usuario_ingresado' and Contrasenna = '$contrasena_ingresada' and Rol='Doctor';";

    $resultado = $db->query($sql);

    // Verificar las credenciales
    if ($resultado) {
        if($resultado->num_rows > 0){
            echo "Autenticación exitosa";
        } else{
        echo "Usuario invalido";
        }
        // Iniciar sesión y redirigir a la página de inicio
       
    } else {
        // Mostrar un mensaje de error si las credenciales son incorrectas
        echo "Error al hacer la conexion";
    }
    $db->close();
}else {
    // Si no es una solicitud POST, responder con un mensaje de error
    echo "Error: Se esperaba una solicitud POST";
}
?>