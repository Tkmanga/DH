<!DOCTYPE html>
<?php

//var_dump($_GET);
//var_dump($_GET["nombre"]);

 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php foreach (getallheaders() as $key => $value) {
      echo $key.": ".$value."<br>";
    };
    ;
    ?>
    <?php foreach ($_POST as $key => $value) {
      echo $key.": ".$value."<br>";
    };
    ;
    ?>
  </body>
</html>
