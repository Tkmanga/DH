<!DOCTYPE html>
<?php
  if($_POST){
    
  };
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="imprimir.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre">
        <br>
        <label for="email">E-mail:</label>
        <input type="text" name="email">
        <br>
        <input type="submit" value="submit">
    </form>
  </body>
</html>
