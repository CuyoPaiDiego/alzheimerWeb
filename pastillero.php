<?php
require 'setting.php';
class conexion{
    private $conector = null;

    public function getConexion()
    {
        $this->conector = new PDO("sqlsrv:server=".SERVIDOR.";database=".DATABASE,USUARIO,PASSWORD);
        //$this->conector->exec("SET CHARACTER SET utf8");

        return $this->conector;

    }
}


$con = new conexion();

if($con->getConexion() != null){
    echo "Conexion exitosa";
    

}else{
    echo "Error al conectarse a la base de datos";
} 
 
?>

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
            background-image: url(img/banner_Pastillero.jpg);
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
            <h1>Pastillero Inteligente</h1>

            <ul id="pastillas-list"></ul>
          </div>          
        
            <div class="col-12 col-md-12">
                <div class="row">
                    <div class="col-3 col-md-6">
                        <button class="btn btn-success" onclick="agregarPastilla()">Agregar Pastilla</button>
                        <br />
                    </div><br><br>
                    <div class="col-3 col-md-6">
                        <button class="btn btn-danger" onclick="eliminarPastilla()">Eliminar Pastilla</button>
                        <br />
                    </div><br><br>
                    <div class="col-3 col-md-6">
                        <button class="btn btn-success" onclick="modificarPastilla()">Modificar Pastilla</button>
                    </div>
                    <div class="col-3 col-md-6">
                        <button class="btn btn-danger"onclick="notificar()">Notificar</button>
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

    function modificarPastilla() {
        var indice = prompt("Índice de la pastilla a modificar (comenzando desde 0):");
        if (indice !== null) {
            indice = parseInt(indice);
            if (!isNaN(indice) && indice >= 0 && indice < pastillas.length) {
                var nuevoNombre = prompt("Nuevo nombre de la pastilla:");
                if (nuevoNombre !== null) {
                    pastillas[indice] = nuevoNombre;
                    actualizarLista();
                }
            } else {
                alert("Índice inválido");
            }
        }
    }

    function notificar() {
        alert("Es hora de tomar tus pastillas.");
    }

    // Inicializar la lista al cargar la página
    window.onload = function () {
        actualizarLista();
    };
</script>

</body>
</html>