<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Registro de Usuarios</title>

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

        .button_azul {
            display: block; /* Para que el botón ocupe toda la anchura */
            background-color: blue;
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
</head>
<body>
    <div class="container">
        <h2>Registro de Usuarios</h2>
        <form>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            
            <label for="apellido_paterno">Apellido Paterno:</label>
            <input type="text" id="apellido_paterno" name="apellido_paterno" required>
            
            <label for="apellido_materno">Apellido Materno:</label>
            <input type="text" id="apellido_materno" name="apellido_materno" required>
            
            <label for="rol">Rol:</label>
            <select id="rol" name="rol" required>
                <option value="">Seleccione un rol</option>
                <option value="doctor">Doctor</option>
                <option value="administrativo">Administrativo</option>
                <option value="cuidador">Cuidador</option>
            </select>

            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required>

            <label for="contraseña">Contraseña:</label>
            <input type="password" id="contraseña" name="contraseña" required>
            <button id="4" type="button" class="btn btn-success">Registrar</button>
            
        </form>
        <a href="Administrativo.php" class="button_rojo">Volver</a>
   
        <a href="UsuariosInscritos.php" class="button_azul">Verificar Usuarios</a>
    </div>
</body>
   <!-- Imagen de fondo -->
   <img src="img/inicio.jpg" class="imagen-fondo" alt="Imagen de fondo">
</html>



<script>
    $(document).ready(function(){
        $("#4").click(function(){
            var nombre =document.getElementById("nombre").value;
            var apellido_paterno =document.getElementById("apellido_paterno").value;
            var apellido_materno =document.getElementById("apellido_materno").value;
            var rol =document.getElementById("rol").value;
            var usuario =document.getElementById("usuario").value;
            var contraseña =document.getElementById("contraseña").value;
            console.log(rol);
            $.ajax({
                url:'ConexionUsuarios.php',
                type:'POST', 
                data:{
                
                    nombre: nombre,
                    apellido_paterno: apellido_paterno,
                    apellido_materno:  apellido_materno,
                    rol: rol,
                    usuario: usuario,
                    contraseña: contraseña,

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
