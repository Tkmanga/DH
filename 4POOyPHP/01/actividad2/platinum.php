<?php
include_once("cuenta.php");
/**
 *
 */
class Platinum extends Cuenta
{

  function __construct($cbu,$balance,$ultimoMovimiento)
  {
    parent::setCBU($cbu);
    parent::setBalance($balance);
    parent::setUltimoMovimiento($ultimoMovimiento);
  }

  public function debitar($valor, $origen)
  {
    $actual = parent::getBalance();
    if (!($actual>=5000)){
      switch ($origen) {
        case 'cajeroBanelco':
          $valor = $valor-($valor*0.05);
          $actual -= $valor;
          break;
        case 'cajeroLink':
          $valor = $valor-($valor*0.05);
          $actual -= $valor;
          break;
        case 'caja';
          $valor = $valor-($valor*0.05);
          $actual -= $valor;
          break;
        default:
          // code...
          break;
      }
    };
     setBalance($actual);
    $var = recorder($origen);
     setUltimoMovimiento($var);
   }

   public function acreditarSaldo($valor,$origen)
   {
     acreditar($valor,$origen);
   }
}
 ?>
