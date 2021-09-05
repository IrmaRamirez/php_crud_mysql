<!-- Invocar el código php para realizar la conección con la Base de Datos en MySQL -->
<?php include("db.php") ?>

<!--  Una porcion del código se lleva a otro archivo (Header.php) las etiquetas include invocaran el Fragmento de código de esos archivos para insertarlos reemplazando las etiquetas que los invocan . -->
<?php include("includes/header.php") ?>

<!-- Aporte de este archivo al proyecto -->
<div>
    <a href="https://youtu.be/pn2v9lPakHQ?t=719">
        <h1>Pendiente</h1>
    </a> 
</div>

<div class = "container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <form action="">
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

        </div>
    </div>
</div>


<!-- Invocación del código php-html que se encuentra en el archivo footer.php, correspondiente con el final del código. -->
<?php include("includes/footer.php") ?>