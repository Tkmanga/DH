<?php

session_start();
require_once 'controladores/helpers.php';
require_once 'controladores/controladorValidacion.php';
require_once 'controladores/controladorUsuario.php';

$erroresRegistro = "";

if($_POST) {
    $erroresRegistro = validarFormulario($_POST);
    if(count($erroresRegistro) == 0) {
        // Guardar en base de datos un array transformado a JSON
        $elUsuario = armarArrayUsuario($_POST);
        $elUsuario = json_encode($elUsuario);
        file_put_contents('usuarios.json', $elUsuario . PHP_EOL, FILE_APPEND);
        header("Location: login.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require_once 'partials/header.php' ?>
    <main>
    <h1>Registro</h1>
    <form method="post" action="">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <!-- (CONDICION) ? A : B -->
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?= persistirDato($erroresRegistro, 'nombre') ?>">
            <small class="text-danger"><?= isset($erroresRegistro['nombre']) ? $erroresRegistro['nombre'] : "" ?></small>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= persistirDato($erroresRegistro, 'email') ?>">
            <small class="text-danger"><?= isset($erroresRegistro['email']) ? $erroresRegistro['email'] : "" ?></small>
        </div>
        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password">
            <small class="text-danger"><?= isset($erroresRegistro['password']) ? $erroresRegistro['password'] : "" ?></small>
        </div>
        <div class="form-group">
            <label for="repassword">Repetir contraseña</label>
            <input type="password" class="form-control" id="repassword" name="repassword">
            <small class="text-danger"><?= isset($erroresRegistro['repassword']) ? $erroresRegistro['repassword'] : "" ?></small>
        </div>
        <!-- <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
            </div>
        </div> -->
        <button type="submit" class="btn btn-primary">Registrarse</button>
    </form>
    </main>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
