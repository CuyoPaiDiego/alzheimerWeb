<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Corregir Medicamentos</title>
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
        max-width: 600px;
    }

    h1 {
        margin-top: 0;
    }

    form {
        display: flex;
        flex-direction: column;
        color: white;
        padding: 20px;
        text-align: center;
        
    }

    label {
        margin-bottom: 10px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="time"],
    input[type="date"] {
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
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

<header>
    <h1>Guardar Cambios</h1>
</header>  

<div class="container">
    <form action="#" method="post">
        <label for="nombre">Nombre del Medicamento:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="hora">Hora de Toma:</label>
        <input type="time" id="hora" name="hora" required>

        <label for="fecha">Fecha de Prescripción:</label>
        <input type="date" id="fecha" name="fecha" required>

        <input type="submit" value="Guardar Cambios" class="button">
    </form>
    <a href="EditarPastilla.php" class="button">Volver</a>
</div>

<footer>
    <p>&copy; AlzheimerMeds</p>
</footer>

</body>
</html>