<?php
function saludar () {
  echo "hola mundo <br>";
}
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <?php echo "ANTES <br>";
            saludar();
            echo "despues <br>";
     ?>
   </body>
 </html>
