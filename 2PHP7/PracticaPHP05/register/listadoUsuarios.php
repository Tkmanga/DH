<!DOCTYPE html>
<?php
$base = file_get_contents("json/usuarios.json");
$datos = json_decode($base,true);
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php foreach ($datos as $key): ?>
      <h1><a href="perfil.php?email=<?=$key["email"] ?>"><?= $key["nombre"] ?></a></h1><br>
    <?php endforeach; ?>
  </body>
</html>
