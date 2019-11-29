
<?php

function guardarUsuario($usuarioNuevo){
  $base = file_get_contents("../json/usuarios.json");
  $datos = json_decode($base,true);
  $datos[] = $usuarioNuevo;
  $jsonFinal = json_encode($datos);
  file_put_contents("../json/usuarios.json",$jsonFinal.PHP_EOL);
}
 ?>
