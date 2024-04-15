<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap-5.2.3-dist/css/bootstrap.css" rel="stylesheet">
    <title>Pastillero Inteligente</title>
    <style>
        body {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif, sans-serif;
            margin: 20px;
            background-color: #f2f2f2;
        }

        #pastillas-list {
            list-style-type: none;
            padding: 0;
        }
        #pastillas-list li {
            margin-bottom: 10px;
        }

        .abs-center {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 75vh;
        }

        .fondo {
            background-color:
            background-repeat: no-repeat;
            background-size: 100%, 100%;
            
            
        }
    </style>
</head>
<body class="fondo">

    <div class="container">
        <div class="abs-center">
        <div class="row">

          <div class="col-12 col-md-12">
            <h1>AlzheimerMeds</h1>

            <ul id="pastillas-list"></ul>
          </div>          
        
            <div class="col-12 col-md-12">
                <div class="row">
                    <div class="col-3 col-md-6">
                        <br />
                    </div><br><br>
                    <div class="col-3 col-md-6">
                        <button class="btn btn-danger" onclick="eliminarPastilla()">Eliminar Pastilla</button>
                        <br />
                    </div><br><br>
                    <div class="col-3 col-md-6">
                      
                               <a href="Administracion.php" class="button">Volver</a>
                        <a href="inicio.php" class="button">Salir</a>
                    </div>
                    <div class="col-3 col-md-6">
                        
                    </div> 
                </div>
            </div> 
        </div>
        </div>
      </div>


<script>
    var pastillas = ["Medicamento 1", "Medicamento 2", "Medicamento 3"];

    function actualizarLista() {
        var pastillasList = document.getElementById("pastillas-list");
        pastillasList.innerHTML = ""; // Limpiar la lista antes de actualizar

        for (var i = 0; i < pastillas.length; i++) {
            var listItem = document.createElement("li");
            listItem.appendChild(document.createTextNode(pastillas[i]));
            pastillasList.appendChild(listItem);
        }
    }

    function agregarPastilla() {
        var nuevaPastilla = prompt("Nombre de la pastilla:");
        if (nuevaPastilla) {
            pastillas.push(nuevaPastilla);
            actualizarLista();
        }
    }

    function eliminarPastilla() {
        var indice = prompt("Índice de la pastilla a eliminar (comenzando desde 0):");
        if (indice !== null) {
            indice = parseInt(indice);
            if (!isNaN(indice) && indice >= 0 && indice < pastillas.length) {
                var pastillaEliminada = pastillas.splice(indice, 1);
                alert("Se eliminó la pastilla: " + pastillaEliminada);
                actualizarLista();
            } else {
                alert("Índice inválido");
            }
        }
    }
    // Inicializar la lista al cargar la página
    window.onload = function () {
        actualizarLista();
    };
</script>

</body>
</html>