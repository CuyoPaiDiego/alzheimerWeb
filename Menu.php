<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfiles</title>
</head>
<body>
    <?php
    // Definir perfiles de ejemplo
    $administrativos = array(
        array('nombre' => 'Administrativo 1', 'edad' => 30, 'rol' => 'Administrativo'),
        array('nombre' => 'Administrativo 2', 'edad' => 35, 'rol' => 'Administrativo'),
        // Agrega más administrativos si lo deseas
    );

    $pacientes = array(
        array('nombre' => 'Paciente 1', 'edad' => 50, 'rol' => 'Paciente'),
        array('nombre' => 'Paciente 2', 'edad' => 65, 'rol' => 'Paciente'),
        // Agrega más pacientes si lo deseas
    );

    $cuidadores = array(
        array('nombre' => 'Cuidador 1', 'edad' => 25, 'rol' => 'Cuidador'),
        array('nombre' => 'Cuidador 2', 'edad' => 40, 'rol' => 'Cuidador'),
        // Agrega más cuidadores si lo deseas
    );

    // Función para mostrar perfiles
    function mostrarPerfiles($perfiles) {
        echo '<ul>';
        foreach ($perfiles as $perfil) {
            echo '<li>';
            echo 'Nombre: ' . $perfil['nombre'] . ', ';
            echo 'Edad: ' . $perfil['edad'] . ', ';
            echo 'Rol: ' . $perfil['rol'];
            echo '</li>';
        }
        echo '</ul>';
    }

    // Mostrar enlaces para navegar entre perfiles
    echo '<h2>Perfiles de Administrativos</h2>';
    mostrarPerfiles($administrativos);

    echo '<h2>Perfiles de Pacientes</h2>';
    mostrarPerfiles($pacientes);

    echo '<h2>Perfiles de Cuidadores</h2>';
    mostrarPerfiles($cuidadores);
    ?>

</body>
</html>
