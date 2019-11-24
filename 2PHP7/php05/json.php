<!DOCTYPE html>
<?php
  $autos = [
    0 => [
      "marca" => "toyota",
      "modelo" => "corolla",
      "patente" => "adb124",
    ],

    1 => [
      "marca" => "renault",
      "modelo" => "sandero",
      "patente" => "123gbv",
      ],

    2 => [
      "marca" => "ford",
      "modelo" => "fiesta",
      "patente" => "157634",
    ]
  ];

  $json = json_encode($autos);
  file_put_contents("autos.json",$json);

  //recuperando archivos de la base de datos
  $archivos = file_get_contents("autos.json");
  //como nos devolvio objetos lo pasamos array
  $auto = json_decode($archivos,true);
  //lo visualisamos
  //var_dump($auto);
  $auto[] = [
"marca"=> "lala",

"modelo"=> "lelele",
"patente"=> "123asd",
  ];
  $jsonFinal = json_encode($auto);
  file_put_contents("autos.json",$jsonFinal);
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
