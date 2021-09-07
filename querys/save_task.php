 <!-- Al presionar el botón de enviar pasará todo esto: -->
<?php
include("../database/db_connect.php");
if (isset($_POST['save_task'])) {
    echo 'saving';
    // Variables de la Base de Datos:
    $title = $_POST['title'];
    $description = $_POST['description'];

    echo $title;
    echo $description;

    // QUERY: Insertar nuevo elemento a la Base de Datos.
    $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')";
    $result = mysqli_query($conn, $query);
    // Confirmación de nuevo elemento ingresado a la Base de Datos.
    if (!$result) {
        die("Query Failed");
    }

    // Manejo de Sesiones para el ingreso de Datos al Formulario Previo a la Base de Datos.
    $_SESSION['message'] = 'Task Saved SuCceSfuLly';

    // Definir el color de la ventana de mensaje que aparece cuando se ha presionado el botón de guardar:
    // - success: verde
    // - danger: rojo
    // - alert : amarillo
    $_SESSION['message_type'] = 'success';

    // Al terminar de ejecutarse el botón de enviar, se cargará nuevamente la ventana de "index.php"
    header("Location: ../index.php");
}