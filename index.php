<!-- Invocar el código php para realizar la conección con la Base de Datos en MySQL -->
<?php include("database/db_connect.php") ?>

<!--  Una porcion del código se lleva a otro archivo (Header.php) las etiquetas include invocaran el Fragmento de código de esos archivos para insertarlos reemplazando las etiquetas que los invocan . -->
<?php include("includes/header.php") ?>

<!-- Aporte de este archivo al proyecto -->
<div>
    <a href="https://youtu.be/pn2v9lPakHQ?t=719">
        <h1>Pendiente</h1>
    </a>
</div>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">

            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="close" data-dismiss="alert alert-danger" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php session_unset();
            } ?>

            <div class="card card-body">
                <form action="querys/save_task.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Task Title" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="2" class="form-control" placeholder="Task Description"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="save_task" value="Save Task">
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <!-- Hacer una Consulta para rellenar la Tabla: -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM task";
                    $result_tasks = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($result_tasks)) { ?>
                        <tr>
                            <td><?php echo $row['title'] ?></td>
                            <td><?php echo $row['description'] ?></td>
                            <td><?php echo $row['created_at'] ?></td>
                            <td>
                                <a href="querys/edit_task.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">
                                    <i class="fas fa-marker"></i>
                                    <!-- Edits -->
                                </a>
                                <a href="querys/delete_task.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
                                    <!-- Delete -->
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Invocación del código php-html que se encuentra en el archivo footer.php, correspondiente con el final del código. -->
<?php include("includes/footer.php") ?>