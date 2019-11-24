

<?php
  if ($_FILES) {
      if ($_FILES["cv"]["error"]!=0) {
        echo "hubo un error al cargar el cv";
      }else {
          $ext = pathinfo($_FILES["cv"]["name"], PATHINFO_EXTENSION);
          if ($ext !="pdf" && $ext != "doc" && $ext !="docx") {
            echo "no admitimos esa extension de archivo para el cv";
          }else {
            move_uploaded_file($_FILES["cv"]["tmp_name"],"archivos/cv.".$ext);
          }
      }
      if ($_FILES["imagen"]["error"]!=0) {
          echo "hubo un error al cargar la imagen";
      }else {
          $ext = pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION);
          if ($ext !="jpg" && $ext != "jpeg" && $ext !="png") {
            echo "no admitimos esa extension de archivo para la imagen";
          }else {
            move_uploaded_file($_FILES["imagen"]["tmp_name"],"archivos/imagen.".$ext);
          }
      }
  }

public function FunctionName($value='')
{
  if(strlen($_POST["password"])==0&&strlen($_POST["confirmar"])==0)
 {
   return "Los dos campos de contraseña estan vacios";
 }
   if(strlen($_POST["password"])==0&&strlen($_POST["confirmar"])>=1)
 {
   return "La contraseña esta vacia";
 }
  if(strlen($_POST["password"])>=1&&strlen($_POST["confirmar"])==0)
 {
   return "Falta la confirmacion de la contraseña";
 }
   if($_POST["password"]!=$_POST["confirmar"])
 {
   return "Las contraseñas no verifican";
 }
   return "Correcto"; 
}
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <form class="" action="inicio.php" method="post" enctype="multipart/form-data">
        <div class="">
          <label for="">CV</label>
          <br>
          <input type="file" name="cv" value="">
        </div>
        <div class="">
          <label for="">Imagen</label>
          <br>
          <input type="file" name="imagen" value="">
        </div>
        <br>
        <input type="submit" name="" value="Enviar">
      </form>
  </body>
</html>
