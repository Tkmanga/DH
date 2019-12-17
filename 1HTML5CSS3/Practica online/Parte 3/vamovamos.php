<!DOCTYPE html>
<?php
$user = [
  'nombre' => 'Alejandra',
  'apellido' => 'Gonzales',
  'edad' => 27,
  'hobbies' => ['cine','correr','leer','cocinar']
];

$users = [

[
  'nombre' => 'Alejandra',
  'apellido' => 'Gonzales',
  'edad' => 27,
  'hobbies' => ['cine','correr','leer','cocinar']
],
[
  'nombre' => 'Bart',
  'apellido' => 'Simpson',
  'edad' => 27,
  'hobbies' => ['cine']
],
[
  'nombre' => 'Geronimo',
  'apellido' => 'Paleta',
  'edad' => 27,
  'hobbies' => ['correr']
],
[
  'nombre' => 'Xin',
  'apellido' => 'Xan',
  'edad' => 27,
  'hobbies' => ['cocinar']
],
];
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Usuarios: </h2>
    <hr>
    <h3>nombreUsuario apellidoUusario (edadUsuario)</h3>
    <h4><?= $user['nombre'] . ' ' . $user['apellido'] . ' (' . $user['edad']. ')'  ?></h4>
    <ul>
      <?php foreach ($user['hobbies'] as $datos): ?>
        <li><?= $datos ?></li>
      <?php endforeach; ?>
    </ul>
    <hr>
    <h2>Usuarios:</h2>
    <?php foreach ($users as $user): ?>
      <h4><?= $user['nombre'] . ' ' . $user['apellido'] . ' (' . $user['edad']. ')'  ?></h4>
      <span>Sus hobbies son: </span>
      <ul>
        <?php foreach ($user['hobbies'] as $dato): ?>
          <li><?= $dato ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endforeach; ?>
  </body>
</html>
