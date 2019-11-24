<!DOCTYPE html>
<?php

  echo "soy incluir.php ";
  include_once("saludo.php");

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!--
    Generar un archivo llamado incluir.php que retorne un echo con el siguiente string “Soy incluir.php”.
    Incluir en incluir.php  el archivo saludo.php (el cual aún no existe). ¿Qué sucede? ¿Tira algún error?
    Reemplazar el include por require. ¿Qué sucede?
    Generar en la misma carpeta un archivo saludo.php que solamente haga echo “Hola mundo”. ¿Qué sucede ahora con el punto a y el punto b?
    En el archivo incluir.php reemplazar el require por include, e incluir 3 veces el mismo archivo. ¿Qué sucede?
    En el archivo incluir.php reemplazar todos los include por include_once. ¿Qué sucede?
   -->
  </body>
</html>
