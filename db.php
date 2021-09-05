<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'php_mysql_crud'
);

if (isset($conn))
{
    echo 'DB is connected, pero hay que asegurar de abrir Xampp y ejecutar el módulo MySQL';
}
?>