<!DOCTYPE html>
<?php
function validarPass()
{
  if(strlen($_POST["password"])==0&&strlen($_POST["confirmar"])==0)
{
  return "Los dos campos de contraseña estan vacios";
}
  if(strlen($_POST["password"])==0&&strlen($_POST["confirmar"])>=1)
{
  return "La contraseña esta vacia";
}
 if(strlen($_POST["password"])>=1 && strlen($_POST["confirmar"])==0)
{
  return "Falta la confirmar de la contraseña";
}
  if($_POST["password"]!=$_POST["confirmar"])
{
  return "Las contraseñas no verifican";
}
  return "Correcto";

}
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form  action="prueba.php" method="post">
      <label for="password">Contraseña:</label>
      <br>
      <input type="text" name="password">
      <br>
      <label for="password">confirmacion:</label>
      <br>
      <input type="text" name="confirmacion">
      <br>
      <input type="submit" value="submit">
    </form>
    <?= validarPass() ?>
  </body>
</html>
