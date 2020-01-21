<?php
include_once("cuenta.php");
/**
 *
 */
class Platinum extends Cuenta implements Imprimible
{

  function __construct($cbu,$balance,$ultimoMovimiento)
  {
    parent::setCBU($cbu);
    parent::setBalance($balance);
    parent::setUltimoMovimiento($ultimoMovimiento);
  }

  public function debitar($valor, $origen){
    $actual = parent::getBalance();
    if (!($actual>=5000)){
      switch ($origen) {
        case 'cajeroBanelco':
          $valor = $valor-($valor*0.05);
          $actual -= $valor;
          self::registrar($actual,$origen);
          break;
        case 'cajeroLink':
          $valor = $valor-($valor*0.05);
          $actual -= $valor;
          self::registrar($actual,$origen);
          break;
        case 'caja';
          $valor = $valor-($valor*0.05);
          $actual -= $valor;
          self::registrar($actual,$origen);
          break;
        default:
          // code...
          break;
      }
    }else{
      self::registrar($valor,$origen);
    }

   }

   private function registrar($dinero,$origen){
     parent::setBalance($dinero);
     $var = recorder($origen);
     parent::setUltimoMovimiento($var);
   }

   public function saldoEnviar($valor,$origen)
   {
     parent::acreditar($valor,$origen);
   }
   public function mostrar()
   {
     return $this->getBalance();
   }

}
 ?>
