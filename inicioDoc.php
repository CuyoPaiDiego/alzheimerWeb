<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap-5.2.3-dist/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Iniciar sesión</title>



    <style>
        .abs-center {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 75vh;
        }

        .gradient-custom {
        /* fallback for old browsers */
        background: #6a11cb;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
        }
    </style>

</head>
<body>
    <!--<h2>class="btn btn-success"Iniciar sesión</h2>
    <form action="Doctor.php" method="post">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required>
       
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
       
        <button type="Doctor.php" class="btn btn-success">Iniciar sesión</button>
    </form>-->

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">

                    <div class="mb-md-5 mt-md-4 pb-5">
                    <form action="Doctor.php" method="post">
                    <h2 class="fw-bold mb-2 text-uppercase">Iniciar sesión</h2>
                    <p class="text-white-50 mb-5">¡Por favor, introduce tu usuario y contraseña!</p>

                    <div class="form-outline form-white mb-4">
                        <label class="form-label" for="username">Usuario:</label>
                        <input class="form-control form-control-lg" type="text" id="username" name="username" required>
                    </div>

                    <div class="form-outline form-white mb-4">
                        <label class="form-label" for="password">Contraseña:</label>
                        <input class="form-control form-control-lg" type="password" id="password" name="password" required>
                    </div>

                     <button id="1" type="button" class="btn btn-success">Iniciar sesión</button>

                    </form>

                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                        <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                        <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                        <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                    </div>

                    </div>

                </div>
                </div>
            </div>
            </div>
        </div>
        </section>

</body>
</html>

<script>
    $(document).ready(function(){
        $("#1").click(function(){
            var usuario =document.getElementById("username").value;
            var contraseña =document.getElementById("password").value;
            console.log(usuario);
            console.log(contraseña);
            $.ajax({
                url:'LoginDoc.php',
                type:'POST', 
                data:{
                    username: usuario,
                    password: contraseña
                },
                success: function (response) {
                    console.log("Soy el response: ", response);
                    let resultado = response.replace(/\n/g, '');
                    console.log("Soy el resultado:", resultado);

                    if(resultado.includes("Autenticación exitosa")){
                        alert("Autenticación Exitosa")
                        window.location.href='Doctor.php'
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