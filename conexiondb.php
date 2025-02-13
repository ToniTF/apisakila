<?php
include_once("config.php");// incluye el archivo de configuración si no se ha incluido antes
$host = HOST; // o la IP de tu servidor MySQL
$user = DB_USER;
$password = DB_PASS;
$database = DB_DATABASE;

    // Crear la conexión con PDO
    $conexion = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    // Establecer el modo de error de PDO a excepción
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conexión exitosa";


?>