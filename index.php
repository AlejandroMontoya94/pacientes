<?php 
include('config/config.php');

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Contacto</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar nabvar-expand navbar-dark bg-dark mb-5">
        <ul class='navbar-nav'>
            <li class="nav-item" >
                <a class="nav-link" href="#" > Ver contactos </a>
            </li>
            <li class="nav-item" >
                <a class="nav-link" href="<?= ROOT ?>Pacientes/add.php" > Registrar paciente </a>
            </li>
            <li class="nav-item" >
                <a class="nav-link" href="<?= ROOT ?>Pacientes/edit.php" > Editar paciente </a>
            </li>
        </ul>
        </nav>
        <div class="container" >
            <h1 class="text-center" > Contacto </h1>
        </div>
    </body>
</html>
