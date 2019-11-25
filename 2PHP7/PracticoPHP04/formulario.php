<?php
  $errores=[];
  $nombre= "";
  $email = "";
  echo $numero;
  if ($_POST)
  {
    if (isset($_POST["nombre"]))
    {
      if(empty($_POST["nombre"]))
      {
        $errores["nombre"]="esta vacio";
      }
      elseif(empty($_POST["nombre"]) || strlen($_POST["nombre"])<=3)
      {
        $errores["nombre"]="le falta ";
      }
      else
      {
        $nombre=$_POST["nombre"];
      }
    }
    if (isset($_POST["email"]))
    {
      if(empty($_POST["email"]))
      {
        $errores["email"]="tenes que llenar este campo";
      }
      elseif (!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL))
      {
        $errores["email"] = "Este no es un email valido";
      }
      else
      {
        $email = $_POST["email"];
      }
    }
  }

  if(count($errores)==0){
    header("location:felicitaciones.php");
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="formulario.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="<?=$nombre?>">
        <small><?= (isset($errores['nombre'])) ? $errores['nombre'] : "" ?></small>
        <br>
        <label for="email">E-mail:</label>
        <input type="text" name="email" value="<?= $email  ?>">
        <br>
        <small><?= (isset($errores['email'])) ? $errores['email'] : "" ?></small>
        <input type="submit" value="submit">
    </form>
  </body>
</html>
