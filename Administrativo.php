<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Interfaz Administrativo</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
        padding: 150px;
        background-color: #ffffff;
        border-radius: 50px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 80%;
        max-width: 800px;
        justify-content:center;
        justify-items: center;
    }

    h1 {
        margin-top: 0;
    }

    .button {
        background-color: #007bff;
        color: white;
        padding: 15px 50px;
        border: none;
        border-radius: 15px;
        cursor: pointer;
        text-decoration: none;
        font-size: 20px;
        margin: 25px;
        
    }

    .button_rojo {
        background-color: red;
        color: white;
        padding: 15px 50px;
        border: none;
        border-radius: 15px;
        cursor: pointer;
        text-decoration: none;
        font-size: 20px;
        margin: 25px;
        
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
    .imagen-fondo {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1; /* Asegura que la imagen esté detrás del contenido */
            opacity: 0.5; /* Ajusta el nivel de transparencia */
        }
    .salir{
        background-color:"red";
    }
</style>
</head>
<body>
 <!-- Imagen de fondo -->
 <img src="img/inicio.jpg" class="imagen-fondo" alt="Imagen de fondo">
<header>
    <h1>Bienvenido, Administrativo</h1>
</header>

<div class="container d-grid gap-2 d-md-block">
    <h2>Funciones Disponibles</h2>
    <ul class="nav">
        <li class="nav-item"><a href="Registro.php" class="button nav-link">Registrar Nuevos Pacientes</a></li>
        <li><a href="AltasUsuarios.php" class="button nav-link">Registrar Nuevos Usuarios</a></li>
        <li><a href="Reportes.php" class="button nav-link">Generar Reportes</a></li>
        <a href="inicio.php" class="button_rojo">Salir</a>
        
    </ul>
</div>

   




</body>

</html>

<script
    