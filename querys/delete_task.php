<?php 
include ("../database/db_connect.php");
if(isset($_GET["id"])){
    $id=$_GET['id'];
    $query = "DELETE FROM task WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("QUERY FAILED");
    }
    $_SESSION['message'] = 'Task Removed Successfully';
    $_SESSION['message_type'] = 'danger';
    header("Location: ../index.php");
}
?>