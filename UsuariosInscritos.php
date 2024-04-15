<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Usuarios Registrados </title>
<style>


    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f7fa;
    }

    header {
        background-color: #007bff;
        color: white;
        padding: 20px;
        text-align: center;
    }

    .container {
        margin: 20px auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 80%;
        max-width: 800px;
    }
    .imagen-fondo {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1; /* Asegura que la imagen esté detrás del contenido */
            opacity: 0.5; /* Ajusta el nivel de transparencia */
        }
    h1 {
        margin-top: 0;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #007bff;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .button {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none;
        font-size: 16px;
        margin-top: 20px;
        display: inline-block;
    }

    .button:hover {
        background-color: #0056b3;
    }

    footer {
        background-color: #007bff;
        color: white;
        text-align: center;
        padding: 10px;
        position: fixed;
        bottom: 0;
        width: 100%;
    }
</style>
</head>
<body>
     <!-- Imagen de fondo -->
     <img src="img/inicio.jpg" class="imagen-fondo" alt="Imagen de fondo">

<header>
    <h1>Usuarios Registrados</h1>
</header>

<div class="container">
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Rol</th>
            <th>Usuario</th>
            <th>Contraseña</th>
        </tr>



        <?php
    $server = '159.54.132.73';
    $username = 'User';
    $password = '12345';
    $database = 'pastillero';

// Conexión a la base de datos
$db = new mysqli($server, $username, $password, $database);
  $sql=$db->query("select*from usuario");


    

        // Mostrar historial médico del paciente
        foreach ($sql as $consulta) {
            echo '<tr>';
            echo '<td>' . $consulta['idUsuario'] . '</td>';
            echo '<td>' . $consulta['Nombre'] . '</td>';
            echo '<td>' . $consulta['ApellidoPaterno'] . '</td>';
            echo '<td>' . $consulta['ApellidoMaterno'] . '</td>';
            echo '<td>' . $consulta['Rol'] . '</td>';
            echo '<td>' . $consulta['Usuario'] . '</td>';
            echo '<td>' . $consulta['Contrasenna'] . '</td>';
            echo '</tr>';
            
        }
        ?>
    </table>

    <a href="Administrativo.php" class="button">Volver</a>

</div>



</body>
</html>
