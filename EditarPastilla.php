<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editar Pastillas en PHP</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
    }
    .pill {
        display: inline-block;
        padding: 5px 10px;
        margin: 5px;
        border-radius: 20px;
        color: white;
        background-color: #007bff; /* Tonalidad azul */
    }
    .container {
        max-width: 600px;
        margin: 0 auto;
        text-align: center;
        padding-top: 50px;
    }
    .input-group {
        margin-bottom: 20px;
    }
    .input-group input[type="text"] {
        padding: 10px;
        width: 200px;
    }
    .input-group button {
        padding: 10px 20px;
        background-color: #007bff;
        border: none;
        color: white;
        cursor: pointer;
    }
</style>



</head>
<body>


<div class="container">
    <h2>Editar Pastillas</h2>
    <script>
    var pastillas = ["Medicamento 1", "Medicamento 2", "Medicamento 3"];

 

    <div class="input-group">
        <form method="post">
            <input type="text" name="pill_name" placeholder="Nombre de la pastilla">
            <button type="submit">Editar</button>

            <a href="Administracion.php" class="button">Volver</a>
           
       

        </form>

    </div>
    <div class="pill-container">
        <?php
        // Manejar la adición de pastillas
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty($_POST["pill_name"])) {
                $pill_name = $_POST["pill_name"];
                $current_datetime = date("Y-m-d H:i:s"); // Obtener fecha y hora actual
                echo '<span class="pill">' . htmlspecialchars($pill_name) . ' - ' . $current_datetime . '</span>';
            }
        }
        ?>
    </div>
</div>
</body>
</html>