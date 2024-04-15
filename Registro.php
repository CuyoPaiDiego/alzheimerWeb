<!DOCTYPE html>
<html lang="es">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Agregar Nuevo Paciente</title>
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
        padding: 20px;
        text-align: center;
    }

    label {
        margin-bottom: 10px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="date"],
    textarea {
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
        text-align: center;
    }

    .button:hover {
        background-color: #0056b3;
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
    <h1>Agregar Nuevo Paciente</h1>
</header>

<div class="container">
    <form action="#" method="post">
        <label for="nombre">Nombre del Paciente:</label>
        <input type="text" id="nombre" name="nombre" placeholder="Nombre completo" required>

        <label for="Apellidos">Apellidos:</label>
        <input type="text" id="Apellidos" name="fecha_nacimiento" required>

        <label for="Usuario">Teléfono:</label>
        <input type="text" id="Teléfono" name="Usuario" placeholder="Teléfono del paciente" required>


        <label for="Contraseña">Edad:</label>
        <input type="text" id="Edad" name="Contraseña" placeholder="Edad del paciente" required>


         <button id="2" type="button" class="btn btn-success button">Agregar Paciente</button>
    </form>
    <a href="Administrativo.php" class="button">Volver</a>
    <a href="inicio.php" class="button">Salir</a>
    <a href="PacientesRegistrados.php" class="button">Verificar Pacientes</a>

</div>



</body>
   <!-- Imagen de fondo -->
   <img src="img/inicio.jpg" class="imagen-fondo" alt="Imagen de fondo">
</html>
<script>
    $(document).ready(function(){
        $("#2").click(function(){
            var Nombre =document.getElementById("nombre").value;
            var Apellido =document.getElementById("Apellidos").value;
            var Telefono =document.getElementById("Teléfono").value;
            var Edad =document.getElementById("Edad").value;

            $.ajax({
                url:'AgregarPacienteNuevo.php',
                type:'POST', 
                data:{
                    Nombre: Nombre,
                    Apellido: Apellido,
                    Telefono: Telefono,
                    Edad: Edad,
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
                    alert("Error de conexión")
                }
            });
   
        })
    });
</script>

