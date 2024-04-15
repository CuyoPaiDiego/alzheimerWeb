<!DOCTYPE html>
<html lang="es">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Información del Paciente</title>
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
            padding: px;
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
            padding: 5px;
            text-align: center;
        }

        label {
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
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

        .button:hover {
            background-color: #0056b3;
        }

        footer {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 0px;
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
    <h1>Actualizar Información del Paciente</h1>
</header>

<div class="container">
    <form action="#" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" placeholder="Nombre del paciente" required>

        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>

        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" placeholder="Teléfono del paciente" required>

        <label for="tipo_sangre">Tipo de sangre:</label>
        <input type="text" id="tipo_sangre" name="tipo_sangre" placeholder="Tipo de sangre" required>

        <label for="enfermedad">Enfermedades Hereditarias:</label>
        <input type="text" id="enfermedad" name="enfermedad" placeholder="Enfermedades Hereditarias" required>

        <div class="button-container">
            <button type="button" value="Agregar" class="button" id="agregar"> Agregar</button>
            <a href="Doctor.php" class="button">Volver</a>
            <a href="inicio.php" class="button">Salir</a>
        </div>
    </form>
</div>

<footer>
    <!-- Footer content here -->
</footer>

</body>
</html>
<script>
    $(document).ready(function(){
        $("#agregar").click(function(){
            var nombre =document.getElementById("nombre").value;
            var fecha_nacimiento =document.getElementById("fecha_nacimiento").value;
            var telefono =document.getElementById("telefono").value;
            var tipo_sangre =document.getElementById("tipo_sangre").value;
            var enfermedad =document.getElementById("enfermedad").value;
            
            console.log(nombre);
            $.ajax({
                url:'recetaconexion.php',
                type:'POST', 
                data:{
                
                    nombre: nombre,
                    fecha_nacimiento: fecha_nacimiento,
                    telefono: telefono,
                    tipo_sangre: tipo_sangre,
                    enfermedad: enfermedad,
                  

                },
                success: function (response) {
                    console.log("Soy el response: ", response);
                    let resultado = response.replace(/\n/g, '');
                    console.log("Soy el resultado:", resultado);

                    if(resultado.includes("Insercion exitosa")){
                        alert("Registro Exitoso")
                       
                    }else{
                        alert("Error de registro")
                    
                    }
                },
                error: function(){
                    alert("Error de conexión")
                }
            });
   
        })
    });
</script>
