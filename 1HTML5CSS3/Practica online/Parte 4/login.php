<!DOCTYPE html>
<?php

session_start();
require_once 'controladores/helpers.php';
require_once 'controladores/controladorValidacion.php';
require_once 'controladores/controladorUsuario.php';

pre($_SESSION);
pre($_COOKIE);

$erroresLogin = "";
// antes de siquiera enviarle la solicitud de validacion primero validamos DE ESTE lado si hubo POST
if($_POST) {
    $erroresLogin = validarFormulario($_POST);
    if(count($erroresLogin) == 0) {
        $usuariosGuardados = file_get_contents('usuarios.json');
        $usuariosGuardados = explode(PHP_EOL, $usuariosGuardados);
        array_pop($usuariosGuardados);
        foreach($usuariosGuardados as $usuario) {
            $usuarioFinal = json_decode($usuario, true);
            if($usuarioFinal['email'] == $_POST['email']) {
                if( password_verify($_POST['password'], $usuarioFinal['password']) ) {
                  // Una vez que validamos que el usuario existe en la base de datos, creamos una session en el momento que
                  // guarde los datos del lado del servidor
                    $_SESSION['emailUsuario'] = $usuarioFinal['email'];
                    //configuracion para saber si el usuario quiere que la pag lo recuerde creamos una cookie con timer y datos del lado del servidor nuevamente
                    if(isset($_POST['recordarme']) && $_POST['recordarme'] == 'on') {
                        // time() -----> Unix time son los segundos que pasaron desde el 1ro de enero de 1970 
                        setcookie('emailUsuario', $usuarioFinal['email'], time() + 60 * 60 * 24 * 7);
                        setcookie('passUsuario', $usuarioFinal['password'], time() + 60 * 60 * 24 * 7);
                    }
                    header("Location: bienvenido.php");
                }
            }
        }
    }
}

?>
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
    <!-- Traigo el header desde la carpeta partials  -->
    <?php require_once 'partials/header.php' ?>
    <main>
    <h1>Login</h1>
    <form method="post" action="">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= persistirDato($erroresLogin, 'email') ?>">
            <small class="text-danger"><?= isset($erroresLogin['email']) ? $erroresLogin['email'] : "" ?></small>
        </div>
        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password">
            <small class="text-danger"><?= isset($erroresLogin['password']) ? $erroresLogin['password'] : "" ?></small>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="recordarme" name="recordarme">
                <label class="form-check-label" for="gridCheck">Recordarme como usuario</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>
    </main>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
