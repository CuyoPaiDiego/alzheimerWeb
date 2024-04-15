<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Prescripción de Medicamentos</title>
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
        color: black;
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
        padding: 10px;
        position: fixed;
        bottom: 0;
        width: 100%;
    }
</style>
</head>
<body>

<header>
    <h1>Prescripción de Medicamentos</h1>
</header>

<div class="container">
    <form action="#" method="post">
        <label for="nombre">Nombre del Medicamento:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="nombre">Frecuencia:</label>
        <input type="text" id="frecuencia" name="nombre" required>

        <label for="hora">Dosís 1:</label>
        <input type="time" id="dosis1" name="hora" required>

        <label for="hora">Dosís 2:</label>
        <input type="time" id="dosis2" name="hora" required>

        <label for="hora">Dosís 3:</label>
        <input type="time" id="dosis3" name="hora" required>

        <label for="hora">Dosís 4:</label>
        <input type="time" id="dosis4" name="hora" required>
        <button id="5" type="button" class="btn btn-success">Prescribir</button>
    </form>
    <a href="Administracion.php" class="button">Volver</a>

</div>


</body>
 <!-- Imagen de fondo -->
 <img src="img/inicio.jpg" class="imagen-fondo" alt="Imagen de fondo">
</html>



<script>
    $(document).ready(function(){
        $("#5").click(function(){
            var nombre =document.getElementById("nombre").value;
            var frecuencia =document.getElementById("frecuencia").value;
            var dosis1 =document.getElementById("dosis1").value;
            var dosis2 =document.getElementById("dosis2").value;
            var dosis3 =document.getElementById("dosis3").value;
            var dosis4 =document.getElementById("dosis4").value;
            console.log(nombre);
            $.ajax({
                url:'ConexionPastillas.php',
                type:'POST', 
                data:{
                
                    nombre: nombre,
                    frecuencia: frecuencia,
                    dosis1: dosis1,
                    dosis2: dosis2,
                    dosis3: dosis3,
                    dosis4: dosis4,

                },
                success: function (response) {
                    console.log("Soy el response: ", response);
                    let resultado = response.replace(/\n/g, '');
                    console.log("Soy el resultado:", resultado);

                    if(resultado.includes("Registro exitoso")){
                        alert("Registro Exitoso")
                       
                    }else{
                        alert("Usuario y contraseña incorrectos")
                    
                    }
                },
                error: function(){
                    alert("Error de conexión")
                }
            });
   
        })
    });
</script>

