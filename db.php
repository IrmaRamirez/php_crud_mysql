<?php

// Generar sesiones para guardar datos de la sesión de ingreso de datos
session_start();

// Realizar coneccion entre la base de datos xampp - mysql y el proyecto
$conn = mysqli_connect(
    'localhost',        // Host
    'root',             // User
    '',                 // password
    'php_mysql_crud'    // nombre de la base de datos
);

// Si la conección es correcta:
if (isset($conn)){
    echo 'DB is connected, pero hay que asegurar de abrir Xampp y ejecutar el módulo MySQL';
}
?>