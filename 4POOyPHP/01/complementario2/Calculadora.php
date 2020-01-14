<?php
include_once("Suma.php");

include_once("Resta.php");

include_once("Multiplicacion.php");

include_once("Division.php");
/**
 *
 */
class Calculadoras
{
  private $operacion;
  private $num1;
  private $num2;
  public $objetOperacion;
  const $suma = '+';
  const $resta = '-';
  const $multiplicacion = '*';
  const $division = '/';
  function __construct($operacionU, $num1U,$num2U)
  {
    self::setOperacion($operacionU);
    self::setNum1($num1U);
    self::setNum2($num2U);

  }
  public function makeOperacion($operacion)
  {

    if ($operacion==$suma) {
      $objetOperacion = new Suma($num1,$num2);
    }elseif ($operacion==$resta) {
      $objetOperacion = new Resta($num1,$num2);
    }elseif ($operacion==$multiplicacion) {
      $objetOperacion = new Multiplicacion($num1,$num2);
    }elseif ($operacion==$division) {
      $objetOperacion = new Division($num1,$num2); 

    }
  }
    /**
     * Set the value of Num
     *
     * @param mixed $num1
     *
     * @return self
     */
    public function setNum1($num1)
    {
        $this->num1 = $num1;

        return $this;
    }

    /**
     * Set the value of Num
     *
     * @param mixed $num2
     *
     * @return self
     */
    public function setNum2($num2)
    {
        $this->num2 = $num2;

        return $this;
    }


    /**
     * Set the value of Operacion
     *
     * @param mixed $operacion
     *
     * @return self
     */
    public function setOperacion($operacion)
    {
        $this->operacion = $operacion;

        return $this;
    }

}

 ?>
