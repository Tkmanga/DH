<?php
/**
 *
 */


class Gold extends Cuenta
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
    switch ($origen) {
      case 'cajeroBanelco':
        $actual -= $valor;
        break;
      case 'cajeroLink':
        $valor += ($valor*0.05);
        break;
      case 'caja';
        $actual -= $valor;
        break;
      default:
        // code...
        break;
    }

     parent::setBalance($actual);

    $var = recorder($origen);
     parent::setUltimoMovimiento($var);
   }

public function saldoEnviar($valor, $origen )
{
  if (!($valor>=25000)) {

    $valor = $valor - ($valor*0.03);
     parent::acreditar($valor, $origen);
  }else{
    parent::acreditar($valor,$origen);
  }
}


}
 ?>
