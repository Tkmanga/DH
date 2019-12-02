<?php
session_start();
$_SESSION["contador"];
$aux=0;
if ($_POST) {
  if (isset($_POST["reiniciar"])) {
    $_SESSION["contador"]=$aux;
  }
  if (isset($_POST["incrementar"])) {
    $aux = $_SESSION["contador"];
    $aux = $aux+1;
    $_SESSION["contador"]=$aux;
  }
}
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="modificar.php" method="post">
      <input type="submit" name="reiniciar" value="reiniciar">
      <input type="submit" name="incrementar" value="incrementar">
    </form>
  </body>
</html>
