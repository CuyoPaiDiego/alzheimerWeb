<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Historial Médico del Paciente</title>
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
    .imagen-fondo {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1; /* Asegura que la imagen esté detrás del contenido */
            opacity: 0.5; /* Ajusta el nivel de transparencia */
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
    <h1>Historial Médico del Paciente</h1>
</header>

<div class="container">
    <table>
        <tr>
            <th>Nombre</th>
            <th>Fecha de nacimiento</th>
            <th>Teléfono</th>
            <th>Tipo de sangre</th>
            <th>Enfermedad Hereditaria</th>
        </tr>
        <?php
    
    $server = '159.54.132.73';
    $username = 'User';
    $password = '12345';
    $database = 'pastillero';

// Conexión a la base de datos
$db = new mysqli($server, $username, $password, $database);
  $sql=$db->query("select*from actpaciente");

    
        // Mostrar historial médico del paciente
        foreach ($sql as $consulta) {
            echo '<tr>';
            echo '<td>' . $consulta['Nombre'] . '</td>';
            echo '<td>' . $consulta['fecha_nacimiento'] . '</td>';
            echo '<td>' . $consulta['telefono'] . '</td>';
            echo '<td>' . $consulta['tipo_de_sangre'] . '</td>';
            echo '<td>' . $consulta['enfermedad'] . '</td>';
            echo '</tr>';
        }
        ?>
    </table>
    <a href="Doctor.php" class="button">Volver</a>
</div>



</body>
</html>

