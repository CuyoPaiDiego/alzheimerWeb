<!DOCTYPE html>
<html lang="es">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Administración de Medicamentos</title>
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
        margin-right: 10px;
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
    <h1>Administración de Medicamentos</h1>
</header>



<div class="container">
    <h2>Listado de Medicamentos</h2>
    <table>
        <thead>
        <tr>
            <th>Nombre del Medicamento</th>
            <th>Frecuencia</th>
            <th>Dosís 1er Hr</th>
            <th>Dosís 2da Hr</th>
            <th>Dosís 3er Hr</th>
            <th>Dosís 4ta Hr</th>
            
        </tr>
        </thead>
        <tbody>

        <tr>
        <?php
    
    $server = '159.54.132.73';
    $username = 'User';
    $password = '12345';
    $database = 'pastillero';

// Conexión a la base de datos
$db = new mysqli($server, $username, $password, $database);
  $sql=$db->query("select*from receta");

    

        // Mostrar historial médico del paciente
        foreach ($sql as $consulta) {
            echo '<tr>';
            echo '<td>' . $consulta['nombre'] . '</td>';
            echo '<td>' . $consulta['frecuencia'] . '</td>';
            echo '<td>' . $consulta['dosis1'] . '</td>';
            echo '<td>' . $consulta['dosis2'] . '</td>';
            echo '<td>' . $consulta['dosis3'] . '</td>';
            echo '<td>' . $consulta['dosis4'] . '</td>';
            echo '</tr>';
            
        }
        ?>
                                           
            
        </tr>
        </tbody>
        <!-- Agregar más medicamentos según sea necesario -->
    </table>
    <br />
    <br />

    <table>
        <tr>
            <td>
                <a href="Cuidador.php" class="button nav-link">Volver</a>
            </td>
            <td></td>
            <td>
                <a href="AgregarPastilla.php" class="button nav-link">Agregar</a>
            </td>
        </tr>
    </table>

</div>

<footer>
    

    
</footer>

</body>
</html>
 

    </table>


</div>



</body>
</html>


