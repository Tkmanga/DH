<!DOCTYPE html>
<?php
$nombre="";
$email="";
$nombreUsuario="";
$password="";

if ($_GET) {
  $base = file_get_contents("json/usuarios.json");
  $datos = json_decode($base,true);
  foreach ($datos as $key) {
    if ($key["email"]==$_GET["email"]) {
      $nombre=$key["nombre"];
      $email=$key["email"];
      $nombreUsuario=$key["userName"];
      $avatarUsuario=$key["dirImagen"];
    }
  }
}

 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form id='register'  method='get'>
        <fieldset >
            <legend>Perfil del usuario </legend>

            <div class='container'>
                <label for='name' >Nombre completo: </label><br/>
                <input type='text' name='name' id='name' value="<?=$nombre ?>" maxlength="50"/><br/>
            </div>

            <div class='container'>
                <label for='email' >Email:</label><br/>
                <input type='text' name='email' id='email' maxlength="50"  value="<?=$email ?>" /><br/>
            </div>

            <div class='container'>
                <label for='username' >Nombre de usuario:</label><br/>
                <input type='text' name='username' id='username' maxlength="50"  value="<?=$nombreUsuario ?>"/><br/>
            </div>

            <div class="container">
              <br>
              <img src="imgUsuarios/<?=$avatarUsuario?>" alt="avatar del usuario" width="100px">
            </div>
        </fieldset>
    </form>
  </body>
</html>
