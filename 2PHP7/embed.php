<!DOCTYPE html>
<?php
  $nombre="Jose";
  $numeroAzar = rand(0,1);
  $lista=[
    "Google" => "https://google.com",
    "Facebook" => "https://facebook.com",
    "Twitter" => "https://twitter.com",
  ];
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>La Internet</h1>
    <marquee>Bienvenidos al mundo de la internet</marquee>
    <h2>Bienvenido <?php echo $nombre; ?></h2>


    <h3>¿Es usted un ganador?</h3>

    <?php if ($numeroAzar==1) {?>
      <h2>Si</h2>
    <?php }else{ ?>
      <h2>No</h2>
    <?php }; ?>
    <h3>Algunos sitios interesantes:</h3>
    <ul>
      <?php foreach ($lista as $key => $value) {?>
        <li>
          <a href=<?php echo $value ?>><?php echo $key ?></a>
        </li>
      <?php }; ?>
    </ul>
  </body>
</html>
