<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Descargar Reporte Médico en PDF</title>
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

<header>
    <h1>Descargar Reporte Médico en PDF</h1>
</header>

<div class="container">
    <h2>Seleccionar Paciente y Descargar Reporte</h2>
    <form action="generar_pdf.php" method="post">
        <label for="paciente">Seleccione Paciente:</label>
        <select id="paciente" name="paciente">
            <option value="1">Nombre del Paciente 1</option>
            <option value="2">Nombre del Paciente 2</option>
            <option value="3">Nombre del Paciente 3</option>
            <!-- Agrega más opciones según tus pacientes -->
        </select>
        <br><br>
        <input type="submit" value="Descargar PDF" class="button">
    </form>
</div>

<footer>
    <p>&copy; AlzheimerMeds</p>
</footer>

</body>
</html>
