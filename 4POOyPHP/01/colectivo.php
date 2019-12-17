<?php
class Colectivo {

  public static $precios = [0.25,0.50,0.75];
  public static function getPrecios($distancia){
    if($distancia <3){
      return self::$precios[0];

    }elseif ($distancia<7) {
      return self::$precios[1];
    }else {
      return self::$precios[2];
      //Puede ser tambien return Colectivo pero para evitar norbrarlo todo el tiempo se usa self
    }

  }
}
 ?>
