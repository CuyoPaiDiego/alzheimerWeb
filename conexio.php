<?php
$server = '159.54.132.73';
$username = 'User';
$password = '';
$database = 'pastillero';

$db = mysqli_connect($server, $username, $password, $database);
//$db = mysqli_connect('localhost:3306', 'root','pastillero_db');

// Comprobacion de conexión satisfactoria o no
try{
    $con = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
    die('Conexion fallida: '. $e->getMessage());

}

// Codificación de caracteres a uft8
//mysqli_query($db, "SET NAMES 'utf8");

?>