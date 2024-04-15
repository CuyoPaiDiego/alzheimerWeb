<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<link rel="stylesheet" href="css/style.ss"/>
<title>Control de Medicamentos</title>
<style>
 body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
       
    }
    header {
        background-color: #115cd6;
        color: white;
        padding: 20px;
        text-align: center;
    }
    
   section {
        padding: 20px;
        background-color: #94ccdb;
        margin: 20px;
        border-radius: 10px;
    }
    footer {
        background-color: #4CAF50;
        color: white; 
        text-align: center;
        padding: 10px;
        position: fixed;
        bottom: 0;
        width: 100%;
    }

    /* Estilos para los botones */
    .boton {
    display: inline-block;
    padding: 20px 50px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    text-decoration: none;
    text-align: center;
    font-size: 20px;
    margin: 20px auto;
    display: block;
    width: 250px;
}

.icono {
    height: 30px;
    width: 30px;
    vertical-align: middle;
    margin-right: 10px;
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

        .contenedor-blanco {
            /*background-color: white;*/ 
            border-radius: 10px;
            padding: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            z-index: 1; /* Asegura que los botones estén sobre la imagen de fondo */
        }
    </style>
</head>
<body>
    <!-- Imagen de fondo -->
    <img src="img/inicio.jpg" class="imagen-fondo" alt="Imagen de fondo">

    <header>
        <h1>Sistema de Control de Medicamentos</h1>
    </header>

    <div class="contenedor-blanco">
        <!-- Botones -->
        <a href="inicioAdmin.php" class="boton"><ion-icon class="icono" name="desktop-outline"></ion-icon> Administrativo</a>
        <a href="InicioDoc.php" class="boton"><ion-icon class="icono" name="fitness-outline"></ion-icon> Doctor</a>
        <a href="InicioCui.php" class="boton"><ion-icon class="icono" name="people-circle-outline"></ion-icon> Cuidador</a>
    </div>

    <footer>
        <!-- Contenido del footer -->
    </footer>
</body>
</html>