<?php
include_once('../config/config.php');
include('patient.php');

if (isset($_POST) && !empty($_POST)){
    $patient = new patient ();

    //if ($_FILES['imagen']['name'] !== ''){
    //    $_POST['imagen'] = saveImage($_FILES);
    //  }
    $save = $patient->save($_POST);
    if ($save){
        $message = '<div class="alert alert-success" role="alert"> Contacto creado correctamente </div>';
    } else{
        $message = '<div class="alert alert-danger" role="alert" > Error al crear contacto </div>';
    }       
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Registrar Contacto</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
    <?php include('../menu.php') ?>
<?php
    if (isset($message)){
        echo $message;
    }
?>
        <div class="container" >
            <h2 class="text-center mb-2" > Informacion del Contacto </h2>
            <form method="POST" enctype="multipart/form-data" >
                <div class="row mb-2" >
                    <div class="col">
                        <input type="text" name="nombres" id="nombres" placeholder="Nombres del paciente" class="form-control" />
                    </div>
                    <div class="col" >
                        <input type="text" name="tipo_de_documento" id="tipo_de_documento" placeholder="Tipo de documento" class="form-control" />
                    </div>
                </div>
                <div class="row mb-2" >
                    <div class="col" >
                        <input type="vartin" name="numero_de_documento" id="numero_de_documento" placeholder="Numero de documento" class="form-control" />
                    </div>
                    <div class="col" >
                        <input type="vartin" name="telefono" id="telefono" placeholder="Numero telefonico" class="form-control" />
                    </div>
                </div>
                <div class="row mb-2" >
                    <div class="col" >
                        <input type="email" name="correo" id="correo" placeholder="Correo electronico" class="form-control" />
                    </div>
                    <div class="col" >
                        <input type="datetime-local" name="fecha" id="fecha" class="form-control" />
                    </div>
                </div>
                <div class="row mb-2" >
                    <div class="col" >
                        <textarea id="motivo_de_contacto" name="motivo_de_contacto" placeholder="Motivo de contacto" class="form-control" >
                        </textarea>
                    </div>
                </div>
                <button class="btn btn-success"> Enviar </button>
            </form>
    </body>
</html>    
