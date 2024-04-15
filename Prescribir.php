<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Prescripción de Medicamentos</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 500px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            text-align: center;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"],
        input[type="password"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
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

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            color: #fff;
            cursor: pointer;
            font-size: 20px;
            margin-top: 10px;
            border-radius: 15px;
            margin-bottom: 10px; /* Agregado para separar el botón del formulario */
        }

        button:hover {
            background-color: #0056b3;
        }

        .button_rojo {
            display: block; /* Para que el botón ocupe toda la anchura */
            background-color: red;
            color: white;
            padding: 15px 0; /* Ajuste del padding para centrar verticalmente el texto */
            border: none;
            border-radius: 15px;
            cursor: pointer;
            text-decoration: none;
            font-size: 20px;
            margin-top: 10px; /* Cambiado para separar el botón del formulario */
            text-align: center; /* Centrar texto */
        }
    </style>
<body>
<!-- Imagen de fondo -->
<img src="img/inicio.jpg" class="imagen-fondo" alt="Imagen de fondo">

<header style="background-color: #007bff; color: white; padding: 20px; text-align: center;">
    <h1>Prescripción de Medicamentos</h1>
</header>

<div class="container py-4">
    <form id="prescripcionForm">
        <label for="nombre">Nombre Medicamento:</label>
        <input type="text" id="nombre" name="nombre" class="form-control mb-3" required>

        <label for="hora">Intervalo:</label>
        <select id="hora" name="rol" required>
                <option value="">Seleccione un intervalo</option>
                <option value="Cada 4 horas">cada 4 Horas</option>
                <option value="Cada 8 horas">cada 8 Horas</option>
                <option value="Cada 12 horas">cada 12 Horas</option>
                <option value="Cada 24 horas">cada 24 Horas</option>
            </select>
        <label for="Nodosís">Número de dosis:</label>
        <input type="number" id="Nodosís" name="Nodosís" class="form-control mb-3" required>

        <label for="fecha">Fecha de Consulta:</label>
        <input type="date" id="fecha" name="fecha" class="form-control mb-3" required>

        <button id="prescribirBtn" type="button" class="btn btn-success">Prescribir</button>
    </form>
    <a href="Doctor.php" class="btn btn-primary">Volver</a>
    <a href="Historial.php" class="btn btn-primary">Verificar</a>
</div>

<footer style="background-color: #007bff; color: white; text-align: center; padding: 10px; position: fixed; bottom: 0; width: 100%;">
   
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){
    $("#prescribirBtn").click(function(){
        var nombre = document.getElementById("nombre").value;
        var hora = document.getElementById("hora").value;
        var Nodosís = document.getElementById("Nodosís").value;
        var fecha = document.getElementById("fecha").value;
   
        

        $.ajax({
            url: 'prescripcionExito.php',
            type: 'POST',
            data: {
                nombre: nombre,
                hora: hora,
                Nodosís: Nodosís,
                fecha: fecha
            },
            success: function (response) {
                console.log("Soy el response: ", response);
                    let resultado = response.replace(/\n/g, '');
                    console.log("Soy el resultado:", resultado);

                    if(resultado.includes("Insercion exitosa")){
                        alert("Inserción Exitosa")
                    }else{
                        alert(response)
                    
                    }
            },
            error: function(){
                alert("Error de conexión");
            }
        });
    });
});
</script>

</body>
</html>
