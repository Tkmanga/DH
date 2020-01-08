<?php
/**
 *
 */
class Platinum extends Cuenta
{

  function __construct(argument)
  {
    // code...
  }

  public function debitar($valor, $origen)
  {
    $actual = parent::getBalance();
    if (!($actual>=5000)) {
      switch ($origen) {
        case 'cajeroBanelco':
          $valor += ($valor*0.05);
          $actual -= $valor;
          break;
        case 'cajeroLink':
          $valor += ($valor*0,05);
          $actual -= $valor;
          break;
        case 'caja';
          $valor += ($valor*0,05);
          $actual -= $valor;
          break;
        default:
          // code...
          break;
      }
    }

    function setBalance($actual);

}

function acreditar($valor,$origen);

}
 ?>
